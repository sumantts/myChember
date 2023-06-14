function configureGroupName(){
    $.ajax({
        method: "POST",
        url: "master/group_master/function.php",
        data: { fn: "configureGroupName" }
    })
    .done(function( res ) {
        $res1 = JSON.parse(res);
        //console.log(JSON.stringify($res1));
        if($res1.status == true){
            $groupData = $res1.data;
            $('#group_category').html('');
            $option_string = "<option value='0'>Select Group Name</option>";
            for($i = 0; $i < $groupData.length; $i++){
                $option_string += "<option value='"+$groupData[$i].gc_id+"'>"+$groupData[$i].group_category+"</option>";
            }
            $('#group_category').html($option_string);
        }
        
    });//end ajax
}//end

$('#group_category').on('change', function(){
    $group_category = $('#group_category').val();

    $.ajax({
        method: "POST",
        url: "master/group_master/function.php",
        data: { fn: "configureGroupCategory", group_category: $group_category }
    })
    .done(function( res ) {
        $res1 = JSON.parse(res);
        //console.log(JSON.stringify($res1));
        if($res1.status == true){
            $groupCatData = $res1.data;
            $('#group_sub_category').html('');
            $option_string = "<option value='0'>Select Group Name</option>";
            for($i = 0; $i < $groupCatData.length; $i++){
                $option_string += "<option value='"+$groupCatData[$i].gc_id+"'>"+$groupCatData[$i].group_sub_category+"</option>";
            }
            $('#group_sub_category').html($option_string);
        }
        
    });//end ajax

});//end fun

function validateForm(){
    $group_category = $('#group_category').val().replace(/^\s+|\s+$/gm,'');
    $group_sub_category = $('#group_sub_category').val().replace(/^\s+|\s+$/gm,'');
    $status = true;

    if($group_category == '0'){
        $status = false;
        $('#group_category').removeClass('is-valid');
        $('#group_category').addClass('is-invalid');
    }else{
        $status = true;
        $('#group_category').removeClass('is-invalid');
        $('#group_category').addClass('is-valid');
    }

    if($group_sub_category == '0'){
        $status = false;
        $('#group_sub_category').removeClass('is-valid');
        $('#group_sub_category').addClass('is-invalid');
    }else{
        $status = true;
        $('#group_sub_category').removeClass('is-invalid');
        $('#group_sub_category').addClass('is-valid');
    }    

    $('#submitForm_spinner').hide();
    $('#submitForm_spinner_text').hide();
    $('#submitForm_text').show();

    return $status;
}//en validate form

function clearForm(){
    $('#group_category').val('');
    $('#group_category').removeClass('is-valid');
    $('#group_category').removeClass('is-invalid');

    $('#group_sub_category').val('');
    $('#group_sub_category').removeClass('is-valid');
    $('#group_sub_category').removeClass('is-invalid');
    $('#service_id').val('0');

}//end 

$(".form-control").blur(function(){
    $('#orgFormAlert').css("display", "none");
    $formVallidStatus = validateForm();
});

$('#submitForm').click(function(){
    $('#submitForm_spinner').show();
    $('#submitForm_spinner_text').show();
    $('#submitForm_text').hide();
    setTimeout(function(){
        $formVallidStatus = validateForm();

        if($formVallidStatus == true){
            $.ajax({
                method: "POST",
                url: "master/group_master/function.php",
                data: { fn: "getGroupMasterTable", group_category: $group_category, group_sub_category: $group_sub_category }
            })
            .done(function( res ) {
                //console.log(res);
                $res1 = JSON.parse(res);
                if($res1.status == true){
                    $('#orgFormAlert1').css("display", "block");
                    $('.toast-right').toast('show');
                    //$('#liveToast').toast('show');
                    clearForm();
                    $('#exampleModalLong').modal('hide');
                    $gc_id = '4';
                    populateDataTable($gc_id);
                }else{
                    
                }
            });//end ajax
        }

    }, 500)    
})

function editService($service_id){
    $('#exampleModalLong').modal('show');
    $.ajax({
        method: "POST",
        url: "setup/services/function.php",
        data: { fn: "getServiceData", service_id: $service_id }
    })
    .done(function( res ) {
        //console.log(res);
        $res1 = JSON.parse(res);
        if($res1.status == true){
            $('#serviceName').val($res1.name);
            $('#serviceDescription').val($res1.description);
            $('#service_id').val($service_id);
        }
    });//end ajax

}

//Delete function	
function deleteService($service_id){
    if (confirm('Are you sure to delete the Service?')) {
        $.ajax({
            method: "POST",
            url: "master/group_master/function.php",
            data: { fn: "deleteService", service_id: $service_id }
        })
        .done(function( res ) {
            //console.log(res);
            $res1 = JSON.parse(res);
            if($res1.status == true){
                $('#orgFormAlert').show();
                populateDataTable();
            }
        });//end ajax
    }		
}//end delete


function populateDataTable($gc_id){
    $('#example').dataTable().fnClearTable();
    $('#example').dataTable().fnDestroy();

    $('#example').DataTable({ 
        responsive: true,
        serverMethod: 'GET',
        ajax: {'url': 'master/group_master/function.php?fn=getGroupmasterTable&gc_id='+$gc_id },
        dom: 'Bfrtip',
        buttons: [
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o"></i>',
                titleAttr: 'PDF'
            },
            {
                extend: 'print',
                text: '<i class="fa fa-print"></i>',
                titleAttr: 'Print'
            },
        ],
        order: [[0, 'asc']],

    });
}//end fun

$(document).ready(function () {
    $gc_id = '4';
    populateDataTable($gc_id)

    configureGroupName()
});
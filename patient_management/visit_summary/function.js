
$(document).ready(function() {
    $('#centerName').select2();
});

function configureGroupName(){
    $.ajax({
        method: "POST",
        url: "patient_management/visit_summary/function.php",
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
        url: "patient_management/visit_summary/function.php",
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

/*$(".form-control").blur(function(){
    $('#orgFormAlert').css("display", "none");
    $formVallidStatus = validateForm();
});*/



$('#submitForm').click(function(){
    $('#submitForm_spinner').show();
    $('#submitForm_spinner_text').show();
    $('#submitForm_text').hide();
    setTimeout(function(){
        $formVallidStatus = validateForm();

        if($formVallidStatus == true){
            populateDataTable($group_sub_category)
        }

    }, 500)    
})

//Delete function	
//function deleteService($service_id){
$('#example').on('click', '.delete_name', function(){
    if (confirm('Are you sure to delete the Name?')) {
        $gm_id = $(this).data('gm_id');
        $group_sub_category = $('#group_sub_category').val().replace(/^\s+|\s+$/gm,'');
        $('#orgTableAlert').css("display", "none");
        $('#orgTableAlert1').css("display", "none");

        $.ajax({
            method: "POST",
            url: "patient_management/visit_summary/function.php",
            data: { fn: "deleteName", gm_id: $gm_id }
        })
        .done(function( res ) {
            //console.log(res);
            $res1 = JSON.parse(res);
            if($res1.status == true){
                $('#orgTableAlert').show();
                populateDataTable($group_sub_category);
            }
        });//end ajax
    }		
}) 
//}//end delete


function populateDataTable($gc_id){
    $('#example').dataTable().fnClearTable();
    $('#example').dataTable().fnDestroy();

    $('#example').DataTable({ 
        responsive: true,
        serverMethod: 'GET',
        ajax: {'url': 'patient_management/visit_summary/function.php?fn=getGroupmasterTable&gc_id='+$gc_id },
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


//Group Name Add start

function validateFormGr(){
    $option_name = $('#option_name').val().replace(/^\s+|\s+$/gm,'');
    $status = true;

    if($option_name == ''){
        $status = false;
        $('#option_name').removeClass('is-valid');
        $('#option_name').addClass('is-invalid');
    }else{
        $status = true;
        $('#option_name').removeClass('is-invalid');
        $('#option_name').addClass('is-valid');
    } 

    $('#submitForm1_spinner').hide();
    $('#submitForm1_spinner_text').hide();
    $('#submitForm1_text').show();

    return $status;
}//en validate form

function clearFormGr(){
    $('#option_name').val('');
    $('#option_name').removeClass('is-valid');
    $('#option_name').removeClass('is-invalid');
}//end 

$('#submitFormGr').click(function(){
    $('#submitForm1_spinner').show();
    $('#submitForm1_spinner_text').show();
    $('#submitForm1_text').hide();
    setTimeout(function(){
        $grFormVallidStatus = validateFormGr();

        if($grFormVallidStatus == true){
            $group_category = $('#group_category').val().replace(/^\s+|\s+$/gm,'');
            $group_sub_category = $('#group_sub_category').val().replace(/^\s+|\s+$/gm,'');
            $option_name = $('#option_name').val().replace(/^\s+|\s+$/gm,'');
            $('#orgTableAlert').css("display", "none");
            $('#orgTableAlert1').css("display", "none");

            $.ajax({
                method: "POST",
                url: "patient_management/visit_summary/function.php",
                data: { fn: "saveOptionName", group_category: $group_category, group_sub_category: $group_sub_category, option_name: $option_name }
            })
            .done(function( res ) {
                //console.log(res);
                $res1 = JSON.parse(res);
                if($res1.status == true){
                    $('#orgTableAlert1').css("display", "block");
                    $('.toast-right').toast('show');
                    //$('#liveToast').toast('show');
                    clearFormGr();
                    //$('#exampleModalLong').modal('hide');
                    populateDataTable($group_sub_category);
                }else{
                    alert($res1.msg);
                }
            });//end ajax
        }

    }, 500)    
})
//Group Name Add End

$(document).ready(function () {
    //$gc_id = '4';
    //populateDataTable($gc_id)

    configureGroupName()
});
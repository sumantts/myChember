$('#otSchedulingAdd').on('click', function(){
    $('#otSchedulingModal').modal('show');
})

function validateForm(){
    $surgeryDate = $('#surgeryDate').val().replace(/^\s+|\s+$/gm,'');
    $patientID = $('#patientID').val().replace(/^\s+|\s+$/gm,'');
    $patientName = $('#patientName').val().replace(/^\s+|\s+$/gm,'');
    $age = $('#age').val().replace(/^\s+|\s+$/gm,'');
    $gender = $('#gender').val();
    $gender_text = $('#gender option:selected').text();
    $bloodGroup = $('#bloodGroup').val();
    $bloodGroup_text = $('#bloodGroup option:selected').text();
    $hospitalName = $('#hospitalName').val();
    $hospitalName_text = $('#hospitalName option:selected').text();
    $surgeryPlanned = $('#surgeryPlanned').val();
    $surgeryPlanned_text = $('#surgeryPlanned option:selected').text();
    $position = $('#position').val().replace(/^\s+|\s+$/gm,'');
    $surgeryType = $('#surgeryType').val();
    $surgeryType_text = $('#surgeryType option:selected').text();
    $insuranceCovered = $('#insuranceCovered').val();
    $insuranceCovered_text = $('#insuranceCovered option:selected').text();
    $medicalInsurerName = $('#medicalInsurerName').val().replace(/^\s+|\s+$/gm,'');
    $slno = $('#slno').val();
    
    $status = true;

    if($surgeryDate == ''){
        $status = false;
        $('#surgeryDate').removeClass('is-valid');
        $('#surgeryDate').addClass('is-invalid');
    }else{
        $status = true;
        $('#surgeryDate').removeClass('is-invalid');
        $('#surgeryDate').addClass('is-valid');
    }  

    $('#submitForm_spinner').hide();
    $('#submitForm_spinner_text').hide();
    $('#submitForm_text').show();

    return $status;
}//en validate form

function clearForm(){
    $('#surgeryDate').val('');
    $('#surgeryDate').removeClass('is-valid');
    $('#surgeryDate').removeClass('is-invalid');

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
            clearForm()
            $('#otSchedulingModal').modal('hide');

            $action_del = "<a href='javascript: void(0)' class='delete_name' data-row_slno='"+$slno+"'><i class='fa fa-trash' aria-hidden='true'></i></a>";

            var t = $('#otScheduletable').DataTable();
            t.row.add([$slno, $surgeryDate, $patientID+'<br>'+$patientName, $hospitalName, $surgeryPlanned_text, $surgeryType_text, $insuranceCovered_text, $action_del]).draw(false); 
           
            $slno++;
            $('#slno').val($slno);

            /*$service_id = $('#service_id').val();
            $.ajax({
                method: "POST",
                url: "ot_mgt/ot_scheduling/function.php",
                data: { fn: "saveServices", service_id: $service_id, Parameter: $Parameter, serviceDescription: $serviceDescription }
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
                    populateDataTable();
                }else{
                    
                }
            });//end ajax*/
        }

    }, 500)    
})

function editService($service_id){
    $('#exampleModalLong').modal('show');
    $.ajax({
        method: "POST",
        url: "ot_mgt/ot_scheduling/function.php",
        data: { fn: "getServiceData", service_id: $service_id }
    })
    .done(function( res ) {
        //console.log(res);
        $res1 = JSON.parse(res);
        if($res1.status == true){
            $('#Parameter').val($res1.name);
            $('#serviceDescription').val($res1.description);
            $('#service_id').val($service_id);
        }
    });//end ajax

}

//Delete function Medicine table
$('#otScheduletable').on('click', '.delete_name', function(){
    if (confirm('Are you sure to delete the Row?')) {
        var table = $('#otScheduletable').DataTable();

        table
        .row( $(this).parents('tr') )
        .remove()
        .draw();
        

        /*$gm_id = $(this).data('gm_id');
        $group_sub_category = $('#group_sub_category').val().replace(/^\s+|\s+$/gm,'');
        $('#orgTableAlert').css("display", "none");
        $('#orgTableAlert1').css("display", "none");

        $.ajax({
            method: "POST",
            url: "patient_management/investigation/function.php",
            data: { fn: "deleteName", gm_id: $gm_id }
        })
        .done(function( res ) {
            //console.log(res);
            $res1 = JSON.parse(res);
            if($res1.status == true){
                $('#orgTableAlert').show();
                populateDataTable($group_sub_category);
            }
        });*/ //end ajax
    }		
}) 

function configureAllDropDown(){
    $.ajax({
        method: "POST",
        url: "ot_mgt/ot_scheduling/function.php",
        data: { fn: "getAllGroupOptionName" }
    })
    .done(function( res ) {
        $res1 = JSON.parse(res);
        //console.log(JSON.stringify($res1));
        if($res1.status == true){
            $rows = $res1.data;

            if($rows.length > 0){
                $('#surgeryPlanned').html('');
                $option_string_pr = "<option value='0'>Select Surgery Planned</option>";                 

                for($i = 0; $i < $rows.length; $i++){
                    //12. Procedures
                    if($rows[$i].gc_id == '12'){
                        $option_string_pr += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if
                }//end for
                $('#surgeryPlanned').html($option_string_pr);
            }//end if            
        }        
    });//end ajax
}//end



function populateDataTable(){
    $('#otScheduletable').dataTable().fnClearTable();
    $('#otScheduletable').dataTable().fnDestroy();

    $('#otScheduletable').DataTable({ 
        responsive: true,
        serverMethod: 'GET',
        ajax: {'url': 'ot_mgt/ot_scheduling/function.php?fn=getScheduleData' },
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
    populateDataTable()
    configureAllDropDown()
    
});
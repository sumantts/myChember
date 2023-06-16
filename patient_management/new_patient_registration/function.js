
function validateForm(){
    $Parameter = $('#Parameter').val().replace(/^\s+|\s+$/gm,'');
    $status = true;

    if($Parameter == ''){
        $status = false;
        $('#Parameter').removeClass('is-valid');
        $('#Parameter').addClass('is-invalid');
    }else{
        $status = true;
        $('#Parameter').removeClass('is-invalid');
        $('#Parameter').addClass('is-valid');
    }  

    $('#submitForm_spinner').hide();
    $('#submitForm_spinner_text').hide();
    $('#submitForm_text').show();

    return $status;
}//en validate form

function clearForm(){
    $('#Parameter').val('');
    $('#Parameter').removeClass('is-valid');
    $('#Parameter').removeClass('is-invalid');

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
            $service_id = $('#service_id').val();
            $.ajax({
                method: "POST",
                url: "patient_management/new_patient_registration/function.php",
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
            });//end ajax
        }

    }, 500)    
})

function editService($service_id){
    $('#exampleModalLong').modal('show');
    $.ajax({
        method: "POST",
        url: "patient_management/new_patient_registration/function.php",
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

//Delete function	
function deleteService($service_id){
    if (confirm('Are you sure to delete the Service?')) {
        $.ajax({
            method: "POST",
            url: "patient_management/new_patient_registration/function.php",
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


function populateDataTable(){
    $('#example').dataTable().fnClearTable();
    $('#example').dataTable().fnDestroy();

    $('#example').DataTable({ 
        responsive: true,
        serverMethod: 'GET',
        ajax: {'url': 'patient_management/new_patient_registration/function.php?fn=getPatientData' },
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
});
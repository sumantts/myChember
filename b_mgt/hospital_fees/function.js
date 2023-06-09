$('#multiCenterAdd').on('click', function(){
    $('#multiCenterModal').modal('show');
})

function validateForm(){
    $serviceName = $('#serviceName').val().replace(/^\s+|\s+$/gm,'');
    $serviceDescription = $('#serviceDescription').val().replace(/^\s+|\s+$/gm,'');
    $status = true;

    if($serviceName == ''){
        $status = false;
        $('#serviceName').removeClass('is-valid');
        $('#serviceName').addClass('is-invalid');
    }else{
        $status = true;
        $('#serviceName').removeClass('is-invalid');
        $('#serviceName').addClass('is-valid');
    }

    if($serviceDescription == ''){
        $status = false;
        $('#serviceDescription').removeClass('is-valid');
        $('#serviceDescription').addClass('is-invalid');
    }else{
        $status = true;
        $('#serviceDescription').removeClass('is-invalid');
        $('#serviceDescription').addClass('is-valid');
    }    

    $('#submitForm_spinner').hide();
    $('#submitForm_spinner_text').hide();
    $('#submitForm_text').show();

    return $status;
}//en validate form

function clearForm(){
    $('#serviceName').val('');
    $('#serviceName').removeClass('is-valid');
    $('#serviceName').removeClass('is-invalid');

    $('#serviceDescription').val('');
    $('#serviceDescription').removeClass('is-valid');
    $('#serviceDescription').removeClass('is-invalid');
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
            $service_id = $('#service_id').val();
            $.ajax({
                method: "POST",
                url: "b_mgt/hospital_fees/function.php",
                data: { fn: "saveServices", service_id: $service_id, serviceName: $serviceName, serviceDescription: $serviceDescription }
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
        url: "b_mgt/hospital_fees/function.php",
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
            url: "b_mgt/hospital_fees/function.php",
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
        ajax: {'url': 'b_mgt/hospital_fees/function.php?fn=getHospitalFees' },
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
        columnDefs: [ {targets: [4], className: 'dt-body-right'} ],
        createdRow: function(row, data, dataIndex){
            // If name is "Ashton Cox"
            if(data[3] === 'Total Fees Receivables:'){
                // Add COLSPAN attribute
                $('td:eq(3)', row).attr('colspan', 4);
    
                // Hide required number of columns
                // next to the cell with COLSPAN attribute
                $('td:eq(0)', row).css('display', 'none');
                $('td:eq(1)', row).css('display', 'none');
                $('td:eq(2)', row).css('display', 'none');
    
                // Update cell data
                this.api().cell($('td:eq(3)', row)).data('Total Fees Receivables:');
            }
        }

    });
}//end fun

$(document).ready(function () {
    populateDataTable()
});
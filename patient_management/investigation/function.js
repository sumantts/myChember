
$(document).ready(function() {
    configureAllDropDown();

    $('#drugAllergy, #illnessHistory, #majorComplaints, #observation, #adviceGiven, #diagnosis, #investigation, #procedures, #medicine').select2();

    //$('#toggleBody1').slideToggle(100);
    $('#toggleBody2').slideToggle(100);
    $('#toggleBody3').slideToggle(100);
    $('#toggleBody4').slideToggle(100);
    $('#toggleBody5').slideToggle(100);
    $('#toggleBody6').slideToggle(100);
    $('#toggleBody7').slideToggle(100);
    $('#toggleBody8').slideToggle(100);
    $('#toggleBody9').slideToggle(100);
    $('#toggleBody10').slideToggle(100);
    $('#toggleBody11').slideToggle(100);
});

$('#toggleBtn1').on('click', function(){
    $('#toggleBody1').slideToggle(300);
})

$('#toggleBtn2').on('click', function(){
    $('#toggleBody2').slideToggle(300);
})

$('#toggleBtn3').on('click', function(){
    $('#toggleBody3').slideToggle(300);
})

$('#toggleBtn4').on('click', function(){
    $('#toggleBody4').slideToggle(300);
})

$('#toggleBtn5').on('click', function(){
    $('#toggleBody5').slideToggle(300);
})

$('#toggleBtn6').on('click', function(){
    $('#toggleBody6').slideToggle(300);
})

$('#toggleBtn7').on('click', function(){
    $('#toggleBody7').slideToggle(300);
})

$('#toggleBtn8').on('click', function(){
    $('#toggleBody8').slideToggle(300);
})

$('#toggleBtn9').on('click', function(){
    $('#toggleBody9').slideToggle(300);
})

$('#toggleBtn10').on('click', function(){
    $('#toggleBody10').slideToggle(300);
})

$('#toggleBtn11').on('click', function(){
    $('#toggleBody11').slideToggle(300);
})

$('#medicine').on('change', function(){
    $medicine = $('#medicine').val();
    if($medicine > 0){
        $medicine_name = $('#medicine option:selected').text();
        $('#medicineModalTitle').html($medicine_name);
        $('#medicineModal').modal('show');
    }
});

$('#majorComplaints').on('change', function(){
    $majorComplaints = $('#majorComplaints').val();
    if($majorComplaints > 0){
        $majorComplaintsName = $('#majorComplaints option:selected').text();
        $('#majorCompliModalTitle').html($majorComplaintsName);
        $('#majorCompliModal').modal('show');
    }
});

function configureAllDropDown(){
    $.ajax({
        method: "POST",
        url: "patient_management/investigation/function.php",
        data: { fn: "getAllGroupOptionName" }
    })
    .done(function( res ) {
        $res1 = JSON.parse(res);
        //console.log(JSON.stringify($res1));
        if($res1.status == true){
            $rows = $res1.data;

            if($rows.length > 0){
                $('#drugAllergy').html('');
                $option_string_da = ""; 

                $('#illnessHistory').html('');
                $option_string_ih = ""; 

                $('#majorComplaints').html('');
                $option_string_mc = "";

                $('#observation').html('');
                $option_string_ob = "";

                $('#adviceGiven').html('');
                $option_string_ag = "";

                $('#diagnosis').html('');
                $option_string_di = "";

                $('#investigation').html('');
                $option_string_in = "";

                $('#procedures').html('');
                $option_string_pr = "";

                $('#medicine').html('');
                $option_string_me = "<option value='0'>Select Medicine</option>";
                $option_string_mc = "<option value='0'>Select Major Complaints</option>";

                for($i = 0; $i < $rows.length; $i++){
                    //4. Drug Allergy
                    if($rows[$i].gc_id == '4'){
                        $option_string_da += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //5. Illness History
                    if($rows[$i].gc_id == '5'){
                        $option_string_ih += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //6. Major Complaints
                    if($rows[$i].gc_id == '6'){
                        $option_string_mc += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //7. Observation
                    if($rows[$i].gc_id == '7'){
                        $option_string_ob += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //8. Advice Given
                    if($rows[$i].gc_id == '8'){
                        $option_string_ag += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //9. Diagnosis
                    if($rows[$i].gc_id == '9'){
                        $option_string_di += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //10. Diagnosis
                    if($rows[$i].gc_id == '10'){
                        $option_string_in += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //12. Procedures
                    if($rows[$i].gc_id == '12'){
                        $option_string_pr += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if

                    //11. Medicine
                    if($rows[$i].gc_id == '11'){
                        $option_string_me += "<option data-gc_id='"+$rows[$i].gc_id+"' value='"+$rows[$i].gm_id+"'>"+$rows[$i].option_name+"</option>";
                    }//end if
                }//end for

                $('#drugAllergy').html($option_string_da);
                $('#illnessHistory').html($option_string_ih);
                $('#majorComplaints').html($option_string_mc);
                $('#observation').html($option_string_ob);
                $('#adviceGiven').html($option_string_ag);
                $('#diagnosis').html($option_string_di);
                $('#investigation').html($option_string_in);
                $('#procedures').html($option_string_pr);
                $('#medicine').html($option_string_me);

            }//end if
            /*
            for($i = 0; $i < $groupData.length; $i++){
            }*/
        }
        
    });//end ajax
}//end

$('#group_category').on('change', function(){
    $group_category = $('#group_category').val();

    $.ajax({
        method: "POST",
        url: "patient_management/investigation/function.php",
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

$(".form-control").blur(function(){
    $('#orgFormAlert').css("display", "none");
    $formVallidStatus = validateMedicineForm();
    $majorCompFormVallidStatus = validateMajorCompForm();
});

//Medicine
function validateMedicineForm(){
    $medicineUnit = $('#medicineUnit').val().replace(/^\s+|\s+$/gm,'');
    $morning_yn = $('#morning_yn').val();
    $morning_yn_text = $('#morning_yn option:selected').text();
    $afternoon_yn = $('#afternoon_yn').val();
    $afternoon_yn_text = $('#afternoon_yn option:selected').text();
    $evening_yn = $('#evening_yn').val();
    $evening_yn_text = $('#evening_yn option:selected').text();
    $night_yn = $('#night_yn').val();
    $night_yn_text = $('#night_yn option:selected').text();
    $specialCondition = $('#specialCondition').val().replace(/^\s+|\s+$/gm,'');
    $days = $('#days').val().replace(/^\s+|\s+$/gm,'');
    $slno = $('#slno').val();
    
    $status = true;

    if($medicineUnit == ''){
        $status = false;
        $('#medicineUnit').removeClass('is-valid');
        $('#medicineUnit').addClass('is-invalid');
    }else{
        $status = true;
        $('#medicineUnit').removeClass('is-invalid');
        $('#medicineUnit').addClass('is-valid');
    }

    if($morning_yn == '0'){
        $status = false;
        $('#morning_yn').removeClass('is-valid');
        $('#morning_yn').addClass('is-invalid');
    }else{
        $status = true;
        $('#morning_yn').removeClass('is-invalid');
        $('#morning_yn').addClass('is-valid');
    }

    if($afternoon_yn == '0'){
        $status = false;
        $('#afternoon_yn').removeClass('is-valid');
        $('#afternoon_yn').addClass('is-invalid');
    }else{
        $status = true;
        $('#afternoon_yn').removeClass('is-invalid');
        $('#afternoon_yn').addClass('is-valid');
    } 

    if($evening_yn == '0'){
        $status = false;
        $('#evening_yn').removeClass('is-valid');
        $('#evening_yn').addClass('is-invalid');
    }else{
        $status = true;
        $('#evening_yn').removeClass('is-invalid');
        $('#evening_yn').addClass('is-valid');
    } 

    if($night_yn == '0'){
        $status = false;
        $('#night_yn').removeClass('is-valid');
        $('#night_yn').addClass('is-invalid');
    }else{
        $status = true;
        $('#night_yn').removeClass('is-invalid');
        $('#night_yn').addClass('is-valid');
    } 

    if($days == ''){
        $status = false;
        $('#days').removeClass('is-valid');
        $('#days').addClass('is-invalid');
    }else{
        $status = true;
        $('#days').removeClass('is-invalid');
        $('#days').addClass('is-valid');
    }       

    $('#submitForm1_spinner').hide();
    $('#submitForm1_spinner_text').hide();
    $('#submitForm1_text').show();

    return $status;
}//en validate form

function clearMedicineForm(){
    $('#medicine').val('0').trigger('change');

    $('#medicineUnit').val('');
    $('#medicineUnit').removeClass('is-valid');
    $('#medicineUnit').removeClass('is-invalid');

    $('#morning_yn').val('0').trigger('change');
    $('#morning_yn').removeClass('is-valid');
    $('#morning_yn').removeClass('is-invalid');

    $('#afternoon_yn').val('0').trigger('change');
    $('#afternoon_yn').removeClass('is-valid');
    $('#afternoon_yn').removeClass('is-invalid');

    $('#evening_yn').val('0').trigger('change');
    $('#evening_yn').removeClass('is-valid');
    $('#evening_yn').removeClass('is-invalid');

    $('#night_yn').val('0').trigger('change');
    $('#night_yn').removeClass('is-valid');
    $('#night_yn').removeClass('is-invalid');

    $('#specialCondition').val('');
    $('#specialCondition').removeClass('is-valid');
    $('#specialCondition').removeClass('is-invalid');

    $('#days').val('');
    $('#days').removeClass('is-valid');
    $('#days').removeClass('is-invalid'); 
}//end 

$('#submitMedicineAdd').click(function(){
    $('#submitForm1_spinner').show();
    $('#submitForm1_spinner_text').show();
    $('#submitForm1_text').hide();
    setTimeout(function(){
        $formVallidStatus = validateMedicineForm();

        if($formVallidStatus == true){
            clearMedicineForm()
            $('#medicineModal').modal('hide');
            $action_del = "<a href='javascript: void(0)' class='delete_name' data-row_slno='"+$slno+"'><i class='fa fa-trash' aria-hidden='true'></i></a>";

            var t = $('#exampleMedi').DataTable();
            t.row.add([$slno, $medicine_name, $medicineUnit, $morning_yn_text, $afternoon_yn_text, $evening_yn_text, $night_yn_text, $specialCondition, $days, $action_del]).draw(false); 
           
            $slno++;
            $('#slno').val($slno);  
            
        }
    }, 500)    
})

//Major Compliants
function validateMajorCompForm(){
    $duration = $('#duration').val().replace(/^\s+|\s+$/gm,'');
    $slnoMc = $('#slnoMc').val();
    
    $status = true;

    if($duration == ''){
        $status = false;
        $('#duration').removeClass('is-valid');
        $('#duration').addClass('is-invalid');
    }else{
        $status = true;
        $('#duration').removeClass('is-invalid');
        $('#duration').addClass('is-valid');
    }      

    $('#submitForm2_spinner').hide();
    $('#submitForm2_spinner_text').hide();
    $('#submitForm2_text').show();

    return $status;
}//en validate form

function clearMajorCompForm(){
    $('#majorComplaints').val('0').trigger('change');

    $('#duration').val('');
    $('#duration').removeClass('is-valid');
    $('#duration').removeClass('is-invalid');
}//end fun

$('#submitComplianceAdd').click(function(){
    $('#submitForm2_spinner').show();
    $('#submitForm2_spinner_text').show();
    $('#submitForm2_text').hide();

    setTimeout(function(){
        $majorCompFormVallidStatus = validateMajorCompForm();

        if($majorCompFormVallidStatus == true){
            clearMajorCompForm()
            $('#majorCompliModal').modal('hide');

            $action_del = "<a href='javascript: void(0)' class='delete_name' data-row_slno='"+$slnoMc+"'><i class='fa fa-trash' aria-hidden='true'></i></a>";

            var t = $('#majorCompliTable').DataTable();
            t.row.add([$slnoMc, $majorComplaintsName, $duration, $action_del]).draw(false); 
           
            $slnoMc++;
            $('#slnoMc').val($slnoMc);              
        }
    }, 500)    
})

//Delete function Major compliants table
$('#majorCompliTable').on('click', '.delete_name', function(){
    if (confirm('Are you sure to delete the Row?')) {
        var table = $('#majorCompliTable').DataTable();

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

//Delete function Medicine table
$('#exampleMedi').on('click', '.delete_name', function(){
    if (confirm('Are you sure to delete the Row?')) {
        var table = $('#exampleMedi').DataTable();

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


function populateDataTable($gc_id){
    $('#example').dataTable().fnClearTable();
    $('#example').dataTable().fnDestroy();

    $('#example').DataTable({ 
        responsive: true,
        serverMethod: 'GET',
        ajax: {'url': 'patient_management/investigation/function.php?fn=getGroupmasterTable&gc_id='+$gc_id },
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
                url: "patient_management/investigation/function.php",
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

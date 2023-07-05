<?php include('common/head.php'); ?>
<?php
    if(isset($_POST["centerName"])){
        $centerName = $_POST["centerName"];
        $searchdate = $_POST["searchdate"];
        $patientId = $_POST["patientId"];
    }else{
        $centerName = '0';
        $searchdate = date('d-m-Y');
        $patientId = '';
    
    }//end if
?>

<style>
    table td {
        word-break: break-word;
        vertical-align: top;
        white-space: normal !important;
    }
</style>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->	
	<?php include('common/nav.php'); ?>
	<!-- [ navigation menu ] end -->

	<!-- [ Header ] start -->
	<?php include('common/top_bar.php'); ?>
	<!-- [ Header ] end -->
	
	

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10"><?=$title?></h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!"><?=$title?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5><?=$title?></h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" method="POST" > 
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="centerName">Center Name</label>
                                        <select class="mb-3 form-control" id="centerName" name="centerName">
                                            <option value="0" <?php if($centerName == '0'){?> selected <?php } ?>>Select Center</option>
                                            <option value="1" <?php if($centerName == '1'){?> selected <?php } ?>>Balananda Brahmachari Hospital And Research Centre(BBH)</option>
                                            <option value="2" <?php if($centerName == '2'){?> selected <?php } ?>>RG Stone Urology & Laparoscopy Hospital(RGS)</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Center Name.
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="searchdate">Date</label>
                                        <input type="date" class="form-control" id="searchdate" name="searchdate" value="<?=$searchdate?>" >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                   
                                        <div class="invalid-feedback">
                                            Please provide Group category.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="patientId">Patient Id</label>
                                        <input type="text" class="form-control" id="patientId" name="patientId" value="<?=$patientId?>" >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                   
                                        <div class="invalid-feedback">
                                            Please provide Group category.
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <input class="btn btn-primary mt-3" type="submit" name="searchVisit" value="Search">
                                    </div>

                                    <!-- <div class="col-md-3 mb-3">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Search</span>
                                        </button>
                                    </div> -->
                                    
                                </div>

                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end --> 
                <?php
                if(isset($_POST["centerName"])){ 
                    ?>
                    <div class="col-sm-12">
                        <div class="card" >
                            <div class="card-header">
                                <h5>Visit Summary Report as on <?=date('d-m-Y', strtotime($searchdate))?></h5>
                                <div class="card-header-right">
                                    <div class="btn-group card-option">
                                        <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="feather icon-more-horizontal"></i>
                                        </button>
                                        <!-- <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="visitSummaryTable" class="table table-striped" style="width:100%">                                       
                                        <tbody>
                                            <tr style="text-align: center;">
                                                <th colspan="13"><h4>Patient: Banalata Sen [10001] </h4></th>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Gender<br>Age</th>
                                                <td colspan="7">Female<br>47</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Contact No</th>
                                                <td colspan="7">9876543210</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Visit Count</th>
                                                <td colspan="7">5</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Chief Complaints</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Observations</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Advice Given</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Diagnosis</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Investigation</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Procedures</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Followup</th>
                                                <td colspan="7">30-06-2023</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Visit Charges</th>
                                                <td colspan="7">Rs. 500/-</td>
                                            </tr>
                                            
                                            <tr>
                                                <td colspan="13">
                                                    <h5>Prescriptions: <a href="javascript: void(0)" onClick="$('#prescriptionTable_1').toggle()">Show</a></h5>
                                                    <table class="table table-sm" id="prescriptionTable_1" style="display: none;">
                                                        <thead>
                                                            <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Drug Name</th>
                                                            <th scope="col">qty</th>
                                                            <th scope="col">Need to be taken</th>
                                                            <th scope="col">Time period</th>
                                                            <th scope="col">Duration</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Raloxifene</td>
                                                                <td>1 Tab</td>
                                                                <td>Before Breakfast</td>
                                                                <td>Twice a Week</td>
                                                                <td>3 Weeks</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Streptokinase</td>
                                                                <td>1 Tab</td>
                                                                <td>Before Food</td>
                                                                <td>Every Day</td>
                                                                <td>7 Days</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- Single Report end -->
                                            <!-- Single Report start -->
                                            <tr style="text-align: center;">
                                            <th colspan="13"><h4>Patient: Sukumar Roy [10002] </h4></th>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Gender<br>Age</th>
                                                <td colspan="7">Female<br>38</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Contact No</th>
                                                <td colspan="7">9632587410</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Visit Count</th>
                                                <td colspan="7">3</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Chief Complaints</th>
                                                <td colspan="7">1. Weight Loss<br>2. Abnormal BP</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Observations</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Advice Given</th>
                                                <td colspan="7">1. Do exercise as suggested<br>2. Follow diet as planned for you</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Diagnosis</th>
                                                <td colspan="7">1. Blood and Urine tests</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Investigation</th>
                                                <td colspan="7">1. X-rays<br>2. Ultrasound</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Procedures</th>
                                                <td colspan="7">N/A</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Followup</th>
                                                <td colspan="7">30-06-2023</td>
                                            </tr>
                                            <tr>
                                                <th colspan="6">Visit Charges</th>
                                                <td colspan="7">Rs. 500/-</td>
                                            </tr>
                                            <tr>
                                                <td colspan="13">
                                                    <h5>Prescriptions: <a href="javascript: void(0)" onClick="$('#prescriptionTable_2').toggle()">Show</a></h5>
                                                    <table class="table table-sm" id="prescriptionTable_2" style="display: none;">
                                                        <thead>
                                                            <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Drug Name</th>
                                                            <th scope="col">qty</th>
                                                            <th scope="col">Need to be taken</th>
                                                            <th scope="col">Time period</th>
                                                            <th scope="col">Duration</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td> Buprenorphine</td>
                                                                <td>1 Tab</td>
                                                                <td>Before Breakfast</td>
                                                                <td>Twice a Week</td>
                                                                <td>3 Weeks</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Prochlorperazine</td>
                                                                <td>1 Tab</td>
                                                                <td>After Dinner</td>
                                                                <td>Every Day</td>
                                                                <td>7 Days</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <!-- Single Report end -->
                                        </tbody>
                                    </table>
                                </div> 

                            </div>
                        </div>  
                    </div>  
                    <?php
                }//end if
                ?>

                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
	<?php include('common/footer.php'); ?>
    
    <script src="patient_management/visit_summary/function.js"></script>
    
    
<?php include('common/head.php'); ?>

<style>
    table td {
        word-break: break-word;
        vertical-align: top;
        white-space: normal !important;
    }
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
            <!-- [ sample-table ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5> <?=$title?> Table</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">                                
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
							<strong>Success!</strong> Your Data Deleted successfully.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert1">
							<strong>Success!</strong> Your Service saved successfully.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
                        
                        <button type="button" class="btn btn-primary mb-2 float-right" id="synopsisSurgeryAdd">Add New</button>

                        
                        <div class="table-responsive">
                            <table id="synopsisSurgeryTable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Date & Time</th>
                                        <th>Patient ID<br>Patient Name</th>
                                        <th>Pre Operative<br>Diagnosis</th>
                                        <th>Post Operartive<br>Diagnosis</th>
                                        <th>Procedure<br>Name</th>
                                        <th>Intraoperative<br>period</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Date & Time</th>
                                        <th>Patient ID<br>Patient Name</th>
                                        <th>Pre Operative<br>Diagnosis</th>
                                        <th>Post Operartive<br>Diagnosis</th>
                                        <th>Procedure<br>Name</th>
                                        <th>Intraoperative<br>period</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>                       

                    </div>
                </div>
            </div>

            <!-- Modal start -->
            <div id="synopsisSurgeryModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"><?=$title?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="dateTime">Date & Time*</label>
                                        <input type="date" class="form-control" id="dateTime" value="" >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Date & Time.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="patientID">Patient Name/Id Number*</label>
                                        <input type="text" class="form-control" id="patientID" placeholder="Patient Name/Id Number" value="" required> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Patient Name/Id Number.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="preOperativeDiagnosis">Pre Operative Diagnosis</label>
                                        <input type="text" class="form-control" id="preOperativeDiagnosis" placeholder="Pre Operative Diagnosis" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Pre Operative Diagnosis.
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="postOperartiveDiagnosis">Post Operartive Diagnosis*</label>
                                        <input type="text" class="form-control" id="postOperartiveDiagnosis" placeholder="Post Operartive Diagnosis" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Post Operartive Diagnosis.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">                                      
                                    <div class="col-md-3 mb-3">
                                        <label for="procedureName">Procedure Name*</label>
                                        <input type="text" class="form-control" id="procedureName" placeholder="Procedure Name" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Post Procedure Name.
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="intraoperativePeriod">Intraoperative period*</label>
                                        <input type="text" class="form-control" id="intraoperativePeriod" placeholder="Intraoperative period" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Post Intraoperative period.
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="complications">Complications (If Any)</label>
                                        <input type="text" class="form-control" id="complications" placeholder="Complications" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Post Complications.
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="admittedUnderDoctor">Admitted Under Doctor</label>
                                        <input type="text" class="form-control" id="admittedUnderDoctor" placeholder="Admitted Under Doctor" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Post Admitted Under Doctor.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="otAssistantDetails">OT Assistant Details</label>
                                        <input type="text" class="form-control" id="otAssistantDetails" placeholder="OT Assistant Details" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide OT Assistant Details.
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="typeofAnesthesia">Type of Anesthesia</label>
                                        <input type="text" class="form-control" id="typeofAnesthesia" placeholder="Type of Anesthesia" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Type of Anesthesia.
                                        </div>
                                    </div> 

                                    <div class="col-md-3 mb-3">
                                        <label for="findings">Findings</label>
                                        <input type="text" class="form-control" id="findings" placeholder="(Positive & Negative)" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Findings.
                                        </div>
                                    </div> 

                                    <div class="col-md-3 mb-3">
                                        <label for="incisionDetails">Incision Details</label>
                                        <input type="text" class="form-control" id="incisionDetails" placeholder="Incision Details" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Incision Details.
                                        </div>
                                    </div> 

                                </div>

                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="scarDetails">Scar Details</label>
                                        <input type="text" class="form-control" id="scarDetails" placeholder="Scar Details" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Scar Details.
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="suturesUsed">Sutures Used</label>
                                        <input type="text" class="form-control" id="suturesUsed" placeholder="Sutures Used" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Sutures Used.
                                        </div>
                                    </div> 

                                    <div class="col-md-3 mb-3">
                                        <label for="needsToRemove">Items nees to be removed </label>
                                        <input type="text" class="form-control" id="needsToRemove" placeholder="Needs To Remove" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Findings.
                                        </div>
                                    </div> 

                                    <div class="col-md-3 mb-3">
                                        <label for="estimatedBloodLoss">Estimated Blood Loss</label>
                                        <input type="text" class="form-control" id="estimatedBloodLoss" placeholder="Estimated Blood Loss" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Incision Details.
                                        </div>
                                    </div> 
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="sampleForLabTest">Samples sent for </label>
                                        <input type="text" class="form-control" id="sampleForLabTest" placeholder="laboratory testing" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide sample For Lab Test.
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="statusNote">Post Operaive Status Note</label>
                                        <input type="text" class="form-control" id="statusNote" placeholder="Post Operaive Status Note" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Post Operaive Status Note.
                                        </div>
                                    </div> 
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            <button class="btn  btn-primary" type="button" id="submitForm">
                                <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                <span class="btn-text" id="submitForm_text">Save Changes</span>
                                <input type="hidden" name="slno" id="slno" value="1">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->

            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
	<?php include('common/footer.php'); ?>
    
    <script src="ot_mgt/synopsis_of_surgery/function.js"></script>
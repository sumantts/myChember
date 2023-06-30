<?php include('common/head.php'); ?>
<script type="text/javascript">   

</script>
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

                <!-- [ sample-page Patient Info ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn1">
                            <h5> Patient Info</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true"  aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody1">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Patient Id*</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Patient Id" value="250601" required >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Patient Id.
                                        </div>
                                    </div>                                   
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Name</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Name" value="Banalata Sen" readonly >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Name.
                                        </div>
                                    </div>                                   
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Age</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Age" value="47" readonly >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Age.
                                        </div>
                                    </div>                                   
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Visit Count</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Visit Count" value="1" readonly >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Visit Count.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Visit Date*</label>
                                        <input type="date" class="form-control" id="Parameter" placeholder="Visit Date" value="<?=date('Y-m-d')?>" required >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Visit Date.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Visit For</label>
                                        <input type="text" class="form-control" id="FirstName" placeholder="Visit For" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Visit For.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">Weight</label>
                                        <input type="numver" class="form-control" id="Location" placeholder="Kg" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Weight (Kg).
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">Height</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="Cm" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Height (Cm).
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">Pulse</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="/Min" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Pulse (/Min).
                                        </div>
                                    </div> 
                                </div>

                                <div class="form-row">                                     
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Respiration Rate</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="Breaths per Minute" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Respiration Rate (breaths per minute).
                                        </div>
                                    </div>     

                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Temperature</label>
                                        <input type="numver" class="form-control" id="Location" placeholder="Deg F" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Temp (Deg F).
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">BP</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="SYS" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide BP SYS.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">BP</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="DIA" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide BP DIA.
                                        </div>
                                    </div> 
                                </div>

                                <div class="form-row"> 
                                    
                                    <div class="col-md-3 mt-4">
                                        <button class="btn  btn-primary" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> 
                                </div>
                                
                                <!-- <button class="btn  btn-primary" type="button" id="submitForm">Submit form</button> -->

                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Drug Allergy ] start -->
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10" style="color: #f00;text-align: center;">A. PAST MEDICATION HISTORY</h5>
                    </div>

                    <div class="card">
                        <div class="card-header" id="toggleBtn2">
                            <h5>Drug Allergy</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody2">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="firstName">Drug Allergy</label>
                                        <select class="mb-3 form-control" id="drugAllergy" multiple>
                                            <option value="0">Select Drug Allergy</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Drug Allergy.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Illness History ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn3">
                            <h5>Illness History</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="firstName">Illness History</label>
                                        <select class="mb-3 form-control" id="illnessHistory" multiple>
                                            <option value="0">Select Illness History</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Illness History.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Major Complaints ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn4">
                            <h5>Major Complaints</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody4">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="majorComplaints">Major Complaints</label>
                                        <select class="mb-3 form-control" id="majorComplaints">
                                            <option value="0">Select Major Complaints</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Major Complaints.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table id="majorCompliTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Complaints</th>
                                            <th>Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Complaints</th>
                                            <th>Duration</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Past History/Surgical History ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn12">
                            <h5>Past History/Surgical History</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <button type="button" class="btn btn-primary mb-2 float-right" id="addNewSurgery">Add New</button>

                            <div class="table-responsive">
                                <table id="surgeryTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Surgery Name</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Surgery Name</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Drug History ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn13">
                            <h5>Drug History</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody13">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <button type="button" class="btn btn-primary mb-2 float-right" id="addonGoingMedicine">Add New</button>

                            <div class="table-responsive">
                                <table id="onGoingMedicineTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Medicine Name</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Medicine Name</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Immunization History ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn14">
                            <h5>Immunization History</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody14">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <button type="button" class="btn btn-primary mb-2 float-right" id="addImmunizationHistory">Add New</button>

                            <div class="table-responsive">
                                <table id="immunizationHistoryTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Name</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Name</th>
                                            <th>Note</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ Personal/Family History ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn15">
                            <h5>Personal/Family History</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody15">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <button type="button" class="btn btn-primary mb-2 float-right" id="addFamilyHistory">Add New</button>

                            <div class="table-responsive">
                                <table id="familyHistoryTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>History</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>History</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Observation ] start -->
                <div class="col-sm-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10" style="color: #f00;text-align: center;">B. PRESENT RECOMMENDATION</h5>
                    </div>
                    <div class="card">
                        <div class="card-header" id="toggleBtn5">
                            <h5>Observation</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody5">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="observation">Observation</label>
                                        <select class="mb-3 form-control" id="observation" multiple>
                                            <option value="0">Select Observation</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Observation.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Advice Given ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn6">
                            <h5>Advice Given</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody6">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="adviceGiven">Advice Given</label>
                                        <select class="mb-3 form-control" id="adviceGiven" multiple>
                                            <option value="0">Select Advice Given</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Advice Given.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Diagnosis] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn7">
                            <h5>Diagnosis</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody7">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="diagnosis">Diagnosis</label>
                                        <select class="mb-3 form-control" id="diagnosis" multiple>
                                            <option value="0">Select Diagnosis</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Diagnosis.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Investigation ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn8">
                            <h5>Investigation</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody8">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="investigation">Investigation</label>
                                        <select class="mb-3 form-control" id="investigation" multiple>
                                            <option value="0">Select Investigation</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Investigation.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page Procedures ] end -->
                
                <!-- [ sample-page Procedures ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn9">
                            <h5>Procedures</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody9">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="procedures">Procedures</label>
                                        <select class="mb-3 form-control" id="procedures">
                                            <option value="0">Select Procedures</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Procedures.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table id="proceduresTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Procedures</th>
                                            <th>Scheduled</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Procedures</th>
                                            <th>Scheduled</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Medicine ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn10">
                            <h5>Medicine</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody10">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-9 mb-3">
                                        <label for="medicine">Medicine</label>
                                        <select class="mb-3 form-control" id="medicine">
                                            <option value="0">Select Medicine</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Medicine.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div>                                    
                                </div>
                            </form>


                            <div class="table-responsive">
                                <table id="exampleMedi" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Medicine</th>
                                            <th>Unit</th>
                                            <th>Morning</th>
                                            <th>Afternoon</th>
                                            <th>Evening</th>
                                            <th>Night</th>
                                            <th>Special Condition</th>
                                            <th>Days</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <!-- <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td> Hydroxychloroquine</td>
                                            <td>1</td>
                                            <td>Yes</td>
                                            <td>No</td>
                                            <td>No</td>
                                            <td>Yes</td>
                                            <td>After Brealfast & Supper</td>
                                            <td>7</td>
                                            <td><a href='javascript: void(0)' class='delete_name'><i class='fa fa-trash' aria-hidden='true'></i></a></td>
                                        </tr>
                                    </tbody> -->

                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Medicine</th>
                                            <th>Unit</th>
                                            <th>Morning</th>
                                            <th>Afternoon</th>
                                            <th>Evening</th>
                                            <th>Night</th>
                                            <th>Special Condition</th>
                                            <th>Days</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>



                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->

                <!-- [ sample-page Documents ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn11">
                            <h5>Documents</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" aria-haspopup="true"  aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body" id="toggleBody11">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgFormAlert">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <form class="needs-validation" novalidate>
                                <div class="form-row">                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Document Type*</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Document Type" value="" required >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Document Type.
                                        </div>
                                    </div> 

                                    <div class="col-md-4 mb-3">
                                        <label for="lastName">Document Photo</label>
                                        
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                   
                                        <div class="invalid-feedback">
                                            Please provide Document.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 mt-4">
                                        <button class="btn  btn-primary" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Upload</span>
                                        </button>
                                    </div>
                                </div>                                
                                <!-- <button class="btn  btn-primary" type="button" id="submitForm">Submit form</button> -->
                            </form>

                            <div class="row">  
                                <div class="col-md-2 mb-3">  
                                    <span class="hei-100 wid-100 bg-light d-inline-block mr-2 border border-primary" data-toggle="tooltip" title="Medical report 1">
                                        <img src="assets/images/medical_report/medi_rep1.jpeg" height="98px" width="98px" >
                                    </span>
                                </div>   
                                <div class="col-md-2 mb-3">  
                                    <span class="hei-100 wid-100 bg-light d-inline-block mr-2 border border-primary" data-toggle="tooltip" title="Medical report 2">
                                        <img src="assets/images/medical_report/medi_rep2.jpeg" height="98px" width="98px" >
                                    </span>
                                </div>   
                                <div class="col-md-2 mb-3">  
                                    <span class="hei-100 wid-100 bg-light d-inline-block mr-2 border border-primary" data-toggle="tooltip" title="Medical report 3">
                                        <img src="assets/images/medical_report/medi_rep3.jpeg" height="98px" width="98px" >
                                    </span>
                                </div> 
                            </div>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->



                <!-- [ sample-table ] start -->

                <!-- Personal/Family History Modal start -->
                <div id="familyHistoryModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="familyHistoryModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="familyHistoryModalTitle">Personal/Family History</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label for="familyHistory">History</label>
                                            <textarea class="form-control" id="familyHistory" value="" required ></textarea>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide History.
                                            </div>  
                                        </div> 
                                    </div>
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn  btn-primary" type="button" id="familyAdd">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm7_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm7_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm7_text">Add</span>
                                    <input type="hidden" name="slnoFam" id="slnoFam" value="1">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Personal/Family History Modal end -->

                <!-- Immunization History Modal start -->
                <div id="immunizationHistoryModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="immunizationHistoryModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="immunizationHistoryModalTitle">Immunization History</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label for="immunizationName">Name</label>
                                            <input type="text" class="form-control" id="immunizationName" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
                                            </div>  
                                        </div> 

                                        <div class="col-md-12 mb-2">
                                            <label for="immunizationNote">Note</label>
                                            <input type="text" class="form-control" id="immunizationNote" value="" >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Surgery Date.
                                            </div>  
                                        </div> 
                                    </div>
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn  btn-primary" type="button" id="immunizationAdd">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm6_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm6_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm6_text">Add</span>
                                    <input type="hidden" name="slnoImu" id="slnoImu" value="1">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Immunization History Modal end -->

                <!-- Medicine Going On Modal start -->
                <div id="onGoingMedicineModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="onGoingMedicineModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="onGoingMedicineModalTitle">Medicine Going On</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label for="medicineName">Medicine Name</label>
                                            <input type="text" class="form-control" id="medicineName" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Medicine Name.
                                            </div>  
                                        </div> 

                                        <div class="col-md-12 mb-2">
                                            <label for="mediNote">Note</label>
                                            <input type="text" class="form-control" id="mediNote" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Surgery Date.
                                            </div>  
                                        </div> 
                                    </div>
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn  btn-primary" type="button" id="onGoingMediAdd">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm5_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm5_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm5_text">Add</span>
                                    <input type="hidden" name="slnoMed" id="slnoMed" value="1">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Medicine Going On Modal end -->

                <!-- Surgical History Modal start -->
                <div id="surgicalHistoryModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="surgicalHistoryModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="surgicalHistoryModalTitle">Surgical History</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label for="surgeryName">Surgery Name</label>
                                            <input type="text" class="form-control" id="surgeryName" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Surgery Name.
                                            </div>  
                                        </div> 

                                        <div class="col-md-12 mb-2">
                                            <label for="surgeryDate">Date</label>
                                            <input type="date" class="form-control" id="surgeryDate" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Surgery Date.
                                            </div>  
                                        </div> 
                                    </div>
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn  btn-primary" type="button" id="submitSurgeyAdd">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm4_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm4_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm4_text">Add</span>
                                    <input type="hidden" name="slnoSh" id="slnoSh" value="1">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Surgical History Modal end -->

                <!-- Procedures Modal start -->
                <div id="proceduresModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="proceduresModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="proceduresModalTitle">Scheduled</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label for="scheduled">Scheduled</label>
                                            <input type="date" class="form-control" id="scheduled" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Scheduled.
                                            </div>  
                                        </div> 
                                    </div>
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn  btn-primary" type="button" id="submitProceduresAdd">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm3_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm3_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm3_text">Add</span>
                                    <input type="hidden" name="slnoProc" id="slnoProc" value="1">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Procedures Modal end -->

                <!-- Major compliance Modal start -->
                <div id="majorCompliModal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="majorCompliModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="majorCompliModalTitle">Compliance Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2">
                                            <label for="duration">Duration</label>
                                            <input type="text" class="form-control" id="duration" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Duration.
                                            </div>  
                                        </div> 
                                    </div>
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                <button class="btn  btn-primary" type="button" id="submitComplianceAdd">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm2_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm2_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm2_text">Add</span>
                                    <input type="hidden" name="slnoMc" id="slnoMc" value="1">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Major compliance Modal end -->

                <!-- Modal start -->
                <div id="medicineModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="medicineModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="medicineModalTitle">Medicine Name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Unit</label>
                                            <input type="number" class="form-control" id="medicineUnit" placeholder="Unit" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Unit.
                                            </div>  
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Morning</label>
                                            <select class="mb-3 form-control" id="morning_yn">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Select Yes/No.
                                            </div>  
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Afternoon</label>
                                            <select class="mb-3 form-control" id="afternoon_yn">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Select Yes/No.
                                            </div>  
                                        </div> 
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Evening</label>
                                            <select class="mb-3 form-control" id="evening_yn">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Select Yes/No.
                                            </div>  
                                        </div>  
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Night</label>
                                            <select class="mb-3 form-control" id="night_yn">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Select Yes/No.
                                            </div>  
                                        </div> 
                                        <div class="col-md-3 mb-2">
                                            <label for="specialCondition">Special Condition</label>
                                            <input type="text" class="form-control" id="specialCondition" placeholder="Special Condition" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Special Condition.
                                            </div>  
                                        </div> 
                                        <div class="col-md-3 mb-2">
                                            <label for="days">Days</label>
                                            <input type="number" class="form-control" id="days" placeholder="Days" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Days.
                                            </div>  
                                        </div>

                                    </div>
                                </form>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                <button class="btn  btn-primary" type="button" id="submitMedicineAdd">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm1_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm1_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm1_text">Add</span>
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
    
    <script src="patient_management/investigation/function.js"></script>
    <!-- Select 2 Dropdown  -->
    <script>
    </script>
    <!-- Select 2 Dropdown  -->
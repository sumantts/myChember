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

                <!-- [ sample-page ] start -->
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
                                        <input type="text" class="form-control" id="Parameter" placeholder="Patient Id" value="<?=rand(100000, 999999)?>" required >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Patient Id.
                                        </div>
                                    </div>                                   
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Name</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Name" value="" readonly >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Name.
                                        </div>
                                    </div>                                   
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Age</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Age" value="" readonly >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Age.
                                        </div>
                                    </div>                                   
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Visit Count</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Visit Count" value="" readonly >
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
                                        <input type="date" class="form-control" id="Parameter" placeholder="Visit Date" value="" required >
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
                                        <label for="serviceDescription">Weight (Kg)</label>
                                        <input type="numver" class="form-control" id="Location" placeholder="Weight (Kg)" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Weight (Kg).
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">Height (Cm)</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="Height (Cm)" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Height (Cm).
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">Pulse (/Min)</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="Pulse (/Min)" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Pulse (/Min).
                                        </div>
                                    </div> 
                                </div>

                                <div class="form-row">                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">Temp (Deg F)</label>
                                        <input type="numver" class="form-control" id="Location" placeholder="Temp (Deg F)" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Temp (Deg F).
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">BP SYS</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="BP SYS" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide BP SYS.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">BP DIA</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="BP DIA" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide BP DIA.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-2 mt-4">
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
                
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
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
                
                <!-- [ sample-page ] start -->
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
                
                <!-- [ sample-page ] start -->
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
                                        <select class="mb-3 form-control" id="majorComplaints" multiple>
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
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
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
                
                <!-- [ sample-page ] start -->
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
                
                <!-- [ sample-page ] start -->
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
                
                <!-- [ sample-page ] start -->
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
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page ] start -->
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
                                        <select class="mb-3 form-control" id="procedures" multiple>
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
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page ] start -->
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
                                        <select class="mb-3 form-control" id="medicine" multiple>
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
                                <table id="example" class="table table-striped" style="width:100%">
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

                                    <tbody>
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
                                    </tbody>

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



                <!-- [ sample-table ] start -->

                <!-- Modal start -->
                <div id="medicineModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="medicineModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="medicineModalTitle">Hydroxychloroquine</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Unit</label>
                                            <input type="number" class="form-control" id="option_name" placeholder="Unit" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
                                            </div>  
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Morning</label>
                                            <select class="mb-3 form-control" id="group_category">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
                                            </div>  
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Afternoon</label>
                                            <select class="mb-3 form-control" id="group_category">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
                                            </div>  
                                        </div> 
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Evening</label>
                                            <select class="mb-3 form-control" id="group_category">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
                                            </div>  
                                        </div>  
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Night</label>
                                            <select class="mb-3 form-control" id="group_category">
                                                <option value="0">Select Yes/No</option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
                                            </div>  
                                        </div> 
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Special Condition</label>
                                            <input type="text" class="form-control" id="option_name" placeholder="Special Condition" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
                                            </div>  
                                        </div> 
                                        <div class="col-md-3 mb-2">
                                            <label for="option_name">Days</label>
                                            <input type="number" class="form-control" id="option_name" placeholder="Days" value="" required >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>                                    
                                            <div class="invalid-feedback">
                                                Please Provide Name.
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
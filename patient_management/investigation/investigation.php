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

                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">Temperature</label>
                                        <input type="numver" class="form-control" id="Location" placeholder="Deg F" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Temp (Deg F).
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">BP</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="SYS" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide BP SYS.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-2 mb-3">
                                        <label for="serviceDescription">BP</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="DIA" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide BP DIA.
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="nextVisitDate">Next Visit Date</label>
                                        <input type="date" class="form-control" id="nextVisitDate" placeholder="" value="" > 
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
                                            <span class="btn-text" id="submitForm_text">Save</span>
                                        </button>
                                    </div> 
                                </div>
                                
                                <!-- <button class="btn  btn-primary" type="button" id="submitForm">Submit form</button> -->

                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                
                <!-- [ sample-page Chief Complaints ] start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header" id="toggleBtn4">
                            <h5>Chief Complaints</h5>
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
                                        <label for="majorComplaints">Chief Complaints</label>
                                        <select class="mb-3 form-control" id="majorComplaints">
                                            <option value="0">Select Chief Complaints</option>
                                        </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Chief Complaints.
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
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
                
                <!-- [ sample-page Observation ] start -->
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
                                    
                                    <!-- <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
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
                                    
                                    <!-- <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
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
                                    
                                    <!-- <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
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
                                    
                                    <!-- <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
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
                                    
                                    <!-- <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
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
                                    
                                    <!-- <div class="col-md-3 mt-2">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
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
                            <h5>Rererences</h5>
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
                                        <label for="Parameter">Rererences Name*</label>
                                        <input type="text" class="form-control" id="Parameter" value="" required >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Document Type.
                                        </div>
                                    </div> 
                                    
                                    <!-- <div class="col-md-2 mt-4">
                                        <button class="btn  btn-primary" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Update</span>
                                        </button>
                                    </div> -->
                                </div>                                
                                <!-- <button class="btn  btn-primary" type="button" id="submitForm">Submit form</button> -->
                            </form>
                        </div>
                    </div>         
                    <button type="button" class="btn btn-primary ml-2 float-right" id="followUpSMS">Follo Up</button>  
                    <button type="button" class="btn btn-primary mb-2 float-right" id="saveInvestigation">Save</button>           
                </div>
                <!-- [ sample-page ] end -->
                
				          

                <!-- Modal start -->
                <div id="visitSMSMOdal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="visitSMSMOdalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="visitSMSMOdalTitle">Visit SMS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/images/sms/Visit.png" height="75%" width="50%" >   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->
                
				          

                <!-- Modal start -->
                <div id="followUpSMSModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="followUpSMSModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="followUpSMSModalTitle">Follow Up SMS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/images/sms/Followup.png" height="75%" width="50%" >   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->

                

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
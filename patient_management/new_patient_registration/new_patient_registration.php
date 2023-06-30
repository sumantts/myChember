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
            <!-- [ sample-table ] start -->
            <div class="col-sm-12">
                <div class="card">

                    <div class="card-header">
                        <h5> <?=$title?> Table</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <!-- <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li><a href="#!" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="feather icon-file-plus"></i> add new</a> </li>
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul> -->
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
                        
                        <button type="button" class="btn btn-primary mb-2 float-right" id="newPatientAdd">Add New</button>

                        
                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Patient Id</th>
                                        <th>Patient Name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Mobile No</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Patient Id</th>
                                        <th>Patient Name</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Mobile No</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>                       

                    </div>
                </div>
            </div>

            <!-- Modal start -->
            <div id="newPatientModal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                        <label for="Parameter">Patient Id*</label>
                                        <input type="text" class="form-control" id="Parameter" placeholder="Centre Name" value="250603" readonly >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Centre Name.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">First Name*</label>
                                        <input type="text" class="form-control" id="FirstName" placeholder="First Name" value="" required> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide First Name.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Middle Name</label>
                                        <input type="text" class="form-control" id="Location" placeholder="Middle Name" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Middle Name.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Last Name*</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="Last Name" value="" required> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Last Name.
                                        </div>
                                    </div>  

                                </div>

                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="Parameter">Gender*</label>
                                        <select class="mb-3 form-control" id="group_category">
                                            <option value="0">Select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Other</option>
                                        </select>                                        
                                        
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please Select Gender.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Date of Birth</label>
                                        <input type="date" class="form-control" id="FirstName" placeholder="Date of Birth" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Date of Birth.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Age*</label>
                                        <input type="text" class="form-control" id="Location" placeholder="Age" value="" > 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Age.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Mobile No*</label>
                                        <input type="tel" class="form-control" id="serviceDescription" placeholder="Mobile No" value="" required> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Mobile No.
                                        </div>
                                    </div>  

                                </div>

                                <div class="form-row">                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Whatsapp No</label>
                                        <input type="tel" class="form-control" id="serviceDescription" placeholder="Whatsapp No" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Whatsapp No.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Email ID</label>
                                        <input type="email" class="form-control" id="FirstName" placeholder="Email ID" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Email ID.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Address *</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> </textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Address.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">City</label>
                                        <input type="tel" class="form-control" id="serviceDescription" placeholder="City" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide City.
                                        </div>
                                    </div>  

                                </div>

                                <div class="form-row">                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">State</label>
                                        <input type="text" class="form-control" id="serviceDescription" placeholder="State" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide State.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Pincode</label>
                                        <input type="email" class="form-control" id="FirstName" placeholder="Pincode" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Pincode.
                                        </div>
                                    </div> 
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">Referred By</label>
                                        <input type="email" class="form-control" id="FirstName" placeholder="Referred By" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Referred By.
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 mb-3">
                                        <label for="serviceDescription">City</label>
                                        <input type="tel" class="form-control" id="serviceDescription" placeholder="City" value=""> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide City.
                                        </div>
                                    </div>  

                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" id="service_id" value="0">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                            <button class="btn  btn-primary" type="button" id="submitForm">
                                <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                <span class="btn-text" id="submitForm_text">Save Changes</span>
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
    
    <script src="patient_management/new_patient_registration/function.js"></script>
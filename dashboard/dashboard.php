<?php 
if(!$_SESSION["login_id"]){
    header("location:?p=signin");
}
include('common/head.php'); ?>

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
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
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
                        <h5>Smart Data Analysis</h5>
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

                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstName">Center/Clinic Name</label>
                                    <select class="mb-3 form-control" id="clinic_name">
                                        <option>Balananda Brahmachari Hospital And Research Centre (BBH)</option>
                                        <option>RG Stone Urology & Laparoscopy Hospital (RGS)</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide First name.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Select Span</label>
                                    <select class="mb-3 form-control" id="time_span">
                                        <option>Today</option>
                                        <option>This Week</option>
                                        <option>This Month</option>
                                        <option>This Year</option>
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide Last name.
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- <button class="btn  btn-primary" type="button" id="submitForm">Submit form</button> -->
                            <!-- <button class="btn  btn-primary" type="button" id="submitForm">
                                <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                <span class="btn-text" id="submitForm_text">Submit form</span>
                            </button> -->

                        </form>
                    </div>
                </div>                
            </div>
            <!-- [ sample-page ] end -->

            
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>View Appointment's & Schedule</h5>
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
                        <div class="row">                    
                            <!-- Chat start    -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Patient Visit Trend</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="line-chart-1"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Income Breakdown</h5>
                                    </div>
                                    <div class="card-body">
                                        <div id="pie-chart-2" style="width:100%"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat End -->
                        </div>
                    </div>

                </div>                
            </div>
            <!-- [ sample-page ] end -->

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
	<?php include('common/footer.php'); ?>

    <!-- Patient Visit Trend Below -->
    <script src="assets/js/pages/chart-apex.js"></script>

    <!-- Select 2 Dropdown  -->
    <script>
        $(document).ready(function() {
            $('#clinic_name, #time_span').select2();
        });
    </script>
    <!-- Select 2 Dropdown  -->
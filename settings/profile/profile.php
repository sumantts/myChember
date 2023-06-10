<?php include('common/head.php'); ?>
<script type="text/javascript">
    

</script>

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
                        <h5> <?=$title?> </h5>
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
                                    <label for="firstName">Registration No. *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Registration No." value="123456" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide Registration No.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Name*</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Name" value="Dr. Pallab Saha" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide Name.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Gender</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Gender" value="Male">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide Name.
                                    </div>
                                </div>                                
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstName">Mobile (Primary) *</label>
                                    <input type="tel" class="form-control" id="firstName" placeholder="Mobile (Primary)" value="9830088321" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide Primary Mobile No.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Mobile (Alternative)</label>
                                    <input type="tel" class="form-control" id="lastName" placeholder="Mobile (Alternative)" value="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide Name.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Email</label>
                                    <input type="email" class="form-control" id="lastName" placeholder="Email" value="pallscalpell@gmail.com">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide Name.
                                    </div>
                                </div>                                
                            </div>

                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="firstName">Website</label>
                                    <input type="url" name="url" id="url" placeholder="https://example.com" pattern="https://.*"  class="form-control" id="firstName" value="https://drpallabsaha.com/">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                    
                                    <div class="invalid-feedback">
                                        Please provide Primary Mobile No.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Choose a Password *</label>
                                    <input type="password" class="form-control" id="lastName" placeholder="******" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please Choose a Password.
                                    </div>
                                </div> 
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Confirm a Password *</label>
                                    <input type="password" class="form-control" id="lastName" placeholder="******" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide Confirm Password.
                                    </div>
                                </div>                                
                            </div>

                            <div class="form-row">   
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Signature Details</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> Dr. Pallab Saha.  * M.B.B.S., M.S.  * Sr. Consultant General & Laparascopic Surgery</textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide Name.
                                    </div>
                                </div>  
                                <div class="col-md-4 mb-3">
                                    <label for="lastName">Profile Photo</label>
                                    
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>                                   
                                    <div class="invalid-feedback">
                                        Please provide profile photo.
                                    </div>
                                </div>   
                                <div class="col-md-4 mb-3">  
                                    <span class="hei-100 wid-100 bg-light d-inline-block mr-2 border border-primary" data-toggle="tooltip" title="Dr. Pallab Saha">
                                        <img src="assets/images/profile/saha.jpg" height="98px" width="98px" >
                                    </span>
                                </div>                          
                            </div>
                            
                            <!-- <button class="btn  btn-primary" type="button" id="submitForm">Submit form</button> -->
                            <button class="btn  btn-primary" type="button" id="submitForm">
                                <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                <span class="btn-text" id="submitForm_text">Update</span>
                            </button>
                        </form>

                    </div>
                          
                    <!-- Toast Message -->
                    <div style="position:absolute; top:40px; right: 40px">
                        <div class="toast hide toast-right" role="alert" aria-live="assertive" data-delay="3000" aria-atomic="true">
                            <div class="toast-header">
                                <img src="assets/images/<?=$ico?>" alt="" class="img-fluid m-r-5" style="width:20px;">
                                <strong class="mr-auto"><?=$p_name?></strong>
                                <small class="text-muted">11 mins ago</small>
                                <button type="button" class="m-l-5 mb-1 mt-1 close" data-dismiss="toast" aria-label="Close">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="toast-body">
                            Success! Form data saved successfully.
                            </div>
                        </div>
                    </div>                             
                    <!-- Toast Message -->

                </div>
            </div>
            
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
	<?php include('common/footer.php'); ?>
    
    <script src="setup/profile/function.js"></script>
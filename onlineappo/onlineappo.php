<!DOCTYPE html>
<html lang="en">

<head>
	<title><?=$title?></title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/<?=$ico?>" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	
</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<!-- <img src="assets/images/home_page_logo.jpg" alt="<?php echo $p_name; ?>" class="img-fluid mb-4"> -->
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
							
					<div class="card-body">
						<h4 class="mb-3 f-w-400"><?php echo $title; ?></h4>
						<hr>
						<div class="form-group mb-3">
							<input type="date" class="form-control" id="appodate" >
						</div>
						<div class="form-group mb-3">
							<select class="form-control" id="centername" id="centername">								
								<option>Choose Clinic/Hospital</option>
								<option>RG Stone Urology & Laparoscopy Hospital</option>
								<option>Balananda Brahmachari Hospital And Research Centre	</option>
							</select>
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group mb-3">
							<input type="text" class="form-control" id="Gender" placeholder="Gender">
						</div>
						<div class="form-group mb-4">
							<input type="tel" class="form-control" id="age" placeholder="Age">
						</div>
						<div class="form-group mb-4">
							<input type="tel" class="form-control" id="phNumber" placeholder="Phone Number">
						</div>
						<div class="form-group mb-3">
							<input type="email" class="form-control" id="emailId" placeholder="Email Id">
						</div>
						<div class="form-group mb-4">
							<textarea class="form-control" id="description" placeholder="Describing Health Issue (Optional)"></textarea>
						</div>

						<!-- <button class="btn btn-block btn-primary mb-4" id="Signin">Signin</button> -->
						<button class="btn btn-block btn-primary mb-4" type="button" id="Signin">
							<span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="signin_spinner"></span>
							<span class="load-text" style="display: none;" id="signin_spinner_text">Loading...</span>
							<span class="btn-text" id="signin_text">Book</span>
						</button>

						<hr>
						<!-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Forgot Password? <a href="?p=forgot_password" class="f-w-400">Click Here</a></p> -->
					</div>
					
					
					<div style="position:absolute;top:40px;right: 40px" class="toast hide toast-5s" role="alert" aria-live="assertive" data-delay="5000" aria-atomic="true">
						<div class="toast-header">
							<img src="assets/images/<?=$ico?>" alt="" class="img-fluid m-r-5" style="width:20px;">
							<strong class="mr-auto"><?=$p_name?></strong>
							<!-- <small class="text-muted">11 mins ago</small> -->
							<button type="button" class="m-l-5 mb-1 mt-1 close" data-dismiss="toast" aria-label="Close">
								<span>&times;</span>
							</button>
						</div>
						<div class="toast-body">
							Username or password is not match.
						</div>
					</div>

				</div>
				          

            <!-- Modal start -->
            <div id="smsModal1" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="smsModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="smsModalTitle">SMS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <img src="assets/images/sms/Appointment.png" height="75%" width="50%" >   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->

			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="onlineappo/function.js"></script>


</body>
</html>

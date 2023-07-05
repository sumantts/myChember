<?php include('common/head.php'); ?>
<?php
    if(isset($_POST["centerName"])){
        $centerName = $_POST["centerName"];
        $fromDate = $_POST["fromDate"];
        $upToDate = $_POST["upToDate"];
    }else{
        $centerName = '0';
        $fromDate = date('d-m-Y');
        $upToDate = '';
    
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
                                        <label for="fromDate">From Date</label>
                                        <input type="date" class="form-control" id="fromDate" name="fromDate" value="<?=$fromDate?>" >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                   
                                        <div class="invalid-feedback">
                                            Please provide Group category.
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="upToDate">Upto Date</label>
                                        <input type="date" class="form-control" id="upToDate" name="upToDate" value="<?=$upToDate?>" >
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



            <?php if($centerName > 0){?>
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
                        
                        <div class="table-responsive">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Patient Name[ID]</th>
                                        <th>Address</th>
                                        <th>Contact No</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Last Visit Date</th>
                                        <th>Visit Count</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sl.No.</th>
                                        <th>Patient Name[ID]</th>
                                        <th>Address</th>
                                        <th>Contact No</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Last Visit Date</th>
                                        <th>Visit Count</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>                       

                    </div>
                </div>
            </div>
            <?php } ?>

            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
	<?php include('common/footer.php'); ?>
    
    <script src="reports/patient_register/function.js"></script>
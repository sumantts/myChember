<?php include('common/head.php'); ?>

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
                                        <label for="DocumentName">Document Name</label>
                                        <input type="text" class="form-control" id="DocumentName" placeholder="Document Name" value=""  >
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Name.
                                        </div>
                                    </div>                                  
                                    <div class="col-md-3 mb-3">
                                        <label for="DocumentName">Choose File</label>                                    
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>                                    
                                        <div class="invalid-feedback">
                                            Please provide Name.
                                        </div>
                                    </div>  
                                    <div class="col-md-3 mb-3">
                                        <button class="btn btn-primary mt-3" type="button" id="submitForm">
                                            <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                            <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                            <span class="btn-text" id="submitForm_text">Upload</span>
                                        </button>
                                    </div>
                                    
                                </div>
                                
                                <!-- <button class="btn  btn-primary" type="button" id="submitForm">Submit form</button> -->
                                <!-- <button class="btn  btn-primary" type="button" id="submitForm">
                                    <span class="spinner-border spinner-border-sm" role="status" style="display: none;" id="submitForm_spinner"></span>
                                    <span class="load-text" style="display: none;" id="submitForm_spinner_text">Loading...</span>
                                    <span class="btn-text" id="submitForm_text">Search</span>
                                </button> -->

                            </form>
                        </div>
                    </div>                
                </div>
                <!-- [ sample-page ] end -->
                <!-- [ sample-table ] start -->
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-header">
                            <h5>List of Documents</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <!-- <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li><a href="#!" data-toggle="modal" data-target="#exampleModalLong"><i class="feather icon-file-plus"></i> add new</a> </li>
                                        <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgTableAlert">
                                <strong>Success!</strong> Your Data Deleted successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;" id="orgTableAlert1">
                                <strong>Success!</strong> Your Data saved successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            
                            <div class="table-responsive">
                                <table id="documentList" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Document Name</th>
                                            <th>Document Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>X-Ray</td>
                                            <td>
                                                <a href="javascript: void(0)" onClick="$('#exampleModalLong').modal('show')">
                                                    <span class="hei-100 wid-100 bg-light d-inline-block mr-2 border border-primary" data-toggle="tooltip" title="X-Ray">
                                                        <img src="assets/images/upload_document/xray.jpeg" height="98px" width="98px" >
                                                    </span>
                                                </a>
                                            </td>
                                            <td>
                                                <a href='javascript: void(0)' data-gm_id='1' class='delete_name'><i class='fa fa-trash' aria-hidden='true'></i></a>                                            
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Document Name</th>
                                            <th>Document Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>                       

                        </div>
                    </div>
                </div>

                <!-- Modal start -->
                <div id="exampleModalLong" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">X-Ray</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <img src="assets/images/upload_document/xray.jpeg" height="55%" width="100%" >   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
    
    <script src="patient_management/upload_documents/function.js"></script>
    
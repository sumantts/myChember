<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="?p=dashboard" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="assets/images/<?=$logo?>" alt="" class="logo">
                <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                
            </ul>
            <ul class="navbar-nav ml-auto">
                
                <li>
                    <div class="dropdown drp-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <!-- <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"> -->
                                <span><?=$_SESSION["profile_name"]?></span>
                                <a href="?p=signin" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="?p=profile" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <!-- <li><a href="#!" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="#!" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li> -->
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>			
			
	</header>
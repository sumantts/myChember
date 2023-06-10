<?php
	include('assets/php/sql_conn.php');	
	
	if(isset($_GET["p"])){
		$p = $_GET["p"];
	}else{
		$p = '';
	}
	
	if(isset($_GET["gr"])){
		$gr = $_GET["gr"];
	}else{
		$gr = '';
	}

	switch($p){
		case 'signin':
        $title = "Signin";
		include('signin/signin.php');
		break;

		case 'signup':
        $title = "Signup";
		include('signup/signup.php');
		break;
		
		case 'dashboard':
		$title = "Dashboard";
		include('dashboard/dashboard.php');		
		break;

		//SETTINGS		
		case 'profile':
			$title = "Profile";
			include('settings/profile/profile.php');		
		break;
		
		case 'multi_center_setup':
			$title = "Multi-Center";
			include('settings/center/multi_center_setup.php');		
		break;

		//Master		
		case 'group_master':
			$title = "Group Master";
			include('master/group_master/group_master.php');		
		break;
						
		default:
		include('signin/signin.php');
	}
    

?>
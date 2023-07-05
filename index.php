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
        $title = "Sign In";
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
			$title = "Multi Center";
			include('settings/center/multi_center_setup.php');		
		break;
		
		case 'configure_services':
			$title = "Configure Services";
			include('settings/configure_services/configure_services.php');		
		break;
		
		case 'service_based_pricing':
			$title = "Service Based Pricing";
			include('settings/service_based_pricing/service_based_pricing.php');		
		break;

		//Patient Management		
		case 'new_patient_registration':
			$title = "New Patient Registration";
			include('patient_management/new_patient_registration/new_patient_registration.php');		
		break;	

		case 'patient_past_history':
			$title = "Patient Past History";
			include('patient_management/patient_past_history/patient_past_history.php');		
		break;		

		case 'investigation':
			$title = "Investigation";
			include('patient_management/investigation/investigation.php');		
		break;	

		case 'visit_summary':
			$title = "Visit Summary";
			include('patient_management/visit_summary/visit_summary.php');		
		break;

		//Master		
		case 'group_master':
			$title = "Group Master";
			include('master/group_master/group_master.php');		
		break;

		//OT Management		
		case 'ot_scheduling':
			$title = "OT Scheduling";
			include('ot_mgt/ot_scheduling/ot_scheduling.php');		
		break;	

		case 'synopsis_surgery':
			$title = "Synopsis of Surgery";
			include('ot_mgt/synopsis_of_surgery/synopsis_of_surgery.php');		
		break;

		//Billing Management		
		case 'hospital_fees':
			$title = "Fees From Hospital";
			include('b_mgt/hospital_fees/hospital_fees.php');		
		break;

		//Reports		
		case 'patient_register':
			$title = "Patient Register";
			include('reports/patient_register/patient_register.php');		
		break;	

						
		default:
		include('signin/signin.php');
	}
    

?>
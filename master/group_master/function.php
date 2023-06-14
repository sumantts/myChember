<?php
	include('../../assets/php/sql_conn.php');
	$fn = '';
    
	if(isset($_GET["fn"])){
	    $fn = $_GET["fn"];
	}else if(isset($_POST["fn"])){
	    $fn = $_POST["fn"];
	}	

	//Get Group name
	if($fn == 'configureGroupName'){
		$return_array = array();
		$status = true;
		$mainData = array();

		$sql = "SELECT * FROM group_category WHERE parent_gc_id = '0'";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			$status = true;
			$slno = 1;
			while($row = $result->fetch_array()){
				$gc_id = $row['gc_id'];			
				$group_category = $row['group_category'];
				$data = new stdClass();

				$data->gc_id = $gc_id;
				$data->group_category = $group_category;
				
				array_push($mainData, $data);
				$slno++;
			}
		} else {
			$status = false;
		}
		$mysqli->close();

		$return_array['status'] = $status;
		$return_array['data'] = $mainData;
    	echo json_encode($return_array);
	}//function end	

	//Get Group sub category name
	if($fn == 'configureGroupCategory'){
		$group_category = $_POST["group_category"];
		$return_array = array();
		$status = true;
		$mainData = array();

		$sql = "SELECT * FROM group_category WHERE parent_gc_id = '".$group_category."'";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			$status = true;
			$slno = 1;
			while($row = $result->fetch_array()){
				$gc_id = $row['gc_id'];			
				$group_sub_category = $row['group_sub_category'];
				$data = new stdClass();

				$data->gc_id = $gc_id;
				$data->group_sub_category = $group_sub_category;
				
				array_push($mainData, $data);
				$slno++;
			}
		} else {
			$status = false;
		}
		$mysqli->close();

		$return_array['status'] = $status;
		$return_array['data'] = $mainData;
    	echo json_encode($return_array);
	}//function sub category end	


	//Save function start
	if($fn == 'saveServices'){
		$return_result = array();
		$status = true;

		$service_id = $_POST["service_id"];	
		$serviceName = $_POST["serviceName"];
		$serviceDescription = $_POST["serviceDescription"];	
		
		try {
			if($service_id > 0){
				$status = true;$sql = "UPDATE service_manager SET name = '" .$serviceName. "', description = '" .$serviceDescription. "' WHERE service_id = '" .$service_id. "' ";
				$result = $mysqli->query($sql);
			}else{
				$sql = "INSERT INTO service_manager (name, description) VALUES ('" .$serviceName. "', '" .$serviceDescription. "')";
				$result = $mysqli->query($sql);
				$insert_id = $mysqli->insert_id;
				if($insert_id > 0){
					$status = true;
				}else{
					$status = false;
				}		
			}	
		} catch (PDOException $e) {
			die("Error occurred:" . $e->getMessage());
		}
		$return_result['status'] = $status;
		sleep(2);
		echo json_encode($return_result);
	}//Save function end	

	//function start
	if($fn == 'getGroupmasterTable'){
		$return_array = array();
		$status = true;
		$mainData = array();
		$gc_id = $_GET['gc_id'];

		$sql = "SELECT * FROM group_master WHERE gc_id = '" .$gc_id. "'";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			$status = true;
			$slno = 1;
			while($row = $result->fetch_array()){
				$gm_id = $row['gm_id'];			
				$gc_id = $row['gc_id'];		
				$option_name = $row['option_name'];
				
				$data[0] = $slno;
				$data[1] = $option_name;
				$data[2] = "<a href='javascript: void(0)' data-gm_id='.$gm_id.' class='delete_name'><i class='fa fa-trash' aria-hidden='true' data-gm_id='.$gm_id.'></i></a>";

				array_push($mainData, $data);
				$slno++;
			}
		} else {
			$status = false;
		}
		$mysqli->close();

		$return_array['data'] = $mainData;
    	echo json_encode($return_array);
	}//function end	

	//function start
	if($fn == 'getServiceData'){
		$return_array = array();
		$status = true;
		$mainData = array();
		$service_id = $_POST['service_id'];

		$sql = "SELECT * FROM service_manager WHERE service_id = '" .$service_id. "'";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			$status = true;	
			$row = $result->fetch_array();
			$service_id = $row['service_id'];			
			$name = $row['name'];		
			$description = $row['description'];	
		} else {
			$status = false;
		}
		$mysqli->close();

		$return_array['name'] = $name;
		$return_array['description'] = $description;
		$return_array['status'] = $status;
    	echo json_encode($return_array);
	}//function end

	//Delete function
	if($fn == 'deleteService'){
		$return_result = array();
		$service_id = $_POST["service_id"];
		$status = true;	

		$sql = "DELETE FROM service_manager WHERE service_id = '".$service_id."'";
		$result = $mysqli->query($sql);
		$return_result['status'] = $status;
		sleep(1);
		echo json_encode($return_result);
	}//end function deleteItem

?>
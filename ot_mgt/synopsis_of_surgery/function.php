<?php
	include('../../assets/php/sql_conn.php');
	$fn = '';
    
	if(isset($_GET["fn"])){
	    $fn = $_GET["fn"];
	}else if(isset($_POST["fn"])){
	    $fn = $_POST["fn"];
	}

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
	if($fn == 'getScheduleData'){
		$return_array = array();
		$status = true;
		$mainData = array();

		/*$sql = "SELECT * FROM service_manager";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			$status = true;
			$slno = 1;
			while($row = $result->fetch_array()){
				$service_id = $row['service_id'];			
				$name = $row['name'];		
				$description = $row['description'];
				
				$data[0] = $slno;
				$data[1] = $name;
				$data[2] = $description;
				$data[3] = "<i class='fa fa-edit' aria-hidden='true' onclick='editService(".$service_id.")'></i> <i class='fa fa-trash' aria-hidden='true' onclick='deleteService(".$service_id.")'></i>";

				array_push($mainData, $data);
				$slno++;
			}
		} else {
			$status = false;
		}
		$mysqli->close();*/

		$data[0] = 1;
		$data[1] = "26-Dec-2023";
		$data[2] = "250601<br>Banalata Sen";
		$data[3] = "BBH";
		$data[4] = "Pancreatic Surgery";
		$data[5] = "Micro";
		$data[6] = "Yes";
		$data[7] = "<a href='javascript: void(0)' data-center_id='1'><i class='fa fa-edit' aria-hidden='true' ></i>  </a><a href='javascript: void(0)' data-center_id='2'>  <i class='fa fa-trash' aria-hidden='true' data-center_id='1' ></i></a>";
		array_push($mainData, $data);

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

		

	//Get Group name
	if($fn == 'getAllGroupOptionName'){
		$return_array = array();
		$status = true;
		$mainData = array();

		$sql = "SELECT * FROM group_master";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			$status = true;
			$slno = 1;
			while($row = $result->fetch_array()){
				$gm_id = $row['gm_id'];	
				$gc_id = $row['gc_id'];			
				$option_name = $row['option_name'];
				$data = new stdClass();

				$data->gm_id = $gm_id;
				$data->gc_id = $gc_id;
				$data->option_name = $option_name;
				
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

?>
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
	if($fn == 'getHospitalFees'){
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
		$data[1] = "OPD Consultation Fees";
		$data[2] = "Arup Kr Sarkar [ID: 523146]";
		$data[3] = "15-06-2023";
		$data[4] = number_format(500, 2);
		array_push($mainData, $data);

		$data[0] = 2;
		$data[1] = "";
		$data[2] = "-";
		$data[3] = "-";
		$data[4] = "-";
		array_push($mainData, $data);

		$data[0] = 3;
		$data[1] = "";
		$data[2] = "-";
		$data[3] = "30-06-2023";
		$data[4] = number_format(500, 2);
		array_push($mainData, $data);

		$data[0] = 4;
		$data[1] = "IPD Visit Fees";
		$data[2] = "Joyeta Chakraborty [ID: 203203]";
		$data[3] = "15-06-2023";
		$data[4] = number_format(700, 2);
		array_push($mainData, $data);

		$data[0] = 5;
		$data[1] = "";
		$data[2] = "-";
		$data[3] = "-";
		$data[4] = "-";
		array_push($mainData, $data);

		$data[0] = 6;
		$data[1] = "";
		$data[2] = "-";
		$data[3] = "30-06-2023";
		$data[4] = number_format(600, 2);
		array_push($mainData, $data);

		$data[0] = 7;
		$data[1] = "Surgery Fees";
		$data[2] = "Pritam Halder [ID: 209209]";
		$data[3] = "15-06-2023";
		$data[4] = number_format(17500, 2);
		array_push($mainData, $data);

		$data[0] = 8;
		$data[1] = "";
		$data[2] = "-";
		$data[3] = "-";
		$data[4] = "-";
		array_push($mainData, $data);

		$data[0] = 9;
		$data[1] = "";
		$data[2] = "-";
		$data[3] = "30-06-2023";
		$data[4] = number_format(22000, 2);
		array_push($mainData, $data);

		$data[0] = 10;
		$data[1] = "Emergency Care Fees";
		$data[2] = "Amit Karmakar [ID: 100100]";
		$data[3] = "17-06-2023";
		$data[4] = number_format(1000, 2);
		array_push($mainData, $data);

		$data[0] = 11;
		$data[1] = "Emergency Care Fees";
		$data[2] = "-";
		$data[3] = "-";
		$data[4] = "-";
		array_push($mainData, $data);

		$data[0] = 12;
		$data[1] = "";
		$data[2] = "-";
		$data[3] = "30-06-2023";
		$data[4] = number_format(1200, 2);
		array_push($mainData, $data);

		$data[0] = "13";
		$data[1] = "";
		$data[2] = "";
		$data[3] = "Total Fees Receivables:";
		$data[4] = number_format(632750, 2);
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

?>
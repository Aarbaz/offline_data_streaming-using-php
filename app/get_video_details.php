<?php
	
	include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'config.php';

	$response = array();

	if(isset($_POST['v_id'])){
		$v_id = mysqli_real_escape_string($con, $_POST['v_id']);
		
		$sql = "SELECT v_description FROM videos WHERE v_id = ".$v_id;
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result)>0){
			$row = myqsli_fetch_assoc($result);
			$response['success'] = '1';
			$response['message'] = 'Video Details available.';
			$response['data'] = $row;
		}else{
			$response['success'] = '0';
			$response['message'] = 'Video details are not available.';
		}
	}else{
		$response['success'] = '0';
		$response['message'] = 'Parameter missing';
	}

	echo json_encode($response);


?>
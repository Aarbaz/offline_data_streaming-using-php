<?php
	
	include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'config.php';

	$response = array();

	if(isset($_POST['s_email']) && isset($_POST['s_password'])){
		$s_email = mysqli_real_escape_string($con, $_POST['s_email']);
		$s_password = mysqli_real_escape_string($con, $_POST['s_password']);

		$sql = "SELECT `s_id`, `s_name`, `s_email`, `s_phone`, `s_reg_time` FROM `student` WHERE s_email like '".$s_email."' AND s_password like '".md5($s_password)."'";
		$result = mysqli_query($con, $sql);

		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$response['success'] = '1';
			$response['message'] = 'Login successful';
			$response['data'] = $row;
		}else{
			$response['success'] = '0';
			$response['message'] = 'Email ID or password not matching.';
		}
	}else{
		$response['success'] = '0';
		$response['message'] = 'Parameter missing';
	}

	echo json_encode($response);


?>
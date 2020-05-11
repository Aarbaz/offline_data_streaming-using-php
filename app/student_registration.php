<?php
	
	include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'config.php';

	$response = array();

	if(isset($_POST['s_name']) && isset($_POST['s_email']) && isset($_POST['s_phone']) && isset($_POST['s_password'])){
		$s_name = mysqli_real_escape_string($con, $_POST['s_name']);
		$s_email = mysqli_real_escape_string($con, $_POST['s_email']);
		$s_phone = mysqli_real_escape_string($con, $_POST['s_phone']);
		$s_password = mysqli_real_escape_string($con, $_POST['s_password']);

		$sql = "INSERT INTO `student`(`s_name`, `s_email`, `s_phone`, `s_password`, `s_reg_time`) VALUES ('".$s_name."', '".$s_email."', '".$s_phone."', '".md5($s_password)."', '".time()."')";
		$result = mysqli_query($con, $sql);

		if($result != null){
			$response['success'] = '1';
			$response['message'] = 'Registration successful. Login Now';
		}else{
			$response['success'] = '0';
			$response['message'] = 'Email ID or phone number might be already present.';
		}
	}else{
		$response['success'] = '0';
		$response['message'] = 'Parameter missing';
	}

	echo json_encode($response);

?>
<?php

	include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'config.php';

	$response = array();

	$sql = "SELECT * FROM `notice` ORDER BY n_id DESC";
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)>0){
		$notice = array();
		while($row = mysqli_fetch_assoc($result)){
			$row['n_time'] = date('d-m-Y H:i', $row['n_time']);
			array_push($notice, $row);
		}
		$response['success'] = '1';
		$response['data'] = $notice;
		$response['message'] = 'Notice available in system';
	}else{
		$response['success'] = '0';
		$response['message'] = 'NO Notice available in system';
	}

	echo json_encode($response);

?>
<?php

	include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'config.php';

	$response = array();

	$sql = "SELECT * FROM `videos` ORDER BY v_id DESC";
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)>0){
		$videos = array();
		while($row = mysqli_fetch_assoc($result)){
			$row['v_time'] = date('d-m-Y H:i', $row['v_time']);
			array_push($videos, $row);
		}
		$response['success'] = '1';
		$response['data'] = $videos;
		$response['message'] = 'Videos available in system';
	}else{
		$response['success'] = '0';
		$response['message'] = 'NO video available in system';
	}

	echo json_encode($response);

?>
<?php

	include dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'config.php';

	$response = array();

	$sql = "SELECT * FROM `pdf` ORDER BY p_id DESC";
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)>0){
		$pdf = array();
		while($row = mysqli_fetch_assoc($result)){
			$row['p_time'] = date('d-m-Y H:i', $row['p_time']);
			array_push($pdf, $row);
		}
		$response['success'] = '1';
		$response['data'] = $pdf;
		$response['message'] = 'PDF available in system';
	}else{
		$response['success'] = '0';
		$response['message'] = 'NO PDF available in system';
	}

	echo json_encode($response);

?>
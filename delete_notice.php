<?php

	
	session_start(); 
    if(!isset($_SESSION['a_id'])){
        header("location: login.php");
    }
    include dirname(__FILE__).DIRECTORY_SEPARATOR.'config.php';

    echo '<html><head><title></title>
				<link rel="stylesheet" href="dist/css/main.css">
				<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
			</head>
			<body></body>
			</html>';

	if(isset($_GET['n_id'])){
		$n_id = mysqli_real_escape_String($con, $_GET['n_id']);

		$sql = "DELETE FROM notice WHERE n_id = ".$n_id;
		$result = mysqli_query($con, $sql);

		if($result != null){
			echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    Notice Deleted Successfully. <a href='all_notice.php' class='alert-link'>Delete More Notice</a>.
                 </div>";
		}else{
			echo "<div class='alert alert-danger alert-dismissible'>
	            <strong>Missing!</strong> Unable to delete Notice. Please try again.
	            <a href='all_notice.php' class='alert-link'>Click here</a> To try again.
	        </div>";
		}
	}else{
		echo "<div class='alert alert-danger alert-dismissible'>
            <strong>Missing!</strong> Parameter Missing. Try again or contact developer.
            <a href='all_notice.php' class='alert-link'>Click here</a> To try again.
        </div>";
	}

?>
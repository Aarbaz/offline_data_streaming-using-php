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

    if(isset($_POST['n_title']) && isset($_POST['n_description'])){

    	$n_title = mysqli_real_escape_string($con, $_POST['n_title']);
        $n_description = mysqli_real_escape_string($con, $_POST['n_description']);

        $timestamp = time();
        
        $sql = "INSERT INTO `notice`(`n_title`, `n_description`, `n_time`) VALUES ('".$n_title."', '".$n_description."', '".$timestamp."')";

        $result = mysqli_query($con, $sql);
        if($result != null){
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
                Notice Added Successfully. <a href='add_notice.php' class='alert-link'>Add More Notice</a>.
             </div>";
        }else{
            echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                Unable to insert record in system. <a href='add_notice.php' class='alert-link'>TRY AGAIN</a>.
             </div>";
        }

    }else{
    	echo "<div class='alert alert-danger alert-dismissible'>
            <strong>Missing!</strong> Parameter Missing. Try again or contact developer.
            <a href='add_notice.php' class='alert-link'>Click here</a> To try again.
        </div>";
    }


?>
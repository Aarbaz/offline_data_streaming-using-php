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

    if(isset($_POST['v_title']) && isset($_POST['v_description']) && isset($_FILES['video']['name']) ){

    	$v_title = mysqli_real_escape_string($con, $_POST['v_title']);
        $v_description = mysqli_real_escape_string($con, $_POST['v_description']);

        $timestamp = time();

        $target_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'video'.DIRECTORY_SEPARATOR;
        $v_path = $target_dir .$timestamp.'_'.basename($_FILES['video']['name']);
        $v_path_name = $timestamp.'_'.basename($_FILES['video']['name']);

        $v_path_file_type = pathinfo($v_path,PATHINFO_EXTENSION);

        if($v_path_file_type != "mp4" && $v_path_file_type != "3gp" && $v_path_file_type != "mkv" && $v_path_file_type != "webm" && $v_path_file_type != "MP4" && $v_path_file_type != "3GP" && $v_path_file_type != "MKV"  && $v_path_file_type != "WEBM" ){
            echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                    Video must be mp4, 3gp, mkv or webm. <a href='add_video.php' class='alert-link'>TRY AGAIN</a>.
                 </div>";
        }else{
            if(move_uploaded_file($_FILES["video"]["tmp_name"], $v_path)){

                $sql = "INSERT INTO `videos`(`v_title`, `v_description`, `v_path`, `v_time`) VALUES ('".$v_title."', '".$v_description."', '".$v_path_name."', '".$timestamp."')";

                
                $result = mysqli_query($con, $sql);
                if($result != null){
                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    Video Added Successfully. <a href='add_video.php' class='alert-link'>Add More Videos</a>.
                 </div>";
                }else{
                    echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                    Unable to insert record in system. <a href='add_video.php' class='alert-link'>TRY AGAIN</a>.
                 </div>";
                }
            }else{
                echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                    Unable to upload video. <a href='add_video.php' class='alert-link'>TRY AGAIN</a>.
                 </div>";
            }
        }


    }else{
    	echo "<div class='alert alert-danger alert-dismissible'>
            <strong>Missing!</strong> Parameter Missing. Try again or contact developer.
            <a href='add_video.php' class='alert-link'>Click here</a> To try again.
        </div>";
    }


?>
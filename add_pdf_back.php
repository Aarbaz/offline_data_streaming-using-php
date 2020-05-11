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

    if(isset($_POST['p_title']) && isset($_POST['p_description']) && isset($_FILES['pdf']['name']) ){

    	$p_title = mysqli_real_escape_string($con, $_POST['p_title']);
        $p_description = mysqli_real_escape_string($con, $_POST['p_description']);

        $timestamp = time();

        $target_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'pdf'.DIRECTORY_SEPARATOR;
        $p_path = $target_dir .$timestamp.'_'.basename($_FILES['pdf']['name']);
        $p_path_name = $timestamp.'_'.basename($_FILES['pdf']['name']);

        $p_path_file_type = pathinfo($p_path,PATHINFO_EXTENSION);

        if($p_path_file_type != "pdf" && $p_path_file_type != "PDF"){
            echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                    You have to select only PDF File. <a href='add_pdf.php' class='alert-link'>TRY AGAIN</a>.
                 </div>";
        }else{
            if(move_uploaded_file($_FILES["pdf"]["tmp_name"], $p_path)){

                $sql = "INSERT INTO `pdf`(`p_title`, `p_description`, `p_path`, `p_time`) VALUES ('".$p_title."', '".$p_description."', '".$p_path_name."', '".$timestamp."')";

                
                $result = mysqli_query($con, $sql);
                if($result != null){
                    echo "<div class='alert alert-success alert-dismissible' role='alert'>
                    PDF Added Successfully. <a href='add_pdf.php' class='alert-link'>Add More PDF</a>.
                 </div>";
                }else{
                    echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                    Unable to insert record in system. <a href='add_pdf.php' class='alert-link'>TRY AGAIN</a>.
                 </div>";
                }
            }else{
                echo "<div class='alert alert-danger alert-dismissible alert-mg-b-0' role='alert'>
                    Unable to upload PDF. <a href='add_pdf.php' class='alert-link'>TRY AGAIN</a>.
                 </div>";
            }
        }


    }else{
    	echo "<div class='alert alert-danger alert-dismissible'>
            <strong>Missing!</strong> Parameter Missing. Try again or contact developer.
            <a href='add_pdf.php' class='alert-link'>Click here</a> To try again.
        </div>";
    }


?>
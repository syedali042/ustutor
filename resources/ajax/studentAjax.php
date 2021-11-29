<?php 

	require 'db.php';

	if(isset($_POST['data']) && $_POST['data']['action']=='student_registration'){

		$student_subjects = implode(',', $_POST['data']['student_subjects']);
		date_default_timezone_set('Asia/Karachi');
		$todayDate = date('Y-m-d');
		$selectstudents = mysqli_query($con, "select * from students where stu_email = '".$_POST['data']['student_email']."' ");
		
		$count = mysqli_num_rows($selectstudents);
		
		$students = mysqli_fetch_array($selectstudents);
		
		if($students['stu_email']==$_POST['data']['student_email']){

			$respMsg = 'Email Already Exist, Please Try Another Email !';	
			echo json_encode(array("status"=>false, "data"=>$respMsg));

		}else{

			$createStudent = mysqli_query($con, "INSERT INTO `students`(`stu_email`, `stu_name`, `stu_gender`, `stu_grades`, `stu_description`, `stu_dob`, `stu_city`, `stu_address`, `stu_institute_name`, `stu_desired_subjects`, `stu_password`, `stu_profile_image`, `stu_added`) VALUES('".$_POST['data']['student_email']."', '".$_POST['data']['student_name']."', '".$_POST['data']['student_gender']."', '".$_POST['data']['student_grade']."', '".$_POST['data']['student_description']."', '".$_POST['data']['student_dob']."', '".$_POST['data']['student_city']."', '".$_POST['data']['student_address']."', '".$_POST['data']['student_schoolname']."', '$student_subjects', '".md5($_POST['data']['student_password'])."', '".$_POST['data']['student_profile_image']."', '$todayDate' )");


			if($createStudent){
				$selectStudent = mysqli_query($con, "select * from students where stu_email = '".$_POST['data']['student_email']."' ");
				$student = mysqli_fetch_array($selectStudent);
				$_SESSION['student-login'] = $student;
				$respMsg = 'SignUp Successfully, Login To Continue...!';
				echo json_encode(array('status'=>true, 'data'=>$_POST, 'student_subjects'=>$student_subjects));

			}else{
				echo "Error";
			}

		}

	}else if(isset($_POST['data']) && $_POST['data']['action']=='student-login'){


		$checkUser = mysqli_query($con, "select * from students where stu_email = '".$_POST['data']['email']."' AND stu_password = '".md5($_POST['data']['password'])."' ");
		
		$count = mysqli_num_rows($checkUser);
		
		$user = mysqli_fetch_array($checkUser);
		
		if($count==1){

			$_SESSION['student-login'] = $user;
			$respMsg = 'Login Successfully';	
			echo json_encode(array("status"=>true, "data"=>$respMsg));

		}


	}else if (isset($_FILES) && $_POST['student_profile']){

        $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
        
        $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

        $path = '../assets/theme/images/student_profile_pics/'.$file_name;
        $fileName = strtolower($_FILES['main_image']['name']);
        $allowedExts = array('jpg','JPG','jpeg','JPEG','png','PNG','mp4','mpeg','avi');
        $extension = explode(".", $fileName);   
        $extension = end($extension);
        if(in_array($extension, $allowedExts))
        {
            if (move_uploaded_file($_FILES['main_image']['tmp_name'], $path))
            {   
               
                $img = $file_name;
                   
                echo json_encode(array("status" => true , "data" => $img));
                }
                else
                {
                echo json_encode(array("status" => false , "msg" => "File not Uploaded :( please try again or check your internet connection!"));
                }
            }
        else
        {
        	echo json_encode(array("status" => false , "msg" => "File must be an video file."));
        }
   	}else if(isset($_POST['data']) && $_POST['data']['action']=='editStudent'){

		$checkUser = mysqli_query($con, "update ".$_POST['data']['table']." set ".$_POST['data']['itemName']." = '".$_POST['data']['itemValue']."' where ".$_POST['data']['itemIdName']." = '".$_POST['data']['itemId']."' ");
		

		if($checkUser==true){
			$selectStudent = mysqli_query($con, "select * from students where stu_id = '".$_POST['data']['itemId']."' ");
			$user = mysqli_fetch_array($selectStudent);
			$_SESSION['student-login'] = $user;
			echo json_encode(array("status"=>true, "data"=>$_POST['data']));

		}


	}
	else if(isset($_POST['data']) && $_POST['data']['action']=='tutoring-request'){

		
		$insertRequest = mysqli_query($con, "INSERT INTO tutoring_requests(`req_tutoring_type`, `req_name`, `req_contact`, `req_email`, `req_zip`, `req_objective`, `req_session_date`, `req_session_time`, `req_session_hour`, `req_assigned_tutor`, `req_status`) VALUES('".$_POST['data']['tutoring_type']."', '".$_POST['data']['req_name']."', '".$_POST['data']['req_contact']."', '".$_POST['data']['req_email']."', '".$_POST['data']['req_zip']."', '".$_POST['data']['req_objective']."', '".$_POST['data']['req_session_date']."', '".$_POST['data']['req_session_time']."', '".$_POST['data']['req_session_hour']."', '', 'pending')");
		if($insertRequest==true){
			echo json_encode(array("status"=>true, "data"=>$_POST['data']));
		}


	}
?>
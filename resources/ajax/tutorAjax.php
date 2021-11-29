<?php 

	require 'db.php';

	if(isset($_POST['data']) && $_POST['data']['action']=='tutor_registration'){

		$tutor_documents = implode(',', $_POST['data']['tutor_documents']);
		$tutor_skills = implode(',', $_POST['data']['tutor_skills']);
		$tutor_specialization = implode(',', $_POST['data']['tutor_specialization']);
		$tutor_teaching_subjects = implode(',', $_POST['data']['tutor_teaching_subjects']);
		date_default_timezone_set('Asia/Karachi');
		$todayDate = date('Y-m-d H:i:s');
		$selectTutors = mysqli_query($con, "select * from tutors where tutor_email = '".$_POST['data']['tutor_email']."' ");
		
		$count = mysqli_num_rows($selectTutors);
		
		$tutors = mysqli_fetch_array($selectTutors);
		
		if($tutors['tutor_email']==$_POST['data']['tutor_email']){

			$respMsg = 'Email Already Exist, Please Try Another Email !';	
			echo json_encode(array("status"=>false, "data"=>$respMsg));

		}else{

			$createTutor = mysqli_query($con, "INSERT INTO tutors(tutor_name, tutor_gender, tutor_email, tutor_password, tutor_city, tutor_address, tutor_description, tutor_specialization, tutor_experience, tutor_skills, tutor_teaching_subjects, tutor_availability_hours, tutor_profile_image, tutor_documents, tutor_qualification, tutor_tutoring_type, tutor_rank, tutor_fee, tutor_added, account_status) VALUES('".$_POST['data']['tutor_name']."', '".$_POST['data']['tutor_gender']."', '".$_POST['data']['tutor_email']."', '".md5($_POST['data']['tutor_password'])."', '".$_POST['data']['tutor_city']."','".$_POST['data']['tutor_address']."', '".$_POST['data']['tutor_description']."', '$tutor_specialization', '".$_POST['data']['tutor_experience']."', '$tutor_skills', '$tutor_teaching_subjects', '".$_POST['data']['tutor_availability_hours']."', '".$_POST['data']['tutor_profile_image']."', '$tutor_documents', '".$_POST['data']['tutor_qualification']."', '".$_POST['data']['tutor_tutoring_type']."', '".$_POST['data']['tutor_rank']."', '".$_POST['data']['tutor_fee']."', '$todayDate', 	'under_review')");

			if($createTutor){
				$selectTutor = mysqli_query($con, "select * from tutors where tutor_email = '".$_POST['data']['tutor_email']."' ");
				$tutor = mysqli_fetch_array($selectTutor);
				$_SESSION['tutor-login'] = $tutor;
				$respMsg = 'SignUp Successfully, Login To Continue...!';
				echo json_encode(array('status'=>true, 'data'=>$_POST, 'tutor_documents'=>$tutor_documents, 'tutor_skills'=>$tutor_skills, 'tutor_specialization'=>$tutor_specialization, 'tutor_teaching_subjects'=>$tutor_teaching_subjects, 'resp'=>$respMsg));

			}

		}

	}else if(isset($_POST['data']) && $_POST['data']['action']=='tutor-login'){


		$checkUser = mysqli_query($con, "select * from tutors where tutor_email = '".$_POST['data']['email']."' AND tutor_password = '".md5($_POST['data']['password'])."' ");

		$count = mysqli_num_rows($checkUser);
		
		$user = mysqli_fetch_array($checkUser);
		
		if($count==1){

			$_SESSION['tutor-login'] = $user;
			$respMsg = 'Login Successfully';	
			echo json_encode(array("status"=>true, "data"=>$respMsg));

		}


	}else if (isset($_FILES) && $_POST['tutor_profile']){

        $ext = pathinfo($_FILES["main_image"]["name"], PATHINFO_EXTENSION);
        
        $file_name = md5(date('YmdHms').$_FILES["main_image"]['name']).'.'.$ext;

        $path = '../assets/theme/images/tutor_profile_pics/'.$file_name;
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
   	}else if(isset($_POST['data']) && $_POST['data']['action']=='editTutor'){

		$checkUser = mysqli_query($con, "update ".$_POST['data']['table']." set ".$_POST['data']['itemName']." = '".$_POST['data']['itemValue']."' where ".$_POST['data']['itemIdName']." = '".$_POST['data']['itemId']."' ");
		

		if($checkUser==true){
			$selectStudent = mysqli_query($con, "select * from tutors where tutor_id = '".$_POST['data']['itemId']."' ");
			$user = mysqli_fetch_array($selectStudent);
			$_SESSION['tutor-login'] = $user;
			echo json_encode(array("status"=>true, "data"=>$_POST['data']));

		}


	}
?>
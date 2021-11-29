<?php 
    
    // error_reporting(-1);
    // ini_set('display_errors', 'On');
    // set_error_handler("var_dump");
	require '../../ajax/db.php';

	// if(isset($_POST['data']) && $_POST['data']['action']=='tutor_registration'){

	// 	$tutor_documents = implode(',', $_POST['data']['tutor_documents']);
	// 	$tutor_skills = implode(',', $_POST['data']['tutor_skills']);
	// 	$tutor_specialization = implode(',', $_POST['data']['tutor_specialization']);
	// 	$tutor_teaching_subjects = implode(',', $_POST['data']['tutor_teaching_subjects']);
	// 	date_default_timezone_set('Asia/Karachi');
	// 	$todayDate = date('Y-m-d H:i:s');
	// 	$selectTutors = mysqli_query($con, "select * from tutors where tutor_email = '".$_POST['data']['tutor_email']."' ");
		
	// 	$count = mysqli_num_rows($selectTutors);
		
	// 	$tutors = mysqli_fetch_array($selectTutors);
		
	// 	if($tutors['tutor_email']==$_POST['data']['tutor_email']){

	// 		$respMsg = 'Email Already Exist, Please Try Another Email !';	
	// 		echo json_encode(array("status"=>false, "data"=>$respMsg));

	// 	}else{

	// 		$createTutor = mysqli_query($con, "INSERT INTO tutors(tutor_name, tutor_gender, tutor_email, tutor_password, tutor_city, tutor_address, tutor_description, tutor_specialization, tutor_experience, tutor_skills, tutor_teaching_subjects, tutor_availability_hours, tutor_profile_image, tutor_documents, tutor_qualification, tutor_tutoring_type, tutor_rank, tutor_fee, tutor_added, account_status) VALUES('".$_POST['data']['tutor_name']."', '".$_POST['data']['tutor_gender']."', '".$_POST['data']['tutor_email']."', '".md5($_POST['data']['tutor_password'])."', '".$_POST['data']['tutor_city']."','".$_POST['data']['tutor_address']."', '".$_POST['data']['tutor_description']."', '$tutor_specialization', '".$_POST['data']['tutor_experience']."', '$tutor_skills', '$tutor_teaching_subjects', '".$_POST['data']['tutor_availability_hours']."', '".$_POST['data']['tutor_profile_image']."', '$tutor_documents', '".$_POST['data']['tutor_qualification']."', '".$_POST['data']['tutor_tutoring_type']."', '".$_POST['data']['tutor_rank']."', '".$_POST['data']['tutor_fee']."', '$todayDate', 	'under_review')");

	// 		if($createTutor){
				
	// 			$respMsg = 'SignUp Successfully, Login To Continue...!';
	// 			echo json_encode(array('status'=>true, 'data'=>$_POST, 'tutor_documents'=>$tutor_documents, 'tutor_skills'=>$tutor_skills, 'tutor_specialization'=>$tutor_specialization, 'tutor_teaching_subjects'=>$tutor_teaching_subjects, 'resp'=>$respMsg));

	// 		}

	// 	}

	// }else
	if(isset($_POST['data']) && $_POST['data']['action']=='admin-login'){


		$checkUser = mysqli_query($con, "select * from admin where admin_username = '".$_POST['data']['email']."' AND admin_pass = '".$_POST['data']['password']."' ");

		$count = mysqli_num_rows($checkUser);
		
		$user = mysqli_fetch_array($checkUser);
		
		if($count==1){

			$_SESSION['admin-login'] = $user;
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


	}else if(isset($_POST['action']) && $_POST['action']=='getTutor'){

		$selectTutor = mysqli_query($con, "SELECT * FROM tutors WHERE tutor_id = '".$_POST['tutor_id']."' ");
		$row = mysqli_fetch_assoc($selectTutor);
		if($selectTutor==true){
			echo json_encode(array("status"=>true, "data"=>$row));
		}

	}else if(isset($_POST['data']['action']) && $_POST['data']['action']=='updateThisTutor'){
		$updateTutor = mysqli_query($con, "UPDATE tutors SET tutor_name = '".$_POST['data']['tutor_name']."', tutor_email = '".$_POST['data']['tutor_email']."', tutor_description = '".$_POST['data']['tutor_description']."', tutor_specialization = '".$_POST['data']['tutor_specialization']."', tutor_city = '".$_POST['data']['tutor_city']."', tutor_experience = '".$_POST['data']['tutor_experience']."', tutor_gender = '".$_POST['data']['tutor_gender']."', tutor_password = '".$_POST['data']['tutor_password']."', tutor_address = '".$_POST['data']['tutor_address']."', tutor_skills = '".$_POST['data']['tutor_skills']."', tutor_teaching_subjects = '".$_POST['data']['tutor_teaching_subjects']."' WHERE tutor_id = '".$_POST['data']['tutor_id']."' ");
		if($updateTutor==true){
			echo json_encode(array("status"=>true, "data"=>$_POST));
		}

	}else if(isset($_POST['data']['action']) && $_POST['data']['action']=='updateThisStudent'){
		$updateTutor = mysqli_query($con, "UPDATE students SET stu_name = '".$_POST['data']['stu_name']."', stu_email = '".$_POST['data']['stu_email']."', stu_description = '".$_POST['data']['stu_description']."', stu_institute_name = '".$_POST['data']['stu_institute_name']."', stu_city = '".$_POST['data']['stu_city']."', stu_gender = '".$_POST['data']['stu_gender']."', stu_password = '".$_POST['data']['stu_password']."', stu_address = '".$_POST['data']['stu_address']."' WHERE stu_id = '".$_POST['data']['stu_id']."' ");
		if($updateTutor==true){
			echo json_encode(array("status"=>true, "data"=>$_POST));
		}

	}else if(isset($_POST['data']['action']) && $_POST['data']['action']=='updateThisRequest'){
		
		$updateTutor = mysqli_query($con, "UPDATE tutoring_requests SET req_tutoring_type = '".$_POST['data']['req_tutoring_type']."', req_name = '".$_POST['data']['req_name']."', req_contact = '".$_POST['data']['req_contact']."', req_email = '".$_POST['data']['req_email']."', req_assigned_tutor = '".$_POST['data']['req_assigned_tutor']."', req_objective = '".$_POST['data']['req_objective']."', req_session_date = '".$_POST['data']['req_session_date']."', req_session_time = '".$_POST['data']['req_session_time']."', req_session_hour = '".$_POST['data']['req_session_hour']."', req_zip = '".$_POST['data']['req_zip']."' WHERE req_id = '".$_POST['data']['req_id']."' ");
		if($updateTutor==true){
			echo json_encode(array("status"=>true, "data"=>$_POST));
		}

	}else if(isset($_POST['data']['action']) && $_POST['data']['action']=='assignTutor'){

		$assignTutor = mysqli_query($con, "UPDATE tutoring_requests SET req_assigned_tutor = '".$_POST['data']['tutor_id']."', req_status = 'Tutor Assigned' WHERE req_id = '".$_POST['data']['req_id']."' ");
		if($assignTutor==true){

			$selectTutor = mysqli_query($con, "SELECT * FROM tutors WHERE tutor_id = '".$_POST['data']['tutor_id']."' ");
			$row = mysqli_fetch_assoc($selectTutor);
			if($row==true){
				$to = $row['tutor_email'];
	            $subject = 'New Session Assigned';
	            $message = 'New Session is Assigned to you visit your dashboard for more details';
	           // $header = 'From: ';
	            if(mail($to, $subject, $message, 'admin@stellarprep.org')){
	                $tmailResp = 'Mail Sent';
	            }else{
	                $tmailResp = 'Error';
	            }  
			}
               
			$selectStudent = mysqli_query($con, "SELECT * FROM tutoring_requests WHERE req_id = '".$_POST['data']['req_id']."' ");
			$row2 = mysqli_fetch_assoc($selectStudent);
			if($row2==true){
				$to = $row2['req_email'];
	            $subject = 'Session Request Confirmed';
	            $message = 'Your Session is confirmed and tutor is assigned';
	           // $header = 'From: admin@stellarprep.org';
	            if(mail($to, $subject, $message, 'admin@stellarprep.org')){
	                $rmailResp = 'Mail Sent';
	            }else{
	                $rmailResp = 'Error';
	            }  
			}
			
			echo json_encode(array("status"=>true, "data"=>$rmailResp, "data2"=>$tmailResp));
		}

	}else if(isset($_POST['action']) && $_POST['action']=='getPendingRequests'){


		$getPendingRequests = mysqli_query($con, "SELECT * FROM tutoring_requests WHERE req_status = 'pending' ");

		$pendingeRequests = array();
		while ($result=mysqli_fetch_assoc($getPendingRequests)) {
			$pendingRequests[] = $result;
		}
		echo json_encode(array("status"=>true, "data"=>$pendingRequests));

	}else if(isset($_POST['action']) && $_POST['action']=='getActiveRequests'){

		$getActiveRequests = mysqli_query($con, "SELECT * FROM tutoring_requests WHERE req_status = 'Tutor Assigned' ");

		$activeRequests = array();
		while ($result=mysqli_fetch_assoc($getActiveRequests)) {
			$activeRequests[] = $result;
		}
		echo json_encode(array("status"=>true, "data"=>$activeRequests));

	}else if(isset($_POST['action']) && $_POST['action']=='getCompletedRequests'){

		$getCompletedRequests = mysqli_query($con, "SELECT * FROM tutoring_requests WHERE req_status = 'Completed' ");

		$completedRequests = array();
		while ($result=mysqli_fetch_assoc($getCompletedRequests)) {
			$completedRequests[] = $result;
		}
		echo json_encode(array("status"=>true, "data"=>$completedRequests));

	}else if(isset($_POST['action']) && $_POST['action']=='getPaymentTutor'){

		$getPaymentTutor = mysqli_query($con, "SELECT * FROM tutors WHERE tutor_id = '".$_POST['tutor_id']."' ");
		$result=mysqli_fetch_assoc($getPaymentTutor);
		
		echo json_encode(array("status"=>true, "data"=>$result));

	}else if(isset($_POST['action']) && $_POST['action']=='getSentPayments'){

		$getCompletedRequests = mysqli_query($con, "SELECT * FROM payments WHERE payment_status = 'Received' ");

		$completedRequests = array();
		while ($result=mysqli_fetch_assoc($getCompletedRequests)) {
			$completedRequests[] = $result;
		}
		echo json_encode(array("status"=>true, "data"=>$completedRequests));

	}else if(isset($_POST['action']) && $_POST['action']=='getPendingPayments'){

		$getCompletedRequests = mysqli_query($con, "SELECT * FROM payments WHERE payment_status = 'Pending' ");

		$completedRequests = array();
		while ($result=mysqli_fetch_assoc($getCompletedRequests)) {
			$completedRequests[] = $result;
		}
		
		echo json_encode(array("status"=>true, "data"=>$completedRequests));

	}else if(isset($_POST['action']) && $_POST['action']=='sendPayment'){
		
		$getCompletedRequests = mysqli_query($con, "UPDATE payments SET payment_status = 'Received' WHERE payment_id = '".$_POST['payment_id']."' ");

		if($getCompletedRequests==true){
			echo json_encode(array("status"=>true));
		}

	}else if(isset($_POST['action']) && $_POST['action']=='deletePayment'){

		$getCompletedRequests = mysqli_query($con, "DELETE FROM payments WHERE payment_id = '".$_POST['payment_id']."' ");

		if($getCompletedRequests==true){
			echo json_encode(array("status"=>true));
		}

	}
?>
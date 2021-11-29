<?php
class MD_MAINMODEL extends LB_ezSQL_mysql
{
	private $db;
	public $lastid = NULL;
	public $pages ='';
	public $admin = FALSE;

	public function __construct($admin = FALSE)
	{
		$this->admin = $admin == "admin" ? TRUE : FALSE;

		$this->db = new LB_ezSQL_mysql(_DB_USER,_DB_PASS,_DB_NAME,_DB_HOST);
		parent::__construct(_DB_USER,_DB_PASS,_DB_NAME,_DB_HOST);
		$this->mid = isset($_SESSION['mid']) ? $_SESSION['mid'] : 0;
	}

	public function index(){
		err("Looks Like, you're here by mistake");
		die();
	}

	public function login($username, $password, $check = FALSE)
	{
		$username = $this->db->escape(strtolower($username));
		if(!$check){$password = md5($this->db->escape($password));}
		return $this->db->get_row("SELECT * FROM `user` WHERE `username` = \"$username\" AND `password` = \"$password\";");
	}
	public function get_reg_whole()
	{
		return $this->db->get_row("SELECT * FROM `reg_detail` LIMIT 1");
	}
	
	public function get_package_details($pckg = "1")
	{
		switch($pckg){
			case (string)"1":
				$data = $this->db->get_row("SELECT `one_title` as `title`,`one_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;

			case (string)"2":
				$data = $this->db->get_row("SELECT `two_title` as `title`,`two_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;

			case (string)"3":
				$data = $this->db->get_row("SELECT `three_title` as `title`,`three_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;

			case (string)"4":
				$data = $this->db->get_row("SELECT `four_title` as `title`,`four_price` as `amount` FROM `reg_detail` LIMIT 1");
				$data['total'] = $data['amount'];
			break;
		}
		return $data;

	}

	public function check_username($user = '')
	{
		if(isset($user) && is_string($user) && strlen($user) > 2)
		{
			$user = $this->escape($user);
			return (bool)$this->get_row("SELECT * FROM `user` WHERE `username` = '$user' LIMIT 1");
		}
		else
		{
			return FALSE;
		}
	}

	public function check_email($email = '')
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if(is_string($email))
			{
				$email = $this->escape($email);
				return (bool)$this->get_row("SELECT * FROM `user` WHERE `email` = '$email' LIMIT 1");
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}
	public function check_contact_email($email = '')
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if(is_string($email))
			{
				$email = $this->escape($email);
				return (bool)$this->get_row("SELECT * FROM `cms_contact` WHERE `email` = '$email' LIMIT 1");
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}

	public function _update($table, $vals, $cond, $exec = TRUE)
	{

		if(is_array($vals) && is_array($cond))
		{
			try{
			$vv = '';
			$i = 0;
			$table = "`".trim(strtolower($table))."`";
			foreach($vals as $k=>$v):
				$v = $this->escape($v);
				if($i != 0) $vv .= " ,";
				$vv .= "`$k` = '$v' ";
				$i++;
			endforeach;
			$cc = '';
			$i = 0;
			foreach($cond as $k=>$v):
				$v = $this->escape($v);
				if($i != 0){$cc .= " AND ";}
				else{$cc .= "WHERE ";}
				$cc .= "`$k` = '$v'";
				$i++;
			endforeach;

			$sql = "UPDATE $table SET $vv $cc";
			if($exec)
				return $this->db->query($sql);
			else
				return $sql;
			}
			catch(Exception $e)
			{
				return FALSE;
			}

		}
		return FALSE;
	}

	public function _delete($table, $cond, $exec = TRUE)
	{
		if(is_array($cond))
		{
			try{

				$table = "`".trim(strtolower($table))."`";
				$cc = '';
				$i = 0;
				foreach($cond as $k=>$v):
					if($i != 0){$cc .= " AND ";}
					else{$cc .= "WHERE ";}
					$cc .= "`$k` = '$v'";
					$i++;
				endforeach;

				$sql = "DELETE FROM $table $cc";
				if($exec)
					return $this->db->query($sql);
				else
					return $sql;
			}
			catch(Exception $e)
			{
				return FALSE;
			}

		}
		return FALSE;
	}


	public function _insert($table, $vals, $exec = TRUE)
	{
		if(is_array($vals))
		{
			$vv = '';
			$i = 0;
			$table = "`".trim(strtolower($table))."`";
			foreach($vals as $k=>$v):
				$v = $this->escape($v);
				if($i != 0) $vv .= " ,";
				$vv .= "`$k` = '$v' ";
				$i++;
			endforeach;
			$sql = "INSERT INTO $table SET $vv";
			if($exec)
			{
				$data = $this->db->query($sql);
				if($data)
				{
					$this->lastid = $this->db->insert_id;

				}
				return $data;
			}
			else
				return $sql;

		}
		else
		return FALSE;
	}



	public function extract_img($html)
	{
		error_off();
		preg_match_all('/<img[^>]+>/i',$html, $result);
		$img = array();
		foreach($result[0] as $img_tag)
		{
			preg_match_all('/(src)=("[^"]*")/i',$img_tag, $img4);
			$img[] = $img4;
		}

		return isset($img[0]['2'][0]) && $img[0]['2'][0] != "" ? preg_replace('["]',"",$img[0]['2'][0]) : IMG.'ad.jpg';
	}



	/*
	 * *****************************************************************************************
	 * Main Functions start here
	 */

/*****************************************************************
 * Get all companies, buyers, offers, tips and images from the DB
 ******************************************************************/
	public function get_all_category()
	{
		return $this->get_results("SELECT * FROM `category` ORDER BY `category_id` ASC;");
	}	
	public function get_category_by_id($id)
	{
		return $this->get_row("SELECT * FROM `category` WHERE `category_id` = '$id' ");
	}

	public function getAllStudents(){
		return $this->get_results("SELECT * FROM `students` ORDER BY `stu_id` DESC");	
	}

	public function getAllTutors(){
		return $this->get_results("SELECT * FROM `tutors` ORDER BY `tutor_id` DESC");	
	}

	public function getAllTutoringRequests(){
		return $this->get_results("SELECT * FROM `tutoring_requests` ORDER BY `req_id` DESC");	
	}

	public function getTutor($id)
	{
		return $this->get_row("SELECT * FROM `tutors` WHERE tutor_id = '$id' ");	
	}

	public function getStudent($id)
	{
		return $this->get_row("SELECT * FROM `students` WHERE stu_id = '$id' ");	
	}

	public function getRequest($id)
	{
		return $this->get_row("SELECT * FROM `tutoring_requests` WHERE req_id = '$id' ");	
	}

	public function pendingRequests()
	{
		return $this->get_results("SELECT * FROM `tutoring_requests` WHERE req_status = 'pending' ");	
	}

	public function assignedRequests()
	{
		return $this->get_results("SELECT * FROM `tutoring_requests` WHERE req_status = 'Tutor Assigned' ");	
	}

	public function upcomingTutorSessions($id)
	{
		return $this->get_results("SELECT * FROM `tutoring_requests` WHERE req_status = 'Tutor Assigned' ");
	}

	public function previousTutorSessions($id)
	{
		return $this->get_results("SELECT * FROM `tutoring_requests` WHERE req_status = 'Completed' ");
	}

	public function getTutorPayments($id){

		return $this->get_results("SELECT * FROM `payments` WHERE tutor_id = '$id' ");

	}

	public function getSessionRequests($email)
	{
		return $this->get_results("SELECT * FROM `tutoring_requests` WHERE req_email = '$email' AND req_status = 'pending' ");
	}


	public function getStudentUpcommingSessions($email)
	{
		return $this->get_results("SELECT * FROM `tutoring_requests` WHERE req_email = '$email' AND req_status = 'Tutor Assigned' ");
	}
	
	public function studentAllSessions($id){

		return $this->get_results("SELECT * FROM `tutoring_requests` WHERE req_email = '$id' ");

	}

	public function getPendingPayments(){

		return $this->get_results("SELECT * FROM `payments` WHERE payment_status = 'Pending' ");

	}

	public function getPaymentsTutors($id){

		return $this->get_results("SELECT * FROM `tutors` WHERE tutor_id = '$id' ");

	}

}

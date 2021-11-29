<?php

class CL_HILDES
{
	public function __construct()
	{
		$this->model = new MD_MAINMODEL();
		$this->temp = new LB_TEMPLATE('header', 'footer');
		$this->admin = new LB_TEMPLATE('admin/header', 'admin/footer');
		$this->blank = new LB_TEMPLATE('', '');
	}

	public function index()
	{
		$this->temp->loadcontent('index');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function tutorRegistration()
	{
		$this->temp->loadcontent('tutorRegistration');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function studentRegistration()
	{
		$this->temp->loadcontent('studentRegistration');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function studentLogin()
	{
		$this->temp->loadcontent('studentLogin');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function tutorLogin()
	{
		$this->temp->loadcontent('tutorLogin');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function requestATutor()
	{
		$this->temp->loadcontent('requestForTutor');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function twilio()
	{
		$this->temp->loadcontent('twilio');
		$data['title'] = "My First App";
		$this->temp->loadview($data);
	}

	public function admin()
	{
		$this->admin->loadcontent('admin/index');
		if(!isset($_SESSION['admin-login'])){
			redirect('adminLogin');
		}
		$data['countStudents'] = $this->model->getAllStudents();
		$data['countTutors'] = $this->model->getAllTutors();
		$data['countPendingRequests'] = $this->model->pendingRequests();
		$data['countAssignedRequests'] = $this->model->assignedRequests();
		$data['title'] = "My First App";
		$this->admin->loadview($data);
	}
	public function adminLogin()
	{
		$this->blank->loadcontent('admin/login');
		$data['title'] = "My First App";
		$this->blank->loadview($data);
	}

	public function egnahcssap()
	{
		$this->blank->loadcontent('admin/forgetPass');
		$data['title'] = "My First App";
		$this->blank->loadview($data);
	}

	public function students()
	{
		$this->admin->loadcontent('admin/students');
		if(!isset($_SESSION['admin-login'])){
			redirect('adminLogin');
		}
		$data['students'] = $this->model->getAllStudents();
		$this->admin->loadview($data);
	}

	public function tutors()
	{
		$this->admin->loadcontent('admin/tutors');
		if(!isset($_SESSION['admin-login'])){
			redirect('adminLogin');
		}
		$data['tutors'] = $this->model->getAllTutors();
		$this->admin->loadview($data);
	}

	public function tutoringRequests()
	{
		$this->admin->loadcontent('admin/tutoringRequests');
		if(!isset($_SESSION['admin-login'])){
			redirect('adminLogin');
		}
		$data['tutors'] = $this->model->getAllTutors();
		$data['tutoringRequests'] = $this->model->getAllTutoringRequests();
		$this->admin->loadview($data);
	}

	public function contact(){

		$this->temp->loadcontent('contact');
		
		$this->temp->loadview($data);

	}

	public function editTutor(){

		$this->admin->loadcontent('admin/editTutors');
		if(isset($_GET['tutor_id'])){
			$data['tutor'] = $this->model->getTutor($_GET['tutor_id']);
		}
		$this->admin->loadview($data);

	}

	public function editStudent(){

		$this->admin->loadcontent('admin/editStudent');
		if(isset($_GET['stu_id'])){
			$data['stu'] = $this->model->getStudent($_GET['stu_id']);
		}
		$this->admin->loadview($data);

	}

	public function editRequest(){

		$this->admin->loadcontent('admin/editRequest');
		if(isset($_GET['req_id'])){
			$data['req'] = $this->model->getRequest($_GET['req_id']);
			$tutor_id = $data['req']['req_assigned_tutor'];
			$data['tutor'] = $this->model->getTutor($tutor_id);
			$data['tutors'] = $this->model->getAllTutors();
		}
		$this->admin->loadview($data);

	}

	public function studentAccount(){

		$this->temp->loadcontent('studentAccount');
		if(!isset($_SESSION['student-login'])){

			redirect('index');

		}else{
			
			$data['getSessionRequests'] = $this->model->getSessionRequests($_SESSION['student-login']['stu_email']);
			$data['getStudentUpcommingSessions'] = $this->model->getStudentUpcommingSessions($_SESSION['student-login']['stu_email']);
			$data['studentAllSessions'] = $this->model->studentAllSessions($_SESSION['student-login']['stu_email']);

		}
		$this->temp->loadview($data);

	}

	public function tutorAccount(){

		$this->temp->loadcontent('tutorAccount');
		if(!isset($_SESSION['tutor-login'])){

			redirect('index');

		}else{
			$data['getUpcomingSessions'] = $this->model->upcomingTutorSessions($_SESSION['tutor-login']['tutor_id']);
			$data['getPreviousSessions'] = $this->model->previousTutorSessions($_SESSION['tutor-login']['tutor_id']);
			$data['getPayments'] = $this->model->getTutorPayments($_SESSION['tutor-login']['tutor_id']);
		}

		$this->temp->loadview($data);

	}

	public function logout(){

		$this->temp->loadcontent('logout');
		$this->temp->loadview($data);

	}
	public function ACTTutoring(){

		$this->temp->loadcontent('stellar_actprep');
		$this->temp->loadview($data);

	}

	public function chat(){

		$this->blank->loadcontent('chat');
		$this->blank->loadview($data);

	}

	public function studentRequest(){

		$this->temp->loadcontent('studentRequest');
		
		$this->temp->loadview($data);

	}

	public function SATTutoring(){

		$this->temp->loadcontent('stellar_satprep');
		
		$this->temp->loadview($data);

	}	

	public function payments(){

		$this->admin->loadcontent('admin/payments');
		$data['getPendingPayments'] = $this->model->getPendingPayments();
		$this->admin->loadview($data);

	}	

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Adminmodel');
		$this->load->model('Usermodel');
		$this->load->library('notifications');
		$this->load->library('Translate');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function validate_user()
	{

		$username =  $this->input->post('UserName',TRUE);
		$password =  $this->input->post('Password',TRUE);

		if(!is_null($username) && !is_null($password))
		{
			$operator_valid = $this->Adminmodel->get_by_username_password($username,$password);
			$user_valid = $this->Usermodel->get_by_email_password($username,$password);
			if(count($operator_valid))
			{
				$arrayName = array(
					'FullNameOperator' => $operator_valid->Fullname ,
					'UsernameOperator' => $operator_valid->userName ,
					'PasswordOperator' => $operator_valid->Password,
				);

				$this->session->set_userdata($arrayName);
				redirect('Operator/Dashboard');
			}
			elseif(count($user_valid))
			{
				$arrayName = array(
					'IdUser' => $user_valid->Fullname ,
					'FullNameUser' => $user_valid->userName ,
				);

				$this->session->set_userdata($arrayName);
				redirect('Operator/Dashboard');
			}
			else
				$this->unValidUser();
		}
		else
			$this->emptyValue();
	}

	public function login()
	{
		$this->template->load('_layout_admin','includes/index');
	}

	function logout()
	{
		$this->session->userdata = array();
		$this->session->sess_destroy();
		$this->load->view('index');
	}

	function unValidUser()
	{
		$this->notifications->notify(Translate::UnValidUser);
		echo $this->notifications->display_js();
		$this->index();
	}

	function emptyValue()
	{
		$this->notifications->notify(Translate::InsertAccountInfo);
		echo $this->notifications->display_js();
		$this->index();
	}
}

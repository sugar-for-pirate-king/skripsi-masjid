<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('admin_model');
	}

	public function login()
	{
		if($this->admin_model->is_LoggedIn())
		{
			redirect('admin/beranda');	
		}

		$this->form_validation->set_rules('username', 'Username', 'required|callback_checkUsername');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_checkPassword');

		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('admin/auth/login');
		}
		else
		{
			$user = $this->admin_model->get_admin('username', $this->input->post('username'));

			//set session
			$_SESSION['user_id'] = $user['id_user'];
			$_SESSION['logged_in'] = TRUE;

			redirect('admin/beranda');
		}
	}

	public function checkUsername($username)
	{
		if(!$this->admin_model->get_admin('username', $username))
		{
			$this->form_validation->set_message('checkUsername', 'Username is not in database');
			return FALSE;
		}

		return TRUE;
	}

	public function checkPassword($password)
	{
		if(!$this->admin_model->get_admin('password', $password))
		{
			$this->form_validation->set_message('checkPassword', 'Password is not in database');
			return FALSE;
		}

		return TRUE;	
	}

	public function logout()
	{
		unset($_SESSION['user_id'], $_SESSION['logged_in']);
		redirect('login');
	}
}

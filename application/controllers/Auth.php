<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('M_User');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Form Validation

		// Begin Login
		$result = $this->M_User->check_login($username,$password);
		$userinfo = $this->M_User->getUserInfo($username);
		if($result == TRUE) {
			//Session
			$session = array(
			        'id'  		=> $userinfo->id,
			        'level'  	=> $userinfo->level,
			        'username'  => $username,
			        'logged_in' => TRUE
			);

			$this->session->set_userdata($session);
			redirect("dashboard");
		} else {
			$this->session->set_flashdata('message', 'Username atau Password Salah');
			redirect("auth");
		}
	}

	public function logout() {		
		$this->session->sess_destroy();
		redirect("auth");
	}
}

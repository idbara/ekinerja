<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {	

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata['logged_in'] == FALSE) {
			redirect("auth");
		}
		$this->load->model("M_User");
	}

	public function index()
	{		
        if($this->session->userdata('level') != 'Administrator') redirect(site_url());
		$data['title'] 		= "Management User";
		$data['custom_css'] = '
		<!--dynamic table-->
	    <link href="'.base_url().'assets/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
	    <link href="'.base_url().'assets/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
	    <link rel="stylesheet" href="'.base_url().'assets/js/data-tables/DT_bootstrap.css" />';
		$data['custom_js'] 	= '
		<script type="text/javascript" language="javascript" src="'.base_url().'assets/js/advanced-datatable/js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="'.base_url().'assets/js/data-tables/DT_bootstrap.js"></script>
		<!--dynamic table initialization -->
		<script src="'.base_url().'assets/js/dynamic_table_init.js"></script>';
		$data['allPengguna'] = $this->M_User->getAll();
		$this->load->view("layout/header",$data);
		$this->load->view("user/show");
		$this->load->view("layout/footer");
	}

	public function create() {
        if($this->session->userdata('level') != 'Administrator') redirect(site_url());

		$data['title'] 		= "Management User";
		$this->load->view("layout/header",$data);
		$this->load->view("user/create");
		$this->load->view("layout/footer");
	}

	public function post_create() {
        if($this->session->userdata('level') != 'Administrator') redirect(site_url());
		if($this->input->post() == FALSE) redirect("user/create");
		$level 		= $this->input->post("level");
		$username	= $this->input->post("username");
		$password 	= md5($this->input->post("password"));
		$name 		= $this->input->post("name");
		$email 		= $this->input->post("email");

		if($this->M_User->create($username,$password,$email,$name,$level) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("user/create");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("user/create");
		}

	}

	public function edit($id) {
        if($this->session->userdata('level') != 'Administrator') redirect(site_url());
		$data['user']	= $this->M_User->getDetail($id);
		$data['title'] 	= "Ubah Pengguna";
		$this->load->view("layout/header",$data);
		$this->load->view("user/edit");
		$this->load->view("layout/footer");

	}

	public function post_edit() {		
        if($this->session->userdata('level') != 'Administrator') redirect(site_url());
		if($this->input->post() == FALSE) redirect("user");
		$id 		= $this->input->post("id");
		$level 		= $this->input->post("level");
		$username	= $this->input->post("username");
		$name 		= $this->input->post("name");
		$email 		= $this->input->post("email");

		if($this->M_User->edit($id,$username,$email,$name,$level) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("user");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("user/edit/".$id);
		}
	}

	public function delete($id) {		
        if($this->session->userdata('level') != 'Administrator') redirect(site_url());
		$data['user']	= $this->M_User->getDetail($id);
		$data['title'] 	= "Ubah Pengguna";
		$this->load->view("layout/header",$data);
		$this->load->view("user/delete");
		$this->load->view("layout/footer");
	}

	public function post_delete() {
        if($this->session->userdata('level') != 'Administrator') redirect(site_url());
		if($this->input->post() == FALSE) redirect("user");
		$id 		= $this->input->post("id");
		$username	= $this->input->post("username");

		if($this->M_User->delete($id,$username) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("user");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("user");
		}
	}

	public function profile() {
		$data['title'] 	= "Profile";
		$this->load->view("layout/header",$data);
		echo 'Nama : '.$this->session->userdata('username');
		$this->load->view("layout/footer");
	}

	public function change_password() {		
		$data['title'] 	= "Change Password";
		$this->load->view("layout/header",$data);
		echo 'Nama : '.$this->session->userdata('username');
		$this->load->view("layout/footer");
	}

	public function post_change_password() {				
		if($this->input->post() == FALSE) redirect("user");
		$id 		= $this->input->post("id");
		$password 	= md5($this->input->post("pass1"));

		if($this->input->post('pass1') == $this->input->post('pass2')) {
			if($this->M_User->changePassword($password,$id) == TRUE) {
				$this->session->set_flashdata('message', 'Success');
				redirect("user");
			} else {			
				$this->session->set_flashdata('message', 'Gagal');
				redirect("user/edit/".$id);
			}
		} else {
			$this->session->set_flashdata('message', 'Gagal');
			redirect("user/edit/".$id);

		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenkin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata['logged_in'] == FALSE) {
			redirect("auth");
		}
		$this->load->model("M_Jenkin");
	}

	public function index()
	{
		$data['title'] 		= "Jenis Kegiatan";
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

		$data['allJenkin'] =$this->M_Jenkin->getAll();
		$data['judul']		= "Jenis Kegiatan";

		$this->load->view("layout/header",$data);
		$this->load->view("jenkin/show");
		$this->load->view("layout/footer");
	}

	public function create() {
		$data['title'] = "Input Kegiatan";
		$data['custom_css'] = '';
		$this->load->view("layout/header",$data);
		$this->load->view("jenkin/create");
		$this->load->view("layout/footer");
	}

	public function post_create() {
		if($this->input->post() == FALSE) redirect("jenkin/create");
		$kegiatan 	= $this->input->post("kegiatan");

		if($this->M_Jenkin->create($kegiatan) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("jenkin/");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("jenkin/create");
		}
	}

	public function edit($id) {			
		$data['title'] 	= "";
		$data['custom_css'] = '';


		$data['jenkin'] =$this->M_Jenkin->getDetail($id);

		$this->load->view("layout/header",$data);
		$this->load->view("jenkin/edit");
		$this->load->view("layout/footer");
	}

	public function post_edit() {		
		if($this->input->post() == FALSE) redirect("jenkin");
		$kegiatan 	= $this->input->post("kegiatan");
		$id 		= $this->input->post("id");

		if($this->M_Jenkin->edit($id,$kegiatan) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("jenkin/");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("jenkin/");
		}
	}

	public function delete($id) {		
		$data['jenkin']	= $id;
		$data['title'] 		= "";
		$this->load->view("layout/header",$data);
		$this->load->view("jenkin/delete");
		$this->load->view("layout/footer");
	}

	public function post_delete() {
		if($this->input->post() == FALSE) redirect("jenkin");
		$id 		= $this->input->post("id");

		if($this->M_Jenkin->delete($id) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("jenkin");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("jenkin");
		}
	}

}

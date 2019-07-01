<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata['logged_in'] == FALSE) {
			redirect("auth");
		}
		$this->load->model("M_Kinerja");

        if($this->session->userdata('level') != 'Kepala') redirect(site_url());
	}

	public function index()
	{
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

		$data['allKinerja'] =$this->M_Kinerja->getAllPending();
		$data['judul']		= "Kegiatan Pending";
		$data['title'] 		='E-Kinerja -> Penilaian';
		$this->load->view("layout/header",$data);
		$this->load->view("penilaian/show");
		$this->load->view("layout/footer");
	}

	public function ubahStatus() {
		if($this->input->post() == FALSE) redirect("penilaian");
		$idKinerja 		= $this->input->post("idKinerja");
		$status 		= $this->input->post("status");

		if($this->M_Kinerja->setStatus($idKinerja,$status) == TRUE) {
			$this->session->set_flashdata('message', 'ID : '.$idKinerja.' Sukses '.$status.' ');
			redirect("penilaian/");
		} else {			
			$this->session->set_flashdata('message', 'ID : '.$idKinerja.' Gagal '.$status.' ');
			redirect("penilaian/");
		}

	}

	public function tampilSemua() {

	}

	public function tampilDetail() {

	}

	public function tampilKinerjaDetail() {

	}

}

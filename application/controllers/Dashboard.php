<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata['logged_in'] == FALSE) {
			redirect("auth");
		}		
		$this->load->model("M_Kinerja");
	}

	public function index()
	{
		$data['all'] = $this->M_Kinerja->countAll($this->session->userdata('id'));
		$data['setuju'] = $this->M_Kinerja->countSetuju($this->session->userdata('id'));
		$data['tolak'] = $this->M_Kinerja->countTolak($this->session->userdata('id'));
		$data['pending'] = $this->M_Kinerja->countPending($this->session->userdata('id'));
		
		//echo "Landing";
		$data['title'] = "E-Kinerja -> Dashboard";
		$this->load->view("layout/header",$data);
		$this->load->view("dashboard/dashboard");
		$this->load->view("layout/footer");
	}

	public function test(){
		$a = $this->M_Kinerja->countAll($this->session->userdata('id'));
		echo $a->total;
	}
}

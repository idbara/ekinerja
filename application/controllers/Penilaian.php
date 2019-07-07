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

	public function nilai($id) {
		$data['title'] 		='E-Kinerja -> Penilaian';
		$data['custom_css'] = '
			<link rel="stylesheet" type="text/css" href="'.base_url().'assets/js/bootstrap-datepicker/css/datepicker.css" />
			<link rel="stylesheet" type="text/css" href="'.base_url().'assets/js/select2/select2.css" />';
		$data['custom_js'] = '
		<script type="text/javascript" src="'.base_url().'assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script type="text/javascript" src="'.base_url().'assets/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
		<script type="text/javascript" src="'.base_url().'assets/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script type="text/javascript" src="'.base_url().'assets/js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script type="text/javascript" src="'.base_url().'assets/js/jquery-multi-select/js/jquery.multi-select.js"></script>
		<script src="'.base_url().'assets/js/select2/select2.js"></script>
		<script type="text/javascript">		
			$(function(){
			    window.prettyPrint && prettyPrint();
			    $(".dp1").datepicker({
			        format: "mm-dd-yyyy",
			        autoclose: true
			    });

			});
			$(document).ready(function() {
			    $("#e1").select2();
			    $("#e9").select2();
			    $("#e2").select2({
			        placeholder: "Select a State",
			        allowClear: true
			    });
			    $("#e3").select2({
			        minimumInputLength: 2
			    });
			});
			$(function(){
				window.prettyPrint && prettyPrint();
				$(".default-date-picker").datepicker({
					format: "mm-dd-yyyy"
				});
				$(".dpYears").datepicker();
				$(".dpMonths").datepicker();
			
			
				var startDate = new Date(2012,1,20);
				var endDate = new Date(2012,1,25);
				$(".dp4").datepicker()
					.on("changeDate", function(ev){
						if (ev.date.valueOf() > endDate.valueOf()){
							$(".alert").show().find("strong").text("The start date can not be greater then the end date");
						} else {
							$(".alert").hide();
							startDate = new Date(ev.date);
							$("#startDate").text($(".dp4").data("date"));
						}
						$(".dp4").datepicker("hide");
					});
				$(".dp5").datepicker()
					.on("changeDate", function(ev){
						if (ev.date.valueOf() < startDate.valueOf()){
							$(".alert").show().find("strong").text("The end date can not be less then the start date");
						} else {
							$(".alert").hide();
							endDate = new Date(ev.date);
							$(".endDate").text($(".dp5").data("date"));
						}
						$(".dp5").datepicker("hide");
					});
			
				// disabling dates
				var nowTemp = new Date();
				var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
			
				var checkin = $(".dpd1").datepicker({
					onRender: function(date) {
						return date.valueOf() < now.valueOf() ? "disabled" : "";
					}
				}).on("changeDate", function(ev) {
						if (ev.date.valueOf() > checkout.date.valueOf()) {
							var newDate = new Date(ev.date)
							newDate.setDate(newDate.getDate() + 1);
							checkout.setValue(newDate);
						}
						checkin.hide();
						$(".dpd2")[0].focus();
					}).data("datepicker");
				var checkout = $(".dpd2").datepicker({
					onRender: function(date) {
						return date.valueOf() <= checkin.date.valueOf() ? "disabled" : "";
					}
				}).on("changeDate", function(ev) {
						checkout.hide();
					}).data("datepicker");
			});

		</script>
			';
		$data['kinerja']= $this->M_Kinerja->getDetailById($id);
		$data['jenkin'] =$this->M_Kinerja->getJenKin();
		$this->load->view("layout/header",$data);
		$this->load->view("penilaian/setuju");
		$this->load->view("layout/footer");
	}

	public function post_nilai() {
		if($this->input->post() == FALSE) redirect("kinerja");
		
		$nilai = $this->input->post("point");
		$id = $this->input->post("id");

		if($this->M_Kinerja->nilai($nilai,$id) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("penilaian/");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("penilaian/");
		}

	}

	public function all() {
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

		$data['allKinerja'] =$this->M_Kinerja->getAllKinerja();
		$data['judul']		= "Kegiatan";
		$data['title'] 		='E-Kinerja -> Penilaian';
		$this->load->view("layout/header",$data);
		$this->load->view("penilaian/showall");
		$this->load->view("layout/footer");
	}

	public function tampilDetail() {

	}

	public function tampilKinerjaDetail() {

	}

}

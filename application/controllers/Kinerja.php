<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kinerja extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata['logged_in'] == FALSE) {
			redirect("auth");
		}
		$this->load->model("M_Kinerja");
		$this->load->model("M_User");
	}

	public function index()
	{
		$data['title'] 		= "Hasil Kinerja";
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

		$data['allKinerja'] =$this->M_Kinerja->getAll($this->session->userdata('id'));
		$data['judul']		= "E-Kinerja -> Laporan Kegiatan";

		$this->load->view("layout/header",$data);
		$this->load->view("kinerja/show");
		$this->load->view("layout/footer");
	}

	public function disetujui() {		
		$data['title'] 		= "Hasil Kinerja Disetujui";
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

		$data['allKinerja'] =$this->M_Kinerja->getSetuju($this->session->userdata('id'));
		$data['judul']		= "E-Kinerja -> Laporan Kegiatan Disetujui";

		$this->load->view("layout/header",$data);
		$this->load->view("kinerja/show");
		$this->load->view("layout/footer");
	}

	public function ditolak() {		
		$data['title'] 		= "Hasil Kinerja Ditolak";
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

		$data['allKinerja'] =$this->M_Kinerja->getTolak($this->session->userdata('id'));
		$data['judul']		= "E-Kinerja -> Laporan Kegiatan Ditolak";

		$this->load->view("layout/header",$data);
		$this->load->view("kinerja/show");
		$this->load->view("layout/footer");
	}

	public function createKegiatan() {
		$data['title'] = "E-Kinerja -> Input Kegiatan";
		$data['custom_css'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/js/bootstrap-datepicker/css/datepicker.css" />
			<link rel="stylesheet" type="text/css" href="'.base_url().'assets/js/select2/select2.css" />';
		$data['custom_js'] = '
		<script type="text/javascript" src="'.base_url().'assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
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

		</script>
			';
		$data['jenkin'] =$this->M_Kinerja->getJenKin();
		$this->load->view("layout/header",$data);
		$this->load->view("kinerja/create");
		$this->load->view("layout/footer");
	}

	public function post_kegiatan() {
		if($this->input->post() == FALSE) redirect("kinerja/createKegiatan");
		$tanggal 	= $this->input->post("tanggal");
		$tanggal	= date('Y-m-d', strtotime($tanggal));
		$waktu 		= $this->input->post("waktu");
		$jenis 		= $this->input->post("jenis");
		$detail 	= $this->input->post("detail");
		$keterangan = $this->input->post("keterangan");
		$user 		= $this->session->userdata('id');

		if($this->M_Kinerja->create($user,$tanggal,$waktu,$jenis,$detail,$keterangan) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("kinerja/");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("kinerja/createKegiatan");
		}
	}

	public function edit($id) {		
		$data['kinerja']= $this->M_Kinerja->getDetailById($id); 
		$data['title'] 	= "E-Kinerja -> Edit Kegiatan";
		$data['jenkin'] =$this->M_Kinerja->getJenKin();


		$data['custom_css'] = '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/js/bootstrap-datepicker/css/datepicker.css" />
			<link rel="stylesheet" type="text/css" href="'.base_url().'assets/js/select2/select2.css" />';
		$data['custom_js'] = '
		<script type="text/javascript" src="'.base_url().'assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
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

		</script>
			';

		$this->load->view("layout/header",$data);
		$this->load->view("kinerja/edit");
		$this->load->view("layout/footer");
	}

	public function post_edit() {
		if($this->input->post() == FALSE) redirect("kinerja");
		$tanggal 	= $this->input->post("tanggal");
		$tanggal	= date('Y-m-d', strtotime($tanggal));
		$waktu 		= $this->input->post("waktu");
		$jenis 		= $this->input->post("jenis");
		$detail 	= $this->input->post("detail");
		$keterangan = $this->input->post("keterangan");
		$id = $this->input->post("id");

		if($this->M_Kinerja->edit($tanggal,$waktu,$jenis,$detail,$keterangan,$id) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("kinerja/");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("kinerja/");
		}

	}



	public function delete($id) {		
		$data['kinerja']	= $id;
		$data['title'] 	= "E-Kinerja -> Delete Kegiatan";
		$this->load->view("layout/header",$data);
		$this->load->view("kinerja/delete");
		$this->load->view("layout/footer");
	}

	public function post_delete() {
		if($this->input->post() == FALSE) redirect("kinerja");
		$id 		= $this->input->post("id");

		if($this->M_Kinerja->delete($id) == TRUE) {
			$this->session->set_flashdata('message', 'Success');
			redirect("kinerja");
		} else {			
			$this->session->set_flashdata('message', 'Gagal');
			redirect("kinerja");
		}
	}

	public function cetak() {
		$data['title'] = "E-Kinerja -> Input Kegiatan";
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
		$data['jenkin'] =$this->M_Kinerja->getJenKin();
		$this->load->view("layout/header",$data);
		$this->load->view("kinerja/cetak");
		$this->load->view("layout/footer");
	}
	
	public function cetakbulanan() {
		if($this->input->post() == FALSE) redirect("kinerja/cetak");
		$bulan	= $this->input->post("bulan");
		$data['bulan'] 	= $bulan;
		$month = substr($bulan,0,2);
		$year = substr($bulan,3);
		$tgl = $year."-".$month."-01";
		$startBulan = date('Y-m-d', strtotime($tgl));
		// getKinerja perbulan
		$data['kinerja'] =$this->M_Kinerja->getKinerjaBulanan($this->session->userdata('id'),$startBulan);
		// $kinerja =$this->M_Kinerja->getKinerjaBulanan($this->session->userdata('id'),$startBulan);
		// print_r($kinerja->result());
		$data['profil']= $this->M_User->getDetail($this->session->userdata('id'));

		$this->load->view("kinerja/print",$data);
	}

}

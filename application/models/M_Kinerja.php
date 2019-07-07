<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kinerja extends CI_Model {

	public function create($user,$tanggal,$waktu,$jenis,$detail,$keterangan) {
		$sql 	= "INSERT INTO kinerja (user,tanggal,waktu,jenis,detail,keterangan) VALUES(? ,? ,? ,? ,? ,?)";
		$query	= $this->db->query($sql, array($user,$tanggal,$waktu,$jenis,$detail,$keterangan));
		return $query;
	}

	public function edit($tanggal,$waktu,$jenis,$detail,$keterangan,$id) {
		$sql 	= "UPDATE kinerja SET tanggal = ?,waktu = ?,jenis = ?,detail = ?,keterangan = ? WHERE kinerjaId = ?";
		$query	= $this->db->query($sql, array($tanggal,$waktu,$jenis,$detail,$keterangan,$id));
		return $query;
	}
	public function nilai($nilai,$id) {
		$sql 	= "UPDATE kinerja SET nilai = ?,status = 'Disetujui' WHERE kinerjaId = ?";
		$query	= $this->db->query($sql, array($nilai,$id));
		return $query;
	}

	public function delete($id) {
		$sql 	= "DELETE FROM kinerja WHERE kinerjaId = ?";
		$query	= $this->db->query($sql, array($id));
		return $query;		
	}

	public function getAll($id) {
		$this->db->join('jenkin', 'jenkin.id = kinerja.jenis', 'left');
		$this->db->order_by('tanggal DESC');
		$this->db->where('user', $id);
		return $this->db->get('kinerja');
	}

	public function getAllKinerja() {
		$this->db->join('jenkin', 'jenkin.id = kinerja.jenis', 'left');
		$this->db->join('users', 'users.id = kinerja.user', 'left');
		$this->db->order_by('tanggal DESC');
		return $this->db->get('kinerja');
	}

	public function getSetuju($id) {
		$this->db->join('jenkin', 'jenkin.id = kinerja.jenis', 'left');
		$this->db->where('user', $id);
		$this->db->where('status', 'Disetujui');
		return $this->db->get('kinerja');
	}

	public function getTolak($id) {
		$this->db->join('jenkin', 'jenkin.id = kinerja.jenis', 'left');
		$this->db->where('user', $id);
		$this->db->where('status', 'Ditolak');
		return $this->db->get('kinerja');
	}

	public function getJenKin() {
		return $this->db->get('jenkin');
	}

	public function getDetail($id,$user) {				
		$sql	= "SELECT * FROM kinerja WHERE kinerjaId = ? AND user = ?";
		$query	= $this->db->query($sql, array($id,$user));
		return $query->row();
	}

	public function getDetailById($id) {				
		$sql	= "SELECT kinerja.*,users.name FROM `kinerja` JOIN  users ON users.id = kinerja.user WHERE kinerja.kinerjaId = ?";
		$query	= $this->db->query($sql, array($id));
		return $query->row();
	}

	public function setStatus($id,$status) {
		$sql 	= "UPDATE kinerja SET status = ? WHERE kinerjaId = ?";
		$query	= $this->db->query($sql, array($status,$id));
		return $query;		
	}

	public function getAllPending() {		
		$this->db->join('jenkin', 'jenkin.id = kinerja.jenis', 'left');
		$this->db->join('users', 'users.id = kinerja.user', 'left');
		$this->db->where('status', 'pending');
		return $this->db->get('kinerja');
	}

	public function getKinerjaBulanan($userId, $startBulan) {	
		$lastBulan = date('Y-m-t', strtotime($startBulan));
		$this->db->join('jenkin', 'jenkin.id = kinerja.jenis', 'left');
		$this->db->join('users', 'users.id = kinerja.user', 'left');
		$this->db->where('kinerja.user', $userId);
		$this->db->where('tanggal >=', $startBulan);
		$this->db->where('tanggal <=', $lastBulan);
		$this->db->where('status','Disetujui');
		return $this->db->get('kinerja');
	}

	public function countAll($user) {						
		$sql	= "SELECT count(kinerjaId) as total FROM kinerja WHERE user = ?";
		$query	= $this->db->query($sql, array($user));
		return $query->row();		
	}

	public function countSetuju($user) {						
		$sql	= "SELECT count(kinerjaId) as total FROM kinerja WHERE status = 'Disetujui' AND user = ?";
		$query	= $this->db->query($sql, array($user));
		return $query->row();		
		
	}

	public function countTolak($user) {				
		$sql	= "SELECT count(kinerjaId) as total FROM kinerja WHERE status = 'Ditolak' AND user = ?";
		$query	= $this->db->query($sql, array($user));
		return $query->row();		
		
	}

	public function countPending($user) {				
		$sql	= "SELECT count(kinerjaId) as total FROM kinerja WHERE status = 'pending' AND user = ?";
		$query	= $this->db->query($sql, array($user));
		return $query->row();		
		
	}

}

?>
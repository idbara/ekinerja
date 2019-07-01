<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jenkin extends CI_Model {

	public function create($kegiatan) {
		$sql 	= "INSERT INTO jenkin (kegiatan) VALUES(?)";
		$query	= $this->db->query($sql, array($kegiatan));
		return $query;
	}

	public function edit($id,$kegiatan) {
		$sql 	= "UPDATE jenkin SET kegiatan = ? WHERE id = ?";
		$query	= $this->db->query($sql, array($kegiatan,$id));
		return $query;
	}

	public function delete($id) {
		$sql 	= "DELETE FROM jenkin WHERE id = ?";
		$query	= $this->db->query($sql, array($id));
		return $query;		
	}

	public function getAll() {
		$this->db->order_by('id', 'ASC');
		return $this->db->get('jenkin');
	}

	public function getDetail($id) {				
		$sql	= "SELECT * FROM jenkin WHERE id = ?";
		$query	= $this->db->query($sql, array($id));
		return $query->row();
	}

}

?>
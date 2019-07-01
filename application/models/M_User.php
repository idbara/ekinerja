<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function create($username,$password,$email,$name,$level) {
		$sql 	= "INSERT INTO users (username,password,email,name,level) VALUES(? ,? ,? ,?, ?)";
		$query	= $this->db->query($sql, array($username,$password,$email,$name,$level));
		return $query;
	}

	public function edit($id,$username,$email,$name,$level) {
		$sql	= "UPDATE users SET username = ?,email = ?,name = ?,level = ? WHERE id = ?";
		$query	= $this->db->query($sql, array($username,$email,$name,$level,$id));
		if($query == TRUE) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($id,$username) {
		$sql	= "DELETE FROM users WHERE id = ? AND username = ?";
		$query	= $this->db->query($sql, array($id,$username));
		if($query == TRUE) {
			return true;
		} else {
			return false;
		}
	}

	public function getAll() {
		return $this->db->get('users');
	}

	public function getDetail($id) {		
		$sql	= "SELECT * FROM users WHERE id = ?";
		$query	= $this->db->query($sql, array($id));
		return $query->row();
	}
	
	public function check_login($username,$password) {
		$pass 	= md5($password);
		$sql	= "SELECT * FROM users WHERE username = ? and password = ?";
		$query	= $this->db->query($sql, array($username,$pass));
		if ($query->num_rows() == 1) {
			//$this->db->query("UPDATE web_auth SET user_lastlog = 'now()' WHERE user_login = '$data[username]';");
			return true;
		} else {
			return false;
		}
	}

	public function getUserInfo($username) {
		$sql	= "SELECT * FROM users WHERE username = ?";
		$query	= $this->db->query($sql, array($username));
		return $query->row();
	}

	public function changePassword($password,$id) {
		$sql	= "UPDATE users SET password = ? WHERE id = ?";
		$query	= $this->db->query($sql, array($password,$id));
		if($query == TRUE) {
			return true;
		} else {
			return false;
		}
	}

}

?>
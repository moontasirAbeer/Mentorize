<?php

class User_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function get_users(){
		$query = $this->db->query('select * from users;');

		return $query->result_array();
	}

}
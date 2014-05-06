<?php

class User_model extends CI_Model{
	
	public function __construct(){

		$this->load->database();

		$query = $this->db->query('select * from users;');

		return $query->result_array();
	}

}
<?php

class Profile_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_profile(){
		/* $queryString = "select * from users where user_name='" . $_SESSION['user_name'] . "';";
		$query = $this->db->query($queryString);
		return $query->result_array(); */
	}

	public function insert_profile(){
		$data = array(
		'user_name' => "REPLACEME" # $_SESSION['user_name'],
		'industry_primary' => "INDUSTRY" # $this->input->post('industry'),
		'specializations' => $this->input->post('specTag'),
		'experience' => $this->input->post('experience'),
		);

	return $this->db->insert('user_profile', $data);
	}

}
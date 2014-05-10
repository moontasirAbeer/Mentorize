<?php

class Post_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function get_post(){
		$queryString = "select * from posts where id='" . $ . "';";
		$query = $this->db->query($queryString);
		return $query->result_array();
	}

	public function insert_post(){
		$data = array(
		'user_name' => $_SESSION['user_name'],
		'title' => $this->input->post('title'),
		'time' => $_SESSION['date_time'],
		'tags' => "TO BE IMPLEMENTED",
		'content' = $this->input->post('content')
		);

	return $this->db->insert('posts', $data);
	}

}
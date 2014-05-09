<?php

class User_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function get_users(){
		$query = $this->db->query('select * from users;');

		return $query->result_array();
	}

	public function insert_user(){
		$data = array(
		'user_name' => $this->input->post('chooseUsername'),
		'password' => $this->input->post('inputPassword'),
		'email' => $this->input->post('inputEmail'),
		'user_type' => 'TEST'
		);

		# ID checking should be done in view js
		# pass all usernames to view on page load

	return $this->db->insert('users', $data);
	}

	public function login(){
		$data = array(
		'user_name' => $this->input->post('chooseUsername'),
		'password' => $this->input->post('inputPassword'),
		);

		$query = $this->db->query('select user_name, password from users;');
		$existing_users = $query->result_array();

		foreach($existing_users as $users){
			if($data['user_name'] == $users['user_name'] && $data['password'] == $users['password']){
				
			}
		}
	}

	public function insert_test(){
		$data = array(
		'user_name' => $this->input->post('user-name'),
		'password' => $this->input->post('password'),
		'email' => $this->input->post('email'),
		'user_type' => $this->input->post('user-type'),
					);

	return $this->db->insert('users', $data);
	}

}
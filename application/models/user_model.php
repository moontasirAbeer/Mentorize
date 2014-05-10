<?php

class User_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function get_users(){
		$query = $this->db->query('select user_name from users;');
		return $query->result_array();
	}

	public function insert_user(){
		$data = array(
		'user_name' => $this->input->post('chooseUsername'),
		'password' => $this->input->post('inputPassword'),
		'email' => $this->input->post('inputEmail'),
		);
		$mentor = $this->input->post('mentor');
        $mentee = $this->input->post('mentee');
        if($mentor == 'on'){
        	$data['user_type'] = 'mentor';
        }
        else if($mentee == 'on'){
        	$data['user_type'] = 'mentee';
        }
        else{
        	$data['user_type'] = 'none';
        }

		# ID checking should be done in view js
		# pass all usernames to view on page load

	return $this->db->insert('users', $data);
	}

	public function login(){
		$data = array(
		'user_name' => $this->input->post('user-name'),
		'password' => $this->input->post('password'),
		);
		echo'$data:: ';
		print_r($data);

		$query = $this->db->query('select user_name, password from users;');
		$existing_users = $query->result_array();

		# debug --------
		print_r($existing_users);

		foreach($existing_users as $users){
			echo "A USER::: ";
			print_r($users);
			if($data['user_name'] == $users['user_name'] && $data['password'] == $users['password']){
				$query_string = "select * from users where user_name = '" . $users['user_name'] . "';";
				$user_info = $this->db->query($query_string);
				return $user_info->result_array(); 
			}
		}
		return "false";
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
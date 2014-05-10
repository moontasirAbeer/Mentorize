<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_pages extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		# $this->load->library('form_validation');
		$this->load->model('user_model');
		#$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		#$newdata = base_url();
		#$this->session->set_userdata('base_url', $newdata);

		$data['existing_users'] = $this->user_model->get_users();
		$this->load->view('frontpage', $data);
	}

	public function login(){
		#$data = $this->input->post();
		#print_r($data);
		# the above is for debugging. Remove.

		# check login credentials
		$user_data = $this->user_model->login();
		# debug ---------
		#echo"RETURNED FROM MODEL --> ";
		#print_r($user_data);

		
        $_SESSION['logged_in'] = TRUE;
        $_SESSION['user_type'] = $user_data[0]['user_type'];
		$_SESSION['user_name'] = $user_data[0]['user_name'];
		$_SESSION['date_time'] = date("Y-m-d h:i:sa");

		# debug ------
		#$user_type = $this->session->userdata('user_type');
		#echo "FROM SESSION --> ";
		#print_r($user_type);

		 if($user_data != "false"){
			$page['action'] = 'Log In';
			$this->load->view('success', $page);
		}		
	}

	public function create(){
		#$data = $this->input->post();
		#print_r($data);
		# the above is for debugging. Remove.

		$this->user_model->insert_user();
	}

	public function post_test(){
		$this->load->view('user_test');
	}

	public function create_test(){
		$data = $this->input->post();
		print_r($data);

		$this->user_model->insert_test();
	}

	public function query_test(){
		$data['testvar'] = "Aye Carumba! :O";
		$data['users'] = $this->user_model->get_users();
		$this->load->view('testdata', $data);
	}

	public function profile(){
		
		$this->load->view('profile.html');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
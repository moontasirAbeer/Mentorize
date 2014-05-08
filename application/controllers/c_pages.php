<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		# $this->load->library('form_validation');
		$this->load->model('user_model');
	}

	public function index(){
		$this->load->view('frontpage');
	}

	public function query_test(){
		$data['testvar'] = "Aye Carumba! :O";
		$data['users'] = $this->user_model->get_users();
		$this->load->view('testdata', $data);
	}

	public function create(){
		$data = $this->input->post();
		print_r($data);

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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mainpage extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		$this->load->model('post_model');
		$this->load->model('user_model');
		$this->load->model('profile_model');
		$this->load->library('session');
		$this->load->helper('url');
		session_start();
	}

	public function index(){
		$this->load->view('templates/main_header');
		$this->load->view('templates/main_sidebar');
		$this->load->view('newreg-mentor');
		$this->load->view('templates/main_footer');
	}

	public function view_profile(){
		$data['profile'] =  $this->profile_model->get_profile();

		$this->load->view('templates/main_header', $data);
		$this->load->view('templates/main_sidebar');
		$this->load->view('profile');
		$this->load->view('templates/main_footer');
	}

	public function view_post(){
		#------------------
	}

	public function posts(){
		#------------------
	}

	public function mentors(){
		#------------------
	}

	public function write_post(){
		$this->load->view('templates/main_header');
		$this->load->view('templates/main_sidebar');
		$this->load->view('sendMessage');
		$this->load->view('templates/main_footer');
	}

	public function create_profile(){
		$this->profile_model->insert_profile();
	}

}
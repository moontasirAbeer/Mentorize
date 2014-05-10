<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mainpage extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		#$this->load->model('posts_model');
		#$this->load->model('user_model');
		#$this->load->model('profile_model');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('templates/main_header');
		$this->load->view('templates/main_sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/main_footer');
	}

	public function view_profile(){
		$this->load->view('templates/main_header');
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

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('form');
		# $this->load->model('');     <-- for post class. Imlement
		$this->load->library('session');
	}

	public function index(){
		$this->load->view('templates/main_header');
		$this->load->view('templates/main_sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/main_footer');
	}

}
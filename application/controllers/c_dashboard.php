<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function index(){
		$this->load->view('templates/main_header');
		$this->load->view('templates/main_sidebar');
		$this->load->view('dashboard');
		$this->load->view('templates/main_footer');
	}

}
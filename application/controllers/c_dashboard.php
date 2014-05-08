<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function index(){
		$this->load->view('dashboard');
	}

}
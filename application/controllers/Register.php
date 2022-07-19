<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	// Halaman Register
	public function index()
	{
		$data = array(	'title'		=> 'Register');
		$this->load->view('register/list', $data, FALSE);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// Halaman Login
	public function index()
	{
		$data = array(	'title'		=> 'Login');
		$this->load->view('login/list', $data, FALSE);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// Halaman Login
	public function index()
	{
		$data = array(	'title'		=> 'Login');
		$this->load->view('login/list', $data, FALSE);
	}

	 /**
     * This function used to logged in user
     */
    public function loginMe()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
        
    }

}

?>
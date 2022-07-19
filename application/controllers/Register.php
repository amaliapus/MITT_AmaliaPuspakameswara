<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}

	// Halaman Register
	public function index()
	{
		// Validasi input
		$valid = $this->form_validation;

		$valid->set_rules('username','Username','required|min_length[6]|max_length[32]|is_unique[user.username]',
			array(	'required' 		=> '%s harus diisi',
				    'min_length' 	=> '%s minimal 6 karakter',
				    'max_length'	=> '%s maksimal 50 karakter',
				    'is_unique' 	=> '%s sudah ada. Buat username baru.'));

		$valid->set_rules('nama','Name','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('address','Address','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('bod','Birth of Date','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('email','Email','required|valid_email',
			array(	'required' 		=> '%s harus diisi',
				  	'valid_email' 	=> '%s tidak valid'));

		$valid->set_rules('password','Password','required',
			array('required' => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title'		=> 'Register');
		$this->load->view('register/list', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'username' 		=> $i->post('username'),
							'name' 			=> $i->post('name'),
							'address' 		=> $i->post('address'),
							'bod' 			=> $i->post('bod'),
							'password' 		=> $i->post('password')
									);
			$this->register_model->tambah($data);
			$this->session->set_flashdata('Success', 'Data has been added.');
			redirect(base_url('login'),'refresh');
		}
		// End database
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('userprofile_model');
	}

	public function index()
	{
		$user = $this->userprofile_model->listing();

		$data = array(	'title'			=> 'Halaman Admin',
						'userprofile' 	=> $userprofile,
						'isi'			=> 'admin/userprofile/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		// Validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama lengkap','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('email','Email','required|valid_email',
			array(	'required' 		=> '%s harus diisi',
				  	'valid_email' 	=> '%s tidak valid'));

		$valid->set_rules('username','Username','required|min_length[6]|max_length[32]|is_unique[user.username]',
			array(	'required' 		=> '%s harus diisi',
				    'min_length' 	=> '%s minimal 6 karakter',
				    'max_length'	=> '%s maksimal 32 karakter',
				    'is_unique' 	=> '%s sudah ada. Buat username baru.'));

		$valid->set_rules('password','Password','required',
			array('required' => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 	=> 'Tambah Skill',
					  	'isi'	  	=> 'admin/userprofile/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'nama' 			=> $i->post('nama'),
						  	'email' 		=> $i->post('email'),
							'username' 		=> $i->post('username'),
							'password' 		=> SHA1($i->post('password')),
							'akses_level' 	=> $i->post('akses_level')
									);
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/user'),'refresh');
		}
		// End database
	}

	public function edit()
	{
		$data = array(	'title' 	=> 'Edit Skill',
					  	'isi'	  	=> 'admin/userprofile/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */
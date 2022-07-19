<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
        // Load data model
        $this->CI->load->model('register_model');
	}

	// Fungsi login
	public function login($username,$password)
	{
		$check = $this->CI->user_model->login($username,$password);
		// Jika ada data user, maka create session login
		if($check) {
			$username		= $check->username;
			// Create session
			$this->CI->session->set_userdata('username',$username);
			// Redirect ke halaman admin yang diproteksi
			redirect(base_url('admin/dasbor'),'refresh');
		}else{
			// Kalau tidak ada (username password salah), maka suruh login lagi
			$this->CI->session->set_flashdata('warning', 'Username atau password salah');
			redirect(base_url('login'),'refresh');
		} 
	}

	// Fungsi cek login
	public function cek_login()
	{
		// Memerikas apakah session sudah ada atau belum. Jika belum, alihkan ke halaman login
		if($this->CI->session->userdata('username') == "") 
		{
			$this->CI->session->set_flashdata('warning', 'Anda belum login');
			redirect(base_url('login'),'refresh');
		}
	}

	// Fungsi logout
	public function logout()
	{
		// Mmebuang semuah session yang telah diset pada saat login
		$this->CI->session->unset_userdata('username');
		// Setelah session dibuang, maka redirect ke logout
		$this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
			redirect(base_url('login'),'refresh');
	}
}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skilllevel extends CI_Controller {

	public function index()
	{
		$data = array(	'title'		=> 'Skills',
						'isi'		=> 'admin/master/Skilllevel/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */
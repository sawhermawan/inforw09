<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('m_login');
	}

	function index()
	{
		
		switch ($this->session->userdata('isiLogin')) {
			case 'TRUE':
				redirect('cpanel');
				break;
			
			default:
				$this->load->view('cpanel/login');
				break;

		}
	}

	function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->m_login->cek_user($username , md5($password));
		if (count($cek) == 1) {
			foreach ($cek as $cek) {
				$status 	= $cek['status'];
				$id 		= $cek['user_id'];
				$fullname	= $cek['full_name'];
				$pic 		= $cek['images'];
			}
			switch ($status) {
				case 'ACTIVE':
					$this->session->set_userdata(array(
						'isiLogin'		=>TRUE, // set data telah login
						'username'		=>$username, // set session username
						'user_id'		=>$id,
						'fullname'		=>$fullname,
						'images'		=>$pic
					));
					redirect('cpanel');
					break;
				case 'NON ACTIVE':
					$this->session->set_flashdata('gagalLogin','Username Sudah Tidak Dapat di Pergunakan');
					$this->load->view('cpanel/login');
					break;
			}
		}else{
			$this->session->set_flashdata('gagalLogin','username atau password salah');
			$this->load->view('cpanel/login');
		}
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_akses extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login_akses');
	}

	public function index()
	{
		$data['m_login_akses'] = $this->m_login_akses->GetAkses();
		$this->template->load('cpanel/static','cpanel/login_akses',$data);
	}

	public function tambah()
	{
		$data = array(
			'id_loginakses'	=>$this->input->post('id_loginakses'),
			'username'		=>$this->input->post('username'),
			'password'		=>md5($this->input->post('password')),
			'fullname'		=>$this->input->post('fullname'),
			'status'		=>'Active'
		);
		$this->m_login_akses->tambah($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('login_akses');
	}

	public function edit()
	{
		$data = array(
			'id_loginakses'	=>$this->input->post('id_loginakses'),
			'username'		=>$this->input->post('username'),
			'password'		=>md5($this->input->post('password')),
			'fullname'		=>$this->input->post('fullname'),
			'status'		=>$this->input->post('status')
		);
		$this->m_login_akses->update(array('id_loginakses' => $this->input->post('id_loginakses')), $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Update <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('login_akses');
	}

	public function delete()
	{
		$this->m_login_akses->delete(array('id_loginakses' => $this->input->post('id_loginakses')));
		redirect('login_akses');

	}


}
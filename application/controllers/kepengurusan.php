<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepengurusan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kepengurusan');
	}

	public function index()
	{
		$data['m_kepengurusan'] = $this->m_kepengurusan->GetPengurus();
		$this->template->load('cpanel/static','cpanel/kepengurusan',$data);
	}

	public function tambah()
	{
		$data = array(
			'anggota_id'		=>$this->input->post('anggota_id'),
			'nama_anggota'		=>$this->input->post('nama_anggota'),
			'jobdesk'			=>$this->input->post('jobdesk')
		);
		$this->m_kepengurusan->tambah($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('kepengurusan');
	}

	public function edit()
	{
		$data = array(
			'anggota_id'		=>$this->input->post('anggota_id'),
			'nama_anggota'		=>$this->input->post('nama_anggota'),
			'jobdesk'			=>$this->input->post('jobdesk')
		);
		$this->m_kepengurusan->edit(array('anggota_id' => $this->input->post('anggota_id')), $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Di Edit <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('kepengurusan');
	}

	public function delete()
	{
		$this->m_kepengurusan->delete(array('anggota_id' => $this->input->post('anggota_id')));
		redirect('kepengurusan');

	}


}
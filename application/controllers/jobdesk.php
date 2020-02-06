<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobdesk extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jobdesk');
	}

	public function index()
	{
		$data['m_job'] = $this->m_jobdesk->GetJobdesk();
		$this->template->load('cpanel/static','cpanel/jobdesk',$data);
	}

	public function addJobdesk()
	{
		$this->template->load('cpanel/static','cpanel/add_jobdesk');
	}

	public function tambah()
	{
		$data = array(
			'id_jobdesk'		=>$this->input->post('id_jobdesk'),
			'nama_jobdesk'		=>$this->input->post('nama_jobdesk'),
			'isi_tugas'			=>$this->input->post('isi_tugas'),
			'isi_fungsi'		=>$this->input->post('isi_fungsi')
		);
		$this->m_jobdesk->tambah($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('jobdesk');
	}

	public function edit()
	{

		$no = $this->uri->segment(3);

		$data['m_jobdesk'] = $this->m_jobdesk->GetJobdeskSingle($no)->result();
		$this->template->load('cpanel/static','cpanel/view_jobdesk',$data);
	}

	public function update()
	{

		$data = array(
			'id_jobdesk'					=>$this->input->post('id_jobdesk'),
			'nama_jobdesk'					=>$this->input->post('nama_jobdesk'),
			'isi_fungsi'					=>$this->input->post('isi_fungsi'),
			'isi_tugas'						=>$this->input->post('isi_tugas')
		);	

		$this->m_jobdesk->edit(array('id_jobdesk' => $this->input->post('id_jobdesk')), $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('jobdesk');
	}

	public function delete()
	{
		$this->m_jobdesk->delete(array('id_jobdesk' => $this->input->post('id_jobdesk')));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('jobdesk');

	}


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_tentang');
	}

	public function index()
	{
		$data['m_tentang'] = $this->m_tentang->GetTentang();
		$this->template->load('cpanel/static','cpanel/tentang',$data);
	}

	public function tambah()
	{
		$data = array(
			'tentang_id'		=>$this->input->post('tentang_id'),
			'sejarah_rw09'		=>$this->input->post('sejarah_rw09'),
			'visi'				=>$this->input->post('visi'),
			'misi'				=>$this->input->post('misi')
		);
		$this->m_tentang->tambah($data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('tentang');
	}

	public function edit()
	{

		$no = $this->uri->segment(3);

		$data['m_tentang'] = $this->m_tentang->GetTentangSingle($no)->result();
		$this->template->load('cpanel/static','cpanel/view_tentang',$data);
	}

	public function update()
	{

		$data = array(
			'tentang_id'		=>$this->input->post('tentang_id'),
			'sejarah_rw09'		=>$this->input->post('sejarah_rw09'),
			'visi'				=>$this->input->post('visi'),
			'misi'				=>$this->input->post('misi')
		);	

		$this->m_tentang->edit(array('tentang_id' => $this->input->post('tentang_id')), $data);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dirubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		
		redirect('tentang');
	}

	public function delete()
	{
		$this->m_tentang->delete(array('tentang_id' => $this->input->post('tentang_id')));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('tentang');

	}


}
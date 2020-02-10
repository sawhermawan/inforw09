<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
	}

	public function index()
	{
		$data['m_home'] = $this->m_home->GetArtikel();
		$this->template->load('cpanel/static','cpanel/artikel',$data);
	}

	public function TambahArtikel()
	{
		if(!empty($_FILES['picture']['name'])){
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('picture')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }
        }else{
            $picture = 'no-images.png';
        }

		$data = array(
			'berita_id'		=> $this->input->post('berita_id'),
			'artikel'		=> $this->input->post('artikel'),
			'judul_acara'	=> $this->input->post('judul_acara'),
			'tanggal'		=> $this->input->post('tanggal'),
			'picture'		=> $picture
			
		);
		$this->m_home->Tambah($data);
		redirect('artikel');

	}

	public function addArtikel()
	{
		$this->template->load('cpanel/static','cpanel/add_artikel');
	}

	public function edit()
	{

		$no = $this->uri->segment(3);

		$data['m_home'] = $this->m_home->GetArtikelSingle($no)->result();
		$this->template->load('cpanel/static','cpanel/view_artikel',$data);
	}

	public function update()
	{
		if(!empty($_FILES['picture']['name'])){
            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];
            
            //Load upload library and initialize configuration
            $this->load->library('upload',$config);
            $this->upload->initialize($config);
            
            if($this->upload->do_upload('picture')){
                $uploadData = $this->upload->data();
                $picture = $uploadData['file_name'];
            }else{
                $picture = '';
            }
        }else{
            $picture = 'no-images.png';
        }

        if ($picture == 'no-images.png') {

        	$data = array(
			'berita_id'		=> $this->input->post('berita_id'),
			'artikel'		=> $this->input->post('artikel'),
			'judul_acara'	=> $this->input->post('judul_acara'),
			'tanggal'		=> $this->input->post('tanggal')
			
			);
        }else{

        	$data = array(
			'berita_id'		=> $this->input->post('berita_id'),
			'artikel'		=> $this->input->post('artikel'),
			'judul_acara'	=> $this->input->post('judul_acara'),
			'tanggal'		=> $this->input->post('tanggal'),
			'picture'		=> $picture
			
			);
        }
		
		$this->m_home->edit(array('berita_id' => $this->input->post('berita_id')),$data);
		redirect('artikel');

	}

	
	public function delete()
	{
		$this->m_home->delete(array('berita_id' => $this->input->post('berita_id')));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('artikel');

	}


}
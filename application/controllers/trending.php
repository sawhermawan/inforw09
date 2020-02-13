<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trending extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_trending');
	}

	public function index()
	{
		$data['m_trending'] = $this->m_trending->GetTrending();
		$this->template->load('cpanel/static','cpanel/trending',$data);
	}

	public function TambahTrending()
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
			'id_trending'			=> $this->input->post('id_trending'),
			'judul_trending'		=> $this->input->post('judul_trending'),
			'trending_artikel'		=> $this->input->post('trending_artikel'),
			'tanggal'				=> $this->input->post('tanggal'),
			'picture'				=> $picture
			
		);
		$this->m_trending->Tambah($data);
		redirect('trending');

	}

	public function addTrending()
	{
		$this->template->load('cpanel/static','cpanel/add_trending');
	}

	public function edit()
	{

		$no = $this->uri->segment(3);

		$data['m_trending'] = $this->m_trending->GetTrendingSingle($no)->result();
		$this->template->load('cpanel/static','cpanel/trending_view',$data);
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
			'id_trending'			=> $this->input->post('id_trending'),
			'judul_trending'		=> $this->input->post('judul_trending'),
			'trending_artikel'		=> $this->input->post('trending_artikel'),
			'tanggal'				=> $this->input->post('tanggal')
			
			);
        }else{

        	$data = array(
			'id_trending'			=> $this->input->post('id_trending'),
			'judul_trending'		=> $this->input->post('judul_trending'),
			'trending_artikel'		=> $this->input->post('trending_artikel'),
			'tanggal'				=> $this->input->post('tanggal'),
			'picture'				=> $picture
			
			);
        }
		
		$this->m_trending->edit(array('id_trending' => $this->input->post('id_trending')),$data);
		redirect('trending');

	}

	
	public function delete()
	{
		$this->m_trending->delete(array('id_trending' => $this->input->post('id_trending')));
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('trending');

	}


}
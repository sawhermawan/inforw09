<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laman_web extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');


	}

	
	public function index()
	{

		$data['m_home'] = $this->m_home->GetArtikel();
		$this->template->load('static', 'laman_web',$data);
	}
	public function about()
	{

		$data['m_about'] = $this->m_about->GetAbout();
		$this->template->load('static', 'about',$data);
	}

	public function contact()
	{

		$this->template->load('static', 'contact');
	}
	

	public function view()
	{	
		$id = $this->uri->segment(3);

		$data['m_home'] = $this->m_home->GetArtikelSingle($id);
		$this->template->load('static','view_more',$data);
	}

	public function order()
	{
		$data = array(
			'id_order'	=>$this->input->post('id_order'),
			'produk_name'=>$this->input->post('produk_name'),
			'name'		=>$this->input->post('name'),
			'phone'		=>$this->input->post('phone'),
			'qty'		=>$this->input->post('qty'),
			'address'	=>$this->input->post('address'),
			'tanggal'	=>$this->input->post('tanggal')
			
		);
		$this->m_order->tambah($data);
		redirect('home/sucess');

	}
	public function sucess()
	{
		$this->template->load('static','sucess');


	}
}
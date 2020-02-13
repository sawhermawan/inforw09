<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trending_web extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_trending');


	}

	
	public function index()
	{

		$data['m_trending'] = $this->m_trending->GetTrending();
		$this->template->load('static', 'trending_web',$data);
	}
	

	public function view()
	{	
		$id = $this->uri->segment(3);

		$data['m_trending'] = $this->m_trending->GetTrendingSingle($id);
		$this->template->load('static','trending_more',$data);
	}

}
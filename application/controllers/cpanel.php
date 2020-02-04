<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpanel extends CI_Controller {


	public function index()
	{
		if ($this->session->userdata('isiLogin')== TRUE) {

			$this->template->load('cpanel/static','cpanel/dashboard');

		}else{
			redirect('login');
		}
	}	
	
}

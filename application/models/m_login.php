<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {


	public function __construct()
	{
		parent::__construct();
	}


	function cek_user($username="",$password="")
	{
		$query = $this->db->get_where('akses_login',array('username'=> $username, 'password'=> $password));
		$query = $query->result_array();
		return $query;
	}

}
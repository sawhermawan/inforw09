<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kepengurusan extends CI_Model {


    public function __construct()
    {
        parent:: __construct();
    }


    public function GetPengurus()
    {
        $query = $this->db->get('struktur_kepengurusan');
        return $query->result();
    }

    public function tambah($data)
    {
        $this->db->insert('struktur_kepengurusan', $data);
       return TRUE;
    }

    public function edit($where, $data)
    {
        $this->db->update('struktur_kepengurusan',$data,$where);
        return TRUE;
    }

    public function delete($where)
    {
        $this->db->delete('struktur_kepengurusan',$where);
        return TRUE;
    }
}
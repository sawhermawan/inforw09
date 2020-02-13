<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {


    public function __construct()
    {
        parent:: __construct();
    }


    public function GetArtikel()
    {
        $query = " SELECT berita_id, artikel, judul_acara, picture, tanggal FROM berita_acara ORDER BY tanggal ASC";

        $infoartikel = $this->db->query($query);
      return $infoartikel;
    }

        public function GetArtikelSingle($no){

        $single = $this->db->select('*')
                           ->select('berita_acara.berita_id', FALSE)
                           ->from('berita_acara')
                           ->where('berita_id', $no)
                           ->get();
        return $single;
    }

    public function edit($where, $data)
    {
        $this->db->update('berita_acara',$data,$where);
        return TRUE;
    }

    public function Tambah($data)
    {
        $this->db->insert('berita_acara', $data);
       return TRUE;
    }


    public function delete($where)
    {
        $this->db->delete('berita_acara',$where);
        return TRUE;
    }
}
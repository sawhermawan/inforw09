<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home2 extends CI_Model {


    public function __construct()
    {
        parent:: __construct();
    }


    public function GetArtikel2()
    {
        $query = " SELECT berita_id, artikel, judul_acara, picture, tanggal FROM berita_acara ORDER BY tanggal DESC";

        $infoartikel2 = $this->db->query($query);
      return $infoartikel2;
    }




}
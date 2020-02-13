<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_trending extends CI_Model {


    public function __construct()
    {
        parent:: __construct();
    }


    public function GetTrending()
    {
        $query = " SELECT id_trending, judul_trending, trending_artikel, picture, tanggal FROM trending_topic ORDER BY tanggal ASC";

        $infoartikel = $this->db->query($query);
      return $infoartikel;
    }

        public function GetTrendingSingle($no){

        $single = $this->db->select('*')
                           ->select('trending_topic.id_trending', FALSE)
                           ->from('trending_topic')
                           ->where('id_trending', $no)
                           ->get();
        return $single;
    }

    public function edit($where, $data)
    {
        $this->db->update('trending_topic',$data,$where);
        return TRUE;
    }

    public function Tambah($data)
    {
        $this->db->insert('trending_topic', $data);
       return TRUE;
    }


    public function delete($where)
    {
        $this->db->delete('trending_topic',$where);
        return TRUE;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tentang extends CI_Model {


    public function __construct()
    {
        parent:: __construct();
    }


    public function GetTentang()
    {
        $query = " SELECT tentang_id, sejarah_rw09, visi, misi FROM tentang_kami ";

        $infotentang = $this->db->query($query);
      return $infotentang;
    }

        public function GetTentangSingle($no){

        $single = $this->db->select('*')
                           ->select('tentang_kami.tentang_id', FALSE)
                           ->from('tentang_kami')
                           ->where('tentang_id', $no)
                           ->get();
        return $single;
    }

    public function edit($where, $data)
    {
        $this->db->update('tentang_kami',$data,$where);
        return TRUE;
    }


    public function delete($where)
    {
        $this->db->delete('tentang_kami',$where);
        return TRUE;
    }
}
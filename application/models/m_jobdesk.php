<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jobdesk extends CI_Model {


    public function __construct()
    {
        parent:: __construct();
    }


    public function GetJobdesk()
    {
        $query = " SELECT id_jobdesk, nama_jobdesk, isi_tugas, isi_fungsi FROM jobdesk ";

        $infojobdesk = $this->db->query($query);
      return $infojobdesk;
    }

        public function GetJobdeskSingle($no){

        $single = $this->db->select('*')
                           ->select('jobdesk.id_jobdesk', FALSE)
                           ->from('jobdesk')
                           ->where('id_jobdesk', $no)
                           ->get();
        return $single;
    }

    public function tambah($data)
    {
        $this->db->insert('jobdesk', $data);
       return TRUE;
    }

    public function edit($where, $data)
    {
        $this->db->update('jobdesk',$data,$where);
        return TRUE;
    }


    public function delete($where)
    {
        $this->db->delete('jobdesk',$where);
        return TRUE;
    }
}
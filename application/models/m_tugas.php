<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tugas extends CI_Model {


    public function __construct()
    {
        parent:: __construct();
    }


    public function GetJobdesk()
    {
        $query = " SELECT id_jobdesk, nama_jobdesk, isi_tugas, isi_fungsi FROM tugas as tg JOIN jobdesk as jd ON tg.idjobdesk = jd.id_jobdesk ";

        $infojobdesk = $this->db->query($query);
      return $infojobdesk;
    }

    public function tambah($data)
    {
        $this->db->insert('tugas', $data);
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
        $this->db->delete('struktur_kepengurusan',$where);
        return TRUE;
    }
}
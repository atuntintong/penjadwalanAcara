<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Jadwal extends CI_Model {

    function getJadwal($data)
    {
        $this->db->insert('jadwal', $data);
    }

    public function dataAcara()
    {
        return $this->db->order_by('tanggal_mulai_obj', "DESC")->get('jadwal')->result_array();
    }

    public function getId($id){
        $this->db->select('*');
        $this->db->where('id', $id);
        // $this->db->order_by('id', 'DESC');
        return $this->db->get('jadwal')->row_array();
    }

    public function simpan($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('jadwal', $data);
        return $query;
    }

    public function deleteData($id){
        $this->db->where('id', $id);
        $this->db->delete('jadwal');
    }
}
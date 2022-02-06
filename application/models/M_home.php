<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    public function getView2()
    {
	    $this->db->select('status');
        $this->db->where('status', 'Proses');
        $this->db->or_where('status', 'Pending');
        return $this->db->get('jadwal')->result_array();
    }

    // public function viewData2()
    // {
    //     $this->db->select('perihal, pelaksana, tanggal_mulai, tanggal_selesai, waktu_mulai, waktu_selesai');
    //     $query = $this->db->get('jadwal');
    //     return $query;
    // }

    public function viewData3(){
        $this->db->select('*');
        $this->db->where('status', 'Proses');
        $this->db->or_where('status', 'Pending');
        return $this->db->get('jadwal')->result_array();
    }

    public function viewData4(){
        $this->db->select('*');
        $this->db->where('status', 'Proses');
        $this->db->or_where('status', 'Pending');
        return $this->db->get('jadwal')->result_array();
    }

    public function getEventByStatus($status)
    {
        $this->db->where('status', $status);
        return $this->db->get('jadwal')->result_array();
    }


}
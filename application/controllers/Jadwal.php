<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jadwal extends CI_Controller { 

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_jadwal');
		$this->load->view('master/header');
		$this->load->view('master/sidebar');
		$this->load->view('master/navbar');
		$this->load->view('master/footer');
	}
	
	public function index()
	{
		$data['acara'] = $this->M_jadwal->dataAcara();
		$this->load->view('jadwal', $data);
	}

	public function add()
  	{
		$this->load->view('addjadwal');
  	}

	public function addData(){
		$pelaksana = $this->input->post('pelaksana');
		$perihal = $this->input->post('perihal');
		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_mulai_obj = DateTime::createFromFormat("d-m-Y", $tanggal_mulai)->format('Y-m-d');
		$tanggal_selesai = $this->input->post('tanggal_selesai');
		$waktu_mulai = $this->input->post('waktu_mulai');
		$waktu_selesai = $this->input->post('waktu_selesai');
		if($this->input->post('submit')){
		$data = array(
			'pelaksana' => $pelaksana,
			'tanggal_mulai' => $tanggal_mulai,
			'tanggal_selesai' => $tanggal_selesai,
			'tanggal_mulai_obj' => $tanggal_mulai_obj,
			'waktu_mulai' => $waktu_mulai,
			'waktu_selesai' => $waktu_selesai,
			'perihal' => $perihal,
			'status' => 'Menunggu',
		);
		$this->load->model('M_jadwal');
		$this->M_jadwal->getJadwal($data);
		}
		redirect('Jadwal', 'refresh');
	}

	public function edit(){
		$id = $this->input->get('id');
		$data['data'] = $this->M_jadwal->getId($id);
		$this->load->view('editjadwal',$data);
	}
	
	public function delete(){
		$id = $this->input->get('id');
		$data['data'] = $this->M_jadwal->deleteData($id);
		redirect('Jadwal', 'refresh');
	}

	public function update(){
		$id = $this->update->get('id');
		redirect('Jadwal', 'refresh');
	}

	public function simpan(){
		$id = $this->input->post('id');
		$pelaksana = $this->input->post('pelaksana');
		$perihal = $this->input->post('perihal');
		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_mulai_obj = DateTime::createFromFormat("d-m-Y", $tanggal_mulai)->format('Y-m-d');
		$tanggal_selesai = $this->input->post('tanggal_selesai');
		$waktu_mulai = $this->input->post('waktu_mulai');
		$waktu_selesai = $this->input->post('waktu_selesai');
		$status = $this->input->post('status');
		if($this->input->post('submit')){
		$data = array(
			'pelaksana' => $pelaksana,
			'tanggal_mulai' => $tanggal_mulai,
			'tanggal_selesai' => $tanggal_selesai,
			'tanggal_mulai_obj' => $tanggal_mulai_obj,
			'waktu_mulai' => $waktu_mulai,
			'waktu_selesai' => $waktu_selesai,
			'perihal' => $perihal,
			'status' => $status,
		);
		$this->load->model('M_jadwal');
		$this->M_jadwal->simpan($data,$id);
		}
		redirect('Jadwal', 'refresh');
	}
}
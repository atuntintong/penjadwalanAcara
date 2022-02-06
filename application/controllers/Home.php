<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('M_home');
		$data['view2'] = $this->M_home->getView2();
		$data['view3'] = $this->M_home->viewData3();
		$this->load->view('master/header');
		$this->load->view('home', $data);
	}

	public function indexKedua()
	{
		$this->load->model('M_home');
		$proses = $this->M_home->getEventByStatus('Proses');
		if ($proses) {
			$this->load->view('master/header');
			$this->load->view('homeProses', $proses[0]);
		} else {
			$pending = $this->M_home->getEventByStatus('Pending');
			if ($pending) {
				$this->load->view('master/header');
				$this->load->view('homePending');
			}
		}
		echo 'tidak ada acara';
	}

	public function getAcara()
	{
		$this->load->model('M_home');
		$list = $this->M_home->viewData4();
		$data = array();
		foreach ($list as $row) {
			$data[] = [
				'perihal' => $row['perihal'],
				'pelaksana' => $row['pelaksana'],
				'tanggal_mulai' => $row['tanggal_mulai'],
				'tanggal_selesai' => $row['tanggal_selesai'],
				'waktu_mulai' => $row['waktu_mulai'],
				'waktu_selesai' => $row['waktu_selesai'],
				'status' => $row['status']
			];
		}
		$output = array(
			"data" => $list
		);
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($output);
	}
	
	public function getAcaraById()
	{
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode($this->M_home->getEventById($this->input->get('id')));
	}
}

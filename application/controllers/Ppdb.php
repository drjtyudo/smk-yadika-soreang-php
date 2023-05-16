<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
		public function __construct() {
			parent::__construct();
			date_default_timezone_set("Asia/Jakarta");
		}
		/* the rest of your code... */
	public function index()
	{
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('PPDB/index', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function tambah_data()
	{
		$agama = "";
		if($this->input->post('agama') == 'lainnya'){
			$agama = $this->input->post('agama_l');
		}else{
			$agama = $this->input->post('agama');
		}
		$sumber = "";
		if($this->input->post('sumber')=='lainnya'){
			$sumber = $this->input->post('sumber');
		}else{
			$sumber = $this->input->post('sumber_l');
		}
		$data = [
			'nisn' => htmlspecialchars($this->input->post('nisn')),
			'Nama' => htmlspecialchars($this->input->post('Nama')),
			'alamat' => htmlspecialchars($this->input->post('alamat')),
			'nama_ortu' => htmlspecialchars($this->input->post('namaOrtu')),
			'asek' => htmlspecialchars($this->input->post('asek')),
			'no_hp' => $this->input->post('no_hp'),
			'jenis_kelamin' => htmlspecialchars($this->input->post('JK')),
			'agama' => $agama,
			'sumber' => $sumber,
			'jurusan' => $this->input->post('jurusan'),
			'tahun'=>DATE('Y')
		];
		$this->db->insert('siswa',$data);
		redirect('Ppdb');	
	}
} 
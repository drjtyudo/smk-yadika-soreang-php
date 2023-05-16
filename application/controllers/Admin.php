<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$ci = get_instance();
			if (!$ci->session->userdata('email')) {
				redirect('Auth');
			}
			date_default_timezone_set("Asia/Jakarta");
		}
		/* the rest of your code... */
	public function index()
	{
		$tahun = DATE('Y');
       $data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', ['tahun'=>$tahun]);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/index', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function rpl()
	{
		$tahun = DATE('Y');
		$array = array('jurusan'=>'RPL', 'tahun'=>$tahun);
		$data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', $array);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/jurusan/rpl', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function AK()
	{
		$tahun = DATE('Y');
		$array = array('jurusan'=>'AK', 'tahun'=>$tahun);
		$data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', $array);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/jurusan/Ak', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function AP()
	{
		$tahun = DATE('Y');
		$array = array('jurusan'=>'AP', 'tahun'=>$tahun);
		$data['siswa'] = $this->Ppdb_m->sesuaikan('siswa', $array);
		$data['title'] = 'SMK Yadika Soreang';
		$this->load->view('komponen/header', $data);
		$this->load->view('komponen/navbar', $data);
		$this->load->view('Admin/jurusan/AP', $data);
		//$this->load->view('komponen/footer', $data);
	}
	public function download(){
 // Create new Spreadsheet object

	 }
	// public function tambah_data()
	// {
	// 	$agama = "";
	// 	if($this->input->post('agama') == 'lainnya'){
	// 		$agama = $this->input->post('agama_l');
	// 	}else{
	// 		$agama = $this->input->post('agama');
	// 	}
	// 	$sumber = "";
	// 	if($this->input->post('sumber')=='lainnya'){
	// 		$sumber = $this->input->post('sumber');
	// 	}else{
	// 		$sumber = $this->input->post('sumber_l');
	// 	}
	// 	$this->form_validation->set_rules('nisn', 'Nisn', 'required');
	// 	$this->form_validation->set_rules('Nama', 'Nama', 'required');
	// 	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	// 	$this->form_validation->set_rules('namaOrtu', 'namaOrtu', 'required');
	// 	$this->form_validation->set_rules('asek', 'Asek', 'required');
	// 	$this->form_validation->set_rules('no_hp', 'No_hp', 'required');
	// 	$this->form_validation->set_rules('JK', 'JK', 'required');
	// 	$this->form_validation->set_rules('Jurusan', 'Jurusan', 'required');
	// 	$data = [
	// 		'nisn' => htmlspecialchars($this->input->post('nisn')),
	// 		'Nama' => htmlspecialchars($this->input->post('Nama')),
	// 		'alamat' => htmlspecialchars($this->input->post('alamat')),
	// 		'nama_ortu' => htmlspecialchars($this->input->post('namaOrtu')),
	// 		'asek' => htmlspecialchars($this->input->post('asek')),
	// 		'no_hp' => $this->input->post('no_hp'),
	// 		'jenis_kelamin' => htmlspecialchars($this->input->post('JK')),
	// 		'agama' => $agama,
	// 		'sumber' => $sumber,
	// 		'jurusan' => $this->input->post('jurusan'),
	// 	];
	// 	$this->db->insert('siswa',$data);
	// }
} 
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		
	}

	public function index()
	{
		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('Admin');
			} else {
				redirect('user');
			}
		}
		// validasi dengan di set email gk boleh kosong dan gada spasi lalu harus sesuai menggunakan @gmail.com
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		//password tidak boleh kosong
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		// jika form validasi gagal maka tetap ada di file login dan di gabungkan dengan folder template
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('Auth/header', $data);
			$this->load->view('Auth/login', $data);
			$this->load->view('Auth/footer');
		} else {
			//validasinya sukses maka pindah ke function login
			$this->_login();
		}
	}


	private function _login()
	{
		//email dan password agar dapat masuk ke dashboard
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		//dengaan kondisi $user mengambil data dari tabel user dengan atribut email sebagai $email dan di jadikan array
		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		//jika user ada
		if ($user) {
			//jika user aktiv
			if($user['aktif'] == 1){

				if (password_verify($password, $user['password'])) 
				{
					$data = [
						'id' => $user['id'],
						'email' => $user['email'],
						'role_id' => $user['role_id'],
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1)
					{
						redirect('Admin');
					}else if ($user['role_id'] == 2)
					{
						redirect('user');
					} else {
						//kecuali jika tidak berhasil maka akan muncul pesan password salah
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">tidak memiliki hak akses!</div>');
						redirect('Auth');
					}
				}else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password salah!</div>');
					redirect('Auth');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">akun tidak aktif!</div>');
				redirect('Auth');
			}
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">akun tidak ditemukan!</div>');
			redirect('Auth');
		}
	}
	public function register()
	{
		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('Admin');
			} else {
				redirect('Home_user');
			}
		}
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'email sudah ada']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[pass_confirm]', ['matches' => 'password tidak sama!', 'min_length' => 'password terlalu pendek']);
		$this->form_validation->set_rules('pass_confirm', 'Password', 'required|trim|matches[password]');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('Auth/header', $data);
			$this->load->view('Auth/register', $data);
			$this->load->view('Auth/footer');
		}else{
			$data=[
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'=>1,
				'aktif' =>0
			];
			$this->db->insert('user',$data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">akun telah dibuat</div>');
			redirect('Auth');
		}
	}
	public function logout(){
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">anda telah logout</div>');
		redirect('Auth');
	}
}

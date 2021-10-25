<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PSB extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/PSB
	 *	- or -
	 * 		http://example.com/index.php/PSB/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/PSB/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// login logout register user

	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}


	public function do_register()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('M_user');
		$hasil = $this->M_user->create_user($nama, $email, md5($password));
		redirect('PSB/login');
	}
	public function do_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('M_user');
		$hasil = $this->M_user->read_user_by_email_password($email, md5($password));
		if ($hasil->num_rows() > 0) {
			$hasil = $hasil->row_array();
			$this->session->set_userdata('masuk', true);
			$this->session->set_userdata('status', $hasil['status']);
			$this->session->set_userdata('username', $hasil['nama']);
			$this->session->set_userdata('email', $hasil['email']);
			$this->session->set_userdata('id_user', $hasil['id_user']);
			if ($hasil['status'] == '1') {
				echo "<script>alert('This card was not approved, Thanks.');</script>";
				redirect('PSB/index');
			} else if ($hasil['status'] == '2') {
				echo "<script>alert('This card was not approved, Thanks.');</script>";
				redirect('PSB/index2');
			}
		} else {
			redirect('PSB/login');
		}
	}


	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('PSB/login');
	}

	// indexs

	public function index()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav');
			$this->load->view('index');
			$this->load->view('footer');
		} else {
			redirect('PSB/login');
		}
	}

	public function index2()
	{
		if ($this->session->userdata('status') == 2 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav2');
			$this->load->view('index2');
			$this->load->view('footer');
		} else {
			redirect('PSB/login');
		}
	}


	// user account

	public function account()
	{
		if ($this->session->userdata('status') == 2 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav2');
			$this->load->model('M_account');
			$x['hasil'] = $this->M_account->read_useracc();
			$this->load->view('account', $x);
			$this->load->view('footer');
		} else {
			redirect('PSB/login');
		}
	}

	public function account_form()
	{
		if ($this->session->userdata('status') == 2 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav2');
			$this->load->view('account_form');
			$this->load->view('footer');
		} else {
			redirect('PSB/index2');
		}
	}


	public function do_input_account()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$status_pendaftaran = $this->input->post('status_pendaftaran');
		$foto = $this->input->post('foto');
		$this->load->model('M_account');
		$hasil = $this->M_account->create_useracc($nik, $nama, $asal_sekolah, $status_pendaftaran,$foto);
		redirect('PSB/account');
	}

	// admin accounts

	public function accounts()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav');
			$this->load->model('M_account');
			$x['hasil'] = $this->M_account->read_useracc();
			$this->load->view('accounts', $x);
			$this->load->view('footer');
		} else {
			redirect('PSB/login');
		}
	}



	public function update_account()
	{
		$id_account = $this->input->post('id_account');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$status_pendaftaran = $this->input->post('status_pendaftaran');
		$this->load->model('M_account');
		$hasil = $this->M_account->update_useracc($id_account,$asal_sekolah, $status_pendaftaran);

		redirect('PSB/accounts');
	}

	public function delete_useracc()
	{
		$id_account = $this->input->post('id_account');
		$this->load->model('M_account');
		$hasil = $this->M_account->delete_useracc($id_account);
		redirect('PSB/accounts');
	}
	// user registrasi

	public function registrasip()
	{
		if ($this->session->userdata('status') == 2 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav2');
			$this->load->model('M_regis');
			$x['hasil'] = $this->M_regis->read_regis();
			$this->load->view('registrasip', $x);
			$this->load->view('footer');
		} else {
			redirect('PSB/login');
		}
	}

	public function registrasip_form()
	{
		if ($this->session->userdata('status') == 2 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav2');
			$this->load->view('registrasip_form');
			$this->load->view('footer');
		} else {
			redirect('PSB/index2');
		}
	}


	public function do_input_regis()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$this->load->model('M_regis');
		$hasil = $this->M_regis->create_regis($nama, $alamat, $jenis_kelamin, $umur, $tanggal_lahir, $tempat_lahir);
		redirect('PSB/registrasip');
	}



	// admin registrasi


	public function registrasi()
	{
		if ($this->session->userdata('status') == 1 && $this->session->userdata('masuk') == true) {
			$this->load->view('header');
			$this->load->view('side_nav');
			$this->load->model('M_regis');
			$x['hasil'] = $this->M_regis->read_regis();
			$this->load->view('registrasi', $x);
			$this->load->view('footer');
		} else {
			redirect('PSB/login');
		}
	}



	public function update_regis()
	{
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$umur = $this->input->post('umur');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$this->load->model('M_regis');
		$hasil = $this->M_regis->update_registrasi($id_pendaftaran, $nama, $alamat, $jenis_kelamin, $umur, $tanggal_lahir, $tempat_lahir);
		redirect('PSB/registrasi');
	}


	public function delete_user()
	{
		$id_pendaftaran = $this->input->post('id_pendaftaran');
		$this->load->model('M_regis');
		$hasil = $this->M_regis->delete_user($id_pendaftaran);
		redirect('PSB/registrasi');
	}



	// dompdf
	public function cetak_data($id_pendaftaran)
	{
		$this->load->model('M_print');
		$this->session->userdata('regis');
		$data['regis'] = $this->M_print->getDatabyId($id_pendaftaran);
		$this->load->library('pdf');
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "bukti_pendaftaran.pdf";
		$this->pdf->load_view('cetak_data', $data);
		$hasil = $this->M_print->read_user($id_pendaftaran);
	}

	public function cetak_bukti($id_account)
	{
		$this->load->model('M_bukti');
		$this->session->userdata('useracc');
		$data['useracc']= $this->M_bukti->getDatabyId($id_account);
		$this->load->library('pdf');	
		$this->pdf->set_option('isRemoteEnabled', true);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "bukti_status.pdf";
		$this->pdf->load_view('cetak_bukti', $data);
		$hasil = $this->M_bukti->read_user($id_account);
		
	}

}

<?php

class Login_C extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Login_M');
 
	}
 
	function index(){
		$this->load->view('Login_V');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Login_M->cek_login("tbl_admin", $where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/Karyawan_C/index/"));
 
		}else{
			echo "Username atau password salah !";
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/Login_C/index/'));
	}
}
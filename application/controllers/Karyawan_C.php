<?php
class Karyawan_C extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('Karyawan_M'));
    }
    
    function index(){
        $data['karyawan'] = $this->Karyawan_M->getAll()->result();
        $this->load->view('Karyawan_V', $data);
    }

    function add_form(){
        $this->load->view('TambahKaryawan_V');
    }

    function add(){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
 
		$data = array(
            'nik' => $nik,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin
			);
		$this->Karyawan_M->input_data($data, 'tbl_karyawan');
		redirect('Karyawan_C/index');
    }

    function edit($id_karyawan){
        $where = array('id_karyawan' => $id_karyawan);
		$data['karyawan'] = $this->Karyawan_M->edit($where,'tbl_karyawan')->result();
		$this->load->view('EditKaryawan_V', $data);
    }

    function update(){
        $id_karyawan = $this->input->post('id_karyawan');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
     
        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin
        );
     
        $where = array(
            'id_karyawan' => $id_karyawan
        );
     
        $this->Karyawan_M->update_data($where,$data,'tbl_karyawan');
        redirect('Karyawan_C/index');
    }

    function delete($id_karyawan){
        $where = array('id_karyawan' => $id_karyawan);
		$this->Karyawan_M->delete($where,'tbl_karyawan');
		redirect('Karyawan_C/index');
    }
}
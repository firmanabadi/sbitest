<?php
class Karyawan_M extends CI_model{
    
    function getAll(){
        return $this->db->get('tbl_karyawan');
    }

    function input_data($data, $table){
		$this->db->insert($table, $data);
	}

    function edit($where, $table){		
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}	

    function delete($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
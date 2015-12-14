<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetMahasiswa()
	{
		$data =$this->db->query('select * from mahasiswa');
		return $data->result_array();
	}

	public function InsertData($tableName, $data)
	{
		$ins= $this->db->insert($tableName, $data);
		return $ins;
	}

	public function UpdateData($tableName, $data, $where)
	{
		$upd= $this->db->update($tableName, $data, $where);
		return $upd;
	}

	public function DeleteData($tableName, $where)
	{
		$del= $this->db->delete($tableName, $where);
		return $del;
	}
}


//$data =$this->db->query('select * from mahasiswa');
//		return $data->result_array();
//mengambil data masuk kan kedalam $data dan ditambilkan dalam bentuk array gunakan result_aray
//--------------------------------------------------------------
//
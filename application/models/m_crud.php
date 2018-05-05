<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_crud extends CI_Model {

	public function get_data()
	{
    $sql="SELECT id_kar, nama_kar, no_hp, email, alamat, jenis_kel FROM karyawan";
    $query=$this->db->query($sql);
    if($query->num_rows()>0){
      $result=$query->result_array();
      $query->free_result();
      return $result;
    } else {
      return array();
    }
  }
  
  public function insert($params=''){
    $sql="INSERT INTO karyawan (nama_kar, no_hp, email, alamat) VALUES (?, ?, ?, ?)";
    return $this->db->query($sql, $params);
  }
}

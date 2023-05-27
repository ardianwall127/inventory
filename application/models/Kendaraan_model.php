<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan_model extends CI_Model {

	public function get_data($table, $filter = '')
	{
		if ($filter != '') {
			$this->db->where('instansi', $filter);
		}
		return $this->db->get($table);
	}

	public function detail_kendaraan($id = NULL){
		$query = $this->db->get_where('tb_motor', array('id' => $id))->row();
		return $query;

	}
	public function insert_data($data, $table){
	
		$this->db->insert($table, $data);


	}

	public function isDataExists($data)
    {
        // Query the database to check if the data already exists
        $this->db->where($data);
        $query = $this->db->get('tb_motor'); 
        return $query->num_rows() > 0;
    }

	public function delete_data($where, $table){
	
		$this->db->where($where);
		$this->db->delete($table);


	}

	public function update_data($data, $table)
	{
		$this->db->where('id', $data['id']);
		$this->db->update($table, $data);
	}

	public function getService($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_motor');
        return $query->result();
    }

	

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function get($table)
	{
		return $this->db->get($table);
	}

	public function delete($table,$primary,$id){
		$this->db->where($primary,$id);
		return $this->db->delete($table);
	}

	public function save($table,$data){
			$this->db->insert($table,$data);
			return $this->db->insert_id();
	}

	public function get_id($table,$primary, $where)
	{
		$this->db->where($primary,$where);
		return $this->db->get($table);
	}

	public function	edit($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

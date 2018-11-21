<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_porto extends CI_Model {

	public function get($table, $order)
	{
		$this->db->order_by($order);
		return $this->db->get($table);
	}
	public function get_id($table, $where)
	{
		$this->db->where($where);
		return $this->db->get($table);
	}
	public function fetch_data($table, $field, $num, $offset){
		empty($offset) ? $offset = 0 : $offset;

		$this->db->query("SET @no=".$offset);
		$this->db->select('*,(@no:=@no+1) AS nomor');
		$this->db->order_by($field, 'DESC');

		$data = $this->db->get($table, $num, $offset);

		return $data->result();
	}
}
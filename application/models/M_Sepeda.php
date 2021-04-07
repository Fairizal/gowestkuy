<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sepeda extends CI_Model
{
	public function getIndex()
	{
		$this->db->select('s.id, s.nama as namaSepeda, t.nama as namaType, m.nama as namaMerk');
		$this->db->from('sepeda s');
		$this->db->join('type t', 't.id = s.type_id');
		$this->db->join('merk m', 'm.id = s.merk_id');
		$query = $this->db->get()->result();
		return $query;
	}

	public function getData($data = [])
	{
		$this->db->select('*');
		$this->db->from('sepeda');
		$this->db->where();
	}

	public function insertData($data)
	{
		$this->db->insert('sepeda', $data);
		return $this->db->insert_id();
	}

}
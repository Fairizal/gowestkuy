<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Sewa extends CI_Model
{
	public function getIndex()
	{
		$this->db->select('*');
		$this->db->from('sewa');
		$query = $this->db->get()->result();
		return $query;
	}

	public function getData($id)
	{
		$this->db->select('*');
		$this->db->from('sewa');
		$this->db->where(['id' => $id]);
		$query = $this->db->get()->result();
		return $query;
	}

	public function insertData($data, $dataDetail)
	{
		$this->db->trans_begin();
		$this->db->insert('sewa', $data);
		if ($this->db->trans_status() === FALSE)
		{
	        $this->db->trans_rollback();
	        return 0;
		}
		else
		{
			$sewaId = $this->db->insert_id();
			$idx = 1;
			foreach ($dataDetail as $detail) {
				// die(var_dump($detail));
				$saveDetail = [
					'idx' => $idx,
					'sewa_id' => $sewaId,
					'sepeda_id' => $detail['sepeda_id'],
					'subtotal' => $detail['subtotal']
				];
				$this->db->insert('sewad', $saveDetail);
			}

			if ($this->db->trans_status() === FALSE)
			{
		        $this->db->trans_rollback();
		        return 0;
			}

        	$this->db->trans_commit();
			return $sewaId;
		}

	}

	public function updateData($id, $data, $dataDetail)
	{
		$this->db->trans_begin();
		$this->db->where(['id' => $id]);
		$this->db->update('sewa', $data);
		if ($this->db->trans_status() === FALSE)
		{
	        $this->db->trans_rollback();
	        return 0;
		}
		else
		{
			$sewaId = $id;
			$this->db->delete('sewad', ['sewa_id' => $sewaId]);
			$idx = 1;
			foreach ($dataDetail as $detail) {
				// die(var_dump($detail));
				$saveDetail = [
					'idx' => $idx,
					'sewa_id' => $sewaId,
					'sepeda_id' => $detail['sepeda_id'],
					'subtotal' => $detail['subtotal']
				];
				$this->db->insert('sewad', $saveDetail);
			}

			if ($this->db->trans_status() === FALSE)
			{
		        $this->db->trans_rollback();
		        return 0;
			}

        	$this->db->trans_commit();
			return $sewaId;
		}

	}

	public function deleteData($id)
	{
		$this->db->trans_begin();
		$this->db->delete('sewad', ['sewa_id' => $id]);
		if($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
	        return 0;
		}
		else
		{
			$this->db->delete('sewa', ['id' => $id]);
			if ($this->db->trans_status() === FALSE)
			{
				$this->db->trans_rollback();
			    return 0;
			}
			$this->db->trans_commit();
			return 1;
		}
	}
}
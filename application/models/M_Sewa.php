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

	public function getIndexNotBack()
	{
		$this->db->select('*');
		$this->db->from('sewa');
		$this->db->where(['isback' => false]);
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
		$exist = $this->db->select('*')->from('sewa')->where(['ktpno' => $data['ktpno'], 'isback' => false])->get()->result();
		if(!$exist) {
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
					$qtySepeda = $this->db->select('qty')->from('sepeda')->where(['id' => $detail['sepeda_id']])->get()->result();
					$qty = $qtySepeda[0]->qty;
					$this->db->where(['id' => $detail['sepeda_id']])->update('sepeda', ['qty' => $qty-1]);
					$idx++;
				}

				if ($this->db->trans_status() === FALSE)
				{
			        $this->db->trans_rollback();
			        return 0;
				}

	        	$this->db->trans_commit();
				return $sewaId;
			}
		} else {
			return 0;
		}

	}

	public function updateData($id, $data, $dataDetail)
	{
		$exist = $this->db->select('*')->from('sewa')->where('id is not '.$id)->where(['ktpno' => $detail['ktpno'], 'isback' => false])->get()->result();
		if(!$exist) {
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
				$dataSewadOld = $this->db->select('*')->from('sewad')->where(['sewa_id' => $sewaId])->get()->result();
				foreach ($dataSewadOld as $sewad) {
					$qtySepeda = $this->db->select('qty')->from('sepeda')->where(['id' => $sewad->sepeda_id])->get()->result();
					$qty = $qtySepeda[0]->qty;
					$this->db->where(['id' => $sewad->sepeda_id])->update('sepeda', ['qty' => $qty+1]);
				}
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
					$qtySepeda = $this->db->select('qty')->from('sepeda')->where(['id' => $detail['sepeda_id']])->get()->result();
					// die(var_dump($qtySepeda));
					$qty = $qtySepeda[0]->qty;
					$this->db->where(['id' => $detail['sepeda_id']])->update('sepeda', ['qty' => $qty-1]);
					$idx++;
				}

				if ($this->db->trans_status() === FALSE)
				{
			        $this->db->trans_rollback();
			        return 0;
				}

	        	$this->db->trans_commit();
				return $sewaId;
			}
		} else {
			return 0;
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
			$dataBack = $this->db->select('*')->from('back')->where(['sewa_id' => $id])->get()->result();
			if (!$dataBack) {
				$dataSewadOld = $this->db->select('*')->from('sewad')->where(['sewa_id' => $id])->get()->result();
				foreach ($dataSewadOld as $sewad) {
					$qtySepeda = $this->db->select('qty')->from('sepeda')->where(['id' => $sewad->sepeda_id])->get()->result();
					$qty = $qtySepeda[0]->qty;
					$this->db->where(['id' => $sewad->sepeda_id])->update('sepeda', ['qty' => $qty+1]);
				}
				$this->db->delete('sewa', ['id' => $id]);
				if ($this->db->trans_status() === FALSE)
				{
					$this->db->trans_rollback();
				    return 0;
				}
				$this->db->trans_commit();
				return 1;
			} else {
				$this->db->trans_rollback();
			    return 0;
			}
		}
	}
}
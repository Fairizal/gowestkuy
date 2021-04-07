<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepeda extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		$this->title = 'Sepeda';
		$this->link = strtolower($this->title);
		$this->load->model('m_sepeda');
    }

	public function index()
	{
		$this->load->helper('url');
		$data['title'] = $this->title;
		$data['link'] = $this->link;
		$data['content'] = 'sepeda/v_index';
		$data['dataSepeda'] = $this->m_sepeda->getIndex();
		// die(var_dump($data['dataSepeda']));
		$this->load->view('layouts/v_layouts', $data);
	}
	
	public function create()
	{
		$this->load->helper('url');
		$data['title'] = 'Tambah ' . $this->title;
		$data['link'] = $this->link;
		$data['content'] = 'sepeda/v_create';
		// $data['dataSepeda'] = $this->m_sepeda->getIndex();
		if ($this->input->method() == 'post') {
			$postData = $this->input->post();
			// die(var_dump($postData['nama']));
			$data = [
				'nama' => $postData['nama'],
				'type_id' => $postData['type'],
				'merk_id' => $postData['merk']
			];
			$id = $this->m_sepeda->insertData($data);
			if($this->m_sepeda->insertData($data)){
				$this->output->set_content_type("application/json")->set_output(json_encode(array('status'=>true, 'msg'=>'Sukses', 'id' => $id)));

			} else {
				$this->output->set_content_type("application/json")->set_output(json_encode(array('status'=>false, 'msg'=>'Gagal Simpan')));
			}
			// redirect('/sepeda', 'refresh');
			// return json_encode([
			// 	'status' => true,
			// 	'msg' => 'Sukses'
			// ]);
		} else {
			$this->load->view('layouts/v_layouts', $data);
		}
	}
}

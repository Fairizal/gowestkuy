<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backreport extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
		$this->title = 'Laporan Pengembalian';
		$this->link = 'backreport';
		// $this->load->model('m_sewa');
		// $this->load->model('m_sewad');
		$this->load->model('m_back');
		// $this->load->model('m_backd');
		// $this->load->model('m_sepeda');
		if (!$this->session->userdata('user')){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->helper('url');
		$data['title'] = $this->title;
		$data['link'] = $this->link;
		$data['content'] = 'backreport/v_index';
		$date = new \DateTime(date('Y-m-d'));
		$filter['startdate'] = $date->modify('- 30 days')->format('Y-m-d');
		$filter['enddate'] = date('Y-m-d');
		if($this->input->get()) {
			$filter['startdate'] = $this->input->get('startdate');
			$filter['enddate'] = $this->input->get('enddate');
		}
		$data['dataBack'] = $this->m_back->getIndex($filter);
		$this->load->view('layouts/v_layouts', $data);
	}

	
}

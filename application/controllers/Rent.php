<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rent extends CI_Controller {

 	public function __construct()
    {
        parent::__construct();
		$this->title = 'Sewa';
		$this->link = strtolower($this->title);
    }

	public function index()
	{
		$this->load->helper('url');
		$data['title'] = $this->title;
		$data['link'] = $this->link;
		$data['content'] = 'rent/v_index';
		$this->load->view('layouts/v_layouts', $data);
	}
}

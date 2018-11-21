<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_porto');
	}
	public function index()
	{
		$data['sliders'] = $this->M_porto->get('slider', 'SliderID DESC')->result();
		$data['more']	 = $this->M_porto->get('more','MoreID ASC')->result();
		$data['recent']	 = $this->M_porto->get('porto','RAND() LIMIT 0, 4')->result();
		
		$data['active'] = array(" class='active'", '', '');
		$data['content'] = 'home';
		$this->load->view('layout', $data);
	}
}

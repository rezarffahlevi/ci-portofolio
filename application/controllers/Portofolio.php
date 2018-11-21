<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_porto');
	}
	public function index($id=null)
	{
		$this->load->library('pagination');
		$config['base_url'] 		= site_url('portofolio/index/');
		$config['total_rows']	 	= $this->M_porto->get('porto', 'PortoID DESC')->num_rows();
		$config['per_page']			= 8;
		$config['num_links']		= 5;
		$config['full_tag_open']	= '<ul class="pagination">';
		$config['full_tag_close']	= '</ul>';
		$config['first_link']		= 'First';
		$config['last_link']		= 'Last';
		$config['first_tag_open']	= '<li>';
		$config['first_tag_close']	= '</li>';
		$config['prev_link']		= '&laquo';
		$config['prev_tag_open']	= '<li class="prev">';
		$config['porev_tag_close']	= '</li>';
		$config['next_link']		= '&raquo';
		$config['next_tag_open']	= '<li>';
		$config['next_tag_close']	= '</li>';
		$config['last_tag_open']	= '<li>';
		$config['last_tag_close']	= '</li>';
		$config['cur_tag_open']		= '<li class="active"><a href="">';
		$config['cur_tag_close']	= '</a></li>';
		$config['num_tag_open']		= '<li>';
		$config['num_tag_close']	= '</li>';

		$this->pagination->initialize($config);

		// buat pagination
		$data['active'] = array('', " class='active'", '');
		$data['halaman'] = $this->pagination->create_links();
		$data['porto'] = $this->M_porto->fetch_data('porto', 'PortoID', $config['per_page'], $id);
		$data['content'] = 'portofolio';
		$this->load->view('layout', $data);
	}
}

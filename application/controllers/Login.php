<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_porto');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('login');
		if(!empty($this->session->userdata('login'))){
			redirect('admin');
		}
	}
	public function validate(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = array('admin', 'aku', 'smkiu');
		$pass = array('123admin', 'aaa', 'utama');
		if(($username == $user[0] && $password == $pass[0]) || ($username == $user[1] && $password == $pass[1]) || ($username == $user[2] && $password == $pass[2]) ){
			$this->session->set_userdata('login', $username);
			redirect('admin/');
		}
		else{
			$this->session->set_flashdata('pesan', "<div class='alert alert-danger'> Username atau password anda salah </div>");
			redirect('login');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

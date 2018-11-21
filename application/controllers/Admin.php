<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->library('session');
		if(empty($this->session->userdata('login'))){
			redirect('login/');
		}
	}

	public function index()
	{
		$data['data'] = $this->M_admin->get('porto')->result();
		$data['isi'] = 'admin';
		$this->load->view('layout_admin',$data);
	}

	public function Slider()
	{
		$data['data'] = $this->M_admin->get('slider')->result();
		$data['isi'] = 'slider';
		$this->load->view('layout_admin',$data);
	}

	public function More()
	{
		$data['data'] = $this->M_admin->get('more')->result();
		$data['isi'] = 'more';
		$this->load->view('layout_admin',$data);
	}

	public function Add_data($param){

		if($param == "porto"){
			$data['isi'] = 'tambah_porto';
		}

		else if($param == "slider"){
			$data['isi'] = 'tambah_slider';
		}

		else{
			$data['isi'] = 'tambah';
		}

		$this->load->view('layout_admin',$data);
	}

	public function add_porto(){
		if(isset($_POST['save'])){
			$title = $_POST['title'];
			$description = $_POST['description'];
			$link = $_POST['link'];
			$cat = $_POST['category'];
			$img = time().'-'.$_FILES['image']['name'];
			$data = array(
				"Title" => $title,
				"Description" => $description,
				"Link" => $link,
				"Category" => $cat,
				"FileName" => $img,
				"Folder" => 'img/'.strtolower($cat).'/'
			);
					 			$config['file_name'] = $img;
								$config['upload_path']          = './assets/img/'.strtolower($cat).'/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
											  print_r($error);
                      //  $this->load->view('upload_form', $error);
                }
                else
                {
												$this->M_admin->save('porto',$data);
												redirect('admin/');
                }
		}
	}

	public function add_slider(){
		if(isset($_POST['save'])){
			$title = $_POST['title'];
			$description = $_POST['description'];
			$img = time().'-'.$_FILES['image']['name'];
			$data = array(
				"Title" => $title,
				"Description" => $description,
				"Slider" => $img
			);
				$config['file_name'] = $img;
								$config['upload_path']          = './assets/img/slides/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 5000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
											  print_r($error);
                      //  $this->load->view('upload_form', $error);
                }
                else
                {
												$this->M_admin->save('slider',$data);
												redirect('admin/slider');
                }
		}
	}

	public function Delete($id){
		$file = $this->M_admin->get_id('porto','PortoID', $id)->row();
		unlink('./assets/'.$file->Folder.$file->FileName);
		$primary = 'PortoID';
		$table = 'porto';
		$this->M_admin->delete($table,$primary,$id);
		echo "<script>location=('".base_url('admin')."');</script>";
	}

	public function Delete_slider($id){
		$file = $this->M_admin->get_id('slider','SliderID', $id)->row();
		unlink('./assets/img/slides/'.$file->Slider);
		$primary = 'SliderID';
		$table = 'slider';
		$this->M_admin->delete($table,$primary,$id);
		echo "<script>location=('".base_url('admin/slider/')."');</script>";
	}

	public function Get_data($id){
		$data['data'] = $this->M_admin->get_id('porto','PortoID',$id)->result();
		$data['isi'] = 'edit';
		$this->load->view('layout_admin',$data);
	}

	public function edit_more($get){
		$data['data'] = $this->M_admin->get_id('more','MoreID',$get)->row();
		$data['isi'] = 'edit_more';
		$this->load->view('layout_admin',$data);
		if(isset($_POST['update'])){
			$data = array(
						"Title" => $_POST['title'],
						"Description" => $_POST['description'],
						"Icon" => $_POST['icon']
					);
			$where=array('MoreID' => $get);
			$this->M_admin->edit('more', $where, $data);
			echo "<script>location=('".base_url('admin/more/')."');</script>";
		}	
	}

	public function edit_porto($id)
	{
		$data['value'] = $this->M_admin->get_id('porto','PortoID',$id)->row();
		$data['isi'] = 'edit_portofolio';
		$this->load->view('layout_admin',$data);
	}

	public function edit_slider($id)
	{
		$data['value'] = $this->M_admin->get_id('slider','SliderID',$id)->row();
		$data['isi'] = 'edit_slider';
		$this->load->view('layout_admin',$data);
	}
	public function update_slider(){
		$data=array('Title' => $this->input->post('title'), 'Description' => $this->input->post('desc'));
		$where = array('SliderID' => $this->input->post('id'));
		$this->M_admin->edit('slider', $where, $data);
		redirect('admin/slider/');
	}
	public function update_porto(){
		$data=array('Title' => $this->input->post('title'), 'Description' => $this->input->post('desc'), 'Link' => $this->input->post('link'), 'Category' => $this->input->post('category'));
		$where = array('PortoID' => $this->input->post('id'));
		$this->M_admin->edit('porto', $where, $data);
		redirect('admin/');
	}
}

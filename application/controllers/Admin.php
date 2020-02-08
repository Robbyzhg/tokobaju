<?php  

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer');
	}
}
<?php  

class Admin extends CI_Controller {

	public function __construct()
     {
          parent::__construct();
          $this->load->modul('model_product');
     }


	public function index()
	{
		$data['product'] = $this->model_product->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer');
	}
}
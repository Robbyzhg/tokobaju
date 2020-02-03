<?php 

class jewerly extends CI_Controller {
	public function index()
	{
		$data['product'] = $this->model_product->tampil_data()->result();
		$this->load->view('home/templates/header');
		$this->load->view('home/jewerly', $data);
		$this->load->view('home/templates/footer');
	}
}
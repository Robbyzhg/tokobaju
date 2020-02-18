<?php  

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_product'); 
	}

	public function index()
	{
		$data['product'] = $this->Model_product->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/templates/footer');
	}

	public function tambah()
	{
		move_uploaded_file($_FILES['gambar_product']['tmp_name'],'./assets/product/'.$_FILES['gambar_product']['name']);
		$product = [
			"nama_product" => $this->input->post('nama_product', TRUE),
			"harga_product" => $this->input->post('harga_product', TRUE),
			"deskripsi" => $this->input->post('deskripsi', TRUE),
			"kategori" => $this->input->post('kategori', TRUE),
			"gambar_product" => $_FILES['gambar_product']['name']
		];
		$this->Model_product->tambah($product);
		redirect(base_url('admin'));
	}

	public function hapus($id_product)
	{
		$this->db->where('id_product', $id_product);
		$this->db->delete('product');
		redirect(base_url('admin'));
	}
}
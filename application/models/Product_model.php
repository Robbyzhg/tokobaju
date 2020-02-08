<?php defined('BASEPATHH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{
	private $_table = "product";

	public $id_product;
	public $nama_product;
	public $harga_product;
	public $deskripsi;
	public $kategori;
	public $gambar = "default.jpg";

	public fuction rules()
	{
		return [
			['field' => 'name_product',
			 'label' => 'Nama_product',
			 'rules' => 'required'],

			['field' => 'harga_product',
			 'label' => 'harga_product',
			 'rules' => 'required'],
			 
			['field' => 'deskripsi',
			 'label' => 'deskripsi',
			 'rules' => 'required'], 

			['field' => 'kategori',
			 'label' => 'kategori',
			 'rules' => 'required'],
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_product" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->nama_product = $post["nama_product"];
        $this->harga_product = $post["harga_product"];
        $this->deskripsi = $post["deskripsi"];
        $this->kategori = $post["kategori"];;
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_product = $post["id"];
        $this->nama_product = $post["nama_product"];
        $this->harga_product = $post["harga_product"];
        $this->deskripsi = $post["deskripsi"];
        $this->kategori = $post["kategori"];;
        return $this->db->update($this->_table, $this, array('id_product' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_product" => $id));
    }
}
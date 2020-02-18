<?php 
class Model_product extends CI_Model {

     public function tampil_data($kategori = null)
     {
     	if ($kategori == null) {
        	return $this->db->get('product');	
     	} else {
     		$this->db->where('kategori', $kategori);
     		return $this->db->get('product');	
     	}
     }
     public function tambah($product)
     {
     	return $this->db->insert('product', $product);
     }
}
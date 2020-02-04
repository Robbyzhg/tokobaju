<?php if(!defined('BASEPATH')) exit ('No direct script access allowed');

class Pengguna_model extends CI_Model {

     public function __construct()
     {
          parent::__construct();
     }

     public function semua()
     {
          $this->db->select('*');
          $this->db->from('pengguna');
          $this->db->order_by('id', 'DESC');

          return $this->db->get();
     }
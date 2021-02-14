<?php

class model_kategori extends CI_model{
    
    public function data_daging_sapi(){
        return $this->db->get_where("tb_barang",array
        ('kategori' => 'Daging_Sapi'));
    }

    public function data_daging_ayam(){
        return $this->db->get_where("tb_barang",array
        ('kategori' => 'Daging_Ayam'));
    }

    public function data_daging_ikan(){
        return $this->db->get_where("tb_barang",array
        ('kategori' => 'Daging_Ikan'));
    }

    public function data_frozen_food(){
        return $this->db->get_where("tb_barang",array
        ('kategori' => 'Frozen_Food'));
    }
}
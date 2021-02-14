<?php

    class kategori extends CI_controller{

        public function daging_sapi(){
            $data['daging_sapi'] = $this->model_kategori->
            data_daging_sapi()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('daging_sapi',$data);
            $this->load->view('templates/footer');
        }

        public function daging_ayam(){
            $data['daging_ayam'] = $this->model_kategori->
            data_daging_ayam()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('daging_ayam',$data);
            $this->load->view('templates/footer');
        }
        
        public function daging_ikan(){
            $data['daging_ikan'] = $this->model_kategori->
            data_daging_ikan()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('daging_ikan',$data);
            $this->load->view('templates/footer');
        }

        public function frozen_food(){
            $data['frozen_food'] = $this->model_kategori->
            data_frozen_food()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('frozen_food',$data);
            $this->load->view('templates/footer');
            
    }
}
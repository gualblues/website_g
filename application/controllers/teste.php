<?php
    class teste extends CI_Controller{
        public function index{
            $this->load->view('insert_teste');
        }
        public function insertLivro(){
            $this->load->model('livro_model');
            
            $data['titulo'] = $this->input->post('titulo');
            $data['autor']  = $this->input->post('autor');
            
            $this->livro_model->insertLivro($data);
            
        }
    }
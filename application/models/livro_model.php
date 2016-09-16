<?php
    class livro extends CI_Model{
        public function insertLivro($data){
            $this->db->insert('livro', $data);
        }
    }
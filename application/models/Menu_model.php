<?php
class Menu_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_menu()
        {
            $query = $this->db->get('menu');
            return $query->result_array();
        }

               
        
    
}
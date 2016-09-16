<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('menu_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['menu'] = $this->news_model->get_menu();
            $data['title'] = 'Página';

            $this->load->view('templates/header', $data);
            $this->load->view('news/index', $data);
            $this->load->view('templates/footer');
        }

        public function view()
        {
                $data['item'] = $this->news_model->get_menu();
        }
}
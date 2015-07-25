<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $data;

    public function __construct()
    {
        parent::__construct();

        $this->data['general'] = $this->general_model->get_data();
        $this->data['categories'] = $this->category_model->get_data();

        if (empty($this->session->userdata['user']) && !in_array('login', $this->uri->segment_array())) {
            redirect('admin/users/login');
        }
    }
}

class Frontend extends CI_Controller {

    public $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');

        $cookie_products = get_cookie('products');
        $this->data['cart'] = !empty($cookie_products) ? explode(',', $cookie_products) : [];

        $this->data['general'] = $this->general_model->get_data();
        $this->data['categories'] = $this->category_model->get_data_with_products();
    }
}
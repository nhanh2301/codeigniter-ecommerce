<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $data;

    public function __construct()
    {
        parent::__construct();

        $this->data['general'] = $this->general_model->get_data();
        $this->data['categories'] = $this->category_model->get_data();

        if (empty($this->session->userdata['admin_user_id']) && !in_array('login', $this->uri->segment_array())) {
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
        $cookie_products = !empty($cookie_products) ? explode(',', $cookie_products) : [];

        if (!empty($cookie_products)) {
            foreach ($cookie_products as $cp) {
                $exploded_cp = explode('-', $cp);
                if (!empty($exploded_cp[0]) && !empty($exploded_cp[1])) {
                    $this->data['cart'][$exploded_cp[0]] = ['id' => $exploded_cp[0], 'quantity' => $exploded_cp[1]];
                }
            }
        }

        $this->data['general'] = $this->general_model->get_data();
        $this->data['categories'] = $this->category_model->get_data_with_products();
        $this->data['pages'] = $this->page_model->get_data();
        $this->data['user'] = $this->user_model->get_user();
    }
}
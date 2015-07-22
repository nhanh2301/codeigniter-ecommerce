<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $data;
    public $ola = 's';

    public function __construct()
    {
        parent::__construct();

        $this->data['general'] = $this->general->get_data();
        $this->data['categories'] = $this->category->get_data();

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

        $this->data['general'] = $this->general->get_data();
        $this->data['categories'] = $this->category->get_data_with_products();
    }
}
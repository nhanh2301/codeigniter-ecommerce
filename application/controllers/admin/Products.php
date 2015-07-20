<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public $data;

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/products');
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/product');
        $this->load->view('admin/footer');
    }

    public function edit($id)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/product');
        $this->load->view('admin/footer');
    }

    public function save($id = null)
    {

    }
}

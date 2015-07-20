<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public $data;

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/categories');
        $this->load->view('admin/footer');
    }

    public function create()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/category');
        $this->load->view('admin/footer');
    }

    public function edit($id)
    {
        $this->load->view('admin/header');
        $this->load->view('admin/category');
        $this->load->view('admin/footer');
    }

    public function save($id = null)
    {

    }
}

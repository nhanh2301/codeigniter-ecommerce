<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/categories', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function create()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/category', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function edit($id)
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/category', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save($id = null)
    {

    }
}

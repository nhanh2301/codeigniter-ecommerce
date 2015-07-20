<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/pages', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function create()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/page', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function edit($id)
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/page', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save($id = null)
    {

    }
}

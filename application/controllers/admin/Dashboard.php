<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/dashboard', $this->data);
        $this->load->view('admin/footer', $this->data);
    }
}

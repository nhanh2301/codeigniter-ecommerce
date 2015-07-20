<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Frontend {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header', $this->data);
        $this->load->view('page', $this->data);
        $this->load->view('footer', $this->data);
    }
}

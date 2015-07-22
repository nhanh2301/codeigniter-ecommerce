<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Frontend
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('partials/header', $this->data);
        $this->load->view('page', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function contact()
    {
        $this->load->view('partials/header', $this->data);
        $this->load->view('contact', $this->data);
        $this->load->view('partials/footer', $this->data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public $data;

    public function index()
    {
        $this->load->view('page');
    }
}

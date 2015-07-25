<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['orders'] = $this->order_model->get_latest();

        print_r($this->data['orders']);

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/orders', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function create()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/order', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function edit($id)
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/order', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save($id = null)
    {

    }
}

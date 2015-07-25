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
        $this->data['orders'] = $this->order_model->get_latest();
        $this->data['categories_total'] = count($this->data['categories']);
        $this->data['products_total'] = $this->product_model->record_count();
        $this->data['orders_today_total'] = $this->order_model->record_today_count();
        $this->data['orders_total'] = $this->order_model->record_count();

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/dashboard', $this->data);
        $this->load->view('admin/footer', $this->data);
    }
}

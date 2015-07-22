<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Frontend
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('partials/header', $this->data);
        $this->load->view('products', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function category($id)
    {
        $this->data['products'] = $this->product->get_data();

        $this->load->view('partials/header', $this->data);
        $this->load->view('homepage', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function product($id)
    {
        $this->data['product'] = $this->product->get_data_by_id($id);

        $this->load->view('partials/header', $this->data);
        $this->load->view('product', $this->data);
        $this->load->view('partials/footer', $this->data);
    }
}

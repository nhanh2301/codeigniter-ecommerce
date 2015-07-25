<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['products'] = $this->product_model->get_data();

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/products', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function create()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/product', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function edit($id)
    {
        $this->data['product'] = $this->product_model->get_data_by_id($id);

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/product', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function delete($id)
    {
        $this->product_model->delete_by_id($id);
        $this->session->set_flashdata('success', 'Produsul dat a fost sters cu succes.');
        redirect('admin/products');
    }

    public function save()
    {
        if (!empty($_POST) && !empty($_POST['id'])) {
            $this->product_model->update();
            $this->session->set_flashdata('success', 'Produsul a fost editat cu succes.');
        } elseif (!empty($_POST)) {
            $this->product_model->insert();
            $this->session->set_flashdata('success', 'Produsul a fost adaugat cu succes.');
        }

        redirect('admin/products');
    }
}

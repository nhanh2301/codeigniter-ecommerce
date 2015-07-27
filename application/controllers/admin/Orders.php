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
        $this->data['orders'] = $this->order_model->get_data();

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
        $this->page_model->get_data_by_id($id);

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/order', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save()
    {
        if (!empty($_POST) && !empty($_POST['id'])) {
            $this->page_model->update();
            $this->session->set_flashdata('success', 'Pagina a fost editat cu succes.');
        } elseif (!empty($_POST)) {
            $this->page_model->insert();
            $this->session->set_flashdata('success', 'Pagina a fost adaugat cu succes.');
        }

        redirect('admin/pages');
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/categories', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function create()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/category', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function edit($id)
    {
        $this->data['category'] = $this->category_model->get_data_by_id($id);

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/category', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function delete($id)
    {
        $this->category_model->delete_by_id($id);
        $this->session->set_flashdata('success', 'Categoria data a fost stersa cu succes.');
        redirect('admin/categories');
    }

    public function save()
    {
        if (!empty($_POST) && !empty($_POST['id'])) {
            $this->category_model->update();
            $this->session->set_flashdata('success', 'Categoria a fost editata cu succes.');
        } elseif (!empty($_POST)) {
            $this->category_model->insert();
            $this->session->set_flashdata('success', 'Categoria a fost adaugata cu succes.');
        }

        redirect('admin/categories');
    }
}

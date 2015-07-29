<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filters extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['pages'] = $this->page_model->get_data();

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/filters', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function edit($id)
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/filter_edit', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save($id = null)
    {
        if (!empty($_POST) && !empty($_POST['id'])) {
            $this->filter_model->update();
            $this->session->set_flashdata('success', 'Filtrul a fost editat cu succes.');
        } elseif (!empty($_POST)) {
            $this->filter_model->insert();
            $this->session->set_flashdata('success', 'Filtrul a fost adaugat cu succes.');
        }

        redirect('admin/filters');
    }


    public function categories()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/filter_categories', $this->data);
        $this->load->view('admin/footer', $this->data);
    }
    public function category_edit($id)
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/filter_category_edit', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function category_save($id = null)
    {
        if (!empty($_POST) && !empty($_POST['id'])) {
            $this->filter_category_model->update();
            $this->session->set_flashdata('success', 'Categoria pentru filtre a fost editat cu succes.');
        } elseif (!empty($_POST)) {
            $this->filter_category_model->insert();
            $this->session->set_flashdata('success', 'Categoria pentru filtre a fost adaugat cu succes.');
        }

        redirect('admin/filters/categories');
    }
}

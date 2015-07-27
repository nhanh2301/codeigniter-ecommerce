<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->data['pages'] = $this->page_model->get_data();

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/pages', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function create()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/page', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function edit($id)
    {
        $this->data['page'] = $this->page_model->get_data_by_id($id);

        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/page', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save($id = null)
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

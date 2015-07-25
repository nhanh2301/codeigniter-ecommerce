<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends Admin {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/general', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save()
    {
        if (!empty($_POST)) {
            $this->general_model->save();

            $this->session->set_flashdata('success', 'Datele generale au fost salvate cu success!');
        }
        redirect('admin/general');
    }
}

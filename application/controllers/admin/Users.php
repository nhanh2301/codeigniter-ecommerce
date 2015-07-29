<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin {

    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
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
        $this->load->view('admin/header', $this->data);
        $this->load->view('admin/product', $this->data);
        $this->load->view('admin/footer', $this->data);
    }

    public function save($id = null)
    {

    }

    public function login()
    {
        if (!empty($_POST)) {
            $admin = $this->user_model->get_admin();

            if (!empty($admin)) {
                $this->session->set_userdata('admin_user_id', $admin->id);
            } else {
                $this->session->set_flashdata('error', 'Eroare. Verificati va rog datele.');
            }
            redirect('admin');
        } else {
            $this->load->view('admin/header', $this->data);
            $this->load->view('admin/login', $this->data);
            $this->load->view('admin/footer', $this->data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}

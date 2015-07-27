<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Frontend
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($id)
    {
        $this->data['page'] = $this->page_model->get_data_by_id($id);

        $this->load->view('partials/header', $this->data);
        $this->load->view('page', $this->data);
        $this->load->view('partials/footer', $this->data);
    }

    public function contact()
    {
        if (!empty($_POST)) {
            $this->load->library('email');

            $this->email->from($_POST['email'], $_POST['name']);
            $this->email->to('ser.finciuc@gmail.com');

            $this->email->subject('Mesaj de pe site.');
            $this->email->message($_POST['message']);

            if ($this->email->send()) {
                $this->session->set_flashdata('success', 'Mesajul dumneavoastra a fost trimis cu succes.');
                redirect('contact');
            } else {
                $this->session->set_flashdata('error', 'Mesajul dumneavoastra nu a fost trimis. Va rugam incercati mai tirziu.');
            }
        } else {
            $this->load->view('partials/header', $this->data);
            $this->load->view('contact', $this->data);
            $this->load->view('partials/footer', $this->data);
        }
    }
}

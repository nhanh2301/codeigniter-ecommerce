<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends Frontend
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index($page = 0)
    {
        $this->load->library('pagination');

        $config = array();
        $config["base_url"] = site_url('products');
        $config["total_rows"] = $this->product->record_count();

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config["per_page"] = 20;
        $config["uri_segment"] = 2;
        $config["use_page_numbers"] = TRUE;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $this->pagination->initialize($config);

        $this->data['products'] = $this->product->fetch_products($config["per_page"], $page);
        $this->data['links'] = $this->pagination->create_links();

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

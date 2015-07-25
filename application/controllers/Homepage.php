<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Frontend
{

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->data['popular_products'] = $this->product_model->get_popular_products();

		$this->load->view('partials/header', $this->data);
		$this->load->view('homepage', $this->data);
		$this->load->view('partials/footer', $this->data);
	}
}

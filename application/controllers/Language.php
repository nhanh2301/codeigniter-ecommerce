<?php
class Language extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function change($language = "") {
        $language = !empty($language) ? $language : "romanian";
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }
}
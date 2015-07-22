<?php
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');

        $site_lang = $ci->session->userdata('site_lang');
        if ($site_lang) {
            $ci->lang->load('messages',  $ci->session->userdata('site_lang'));
        } else {
            $ci->lang->load('messages', 'romanian');
        }
    }
}
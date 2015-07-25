<?php
class Page_model extends CI_Model {

    public $id;
    public $title;
    public $content;
    public $image;
    public $order;
    public $date;

    private $table = 'pages';

    public function __construct()
    {
        parent::__construct();
    }
}
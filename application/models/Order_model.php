<?php
class Order_model extends CI_Model {

    public $id;
    public $user_id;
    public $order_array;
    public $message;
    public $telephone;
    public $mobile;
    public $date;

    private $table = 'orders';

    public function __construct()
    {
        parent::__construct();
    }
}
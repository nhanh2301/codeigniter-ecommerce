<?php
class User_model extends CI_Model {

    public $id;
    public $name;
    public $email;
    public $password;
    public $admin;
    public $date;

    private $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }
}
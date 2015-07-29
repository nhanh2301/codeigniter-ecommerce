<?php
class User_model extends CI_Model {

    public $id;
    public $name;
    public $email;
    public $password;
    public $telephone;
    public $address;
    public $ip;
    public $admin = 0;
    public $date;

    private $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_user()
    {
        $user_id = $this->session->userdata('user_id');

        if (!empty($user_id)) {
            $query = $this->db->get_where($this->table, ['id' => $user_id]);

            $data = $query->result();

            return end($data);
        } else {
            return false;
        }
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();

        return end($data);
    }

    public function get_admin()
    {
        if (!empty($_POST)) {
            $query = $this->db->get_where($this->table, ['admin' => 1, 'email' => $_POST['email'], 'password' => sha1($_POST['password'])]);

            $data = $query->result();

            return end($data);
        } else {
            return false;
        }
    }

    public function login()
    {
        $query = $this->db->get_where($this->table, ['email' => $_POST['email'], 'password' => sha1($_POST['password'])]);
        $result = $query->result();

        if (!empty($result)) {
            $this->session->set_userdata('user_id', end($result)->id);
        }
    }

    public function register()
    {
        $query = $this->db->get_where($this->table, ['email' => $_POST['email']]);
        $result = $query->result();

        if (!empty($result)) {
            return false;
        } else {
            $this->name             = $_POST['name'];
            $this->email            = $_POST['email'];
            $this->password         = sha1($_POST['password']);
            $this->telephone        = $_POST['telephone'];
            $this->address          = $_POST['address'];
            $this->ip               = $this->input->ip_address();

            $user = $this->db->insert($this->table, $this);

            $this->session->set_userdata('user_id', $user->id);

            return true;
        }
    }
}
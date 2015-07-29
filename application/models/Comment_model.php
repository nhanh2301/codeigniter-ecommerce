<?php
class Comment_model extends CI_Model {

    public $id;
    public $name;
    public $email;
    public $message;
    public $product_id;
    public $page_id;
    public $user_id;
    public $date;

    private $table = 'comments';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function get_data_for($page_id = false, $product_id = false)
    {
        if (!empty($page_id)) {
            $where_array = ['page_id' => (int) $page_id];
        } elseif (!empty($product_id)) {
            $where_array = ['product_id' => (int) $product_id];
        }

        $query = $this->db->get_where($this->table, $where_array);

        $data = $query->result();

        return $data;
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();

        return end($data);
    }

    public function insert()
    {
        $user_id = $this->session->userdata('user_id');

        if (!empty($user_id)) {
            $user = $this->user_model->get_data_by_id($user_id);

            $this->name = $user->name;
            $this->email = $user->email;
            $this->user_id = $user->id;
        } else {
            $this->name = $_POST['name'];
            $this->email = $_POST['email'];
        }

        $this->message = $_POST['message'];

        if (!empty($_POST['product_id'])) {
            $this->product_id = $_POST['product_id'];
        } else {
            $this->page_id = $_POST['page_id'];
        }

        $insert = $this->db->insert($this->table, $this);
        return (boolean) $insert;
    }

    public function delete_by_id($id)
    {
        $query = $this->db->delete($this->table, ['id' => $id]);

        return (boolean) $query;
    }
}
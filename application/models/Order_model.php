<?php
class Order_model extends CI_Model {

    const PROCESSED_NEW = 0;
    const PROCESSED_COMPLETED = 1;
    public $user_id;
    public $order_array;
    public $processed;
    public $date;
    private $table = 'orders';

    public function __construct()
    {
        parent::__construct();
    }

    public function record_today_count()
    {
        $this->db->where('DATE(date)', 'DATE(NOW())', FALSE);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function record_count()
    {
        return $this->db->count_all($this->table);
    }

    public function insert_order($order_array)
    {
        $this->user_id = $this->session->userdata('user_id');
        $this->order_array = serialize($order_array);
        $this->processed = $this::PROCESSED_NEW;

        $this->db->insert($this->table, $this);
    }

    public function get_latest($limit = 20, $start = 0)
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        $orders = $query->result();

        foreach ($orders as $order) {
            $order->order_array = unserialize($order->order_array);
        }

        return $orders;
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();

        return end($data);
    }

    public function get_data()
    {
        $query = $this->db->get($this->table);
        $orders = $query->result();

        foreach ($orders as $order) {
            $order->order_array = unserialize($order->order_array);
        }

        return $orders;
    }
}
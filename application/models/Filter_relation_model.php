<?php
class Filter_relation_model extends CI_Model {

    public $id;
    public $filter_id;
    public $product_id;
    public $date;

    private $table = 'filters_relations';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data()
    {
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();

        return end($data);
    }

    public function delete_by_id($id)
    {
        $query = $this->db->delete($this->table, ['id' => $id]);

        return (boolean) $query;
    }
}
<?php
class Category_model extends CI_Model {

    public $id;
    public $name;
    public $date;

    private $table = 'categories';

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function get_data()
    {
        $query = $this->db->get($this->table);

        $data = $query->result();

        return $data;
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

    public function insert()
    {
        $this->name     = $_POST['name'];

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $this->name     = $_POST['name'];

        $this->db->update($this->table, $this, "id = ".$_POST['id']);
    }
}
<?php
class Product_model extends CI_Model {

    public $id;
    public $name;
    public $description;
    public $price;
    public $image;
    public $active;
    public $date;

    private $table = 'products';

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

    public function insert()
    {
        $this->name     = $_POST['name'];
        $this->date     = time();

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $this->name     = $_POST['name'];
        $this->date     = time();

        $this->db->update($this->table, $this, ['id' => $_POST['id']]);
    }
}
<?php
class Product_model extends CI_Model {

    public $name;
    public $description;
    public $category;
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
        $this->db->select('p.*, c.name as category_name');
        $this->db->from($this->table.' p');
        $this->db->join('categories c', 'p.category = c.id');
        $query = $this->db->get();

        $data = $query->result();

        return $data;
    }

    public function get_popular_products($limit = 20)
    {
        $this->db->select('p.*, c.name as category_name');
        $this->db->from($this->table.' p');
        $this->db->join('categories c', 'p.category = c.id');
        $this->db->order_by('p.views', 'desc');
        $this->db->limit($limit);
        $query = $this->db->get();

        $data = $query->result();

        return $data;
    }

    public function get_data_by_id($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);

        $data = $query->result();

        return end($data);
    }

    public function record_count() {
        return $this->db->count_all($this->table);
    }

    public function fetch_products($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function delete_by_id($id)
    {
        $query = $this->db->delete($this->table, ['id' => $id]);

        return (boolean) $query;
    }

    public function insert()
    {
        $this->name             = $_POST['name'];
        $this->description      = $_POST['description'];
        $this->price            = $_POST['price'];
        $this->category         = $_POST['category'];
        $this->active           = !empty($_POST['active']) ? $_POST['active'] : 0;

        $this->image = $this->upload();

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $this->name             = $_POST['name'];
        $this->description      = $_POST['description'];
        $this->price            = $_POST['price'];
        $this->category         = $_POST['category'];
        $this->active           = !empty($_POST['active']) ? $_POST['active'] : 0;

        $this->image = $this->upload();
        if (empty($this->image)) unset($this->image);

        $this->db->update($this->table, $this, "id = ".$_POST['id']);
    }

    public function upload()
    {
        if (!empty($_FILES['image'])) {
            if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES["image"]["tmp_name"];
                $name = $_FILES["image"]["name"];
                $name = substr(md5($name), 0, 3).substr(time(), 0, 3).'-'.strtolower($name);

                if (move_uploaded_file($tmp_name, "uploads/$name")) {
                    return $name;
                }
            }
        }
        return false;
    }
}
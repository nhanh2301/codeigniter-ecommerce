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

    public function insert()
    {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];

        $this->image = $this->upload();
        if (empty($this->image)) unset($this->image);

        $this->db->insert($this->table, $this);
    }

    public function upload()
    {
        return false;
    }

    public function update()
    {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];

        $this->image = $this->upload();
        if (empty($this->image)) unset($this->image);

        $this->db->update($this->table, $this, "id = " . $_POST['id']);
    }

    public function delete_by_id($id)
    {
        $query = $this->db->delete($this->table, ['id' => $id]);

        return (boolean)$query;
    }
}
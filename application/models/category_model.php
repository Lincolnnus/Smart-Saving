<?php 
class Category_model extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function get_cateName()
    {
        $this->load->database();
        $this->load->model('category_model', '', TRUE);
        $query = $this->db->get('category');
        return $query->result();
    }

}
?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowd.');


class Todo_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_list()
    {
        $sql = "select * from items";

        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }


    function get_view($id)
    {
        $sql = "select * from items where id='" . $id . "'";
        $query = $this->db->query($sql);
        $result = $query->row();
        return $result;
    }
}

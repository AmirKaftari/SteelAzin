<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usermodel extends CI_Model
{

    public $table = 'tbl_user';
    public $id = 'ID';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get data by id
    function get_by_email_password($email,$password)
    {
        $this->db->where('Email', $email);
        $this->db->where('Password', $password);
        return $this->db->get($this->table)->row();
    }

    function get_by_username($username)
    {
        $this->db->where('Username',$username);
        return  count($this->db->get($this->table)->row());
    }

    // get total rows
    function total_rows() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit
    function index_limit($limit, $start = 0) {
        $this->db->order_by($this->id, $this->order);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }
    
    // get search total rows
    function search_total_rows($keyword = NULL) {
        $this->db->like('ID', $keyword);
        $this->db->or_like('Fullname', $keyword);
        $this->db->or_like('Name', $keyword);
        $this->db->or_like('Lastname', $keyword);
        $this->db->or_like('Birthday', $keyword);
        $this->db->or_like('Gender', $keyword);
        $this->db->or_like('Nationalcode', $keyword);
        $this->db->or_like('IdentityNumber', $keyword);
        $this->db->or_like('State', $keyword);
        $this->db->or_like('City', $keyword);
        $this->db->or_like('District', $keyword);
        $this->db->or_like('Phone', $keyword);
        $this->db->or_like('CellPhone', $keyword);
        $this->db->or_like('CodePost', $keyword);
        $this->db->or_like('Address', $keyword);
        $this->db->or_like('Username', $keyword);
        $this->db->or_like('Password', $keyword);
        $this->db->or_like('Email', $keyword);
	    $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get search data with limit
    function search_index_limit($limit, $start = 0, $keyword = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('ID', $keyword);
        $this->db->or_like('Fullname', $keyword);
        $this->db->or_like('Name', $keyword);
        $this->db->or_like('Lastname', $keyword);
        $this->db->or_like('Birthday', $keyword);
        $this->db->or_like('Gender', $keyword);
        $this->db->or_like('Nationalcode', $keyword);
        $this->db->or_like('IdentityNumber', $keyword);
        $this->db->or_like('State', $keyword);
        $this->db->or_like('City', $keyword);
        $this->db->or_like('District', $keyword);
        $this->db->or_like('Phone', $keyword);
        $this->db->or_like('CellPhone', $keyword);
        $this->db->or_like('CodePost', $keyword);
        $this->db->or_like('Address', $keyword);
        $this->db->or_like('Username', $keyword);
        $this->db->or_like('Password', $keyword);
        $this->db->or_like('Email', $keyword);
        $this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Usermodel.php */
/* Location: ./application/models/Usermodel.php */
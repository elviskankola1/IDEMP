<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Employers_model extends CI_Model
{

    public $table = 'employers';
    public $id = 'idEmp';
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
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('idEmp', $q);
	$this->db->or_like('nomEmp', $q);
	$this->db->or_like('postnomEmp', $q);
	$this->db->or_like('prenomEmp', $q);
	$this->db->or_like('datenaissanceEmp', $q);
	$this->db->or_like('genreEmp', $q);
	$this->db->or_like('adressehomeEmp', $q);
	$this->db->or_like('emailEmp', $q);
	$this->db->or_like('photoEmp', $q);
	$this->db->or_like('idDossier', $q);
	$this->db->or_like('datefonctionEmp', $q);
	$this->db->or_like('matriculeEmp', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('idEmp', $q);
	$this->db->or_like('nomEmp', $q);
	$this->db->or_like('postnomEmp', $q);
	$this->db->or_like('prenomEmp', $q);
	$this->db->or_like('datenaissanceEmp', $q);
	$this->db->or_like('genreEmp', $q);
	$this->db->or_like('adressehomeEmp', $q);
	$this->db->or_like('emailEmp', $q);
	$this->db->or_like('photoEmp', $q);
	$this->db->or_like('idDossier', $q);
	$this->db->or_like('datefonctionEmp', $q);
	$this->db->or_like('matriculeEmp', $q);
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

/* End of file Employers_model.php */
/* Location: ./application/models/Employers_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-01-14 14:42:30 */
/* http://harviacode.com */
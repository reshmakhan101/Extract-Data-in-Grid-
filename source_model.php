<?php
class source_model extends CI_Model {

    // Fetch column names from 'tbl_source_test'
    public function get_column() {
        $this->db->select('name');  // Fetch only the 'name' field
        $this->db->from('tbl_disposition');
        $query = $this->db->get();
        return $query->result();
    }

    // Fetch the first row data from 'tbl_desposition'
    public function get_row() {
        $this->db->select('name');  // Fetch only the 'name' field
        $this->db->from('tbl_source_test');
       
        $query = $this->db->get();
        return $query->result();  // Fetch a single row
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Source extends CI_Controller {

      public function __construct() {
        parent::__construct();
        $this->load->model('source_model');
        $this->load->library('form_validation');
        
       
    }


     public function index() {
        // Load the model
        $this->load->model('source_model');

        // Fetch column data from tbl_source_test and first row from tbl_desposition
        $data['columns'] = $this->source_model->get_column();
        $data['rows'] = $this->source_model->get_row();

        // Load the view and pass the data
        $this->load->view('source_view', $data);
    }
}

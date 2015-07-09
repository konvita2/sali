<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categ extends CI_Controller {

    /*
    public function index() {
        $this->load->model('Cat_model');
        $data['qdata'] = $this->Cat_model->get_top_level();
        $this->load->view('categ_list', $data);
    }
    */

    public function index(){
        $this->load->model('Cat_model');
        $data['cat_array'] = $this->Cat_model->get_all_as_tree();
        $this->load->view('categ_index', $data);
    }

    public function edit($id) {
        $this->load->model('Cat_model');   
        $data = $this->Cat_model->get_row_by_id($id);
        if(!empty($data)){
            $this->load->view('categ_edit', $data); 
        }
        else{
            
        }
    }

}

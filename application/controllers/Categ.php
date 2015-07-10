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

        if(!isset($_POST['btn_save'])){
            $el = $this->Cat_model->get_row_by_id($id);
            $data['cat_elem'] = $el;
            $data['mode'] = 'ed';

            $par_id = $el['parent_id'];
            $par_nam = $this->Cat_model->get_name_by_id($par_id);

            $data['top_level_cats'] = $this->Cat_model->get_html_rows($par_nam);
            $this->load->view('categ_edit', $data); 
        }
        else{
            // save
            $newdata = array(
                'id' => $id,
                'nam' => $this->input->post('nam'),
                'parent_id' => $this->Cat_model->get_id_by_nam('parent_nam')
            );
            $this->db->save($newdata, $id);

            $this->load->view('categ_ok');
        }
    }

}

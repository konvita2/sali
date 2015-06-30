<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categ extends CI_Controller {

    public function index() {
        $this->load->model('Cat_model');
        $data['qdata'] = $this->Cat_model->get_top_level();
        $this->load->view('categ_list', $data);
    }

    public function edit($id) {

        $this->load->view('categ_edit', $data);
    }

}

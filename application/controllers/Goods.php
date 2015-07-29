<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 29.07.2015
 * Time: 22:02
 */

class Goods extends CI_Controller {

    /**
     *
     */
    public function __construct(){
        parent::__construct();

        if(!$this->ion_auth->logged_in()){
            redirect('admin/login','refresh');
        }

        $this->load->database();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'),
            $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }

    /**
     *
     */
    public function index(){
        $data = array();

        $this->load->model('Goods_model');

        $data['rows'] = $this->Goods_model->get_all();

        $this->load->view('goods_index', $data);
    }

} 
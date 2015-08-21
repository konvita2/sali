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

    function __construct(){
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

    public function index(){
        $this->load->model('Cat_model');
        $data['cat_array'] = $this->Cat_model->get_all_as_tree();
        $this->load->view('categ_index', $data);
    }

    /**
     * edit category
     * @param $id
     */
    public function edit($id) {

        $this->load->model('Cat_model','categ');
        $this->form_validation->set_rules($this->get_rules());

        if($this->form_validation->run() == FALSE){
            // not validated, enter again
            $el = $this->categ->get_row_by_id($id);
            $data['cat_elem'] = $el;
            $data['mode'] = 'ed';

            $par_id = $el['parent_id'];
            $par_nam = $this->categ->get_name_by_id($par_id);

            $data['top_level_cats'] = $this->categ->get_html_rows($par_nam);

            $this->load->view('categ_edit', $data);
        }
        else{
            // validated ok, save
            $newdata = array(
                'id' => $id,
                'nam' => $this->input->post('nam'),
                'parent_id' => $this->input->post('parent_id'),
            );
            $this->categ->save($newdata, $id);

            $data['textinfo'] = 'Сохранены изменения по категории ' .
                $this->input->post('nam');
            $this->load->view('categ_ok', $data);
        }
    }

    /**
     * add new category with parent_id as default
     * @param $par_id - parent category id
     */
    public function add($par_id){

        $this->load->model('Cat_model','categ');

        $par_nam = $this->categ->get_name_by_id($par_id);

        $data['mode'] = 'nw';
        $data['top_level_cats'] = $this->categ->get_html_rows($par_nam);
        $data['parent_id'] = $par_id;

        $this->form_validation->set_rules('nam', 'Наименование', 'required');

        // @todo parent_id - how to test (if it is nessesary)

        if($this->form_validation->run() == FALSE){

            $this->load->view('categ_edit', $data);
        }
        else{
            $nam = $this->input->post('nam');
            $parent_id = $this->input->post('parent_id');

            $newdata = array(
                'nam' => $nam,
                'parent_id' => $parent_id,
            );

            $parent_name = $this->categ->get_name_by_id($parent_id);

            $this->categ->save($newdata);

            $data['textinfo'] = 'Создана новая категория ' .
                $nam . ' в родительской категории ' . $parent_name;
            $this->load->view('categ_ok', $data);
        }
    }

    /**
     * установить правила для валидации
     * @return array
     */
    function get_rules(){
        /*
        $ar = array(
            array(
                'field' => 'nam',
                'label' => 'Наименование категории',
                'rules' => 'required'
            ),
            array(
                'field' => 'parent_id',
                'label' => 'категория-родитель',
                'rules' => 'required'
            ),
        );
        */

        $ar = array(
            array(
                'field' => 'nam',
                'label' => 'Наименование категории',
                'rules' => 'required'
            ),
        );


        return $ar;
    }

}

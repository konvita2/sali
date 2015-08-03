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

    /**
     * edit goods row
     * @param $id - row id
     */
    public function edit($id){
        $data['mode'] = 'ed';
        $this->load->model('Goods_model', 'goods');
        $this->load->model('Cat_model', 'categ');
        $row = $this->goods->get_row_by_id($id);

        if(!empty($row)){
            $data['row'] = $row;

            $this->form_validation->set_rules($this->_get_rules());

            if($this->form_validation->run() === FALSE){
                //prep select
                $data['category_list'] = $this->categ->get_all_html_rows($row['category_name']);

                //open edit page
                $this->load->view('goods_edit', $data);
            }
            else{
                //fix data in table
                $title = $this->input->post('title');

                $newrow = array(
                    'art' => $this->input->post('art'),
                    'title' => $title,
                    'description' => $this->input->post('description'),
                    'price' => $this->input->post('price'),
                    'category_id' => $this->input->post('category_id')
                );
                $this->goods->update($id, $newrow);

                $data['textinfo'] = "Изменения товара $title успешно сохранены";
                $this->load->view('goods_ok', $data);
            }
        }
        else{
            // @todo no rows page
            show_404();
        }

    }

    /**
     * delete
     * @param $id - delete goods row
     */
    public function del($id){
        $data['mode'] = 'dl';
        $this->load->model('Goods_model', 'goods');
        $this->load->model('Cat_model', 'categ');
        $row = $this->goods->get_row_by_id($id);

        if(!empty($row)) {
            $data['row'] = $row;

            $this->form_validation->set_rules($this->_get_rules());

            if($this->form_validation->run() === FALSE){
                //prep select
                $data['category_list'] = $this->categ->get_all_html_rows($row['category_name']);

                //open edit page
                $this->load->view('goods_edit', $data);
            }
            else{
                //fix data in table
                $title = $this->input->post('title');

                $this->goods->delete($id);

                $data['textinfo'] = "Товар $title удален из справочника";
                $this->load->view('goods_ok', $data);
            }
        }
        else{
            show_404(); // @todo test 404 page
        }

    }

    /**
     * add new good
     */
    public function add(){
        $data['mode'] = 'nw';
        $this->load->model('Goods_model', 'goods');
        $this->load->model('Cat_model', 'categ');

        $data['row'] = $this->goods->get_newrow();

        $this->form_validation->set_rules($this->_get_rules());

        if($this->form_validation->run() === FALSE){
            //prep select
            $data['category_list'] = $this->categ->get_all_html_rows();

            //open edit page
            $this->load->view('goods_edit', $data);
        }
        else{
            //fix data in table
            $title = $this->input->post('title');

            $newrow = array(
                'art' => $this->input->post('art'),
                'title' => $title,
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'category_id' => $this->input->post('category_id')
            );
            $this->goods->insert($newrow);

            $data['textinfo'] = "Добавлен товар $title";
            $this->load->view('goods_ok', $data);
        }
    }

    ///
    private function _get_rules(){
        $ar = array(
            array(
                'field' => 'id',
                'label' => 'Код',
                'rules' => 'required'
            ),
            array(
                'field' => 'art',
                'label' => 'Артикул',
                'rules' => 'required'
            )
        );
        return $ar;
    }

} 
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.07.2015
 * Time: 23:25
 */

class Goods_model extends CI_Model{

    public $id;
    public $category_id;    // категория товара
    public $art;            // артикул товара - если есть
    public $title;          // заголовок товара
    public $description;    // описание товара
    public $price;          // цена товара

    // @todo добавить доступ к изображениям и типам товаров

    function __construct(){
        parent::__construct();

    }

    /**
     * получить массив со списком всех товаров
     * опционально можно задать фильтр по категории
     */
    public function get_all($category_id_filter = 0){

        $this->db->order_by('title');

        if($category_id_filter > 0){
            $this->db->where('category_id', $category_id_filter);
        }

        $query = $this->db->get('goods');  // @todo надо подумать над pagination
        return $query->result_array();
    }

    /**
     * @param $ar_filter - фильтр для соотв. отбора
     * @return array
     */
    private function get_row_by($ar_filter){
        $res = array();

        $query = $this->db->get_where('goods', $ar_filter, 1);
        foreach ($query->result_array() as $row) {
            $res = $row;  // @todo perhaps add imgs and subgoods
            break;
        }

        return $res;
    }

    /**
     * get goods row by id
     * @param $goods_id
     */
    public function get_row_by_id($goods_id){
        $ar_filter = array('id' => $goods_id);
        return $this->get_row_by($ar_filter);
    }

    /**
     * get row by title
     * @param $goods_title
     * @return array
     */
    public function get_row_by_title($goods_title){
        $ar_filter = array('title' => trim($goods_title));
        return $this->get_row_by($ar_filter);
    }

    /**
     * get row by art (артикул)
     * @param $goods_art
     * @return array
     */
    public function get_row_by_art($goods_art){
        $ar_filter = array('title' => trim($goods_art));
        return $this->get_row_by($ar_filter);
    }







} 
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categories
 *
 * @author User
 */
class Cat_model extends CI_Model{
    
    public $id;
    public $nam;
    public $parent_id;
    
    public function __construct(){
        parent::__construct();
    }

    /**
     * Получить категории всех уровней одним списком
     */
    function get_all(){
        $this->db->order_by('nam');
        $qres = $this->db->get('category');
        return $qres->result_array();
    }

    /**
     * Получить список всех категорий ввиде дерева
     * массив массивов
     */
    function get_all_as_tree(){
        $arTop = $this->get_sub_level(0);
        foreach($arTop as $keytop => $top){
            // get this branch
            $arDep = $this->get_sub_level($top['id']);
            $arTop[$keytop]['child'] = $arDep;
        }
        return $arTop;
    }
    
    /**
     * Получить категории верхнего уровня
     * (parent_id = 0)
     */
    function get_top_level(){
        return $this->get_sub_level(0);
    }

    /**
     * Получить список категорий верхнего уровня ввиде options (html)
     * @param $selected - пункт по умолчанию
     */
    function get_html_rows($selected){
        $res = '';
        $ar = $this->get_top_level();
        foreach ($ar as $cat) {
            $vl = $cat['nam'];
            if(trim($vl) == trim($selected)){
                $res .= "<option selected value='$vl'>$vl</option>";
            }
            else{
                $res .= "<option value='$vl'>$vl</option>";
            }
        }

        if(empty($selected)){
            $res .= "<option selected value='без категории'>-- без категории --</option>";
        }
        else{
            $res .= "<option value='без категории'>-- без категории --</option>";
        }

        return $res;
    }

    /**
     * Получить подкатегории указанной категории верхнего уровня
     * @param type $parent_cat_id
     */
    function get_sub_level($parent_cat_id){
        $this->db->order_by('nam');
        $this->db->where('parent_id',$parent_cat_id);
        $qres = $this->db->get('category');
        return $qres->result_array();
    }
    
    /**
     * Получить наименование категории по id
     * @param type $cat_id
     */
    function get_name_by_id($cat_id){
        $res = '';
        
        $ar = $this->get_row_by_id($cat_id);
        if(!empty($ar)){
            $res = $ar['nam'];
        }
        
        return $res;
    }

    /**
     * получить id категории по наименованию
     * @todo решить вопрос с повторяемостью наименований
     * !!! есть проблема когда будет одинаковые наименования в таблице
     * !!! но вводим ограничение
     * !!! - ищем в первом уровне
     * !!! - в первом уровне одинаковых не должно быть
     * @param $cat_name
     */
    function get_id_by_name($cat_name){
        $res = 0;

        $qres = $this->db->get_where('category', array('nam' => trim($cat_name)), 1);
        foreach ($qres->result() as $row) {
            $res = $row->id;
            break;
        }

        return $res;
    }

    /**
     * Получить одну запись по id
     * @param type $cat_id
     * @return array 'id','nam','parent_id' 
     */
    function get_row_by_id($cat_id){
        $res = array();
        $this->db->where('id',$cat_id);
        $qres = $this->db->get('category',1);        
        if($qres->num_rows() > 0){
            $row = $qres->row();
            $res['id'] = $row->id;
            $res['nam'] = $row->nam;
            $res['parent_id'] = $row->parent_id;
        }          
        return $res;
    }

    /**
     * Сохранить данные
     * если id = 0 добавляем новую запись
     * иначе обновляем по id
     * @param $newdata
     * @param $id
     */
    function save($newdata, $id){
        if($id == 0){
            $this->db->insert('category',$newdata);
        }
        else{
            $this->db->where('id',$id);
            $this->db->update('category',$newdata);
        }
    }

}

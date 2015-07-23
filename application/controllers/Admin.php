<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: User
 * Date: 15.07.2015
 * Time: 15:59
 */

class Admin extends CI_Controller {

    /**
     *
     */
    function __construct()
    {
        parent::__construct();

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
    function index(){
        if($this->ion_auth->logged_in()){
            if($this->ion_auth->is_admin()){
                $this->load->view('admin_index');
            }
        }
        else{
            // to authorization page
            redirect('admin/login', 'refresh');
        }
    }

    /**
     *
     */
    function login(){
        // rules
        $this->form_validation->set_rules('login', 'Логин', 'required');
        $this->form_validation->set_rules('password', 'Пароль', 'required');

        if($this->form_validation->run() == TRUE){
            if($this->ion_auth->login($this->input->post('login'), $this->input->post('password'))){
                redirect('admin/index', 'refresh');
            }
        }
        else{
            $this->load->view('admin_login');
        }
    }

    /**
     *
     */
    function logout(){
        $logout = $this->ion_auth->logout();
        //redirect('main', 'refresh');
        $this->load->view('main');
    }



} 
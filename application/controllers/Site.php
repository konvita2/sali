<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * constructor
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * main site page
     */
    public function index(){
        $this->load->view('main');
    }

} 
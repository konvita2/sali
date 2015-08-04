<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sali_404
 *
 * @author User
 */
class Sali_404 extends CI_Controller {
    
    /**
     * constructor: nothing special
     */
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //deb
        echo "<p>point1</p>";        
        
        $this->output->set_status_header('404');
        $this->load->view('error_404');        
    }
    
    
    
}

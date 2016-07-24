<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompanyController
 *
 * @author anurartkae
 */
class CompanyController extends CI_Controller{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    public function index(){
        
    }
    public function load_companyVoew(){
        
        $this->load->view('include/header');
        $this->load->view('fontend/CompanyView');
       $this->load->view('include/footter');
        
    }
}

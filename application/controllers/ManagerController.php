<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManagerController
 *
 * @author anurartkae
 */
class ManagerController extends CI_Controller{
    //put your code here
    
    public function manager(){
        $this->load->view('include/header');
        $this->load->view('fontend/ManagerView');
       $this->load->view('include/footter');
    }
}

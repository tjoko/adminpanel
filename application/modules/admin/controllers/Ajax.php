<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ajax extends MY_Controller {
    public function loadadmin()
    {   
        //Load our library EditorLib 
        $this->load->library('EditorLib');
         
        //`Call the process method to process the posted data
        $this->editorlib->process($_POST, 'Admin_m', 'loadadmin');
    }

    public function loadapp()
    {   
        //Load our library EditorLib 
        $this->load->library('EditorLib');
         
        //`Call the process method to process the posted data
        $this->editorlib->process($_POST, 'Admin_m', 'loadapp');
    }

    public function loadpns()
    {   
        //Load our library EditorLib 
        $this->load->library('EditorLib');
         
        //`Call the process method to process the posted data
        $this->editorlib->process($_POST, 'Admin_m', 'loadpns');
    }

    public function loadpreviledge()
    {   
        //Load our library EditorLib 
        $this->load->library('EditorLib');
         
        //`Call the process method to process the posted data
        $this->editorlib->process($_POST, 'Admin_m', 'loadpreviledge');
    }

}
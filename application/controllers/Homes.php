<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller{

    public function index(){
        $data['title'] = 'Latest Events';
        $data['baranggay_event'] = $this -> home_model -> get_events();        
        $this->load->view('home/index', $data);
    }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hotspots extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('hotspot_model');
        $user = $this->session->userdata('user');
    }

    /**
     * Function to create event
     * 
     * @param       string      $lat_arg     Event latiture
     * @param       string      $lng_arg     Event longitude
     */
    public function view_create_hotspot($lat_arg, $lng_arg){
        // if(isset($user) && $user!=null){
        //     redirect('/home');
        // }
        $data['lat'] = $lat_arg;
        $data['lng'] = $lng_arg;

        
		$this->load->view('templates/header');
        $this->load->view('pages/create_hotspot', $data);
        $this->load->view('templates/footer');
	}

    /**
     * Function to create event
     * 
     * @param       string      $lat_arg     Event latiture
     * @param       string      $lng_arg     Event longitude
     */
    public function create_hotspot($lat_arg, $lng_arg){

        // if(!isset($this->user) && $this->user==null){
        //     redirect('/admin');
        // }

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data = $this->input->post();
            $data['lat'] = $lat_arg;
            $data['lng'] = $lng_arg;

            $this->hotspot_model->create($data);
            redirect('/home');
        }
        else{
            $this->load->view('templates/header');
            $this->load->view('pages/create_hotspot');
            $this->load->view('templates/footer');
        }

        
		// $this->load->view('templates/header');
        // $this->load->view('pages/create_hotspot');
        // $this->load->view('templates/footer');
	}


    /**
     * Function that is called by the AJAX request in the home page
     * 
     * @param       none
     * @return      json        $data_var       Contains all the events in the database
     */
    public function get_hotspots(){
        

        if($_SERVER['REQUEST_METHOD']=='GET'){
            $data_var = $this->hotspot_model->get_events();

            echo json_encode($data_var);
        }
    }
}
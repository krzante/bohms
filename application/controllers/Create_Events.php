<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_Events extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
        $user = $this->session->userdata('user');
        
        // if(isset($user) && $user!=null){
        //     redirect('/home');
        // }
	}

    /**
     * Function to create event
     * 
     * @param       string      $lat_arg     Event latiture
     * @param       string      $lng_arg     Event longitude
     */
    public function view_create_event($lat_arg, $lng_arg){
        // if(isset($user) && $user!=null){
        //     redirect('/home');
        // }
        $data['lat'] = $lat_arg;
        $data['lng'] = $lng_arg;

        
		$this->load->view('templates/header');
        $this->load->view('pages/create_event', $data);
        $this->load->view('templates/footer');
	}
	


    /**
     * Function to create event
     * 
     * @param       string      $lat_arg     Event latiture
     * @param       string      $lng_arg     Event longitude
     */
    public function create($lat_arg, $lng_arg){

        $this->form_validation->set_rules('event_name', 'Event Name', 'required');
        $this->form_validation->set_rules('event_description', 'Event Description', 'required');
        // $this->form_validation->set_rules('event_location', 'Event Location', 'required');

        // if(!isset($this->user) && $this->user==null){
        //     redirect('/admin');
        // }

        if($this->form_validation->run() === TRUE && $_SERVER['REQUEST_METHOD']=='POST'){
            $data = $this->input->post();
            $data['event_lat'] = $lat_arg;
            $data['event_lng'] = $lng_arg;

            $this->createevent_model->create($data);
            redirect('/home');
        }

        
		$this->load->view('templates/header');
        $this->load->view('pages/admin');
        $this->load->view('templates/footer');
	}


    public function get_events(){

        $data = $this->home_model->get_events();
        $indexed_data = array_map('array_values', $data);
        // echo "<pre>";
        // var_dump($indexed_data);
        // echo"</pre>";
        // exit;
        echo json_encode($indexed_data);
        return $indexed_data;
    }
}
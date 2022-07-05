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

	public function view($id){
		$data['baranggay_event']-> $this->createevent_model->get_specific_event($id);  
        var_dump($data);
        exit();
		$this->load->view('templates/header');
        $this->load->view('pages/showevents', $data);
        $this->load->view('templates/footer');
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

        if(isset($_SESSION['user'])){
            $data['lat'] = $lat_arg;
            $data['lng'] = $lng_arg;
    
            
            $this->load->view('templates/header');
            $this->load->view('pages/create_event', $data);
            $this->load->view('templates/footer');
        }
        else{
            redirect('home');
        }
        
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


    /**
     * Function that is called by the AJAX request in the home page
     * 
     * @param       none
     * @return      json        $data_var       Contains all the events in the database
     */
    public function get_events(){
        

        if($_SERVER['REQUEST_METHOD']=='GET'){
            $data_var = $this->home_model->get_events();

            foreach ($data_var as $key => $value) {
                $date = (new \DateTime($value['event_date']))->setTimezone(new DateTimeZone('Asia/Manila'));
                $data_var[$key]['event_date'] = $date->format(DateTime::W3C);
            }

            echo json_encode($data_var);
        }
    }

    /** Delete function **/ 
    public function delete($id){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $this->createevent_model->delete_event($id);
        }
        redirect('home');
    }      

}



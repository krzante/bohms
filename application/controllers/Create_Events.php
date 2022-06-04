<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_Events extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $user = $this->session->userdata('user');
        
        // if(isset($user) && $user!=null){
        //     redirect('/home');
        // }
	}
	
    public function create(){

        $this->form_validation->set_rules('event_name', 'Event Name', 'required');
        $this->form_validation->set_rules('event_description', 'Event Description', 'required');
        $this->form_validation->set_rules('event_location', 'Event Location', 'required');

        // if(!isset($this->user) && $this->user==null){
        //     redirect('/admin');
        // }

        if($this->form_validation->run() === TRUE){
            $data = $this->input->post();
            $this->createevent_model->create($data);
            redirect('/home');
        }

        
		$this->load->view('templates/header');
        $this->load->view('pages/admin');
        $this->load->view('templates/footer');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_Patients extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $user = $this->session->userdata('user');
        
        // if(isset($user) && $user!=null){
        //     redirect('/home');
        // }
	}
	
    public function create(){

        $this->form_validation->set_rules('pat_name', 'Patient Name', 'required');
        $this->form_validation->set_rules('hcase', 'Health Case', 'required');
        $this->form_validation->set_rules('dcase', 'Date of Case', 'required');
        $this->form_validation->set_rules('bplace', 'Birthplace', 'required');
        $this->form_validation->set_rules('sex', 'Sex', 'required');
        $this->form_validation->set_rules('bday', 'Birthdate', 'required');
        $this->form_validation->set_rules('btype', 'Blood Type', 'required');
        $this->form_validation->set_rules('CHS', 'Current Health Status', 'required');
        $this->form_validation->set_rules('medhis', 'Medical History', 'required');

        // if(!isset($this->user) && $this->user==null){
        //     redirect('/admin');
        // }

        if($this->form_validation->run() === TRUE){
            $data = $this->input->post();
            $this->createpatient_model->create($data);
            redirect('/home');
        }

        
		$this->load->view('templates/header');
        $this->load->view('pages/admin');
        $this->load->view('templates/footer');
	}

    public function update(){

        $this->form_validation->set_rules('pat_name', 'Patient Name', 'required');
        $this->form_validation->set_rules('hcase', 'Health Case', 'required');
        $this->form_validation->set_rules('dcase', 'Date of Case', 'required');
        $this->form_validation->set_rules('bplace', 'Birthplace', 'required');
        $this->form_validation->set_rules('sex', 'Sex', 'required');
        $this->form_validation->set_rules('bday', 'Birthdate', 'required');
        $this->form_validation->set_rules('btype', 'Blood Type', 'required');
        $this->form_validation->set_rules('CHS', 'Current Health Status', 'required');
        $this->form_validation->set_rules('medhis', 'Medical History', 'required');

        // if(!isset($this->user) && $this->user==null){
        //     redirect('/admin');
        // }

        if($this->form_validation->run() === TRUE){
            $data = $this->input->post();
            $this->createpatient_model->update($data);
            redirect('/home');
        }

        
		$this->load->view('templates/header');
        $this->load->view('pages/admin');
        $this->load->view('templates/footer');
	}   
}
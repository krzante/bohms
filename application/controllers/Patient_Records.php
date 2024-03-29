<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_Records extends CI_Controller{

    public function index(){
        if(isset($_SESSION['user'])){
            $data['patient_records'] = $this -> patient_model -> get_patientrecords();
            $data['title'] = 'Patient Records';
            $this->load->view('templates/header');
            $this->load->view('pages/adminPage', $data);
            $this->load->view('templates/footer');
        }
        else{
            redirect('home');
        }
        
    }

    public function skeyword(){
        $key = $this->input->post('title');
        $data['title'] = 'Searched: '.$key;
        $data['patient_records'] = $this -> patient_model -> get_patientrecords_by_search($key);

        $this->load->view('templates/header');
        $this->load->view('pages/adminPage', $data);
        $this->load->view('templates/footer');
    }
}
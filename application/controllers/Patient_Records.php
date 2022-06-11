<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_Records extends CI_Controller{

    public function index(){
       
        $data['patient_records'] = $this -> patient_model -> get_patientrecords(); var_dump($data); die();    
        $this->load->view('pages/adminPage', $data);
    }

}
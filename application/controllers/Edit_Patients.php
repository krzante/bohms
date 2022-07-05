<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_Patients extends CI_Controller{

    public function index(){
        if(isset($_SESSION['user'])){
            $data['patient_records'] = $this -> patient_model -> get_patientrecords();
            $this->load->view('templates/header');
            $this->load->view('pages/editpatient', $data);
            $this->load->view('templates/footer');
        }
        else{
            redirect('home');
        }
        
    }

    public function delete($id){
        if($_SERVER['REQUEST_METHOD']=='POST' && isset($_SESSION['user'])){
            $data['patient_records'] = $this -> patient_model -> get_patientrecords();
            $this->patient_model->delete_patient($id);
            redirect('patient_records');
        }
        else{
            redirect('home');
        }
    }   
}
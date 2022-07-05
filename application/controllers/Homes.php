<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homes extends CI_Controller{

    public function index(){
        $data['title'] = 'Latest Events';
        $data['baranggay_event'] = $this -> home_model -> get_events();        
        $this->load->view('home/index', $data);
    }

    public function profile(){
        if(isset($_SESSION['user'])){
            $data['baranggay_event'] = $this -> home_model -> get_events_by_profile($this->session->userdata('user')['id']);
            $data['user'] = $this -> home_model -> getprofile($this->session->userdata('user')['id']);
            $this->load->view('templates/header');        
            $this->load->view('pages/profilepage', $data);
            $this->load->view('templates/footer');
        }
        else{
            redirect("home");
        }
        
    }

    public function edit_acc(){
        $data['user'] = $this -> home_model -> getprofile($this->session->userdata('user')['id']);
       
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('Position', 'Position', 'required');
        
        if($this->form_validation->run() === false){
            if(isset($_SESSION['user'])){
                $this->load->view('templates/header');        
                $this->load->view('pages/accedit', $data);
                $this->load->view('templates/footer');
            }
            else{
                redirect('home');
            }
        }else{
            $data = array(
				'name' => $this->input->post('name'),
                'Position' => $this->input->post('Position'),
                'Birthdate' => $this->input->post('Birthdate')
			);

            $this->home_model->update_profile($data);
            redirect('/profile');
        }
    }

}
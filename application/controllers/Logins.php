<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $user = $this->session->userdata('user');
        
        if(isset($user) && $user!=null){
            redirect('/home');
        }
	}
	
    public function login(){

        $data = $this->input->post();

        if(count($data) > 0){
            $this->load->model('login_model');
            $result = $this->login_model->login($data['name'], $data['password']);

            if(!is_bool($result)){
                $session['user'] = $result;
                $this->session->set_userdata($session);
                
                redirect('/home');
            }
        }
		$this->load->view('templates/header');
        $this->load->view('pages/admin');
        $this->load->view('templates/footer');
	}
}
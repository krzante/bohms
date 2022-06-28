<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_Accounts extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('createaccount_model');
        $user = $this->session->userdata('user');
        
        // if(isset($user) && $user!=null){
        //     redirect('/home');
        // }
        }

    public function key(){
        $key = sha1(crypt(uniqid(), random_int(1000000, 9999999)));
        
        $this->createaccount_model->update($key);
    }
	
    public function create(){
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.name]');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('dbirth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('position', 'Baranggay Position', 'required');
        $this->form_validation->set_rules('seckey', 'Secret Key', 'required');
        if($this->form_validation->run() === TRUE){
            $key = $this->input->post('seckey');
            //check key if same
            $validate = $this->createaccount_model->keycheck($key);
            //if true direct to success page creation
            if($validate == true){
                $data = $this->input->post();
                $this->createaccount_model->create($data);
                redirect('/success');
            }
            $this->session->set_flashdata('seckey',"Invalid Secret Key");
            
            
        }
        //if false redirect to signup view
        
		$this->load->view('templates/header');
        $this->load->view('pages/signup');
        $this->load->view('templates/footer');
	}

    
}
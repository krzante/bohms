<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show_Events extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $user = $this->session->userdata('user');
        
        // if(isset($user) && $user!=null){
        //     redirect('/home');
        // }
        }

	public function view($id){
		$data['baranggay_event'] = $this->home_model->getrow($id); 
		$this->load->view('templates/header');
        $this->load->view('pages/showevents', $data);
        $this->load->view('templates/footer');
	}
}
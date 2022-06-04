
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logouts extends CI_Controller{

    public function __construct(){
        parent::__construct();
	}
	
    public function logout(){
        $this->session->sess_destroy();
        redirect('/home');
	}
}
<?php
    /* 
        This would now be the default controller for the navigation eme.
        Watch this to learn more: https://www.youtube.com/watch?v=I752ofYu7ag&list=PLillGF-RfqbaP_71rOyChhjeK1swokUIS&index=4&t=8s
    */
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                echo("nice");
                show_404();
            }

            // $data['title'] = ucfirst($page);
            // $data = $this->_check_session($page, $data);

            // if($page == 'notif'){
            //     $this->load->view('pages/'.$page, $data);
            //     return;
            // }

            // if(isset($_SESSION['sess_login'])){
            //     $data2['notif_count'] = $this->notification_model->get_notif_count($_SESSION['sess_profile']['user_id']);
            //     // $headervar = 'header-logged';
            //     $this->load->view('templates/header-logged', $data2);
            // }else{
            //     // $headervar = 'header';
            //     $this->load->view('templates/header');
            // }

            // // $this->load->view('templates/'.$headervar, $data2);
            // $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page);
            $this->load->view('templates/footer');
        }

        public function login() {
            $this->load->view('templates/header');
            $this->load->view('pages/login');
            $this->load->view('templates/footer');
        }
    }
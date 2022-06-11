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
            $this->load->view('templates/header');
            $data['title'] = 'Latest Events';
            $data['baranggay_event'] = $this -> home_model -> get_events();

            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
        

    }
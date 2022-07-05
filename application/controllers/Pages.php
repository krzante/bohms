<?php
    /* 
        This would now be the default controller for the navigation eme.
        Watch this to learn more: https://www.youtube.com/watch?v=I752ofYu7ag&list=PLillGF-RfqbaP_71rOyChhjeK1swokUIS&index=4&t=8s
    */
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = 'Latest Events';
            $data['baranggay_event'] = $this -> home_model -> get_events();

            
            if($this->_check_required_login($page)){
                $page = 'home';
            }
            else{
                $data['patient_records'] = $this -> patient_model -> get_patientrecords();
                if(isset($_SESSION['user'])){
                    if($page == 'signup' || $page == 'admin'){
                        redirect('home');
                    }
                }
            }
            

            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }


        /**
         * Function to check which pages are be able to be loaded
         * while not logged in
         * 
         * @param       string          $page_arg           String of the page that 
         */
        private function _check_required_login($page_arg){
            $login_required_pages = array(
                'adminpage',
                'hotspot',
                'create_patient_record',
                'patient_records',
            );

            // echo in_array($page_arg, $login_required_pages); exit;

            // Check if the user is logged in and if the page requires a login
            if(in_array($page_arg, $login_required_pages) && !isset($_SESSION['user'])){
                // echo"TRUE"; exit;
                return TRUE;
            }
            else{
                // echo"FAL:SE"; exit;
                return FALSE;
            }
        }


        private function _not_accessable_when_logged($page_arg){
            $required_pages = array(
                'signup',
            );

            // Check if the user is logged in and if the page requires a login
            if(in_array($page_arg, $required_pages) && isset($_SESSION['user'])){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

    }

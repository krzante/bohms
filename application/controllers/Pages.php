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
                $data['patient_records'] = $this -> patient_model -> get_patientrecords();
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

            // Check if the user is logged in and if the page requires a login
            if(in_array($page_arg, $login_required_pages) && isset($_SESSION['user'])){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

    }

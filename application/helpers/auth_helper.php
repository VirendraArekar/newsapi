<?php
    function login($email,$password){
         $ci =& get_instance();
         $ci->load->database();
         $ci->load->library('session');
         $data = ['email'=> $email,'password'=> $password,'logged_in'=> TRUE];

        $ci->session->set_userdata('user',$data);
        return true;
    }

    function is_logged_in(){
         $ci =& get_instance();
         $ci->load->database();
         $ci->load->library('session');
         if($ci->session->userdata('user') != ''){ 
           return $ci->session->userdata('user');
         }
         else{
             return false;
         }
    }

    function log_out(){
         $ci =& get_instance();
         $ci->load->database();
         $ci->load->library('session');
         $ci->session->sess_destroy();
         return true;
    }

    function auth_redirect(){
        $ci =& get_instance();
        $ci->load->database();
        $ci->load->library('session');
        if($ci->session->userdata('user') != ''){
           redirect(base_url());
        }
        else{
            return true;
        }
    }
?>
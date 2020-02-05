<?php
   class Login extends CI_Controller
   {
     function __construct()
     {
       parent::__construct();
       $this->load->helper("url");
    	 $this->load->helper("form");
    	 $this->load->library(['form_validation','session']);
       $this->load->helper(["news_helper","auth_helper"]);
       $this->load->model('user');
     }

     public function index()
     {
       auth_redirect();
       $this->load->view('auth/login');
     }

     public function create()
     {
       auth_redirect();
       $rules = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($rules);

         if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $res = $this->user->user_login($this->input->post('email'),$this->input->post('password'));
            if($res){
               login($this->input->post('email'),$this->input->post('password'));
               $this->session->set_flashdata('log_in', 'User log in sccessfully');
               return redirect(base_url('auth/login'));
            }
            else{
               $this->session->set_flashdata('log_in_error', 'User not exist. Please try again.');
               return redirect(base_url('auth/login'));
            }
            
        }
     }

     public function logout()
     {
       log_out();
       redirect(base_url());
     }
   }

 ?>

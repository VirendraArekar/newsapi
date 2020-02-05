<?php
   class Register extends CI_Controller
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
       $this->load->view('auth/signup');
     }

     public function create()
     {
       auth_redirect();
       $rules = array(
            array(
                'field' => 'name',
                'label' => 'User Name',
                'rules' => 'required'
            ),
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
            $this->load->view('auth/signup');
        } else {
            $data = ['name'=>$this->input->post('name'),'email' => $this->input->post('email'),'password' => $this->input->post('password')];
            $res = $this->user->user_insert($data);
            if($res){
               
               $this->session->set_flashdata('sign_up', 'User sign up sccessfully');
               return redirect(base_url().'auth/login');
            }
            else{
               $this->session->set_flashdata('sign_up_error', 'Error occur! Please try again.');
               return redirect(base_url().'auth/register');
            }
        }
     }
   }
?>
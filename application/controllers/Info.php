<?php
require('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

   class Info extends CI_Controller{
       public function __construct()
       {
           parent::__construct();
           $this->load->helper(['url','auth_helper']);
           $this->load->library(['session','form_validation']);
       }

       public function contact()
       {
          $info = false;
          $this->load->view('basic/header');
          $this->load->view('basic/navbar');
          $this->load->view('contact',compact('info'));
          $this->load->view('basic/footer');
       }

       public function create()
       {
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
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('basic/header');
                $this->load->view('basic/navbar');
                $this->load->view('contact');
                $this->load->view('basic/footer');
            } 
            else {
                $this->load->library('email');
                //SMTP & mail configuration
                $config = array(
                        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                        'smtp_host' => 'smtp.gmail.com', 
                        'smtp_port' => 465,
                        'smtp_user' => DEVELOPER_EMAIL_ADDRESS,
                        'smtp_pass' => DEVELOPER_EMAIL_PASSWORD,
                        'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
                        'mailtype' => 'text', //plaintext 'text' mails or 'html'
                        'smtp_timeout' => '4', //in seconds
                        'charset' => 'iso-8859-1',
                        'wordwrap' => TRUE
                    );
                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->set_newline("\r\n");

                $this->email->to(DEVELOPER_EMAIL_ADDRESS);
                $this->email->from($this->input->post('email'),$this->input->post('name'));
                $this->email->subject('hello how');
                $this->email->message($this->input->post('message'));
                $this->email->send();
                $res = $this->email->print_debugger();
                // print_r($res);
                // exit();
                $info = true;
                if($info){
                     $this->session->set_flashdata('contact_us', 'Informtion send successfully.');
                }
                else{
                    $this->session->set_flashdata('contact_us_error', 'Email sending error.Please try again!');
                }
                // $info = true;
                $this->load->view('basic/header');
                $this->load->view('basic/navbar');
                $this->load->view('contact',compact('info'));
                $this->load->view('basic/footer');
            }
       }

       public function about()
       {
          $this->load->view('basic/header');
          $this->load->view('basic/navbar');
          $this->load->view('about');
          $this->load->view('basic/footer');
       }
   }
?>
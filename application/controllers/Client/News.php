<?php
  class News extends CI_Controller{
      
     public function __construct()
     {
       // code...
       parent::__construct();
       $this->load->helper("url");
    	 $this->load->helper("form");
       $this->load->library('form_validation');
       $this->load->helper('news');
     }

     public function index()
     {
       $data = news_sources();
       print_r($data);
     }
  }
?>
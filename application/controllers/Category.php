<?php
 class Category extends CI_Controller{
     public function __construct()
     {
         parent::__construct();
         $this->load->library(['session','email']);
         $this->load->helper(['url','auth_helper','news_helper']);
     }

     public function search()
     {
         $keyword = $this->uri->segment('2');
         $page = $this->uri->segment('3');
         if($page == '')
         {
             $page = 1;
         }
         else{
             $page = $page;
         }
         
         $limit = 20;
         $data =  json_decode(news($keyword,$limit,$page));
         $status = $data->status;
         if($status == 'ok'){
            $news = $data->articles;
            $total = $data->totalResults;
            $noOfPages = ceil($total/20);

            $this->load->view('basic/header');
            $this->load->view('basic/navbar');
            $this->load->view('topic',compact('news','page','keyword','noOfPages'));
            $this->load->view('basic/footer');
         }
         else{
            $this->load->view('basic/header');
			$this->load->view('basic/navbar');
			$this->load->view('basic/limit');
			$this->load->view('basic/footer');
         }
     }
 }
?>
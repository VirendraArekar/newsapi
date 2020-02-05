<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{

		$this->load->helper(['url','auth_helper','news_helper']);
		$status = json_decode(top_headlines())->status;
		if($status == 'ok'){
			$headlines = json_decode(top_headlines())->articles;
			$crickets =  json_decode(news('cricket',4,1))->articles;
			$lifestyle =  json_decode(news('lifestyle',1,1))->articles;
			$fun =  json_decode(news('fun',1,1))->articles;
			$fitness =  json_decode(news('fitness',1,1))->articles;
			$adventure =  json_decode(news('adventure',1,1))->articles;
			$sports =  json_decode(news('sports',4,1))->articles;
			$politics =  json_decode(news('politics',4,1))->articles;
			$healths =  json_decode(news('health',4,1))->articles;
			$arts =  json_decode(news('art',4,1))->articles;
			$movies =  json_decode(news('movies',4,1))->articles;
			// $headlines = json_decode(top_headlines())->articles;
			// $crickets =  array_slice(json_decode(news_dubug('cricket'))->articles , 4);
			// $lifestyle =  array_slice(json_decode(news_dubug('lifestyle'))->articles , 0)[0];
			// $fun =  array_slice(json_decode(news_dubug('fun'))->articles , 0)[0];
			// $fitness =  array_slice(json_decode(news_dubug('fitness'))->articles , 0)[0];
			// $adventure =  array_slice(json_decode(news_dubug('adventure'))->articles , 0)[0];
			// $sports =  array_slice(json_decode(news_dubug('sports'))->articles , 16);
			// $politics =  array_slice(json_decode(news_dubug('politics'))->articles , 16);
			// $healths =  array_slice(json_decode(news_dubug('health'))->articles , 16);
			// $arts =  array_slice(json_decode(news_dubug('art'))->articles , 16);
			// $movies =  array_slice(json_decode(news_dubug('movies'))->articles , 16);
			// print_r($headlines[0]->source->name);
			// exit();
			$this->load->view('basic/header');
			$this->load->view('basic/navbar',compact('headlines','crickets','lifestyle','fun','fitness','adventure','sports','politics','healths','arts','movies'));
			$this->load->view('home');
			$this->load->view('basic/footer');
		}
		else{
			$this->load->view('basic/header');
			$this->load->view('basic/navbar');
			$this->load->view('basic/limit');
			$this->load->view('basic/footer');
		}
	}

	public function _404()
	{
		$this->load->helper(['url','auth_helper','news_helper']);
        $this->load->view('basic/header');
		$this->load->view('basic/navbar');
		$this->load->view('basic/404');
		$this->load->view('basic/footer');
	}
}

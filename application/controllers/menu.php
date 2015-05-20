<?php
	class menu extends CI_Controller{
		
		function __construct(){
			
			parent::__construct();
			
		}
		
		function index(){
			
			$this->load->view('page/home/home');
		}
		
		function home(){
			
			$this->load->view('page/home/home');
		}
		
		function design(){
			
			$this->load->view('page/design/index');
		}
		
		function idea(){
			
			$this->load->view('page/idea/index');
		}
		function architecture(){
				
			$this->load->view('page/architecture/index');
		}
		function condo(){
				
			$this->load->view('page/condo/index');
		}
		function news(){
			$this->load->view('page/news/index');
		}
		
		/* Tutorial */
		
		function html(){
			$this->load->view('page/tutorial/html/index');
		}
		function php(){
			$this->load->view('page/tutorial/php/index');
		}
		function css(){
			$this->load->view('page/tutorial/css/index');
		}
		/* End Tutorial */
		
	}
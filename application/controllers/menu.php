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
		function admin(){
			$this->load->view('administrator/index');
		}
		
		/* Tutorial */
		
		function size(){
			$this->load->view('page/architecture/ar_size/index');
		}
		function price(){
			$this->load->view('page/architecture/ar_price/index');
		}
		function type(){
			$this->load->view('page/architecture/ar_type/index');
		}
		function material(){
			$this->load->view('page/architecture/ar_meterial/index');
		}
		function build(){
			$this->load->view('page/architecture/ar_build_in/index');
		}
		/* End Tutorial */
		
	}
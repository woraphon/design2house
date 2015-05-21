<?php
class admin extends CI_Controller {
	
	function __construct(){
		
		parent::__construct();
	}
	
	function index(){
		$this->load->view('login/login-form');
	}
	
	function dashboard(){
	
		$this->load->view('administrator/index');
	}
	
	function charts(){
		
		$this->load->view('administrator/page_admin/charts');
	}
}

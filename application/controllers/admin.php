<?php
class admin extends CI_Controller {
	
	function __construct(){
		
		parent::__construct();
	}
	
	function index(){
		$this->load->view('login/login-form');
	}
}

<?php

class user extends Frontend_Controller{

	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('_signin');
	}

	function signin(){
		$this->load->view('_signin');
	}

	function signup(){
		$this->load->view('_signup');
	}

	function createUser(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$this->load->model('user_model');
		$this->user_model->addUser($username,$password,$email);
	}

	function loginUser(){
		$username = $_POST['username'];
		$password = $_POST['password'];		

	}

}
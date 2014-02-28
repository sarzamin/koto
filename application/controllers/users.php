<?php

/**
 * 
 */
class Users extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}

	function register(){
		$data['error'] = 0;
		if($_POST){
			$this->load->helper('date');
			$this->load->model('user_model');

			$username = $this->input->post('username',TRUE);
			$password = $this->input->post('password',TRUE);
			$repassword = $this->input->post('repassword',TRUE);
			$email = $this->input->post('email',TRUE);
			$signupDate = now();
			$usertype = 1;

			if ($password === $repassword) {
				$userdata = array(
					'username' => $username,
					'password' => sha1($password),
					'email' => $email,
					'signupDate' = > $signupDate,
					'usertype' = > $usertype
			 	);

			 	$user = $this->user_model->register($userdata);
			}

			

			
			
			if(!$user){
				$data['error'] = 1;
			}else {
				$this->session->set_userdata('userID',$user['userID']);
				redirect(base_url());
			}
			
		}
		
		$this->load->view('_signin',$data);
	}
	
	function login(){
		$data['error'] = 0;
		if($_POST){
			$this->load->model('user_model');
			$username = $this->input->post('username',TRUE);
			$password = $this->input->post('password',TRUE);
			$user = $this->new_user_model->login($username,$password);
			
			if(!$user){
				$data['error'] = 1;
			}else {
				$this->session->set_userdata('userID',$user['userID']);
				redirect(base_url());
			}
			
		}
		
		$this->load->view('_signin',$data);
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

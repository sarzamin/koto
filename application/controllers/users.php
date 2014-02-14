<?php

/**
 * 
 */
class Users extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function login(){
		$data['error'] = 0;
		if($_POST){
			$this->load->model('new_user_model');
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

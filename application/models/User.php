<?php

	class User extends CI_Model {
		
		function __construct(){
			// Call CI_Model constructor
        	parent::__construct();

		}//end constructor

		function addUser($username,$password,$email){
			
			//User's basic information
			$this->username = $username;
			$this->password = sha1($password);
			$this->email = $email;
			$this->currentTime = time();

			//array of user's data
			$userDataArray = array(
				'username' = $this->username,
				'password' = $this->password,
				'email' = $this->email,
				'signupDate' = $this->currentTime
				);

			//Insert $userDataArray to users table
			$this->db->insert('users', $userDataArray);
		}//end function addUser

		function editUser(){

		}//end function editUser

		function userInfo(){

		}//end function userInfo

	}//end class user
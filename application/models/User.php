<?php

	class User extends CI_Model {
		
		function __construct(){
			// Call CI_Model constructor
        	parent::__construct();

		}//end constructor


		function addUser($username,$password,$email)
		{
			
			//User's basic information
			$this->username = $username;
			$this->password = sha1($password);
			$this->email = $email;
			$this->currentTime = time();

			//array of user's data
			$userDataArray = array(
				'username' => $this->username,
				'password' => $this->password,
				'email' => $this->email,
				'signupDate' => $this->currentTime
				);

			//Insert $userDataArray to users table
			$this->db->insert('users', $userDataArray);
		}//end function addUser


		function editUser($userID,$name,$email,$url,$location,$about)
		{
			//user's information for update users table
			$this->name = $name;
			$this->email = $email;
			$this->url = $url;
			$this->location = $location;
			$this->about = $about;

			//array of user's data
			$userDataArray = array(
				'name' => $this->name,
				'email' => $this->email,
				'url' => $this->url,
				'location' => $this->location,
				'about' => $this->about
				 );

			//select user row
			$this->db->where('userID',$userID);

			//update selected row
			$this->db->update('users', $userDataArray); 

		}//end function editUser


		function changePassword()
		{

		}


		function userInfo()
		{

		}//end function userInfo

	}//end class user
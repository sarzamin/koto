<?php
	/**
	 * @author edrock
	 */
	class user_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		function register($data)
		{
			$this->db->insert('users',$data);
		}
		
		function login($username,$password)
		{
			$where = array('username' => $username,
				'password' => sha1($password) );
				
			$this->db->select()->from('users')->where($where);
			$query = $this->db->get();
			return $query->first_row('array');
		}

		function editInfo($userID,$newdata){
			$where = array('id' => $userID );

			$this->db->where($where);
			$this->db->update('users', $newdata); 
		}
	}
	
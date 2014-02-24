<?php
	/**
	 * @author edrock
	 */
	class post_model extends CI_Model {

		$tablename = '';
		
		function __construct() {
			parent::__construct();
		}
		
		function add($data)
		{
			$this->db->insert('posts',$data);
		}
		
		function remove($postID)
		{
			$where = array('id' => $postID);
				
			$this->db->where($where);
			$this->db->delete('posts'); 
		}

		function update($postID,$newdata){
			$where = array('id' => $postID );

			$this->db->where($where);
			$this->db->update('posts', $newdata); 
		}
	}
	
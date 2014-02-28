<?php
	/**
	 * @author edrock
	 */
	class post_model extends CI_Model {

		private $tablename = '';
		
		function __construct() {
			parent::__construct();
		}
		
		function add($data,$tags)
		{
			$this->db->insert('posts',$data);
			$postID = $this->db->insert_id();


			foreach ($tag as $tags) {
				$this->db->insert('postTags',array('id' => $postID,'tag'=>$tag ));
			}
		}
		
		function remove($postID)
		{
			$where = array('id' => $postID);
				
			$this->db->where($where);
			$this->db->delete('posts'); 
            
            $where = array('postID' => $postID);

			$this->db->where($where);
			$this->db->delete('postTags');
		}

		function update($postID,$newdata,$newtags){
			$this->db->where($where);
			$this->db->delete('postTags');
			
			$where = array('id' => $postID );
			$this->db->where($where);
			$this->db->update('posts', $newdata); 
			
			foreach ($tag as $newtags) {
				$this->db->insert('postTags',array('id' => $postID,'tag'=>$tag ));
			}
		}
	}
	
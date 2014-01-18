<?php

	/*
	*/
	class Post extends CI_Model {

		protected $postID;
		protected $postTitle;
		protected $postHead;
		protected $postBody;
		protected $authorID;
		protected $postCreateTime;
		protected $postModifyTime;
		protected $active;

		function __construct(){
			parent::__construct();
		}//end construct

		function addPost($postTitle,$postHead,$postBody,$authorID,$postCreateTime,$active){

			//post information
			$this->postTitle = $postTitle;
			$this->postHead = $postHead;
			$this->postBody = $postBody;
			$this->authorID = $authorID;
			$this->postCreateTime = $postCreateTime;
			$this->active = $active;


			//Insert post to database with object
			$this->db->insert('posts',$this);

		}//end addPost function

		function editPost($postID,$postTitle,$postHead,$postBody,$authorID,$postCreateTime,$postModifyTime,$active){

			// post info
			$this->postID = $postID;
			$this->postTitle = $postTitle;
			$this->postHead = $postHead;
			$this->postBody = $postBody;
			$this->authorID = $authorID;
			$this->postCreateTime = $postCreateTime;
			$this->postModifyTime = $postModifyTime;
			$this->active = $active;


			//update post info with object
			$this->db->update('posts',$this,array('postID' => $this->postID));


		}//end editPost function

		function deletePost($postID){
			$this->db->delete('posts',array('postID' => $postID));
		}//end deletePost function

		function showPosts($numberOfPosts,$start){
            $result = $this->db->get_where('posts', array('postID>=' => $start), $numberOfPosts);
            return $result;
		}//end showPosts function

	}//end class
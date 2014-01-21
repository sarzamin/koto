<?php

	/*
	*/
	class post_model extends MY_Model {

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

			//post information array
			$postData = array(
				'postTitle' => $postTitle,
				'postHead' => $postHead,
				'postBody' => $postBody,
				'authorID' => $authorID,
				'postCreateTime' => $postCreateTime,
				'active' => $active);

			//Insert post to database with object
			return $this->insert($postData);

		}//end addPost function

		function editPost($postID,$postTitle,$postHead,$postBody,$authorID,$postCreateTime,$postModifyTime,$active){

			// post infomation array
			$postData = array(
				'postTitle' => $postTitle,
				'postHead' => $postHead,
				'postBody' => $postBody,
				'authorID' => $authorID,
				'postCreateTime' => $postCreateTime,
				'postModifyTime' => $postModifyTime,
				'active' => $active);

			//update post info with object
			return $this->update($postID,$postData);
		}//end editPost function

		function deletePost($postID){
			return $this->delete($postID);
		}//end deletePost function

		function showPosts($numberOfPosts,$start){
            $result = $this->db->get($_table)->where('id<=' = $start)->limit($numberOfPosts);
            return $result;
		}//end showPosts function

	}//end class
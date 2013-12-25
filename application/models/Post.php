<?php

	/*
	*/
	class Post extends CI_Model {

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

			//array of post info
			$postDataArray =  array(
				'postTitle' => $this->postTitle,
				'postHead' => $this->postHead,
				'postBody' => $this->postBody,
				'authorID' => $this->authorID,
				'postCreateTime' => $this->postCreateTime,
				'active' => $this->active );

			//Insert post to database
			$this->db->insert('posts',$postDataArray);

		}//end addPost function

		function editPost(){

		}//end editPost function

		function deletePost(){

		}//end deletePost function

		function showPosts(){

		}//end showPosts function

	}//end class
<?php

	/*
	*/
	class Post extends CI_Model {

		var $postID;
		var $postTitle;
		var $postHead;
		var $postBody;
		var $authorID;
		var $postCreateTime;
		var $postModifyTime;
		var $active;

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
			/*
			$postDataArray =  array(
				'postTitle' => $this->postTitle,
				'postHead' => $this->postHead,
				'postBody' => $this->postBody,
				'authorID' => $this->authorID,
				'postCreateTime' => $this->postCreateTime,
				'active' => $this->active 
				);
			

			//Insert post to database with array
			$this->db->insert('posts',$postDataArray);
			*/

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

			/*
			//array of post info
			$postDataArray =  array(
				'postTitle' => $this->postTitle,
				'postHead' => $this->postHead,
				'postBody' => $this->postBody,
				'authorID' => $this->authorID,
				'postCreateTime' => $this->postCreateTime,
				'postModifyTime' => $this->postModifyTime,
				'active' => $this->active 
				);

			//update post info with array
			$this->db->update('posts',$postDataArray,array('postID' => $this->postID));
			*/


			//update post info with object
			$this->db->update('posts',$this,array('postID' => $this->postID));


		}//end editPost function

		function deletePost($postID){
			$this->db->delete('posts',array('postID' => $postID));
		}//end deletePost function

		function showPosts(){

		}//end showPosts function

	}//end class
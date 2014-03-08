<?php

class Posts extends CI_Controller {
    
    function index(){
        $this->load->model('Post');
        $data['posts'] = $this->Post->showPosts($numberOfPosts,$startID); 

    }//end of index function
    
    function addpost(){
        $data['add'] = 0;
        if($this->session->userdata('userID')&& !$_POST)
        {
            $this->load->view('',$data);//set view of form post
        }elseif($this->session->userdata('userID')&& $_POST){
            
        }else{
            
        }
        
    }

    function findTags($content){

        preg_match_all('/\S*\*(?:\[[^\]]+\]|\S+)/', $content,$rawTags);

        $tags = array();
        foreach ($rawTags as $rawTag) {
            foreach ($rawTag as $tag) {
                array_push($tags, trim(str_replace('*', ' ', $tag)));
            }
        }

    	return $tags;
    }
    
}//end of Posts controller

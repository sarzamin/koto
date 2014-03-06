<?php

class Posts extends CI_Controller {
    
    function index(){
        $this->load->model('Post');
        $data['posts'] = $this->Post->showPosts($numberOfPosts,$startID); 

    }//end of index function


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

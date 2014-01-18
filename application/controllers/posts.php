<?php

class Posts extends CI_Controller {
    
    function index(){
        $this->load->model('Post');
        $data['posts'] = $this->Post->showPosts($numberOfPosts,$startID); 

    }//end of index function
    
}//end of Posts controller

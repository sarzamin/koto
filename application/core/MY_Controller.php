<?php

class MY_Controller extends CI_Controller {

	public $data = array();

	function __construct(){
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_title'] = config_item('koto_title');
	}

}
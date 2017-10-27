<?php
//error_reporting(E_ALL);
class Testmongo extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$post = array('title' => 'Test post');
		$this->mongo_db->insert('dynamic_form',$post);
		$test = $this->mongo_db->get('dynamic_form');
		pr($test);
    }
	public function dynamic_form(){
		$this->load->view('testmongo/dynamic_form');
	}	
}

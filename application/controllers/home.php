<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();


	}
	
	public function index()
	{
		global $data;
		echo $this->srkn_smarty->fetch('home.tpl',$data);
	}

}
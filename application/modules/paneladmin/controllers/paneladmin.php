<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class paneladmin extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->srkn_smarty->addTemplateDir(APPPATH.'modules/paneladmin/views/templates');
		$this->srkn_smarty->setCompileDir(APPPATH.'modules/paneladmin/views/compiled');
	}
	
	public function index()
	{
		
		echo $this->srkn_smarty->fetch("admin/home.tpl");
	}
	
	public function sil($id)
	{
		$this->xdb->query_db("delete from admin where id=".$id);
		redirect(base_url()."admin/listele");
	}
	
	public function ekle($userid="")
	{
		error_reporting(0);
		ini_set('display_errors',0);
		$data["veri"] = array();
		//echo "asdasd".$userid;
		$this->load->model("admin_model");
		if ($this->input->post())
		{
			$s = $this->admin_model->kullaniciekle($this->input->post(),$userid);
			if ($s) redirect(base_url()."admin/listele");
			$data["veri"] = $this->input->post();
		}
		if ($userid!="") 
		{
			$user = $this->admin_model->kullanicilistele($userid);
			$data["veri"] = $user[0];
		}
		echo $this->srkn_smarty->fetch("adminekle.tpl",$data);
	}
	
	
	
	public function listele()
	{
		$this->load->model("admin_model");
		$data["kullanicilar"] = $this->admin_model->kullanicilistele();
			
		echo $this->srkn_smarty->fetch("adminlistele.tpl",$data);
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		go(base_url()."admin/");
	}
	
	
	
	

}
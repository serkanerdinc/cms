<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class page extends MX_Controller {
    function __construct()
    {
        parent::__construct();
        $this->srkn_smarty->addTemplateDir(APPPATH.'modules/paneladmin/views/templates');
        $this->srkn_smarty->setCompileDir(APPPATH.'modules/paneladmin/views/compiled');

        global $data;
        $this->load->model("page_model");
        
        $data["nav1"] = $this->router->fetch_class();
        $data["nav2"] = $this->router->fetch_method();
    }

    public function index()
    {

    }

    public function add()
    {
    	global $data;
    	$data["Terms"]["Category"] = $this->page_model->TermsGet(1);
    	
    	//Postta veri varsa burası çalışacak
    	if ($this->input->post())
        {
        	$post_id = $this->page_model->PostSave($this->input->post());  
        	
        }
    	
    	
		echo $this->srkn_smarty->fetch("admin/page/pageadd.tpl",$data);
    }

    public function delete()
    {

    }

    public function terms($type="category")
    {
        global $data;
        if ($type=="category") $TermType = 1;
        else if ($type=="tag") $TermType = 2;
        if ($this->input->post())
        {
        	$term_id = $this->page_model->TermSave($this->input->post(),$TermType);  
        	if ($term_id>0) redirect("/paneladmin/page/terms/".$type);
        }
		
		$data["Terms"] = $this->page_model->TermsGet($TermType);
		$data["TermType"] = $TermType;
        $data["nav2"] = $type;
        
        echo $this->srkn_smarty->fetch("admin/page/terms.tpl",$data);
    }

    public function termsedit($type,$term_id)
    {
		global $data;
        if ($type=="category") $TermType = 1;
        else if ($type=="tag") $TermType = 2;
        if ($this->input->post())
        {
        	$TT = $this->page_model->TermSave($this->input->post(),$TermType,$term_id);  
        	if ($TT) redirect("/paneladmin/page/terms/".$type);
        }
		
		$data["Term"] = $this->page_model->TGet($TermType,$term_id);
		$data["Terms"] = $this->page_model->TermsGet($TermType);
		$data["TermType"] = $TermType;
        $data["nav2"] = $type;
        
        echo $this->srkn_smarty->fetch("admin/page/termsedit.tpl",$data);
    }
    
    public function termsdelete($type,$term_id)
    {
    	if ($type=="category") $TermType = 1;
        else if ($type=="tag") $TermType = 2;
		$this->page_model->TermDelete($TermType,$term_id);  
		redirect("/paneladmin/page/terms/".$type);
    }

    public function tagget($AuthorName)
    {
    	$t = $this->input->post("tag");
    	echo "asd".$AuthorName."-".$t;
    }

}
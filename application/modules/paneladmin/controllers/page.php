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

    public function add($page_id="")
    {
    	global $data;
    	$data["Terms"]["Category"] = $this->page_model->TermsGet(1);
    	
    	//Postta veri varsa burası çalışacak
    	if ($this->input->post())
        {
        	$post_id = $this->page_model->PostSave($this->input->post(),$page_id);  
        	//redirect("paneladmin/page/lists");
        }
		
		//page_id dolu ise page_idsi eşit olan veri getirilecek
		if ($page_id!="")
		{
			$data["page_id"] = $page_id;
			$page = $this->page_model->PostList($page_id);
			$data["page"] = $page[0];
		}
		
		echo $this->srkn_smarty->fetch("admin/page/pageadd.tpl",$data);
    }
    

    public function lists()
    {
    	global $data;
    	
    	$data["pages"] = $this->page_model->PostList();
		echo $this->srkn_smarty->fetch("admin/page/pagelist.tpl",$data);
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
    
    public function urltitle()
    {
		$title = url_title($this->input->post("title"));
		echo $title;
	}
    public function slugcontrol()
    {
		$slug = $this->page_model->SlugControl($this->input->post("slug"));
		echo $slug;
	}

}
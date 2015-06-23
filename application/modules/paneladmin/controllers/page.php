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

    }

    public function delete()
    {

    }

    public function category()
    {
        global $data;
        if ($this->input->post())
        {
        	$term_id = $this->page_model->TermSave($this->input->post(),1);  
        	if ($term_id>0) redirect("/paneladmin/page/category");
        }

        echo $this->srkn_smarty->fetch("admin/page/category.tpl",$data);
    }

    public function tag()
    {

    }

}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page_model extends CI_Model {
	
	//Sayfaları listeleme
	public function PostList($page_id="")
	{
		$this->db->select("*")->from("pages");
		if ($page_id!="")
		{
			$where["page_id"] = $page_id;
			$this->db->where($where);
		}
		$query = $this->db->get();
		$data = $query->result_array();
		foreach($data as $key => $value){
			$twhere["page_id"] = $value["page_id"];
			$this->db->select("*")->from("page_term")->where($twhere);
			$query = $this->db->get();
			$datax 	= $query->result_array();
			foreach($datax as $k => $term){
				if ($term["type"]=="tag")
				{
					$ttag = $this->TGet("2",$term["term_id"]);
					$tname = $ttag["name"];
					$data[$key]["etiketler"] .= $tname.",";				
				}
				else if($term["type"]=="category")
				{
					$tcat = $this->TGet("1",$term["term_id"]);
					$tname = $tcat["name"];
					$data[$key]["kategoriler"] .= $tname.",";	
				}
			}
		}
		
		return $data;
	}
	
	
	//Sayfa Verilerini Kaydetme ve Düzenleme
    public function PostSave($data,$term_id="")
    {
    	//veriler page olarak ekleniyor
		$veri["title"] 		= $data["title"];
		$veri["description"]= $data["description"];
		$veri["keywords"] 	= $data["keywords"];
		$veri["content"] 	= $data["content"]; 
		$veri["created"] 	= date("Y-m-d H:i:s");
		$veri["is_active"] 	= 1;
		$veri["language"] 	= "tr";
    	
		$data["page-slug"] == "" ? $veri["slug"] = url_title($data["title"]) : $veri["slug"] = $data["page-slug"];
	
    	if($this->db->insert("pages",$veri)) 
			$page_id = $this->db->insert_id();
    	
    	/////
    	
		//category ile sayfa birbirine eşleştiriliyoruz
    	foreach($data["term_category"] as $key => $value){
			$tcat["page_id"] 	= $page_id;
			$tcat["term_id"] 	= $value;
			$tcat["type"] 		= "category";
    		$this->db->insert("page_term",$tcat);
			
			//category eklemeden sonra count değerini 1 arttırıyruz
			$this->db->set("count","count+1",FALSE);
			$this->db->where("term_id",$value);
			$this->db->update("terms");
		}
		/////
		
		////Etiket sayfa eşitleme etiket yoksa term tablosuna ekleme 
		foreach(explode(",",$data["tags"]) as $key => $value){
			$this->db->select("*")->from("terms")->where(array("name"=>$value,"term_type"=>"2"));
			$query 	= $this->db->get();
			$d		= $query->result_array();
			if (count($d)==0)
				{
					$tagins["name"] 		= $value;
					$tagins["slug"] 		= url_title($value);
					$tag_id = $this->TermSave($tagins,2);
					
					$ttag["page_id"] 	= $page_id;
					$ttag["term_id"] 	= $tag_id;
					$ttag["type"] 		= "tag";
					$this->db->insert("page_term",$ttag);
				}
			else
				{
					$ttag["page_id"] 	= $page_id;
					$ttag["term_id"] 	= $d[0]["term_id"];
					$ttag["type"] 		= "tag";
					$this->db->insert("page_term",$ttag);
				}
		}
		
		
		//Sayfa resmini buraya ekliyoruz
		$config['upload_path'] = 'images/page-image/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name'] = url_title($data["title"]); 
			
		$this->load->library('upload', $config);
		if ($this->upload->do_upload("image"))
		{
			$resim=$this->upload->file_name;
			$file = $this->upload->upload_path.$this->upload->file_name;
			
			$this->load->library('image_lib');
			$configx['source_image'] = $file;
			$configx['allowed_types'] = 'gif|jpg|png|jpeg';
			$configx['width'] = 250;
			$configx['quality'] = 100;
			$configx['new_image'] = "images/page-image/kucuk/". url_title($data["title"]); ;
			
	 	    $this->load->library('image_lib');
			$this->image_lib->initialize($configx);
	        $this->image_lib->resize();	
	        $this->db->update("pages",array("resim"=>$resim),array("page_id"=>$page_id));
		}
		
    }
    
    //Category ve Etiket verilerini kaydetme ve düzenleme
    public function TermSave($data,$TermType=1,$term_id="")
    {
    	$veri["term_type"] 	= $TermType;
    	$veri["name"] 		= $data["name"];
    	$veri["description"]= $data["description"];
    	$veri["keywords"] 	= $data["keywords"];
    	$veri["count"] 		= 0;
    	$veri["is_active"] 	= 1;
    	
    	$TermType==1 ? $veri["parent"] = $data["parent"] : $veri["parent"] = 0;
    	$data["slug"] == "" ? $veri["slug"] = url_title($data["name"]) : $veri["slug"] = $data["slug"];
		
		if ($term_id=="")
		{
			if($this->db->insert("terms",$veri)) 
				return $this->db->insert_id();
			else
				return false;
		}
		else
		{
			$where["term_id"] = $term_id;
			if($this->db->update("terms",$veri,$where)) 
				return TRUE;
			else
				return false;
		}
		
    }
    
    public function TermsGet($TermType=1,$Page=1)
    {
    	$where["term_type"] = $TermType;
    	$limit = ($Page-1)*25;
		$this->db->select()->from("terms")->where($where)->limit($limit,25);
		$query = $this->db->get();
		$data = $query->result_array();
		foreach($data as $key => $value)
		{
			$term[$value["parent"]][] = $value;
		}
		
		return $term;
	}
	
    public function TermDelete($TermType=1,$term_id)
    {
    	$where["term_type"] = $TermType;
    	$where["term_id"] = $term_id;
		
		if($this->db->delete("terms",$where)) 
				return TRUE;
			else
				return false;
	}
	public function TGet($TermType=1,$term_id)
    {
    	$where["term_type"] = $TermType;
    	$where["term_id"] = $term_id;
		$this->db->select()->from("terms")->where($where);
		$query = $this->db->get();
		$term = $query->result_array();
		
		return $term[0];
	}
	
	public function TermPage($TermId="")
	{
		if ($TermId=="") return FALSE;
		$where["term_id"] = $TermId;
		$this->db->select()->from("page_term")->where($where);
		$query = $this->db->get();
		$veri = $query->result_array();
		return $veri;
		
	}






}
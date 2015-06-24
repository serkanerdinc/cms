<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page_model extends CI_Model {

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
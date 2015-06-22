<?php if ( ! defined('BASEPATH')) exit('Erişim engellenmiştir.');
	class login extends CI_Controller{
		
		function __construct()
		{
			parent::__construct();
            $this->srkn_smarty->addTemplateDir(APPPATH.'modules/paneladmin/views/templates');
            $this->srkn_smarty->setCompileDir(APPPATH.'modules/paneladmin/views/compiled');
		}
		
		public function index()
		{	
			if($this->session->userdata('8f950a73d74a9e8fafdcebc961d7b14c')==TRUE){
				redirect(base_url('paneladmin'));
			}
			$hata["hata"] = "";
			$data = $this->input->post();
			if ($this->input->post())
			{
				$this->load->model('login_model');				
				$sonuc = $this->login_model->loginkontrol($data);				
				
				
				if($sonuc)
				{
					redirect(base_url('paneladmin'));
				}
				else
				{
					$hata['hata'] = "Kullanıcı adı veya şifre yanlış";
				}
			}
			echo $this->srkn_smarty->fetch("login.tpl",$hata);
			
		}
		
		
	}
?>
<?php
class login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	public function index($number = 0)
	{

				if($this->input->post())
					{	
						
							$this->load->model('member');
							$this->member->setUsername($this->input->post('username'));
							$this->member->setPassword($this->input->post('password'));
						
							
							$data=$this->member->login();
							if($data==true){
							
								$this->load->view('welcome2');
							}
							else{
							echo('username password ผิด');
				
		
						
						}
						
					}

						$this->load->view('home_login');
							
							
	}
	
						
		

			
}

?>
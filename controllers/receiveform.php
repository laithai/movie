<?php
class ReceiveForm extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	public function index($number = 0)
	{

		$isError = false;
		//$isSuscess = false;
		$data['error'] = array();
		$data['suscess'] = array();

		

		$this->form_validation->set_rules('username', 'username', 'required|min_length[4]|max_length[15]|alpha',
		array(
			
			'required'=>'{field}ว่าง',
			'min_length'=>'{field}ต้องมากกว่า 4 ตัว',
			'max_length'=>'{field}เกิน15ตัวอักษร',
			'alpha'=>'{field}ต้องเป็นตัวอักษรเท่านั้น'
			)
	
		);
		$this->form_validation->set_rules('password', 'password', 'required|min_length[6]|max_length[20]',
		array(
			'required'=>'{field}ว่าง',
			'min_length'=>'{field}ต้องมากกว่า6 ตัว',
			'max_length'=>'{field}เกิน20ตัวอักษร'
		)
	
		);
			$this->form_validation->set_rules('re-password', 're-password', 'required|min_length[6]|max_length[20]|matches[password]',
		array(
			'required'=>'{field}ว่าง',
			'min_length'=>'{field}ต้องมากกว่า6 ตัว',
			'max_length'=>'{field}เกิน20ตัวอักษร',
				'matches'=>'{field}รหัสผ่านไม่ตรงกัน'
		)
	
		);
	$this->form_validation->set_rules('name', 'name','min_length[3]',
		array(
			
			'min_length'=>'{field}ต้องมากกว่า 3 ตัว'
	)
	
		);
	

					if($this->form_validation->run() ==FALSE)
					{	
						
			

					
					}
					else
					{
						
						

							$this->load->model('member');
							$this->member->setUsername($this->input->post('username'));
							$this->member->setPassword($this->input->post('password'));
							$this->member->setName($this->input->post('name'));
							$this->member->setEmail($this->input->post('email'));
							
							echo'<font color="gren">สมัครสำเร็จ</font>';
							$this->member->add();
							
						}
							$this->load->view('view',$data);
							
					}
				
						
		

			
}

?>
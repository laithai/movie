<?php
class Member extends CI_Model
{
			var $username; //
			var $password; //
				var $email; //
					var $name; //
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}
		public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

		public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}


	public function add()
	{
		$array = array
		(
			'username'  => $this->getUsername(),
			'password' => $this->getPassword(),
			'name' => $this->getName(),
			'email' => $this->getEmail()
			
		);

		$this->db->insert('member', $array);

		return $this->db->insert_id(); //ใชได้เฉพาะตอนใช้ insert('city','$array')
	}
	######################## function login #############################
	function login()
	 {
	   $this -> db -> select('*');  						###########
	   $this -> db -> from('member'); 						 ########### เช็คข้อมูลใน DB 
	   $this -> db -> where('username', $this->getUsername()); ###########
	   $this -> db -> where('password', $this->getPassword()); ###########
	   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

	   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข
	
	   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record 
	   {
			 return $query->result(); ############# ส่งค้าที่ดึงได้กลับ
	   }
	   else ########### เมื่อไม่ตรงตามเงื่อนไข
	   {
			  return FALSE;  ############# ส่งค้า FALSE กลับ
	   }
	 }
	 ###################################### update ######################################

	
}
	?>
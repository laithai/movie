<?php
class Memcity extends CI_Model
{
	var $cid;
	var $cname;
	var $caddress;
	var $status;

	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	###### SET #####################
	public function setCid($Cid)
	{
		$this->Cid = $Cid;
	}

	###### GET #####################
	public function getCid()
	{
		return $this->Cid;
	}
	###### SET #####################
	public function setCname($Cname)
	{
		$this->Cname = $Cname;
	}

	###### GET #####################
	public function getCname()
	{
		return $this->Cname;
	}
	###### SET #####################
	public function setCaddress($Caddress)
	{
		$this->Caddress = $Caddress;
	}

	###### GET #####################
	public function getCaddress()
	{
		return $this->Caddress;
	}
	###### SET #####################
	public function setStatus($Status)
	{
		$this->Status = $Status;
	}

	###### GET #####################
	public function getStatus()
	{
		return $this->Status;
	}
	###################################### add ######################################
	public function add()
	{
		$array = array
		(
			'username'  => $this->getCname(),
			'password' => $this->getCaddress(),
			'status' => $this->getStatus()
			
		);

		$this->db->insert('member', $array);

		return $this->db->insert_id(); //ใชได้เฉพาะตอนใช้ insert('city','$array')
	}
	######################## function login #############################
	function login()
	 {
	   $this -> db -> select('*');  						###########
	   $this -> db -> from('member'); 						 ########### เช็คข้อมูลใน DB 
	   $this -> db -> where('username', $this->getCname()); ###########
	   $this -> db -> where('password', $this->getCaddress()); ###########
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

	public function update()
	{
		$data = array(
			'username'=>$this->getCname(),
			'password'=>$this->getCaddress()
		);

		$this->db->where('cid', $this->getCid());
		$this->db->update('member', $data);

		return true;
	}
	###################################### delete ######################################
	public function delete()
	{
		$array=array(
			'cid'=>$this->getCid()
		);
		
		$this->db->delete('member',$array);

		return true;
	}
	###################################### findByPk ######################################

	function findByPk($pk)
	{
		$query=$this->db->query
			('
				SELECT * FROM member WHERE cid = "'. $pk .'"
			');		

		return $query->row_array();
	}
}

?>
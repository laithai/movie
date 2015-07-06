<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller 
{

	
	public function index()
	{
		$memberId =0;

		$this->load->library('unit_test');
		$this->load->model('Memcity');
		$this->Memcity->setCname('hangdong');
		$this->Memcity->setCaddress('51002');
		$this->Memcity->setStatus('user');

		$test=$this->Memcity->add();
		$memberId = $test ;
		$expencted_resut ='is_int';
		$this->unit->run($test,$expencted_resut,'UT-01 :add date');
##################################################

		$this->Memcity->setCname('hangdong');
		$this->Memcity->setCaddress('51002');
		$test=$this->Memcity->login();
		$expencted_resut=true;
		$this->unit->run($test,$expencted_resut,'UT-02 :Login pass');

################################################
	$this->Memcity->setCname('XXXXX');
		$this->Memcity->setCaddress('51002');

		$test=$this->Memcity->login();
		$expencted_resut=false;
		$this->unit->run($test,$expencted_resut,'UT-03 :username not match');

################################################
	$this->Memcity->setCname('hangdong');
		$this->Memcity->setCaddress('000000');

		$test=$this->Memcity->login();
		$expencted_resut=false;
		$this->unit->run($test,$expencted_resut,'UT-04 : password naot match');

################################################
	$this->Memcity->setCname('XXXXXX');
		$this->Memcity->setCaddress('01/06/2558');

		$test=$this->Memcity->login();
		$expencted_resut=false;
		$this->unit->run($test,$expencted_resut,'UT-05 :username and password not match');

################################################
	$this->Memcity->setCid($memberId);
		$this->Memcity->setCname('AAvvvvv');
		$this->Memcity->setCaddress('bbbbb');
		$test=$this->Memcity->update();
		$expencted_resut=true;
		$this->unit->run($test,$expencted_resut,'UT-06 :update cname caddress password');

################################################
$result = $this->Memcity->findByPk($memberId);
		$test=$result['username'];
		$expencted_resut='vvvvvv';
		$this->unit->run($test,$expencted_resut,'UT-07 :cname change');

	
		$test=$result['password'];
		$expencted_resut='bbbbb';
		$this->unit->run($test,$expencted_resut,'UT-08 :caddress change');

	$this->Memcity->setCid($memberId);
	$test=$this->Memcity->delete();
	$expencted_resut=true;
	$this->unit->run($test,$expencted_resut,'UT-09 :delete date');
echo $this->unit->report();
	}
}
?>
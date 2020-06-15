<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipUserOperateInfoParam {
	
	static $_TSPEC;
	public $user_id = null;
	public $order_no = null;
	public $product_id = null;
	public $money = null;
	public $exec_type = null;
	public $open_type = null;
	public $days = null;
	public $exec_source = null;
	public $exec_content = null;
	public $operate_user = null;
	public $unique_code = null;
	public $extension = null;
	public $ip = null;
	public $platform = null;
	public $dateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_id'
			),
			2 => array(
			'var' => 'order_no'
			),
			3 => array(
			'var' => 'product_id'
			),
			4 => array(
			'var' => 'money'
			),
			5 => array(
			'var' => 'exec_type'
			),
			6 => array(
			'var' => 'open_type'
			),
			7 => array(
			'var' => 'days'
			),
			8 => array(
			'var' => 'exec_source'
			),
			9 => array(
			'var' => 'exec_content'
			),
			10 => array(
			'var' => 'operate_user'
			),
			11 => array(
			'var' => 'unique_code'
			),
			12 => array(
			'var' => 'extension'
			),
			13 => array(
			'var' => 'ip'
			),
			14 => array(
			'var' => 'platform'
			),
			15 => array(
			'var' => 'dateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['product_id'])){
				
				$this->product_id = $vals['product_id'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['exec_type'])){
				
				$this->exec_type = $vals['exec_type'];
			}
			
			
			if (isset($vals['open_type'])){
				
				$this->open_type = $vals['open_type'];
			}
			
			
			if (isset($vals['days'])){
				
				$this->days = $vals['days'];
			}
			
			
			if (isset($vals['exec_source'])){
				
				$this->exec_source = $vals['exec_source'];
			}
			
			
			if (isset($vals['exec_content'])){
				
				$this->exec_content = $vals['exec_content'];
			}
			
			
			if (isset($vals['operate_user'])){
				
				$this->operate_user = $vals['operate_user'];
			}
			
			
			if (isset($vals['unique_code'])){
				
				$this->unique_code = $vals['unique_code'];
			}
			
			
			if (isset($vals['extension'])){
				
				$this->extension = $vals['extension'];
			}
			
			
			if (isset($vals['ip'])){
				
				$this->ip = $vals['ip'];
			}
			
			
			if (isset($vals['platform'])){
				
				$this->platform = $vals['platform'];
			}
			
			
			if (isset($vals['dateTime'])){
				
				$this->dateTime = $vals['dateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipUserOperateInfoParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("user_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->user_id); 
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("product_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->product_id); 
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("exec_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->exec_type); 
				
			}
			
			
			
			
			if ("open_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->open_type); 
				
			}
			
			
			
			
			if ("days" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->days); 
				
			}
			
			
			
			
			if ("exec_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exec_source);
				
			}
			
			
			
			
			if ("exec_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exec_content);
				
			}
			
			
			
			
			if ("operate_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_user);
				
			}
			
			
			
			
			if ("unique_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->unique_code);
				
			}
			
			
			
			
			if ("extension" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extension);
				
			}
			
			
			
			
			if ("ip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ip);
				
			}
			
			
			
			
			if ("platform" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->platform);
				
			}
			
			
			
			
			if ("dateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->dateTime);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->user_id !== null) {
			
			$xfer += $output->writeFieldBegin('user_id');
			$xfer += $output->writeI64($this->user_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_no !== null) {
			
			$xfer += $output->writeFieldBegin('order_no');
			$xfer += $output->writeString($this->order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_id !== null) {
			
			$xfer += $output->writeFieldBegin('product_id');
			$xfer += $output->writeI64($this->product_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('exec_type');
		$xfer += $output->writeI32($this->exec_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('open_type');
		$xfer += $output->writeI32($this->open_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('days');
		$xfer += $output->writeI32($this->days);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->exec_source !== null) {
			
			$xfer += $output->writeFieldBegin('exec_source');
			$xfer += $output->writeString($this->exec_source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exec_content !== null) {
			
			$xfer += $output->writeFieldBegin('exec_content');
			$xfer += $output->writeString($this->exec_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_user !== null) {
			
			$xfer += $output->writeFieldBegin('operate_user');
			$xfer += $output->writeString($this->operate_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->unique_code !== null) {
			
			$xfer += $output->writeFieldBegin('unique_code');
			$xfer += $output->writeString($this->unique_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extension !== null) {
			
			$xfer += $output->writeFieldBegin('extension');
			$xfer += $output->writeString($this->extension);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ip !== null) {
			
			$xfer += $output->writeFieldBegin('ip');
			$xfer += $output->writeString($this->ip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->platform !== null) {
			
			$xfer += $output->writeFieldBegin('platform');
			$xfer += $output->writeString($this->platform);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dateTime !== null) {
			
			$xfer += $output->writeFieldBegin('dateTime');
			$xfer += $output->writeI64($this->dateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
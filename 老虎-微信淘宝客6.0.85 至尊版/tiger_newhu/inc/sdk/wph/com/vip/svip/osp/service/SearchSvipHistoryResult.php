<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SearchSvipHistoryResult {
	
	static $_TSPEC;
	public $user_id = null;
	public $level = null;
	public $exec_type = null;
	public $exec_source = null;
	public $exec_content = null;
	public $gift = null;
	public $start_time = null;
	public $end_time = null;
	public $operate_user = null;
	public $money = null;
	public $create_time = null;
	public $update_time = null;
	public $open_type = null;
	public $order_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_id'
			),
			2 => array(
			'var' => 'level'
			),
			3 => array(
			'var' => 'exec_type'
			),
			4 => array(
			'var' => 'exec_source'
			),
			5 => array(
			'var' => 'exec_content'
			),
			6 => array(
			'var' => 'gift'
			),
			7 => array(
			'var' => 'start_time'
			),
			8 => array(
			'var' => 'end_time'
			),
			9 => array(
			'var' => 'operate_user'
			),
			10 => array(
			'var' => 'money'
			),
			11 => array(
			'var' => 'create_time'
			),
			12 => array(
			'var' => 'update_time'
			),
			13 => array(
			'var' => 'open_type'
			),
			14 => array(
			'var' => 'order_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['level'])){
				
				$this->level = $vals['level'];
			}
			
			
			if (isset($vals['exec_type'])){
				
				$this->exec_type = $vals['exec_type'];
			}
			
			
			if (isset($vals['exec_source'])){
				
				$this->exec_source = $vals['exec_source'];
			}
			
			
			if (isset($vals['exec_content'])){
				
				$this->exec_content = $vals['exec_content'];
			}
			
			
			if (isset($vals['gift'])){
				
				$this->gift = $vals['gift'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['operate_user'])){
				
				$this->operate_user = $vals['operate_user'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['open_type'])){
				
				$this->open_type = $vals['open_type'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SearchSvipHistoryResult';
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
			
			
			
			
			if ("level" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->level);
				
			}
			
			
			
			
			if ("exec_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->exec_type); 
				
			}
			
			
			
			
			if ("exec_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exec_source);
				
			}
			
			
			
			
			if ("exec_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exec_content);
				
			}
			
			
			
			
			if ("gift" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gift);
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time);
				
			}
			
			
			
			
			if ("operate_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate_user);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time);
				
			}
			
			
			
			
			if ("open_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->open_type); 
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
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
		
		$xfer += $output->writeFieldBegin('user_id');
		$xfer += $output->writeI64($this->user_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->level !== null) {
			
			$xfer += $output->writeFieldBegin('level');
			$xfer += $output->writeString($this->level);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('exec_type');
		$xfer += $output->writeI32($this->exec_type);
		
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
		
		
		if($this->gift !== null) {
			
			$xfer += $output->writeFieldBegin('gift');
			$xfer += $output->writeString($this->gift);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_time');
			$xfer += $output->writeI64($this->start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_time');
			$xfer += $output->writeI64($this->end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operate_user !== null) {
			
			$xfer += $output->writeFieldBegin('operate_user');
			$xfer += $output->writeString($this->operate_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('open_type');
		$xfer += $output->writeI32($this->open_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_no !== null) {
			
			$xfer += $output->writeFieldBegin('order_no');
			$xfer += $output->writeString($this->order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
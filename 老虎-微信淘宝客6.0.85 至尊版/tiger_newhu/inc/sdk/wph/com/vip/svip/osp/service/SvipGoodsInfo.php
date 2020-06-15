<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipGoodsInfo {
	
	static $_TSPEC;
	public $level = null;
	public $bizType = null;
	public $goodsType = null;
	public $vpid = null;
	public $price = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'level'
			),
			2 => array(
			'var' => 'bizType'
			),
			3 => array(
			'var' => 'goodsType'
			),
			4 => array(
			'var' => 'vpid'
			),
			5 => array(
			'var' => 'price'
			),
			6 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['level'])){
				
				$this->level = $vals['level'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
			if (isset($vals['goodsType'])){
				
				$this->goodsType = $vals['goodsType'];
			}
			
			
			if (isset($vals['vpid'])){
				
				$this->vpid = $vals['vpid'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipGoodsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("level" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->level);
				
			}
			
			
			
			
			if ("bizType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizType); 
				
			}
			
			
			
			
			if ("goodsType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsType); 
				
			}
			
			
			
			
			if ("vpid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vpid);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		if($this->level !== null) {
			
			$xfer += $output->writeFieldBegin('level');
			$xfer += $output->writeString($this->level);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('bizType');
		$xfer += $output->writeI32($this->bizType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodsType');
		$xfer += $output->writeI32($this->goodsType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vpid !== null) {
			
			$xfer += $output->writeFieldBegin('vpid');
			$xfer += $output->writeString($this->vpid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
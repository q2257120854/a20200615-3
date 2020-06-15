<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OxoOrderReturnApply {
	
	static $_TSPEC;
	public $apply_id = null;
	public $apply_time = null;
	public $transportNo = null;
	public $carrier = null;
	public $goodsBackWay = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apply_id'
			),
			2 => array(
			'var' => 'apply_time'
			),
			3 => array(
			'var' => 'transportNo'
			),
			4 => array(
			'var' => 'carrier'
			),
			5 => array(
			'var' => 'goodsBackWay'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apply_id'])){
				
				$this->apply_id = $vals['apply_id'];
			}
			
			
			if (isset($vals['apply_time'])){
				
				$this->apply_time = $vals['apply_time'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['goodsBackWay'])){
				
				$this->goodsBackWay = $vals['goodsBackWay'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OxoOrderReturnApply';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("apply_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apply_id);
				
			}
			
			
			
			
			if ("apply_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apply_time);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("goodsBackWay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodsBackWay); 
				
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
		
		if($this->apply_id !== null) {
			
			$xfer += $output->writeFieldBegin('apply_id');
			$xfer += $output->writeString($this->apply_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apply_time !== null) {
			
			$xfer += $output->writeFieldBegin('apply_time');
			$xfer += $output->writeString($this->apply_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsBackWay !== null) {
			
			$xfer += $output->writeFieldBegin('goodsBackWay');
			$xfer += $output->writeI32($this->goodsBackWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
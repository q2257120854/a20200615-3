<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipcard;

class ApplyGroupRequest {
	
	static $_TSPEC;
	public $merchant_code = null;
	public $activity_flag = null;
	public $activity_name = null;
	public $apply_key = null;
	public $card_flag = null;
	public $total = null;
	public $face_money = null;
	public $use_stop_time = null;
	public $use_effect_day = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merchant_code'
			),
			2 => array(
			'var' => 'activity_flag'
			),
			3 => array(
			'var' => 'activity_name'
			),
			4 => array(
			'var' => 'apply_key'
			),
			5 => array(
			'var' => 'card_flag'
			),
			6 => array(
			'var' => 'total'
			),
			7 => array(
			'var' => 'face_money'
			),
			8 => array(
			'var' => 'use_stop_time'
			),
			9 => array(
			'var' => 'use_effect_day'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['activity_flag'])){
				
				$this->activity_flag = $vals['activity_flag'];
			}
			
			
			if (isset($vals['activity_name'])){
				
				$this->activity_name = $vals['activity_name'];
			}
			
			
			if (isset($vals['apply_key'])){
				
				$this->apply_key = $vals['apply_key'];
			}
			
			
			if (isset($vals['card_flag'])){
				
				$this->card_flag = $vals['card_flag'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['face_money'])){
				
				$this->face_money = $vals['face_money'];
			}
			
			
			if (isset($vals['use_stop_time'])){
				
				$this->use_stop_time = $vals['use_stop_time'];
			}
			
			
			if (isset($vals['use_effect_day'])){
				
				$this->use_effect_day = $vals['use_effect_day'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApplyGroupRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchant_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchant_code);
				
			}
			
			
			
			
			if ("activity_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activity_flag);
				
			}
			
			
			
			
			if ("activity_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activity_name);
				
			}
			
			
			
			
			if ("apply_key" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apply_key);
				
			}
			
			
			
			
			if ("card_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->card_flag); 
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("face_money" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->face_money); 
				
			}
			
			
			
			
			if ("use_stop_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->use_stop_time);
				
			}
			
			
			
			
			if ("use_effect_day" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->use_effect_day); 
				
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
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activity_flag');
		$xfer += $output->writeString($this->activity_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activity_name');
		$xfer += $output->writeString($this->activity_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('apply_key');
		$xfer += $output->writeString($this->apply_key);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('card_flag');
		$xfer += $output->writeI32($this->card_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total');
		$xfer += $output->writeI32($this->total);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('face_money');
		$xfer += $output->writeI32($this->face_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('use_stop_time');
		$xfer += $output->writeString($this->use_stop_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('use_effect_day');
		$xfer += $output->writeI32($this->use_effect_day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipcard;

class VipCardInfo {
	
	static $_TSPEC;
	public $card_code = null;
	public $face_money = null;
	public $valid_money = null;
	public $used_money = null;
	public $frozen_money = null;
	public $expired_money = null;
	public $start_time = null;
	public $stop_time = null;
	public $is_used = null;
	public $is_frozen = null;
	public $is_expired = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'card_code'
			),
			2 => array(
			'var' => 'face_money'
			),
			3 => array(
			'var' => 'valid_money'
			),
			4 => array(
			'var' => 'used_money'
			),
			5 => array(
			'var' => 'frozen_money'
			),
			6 => array(
			'var' => 'expired_money'
			),
			7 => array(
			'var' => 'start_time'
			),
			8 => array(
			'var' => 'stop_time'
			),
			9 => array(
			'var' => 'is_used'
			),
			10 => array(
			'var' => 'is_frozen'
			),
			11 => array(
			'var' => 'is_expired'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['card_code'])){
				
				$this->card_code = $vals['card_code'];
			}
			
			
			if (isset($vals['face_money'])){
				
				$this->face_money = $vals['face_money'];
			}
			
			
			if (isset($vals['valid_money'])){
				
				$this->valid_money = $vals['valid_money'];
			}
			
			
			if (isset($vals['used_money'])){
				
				$this->used_money = $vals['used_money'];
			}
			
			
			if (isset($vals['frozen_money'])){
				
				$this->frozen_money = $vals['frozen_money'];
			}
			
			
			if (isset($vals['expired_money'])){
				
				$this->expired_money = $vals['expired_money'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['stop_time'])){
				
				$this->stop_time = $vals['stop_time'];
			}
			
			
			if (isset($vals['is_used'])){
				
				$this->is_used = $vals['is_used'];
			}
			
			
			if (isset($vals['is_frozen'])){
				
				$this->is_frozen = $vals['is_frozen'];
			}
			
			
			if (isset($vals['is_expired'])){
				
				$this->is_expired = $vals['is_expired'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipCardInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("card_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->card_code);
				
			}
			
			
			
			
			if ("face_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->face_money);
				
			}
			
			
			
			
			if ("valid_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->valid_money);
				
			}
			
			
			
			
			if ("used_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->used_money);
				
			}
			
			
			
			
			if ("frozen_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->frozen_money);
				
			}
			
			
			
			
			if ("expired_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->expired_money);
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->start_time);
				
			}
			
			
			
			
			if ("stop_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->stop_time);
				
			}
			
			
			
			
			if ("is_used" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_used); 
				
			}
			
			
			
			
			if ("is_frozen" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_frozen); 
				
			}
			
			
			
			
			if ("is_expired" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_expired); 
				
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
		
		$xfer += $output->writeFieldBegin('card_code');
		$xfer += $output->writeString($this->card_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('face_money');
		$xfer += $output->writeDouble($this->face_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('valid_money');
		$xfer += $output->writeDouble($this->valid_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('used_money');
		$xfer += $output->writeDouble($this->used_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('frozen_money');
		$xfer += $output->writeDouble($this->frozen_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('expired_money');
		$xfer += $output->writeDouble($this->expired_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('start_time');
		$xfer += $output->writeString($this->start_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('stop_time');
		$xfer += $output->writeString($this->stop_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_used');
		$xfer += $output->writeI32($this->is_used);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_frozen');
		$xfer += $output->writeI32($this->is_frozen);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_expired');
		$xfer += $output->writeI32($this->is_expired);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
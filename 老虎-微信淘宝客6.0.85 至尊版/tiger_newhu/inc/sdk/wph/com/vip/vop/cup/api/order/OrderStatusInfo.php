<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\order;

class OrderStatusInfo {
	
	static $_TSPEC;
	public $order_sn = null;
	public $user_code = null;
	public $scenario_code = null;
	public $order_status = null;
	public $biz_update_time = null;
	public $update_time = null;
	public $extra_data = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'user_code'
			),
			3 => array(
			'var' => 'scenario_code'
			),
			4 => array(
			'var' => 'order_status'
			),
			5 => array(
			'var' => 'biz_update_time'
			),
			6 => array(
			'var' => 'update_time'
			),
			7 => array(
			'var' => 'extra_data'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['user_code'])){
				
				$this->user_code = $vals['user_code'];
			}
			
			
			if (isset($vals['scenario_code'])){
				
				$this->scenario_code = $vals['scenario_code'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['biz_update_time'])){
				
				$this->biz_update_time = $vals['biz_update_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['extra_data'])){
				
				$this->extra_data = $vals['extra_data'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderStatusInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("user_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_code);
				
			}
			
			
			
			
			if ("scenario_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scenario_code);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_status); 
				
			}
			
			
			
			
			if ("biz_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_update_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
			}
			
			
			
			
			if ("extra_data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extra_data);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_code !== null) {
			
			$xfer += $output->writeFieldBegin('user_code');
			$xfer += $output->writeString($this->user_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scenario_code !== null) {
			
			$xfer += $output->writeFieldBegin('scenario_code');
			$xfer += $output->writeString($this->scenario_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeI32($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->biz_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('biz_update_time');
			$xfer += $output->writeString($this->biz_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extra_data !== null) {
			
			$xfer += $output->writeFieldBegin('extra_data');
			$xfer += $output->writeString($this->extra_data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
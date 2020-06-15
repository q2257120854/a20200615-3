<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\aftersale;

class UpdateReturnRefundResultReq {
	
	static $_TSPEC;
	public $apply_id = null;
	public $order_sn = null;
	public $user_code = null;
	public $refund_money = null;
	public $seller_refund_money = null;
	public $refund_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apply_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'user_code'
			),
			4 => array(
			'var' => 'refund_money'
			),
			5 => array(
			'var' => 'seller_refund_money'
			),
			6 => array(
			'var' => 'refund_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apply_id'])){
				
				$this->apply_id = $vals['apply_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['user_code'])){
				
				$this->user_code = $vals['user_code'];
			}
			
			
			if (isset($vals['refund_money'])){
				
				$this->refund_money = $vals['refund_money'];
			}
			
			
			if (isset($vals['seller_refund_money'])){
				
				$this->seller_refund_money = $vals['seller_refund_money'];
			}
			
			
			if (isset($vals['refund_time'])){
				
				$this->refund_time = $vals['refund_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateReturnRefundResultReq';
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
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("user_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_code);
				
			}
			
			
			
			
			if ("refund_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_money);
				
			}
			
			
			
			
			if ("seller_refund_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seller_refund_money);
				
			}
			
			
			
			
			if ("refund_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_time);
				
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
		
		$xfer += $output->writeFieldBegin('apply_id');
		$xfer += $output->writeString($this->apply_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('user_code');
		$xfer += $output->writeString($this->user_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_money');
		$xfer += $output->writeString($this->refund_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('seller_refund_money');
		$xfer += $output->writeString($this->seller_refund_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refund_time');
		$xfer += $output->writeString($this->refund_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
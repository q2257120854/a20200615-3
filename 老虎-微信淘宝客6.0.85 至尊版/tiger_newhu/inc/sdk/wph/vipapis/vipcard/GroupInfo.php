<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipcard;

class GroupInfo {
	
	static $_TSPEC;
	public $id = null;
	public $activity_flag = null;
	public $activity_name = null;
	public $merchant_code = null;
	public $total = null;
	public $money = null;
	public $finance_flag = null;
	public $number_flag = null;
	public $cancel_flag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'activity_flag'
			),
			3 => array(
			'var' => 'activity_name'
			),
			4 => array(
			'var' => 'merchant_code'
			),
			5 => array(
			'var' => 'total'
			),
			6 => array(
			'var' => 'money'
			),
			7 => array(
			'var' => 'finance_flag'
			),
			8 => array(
			'var' => 'number_flag'
			),
			9 => array(
			'var' => 'cancel_flag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['activity_flag'])){
				
				$this->activity_flag = $vals['activity_flag'];
			}
			
			
			if (isset($vals['activity_name'])){
				
				$this->activity_name = $vals['activity_name'];
			}
			
			
			if (isset($vals['merchant_code'])){
				
				$this->merchant_code = $vals['merchant_code'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['finance_flag'])){
				
				$this->finance_flag = $vals['finance_flag'];
			}
			
			
			if (isset($vals['number_flag'])){
				
				$this->number_flag = $vals['number_flag'];
			}
			
			
			if (isset($vals['cancel_flag'])){
				
				$this->cancel_flag = $vals['cancel_flag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GroupInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->id); 
				
			}
			
			
			
			
			if ("activity_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activity_flag);
				
			}
			
			
			
			
			if ("activity_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activity_name);
				
			}
			
			
			
			
			if ("merchant_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchant_code);
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->money); 
				
			}
			
			
			
			
			if ("finance_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->finance_flag); 
				
			}
			
			
			
			
			if ("number_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->number_flag); 
				
			}
			
			
			
			
			if ("cancel_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cancel_flag); 
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI32($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activity_flag');
		$xfer += $output->writeString($this->activity_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('activity_name');
		$xfer += $output->writeString($this->activity_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('merchant_code');
		$xfer += $output->writeString($this->merchant_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total');
		$xfer += $output->writeI32($this->total);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('money');
		$xfer += $output->writeI32($this->money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('finance_flag');
		$xfer += $output->writeI32($this->finance_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('number_flag');
		$xfer += $output->writeI32($this->number_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cancel_flag');
		$xfer += $output->writeI32($this->cancel_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class OrderOptLog {
	
	static $_TSPEC;
	public $status = null;
	public $account = null;
	public $optTime = null;
	public $operate = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'status'
			),
			2 => array(
			'var' => 'account'
			),
			3 => array(
			'var' => 'optTime'
			),
			4 => array(
			'var' => 'operate'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['optTime'])){
				
				$this->optTime = $vals['optTime'];
			}
			
			
			if (isset($vals['operate'])){
				
				$this->operate = $vals['operate'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderOptLog';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("account" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->account);
				
			}
			
			
			
			
			if ("optTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->optTime); 
				
			}
			
			
			
			
			if ("operate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operate);
				
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
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('account');
		$xfer += $output->writeString($this->account);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('optTime');
		$xfer += $output->writeI64($this->optTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operate');
		$xfer += $output->writeString($this->operate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
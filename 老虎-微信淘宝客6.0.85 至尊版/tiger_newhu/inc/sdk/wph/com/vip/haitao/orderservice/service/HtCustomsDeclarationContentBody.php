<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class HtCustomsDeclarationContentBody {
	
	static $_TSPEC;
	public $orderSn = null;
	public $status = null;
	public $resultInfo = null;
	public $transportNo = null;
	public $transportName = null;
	public $transportCode = null;
	public $iventoryNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'resultInfo'
			),
			4 => array(
			'var' => 'transportNo'
			),
			5 => array(
			'var' => 'transportName'
			),
			6 => array(
			'var' => 'transportCode'
			),
			7 => array(
			'var' => 'iventoryNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['resultInfo'])){
				
				$this->resultInfo = $vals['resultInfo'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['transportName'])){
				
				$this->transportName = $vals['transportName'];
			}
			
			
			if (isset($vals['transportCode'])){
				
				$this->transportCode = $vals['transportCode'];
			}
			
			
			if (isset($vals['iventoryNo'])){
				
				$this->iventoryNo = $vals['iventoryNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtCustomsDeclarationContentBody';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("resultInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultInfo);
				
			}
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("transportName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportName);
				
			}
			
			
			
			
			if ("transportCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportCode);
				
			}
			
			
			
			
			if ("iventoryNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->iventoryNo);
				
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
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resultInfo');
		$xfer += $output->writeString($this->resultInfo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transportNo !== null) {
			
			$xfer += $output->writeFieldBegin('transportNo');
			$xfer += $output->writeString($this->transportNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportName !== null) {
			
			$xfer += $output->writeFieldBegin('transportName');
			$xfer += $output->writeString($this->transportName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportCode !== null) {
			
			$xfer += $output->writeFieldBegin('transportCode');
			$xfer += $output->writeString($this->transportCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->iventoryNo !== null) {
			
			$xfer += $output->writeFieldBegin('iventoryNo');
			$xfer += $output->writeString($this->iventoryNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
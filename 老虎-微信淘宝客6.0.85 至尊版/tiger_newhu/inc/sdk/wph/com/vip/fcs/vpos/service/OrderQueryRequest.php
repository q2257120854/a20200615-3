<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service;

class OrderQueryRequest {
	
	static $_TSPEC;
	public $updateTimeBegin = null;
	public $updateTimeEnd = null;
	public $pageIndex = null;
	public $storeCode = null;
	public $orderSn = null;
	public $saleType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateTimeBegin'
			),
			2 => array(
			'var' => 'updateTimeEnd'
			),
			3 => array(
			'var' => 'pageIndex'
			),
			4 => array(
			'var' => 'storeCode'
			),
			5 => array(
			'var' => 'orderSn'
			),
			6 => array(
			'var' => 'saleType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateTimeBegin'])){
				
				$this->updateTimeBegin = $vals['updateTimeBegin'];
			}
			
			
			if (isset($vals['updateTimeEnd'])){
				
				$this->updateTimeEnd = $vals['updateTimeEnd'];
			}
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['saleType'])){
				
				$this->saleType = $vals['saleType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderQueryRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("updateTimeBegin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTimeBegin); 
				
			}
			
			
			
			
			if ("updateTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTimeEnd); 
				
			}
			
			
			
			
			if ("pageIndex" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageIndex); 
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("saleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleType);
				
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
		
		$xfer += $output->writeFieldBegin('updateTimeBegin');
		$xfer += $output->writeI64($this->updateTimeBegin);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('updateTimeEnd');
		$xfer += $output->writeI64($this->updateTimeEnd);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageIndex');
		$xfer += $output->writeI32($this->pageIndex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('saleType');
		$xfer += $output->writeString($this->saleType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
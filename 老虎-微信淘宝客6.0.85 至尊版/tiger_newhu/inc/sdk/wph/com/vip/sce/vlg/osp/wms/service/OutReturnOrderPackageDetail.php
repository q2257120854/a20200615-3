<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutReturnOrderPackageDetail {
	
	static $_TSPEC;
	public $orderSn = null;
	public $transportNo = null;
	public $custBoxNo = null;
	public $receivingType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderSn'
			),
			2 => array(
			'var' => 'transportNo'
			),
			3 => array(
			'var' => 'custBoxNo'
			),
			4 => array(
			'var' => 'receivingType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['transportNo'])){
				
				$this->transportNo = $vals['transportNo'];
			}
			
			
			if (isset($vals['custBoxNo'])){
				
				$this->custBoxNo = $vals['custBoxNo'];
			}
			
			
			if (isset($vals['receivingType'])){
				
				$this->receivingType = $vals['receivingType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutReturnOrderPackageDetail';
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
			
			
			
			
			if ("transportNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNo);
				
			}
			
			
			
			
			if ("custBoxNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->custBoxNo);
				
			}
			
			
			
			
			if ("receivingType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->receivingType); 
				
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
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('transportNo');
		$xfer += $output->writeString($this->transportNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->custBoxNo !== null) {
			
			$xfer += $output->writeFieldBegin('custBoxNo');
			$xfer += $output->writeString($this->custBoxNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('receivingType');
		$xfer += $output->writeI32($this->receivingType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
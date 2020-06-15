<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\lpc\service\entity;

class ExplainedBarcodesModel {
	
	static $_TSPEC;
	public $serialNo = null;
	public $orderSn = null;
	public $barCode = null;
	public $toBeExplainedBarcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serialNo'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'barCode'
			),
			4 => array(
			'var' => 'toBeExplainedBarcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serialNo'])){
				
				$this->serialNo = $vals['serialNo'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['barCode'])){
				
				$this->barCode = $vals['barCode'];
			}
			
			
			if (isset($vals['toBeExplainedBarcode'])){
				
				$this->toBeExplainedBarcode = $vals['toBeExplainedBarcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExplainedBarcodesModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serialNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serialNo);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("barCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barCode);
				
			}
			
			
			
			
			if ("toBeExplainedBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->toBeExplainedBarcode);
				
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
		
		$xfer += $output->writeFieldBegin('serialNo');
		$xfer += $output->writeString($this->serialNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barCode');
		$xfer += $output->writeString($this->barCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('toBeExplainedBarcode');
		$xfer += $output->writeString($this->toBeExplainedBarcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
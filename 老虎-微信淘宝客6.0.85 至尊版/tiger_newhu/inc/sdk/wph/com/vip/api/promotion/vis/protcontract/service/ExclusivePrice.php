<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ExclusivePrice {
	
	static $_TSPEC;
	public $mainId = null;
	public $activityType = null;
	public $discountContent = null;
	public $exclusivePriceDiscounts = null;
	public $vendorBearInfo = null;
	public $actNo = null;
	public $actName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			2 => array(
			'var' => 'activityType'
			),
			3 => array(
			'var' => 'discountContent'
			),
			4 => array(
			'var' => 'exclusivePriceDiscounts'
			),
			5 => array(
			'var' => 'vendorBearInfo'
			),
			6 => array(
			'var' => 'actNo'
			),
			7 => array(
			'var' => 'actName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
			if (isset($vals['activityType'])){
				
				$this->activityType = $vals['activityType'];
			}
			
			
			if (isset($vals['discountContent'])){
				
				$this->discountContent = $vals['discountContent'];
			}
			
			
			if (isset($vals['exclusivePriceDiscounts'])){
				
				$this->exclusivePriceDiscounts = $vals['exclusivePriceDiscounts'];
			}
			
			
			if (isset($vals['vendorBearInfo'])){
				
				$this->vendorBearInfo = $vals['vendorBearInfo'];
			}
			
			
			if (isset($vals['actNo'])){
				
				$this->actNo = $vals['actNo'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExclusivePrice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mainId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mainId); 
				
			}
			
			
			
			
			if ("activityType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityType); 
				
			}
			
			
			
			
			if ("discountContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountContent);
				
			}
			
			
			
			
			if ("exclusivePriceDiscounts" == $schemeField){
				
				$needSkip = false;
				
				$this->exclusivePriceDiscounts = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\common\NameValueItem();
						$elem0->read($input);
						
						$this->exclusivePriceDiscounts[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vendorBearInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorBearInfo = new \com\vip\api\promotion\vis\protcontract\service\VendorBearInfo();
				$this->vendorBearInfo->read($input);
				
			}
			
			
			
			
			if ("actNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actNo);
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
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
		
		if($this->mainId !== null) {
			
			$xfer += $output->writeFieldBegin('mainId');
			$xfer += $output->writeI64($this->mainId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityType !== null) {
			
			$xfer += $output->writeFieldBegin('activityType');
			$xfer += $output->writeByte($this->activityType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountContent !== null) {
			
			$xfer += $output->writeFieldBegin('discountContent');
			$xfer += $output->writeString($this->discountContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exclusivePriceDiscounts !== null) {
			
			$xfer += $output->writeFieldBegin('exclusivePriceDiscounts');
			
			if (!is_array($this->exclusivePriceDiscounts)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->exclusivePriceDiscounts as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorBearInfo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorBearInfo');
			
			if (!is_object($this->vendorBearInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->vendorBearInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actNo !== null) {
			
			$xfer += $output->writeFieldBegin('actNo');
			$xfer += $output->writeString($this->actNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actName !== null) {
			
			$xfer += $output->writeFieldBegin('actName');
			$xfer += $output->writeString($this->actName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
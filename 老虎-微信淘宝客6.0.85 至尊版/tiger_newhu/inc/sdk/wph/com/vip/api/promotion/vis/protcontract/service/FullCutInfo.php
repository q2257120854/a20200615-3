<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class FullCutInfo {
	
	static $_TSPEC;
	public $mainId = null;
	public $activityType = null;
	public $activityChildType = null;
	public $isTop = null;
	public $buyCuts = null;
	public $discountContent = null;
	public $spellPersonNum = null;
	public $spellType = null;
	public $spellPreferentialValue = null;
	public $topNum = null;
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
			'var' => 'activityChildType'
			),
			4 => array(
			'var' => 'isTop'
			),
			5 => array(
			'var' => 'buyCuts'
			),
			6 => array(
			'var' => 'discountContent'
			),
			7 => array(
			'var' => 'spellPersonNum'
			),
			8 => array(
			'var' => 'spellType'
			),
			9 => array(
			'var' => 'spellPreferentialValue'
			),
			10 => array(
			'var' => 'topNum'
			),
			11 => array(
			'var' => 'vendorBearInfo'
			),
			12 => array(
			'var' => 'actNo'
			),
			13 => array(
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
			
			
			if (isset($vals['activityChildType'])){
				
				$this->activityChildType = $vals['activityChildType'];
			}
			
			
			if (isset($vals['isTop'])){
				
				$this->isTop = $vals['isTop'];
			}
			
			
			if (isset($vals['buyCuts'])){
				
				$this->buyCuts = $vals['buyCuts'];
			}
			
			
			if (isset($vals['discountContent'])){
				
				$this->discountContent = $vals['discountContent'];
			}
			
			
			if (isset($vals['spellPersonNum'])){
				
				$this->spellPersonNum = $vals['spellPersonNum'];
			}
			
			
			if (isset($vals['spellType'])){
				
				$this->spellType = $vals['spellType'];
			}
			
			
			if (isset($vals['spellPreferentialValue'])){
				
				$this->spellPreferentialValue = $vals['spellPreferentialValue'];
			}
			
			
			if (isset($vals['topNum'])){
				
				$this->topNum = $vals['topNum'];
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
		
		return 'FullCutInfo';
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
			
			
			
			
			if ("activityChildType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityChildType); 
				
			}
			
			
			
			
			if ("isTop" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isTop); 
				
			}
			
			
			
			
			if ("buyCuts" == $schemeField){
				
				$needSkip = false;
				
				$this->buyCuts = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\protcontract\service\BuyAndCutInfo();
						$elem0->read($input);
						
						$this->buyCuts[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("discountContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountContent);
				
			}
			
			
			
			
			if ("spellPersonNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->spellPersonNum); 
				
			}
			
			
			
			
			if ("spellType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->spellType); 
				
			}
			
			
			
			
			if ("spellPreferentialValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spellPreferentialValue);
				
			}
			
			
			
			
			if ("topNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->topNum); 
				
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
		
		
		if($this->activityChildType !== null) {
			
			$xfer += $output->writeFieldBegin('activityChildType');
			$xfer += $output->writeByte($this->activityChildType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isTop !== null) {
			
			$xfer += $output->writeFieldBegin('isTop');
			$xfer += $output->writeByte($this->isTop);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyCuts !== null) {
			
			$xfer += $output->writeFieldBegin('buyCuts');
			
			if (!is_array($this->buyCuts)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->buyCuts as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountContent !== null) {
			
			$xfer += $output->writeFieldBegin('discountContent');
			$xfer += $output->writeString($this->discountContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellPersonNum !== null) {
			
			$xfer += $output->writeFieldBegin('spellPersonNum');
			$xfer += $output->writeI32($this->spellPersonNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellType !== null) {
			
			$xfer += $output->writeFieldBegin('spellType');
			$xfer += $output->writeByte($this->spellType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spellPreferentialValue !== null) {
			
			$xfer += $output->writeFieldBegin('spellPreferentialValue');
			$xfer += $output->writeString($this->spellPreferentialValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->topNum !== null) {
			
			$xfer += $output->writeFieldBegin('topNum');
			$xfer += $output->writeI32($this->topNum);
			
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
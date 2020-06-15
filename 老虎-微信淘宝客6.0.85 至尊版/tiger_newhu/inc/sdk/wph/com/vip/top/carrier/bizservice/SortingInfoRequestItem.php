<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class SortingInfoRequestItem {
	
	static $_TSPEC;
	public $province = null;
	public $city = null;
	public $area = null;
	public $town = null;
	public $address = null;
	public $preOutTime = null;
	public $remark = null;
	public $referenceNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'province'
			),
			2 => array(
			'var' => 'city'
			),
			3 => array(
			'var' => 'area'
			),
			4 => array(
			'var' => 'town'
			),
			5 => array(
			'var' => 'address'
			),
			6 => array(
			'var' => 'preOutTime'
			),
			7 => array(
			'var' => 'remark'
			),
			8 => array(
			'var' => 'referenceNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['area'])){
				
				$this->area = $vals['area'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['preOutTime'])){
				
				$this->preOutTime = $vals['preOutTime'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['referenceNo'])){
				
				$this->referenceNo = $vals['referenceNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SortingInfoRequestItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("area" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("preOutTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preOutTime);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("referenceNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceNo);
				
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
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->area !== null) {
			
			$xfer += $output->writeFieldBegin('area');
			$xfer += $output->writeString($this->area);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town !== null) {
			
			$xfer += $output->writeFieldBegin('town');
			$xfer += $output->writeString($this->town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preOutTime !== null) {
			
			$xfer += $output->writeFieldBegin('preOutTime');
			$xfer += $output->writeString($this->preOutTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceNo !== null) {
			
			$xfer += $output->writeFieldBegin('referenceNo');
			$xfer += $output->writeString($this->referenceNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
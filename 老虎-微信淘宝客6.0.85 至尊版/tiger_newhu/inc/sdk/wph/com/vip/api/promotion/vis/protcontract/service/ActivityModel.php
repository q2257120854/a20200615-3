<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ActivityModel {
	
	static $_TSPEC;
	public $onlineStarttime = null;
	public $onlineEndtime = null;
	public $commodityList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'onlineStarttime'
			),
			2 => array(
			'var' => 'onlineEndtime'
			),
			3 => array(
			'var' => 'commodityList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['onlineStarttime'])){
				
				$this->onlineStarttime = $vals['onlineStarttime'];
			}
			
			
			if (isset($vals['onlineEndtime'])){
				
				$this->onlineEndtime = $vals['onlineEndtime'];
			}
			
			
			if (isset($vals['commodityList'])){
				
				$this->commodityList = $vals['commodityList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActivityModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("onlineStarttime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->onlineStarttime);
				
			}
			
			
			
			
			if ("onlineEndtime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->onlineEndtime);
				
			}
			
			
			
			
			if ("commodityList" == $schemeField){
				
				$needSkip = false;
				
				$this->commodityList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\api\promotion\vis\protcontract\service\CommodityModel();
						$elem0->read($input);
						
						$this->commodityList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->onlineStarttime !== null) {
			
			$xfer += $output->writeFieldBegin('onlineStarttime');
			$xfer += $output->writeString($this->onlineStarttime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->onlineEndtime !== null) {
			
			$xfer += $output->writeFieldBegin('onlineEndtime');
			$xfer += $output->writeString($this->onlineEndtime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commodityList !== null) {
			
			$xfer += $output->writeFieldBegin('commodityList');
			
			if (!is_array($this->commodityList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->commodityList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class QueryActParam {
	
	static $_TSPEC;
	public $activityType = null;
	public $vendorCode = null;
	public $queryType = null;
	public $q = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityType'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'queryType'
			),
			4 => array(
			'var' => 'q'
			),
			5 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityType'])){
				
				$this->activityType = $vals['activityType'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['queryType'])){
				
				$this->queryType = $vals['queryType'];
			}
			
			
			if (isset($vals['q'])){
				
				$this->q = $vals['q'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryActParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("activityType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityType); 
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("queryType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->queryType); 
				
			}
			
			
			
			
			if ("q" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->q);
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
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
		
		$xfer += $output->writeFieldBegin('activityType');
		$xfer += $output->writeByte($this->activityType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('queryType');
		$xfer += $output->writeByte($this->queryType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('q');
		$xfer += $output->writeString($this->q);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
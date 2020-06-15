<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\closePo\service;

class PoCloseForWmsParam {
	
	static $_TSPEC;
	public $maxId = null;
	public $count = null;
	public $saleAreaList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'maxId'
			),
			2 => array(
			'var' => 'count'
			),
			3 => array(
			'var' => 'saleAreaList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['maxId'])){
				
				$this->maxId = $vals['maxId'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['saleAreaList'])){
				
				$this->saleAreaList = $vals['saleAreaList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoCloseForWmsParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("maxId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->maxId); 
				
			}
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->count); 
				
			}
			
			
			
			
			if ("saleAreaList" == $schemeField){
				
				$needSkip = false;
				
				$this->saleAreaList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->saleAreaList[$_size0++] = $elem0;
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
		
		if($this->maxId !== null) {
			
			$xfer += $output->writeFieldBegin('maxId');
			$xfer += $output->writeI64($this->maxId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI64($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleAreaList !== null) {
			
			$xfer += $output->writeFieldBegin('saleAreaList');
			
			if (!is_array($this->saleAreaList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->saleAreaList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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
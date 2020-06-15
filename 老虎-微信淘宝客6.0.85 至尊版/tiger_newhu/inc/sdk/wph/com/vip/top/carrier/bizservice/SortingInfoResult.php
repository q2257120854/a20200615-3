<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class SortingInfoResult {
	
	static $_TSPEC;
	public $batchno = null;
	public $totalCount = null;
	public $successCount = null;
	public $failCount = null;
	public $sortingInfoResponseItems = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batchno'
			),
			2 => array(
			'var' => 'totalCount'
			),
			3 => array(
			'var' => 'successCount'
			),
			4 => array(
			'var' => 'failCount'
			),
			5 => array(
			'var' => 'sortingInfoResponseItems'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batchno'])){
				
				$this->batchno = $vals['batchno'];
			}
			
			
			if (isset($vals['totalCount'])){
				
				$this->totalCount = $vals['totalCount'];
			}
			
			
			if (isset($vals['successCount'])){
				
				$this->successCount = $vals['successCount'];
			}
			
			
			if (isset($vals['failCount'])){
				
				$this->failCount = $vals['failCount'];
			}
			
			
			if (isset($vals['sortingInfoResponseItems'])){
				
				$this->sortingInfoResponseItems = $vals['sortingInfoResponseItems'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SortingInfoResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batchno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchno);
				
			}
			
			
			
			
			if ("totalCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCount); 
				
			}
			
			
			
			
			if ("successCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->successCount); 
				
			}
			
			
			
			
			if ("failCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->failCount); 
				
			}
			
			
			
			
			if ("sortingInfoResponseItems" == $schemeField){
				
				$needSkip = false;
				
				$this->sortingInfoResponseItems = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\carrier\bizservice\SortingInfoResponseItem();
						$elem0->read($input);
						
						$this->sortingInfoResponseItems[$_size0++] = $elem0;
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
		
		if($this->batchno !== null) {
			
			$xfer += $output->writeFieldBegin('batchno');
			$xfer += $output->writeString($this->batchno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalCount !== null) {
			
			$xfer += $output->writeFieldBegin('totalCount');
			$xfer += $output->writeI32($this->totalCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->successCount !== null) {
			
			$xfer += $output->writeFieldBegin('successCount');
			$xfer += $output->writeI32($this->successCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failCount !== null) {
			
			$xfer += $output->writeFieldBegin('failCount');
			$xfer += $output->writeI32($this->failCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sortingInfoResponseItems !== null) {
			
			$xfer += $output->writeFieldBegin('sortingInfoResponseItems');
			
			if (!is_array($this->sortingInfoResponseItems)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sortingInfoResponseItems as $iter0){
				
				
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
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\common\api;

class Pagination {
	
	static $_TSPEC;
	public $page = null;
	public $size = null;
	public $total = null;
	public $maxId = null;
	public $hasNext = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page'
			),
			2 => array(
			'var' => 'size'
			),
			3 => array(
			'var' => 'total'
			),
			4 => array(
			'var' => 'maxId'
			),
			5 => array(
			'var' => 'hasNext'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['maxId'])){
				
				$this->maxId = $vals['maxId'];
			}
			
			
			if (isset($vals['hasNext'])){
				
				$this->hasNext = $vals['hasNext'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Pagination';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size); 
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("maxId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->maxId); 
				
			}
			
			
			
			
			if ("hasNext" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasNext);
				
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
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeI32($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxId !== null) {
			
			$xfer += $output->writeFieldBegin('maxId');
			$xfer += $output->writeI64($this->maxId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hasNext !== null) {
			
			$xfer += $output->writeFieldBegin('hasNext');
			$xfer += $output->writeBool($this->hasNext);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
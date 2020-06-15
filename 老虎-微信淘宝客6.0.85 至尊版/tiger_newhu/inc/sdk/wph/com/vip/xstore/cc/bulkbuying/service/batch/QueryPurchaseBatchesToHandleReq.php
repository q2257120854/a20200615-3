<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service\batch;

class QueryPurchaseBatchesToHandleReq {
	
	static $_TSPEC;
	public $createTimeBegin = null;
	public $createTimeEnd = null;
	public $limt = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'createTimeBegin'
			),
			2 => array(
			'var' => 'createTimeEnd'
			),
			3 => array(
			'var' => 'limt'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['createTimeBegin'])){
				
				$this->createTimeBegin = $vals['createTimeBegin'];
			}
			
			
			if (isset($vals['createTimeEnd'])){
				
				$this->createTimeEnd = $vals['createTimeEnd'];
			}
			
			
			if (isset($vals['limt'])){
				
				$this->limt = $vals['limt'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryPurchaseBatchesToHandleReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("createTimeBegin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTimeBegin);
				
			}
			
			
			
			
			if ("createTimeEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTimeEnd);
				
			}
			
			
			
			
			if ("limt" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limt); 
				
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
		
		if($this->createTimeBegin !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeBegin');
			$xfer += $output->writeI64($this->createTimeBegin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTimeEnd !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeEnd');
			$xfer += $output->writeI64($this->createTimeEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limt !== null) {
			
			$xfer += $output->writeFieldBegin('limt');
			$xfer += $output->writeI32($this->limt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
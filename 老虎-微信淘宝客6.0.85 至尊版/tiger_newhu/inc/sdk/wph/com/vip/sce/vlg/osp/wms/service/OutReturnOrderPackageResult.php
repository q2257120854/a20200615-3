<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutReturnOrderPackageResult {
	
	static $_TSPEC;
	public $vlgID = null;
	public $batchNo = null;
	public $packageNo = null;
	public $receivingTime = null;
	public $handleType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vlgID'
			),
			2 => array(
			'var' => 'batchNo'
			),
			3 => array(
			'var' => 'packageNo'
			),
			4 => array(
			'var' => 'receivingTime'
			),
			5 => array(
			'var' => 'handleType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vlgID'])){
				
				$this->vlgID = $vals['vlgID'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['packageNo'])){
				
				$this->packageNo = $vals['packageNo'];
			}
			
			
			if (isset($vals['receivingTime'])){
				
				$this->receivingTime = $vals['receivingTime'];
			}
			
			
			if (isset($vals['handleType'])){
				
				$this->handleType = $vals['handleType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutReturnOrderPackageResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vlgID" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vlgID);
				
			}
			
			
			
			
			if ("batchNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNo);
				
			}
			
			
			
			
			if ("packageNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->packageNo);
				
			}
			
			
			
			
			if ("receivingTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receivingTime);
				
			}
			
			
			
			
			if ("handleType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handleType);
				
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
		
		$xfer += $output->writeFieldBegin('vlgID');
		$xfer += $output->writeString($this->vlgID);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchNo');
		$xfer += $output->writeString($this->batchNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('packageNo');
		$xfer += $output->writeString($this->packageNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receivingTime');
		$xfer += $output->writeString($this->receivingTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('handleType');
		$xfer += $output->writeString($this->handleType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
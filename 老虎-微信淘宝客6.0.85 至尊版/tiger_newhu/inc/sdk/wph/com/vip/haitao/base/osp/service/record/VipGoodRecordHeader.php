<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\base\osp\service\record;

class VipGoodRecordHeader {
	
	static $_TSPEC;
	public $recordType = null;
	public $recordName = null;
	public $recordNo = null;
	public $recordRule = null;
	public $modifyFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'recordType'
			),
			2 => array(
			'var' => 'recordName'
			),
			3 => array(
			'var' => 'recordNo'
			),
			4 => array(
			'var' => 'recordRule'
			),
			5 => array(
			'var' => 'modifyFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['recordType'])){
				
				$this->recordType = $vals['recordType'];
			}
			
			
			if (isset($vals['recordName'])){
				
				$this->recordName = $vals['recordName'];
			}
			
			
			if (isset($vals['recordNo'])){
				
				$this->recordNo = $vals['recordNo'];
			}
			
			
			if (isset($vals['recordRule'])){
				
				$this->recordRule = $vals['recordRule'];
			}
			
			
			if (isset($vals['modifyFlag'])){
				
				$this->modifyFlag = $vals['modifyFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipGoodRecordHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("recordType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordType);
				
			}
			
			
			
			
			if ("recordName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordName);
				
			}
			
			
			
			
			if ("recordNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordNo);
				
			}
			
			
			
			
			if ("recordRule" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recordRule);
				
			}
			
			
			
			
			if ("modifyFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->modifyFlag); 
				
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
		
		if($this->recordType !== null) {
			
			$xfer += $output->writeFieldBegin('recordType');
			$xfer += $output->writeString($this->recordType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordName !== null) {
			
			$xfer += $output->writeFieldBegin('recordName');
			$xfer += $output->writeString($this->recordName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordNo !== null) {
			
			$xfer += $output->writeFieldBegin('recordNo');
			$xfer += $output->writeString($this->recordNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recordRule !== null) {
			
			$xfer += $output->writeFieldBegin('recordRule');
			$xfer += $output->writeString($this->recordRule);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modifyFlag !== null) {
			
			$xfer += $output->writeFieldBegin('modifyFlag');
			$xfer += $output->writeI32($this->modifyFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
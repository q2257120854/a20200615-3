<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractAuditingLogModel {
	
	static $_TSPEC;
	public $mainId = null;
	public $status = null;
	public $auditdesc = null;
	public $remark = null;
	public $dataAreaName = null;
	public $userNickName = null;
	public $updateTime = null;
	public $createTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			2 => array(
			'var' => 'status'
			),
			3 => array(
			'var' => 'auditdesc'
			),
			4 => array(
			'var' => 'remark'
			),
			5 => array(
			'var' => 'dataAreaName'
			),
			6 => array(
			'var' => 'userNickName'
			),
			7 => array(
			'var' => 'updateTime'
			),
			8 => array(
			'var' => 'createTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['auditdesc'])){
				
				$this->auditdesc = $vals['auditdesc'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['dataAreaName'])){
				
				$this->dataAreaName = $vals['dataAreaName'];
			}
			
			
			if (isset($vals['userNickName'])){
				
				$this->userNickName = $vals['userNickName'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractAuditingLogModel';
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
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("auditdesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditdesc);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("dataAreaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataAreaName);
				
			}
			
			
			
			
			if ("userNickName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userNickName);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
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
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditdesc !== null) {
			
			$xfer += $output->writeFieldBegin('auditdesc');
			$xfer += $output->writeString($this->auditdesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataAreaName !== null) {
			
			$xfer += $output->writeFieldBegin('dataAreaName');
			$xfer += $output->writeString($this->dataAreaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userNickName !== null) {
			
			$xfer += $output->writeFieldBegin('userNickName');
			$xfer += $output->writeString($this->userNickName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\common;

class ResultModel {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $doNextStep = null;
	public $fid = null;
	public $errorMsg = null;
	public $totalCount = null;
	public $successCount = null;
	public $failCount = null;
	public $noticeMsgList = null;
	public $errorType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'doNextStep'
			),
			4 => array(
			'var' => 'fid'
			),
			5 => array(
			'var' => 'errorMsg'
			),
			6 => array(
			'var' => 'totalCount'
			),
			7 => array(
			'var' => 'successCount'
			),
			8 => array(
			'var' => 'failCount'
			),
			9 => array(
			'var' => 'noticeMsgList'
			),
			10 => array(
			'var' => 'errorType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['doNextStep'])){
				
				$this->doNextStep = $vals['doNextStep'];
			}
			
			
			if (isset($vals['fid'])){
				
				$this->fid = $vals['fid'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
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
			
			
			if (isset($vals['noticeMsgList'])){
				
				$this->noticeMsgList = $vals['noticeMsgList'];
			}
			
			
			if (isset($vals['errorType'])){
				
				$this->errorType = $vals['errorType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ResultModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("doNextStep" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->doNextStep);
				
			}
			
			
			
			
			if ("fid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fid);
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				
				$this->errorMsg = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->errorMsg[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
			
			
			
			
			if ("noticeMsgList" == $schemeField){
				
				$needSkip = false;
				
				$this->noticeMsgList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->noticeMsgList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("errorType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorType);
				
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
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeI32($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('msg');
		$xfer += $output->writeString($this->msg);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->doNextStep !== null) {
			
			$xfer += $output->writeFieldBegin('doNextStep');
			$xfer += $output->writeBool($this->doNextStep);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fid !== null) {
			
			$xfer += $output->writeFieldBegin('fid');
			$xfer += $output->writeString($this->fid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			
			if (!is_array($this->errorMsg)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->errorMsg as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
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
		
		
		if($this->noticeMsgList !== null) {
			
			$xfer += $output->writeFieldBegin('noticeMsgList');
			
			if (!is_array($this->noticeMsgList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->noticeMsgList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorType !== null) {
			
			$xfer += $output->writeFieldBegin('errorType');
			$xfer += $output->writeString($this->errorType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
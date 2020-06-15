<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class InvTransDetailRespItem {
	
	static $_TSPEC;
	public $code = null;
	public $msg = null;
	public $count = null;
	public $invTransDetailReqItem = null;
	public $invTransDetails = null;
	
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
			'var' => 'count'
			),
			50 => array(
			'var' => 'invTransDetailReqItem'
			),
			51 => array(
			'var' => 'invTransDetails'
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
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['invTransDetailReqItem'])){
				
				$this->invTransDetailReqItem = $vals['invTransDetailReqItem'];
			}
			
			
			if (isset($vals['invTransDetails'])){
				
				$this->invTransDetails = $vals['invTransDetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InvTransDetailRespItem';
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
			
			
			
			
			if ("count" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->count); 
				
			}
			
			
			
			
			if ("invTransDetailReqItem" == $schemeField){
				
				$needSkip = false;
				
				$this->invTransDetailReqItem = new \com\vip\fcs\ap\service\InvTransDetailReqItem();
				$this->invTransDetailReqItem->read($input);
				
			}
			
			
			
			
			if ("invTransDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->invTransDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\ap\service\InvTransDetail();
						$elem0->read($input);
						
						$this->invTransDetails[$_size0++] = $elem0;
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeI32($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->count !== null) {
			
			$xfer += $output->writeFieldBegin('count');
			$xfer += $output->writeI64($this->count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invTransDetailReqItem !== null) {
			
			$xfer += $output->writeFieldBegin('invTransDetailReqItem');
			
			if (!is_object($this->invTransDetailReqItem)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->invTransDetailReqItem->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invTransDetails !== null) {
			
			$xfer += $output->writeFieldBegin('invTransDetails');
			
			if (!is_array($this->invTransDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->invTransDetails as $iter0){
				
				
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
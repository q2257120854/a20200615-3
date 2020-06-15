<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\base\osp\service\record;

class VipGoodRecordResponse {
	
	static $_TSPEC;
	public $respCode = null;
	public $msg = null;
	public $dataList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'respCode'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'dataList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['respCode'])){
				
				$this->respCode = $vals['respCode'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['dataList'])){
				
				$this->dataList = $vals['dataList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipGoodRecordResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("respCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->respCode);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("dataList" == $schemeField){
				
				$needSkip = false;
				
				$this->dataList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\haitao\base\osp\service\record\VipGoodRecordResult();
						$elem0->read($input);
						
						$this->dataList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('respCode');
		$xfer += $output->writeString($this->respCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('msg');
		$xfer += $output->writeString($this->msg);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->dataList !== null) {
			
			$xfer += $output->writeFieldBegin('dataList');
			
			if (!is_array($this->dataList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->dataList as $iter0){
				
				
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
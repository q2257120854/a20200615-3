<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class SubLadingBillNumberVo {
	
	static $_TSPEC;
	public $subLadingBillNumber = null;
	public $weight = null;
	public $batchNolist = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'subLadingBillNumber'
			),
			2 => array(
			'var' => 'weight'
			),
			3 => array(
			'var' => 'batchNolist'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['subLadingBillNumber'])){
				
				$this->subLadingBillNumber = $vals['subLadingBillNumber'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['batchNolist'])){
				
				$this->batchNolist = $vals['batchNolist'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubLadingBillNumberVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("subLadingBillNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subLadingBillNumber);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("batchNolist" == $schemeField){
				
				$needSkip = false;
				
				$this->batchNolist = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\haitao\orderservice\service\BatchNoVo();
						$elem0->read($input);
						
						$this->batchNolist[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('subLadingBillNumber');
		$xfer += $output->writeString($this->subLadingBillNumber);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNolist !== null) {
			
			$xfer += $output->writeFieldBegin('batchNolist');
			
			if (!is_array($this->batchNolist)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->batchNolist as $iter0){
				
				
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
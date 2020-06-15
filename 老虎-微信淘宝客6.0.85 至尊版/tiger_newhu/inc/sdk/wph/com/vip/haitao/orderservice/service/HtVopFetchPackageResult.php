<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\orderservice\service;

class HtVopFetchPackageResult {
	
	static $_TSPEC;
	public $head = null;
	public $interBatchNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'head'
			),
			2 => array(
			'var' => 'interBatchNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['head'])){
				
				$this->head = $vals['head'];
			}
			
			
			if (isset($vals['interBatchNos'])){
				
				$this->interBatchNos = $vals['interBatchNos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtVopFetchPackageResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("head" == $schemeField){
				
				$needSkip = false;
				
				$this->head = new \com\vip\haitao\orderservice\service\Head();
				$this->head->read($input);
				
			}
			
			
			
			
			if ("interBatchNos" == $schemeField){
				
				$needSkip = false;
				
				$this->interBatchNos = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\haitao\orderservice\service\ForwordToHtsOrderVo();
						$elem1->read($input);
						
						$this->interBatchNos[$_size1++] = $elem1;
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
		
		if($this->head !== null) {
			
			$xfer += $output->writeFieldBegin('head');
			
			if (!is_object($this->head)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->head->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->interBatchNos !== null) {
			
			$xfer += $output->writeFieldBegin('interBatchNos');
			
			if (!is_array($this->interBatchNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->interBatchNos as $iter0){
				
				
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
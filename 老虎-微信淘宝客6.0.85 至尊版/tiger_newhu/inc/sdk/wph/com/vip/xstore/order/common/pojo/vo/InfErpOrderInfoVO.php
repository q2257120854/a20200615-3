<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfErpOrderInfoVO {
	
	static $_TSPEC;
	public $infErpMRetail = null;
	public $infErpMRetailItemList = null;
	public $infErpMRetailPayItemList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infErpMRetail'
			),
			2 => array(
			'var' => 'infErpMRetailItemList'
			),
			3 => array(
			'var' => 'infErpMRetailPayItemList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infErpMRetail'])){
				
				$this->infErpMRetail = $vals['infErpMRetail'];
			}
			
			
			if (isset($vals['infErpMRetailItemList'])){
				
				$this->infErpMRetailItemList = $vals['infErpMRetailItemList'];
			}
			
			
			if (isset($vals['infErpMRetailPayItemList'])){
				
				$this->infErpMRetailPayItemList = $vals['infErpMRetailPayItemList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfErpOrderInfoVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infErpMRetail" == $schemeField){
				
				$needSkip = false;
				
				$this->infErpMRetail = new \com\vip\xstore\order\common\pojo\vo\InfErpMRetailVO();
				$this->infErpMRetail->read($input);
				
			}
			
			
			
			
			if ("infErpMRetailItemList" == $schemeField){
				
				$needSkip = false;
				
				$this->infErpMRetailItemList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\xstore\order\common\pojo\vo\InfErpMRetailItemVO();
						$elem1->read($input);
						
						$this->infErpMRetailItemList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("infErpMRetailPayItemList" == $schemeField){
				
				$needSkip = false;
				
				$this->infErpMRetailPayItemList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\xstore\order\common\pojo\vo\InfErpMRetailPayItemVO();
						$elem2->read($input);
						
						$this->infErpMRetailPayItemList[$_size2++] = $elem2;
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
		
		if($this->infErpMRetail !== null) {
			
			$xfer += $output->writeFieldBegin('infErpMRetail');
			
			if (!is_object($this->infErpMRetail)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infErpMRetail->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infErpMRetailItemList !== null) {
			
			$xfer += $output->writeFieldBegin('infErpMRetailItemList');
			
			if (!is_array($this->infErpMRetailItemList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->infErpMRetailItemList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->infErpMRetailPayItemList !== null) {
			
			$xfer += $output->writeFieldBegin('infErpMRetailPayItemList');
			
			if (!is_array($this->infErpMRetailPayItemList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->infErpMRetailPayItemList as $iter0){
				
				
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
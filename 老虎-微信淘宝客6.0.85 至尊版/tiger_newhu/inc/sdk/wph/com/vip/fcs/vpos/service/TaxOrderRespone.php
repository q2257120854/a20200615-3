<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vpos\service;

class TaxOrderRespone {
	
	static $_TSPEC;
	public $taxOrderHeader = null;
	public $orderItemList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'taxOrderHeader'
			),
			2 => array(
			'var' => 'orderItemList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['taxOrderHeader'])){
				
				$this->taxOrderHeader = $vals['taxOrderHeader'];
			}
			
			
			if (isset($vals['orderItemList'])){
				
				$this->orderItemList = $vals['orderItemList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TaxOrderRespone';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("taxOrderHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->taxOrderHeader = new \com\vip\fcs\vpos\service\TaxOrderHeader();
				$this->taxOrderHeader->read($input);
				
			}
			
			
			
			
			if ("orderItemList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderItemList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\vpos\service\TaxOrderItem();
						$elem0->read($input);
						
						$this->orderItemList[$_size0++] = $elem0;
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
		
		if($this->taxOrderHeader !== null) {
			
			$xfer += $output->writeFieldBegin('taxOrderHeader');
			
			if (!is_object($this->taxOrderHeader)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->taxOrderHeader->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderItemList !== null) {
			
			$xfer += $output->writeFieldBegin('orderItemList');
			
			if (!is_array($this->orderItemList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderItemList as $iter0){
				
				
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
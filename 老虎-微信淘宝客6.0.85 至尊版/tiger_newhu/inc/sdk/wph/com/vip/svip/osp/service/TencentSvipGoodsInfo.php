<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class TencentSvipGoodsInfo {
	
	static $_TSPEC;
	public $tencentCard = null;
	public $svipCard = null;
	public $limitStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tencentCard'
			),
			2 => array(
			'var' => 'svipCard'
			),
			3 => array(
			'var' => 'limitStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tencentCard'])){
				
				$this->tencentCard = $vals['tencentCard'];
			}
			
			
			if (isset($vals['svipCard'])){
				
				$this->svipCard = $vals['svipCard'];
			}
			
			
			if (isset($vals['limitStatus'])){
				
				$this->limitStatus = $vals['limitStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TencentSvipGoodsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tencentCard" == $schemeField){
				
				$needSkip = false;
				
				$this->tencentCard = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\SvipGoodsInfo();
						$elem0->read($input);
						
						$this->tencentCard[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("svipCard" == $schemeField){
				
				$needSkip = false;
				
				$this->svipCard = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\svip\osp\service\SvipGoodsInfo();
						$elem1->read($input);
						
						$this->svipCard[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("limitStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limitStatus); 
				
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
		
		if($this->tencentCard !== null) {
			
			$xfer += $output->writeFieldBegin('tencentCard');
			
			if (!is_array($this->tencentCard)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tencentCard as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipCard !== null) {
			
			$xfer += $output->writeFieldBegin('svipCard');
			
			if (!is_array($this->svipCard)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->svipCard as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('limitStatus');
		$xfer += $output->writeI32($this->limitStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
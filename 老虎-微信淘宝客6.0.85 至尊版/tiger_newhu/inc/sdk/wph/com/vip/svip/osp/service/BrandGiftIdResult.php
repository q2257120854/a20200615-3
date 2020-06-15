<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class BrandGiftIdResult {
	
	static $_TSPEC;
	public $toOpen = null;
	public $brandGiftIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'toOpen'
			),
			2 => array(
			'var' => 'brandGiftIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['toOpen'])){
				
				$this->toOpen = $vals['toOpen'];
			}
			
			
			if (isset($vals['brandGiftIdList'])){
				
				$this->brandGiftIdList = $vals['brandGiftIdList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BrandGiftIdResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("toOpen" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->toOpen);
				
			}
			
			
			
			
			if ("brandGiftIdList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandGiftIdList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\svip\osp\service\BrandGiftIdItem();
						$elem0->read($input);
						
						$this->brandGiftIdList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('toOpen');
		$xfer += $output->writeBool($this->toOpen);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandGiftIdList !== null) {
			
			$xfer += $output->writeFieldBegin('brandGiftIdList');
			
			if (!is_array($this->brandGiftIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandGiftIdList as $iter0){
				
				
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
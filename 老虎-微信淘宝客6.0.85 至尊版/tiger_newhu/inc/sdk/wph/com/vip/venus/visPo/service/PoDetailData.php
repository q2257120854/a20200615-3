<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class PoDetailData {
	
	static $_TSPEC;
	public $poHeaderInfo = null;
	public $poItemList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poHeaderInfo'
			),
			2 => array(
			'var' => 'poItemList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poHeaderInfo'])){
				
				$this->poHeaderInfo = $vals['poHeaderInfo'];
			}
			
			
			if (isset($vals['poItemList'])){
				
				$this->poItemList = $vals['poItemList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoDetailData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("poHeaderInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->poHeaderInfo = new \com\vip\venus\visPo\service\PoHeaderInfo();
				$this->poHeaderInfo->read($input);
				
			}
			
			
			
			
			if ("poItemList" == $schemeField){
				
				$needSkip = false;
				
				$this->poItemList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\venus\visPo\service\PoItem();
						$elem0->read($input);
						
						$this->poItemList[$_size0++] = $elem0;
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
		
		if($this->poHeaderInfo !== null) {
			
			$xfer += $output->writeFieldBegin('poHeaderInfo');
			
			if (!is_object($this->poHeaderInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poHeaderInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poItemList !== null) {
			
			$xfer += $output->writeFieldBegin('poItemList');
			
			if (!is_array($this->poItemList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->poItemList as $iter0){
				
				
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
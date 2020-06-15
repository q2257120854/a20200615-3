<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class BlacklistModel {
	
	static $_TSPEC;
	public $syncType = null;
	public $blacklistIds = null;
	public $blackListType = null;
	public $salesModes = null;
	public $promoType = null;
	public $effectType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'syncType'
			),
			2 => array(
			'var' => 'blacklistIds'
			),
			3 => array(
			'var' => 'blackListType'
			),
			4 => array(
			'var' => 'salesModes'
			),
			5 => array(
			'var' => 'promoType'
			),
			6 => array(
			'var' => 'effectType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['syncType'])){
				
				$this->syncType = $vals['syncType'];
			}
			
			
			if (isset($vals['blacklistIds'])){
				
				$this->blacklistIds = $vals['blacklistIds'];
			}
			
			
			if (isset($vals['blackListType'])){
				
				$this->blackListType = $vals['blackListType'];
			}
			
			
			if (isset($vals['salesModes'])){
				
				$this->salesModes = $vals['salesModes'];
			}
			
			
			if (isset($vals['promoType'])){
				
				$this->promoType = $vals['promoType'];
			}
			
			
			if (isset($vals['effectType'])){
				
				$this->effectType = $vals['effectType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BlacklistModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("syncType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\pms\data\service\SyncType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->syncType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("blacklistIds" == $schemeField){
				
				$needSkip = false;
				
				$this->blacklistIds = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->blacklistIds[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("blackListType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\pms\data\service\BlackListType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->blackListType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("salesModes" == $schemeField){
				
				$needSkip = false;
				
				$this->salesModes = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI32($elem2); 
						
						$this->salesModes[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("promoType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->promoType); 
				
			}
			
			
			
			
			if ("effectType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->effectType); 
				
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
		
		$xfer += $output->writeFieldBegin('syncType');
		
		$em = new \com\vip\pms\data\service\SyncType; 
		$output->writeString($em::$__names[$this->syncType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('blacklistIds');
		
		if (!is_array($this->blacklistIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->blacklistIds as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('blackListType');
		
		$em = new \com\vip\pms\data\service\BlackListType; 
		$output->writeString($em::$__names[$this->blackListType]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->salesModes !== null) {
			
			$xfer += $output->writeFieldBegin('salesModes');
			
			if (!is_array($this->salesModes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->salesModes as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promoType !== null) {
			
			$xfer += $output->writeFieldBegin('promoType');
			$xfer += $output->writeI32($this->promoType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->effectType !== null) {
			
			$xfer += $output->writeFieldBegin('effectType');
			$xfer += $output->writeI32($this->effectType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
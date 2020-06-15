<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CheckRequest {
	
	static $_TSPEC;
	public $opcode = null;
	public $cacheType = null;
	public $keys = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'opcode'
			),
			2 => array(
			'var' => 'cacheType'
			),
			3 => array(
			'var' => 'keys'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['opcode'])){
				
				$this->opcode = $vals['opcode'];
			}
			
			
			if (isset($vals['cacheType'])){
				
				$this->cacheType = $vals['cacheType'];
			}
			
			
			if (isset($vals['keys'])){
				
				$this->keys = $vals['keys'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CheckRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("opcode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->opcode); 
				
			}
			
			
			
			
			if ("cacheType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cacheType); 
				
			}
			
			
			
			
			if ("keys" == $schemeField){
				
				$needSkip = false;
				
				$this->keys = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->keys[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('opcode');
		$xfer += $output->writeI32($this->opcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cacheType !== null) {
			
			$xfer += $output->writeFieldBegin('cacheType');
			$xfer += $output->writeI32($this->cacheType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->keys !== null) {
			
			$xfer += $output->writeFieldBegin('keys');
			
			if (!is_array($this->keys)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->keys as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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
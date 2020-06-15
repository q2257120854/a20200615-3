<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\merchModel\service;

class Jd3dModelSyncResponse {
	
	static $_TSPEC;
	public $retCode = null;
	public $errMsg = null;
	public $mids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'retCode'
			),
			2 => array(
			'var' => 'errMsg'
			),
			3 => array(
			'var' => 'mids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['retCode'])){
				
				$this->retCode = $vals['retCode'];
			}
			
			
			if (isset($vals['errMsg'])){
				
				$this->errMsg = $vals['errMsg'];
			}
			
			
			if (isset($vals['mids'])){
				
				$this->mids = $vals['mids'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Jd3dModelSyncResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("retCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->retCode); 
				
			}
			
			
			
			
			if ("errMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errMsg);
				
			}
			
			
			
			
			if ("mids" == $schemeField){
				
				$needSkip = false;
				
				$this->mids = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->mids[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('retCode');
		$xfer += $output->writeI32($this->retCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('errMsg');
		$xfer += $output->writeString($this->errMsg);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mids');
		
		if (!is_array($this->mids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->mids as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
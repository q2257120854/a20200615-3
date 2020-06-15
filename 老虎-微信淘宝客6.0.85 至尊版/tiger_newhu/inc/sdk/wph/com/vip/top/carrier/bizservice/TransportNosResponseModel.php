<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TransportNosResponseModel {
	
	static $_TSPEC;
	public $returnCode = null;
	public $returnMsg = null;
	public $transportNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnCode'
			),
			2 => array(
			'var' => 'returnMsg'
			),
			3 => array(
			'var' => 'transportNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnCode'])){
				
				$this->returnCode = $vals['returnCode'];
			}
			
			
			if (isset($vals['returnMsg'])){
				
				$this->returnMsg = $vals['returnMsg'];
			}
			
			
			if (isset($vals['transportNos'])){
				
				$this->transportNos = $vals['transportNos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportNosResponseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnCode);
				
			}
			
			
			
			
			if ("returnMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnMsg);
				
			}
			
			
			
			
			if ("transportNos" == $schemeField){
				
				$needSkip = false;
				
				$this->transportNos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->transportNos[$_size0++] = $elem0;
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
		
		if($this->returnCode !== null) {
			
			$xfer += $output->writeFieldBegin('returnCode');
			$xfer += $output->writeString($this->returnCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnMsg !== null) {
			
			$xfer += $output->writeFieldBegin('returnMsg');
			$xfer += $output->writeString($this->returnMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNos !== null) {
			
			$xfer += $output->writeFieldBegin('transportNos');
			
			if (!is_array($this->transportNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportNos as $iter0){
				
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
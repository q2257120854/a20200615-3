<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TransportNoInfosMapResponseModel {
	
	static $_TSPEC;
	public $returnCode = null;
	public $returnMsg = null;
	public $transportNoInfosMap = null;
	
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
			'var' => 'transportNoInfosMap'
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
			
			
			if (isset($vals['transportNoInfosMap'])){
				
				$this->transportNoInfosMap = $vals['transportNoInfosMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportNoInfosMapResponseModel';
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
			
			
			
			
			if ("transportNoInfosMap" == $schemeField){
				
				$needSkip = false;
				
				$this->transportNoInfosMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = null;
						
						$val0 = array();
						$_size1 = 0;
						$input->readListBegin();
						while(true){
							
							try{
								
								$elem1 = null;
								
								$elem1 = new \com\vip\top\carrier\bizservice\TransportNoInfo();
								$elem1->read($input);
								
								$val0[$_size1++] = $elem1;
							}
							catch(\Exception $e){
								
								break;
							}
						}
						
						$input->readListEnd();
						
						$this->transportNoInfosMap[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		
		if($this->transportNoInfosMap !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoInfosMap');
			
			if (!is_array($this->transportNoInfosMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->transportNoInfosMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				
				if (!is_array($viter0)){
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$output->writeListBegin();
				foreach ($viter0 as $iter1){
					
					
					if (!is_object($iter1)) {
						
						throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
					}
					
					$xfer += $iter1->write($output);
					
				}
				
				$output->writeListEnd();
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
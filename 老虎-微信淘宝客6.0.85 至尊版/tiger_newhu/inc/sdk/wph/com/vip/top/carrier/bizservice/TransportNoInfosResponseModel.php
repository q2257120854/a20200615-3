<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\bizservice;

class TransportNoInfosResponseModel {
	
	static $_TSPEC;
	public $returnCode = null;
	public $returnMsg = null;
	public $transportNoInfos = null;
	
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
			'var' => 'transportNoInfos'
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
			
			
			if (isset($vals['transportNoInfos'])){
				
				$this->transportNoInfos = $vals['transportNoInfos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TransportNoInfosResponseModel';
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
			
			
			
			
			if ("transportNoInfos" == $schemeField){
				
				$needSkip = false;
				
				$this->transportNoInfos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\carrier\bizservice\TransportNoInfoModel();
						$elem0->read($input);
						
						$this->transportNoInfos[$_size0++] = $elem0;
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
		
		
		if($this->transportNoInfos !== null) {
			
			$xfer += $output->writeFieldBegin('transportNoInfos');
			
			if (!is_array($this->transportNoInfos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->transportNoInfos as $iter0){
				
				
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
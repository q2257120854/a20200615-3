<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class WMSPoDetail {
	
	static $_TSPEC;
	public $poNo = null;
	public $poHeader = null;
	public $poDetails = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poNo'
			),
			2 => array(
			'var' => 'poHeader'
			),
			3 => array(
			'var' => 'poDetails'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poNo'])){
				
				$this->poNo = $vals['poNo'];
			}
			
			
			if (isset($vals['poHeader'])){
				
				$this->poHeader = $vals['poHeader'];
			}
			
			
			if (isset($vals['poDetails'])){
				
				$this->poDetails = $vals['poDetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WMSPoDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("poNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poNo);
				
			}
			
			
			
			
			if ("poHeader" == $schemeField){
				
				$needSkip = false;
				
				$this->poHeader = new \com\vip\venus\visPo\service\WmsPoHeaderNew();
				$this->poHeader->read($input);
				
			}
			
			
			
			
			if ("poDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->poDetails = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\venus\visPo\service\WmsPoDetailNew();
						$elem1->read($input);
						
						$this->poDetails[$_size1++] = $elem1;
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
		
		if($this->poNo !== null) {
			
			$xfer += $output->writeFieldBegin('poNo');
			$xfer += $output->writeString($this->poNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poHeader !== null) {
			
			$xfer += $output->writeFieldBegin('poHeader');
			
			if (!is_object($this->poHeader)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poHeader->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDetails !== null) {
			
			$xfer += $output->writeFieldBegin('poDetails');
			
			if (!is_array($this->poDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->poDetails as $iter0){
				
				
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
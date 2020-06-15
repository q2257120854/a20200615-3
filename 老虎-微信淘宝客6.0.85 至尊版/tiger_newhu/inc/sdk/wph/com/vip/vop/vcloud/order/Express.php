<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class Express {
	
	static $_TSPEC;
	public $expressCompany = null;
	public $expressNo = null;
	public $expressLists = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'expressCompany'
			),
			2 => array(
			'var' => 'expressNo'
			),
			3 => array(
			'var' => 'expressLists'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['expressCompany'])){
				
				$this->expressCompany = $vals['expressCompany'];
			}
			
			
			if (isset($vals['expressNo'])){
				
				$this->expressNo = $vals['expressNo'];
			}
			
			
			if (isset($vals['expressLists'])){
				
				$this->expressLists = $vals['expressLists'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Express';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("expressCompany" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expressCompany);
				
			}
			
			
			
			
			if ("expressNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expressNo);
				
			}
			
			
			
			
			if ("expressLists" == $schemeField){
				
				$needSkip = false;
				
				$this->expressLists = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\vcloud\order\ExpressList();
						$elem0->read($input);
						
						$this->expressLists[$_size0++] = $elem0;
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
		
		if($this->expressCompany !== null) {
			
			$xfer += $output->writeFieldBegin('expressCompany');
			$xfer += $output->writeString($this->expressCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressNo !== null) {
			
			$xfer += $output->writeFieldBegin('expressNo');
			$xfer += $output->writeString($this->expressNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expressLists !== null) {
			
			$xfer += $output->writeFieldBegin('expressLists');
			
			if (!is_array($this->expressLists)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->expressLists as $iter0){
				
				
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
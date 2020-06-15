<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\size;

class VendorSizeTableInfo {
	
	static $_TSPEC;
	public $sizetable_id = null;
	public $sizetable_name = null;
	public $sizedetails = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sizetable_id'
			),
			2 => array(
			'var' => 'sizetable_name'
			),
			3 => array(
			'var' => 'sizedetails'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizetable_id'])){
				
				$this->sizetable_id = $vals['sizetable_id'];
			}
			
			
			if (isset($vals['sizetable_name'])){
				
				$this->sizetable_name = $vals['sizetable_name'];
			}
			
			
			if (isset($vals['sizedetails'])){
				
				$this->sizedetails = $vals['sizedetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorSizeTableInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizetable_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizetable_id); 
				
			}
			
			
			
			
			if ("sizetable_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizetable_name);
				
			}
			
			
			
			
			if ("sizedetails" == $schemeField){
				
				$needSkip = false;
				
				$this->sizedetails = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\size\VendorSizeDetail();
						$elem1->read($input);
						
						$this->sizedetails[$_size1++] = $elem1;
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
		
		if($this->sizetable_id !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_id');
			$xfer += $output->writeI64($this->sizetable_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetable_name !== null) {
			
			$xfer += $output->writeFieldBegin('sizetable_name');
			$xfer += $output->writeString($this->sizetable_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizedetails !== null) {
			
			$xfer += $output->writeFieldBegin('sizedetails');
			
			if (!is_array($this->sizedetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sizedetails as $iter0){
				
				
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
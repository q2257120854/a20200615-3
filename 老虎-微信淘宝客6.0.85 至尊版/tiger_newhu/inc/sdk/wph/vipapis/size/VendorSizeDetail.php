<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\size;

class VendorSizeDetail {
	
	static $_TSPEC;
	public $sizedetail_id = null;
	public $sizedetail_name = null;
	public $sizedetail_propertyvalues = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sizedetail_id'
			),
			2 => array(
			'var' => 'sizedetail_name'
			),
			3 => array(
			'var' => 'sizedetail_propertyvalues'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizedetail_id'])){
				
				$this->sizedetail_id = $vals['sizedetail_id'];
			}
			
			
			if (isset($vals['sizedetail_name'])){
				
				$this->sizedetail_name = $vals['sizedetail_name'];
			}
			
			
			if (isset($vals['sizedetail_propertyvalues'])){
				
				$this->sizedetail_propertyvalues = $vals['sizedetail_propertyvalues'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorSizeDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizedetail_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizedetail_id); 
				
			}
			
			
			
			
			if ("sizedetail_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizedetail_name);
				
			}
			
			
			
			
			if ("sizedetail_propertyvalues" == $schemeField){
				
				$needSkip = false;
				
				$this->sizedetail_propertyvalues = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->sizedetail_propertyvalues[$key0] = $val0;
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
		
		if($this->sizedetail_id !== null) {
			
			$xfer += $output->writeFieldBegin('sizedetail_id');
			$xfer += $output->writeI64($this->sizedetail_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sizedetail_name');
		$xfer += $output->writeString($this->sizedetail_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sizedetail_propertyvalues !== null) {
			
			$xfer += $output->writeFieldBegin('sizedetail_propertyvalues');
			
			if (!is_array($this->sizedetail_propertyvalues)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->sizedetail_propertyvalues as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
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
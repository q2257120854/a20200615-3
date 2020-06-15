<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\category;

class VendorCategory {
	
	static $_TSPEC;
	public $vendor_category_name = null;
	public $vendor_category_id = null;
	public $vendor_category_path = null;
	public $vendor_properties_map = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_category_name'
			),
			2 => array(
			'var' => 'vendor_category_id'
			),
			3 => array(
			'var' => 'vendor_category_path'
			),
			4 => array(
			'var' => 'vendor_properties_map'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_category_name'])){
				
				$this->vendor_category_name = $vals['vendor_category_name'];
			}
			
			
			if (isset($vals['vendor_category_id'])){
				
				$this->vendor_category_id = $vals['vendor_category_id'];
			}
			
			
			if (isset($vals['vendor_category_path'])){
				
				$this->vendor_category_path = $vals['vendor_category_path'];
			}
			
			
			if (isset($vals['vendor_properties_map'])){
				
				$this->vendor_properties_map = $vals['vendor_properties_map'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorCategory';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_category_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_name);
				
			}
			
			
			
			
			if ("vendor_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_id);
				
			}
			
			
			
			
			if ("vendor_category_path" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_category_path);
				
			}
			
			
			
			
			if ("vendor_properties_map" == $schemeField){
				
				$needSkip = false;
				
				$this->vendor_properties_map = array();
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
								$input->readString($elem1);
								
								$val0[$_size1++] = $elem1;
							}
							catch(\Exception $e){
								
								break;
							}
						}
						
						$input->readListEnd();
						
						$this->vendor_properties_map[$key0] = $val0;
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
		
		$xfer += $output->writeFieldBegin('vendor_category_name');
		$xfer += $output->writeString($this->vendor_category_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_category_id');
		$xfer += $output->writeString($this->vendor_category_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_category_path');
		$xfer += $output->writeString($this->vendor_category_path);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_properties_map');
		
		if (!is_array($this->vendor_properties_map)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->vendor_properties_map as $kiter0 => $viter0){
			
			$xfer += $output->writeString($kiter0);
			
			
			if (!is_array($viter0)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($viter0 as $iter1){
				
				$xfer += $output->writeString($iter1);
				
			}
			
			$output->writeListEnd();
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
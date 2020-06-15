<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class ImageUploadResult {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $brand_id = null;
	public $sn = null;
	public $upload_result_map = null;
	public $group_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'brand_id'
			),
			3 => array(
			'var' => 'sn'
			),
			4 => array(
			'var' => 'upload_result_map'
			),
			5 => array(
			'var' => 'group_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['upload_result_map'])){
				
				$this->upload_result_map = $vals['upload_result_map'];
			}
			
			
			if (isset($vals['group_sn'])){
				
				$this->group_sn = $vals['group_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ImageUploadResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brand_id); 
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("upload_result_map" == $schemeField){
				
				$needSkip = false;
				
				$this->upload_result_map = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = 0;
						$input->readI32($key0); 
						
						$val0 = null;
						
						$val0 = new \vipapis\product\UploadTaskExecutionResult();
						$val0->read($input);
						
						$this->upload_result_map[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("group_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->group_sn);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeI32($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('upload_result_map');
		
		if (!is_array($this->upload_result_map)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->upload_result_map as $kiter0 => $viter0){
			
			$xfer += $output->writeI32($kiter0);
			
			
			if (!is_object($viter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $viter0->write($output);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->group_sn !== null) {
			
			$xfer += $output->writeFieldBegin('group_sn');
			$xfer += $output->writeString($this->group_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
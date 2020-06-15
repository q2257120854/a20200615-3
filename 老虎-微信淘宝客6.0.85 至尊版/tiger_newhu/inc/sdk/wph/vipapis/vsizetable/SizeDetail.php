<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class SizeDetail {
	
	static $_TSPEC;
	public $sizedetail_id = null;
	public $sizedetail_name = null;
	public $sizetable_id = null;
	public $sizedetail_propertyvalues = null;
	public $delFlag = null;
	public $size_detail_order = null;
	
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
			'var' => 'sizetable_id'
			),
			4 => array(
			'var' => 'sizedetail_propertyvalues'
			),
			5 => array(
			'var' => 'delFlag'
			),
			6 => array(
			'var' => 'size_detail_order'
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
			
			
			if (isset($vals['sizetable_id'])){
				
				$this->sizetable_id = $vals['sizetable_id'];
			}
			
			
			if (isset($vals['sizedetail_propertyvalues'])){
				
				$this->sizedetail_propertyvalues = $vals['sizedetail_propertyvalues'];
			}
			
			
			if (isset($vals['delFlag'])){
				
				$this->delFlag = $vals['delFlag'];
			}
			
			
			if (isset($vals['size_detail_order'])){
				
				$this->size_detail_order = $vals['size_detail_order'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeDetail';
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
			
			
			
			
			if ("sizetable_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizetable_id); 
				
			}
			
			
			
			
			if ("sizedetail_propertyvalues" == $schemeField){
				
				$needSkip = false;
				
				$this->sizedetail_propertyvalues = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->sizedetail_propertyvalues[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("delFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->delFlag); 
				
			}
			
			
			
			
			if ("size_detail_order" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size_detail_order); 
				
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
		
		$xfer += $output->writeFieldBegin('sizetable_id');
		$xfer += $output->writeI64($this->sizetable_id);
		
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
		
		
		if($this->delFlag !== null) {
			
			$xfer += $output->writeFieldBegin('delFlag');
			$xfer += $output->writeI16($this->delFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_detail_order !== null) {
			
			$xfer += $output->writeFieldBegin('size_detail_order');
			$xfer += $output->writeI32($this->size_detail_order);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
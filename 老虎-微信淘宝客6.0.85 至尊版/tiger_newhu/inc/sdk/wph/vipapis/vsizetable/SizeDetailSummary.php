<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsizetable;

class SizeDetailSummary {
	
	static $_TSPEC;
	public $size_detail_name = null;
	public $size_detail_property_values = null;
	public $size_detail_order = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'size_detail_name'
			),
			2 => array(
			'var' => 'size_detail_property_values'
			),
			3 => array(
			'var' => 'size_detail_order'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['size_detail_name'])){
				
				$this->size_detail_name = $vals['size_detail_name'];
			}
			
			
			if (isset($vals['size_detail_property_values'])){
				
				$this->size_detail_property_values = $vals['size_detail_property_values'];
			}
			
			
			if (isset($vals['size_detail_order'])){
				
				$this->size_detail_order = $vals['size_detail_order'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeDetailSummary';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("size_detail_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size_detail_name);
				
			}
			
			
			
			
			if ("size_detail_property_values" == $schemeField){
				
				$needSkip = false;
				
				$this->size_detail_property_values = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->size_detail_property_values[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		$xfer += $output->writeFieldBegin('size_detail_name');
		$xfer += $output->writeString($this->size_detail_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size_detail_property_values');
		
		if (!is_array($this->size_detail_property_values)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->size_detail_property_values as $kiter0 => $viter0){
			
			$xfer += $output->writeString($kiter0);
			
			$xfer += $output->writeString($viter0);
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
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
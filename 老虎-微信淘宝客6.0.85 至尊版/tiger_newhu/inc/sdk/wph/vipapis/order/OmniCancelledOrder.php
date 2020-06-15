<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OmniCancelledOrder {
	
	static $_TSPEC;
	public $order_id = null;
	public $province = null;
	public $city = null;
	public $district = null;
	public $order_skus = null;
	public $order_type = null;
	public $province_code = null;
	public $city_code = null;
	public $district_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'province'
			),
			3 => array(
			'var' => 'city'
			),
			4 => array(
			'var' => 'district'
			),
			5 => array(
			'var' => 'order_skus'
			),
			6 => array(
			'var' => 'order_type'
			),
			7 => array(
			'var' => 'province_code'
			),
			8 => array(
			'var' => 'city_code'
			),
			9 => array(
			'var' => 'district_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['district'])){
				
				$this->district = $vals['district'];
			}
			
			
			if (isset($vals['order_skus'])){
				
				$this->order_skus = $vals['order_skus'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['province_code'])){
				
				$this->province_code = $vals['province_code'];
			}
			
			
			if (isset($vals['city_code'])){
				
				$this->city_code = $vals['city_code'];
			}
			
			
			if (isset($vals['district_code'])){
				
				$this->district_code = $vals['district_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OmniCancelledOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("district" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district);
				
			}
			
			
			
			
			if ("order_skus" == $schemeField){
				
				$needSkip = false;
				
				$this->order_skus = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\order\OrderSku();
						$elem0->read($input);
						
						$this->order_skus[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->order_type); 
				
			}
			
			
			
			
			if ("province_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province_code);
				
			}
			
			
			
			
			if ("city_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_code);
				
			}
			
			
			
			
			if ("district_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->district_code);
				
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
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('province');
		$xfer += $output->writeString($this->province);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('city');
		$xfer += $output->writeString($this->city);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('district');
		$xfer += $output->writeString($this->district);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_skus');
		
		if (!is_array($this->order_skus)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_skus as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->order_type !== null) {
			
			$xfer += $output->writeFieldBegin('order_type');
			$xfer += $output->writeByte($this->order_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province_code !== null) {
			
			$xfer += $output->writeFieldBegin('province_code');
			$xfer += $output->writeString($this->province_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city_code !== null) {
			
			$xfer += $output->writeFieldBegin('city_code');
			$xfer += $output->writeString($this->city_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->district_code !== null) {
			
			$xfer += $output->writeFieldBegin('district_code');
			$xfer += $output->writeString($this->district_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
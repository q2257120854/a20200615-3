<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class PaperInvoice {
	
	static $_TSPEC;
	public $invoice_delivery_type = null;
	public $estimate_delivery_time = null;
	public $package_no = null;
	public $province = null;
	public $city = null;
	public $region = null;
	public $town = null;
	public $address = null;
	public $contacts = null;
	public $mobile = null;
	public $tel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'invoice_delivery_type'
			),
			2 => array(
			'var' => 'estimate_delivery_time'
			),
			3 => array(
			'var' => 'package_no'
			),
			4 => array(
			'var' => 'province'
			),
			5 => array(
			'var' => 'city'
			),
			6 => array(
			'var' => 'region'
			),
			7 => array(
			'var' => 'town'
			),
			8 => array(
			'var' => 'address'
			),
			9 => array(
			'var' => 'contacts'
			),
			10 => array(
			'var' => 'mobile'
			),
			11 => array(
			'var' => 'tel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['invoice_delivery_type'])){
				
				$this->invoice_delivery_type = $vals['invoice_delivery_type'];
			}
			
			
			if (isset($vals['estimate_delivery_time'])){
				
				$this->estimate_delivery_time = $vals['estimate_delivery_time'];
			}
			
			
			if (isset($vals['package_no'])){
				
				$this->package_no = $vals['package_no'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['region'])){
				
				$this->region = $vals['region'];
			}
			
			
			if (isset($vals['town'])){
				
				$this->town = $vals['town'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['contacts'])){
				
				$this->contacts = $vals['contacts'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PaperInvoice';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("invoice_delivery_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->invoice_delivery_type); 
				
			}
			
			
			
			
			if ("estimate_delivery_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->estimate_delivery_time); 
				
			}
			
			
			
			
			if ("package_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->package_no);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("region" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region);
				
			}
			
			
			
			
			if ("town" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("contacts" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacts);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
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
		
		$xfer += $output->writeFieldBegin('invoice_delivery_type');
		$xfer += $output->writeByte($this->invoice_delivery_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->estimate_delivery_time !== null) {
			
			$xfer += $output->writeFieldBegin('estimate_delivery_time');
			$xfer += $output->writeI64($this->estimate_delivery_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_no !== null) {
			
			$xfer += $output->writeFieldBegin('package_no');
			$xfer += $output->writeString($this->package_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region !== null) {
			
			$xfer += $output->writeFieldBegin('region');
			$xfer += $output->writeString($this->region);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town !== null) {
			
			$xfer += $output->writeFieldBegin('town');
			$xfer += $output->writeString($this->town);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacts !== null) {
			
			$xfer += $output->writeFieldBegin('contacts');
			$xfer += $output->writeString($this->contacts);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tel !== null) {
			
			$xfer += $output->writeFieldBegin('tel');
			$xfer += $output->writeString($this->tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
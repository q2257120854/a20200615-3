<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class PoInfo {
	
	static $_TSPEC;
	public $po_id = null;
	public $po_no = null;
	public $po_type = null;
	public $vendor_code = null;
	public $vendor_name = null;
	public $data_status = null;
	public $buyer = null;
	public $sale_area = null;
	public $post_code = null;
	public $consignee = null;
	public $phone = null;
	public $country = null;
	public $province = null;
	public $city = null;
	public $district = null;
	public $address = null;
	public $transfer_date = null;
	public $po_detail_list = null;
	public $total = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'po_type'
			),
			4 => array(
			'var' => 'vendor_code'
			),
			5 => array(
			'var' => 'vendor_name'
			),
			6 => array(
			'var' => 'data_status'
			),
			7 => array(
			'var' => 'buyer'
			),
			8 => array(
			'var' => 'sale_area'
			),
			9 => array(
			'var' => 'post_code'
			),
			10 => array(
			'var' => 'consignee'
			),
			11 => array(
			'var' => 'phone'
			),
			12 => array(
			'var' => 'country'
			),
			13 => array(
			'var' => 'province'
			),
			14 => array(
			'var' => 'city'
			),
			15 => array(
			'var' => 'district'
			),
			16 => array(
			'var' => 'address'
			),
			17 => array(
			'var' => 'transfer_date'
			),
			18 => array(
			'var' => 'po_detail_list'
			),
			19 => array(
			'var' => 'total'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_id'])){
				
				$this->po_id = $vals['po_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['po_type'])){
				
				$this->po_type = $vals['po_type'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['data_status'])){
				
				$this->data_status = $vals['data_status'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['sale_area'])){
				
				$this->sale_area = $vals['sale_area'];
			}
			
			
			if (isset($vals['post_code'])){
				
				$this->post_code = $vals['post_code'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
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
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['transfer_date'])){
				
				$this->transfer_date = $vals['transfer_date'];
			}
			
			
			if (isset($vals['po_detail_list'])){
				
				$this->po_detail_list = $vals['po_detail_list'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_id);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("po_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_type);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("data_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->data_status);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("sale_area" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_area);
				
			}
			
			
			
			
			if ("post_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->post_code);
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
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
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("transfer_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transfer_date);
				
			}
			
			
			
			
			if ("po_detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->po_detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\PoDetail();
						$elem0->read($input);
						
						$this->po_detail_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
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
		
		if($this->po_id !== null) {
			
			$xfer += $output->writeFieldBegin('po_id');
			$xfer += $output->writeString($this->po_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_type !== null) {
			
			$xfer += $output->writeFieldBegin('po_type');
			$xfer += $output->writeString($this->po_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_code !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_code');
			$xfer += $output->writeString($this->vendor_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_name !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_name');
			$xfer += $output->writeString($this->vendor_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->data_status !== null) {
			
			$xfer += $output->writeFieldBegin('data_status');
			$xfer += $output->writeString($this->data_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_area !== null) {
			
			$xfer += $output->writeFieldBegin('sale_area');
			$xfer += $output->writeString($this->sale_area);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->post_code !== null) {
			
			$xfer += $output->writeFieldBegin('post_code');
			$xfer += $output->writeString($this->post_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			$xfer += $output->writeString($this->consignee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
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
		
		
		if($this->district !== null) {
			
			$xfer += $output->writeFieldBegin('district');
			$xfer += $output->writeString($this->district);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transfer_date !== null) {
			
			$xfer += $output->writeFieldBegin('transfer_date');
			$xfer += $output->writeString($this->transfer_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_detail_list !== null) {
			
			$xfer += $output->writeFieldBegin('po_detail_list');
			
			if (!is_array($this->po_detail_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->po_detail_list as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
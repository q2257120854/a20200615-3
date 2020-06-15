<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;

class WmsPoHeader {
	
	static $_TSPEC;
	public $po_number = null;
	public $created_time = null;
	public $update_time = null;
	public $vendor_code = null;
	public $vendor_name = null;
	public $address1 = null;
	public $address2 = null;
	public $address3 = null;
	public $city = null;
	public $state = null;
	public $zip = null;
	public $email = null;
	public $country = null;
	public $contact_telephone = null;
	public $contacter = null;
	public $po_type = null;
	public $buyer = null;
	public $status = null;
	public $poh_id = null;
	public $lines_count = null;
	public $sale_area = null;
	public $brand_admin = null;
	public $warehouse_code = null;
	public $dept = null;
	public $need_by_date = null;
	public $is_3pl = null;
	public $purchase_office_1 = null;
	public $purchase_office_1_name = null;
	public $purchase_office = null;
	public $purchase_office_name = null;
	public $purchase_office_divide = null;
	public $purchase_office_divide_name = null;
	public $purchase_area = null;
	public $purchase_area_name = null;
	public $isVWarehouse = null;
	public $generalTrade = null;
	public $purchaseCompany = null;
	public $purchaseCompanyCode = null;
	public $createUser = null;
	public $sales_site = null;
	public $store_goods_status = null;
	public $expect_sales_time = null;
	public $owner = null;
	public $assignChannelCode = null;
	public $currency = null;
	public $defectiveGrade = null;
	public $additionalTag = null;
	public $mainWarehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po_number'
			),
			2 => array(
			'var' => 'created_time'
			),
			3 => array(
			'var' => 'update_time'
			),
			4 => array(
			'var' => 'vendor_code'
			),
			5 => array(
			'var' => 'vendor_name'
			),
			6 => array(
			'var' => 'address1'
			),
			7 => array(
			'var' => 'address2'
			),
			8 => array(
			'var' => 'address3'
			),
			9 => array(
			'var' => 'city'
			),
			10 => array(
			'var' => 'state'
			),
			11 => array(
			'var' => 'zip'
			),
			12 => array(
			'var' => 'email'
			),
			13 => array(
			'var' => 'country'
			),
			14 => array(
			'var' => 'contact_telephone'
			),
			15 => array(
			'var' => 'contacter'
			),
			16 => array(
			'var' => 'po_type'
			),
			17 => array(
			'var' => 'buyer'
			),
			18 => array(
			'var' => 'status'
			),
			19 => array(
			'var' => 'poh_id'
			),
			20 => array(
			'var' => 'lines_count'
			),
			21 => array(
			'var' => 'sale_area'
			),
			22 => array(
			'var' => 'brand_admin'
			),
			23 => array(
			'var' => 'warehouse_code'
			),
			24 => array(
			'var' => 'dept'
			),
			25 => array(
			'var' => 'need_by_date'
			),
			26 => array(
			'var' => 'is_3pl'
			),
			27 => array(
			'var' => 'purchase_office_1'
			),
			28 => array(
			'var' => 'purchase_office_1_name'
			),
			29 => array(
			'var' => 'purchase_office'
			),
			30 => array(
			'var' => 'purchase_office_name'
			),
			31 => array(
			'var' => 'purchase_office_divide'
			),
			32 => array(
			'var' => 'purchase_office_divide_name'
			),
			33 => array(
			'var' => 'purchase_area'
			),
			34 => array(
			'var' => 'purchase_area_name'
			),
			35 => array(
			'var' => 'isVWarehouse'
			),
			36 => array(
			'var' => 'generalTrade'
			),
			37 => array(
			'var' => 'purchaseCompany'
			),
			38 => array(
			'var' => 'purchaseCompanyCode'
			),
			39 => array(
			'var' => 'createUser'
			),
			40 => array(
			'var' => 'sales_site'
			),
			41 => array(
			'var' => 'store_goods_status'
			),
			42 => array(
			'var' => 'expect_sales_time'
			),
			43 => array(
			'var' => 'owner'
			),
			44 => array(
			'var' => 'assignChannelCode'
			),
			45 => array(
			'var' => 'currency'
			),
			46 => array(
			'var' => 'defectiveGrade'
			),
			47 => array(
			'var' => 'additionalTag'
			),
			48 => array(
			'var' => 'mainWarehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po_number'])){
				
				$this->po_number = $vals['po_number'];
			}
			
			
			if (isset($vals['created_time'])){
				
				$this->created_time = $vals['created_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['address1'])){
				
				$this->address1 = $vals['address1'];
			}
			
			
			if (isset($vals['address2'])){
				
				$this->address2 = $vals['address2'];
			}
			
			
			if (isset($vals['address3'])){
				
				$this->address3 = $vals['address3'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['zip'])){
				
				$this->zip = $vals['zip'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['contact_telephone'])){
				
				$this->contact_telephone = $vals['contact_telephone'];
			}
			
			
			if (isset($vals['contacter'])){
				
				$this->contacter = $vals['contacter'];
			}
			
			
			if (isset($vals['po_type'])){
				
				$this->po_type = $vals['po_type'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['poh_id'])){
				
				$this->poh_id = $vals['poh_id'];
			}
			
			
			if (isset($vals['lines_count'])){
				
				$this->lines_count = $vals['lines_count'];
			}
			
			
			if (isset($vals['sale_area'])){
				
				$this->sale_area = $vals['sale_area'];
			}
			
			
			if (isset($vals['brand_admin'])){
				
				$this->brand_admin = $vals['brand_admin'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['dept'])){
				
				$this->dept = $vals['dept'];
			}
			
			
			if (isset($vals['need_by_date'])){
				
				$this->need_by_date = $vals['need_by_date'];
			}
			
			
			if (isset($vals['is_3pl'])){
				
				$this->is_3pl = $vals['is_3pl'];
			}
			
			
			if (isset($vals['purchase_office_1'])){
				
				$this->purchase_office_1 = $vals['purchase_office_1'];
			}
			
			
			if (isset($vals['purchase_office_1_name'])){
				
				$this->purchase_office_1_name = $vals['purchase_office_1_name'];
			}
			
			
			if (isset($vals['purchase_office'])){
				
				$this->purchase_office = $vals['purchase_office'];
			}
			
			
			if (isset($vals['purchase_office_name'])){
				
				$this->purchase_office_name = $vals['purchase_office_name'];
			}
			
			
			if (isset($vals['purchase_office_divide'])){
				
				$this->purchase_office_divide = $vals['purchase_office_divide'];
			}
			
			
			if (isset($vals['purchase_office_divide_name'])){
				
				$this->purchase_office_divide_name = $vals['purchase_office_divide_name'];
			}
			
			
			if (isset($vals['purchase_area'])){
				
				$this->purchase_area = $vals['purchase_area'];
			}
			
			
			if (isset($vals['purchase_area_name'])){
				
				$this->purchase_area_name = $vals['purchase_area_name'];
			}
			
			
			if (isset($vals['isVWarehouse'])){
				
				$this->isVWarehouse = $vals['isVWarehouse'];
			}
			
			
			if (isset($vals['generalTrade'])){
				
				$this->generalTrade = $vals['generalTrade'];
			}
			
			
			if (isset($vals['purchaseCompany'])){
				
				$this->purchaseCompany = $vals['purchaseCompany'];
			}
			
			
			if (isset($vals['purchaseCompanyCode'])){
				
				$this->purchaseCompanyCode = $vals['purchaseCompanyCode'];
			}
			
			
			if (isset($vals['createUser'])){
				
				$this->createUser = $vals['createUser'];
			}
			
			
			if (isset($vals['sales_site'])){
				
				$this->sales_site = $vals['sales_site'];
			}
			
			
			if (isset($vals['store_goods_status'])){
				
				$this->store_goods_status = $vals['store_goods_status'];
			}
			
			
			if (isset($vals['expect_sales_time'])){
				
				$this->expect_sales_time = $vals['expect_sales_time'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
			if (isset($vals['assignChannelCode'])){
				
				$this->assignChannelCode = $vals['assignChannelCode'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['defectiveGrade'])){
				
				$this->defectiveGrade = $vals['defectiveGrade'];
			}
			
			
			if (isset($vals['additionalTag'])){
				
				$this->additionalTag = $vals['additionalTag'];
			}
			
			
			if (isset($vals['mainWarehouse'])){
				
				$this->mainWarehouse = $vals['mainWarehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WmsPoHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("po_number" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_number);
				
			}
			
			
			
			
			if ("created_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->created_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("address1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address1);
				
			}
			
			
			
			
			if ("address2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address2);
				
			}
			
			
			
			
			if ("address3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address3);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("zip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zip);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("contact_telephone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contact_telephone);
				
			}
			
			
			
			
			if ("contacter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contacter);
				
			}
			
			
			
			
			if ("po_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_type);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("poh_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poh_id);
				
			}
			
			
			
			
			if ("lines_count" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lines_count);
				
			}
			
			
			
			
			if ("sale_area" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sale_area);
				
			}
			
			
			
			
			if ("brand_admin" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_admin);
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("dept" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept);
				
			}
			
			
			
			
			if ("need_by_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->need_by_date);
				
			}
			
			
			
			
			if ("is_3pl" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_3pl); 
				
			}
			
			
			
			
			if ("purchase_office_1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_office_1);
				
			}
			
			
			
			
			if ("purchase_office_1_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_office_1_name);
				
			}
			
			
			
			
			if ("purchase_office" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_office);
				
			}
			
			
			
			
			if ("purchase_office_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_office_name);
				
			}
			
			
			
			
			if ("purchase_office_divide" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_office_divide);
				
			}
			
			
			
			
			if ("purchase_office_divide_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_office_divide_name);
				
			}
			
			
			
			
			if ("purchase_area" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_area);
				
			}
			
			
			
			
			if ("purchase_area_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchase_area_name);
				
			}
			
			
			
			
			if ("isVWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isVWarehouse);
				
			}
			
			
			
			
			if ("generalTrade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->generalTrade);
				
			}
			
			
			
			
			if ("purchaseCompany" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompany);
				
			}
			
			
			
			
			if ("purchaseCompanyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompanyCode);
				
			}
			
			
			
			
			if ("createUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUser);
				
			}
			
			
			
			
			if ("sales_site" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_site);
				
			}
			
			
			
			
			if ("store_goods_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_goods_status);
				
			}
			
			
			
			
			if ("expect_sales_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expect_sales_time);
				
			}
			
			
			
			
			if ("owner" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\venus\po\service\Owner::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->owner = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("assignChannelCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->assignChannelCode);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("defectiveGrade" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->defectiveGrade); 
				
			}
			
			
			
			
			if ("additionalTag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->additionalTag); 
				
			}
			
			
			
			
			if ("mainWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mainWarehouse); 
				
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
		
		if($this->po_number !== null) {
			
			$xfer += $output->writeFieldBegin('po_number');
			$xfer += $output->writeString($this->po_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->created_time !== null) {
			
			$xfer += $output->writeFieldBegin('created_time');
			$xfer += $output->writeI64($this->created_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
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
		
		
		if($this->address1 !== null) {
			
			$xfer += $output->writeFieldBegin('address1');
			$xfer += $output->writeString($this->address1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address2 !== null) {
			
			$xfer += $output->writeFieldBegin('address2');
			$xfer += $output->writeString($this->address2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address3 !== null) {
			
			$xfer += $output->writeFieldBegin('address3');
			$xfer += $output->writeString($this->address3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zip !== null) {
			
			$xfer += $output->writeFieldBegin('zip');
			$xfer += $output->writeString($this->zip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->email !== null) {
			
			$xfer += $output->writeFieldBegin('email');
			$xfer += $output->writeString($this->email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contact_telephone !== null) {
			
			$xfer += $output->writeFieldBegin('contact_telephone');
			$xfer += $output->writeString($this->contact_telephone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contacter !== null) {
			
			$xfer += $output->writeFieldBegin('contacter');
			$xfer += $output->writeString($this->contacter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_type !== null) {
			
			$xfer += $output->writeFieldBegin('po_type');
			$xfer += $output->writeString($this->po_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poh_id !== null) {
			
			$xfer += $output->writeFieldBegin('poh_id');
			$xfer += $output->writeString($this->poh_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lines_count !== null) {
			
			$xfer += $output->writeFieldBegin('lines_count');
			$xfer += $output->writeString($this->lines_count);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sale_area !== null) {
			
			$xfer += $output->writeFieldBegin('sale_area');
			$xfer += $output->writeString($this->sale_area);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_admin !== null) {
			
			$xfer += $output->writeFieldBegin('brand_admin');
			$xfer += $output->writeString($this->brand_admin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept !== null) {
			
			$xfer += $output->writeFieldBegin('dept');
			$xfer += $output->writeString($this->dept);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->need_by_date !== null) {
			
			$xfer += $output->writeFieldBegin('need_by_date');
			$xfer += $output->writeString($this->need_by_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_3pl !== null) {
			
			$xfer += $output->writeFieldBegin('is_3pl');
			$xfer += $output->writeByte($this->is_3pl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_office_1 !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_office_1');
			$xfer += $output->writeString($this->purchase_office_1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_office_1_name !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_office_1_name');
			$xfer += $output->writeString($this->purchase_office_1_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_office !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_office');
			$xfer += $output->writeString($this->purchase_office);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_office_name !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_office_name');
			$xfer += $output->writeString($this->purchase_office_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_office_divide !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_office_divide');
			$xfer += $output->writeString($this->purchase_office_divide);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_office_divide_name !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_office_divide_name');
			$xfer += $output->writeString($this->purchase_office_divide_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_area !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_area');
			$xfer += $output->writeString($this->purchase_area);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchase_area_name !== null) {
			
			$xfer += $output->writeFieldBegin('purchase_area_name');
			$xfer += $output->writeString($this->purchase_area_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('isVWarehouse');
			$xfer += $output->writeString($this->isVWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->generalTrade !== null) {
			
			$xfer += $output->writeFieldBegin('generalTrade');
			$xfer += $output->writeString($this->generalTrade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompany !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompany');
			$xfer += $output->writeString($this->purchaseCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompanyCode !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompanyCode');
			$xfer += $output->writeString($this->purchaseCompanyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUser !== null) {
			
			$xfer += $output->writeFieldBegin('createUser');
			$xfer += $output->writeString($this->createUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sales_site !== null) {
			
			$xfer += $output->writeFieldBegin('sales_site');
			$xfer += $output->writeString($this->sales_site);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_goods_status !== null) {
			
			$xfer += $output->writeFieldBegin('store_goods_status');
			$xfer += $output->writeString($this->store_goods_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expect_sales_time !== null) {
			
			$xfer += $output->writeFieldBegin('expect_sales_time');
			$xfer += $output->writeI64($this->expect_sales_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->owner !== null) {
			
			$xfer += $output->writeFieldBegin('owner');
			
			$em = new \com\vip\venus\po\service\Owner; 
			$output->writeString($em::$__names[$this->owner]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assignChannelCode !== null) {
			
			$xfer += $output->writeFieldBegin('assignChannelCode');
			$xfer += $output->writeString($this->assignChannelCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defectiveGrade !== null) {
			
			$xfer += $output->writeFieldBegin('defectiveGrade');
			$xfer += $output->writeI32($this->defectiveGrade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->additionalTag !== null) {
			
			$xfer += $output->writeFieldBegin('additionalTag');
			$xfer += $output->writeI32($this->additionalTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mainWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('mainWarehouse');
			$xfer += $output->writeI32($this->mainWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
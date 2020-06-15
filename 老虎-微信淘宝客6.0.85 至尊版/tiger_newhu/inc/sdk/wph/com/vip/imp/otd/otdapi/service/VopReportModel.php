<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\imp\otd\otdapi\service;

class VopReportModel {
	
	static $_TSPEC;
	public $date = null;
	public $channel = null;
	public $campaign_id = null;
	public $campaign_title = null;
	public $ad_id = null;
	public $ad_title = null;
	public $placement_id = null;
	public $placement_title = null;
	public $impression = null;
	public $click = null;
	public $cost = null;
	public $click_rate = null;
	public $cost_per_click = null;
	public $cost_per_mille = null;
	public $app_waken_uv = null;
	public $cost_per_app_waken_uv = null;
	public $app_waken_pv = null;
	public $app_waken_rate = null;
	public $miniapp_uv = null;
	public $app_uv = null;
	public $cost_per_app_uv = null;
	public $cost_per_miniapp_uv = null;
	public $general_uv = null;
	public $product_uv = null;
	public $special_uv = null;
	public $book_customer_in_24hour = null;
	public $new_customer_in_24hour = null;
	public $customer_in_24hour = null;
	public $book_sales_in_24hour = null;
	public $sales_in_24hour = null;
	public $book_orders_in_24hour = null;
	public $orders_in_24hour = null;
	public $book_roi_in_24hour = null;
	public $roi_in_24hour = null;
	public $book_customer_in_14day = null;
	public $new_customer_in_14day = null;
	public $customer_in_14day = null;
	public $book_sales_in_14day = null;
	public $sales_in_14day = null;
	public $book_orders_in_14day = null;
	public $orders_in_14day = null;
	public $book_roi_in_14day = null;
	public $roi_in_14day = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'date'
			),
			2 => array(
			'var' => 'channel'
			),
			3 => array(
			'var' => 'campaign_id'
			),
			4 => array(
			'var' => 'campaign_title'
			),
			5 => array(
			'var' => 'ad_id'
			),
			6 => array(
			'var' => 'ad_title'
			),
			7 => array(
			'var' => 'placement_id'
			),
			8 => array(
			'var' => 'placement_title'
			),
			9 => array(
			'var' => 'impression'
			),
			10 => array(
			'var' => 'click'
			),
			11 => array(
			'var' => 'cost'
			),
			12 => array(
			'var' => 'click_rate'
			),
			13 => array(
			'var' => 'cost_per_click'
			),
			14 => array(
			'var' => 'cost_per_mille'
			),
			15 => array(
			'var' => 'app_waken_uv'
			),
			16 => array(
			'var' => 'cost_per_app_waken_uv'
			),
			17 => array(
			'var' => 'app_waken_pv'
			),
			18 => array(
			'var' => 'app_waken_rate'
			),
			19 => array(
			'var' => 'miniapp_uv'
			),
			20 => array(
			'var' => 'app_uv'
			),
			21 => array(
			'var' => 'cost_per_app_uv'
			),
			22 => array(
			'var' => 'cost_per_miniapp_uv'
			),
			23 => array(
			'var' => 'general_uv'
			),
			24 => array(
			'var' => 'product_uv'
			),
			25 => array(
			'var' => 'special_uv'
			),
			26 => array(
			'var' => 'book_customer_in_24hour'
			),
			27 => array(
			'var' => 'new_customer_in_24hour'
			),
			28 => array(
			'var' => 'customer_in_24hour'
			),
			29 => array(
			'var' => 'book_sales_in_24hour'
			),
			30 => array(
			'var' => 'sales_in_24hour'
			),
			31 => array(
			'var' => 'book_orders_in_24hour'
			),
			32 => array(
			'var' => 'orders_in_24hour'
			),
			33 => array(
			'var' => 'book_roi_in_24hour'
			),
			34 => array(
			'var' => 'roi_in_24hour'
			),
			35 => array(
			'var' => 'book_customer_in_14day'
			),
			36 => array(
			'var' => 'new_customer_in_14day'
			),
			37 => array(
			'var' => 'customer_in_14day'
			),
			38 => array(
			'var' => 'book_sales_in_14day'
			),
			39 => array(
			'var' => 'sales_in_14day'
			),
			40 => array(
			'var' => 'book_orders_in_14day'
			),
			41 => array(
			'var' => 'orders_in_14day'
			),
			42 => array(
			'var' => 'book_roi_in_14day'
			),
			43 => array(
			'var' => 'roi_in_14day'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['date'])){
				
				$this->date = $vals['date'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['campaign_id'])){
				
				$this->campaign_id = $vals['campaign_id'];
			}
			
			
			if (isset($vals['campaign_title'])){
				
				$this->campaign_title = $vals['campaign_title'];
			}
			
			
			if (isset($vals['ad_id'])){
				
				$this->ad_id = $vals['ad_id'];
			}
			
			
			if (isset($vals['ad_title'])){
				
				$this->ad_title = $vals['ad_title'];
			}
			
			
			if (isset($vals['placement_id'])){
				
				$this->placement_id = $vals['placement_id'];
			}
			
			
			if (isset($vals['placement_title'])){
				
				$this->placement_title = $vals['placement_title'];
			}
			
			
			if (isset($vals['impression'])){
				
				$this->impression = $vals['impression'];
			}
			
			
			if (isset($vals['click'])){
				
				$this->click = $vals['click'];
			}
			
			
			if (isset($vals['cost'])){
				
				$this->cost = $vals['cost'];
			}
			
			
			if (isset($vals['click_rate'])){
				
				$this->click_rate = $vals['click_rate'];
			}
			
			
			if (isset($vals['cost_per_click'])){
				
				$this->cost_per_click = $vals['cost_per_click'];
			}
			
			
			if (isset($vals['cost_per_mille'])){
				
				$this->cost_per_mille = $vals['cost_per_mille'];
			}
			
			
			if (isset($vals['app_waken_uv'])){
				
				$this->app_waken_uv = $vals['app_waken_uv'];
			}
			
			
			if (isset($vals['cost_per_app_waken_uv'])){
				
				$this->cost_per_app_waken_uv = $vals['cost_per_app_waken_uv'];
			}
			
			
			if (isset($vals['app_waken_pv'])){
				
				$this->app_waken_pv = $vals['app_waken_pv'];
			}
			
			
			if (isset($vals['app_waken_rate'])){
				
				$this->app_waken_rate = $vals['app_waken_rate'];
			}
			
			
			if (isset($vals['miniapp_uv'])){
				
				$this->miniapp_uv = $vals['miniapp_uv'];
			}
			
			
			if (isset($vals['app_uv'])){
				
				$this->app_uv = $vals['app_uv'];
			}
			
			
			if (isset($vals['cost_per_app_uv'])){
				
				$this->cost_per_app_uv = $vals['cost_per_app_uv'];
			}
			
			
			if (isset($vals['cost_per_miniapp_uv'])){
				
				$this->cost_per_miniapp_uv = $vals['cost_per_miniapp_uv'];
			}
			
			
			if (isset($vals['general_uv'])){
				
				$this->general_uv = $vals['general_uv'];
			}
			
			
			if (isset($vals['product_uv'])){
				
				$this->product_uv = $vals['product_uv'];
			}
			
			
			if (isset($vals['special_uv'])){
				
				$this->special_uv = $vals['special_uv'];
			}
			
			
			if (isset($vals['book_customer_in_24hour'])){
				
				$this->book_customer_in_24hour = $vals['book_customer_in_24hour'];
			}
			
			
			if (isset($vals['new_customer_in_24hour'])){
				
				$this->new_customer_in_24hour = $vals['new_customer_in_24hour'];
			}
			
			
			if (isset($vals['customer_in_24hour'])){
				
				$this->customer_in_24hour = $vals['customer_in_24hour'];
			}
			
			
			if (isset($vals['book_sales_in_24hour'])){
				
				$this->book_sales_in_24hour = $vals['book_sales_in_24hour'];
			}
			
			
			if (isset($vals['sales_in_24hour'])){
				
				$this->sales_in_24hour = $vals['sales_in_24hour'];
			}
			
			
			if (isset($vals['book_orders_in_24hour'])){
				
				$this->book_orders_in_24hour = $vals['book_orders_in_24hour'];
			}
			
			
			if (isset($vals['orders_in_24hour'])){
				
				$this->orders_in_24hour = $vals['orders_in_24hour'];
			}
			
			
			if (isset($vals['book_roi_in_24hour'])){
				
				$this->book_roi_in_24hour = $vals['book_roi_in_24hour'];
			}
			
			
			if (isset($vals['roi_in_24hour'])){
				
				$this->roi_in_24hour = $vals['roi_in_24hour'];
			}
			
			
			if (isset($vals['book_customer_in_14day'])){
				
				$this->book_customer_in_14day = $vals['book_customer_in_14day'];
			}
			
			
			if (isset($vals['new_customer_in_14day'])){
				
				$this->new_customer_in_14day = $vals['new_customer_in_14day'];
			}
			
			
			if (isset($vals['customer_in_14day'])){
				
				$this->customer_in_14day = $vals['customer_in_14day'];
			}
			
			
			if (isset($vals['book_sales_in_14day'])){
				
				$this->book_sales_in_14day = $vals['book_sales_in_14day'];
			}
			
			
			if (isset($vals['sales_in_14day'])){
				
				$this->sales_in_14day = $vals['sales_in_14day'];
			}
			
			
			if (isset($vals['book_orders_in_14day'])){
				
				$this->book_orders_in_14day = $vals['book_orders_in_14day'];
			}
			
			
			if (isset($vals['orders_in_14day'])){
				
				$this->orders_in_14day = $vals['orders_in_14day'];
			}
			
			
			if (isset($vals['book_roi_in_14day'])){
				
				$this->book_roi_in_14day = $vals['book_roi_in_14day'];
			}
			
			
			if (isset($vals['roi_in_14day'])){
				
				$this->roi_in_14day = $vals['roi_in_14day'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VopReportModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->date);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\imp\otd\otdapi\service\VopDeliveryChannelType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->channel = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("campaign_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->campaign_id);
				
			}
			
			
			
			
			if ("campaign_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->campaign_title);
				
			}
			
			
			
			
			if ("ad_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ad_id);
				
			}
			
			
			
			
			if ("ad_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ad_title);
				
			}
			
			
			
			
			if ("placement_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->placement_id);
				
			}
			
			
			
			
			if ("placement_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->placement_title);
				
			}
			
			
			
			
			if ("impression" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->impression); 
				
			}
			
			
			
			
			if ("click" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->click); 
				
			}
			
			
			
			
			if ("cost" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost); 
				
			}
			
			
			
			
			if ("click_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->click_rate);
				
			}
			
			
			
			
			if ("cost_per_click" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_per_click); 
				
			}
			
			
			
			
			if ("cost_per_mille" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_per_mille); 
				
			}
			
			
			
			
			if ("app_waken_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->app_waken_uv); 
				
			}
			
			
			
			
			if ("cost_per_app_waken_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_per_app_waken_uv); 
				
			}
			
			
			
			
			if ("app_waken_pv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->app_waken_pv); 
				
			}
			
			
			
			
			if ("app_waken_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->app_waken_rate);
				
			}
			
			
			
			
			if ("miniapp_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->miniapp_uv); 
				
			}
			
			
			
			
			if ("app_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->app_uv); 
				
			}
			
			
			
			
			if ("cost_per_app_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_per_app_uv); 
				
			}
			
			
			
			
			if ("cost_per_miniapp_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cost_per_miniapp_uv); 
				
			}
			
			
			
			
			if ("general_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->general_uv); 
				
			}
			
			
			
			
			if ("product_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->product_uv); 
				
			}
			
			
			
			
			if ("special_uv" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->special_uv); 
				
			}
			
			
			
			
			if ("book_customer_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->book_customer_in_24hour); 
				
			}
			
			
			
			
			if ("new_customer_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->new_customer_in_24hour); 
				
			}
			
			
			
			
			if ("customer_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->customer_in_24hour); 
				
			}
			
			
			
			
			if ("book_sales_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->book_sales_in_24hour); 
				
			}
			
			
			
			
			if ("sales_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_in_24hour); 
				
			}
			
			
			
			
			if ("book_orders_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->book_orders_in_24hour); 
				
			}
			
			
			
			
			if ("orders_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orders_in_24hour); 
				
			}
			
			
			
			
			if ("book_roi_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->book_roi_in_24hour);
				
			}
			
			
			
			
			if ("roi_in_24hour" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->roi_in_24hour);
				
			}
			
			
			
			
			if ("book_customer_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->book_customer_in_14day); 
				
			}
			
			
			
			
			if ("new_customer_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->new_customer_in_14day); 
				
			}
			
			
			
			
			if ("customer_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->customer_in_14day); 
				
			}
			
			
			
			
			if ("book_sales_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->book_sales_in_14day); 
				
			}
			
			
			
			
			if ("sales_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sales_in_14day); 
				
			}
			
			
			
			
			if ("book_orders_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->book_orders_in_14day); 
				
			}
			
			
			
			
			if ("orders_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orders_in_14day); 
				
			}
			
			
			
			
			if ("book_roi_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->book_roi_in_14day);
				
			}
			
			
			
			
			if ("roi_in_14day" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->roi_in_14day);
				
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
		
		if($this->date !== null) {
			
			$xfer += $output->writeFieldBegin('date');
			$xfer += $output->writeString($this->date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			
			$em = new \com\vip\imp\otd\otdapi\service\VopDeliveryChannelType; 
			$output->writeString($em::$__names[$this->channel]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->campaign_id !== null) {
			
			$xfer += $output->writeFieldBegin('campaign_id');
			$xfer += $output->writeString($this->campaign_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->campaign_title !== null) {
			
			$xfer += $output->writeFieldBegin('campaign_title');
			$xfer += $output->writeString($this->campaign_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ad_id !== null) {
			
			$xfer += $output->writeFieldBegin('ad_id');
			$xfer += $output->writeString($this->ad_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ad_title !== null) {
			
			$xfer += $output->writeFieldBegin('ad_title');
			$xfer += $output->writeString($this->ad_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->placement_id !== null) {
			
			$xfer += $output->writeFieldBegin('placement_id');
			$xfer += $output->writeString($this->placement_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->placement_title !== null) {
			
			$xfer += $output->writeFieldBegin('placement_title');
			$xfer += $output->writeString($this->placement_title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('impression');
		$xfer += $output->writeI64($this->impression);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('click');
		$xfer += $output->writeI64($this->click);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost');
		$xfer += $output->writeI64($this->cost);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('click_rate');
		$xfer += $output->writeDouble($this->click_rate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost_per_click');
		$xfer += $output->writeI64($this->cost_per_click);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost_per_mille');
		$xfer += $output->writeI64($this->cost_per_mille);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('app_waken_uv');
		$xfer += $output->writeI64($this->app_waken_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost_per_app_waken_uv');
		$xfer += $output->writeI64($this->cost_per_app_waken_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('app_waken_pv');
		$xfer += $output->writeI64($this->app_waken_pv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('app_waken_rate');
		$xfer += $output->writeDouble($this->app_waken_rate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('miniapp_uv');
		$xfer += $output->writeI64($this->miniapp_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('app_uv');
		$xfer += $output->writeI64($this->app_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost_per_app_uv');
		$xfer += $output->writeI64($this->cost_per_app_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cost_per_miniapp_uv');
		$xfer += $output->writeI64($this->cost_per_miniapp_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('general_uv');
		$xfer += $output->writeI64($this->general_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_uv');
		$xfer += $output->writeI64($this->product_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('special_uv');
		$xfer += $output->writeI64($this->special_uv);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_customer_in_24hour');
		$xfer += $output->writeI64($this->book_customer_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('new_customer_in_24hour');
		$xfer += $output->writeI64($this->new_customer_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customer_in_24hour');
		$xfer += $output->writeI64($this->customer_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_sales_in_24hour');
		$xfer += $output->writeI64($this->book_sales_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_in_24hour');
		$xfer += $output->writeI64($this->sales_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_orders_in_24hour');
		$xfer += $output->writeI64($this->book_orders_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders_in_24hour');
		$xfer += $output->writeI64($this->orders_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_roi_in_24hour');
		$xfer += $output->writeDouble($this->book_roi_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('roi_in_24hour');
		$xfer += $output->writeDouble($this->roi_in_24hour);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_customer_in_14day');
		$xfer += $output->writeI64($this->book_customer_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('new_customer_in_14day');
		$xfer += $output->writeI64($this->new_customer_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('customer_in_14day');
		$xfer += $output->writeI64($this->customer_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_sales_in_14day');
		$xfer += $output->writeI64($this->book_sales_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_in_14day');
		$xfer += $output->writeI64($this->sales_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_orders_in_14day');
		$xfer += $output->writeI64($this->book_orders_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders_in_14day');
		$xfer += $output->writeI64($this->orders_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('book_roi_in_14day');
		$xfer += $output->writeDouble($this->book_roi_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('roi_in_14day');
		$xfer += $output->writeDouble($this->roi_in_14day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;

class HtProduct {
	
	static $_TSPEC;
	public $url = null;
	public $long_title = null;
	public $short_title = null;
	public $identify = null;
	public $wapurl = null;
	public $img_url = null;
	public $big_img_url = null;
	public $long_img_url = null;
	public $price = null;
	public $reference_price = null;
	public $former_price = null;
	public $discount = null;
	public $deal_sale = null;
	public $type = null;
	public $country = null;
	public $country_logo = null;
	public $warehouse = null;
	public $site = null;
	public $site_url = null;
	public $tagid = null;
	public $tag = null;
	public $categoryid = null;
	public $category = null;
	public $post = null;
	public $description = null;
	public $starttime = null;
	public $endtime = null;
	public $is_new = null;
	public $brand_id = null;
	public $friendly_name = null;
	public $logo_small = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'url'
			),
			2 => array(
			'var' => 'long_title'
			),
			3 => array(
			'var' => 'short_title'
			),
			4 => array(
			'var' => 'identify'
			),
			5 => array(
			'var' => 'wapurl'
			),
			6 => array(
			'var' => 'img_url'
			),
			7 => array(
			'var' => 'big_img_url'
			),
			8 => array(
			'var' => 'long_img_url'
			),
			9 => array(
			'var' => 'price'
			),
			10 => array(
			'var' => 'reference_price'
			),
			11 => array(
			'var' => 'former_price'
			),
			12 => array(
			'var' => 'discount'
			),
			13 => array(
			'var' => 'deal_sale'
			),
			14 => array(
			'var' => 'type'
			),
			15 => array(
			'var' => 'country'
			),
			16 => array(
			'var' => 'country_logo'
			),
			17 => array(
			'var' => 'warehouse'
			),
			18 => array(
			'var' => 'site'
			),
			19 => array(
			'var' => 'site_url'
			),
			20 => array(
			'var' => 'tagid'
			),
			21 => array(
			'var' => 'tag'
			),
			22 => array(
			'var' => 'categoryid'
			),
			23 => array(
			'var' => 'category'
			),
			24 => array(
			'var' => 'post'
			),
			25 => array(
			'var' => 'description'
			),
			26 => array(
			'var' => 'starttime'
			),
			27 => array(
			'var' => 'endtime'
			),
			28 => array(
			'var' => 'is_new'
			),
			29 => array(
			'var' => 'brand_id'
			),
			30 => array(
			'var' => 'friendly_name'
			),
			31 => array(
			'var' => 'logo_small'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
			if (isset($vals['long_title'])){
				
				$this->long_title = $vals['long_title'];
			}
			
			
			if (isset($vals['short_title'])){
				
				$this->short_title = $vals['short_title'];
			}
			
			
			if (isset($vals['identify'])){
				
				$this->identify = $vals['identify'];
			}
			
			
			if (isset($vals['wapurl'])){
				
				$this->wapurl = $vals['wapurl'];
			}
			
			
			if (isset($vals['img_url'])){
				
				$this->img_url = $vals['img_url'];
			}
			
			
			if (isset($vals['big_img_url'])){
				
				$this->big_img_url = $vals['big_img_url'];
			}
			
			
			if (isset($vals['long_img_url'])){
				
				$this->long_img_url = $vals['long_img_url'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['reference_price'])){
				
				$this->reference_price = $vals['reference_price'];
			}
			
			
			if (isset($vals['former_price'])){
				
				$this->former_price = $vals['former_price'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
			if (isset($vals['deal_sale'])){
				
				$this->deal_sale = $vals['deal_sale'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['country_logo'])){
				
				$this->country_logo = $vals['country_logo'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['site'])){
				
				$this->site = $vals['site'];
			}
			
			
			if (isset($vals['site_url'])){
				
				$this->site_url = $vals['site_url'];
			}
			
			
			if (isset($vals['tagid'])){
				
				$this->tagid = $vals['tagid'];
			}
			
			
			if (isset($vals['tag'])){
				
				$this->tag = $vals['tag'];
			}
			
			
			if (isset($vals['categoryid'])){
				
				$this->categoryid = $vals['categoryid'];
			}
			
			
			if (isset($vals['category'])){
				
				$this->category = $vals['category'];
			}
			
			
			if (isset($vals['post'])){
				
				$this->post = $vals['post'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['starttime'])){
				
				$this->starttime = $vals['starttime'];
			}
			
			
			if (isset($vals['endtime'])){
				
				$this->endtime = $vals['endtime'];
			}
			
			
			if (isset($vals['is_new'])){
				
				$this->is_new = $vals['is_new'];
			}
			
			
			if (isset($vals['brand_id'])){
				
				$this->brand_id = $vals['brand_id'];
			}
			
			
			if (isset($vals['friendly_name'])){
				
				$this->friendly_name = $vals['friendly_name'];
			}
			
			
			if (isset($vals['logo_small'])){
				
				$this->logo_small = $vals['logo_small'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->url);
				
			}
			
			
			
			
			if ("long_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->long_title);
				
			}
			
			
			
			
			if ("short_title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->short_title);
				
			}
			
			
			
			
			if ("identify" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->identify);
				
			}
			
			
			
			
			if ("wapurl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wapurl);
				
			}
			
			
			
			
			if ("img_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->img_url);
				
			}
			
			
			
			
			if ("big_img_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->big_img_url);
				
			}
			
			
			
			
			if ("long_img_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->long_img_url);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->price);
				
			}
			
			
			
			
			if ("reference_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->reference_price);
				
			}
			
			
			
			
			if ("former_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->former_price);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount);
				
			}
			
			
			
			
			if ("deal_sale" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->deal_sale); 
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("country_logo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country_logo);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("site" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site);
				
			}
			
			
			
			
			if ("site_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->site_url);
				
			}
			
			
			
			
			if ("tagid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagid);
				
			}
			
			
			
			
			if ("tag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tag);
				
			}
			
			
			
			
			if ("categoryid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryid);
				
			}
			
			
			
			
			if ("category" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category);
				
			}
			
			
			
			
			if ("post" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->post);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("starttime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->starttime); 
				
			}
			
			
			
			
			if ("endtime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endtime); 
				
			}
			
			
			
			
			if ("is_new" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_new);
				
			}
			
			
			
			
			if ("brand_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_id);
				
			}
			
			
			
			
			if ("friendly_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->friendly_name);
				
			}
			
			
			
			
			if ("logo_small" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logo_small);
				
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
		
		$xfer += $output->writeFieldBegin('url');
		$xfer += $output->writeString($this->url);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('long_title');
		$xfer += $output->writeString($this->long_title);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('short_title');
		$xfer += $output->writeString($this->short_title);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('identify');
		$xfer += $output->writeString($this->identify);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('wapurl');
		$xfer += $output->writeString($this->wapurl);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('img_url');
		$xfer += $output->writeString($this->img_url);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->big_img_url !== null) {
			
			$xfer += $output->writeFieldBegin('big_img_url');
			$xfer += $output->writeString($this->big_img_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->long_img_url !== null) {
			
			$xfer += $output->writeFieldBegin('long_img_url');
			$xfer += $output->writeString($this->long_img_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeDouble($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reference_price');
		$xfer += $output->writeDouble($this->reference_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('former_price');
		$xfer += $output->writeDouble($this->former_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('discount');
		$xfer += $output->writeString($this->discount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deal_sale');
		$xfer += $output->writeI64($this->deal_sale);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('country');
		$xfer += $output->writeString($this->country);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('country_logo');
		$xfer += $output->writeString($this->country_logo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('site');
		$xfer += $output->writeString($this->site);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('site_url');
		$xfer += $output->writeString($this->site_url);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tagid');
		$xfer += $output->writeString($this->tagid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tag');
		$xfer += $output->writeString($this->tag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryid');
		$xfer += $output->writeString($this->categoryid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category');
		$xfer += $output->writeString($this->category);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('post');
		$xfer += $output->writeString($this->post);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->starttime !== null) {
			
			$xfer += $output->writeFieldBegin('starttime');
			$xfer += $output->writeI64($this->starttime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('endtime');
		$xfer += $output->writeI64($this->endtime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_new');
		$xfer += $output->writeString($this->is_new);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_id');
		$xfer += $output->writeString($this->brand_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('friendly_name');
		$xfer += $output->writeString($this->friendly_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('logo_small');
		$xfer += $output->writeString($this->logo_small);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
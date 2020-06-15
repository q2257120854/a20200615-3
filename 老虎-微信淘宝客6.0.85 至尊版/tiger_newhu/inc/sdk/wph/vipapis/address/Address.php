<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\address;

class Address {
	
	static $_TSPEC;
	public $address_code = null;
	public $address_name = null;
	public $full_name = null;
	public $parent_code = null;
	public $has_children = null;
	public $is_directly = null;
	public $postage = null;
	public $is_cod = null;
	public $is_pos = null;
	public $is_big = null;
	public $is_app = null;
	public $cod_fee = null;
	public $is_service = null;
	public $is_ems = null;
	public $big_money = null;
	public $state = null;
	public $post_code = null;
	public $more_carrier = null;
	public $carrier_name = null;
	public $delivery = null;
	public $warehouse = null;
	public $is_support_air_embargo = null;
	public $addr_type = null;
	public $area_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'address_code'
			),
			2 => array(
			'var' => 'address_name'
			),
			3 => array(
			'var' => 'full_name'
			),
			4 => array(
			'var' => 'parent_code'
			),
			5 => array(
			'var' => 'has_children'
			),
			6 => array(
			'var' => 'is_directly'
			),
			7 => array(
			'var' => 'postage'
			),
			8 => array(
			'var' => 'is_cod'
			),
			9 => array(
			'var' => 'is_pos'
			),
			10 => array(
			'var' => 'is_big'
			),
			11 => array(
			'var' => 'is_app'
			),
			12 => array(
			'var' => 'cod_fee'
			),
			13 => array(
			'var' => 'is_service'
			),
			14 => array(
			'var' => 'is_ems'
			),
			15 => array(
			'var' => 'big_money'
			),
			16 => array(
			'var' => 'state'
			),
			17 => array(
			'var' => 'post_code'
			),
			18 => array(
			'var' => 'more_carrier'
			),
			19 => array(
			'var' => 'carrier_name'
			),
			20 => array(
			'var' => 'delivery'
			),
			21 => array(
			'var' => 'warehouse'
			),
			22 => array(
			'var' => 'is_support_air_embargo'
			),
			23 => array(
			'var' => 'addr_type'
			),
			24 => array(
			'var' => 'area_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['address_code'])){
				
				$this->address_code = $vals['address_code'];
			}
			
			
			if (isset($vals['address_name'])){
				
				$this->address_name = $vals['address_name'];
			}
			
			
			if (isset($vals['full_name'])){
				
				$this->full_name = $vals['full_name'];
			}
			
			
			if (isset($vals['parent_code'])){
				
				$this->parent_code = $vals['parent_code'];
			}
			
			
			if (isset($vals['has_children'])){
				
				$this->has_children = $vals['has_children'];
			}
			
			
			if (isset($vals['is_directly'])){
				
				$this->is_directly = $vals['is_directly'];
			}
			
			
			if (isset($vals['postage'])){
				
				$this->postage = $vals['postage'];
			}
			
			
			if (isset($vals['is_cod'])){
				
				$this->is_cod = $vals['is_cod'];
			}
			
			
			if (isset($vals['is_pos'])){
				
				$this->is_pos = $vals['is_pos'];
			}
			
			
			if (isset($vals['is_big'])){
				
				$this->is_big = $vals['is_big'];
			}
			
			
			if (isset($vals['is_app'])){
				
				$this->is_app = $vals['is_app'];
			}
			
			
			if (isset($vals['cod_fee'])){
				
				$this->cod_fee = $vals['cod_fee'];
			}
			
			
			if (isset($vals['is_service'])){
				
				$this->is_service = $vals['is_service'];
			}
			
			
			if (isset($vals['is_ems'])){
				
				$this->is_ems = $vals['is_ems'];
			}
			
			
			if (isset($vals['big_money'])){
				
				$this->big_money = $vals['big_money'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['post_code'])){
				
				$this->post_code = $vals['post_code'];
			}
			
			
			if (isset($vals['more_carrier'])){
				
				$this->more_carrier = $vals['more_carrier'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['delivery'])){
				
				$this->delivery = $vals['delivery'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['is_support_air_embargo'])){
				
				$this->is_support_air_embargo = $vals['is_support_air_embargo'];
			}
			
			
			if (isset($vals['addr_type'])){
				
				$this->addr_type = $vals['addr_type'];
			}
			
			
			if (isset($vals['area_type'])){
				
				$this->area_type = $vals['area_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Address';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("address_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address_code);
				
			}
			
			
			
			
			if ("address_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address_name);
				
			}
			
			
			
			
			if ("full_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->full_name);
				
			}
			
			
			
			
			if ("parent_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->parent_code);
				
			}
			
			
			
			
			if ("has_children" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->has_children); 
				
			}
			
			
			
			
			if ("is_directly" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_directly); 
				
			}
			
			
			
			
			if ("postage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->postage);
				
			}
			
			
			
			
			if ("is_cod" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_cod); 
				
			}
			
			
			
			
			if ("is_pos" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_pos); 
				
			}
			
			
			
			
			if ("is_big" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_big); 
				
			}
			
			
			
			
			if ("is_app" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_app); 
				
			}
			
			
			
			
			if ("cod_fee" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->cod_fee);
				
			}
			
			
			
			
			if ("is_service" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_service); 
				
			}
			
			
			
			
			if ("is_ems" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_ems); 
				
			}
			
			
			
			
			if ("big_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->big_money);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->state); 
				
			}
			
			
			
			
			if ("post_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->post_code);
				
			}
			
			
			
			
			if ("more_carrier" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->more_carrier); 
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("delivery" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("is_support_air_embargo" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_support_air_embargo); 
				
			}
			
			
			
			
			if ("addr_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->addr_type); 
				
			}
			
			
			
			
			if ("area_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->area_type);
				
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
		
		$xfer += $output->writeFieldBegin('address_code');
		$xfer += $output->writeString($this->address_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('address_name');
		$xfer += $output->writeString($this->address_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('full_name');
		$xfer += $output->writeString($this->full_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->parent_code !== null) {
			
			$xfer += $output->writeFieldBegin('parent_code');
			$xfer += $output->writeString($this->parent_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('has_children');
		$xfer += $output->writeByte($this->has_children);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_directly');
		$xfer += $output->writeByte($this->is_directly);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('postage');
		$xfer += $output->writeDouble($this->postage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_cod');
		$xfer += $output->writeByte($this->is_cod);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_pos');
		$xfer += $output->writeByte($this->is_pos);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_big');
		$xfer += $output->writeByte($this->is_big);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_app');
		$xfer += $output->writeByte($this->is_app);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cod_fee');
		$xfer += $output->writeDouble($this->cod_fee);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_service');
		$xfer += $output->writeByte($this->is_service);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_ems');
		$xfer += $output->writeByte($this->is_ems);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('big_money');
		$xfer += $output->writeDouble($this->big_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('state');
		$xfer += $output->writeByte($this->state);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('post_code');
		$xfer += $output->writeString($this->post_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('more_carrier');
		$xfer += $output->writeByte($this->more_carrier);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_name');
		$xfer += $output->writeString($this->carrier_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery');
		$xfer += $output->writeString($this->delivery);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_support_air_embargo');
		$xfer += $output->writeByte($this->is_support_air_embargo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('addr_type');
		$xfer += $output->writeI32($this->addr_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('area_type');
		$xfer += $output->writeString($this->area_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
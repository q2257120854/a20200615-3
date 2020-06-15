<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class SaleOrderResult {
	
	static $_TSPEC;
	public $sales_id = null;
	public $order_no = null;
	public $order_id = null;
	public $order_type = null;
	public $create_time = null;
	public $warehouse = null;
	public $remark = null;
	public $transport_day = null;
	public $order_status = null;
	public $buyer = null;
	public $address = null;
	public $tel = null;
	public $mobile = null;
	public $user_type_name = null;
	public $user_name = null;
	public $goHTS_money = null;
	public $chinaFreightForwarding = null;
	public $globalFreightForwarding = null;
	public $order_detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sales_id'
			),
			2 => array(
			'var' => 'order_no'
			),
			3 => array(
			'var' => 'order_id'
			),
			4 => array(
			'var' => 'order_type'
			),
			5 => array(
			'var' => 'create_time'
			),
			6 => array(
			'var' => 'warehouse'
			),
			7 => array(
			'var' => 'remark'
			),
			8 => array(
			'var' => 'transport_day'
			),
			9 => array(
			'var' => 'order_status'
			),
			10 => array(
			'var' => 'buyer'
			),
			11 => array(
			'var' => 'address'
			),
			12 => array(
			'var' => 'tel'
			),
			13 => array(
			'var' => 'mobile'
			),
			14 => array(
			'var' => 'user_type_name'
			),
			15 => array(
			'var' => 'user_name'
			),
			16 => array(
			'var' => 'goHTS_money'
			),
			17 => array(
			'var' => 'chinaFreightForwarding'
			),
			18 => array(
			'var' => 'globalFreightForwarding'
			),
			19 => array(
			'var' => 'order_detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sales_id'])){
				
				$this->sales_id = $vals['sales_id'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transport_day'])){
				
				$this->transport_day = $vals['transport_day'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['tel'])){
				
				$this->tel = $vals['tel'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['user_type_name'])){
				
				$this->user_type_name = $vals['user_type_name'];
			}
			
			
			if (isset($vals['user_name'])){
				
				$this->user_name = $vals['user_name'];
			}
			
			
			if (isset($vals['goHTS_money'])){
				
				$this->goHTS_money = $vals['goHTS_money'];
			}
			
			
			if (isset($vals['chinaFreightForwarding'])){
				
				$this->chinaFreightForwarding = $vals['chinaFreightForwarding'];
			}
			
			
			if (isset($vals['globalFreightForwarding'])){
				
				$this->globalFreightForwarding = $vals['globalFreightForwarding'];
			}
			
			
			if (isset($vals['order_detail_list'])){
				
				$this->order_detail_list = $vals['order_detail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SaleOrderResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sales_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_id);
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_type);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transport_day" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_day);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tel);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("user_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_type_name);
				
			}
			
			
			
			
			if ("user_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_name);
				
			}
			
			
			
			
			if ("goHTS_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goHTS_money);
				
			}
			
			
			
			
			if ("chinaFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chinaFreightForwarding);
				
			}
			
			
			
			
			if ("globalFreightForwarding" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->globalFreightForwarding);
				
			}
			
			
			
			
			if ("order_detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\OrderDetail();
						$elem0->read($input);
						
						$this->order_detail_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('sales_id');
		$xfer += $output->writeString($this->sales_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_no');
		$xfer += $output->writeString($this->order_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_type');
		$xfer += $output->writeString($this->order_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('remark');
		$xfer += $output->writeString($this->remark);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_day');
		$xfer += $output->writeString($this->transport_day);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_status');
		$xfer += $output->writeString($this->order_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('buyer');
		$xfer += $output->writeString($this->buyer);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('address');
		$xfer += $output->writeString($this->address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tel');
		$xfer += $output->writeString($this->tel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mobile');
		$xfer += $output->writeString($this->mobile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('user_type_name');
		$xfer += $output->writeString($this->user_type_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('user_name');
		$xfer += $output->writeString($this->user_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goHTS_money');
		$xfer += $output->writeString($this->goHTS_money);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('chinaFreightForwarding');
		$xfer += $output->writeString($this->chinaFreightForwarding);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('globalFreightForwarding');
		$xfer += $output->writeString($this->globalFreightForwarding);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_detail_list');
		
		if (!is_array($this->order_detail_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_detail_list as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
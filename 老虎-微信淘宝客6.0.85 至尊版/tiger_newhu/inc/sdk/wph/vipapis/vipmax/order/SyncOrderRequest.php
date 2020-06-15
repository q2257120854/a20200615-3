<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vipmax\order;

class SyncOrderRequest {
	
	static $_TSPEC;
	public $out_order_sn = null;
	public $pay_time = null;
	public $sales_warehouse = null;
	public $open_uid = null;
	public $mobile = null;
	public $order_detail = null;
	public $total_fee = null;
	public $discount_fee = null;
	public $payable_fee = null;
	public $company_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'out_order_sn'
			),
			2 => array(
			'var' => 'pay_time'
			),
			3 => array(
			'var' => 'sales_warehouse'
			),
			4 => array(
			'var' => 'open_uid'
			),
			5 => array(
			'var' => 'mobile'
			),
			6 => array(
			'var' => 'order_detail'
			),
			7 => array(
			'var' => 'total_fee'
			),
			8 => array(
			'var' => 'discount_fee'
			),
			9 => array(
			'var' => 'payable_fee'
			),
			10 => array(
			'var' => 'company_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['out_order_sn'])){
				
				$this->out_order_sn = $vals['out_order_sn'];
			}
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['sales_warehouse'])){
				
				$this->sales_warehouse = $vals['sales_warehouse'];
			}
			
			
			if (isset($vals['open_uid'])){
				
				$this->open_uid = $vals['open_uid'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['order_detail'])){
				
				$this->order_detail = $vals['order_detail'];
			}
			
			
			if (isset($vals['total_fee'])){
				
				$this->total_fee = $vals['total_fee'];
			}
			
			
			if (isset($vals['discount_fee'])){
				
				$this->discount_fee = $vals['discount_fee'];
			}
			
			
			if (isset($vals['payable_fee'])){
				
				$this->payable_fee = $vals['payable_fee'];
			}
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncOrderRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("out_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_order_sn);
				
			}
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pay_time);
				
			}
			
			
			
			
			if ("sales_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_warehouse);
				
			}
			
			
			
			
			if ("open_uid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_uid);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("order_detail" == $schemeField){
				
				$needSkip = false;
				
				$this->order_detail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vipmax\order\VipmaxOrderDetail();
						$elem0->read($input);
						
						$this->order_detail[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("total_fee" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_fee);
				
			}
			
			
			
			
			if ("discount_fee" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->discount_fee);
				
			}
			
			
			
			
			if ("payable_fee" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->payable_fee);
				
			}
			
			
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
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
		
		$xfer += $output->writeFieldBegin('out_order_sn');
		$xfer += $output->writeString($this->out_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_time');
		$xfer += $output->writeI64($this->pay_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_warehouse');
		$xfer += $output->writeString($this->sales_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->open_uid !== null) {
			
			$xfer += $output->writeFieldBegin('open_uid');
			$xfer += $output->writeString($this->open_uid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_detail');
		
		if (!is_array($this->order_detail)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_detail as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_fee');
		$xfer += $output->writeDouble($this->total_fee);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->discount_fee !== null) {
			
			$xfer += $output->writeFieldBegin('discount_fee');
			$xfer += $output->writeDouble($this->discount_fee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('payable_fee');
		$xfer += $output->writeDouble($this->payable_fee);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('company_code');
		$xfer += $output->writeString($this->company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
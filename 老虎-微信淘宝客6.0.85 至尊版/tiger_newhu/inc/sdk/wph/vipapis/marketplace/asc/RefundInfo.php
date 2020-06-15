<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class RefundInfo {
	
	static $_TSPEC;
	public $return_goods_money = null;
	public $return_goods_fav = null;
	public $send_carriage = null;
	public $back_carriage = null;
	public $return_vipmoney = null;
	public $return_redpacket = null;
	public $return_amount = null;
	public $return_type = null;
	public $refund_total = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_goods_money'
			),
			2 => array(
			'var' => 'return_goods_fav'
			),
			3 => array(
			'var' => 'send_carriage'
			),
			4 => array(
			'var' => 'back_carriage'
			),
			5 => array(
			'var' => 'return_vipmoney'
			),
			6 => array(
			'var' => 'return_redpacket'
			),
			7 => array(
			'var' => 'return_amount'
			),
			8 => array(
			'var' => 'return_type'
			),
			9 => array(
			'var' => 'refund_total'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_goods_money'])){
				
				$this->return_goods_money = $vals['return_goods_money'];
			}
			
			
			if (isset($vals['return_goods_fav'])){
				
				$this->return_goods_fav = $vals['return_goods_fav'];
			}
			
			
			if (isset($vals['send_carriage'])){
				
				$this->send_carriage = $vals['send_carriage'];
			}
			
			
			if (isset($vals['back_carriage'])){
				
				$this->back_carriage = $vals['back_carriage'];
			}
			
			
			if (isset($vals['return_vipmoney'])){
				
				$this->return_vipmoney = $vals['return_vipmoney'];
			}
			
			
			if (isset($vals['return_redpacket'])){
				
				$this->return_redpacket = $vals['return_redpacket'];
			}
			
			
			if (isset($vals['return_amount'])){
				
				$this->return_amount = $vals['return_amount'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['refund_total'])){
				
				$this->refund_total = $vals['refund_total'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefundInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_goods_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->return_goods_money);
				
			}
			
			
			
			
			if ("return_goods_fav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->return_goods_fav);
				
			}
			
			
			
			
			if ("send_carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->send_carriage);
				
			}
			
			
			
			
			if ("back_carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->back_carriage);
				
			}
			
			
			
			
			if ("return_vipmoney" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->return_vipmoney);
				
			}
			
			
			
			
			if ("return_redpacket" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->return_redpacket);
				
			}
			
			
			
			
			if ("return_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->return_amount);
				
			}
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_type);
				
			}
			
			
			
			
			if ("refund_total" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->refund_total);
				
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
		
		if($this->return_goods_money !== null) {
			
			$xfer += $output->writeFieldBegin('return_goods_money');
			$xfer += $output->writeDouble($this->return_goods_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_goods_fav !== null) {
			
			$xfer += $output->writeFieldBegin('return_goods_fav');
			$xfer += $output->writeDouble($this->return_goods_fav);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->send_carriage !== null) {
			
			$xfer += $output->writeFieldBegin('send_carriage');
			$xfer += $output->writeDouble($this->send_carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->back_carriage !== null) {
			
			$xfer += $output->writeFieldBegin('back_carriage');
			$xfer += $output->writeDouble($this->back_carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_vipmoney !== null) {
			
			$xfer += $output->writeFieldBegin('return_vipmoney');
			$xfer += $output->writeDouble($this->return_vipmoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_redpacket !== null) {
			
			$xfer += $output->writeFieldBegin('return_redpacket');
			$xfer += $output->writeDouble($this->return_redpacket);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_amount !== null) {
			
			$xfer += $output->writeFieldBegin('return_amount');
			$xfer += $output->writeDouble($this->return_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_type !== null) {
			
			$xfer += $output->writeFieldBegin('return_type');
			$xfer += $output->writeString($this->return_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_total !== null) {
			
			$xfer += $output->writeFieldBegin('refund_total');
			$xfer += $output->writeDouble($this->refund_total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
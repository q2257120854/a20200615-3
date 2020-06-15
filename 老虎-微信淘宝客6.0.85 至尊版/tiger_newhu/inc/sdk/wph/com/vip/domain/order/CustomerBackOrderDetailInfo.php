<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class CustomerBackOrderDetailInfo {
	
	static $_TSPEC;
	public $erp_back_sn = null;
	public $transport_no = null;
	public $carriage = null;
	public $order_status = null;
	public $memo = null;
	public $warehouse = null;
	public $action_time = null;
	public $itemList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'erp_back_sn'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'carriage'
			),
			4 => array(
			'var' => 'order_status'
			),
			5 => array(
			'var' => 'memo'
			),
			6 => array(
			'var' => 'warehouse'
			),
			7 => array(
			'var' => 'action_time'
			),
			8 => array(
			'var' => 'itemList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['erp_back_sn'])){
				
				$this->erp_back_sn = $vals['erp_back_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['memo'])){
				
				$this->memo = $vals['memo'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['action_time'])){
				
				$this->action_time = $vals['action_time'];
			}
			
			
			if (isset($vals['itemList'])){
				
				$this->itemList = $vals['itemList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CustomerBackOrderDetailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("erp_back_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_back_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->carriage);
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_status);
				
			}
			
			
			
			
			if ("memo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->memo);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("action_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_time);
				
			}
			
			
			
			
			if ("itemList" == $schemeField){
				
				$needSkip = false;
				
				$this->itemList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\domain\order\CustomerBackOrderDetailItemInfo();
						$elem0->read($input);
						
						$this->itemList[$_size0++] = $elem0;
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
		
		if($this->erp_back_sn !== null) {
			
			$xfer += $output->writeFieldBegin('erp_back_sn');
			$xfer += $output->writeString($this->erp_back_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeDouble($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_status !== null) {
			
			$xfer += $output->writeFieldBegin('order_status');
			$xfer += $output->writeString($this->order_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->memo !== null) {
			
			$xfer += $output->writeFieldBegin('memo');
			$xfer += $output->writeString($this->memo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->action_time !== null) {
			
			$xfer += $output->writeFieldBegin('action_time');
			$xfer += $output->writeString($this->action_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemList !== null) {
			
			$xfer += $output->writeFieldBegin('itemList');
			
			if (!is_array($this->itemList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->itemList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
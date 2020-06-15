<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;
interface HtSaleTransferBatchNoIfaceServiceIf{
	
	
	public function getSaleTransferBatchNoOrderList( $warehouse, $batchNo, $deliveryNum, $customsCode, $chinaFreightForwarding, $globalFreightForwarding, $customsClearanceMode, $creatTime, $orders);
	
	public function healthCheck();
	
}

class _HtSaleTransferBatchNoIfaceServiceClient extends \Osp\Base\OspStub implements \vipapis\order\HtSaleTransferBatchNoIfaceServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.order.HtSaleTransferBatchNoIfaceService", "1.0.0");
	}
	
	
	public function getSaleTransferBatchNoOrderList( $warehouse, $batchNo, $deliveryNum, $customsCode, $chinaFreightForwarding, $globalFreightForwarding, $customsClearanceMode, $creatTime, $orders){
		
		$this->send_getSaleTransferBatchNoOrderList( $warehouse, $batchNo, $deliveryNum, $customsCode, $chinaFreightForwarding, $globalFreightForwarding, $customsClearanceMode, $creatTime, $orders);
		return $this->recv_getSaleTransferBatchNoOrderList();
	}
	
	public function send_getSaleTransferBatchNoOrderList( $warehouse, $batchNo, $deliveryNum, $customsCode, $chinaFreightForwarding, $globalFreightForwarding, $customsClearanceMode, $creatTime, $orders){
		
		$this->initInvocation("getSaleTransferBatchNoOrderList");
		$args = new \vipapis\order\HtSaleTransferBatchNoIfaceService_getSaleTransferBatchNoOrderList_args();
		
		$args->warehouse = $warehouse;
		
		$args->batchNo = $batchNo;
		
		$args->deliveryNum = $deliveryNum;
		
		$args->customsCode = $customsCode;
		
		$args->chinaFreightForwarding = $chinaFreightForwarding;
		
		$args->globalFreightForwarding = $globalFreightForwarding;
		
		$args->customsClearanceMode = $customsClearanceMode;
		
		$args->creatTime = $creatTime;
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_getSaleTransferBatchNoOrderList(){
		
		$result = new \vipapis\order\HtSaleTransferBatchNoIfaceService_getSaleTransferBatchNoOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\order\HtSaleTransferBatchNoIfaceService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\order\HtSaleTransferBatchNoIfaceService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class HtSaleTransferBatchNoIfaceService_getSaleTransferBatchNoOrderList_args {
	
	static $_TSPEC;
	public $warehouse = null;
	public $batchNo = null;
	public $deliveryNum = null;
	public $customsCode = null;
	public $chinaFreightForwarding = null;
	public $globalFreightForwarding = null;
	public $customsClearanceMode = null;
	public $creatTime = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'batchNo'
			),
			3 => array(
			'var' => 'deliveryNum'
			),
			4 => array(
			'var' => 'customsCode'
			),
			5 => array(
			'var' => 'chinaFreightForwarding'
			),
			6 => array(
			'var' => 'globalFreightForwarding'
			),
			7 => array(
			'var' => 'customsClearanceMode'
			),
			8 => array(
			'var' => 'creatTime'
			),
			9 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['batchNo'])){
				
				$this->batchNo = $vals['batchNo'];
			}
			
			
			if (isset($vals['deliveryNum'])){
				
				$this->deliveryNum = $vals['deliveryNum'];
			}
			
			
			if (isset($vals['customsCode'])){
				
				$this->customsCode = $vals['customsCode'];
			}
			
			
			if (isset($vals['chinaFreightForwarding'])){
				
				$this->chinaFreightForwarding = $vals['chinaFreightForwarding'];
			}
			
			
			if (isset($vals['globalFreightForwarding'])){
				
				$this->globalFreightForwarding = $vals['globalFreightForwarding'];
			}
			
			
			if (isset($vals['customsClearanceMode'])){
				
				$this->customsClearanceMode = $vals['customsClearanceMode'];
			}
			
			
			if (isset($vals['creatTime'])){
				
				$this->creatTime = $vals['creatTime'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->batchNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->deliveryNum); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->chinaFreightForwarding);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->globalFreightForwarding);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsClearanceMode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->creatTime);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\haitao\orderservice\service\HtSaleTransferBatchNoReOrder();
					$elem0->read($input);
					
					$this->orders[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->batchNo !== null) {
			
			$xfer += $output->writeFieldBegin('batchNo');
			$xfer += $output->writeString($this->batchNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliveryNum !== null) {
			
			$xfer += $output->writeFieldBegin('deliveryNum');
			$xfer += $output->writeI32($this->deliveryNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsCode !== null) {
			
			$xfer += $output->writeFieldBegin('customsCode');
			$xfer += $output->writeString($this->customsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chinaFreightForwarding !== null) {
			
			$xfer += $output->writeFieldBegin('chinaFreightForwarding');
			$xfer += $output->writeString($this->chinaFreightForwarding);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->globalFreightForwarding !== null) {
			
			$xfer += $output->writeFieldBegin('globalFreightForwarding');
			$xfer += $output->writeString($this->globalFreightForwarding);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsClearanceMode !== null) {
			
			$xfer += $output->writeFieldBegin('customsClearanceMode');
			$xfer += $output->writeString($this->customsClearanceMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creatTime !== null) {
			
			$xfer += $output->writeFieldBegin('creatTime');
			$xfer += $output->writeString($this->creatTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orders !== null) {
			
			$xfer += $output->writeFieldBegin('orders');
			
			if (!is_array($this->orders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orders as $iter0){
				
				
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




class HtSaleTransferBatchNoIfaceService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleTransferBatchNoIfaceService_getSaleTransferBatchNoOrderList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtSaleTransferBatchNoResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleTransferBatchNoIfaceService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>
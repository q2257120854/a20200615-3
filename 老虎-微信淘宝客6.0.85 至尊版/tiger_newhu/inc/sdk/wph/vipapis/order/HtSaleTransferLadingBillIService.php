<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;
interface HtSaleTransferLadingBillIServiceIf{
	
	
	public function getLadingBillInfo( $userId, $ladingBillNumber);
	
	public function getSaleTransferLadingBillIBatchNoOrderList( $warehouse, $ladingBillNumber, $shipmentCountry, $arriveCountry, $customsClearanceMode, $totalWeight, $subBillNumerList);
	
	public function healthCheck();
	
	public function matchLaddingNum( $orders);
	
}

class _HtSaleTransferLadingBillIServiceClient extends \Osp\Base\OspStub implements \vipapis\order\HtSaleTransferLadingBillIServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.order.HtSaleTransferLadingBillIService", "1.0.0");
	}
	
	
	public function getLadingBillInfo( $userId, $ladingBillNumber){
		
		$this->send_getLadingBillInfo( $userId, $ladingBillNumber);
		return $this->recv_getLadingBillInfo();
	}
	
	public function send_getLadingBillInfo( $userId, $ladingBillNumber){
		
		$this->initInvocation("getLadingBillInfo");
		$args = new \vipapis\order\HtSaleTransferLadingBillIService_getLadingBillInfo_args();
		
		$args->userId = $userId;
		
		$args->ladingBillNumber = $ladingBillNumber;
		
		$this->send_base($args);
	}
	
	public function recv_getLadingBillInfo(){
		
		$result = new \vipapis\order\HtSaleTransferLadingBillIService_getLadingBillInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSaleTransferLadingBillIBatchNoOrderList( $warehouse, $ladingBillNumber, $shipmentCountry, $arriveCountry, $customsClearanceMode, $totalWeight, $subBillNumerList){
		
		$this->send_getSaleTransferLadingBillIBatchNoOrderList( $warehouse, $ladingBillNumber, $shipmentCountry, $arriveCountry, $customsClearanceMode, $totalWeight, $subBillNumerList);
		return $this->recv_getSaleTransferLadingBillIBatchNoOrderList();
	}
	
	public function send_getSaleTransferLadingBillIBatchNoOrderList( $warehouse, $ladingBillNumber, $shipmentCountry, $arriveCountry, $customsClearanceMode, $totalWeight, $subBillNumerList){
		
		$this->initInvocation("getSaleTransferLadingBillIBatchNoOrderList");
		$args = new \vipapis\order\HtSaleTransferLadingBillIService_getSaleTransferLadingBillIBatchNoOrderList_args();
		
		$args->warehouse = $warehouse;
		
		$args->ladingBillNumber = $ladingBillNumber;
		
		$args->shipmentCountry = $shipmentCountry;
		
		$args->arriveCountry = $arriveCountry;
		
		$args->customsClearanceMode = $customsClearanceMode;
		
		$args->totalWeight = $totalWeight;
		
		$args->subBillNumerList = $subBillNumerList;
		
		$this->send_base($args);
	}
	
	public function recv_getSaleTransferLadingBillIBatchNoOrderList(){
		
		$result = new \vipapis\order\HtSaleTransferLadingBillIService_getSaleTransferLadingBillIBatchNoOrderList_result();
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
		$args = new \vipapis\order\HtSaleTransferLadingBillIService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\order\HtSaleTransferLadingBillIService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function matchLaddingNum( $orders){
		
		$this->send_matchLaddingNum( $orders);
		return $this->recv_matchLaddingNum();
	}
	
	public function send_matchLaddingNum( $orders){
		
		$this->initInvocation("matchLaddingNum");
		$args = new \vipapis\order\HtSaleTransferLadingBillIService_matchLaddingNum_args();
		
		$args->orders = $orders;
		
		$this->send_base($args);
	}
	
	public function recv_matchLaddingNum(){
		
		$result = new \vipapis\order\HtSaleTransferLadingBillIService_matchLaddingNum_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class HtSaleTransferLadingBillIService_getLadingBillInfo_args {
	
	static $_TSPEC;
	public $userId = null;
	public $ladingBillNumber = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'ladingBillNumber'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['ladingBillNumber'])){
				
				$this->ladingBillNumber = $vals['ladingBillNumber'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->userId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ladingBillNumber);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeString($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('ladingBillNumber');
		$xfer += $output->writeString($this->ladingBillNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleTransferLadingBillIService_getSaleTransferLadingBillIBatchNoOrderList_args {
	
	static $_TSPEC;
	public $warehouse = null;
	public $ladingBillNumber = null;
	public $shipmentCountry = null;
	public $arriveCountry = null;
	public $customsClearanceMode = null;
	public $totalWeight = null;
	public $subBillNumerList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'ladingBillNumber'
			),
			3 => array(
			'var' => 'shipmentCountry'
			),
			4 => array(
			'var' => 'arriveCountry'
			),
			5 => array(
			'var' => 'customsClearanceMode'
			),
			6 => array(
			'var' => 'totalWeight'
			),
			7 => array(
			'var' => 'subBillNumerList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['ladingBillNumber'])){
				
				$this->ladingBillNumber = $vals['ladingBillNumber'];
			}
			
			
			if (isset($vals['shipmentCountry'])){
				
				$this->shipmentCountry = $vals['shipmentCountry'];
			}
			
			
			if (isset($vals['arriveCountry'])){
				
				$this->arriveCountry = $vals['arriveCountry'];
			}
			
			
			if (isset($vals['customsClearanceMode'])){
				
				$this->customsClearanceMode = $vals['customsClearanceMode'];
			}
			
			
			if (isset($vals['totalWeight'])){
				
				$this->totalWeight = $vals['totalWeight'];
			}
			
			
			if (isset($vals['subBillNumerList'])){
				
				$this->subBillNumerList = $vals['subBillNumerList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ladingBillNumber);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->shipmentCountry);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->arriveCountry);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->customsClearanceMode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readDouble($this->totalWeight);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->subBillNumerList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\haitao\orderservice\service\SubLadingBillNumberVo();
					$elem0->read($input);
					
					$this->subBillNumerList[$_size0++] = $elem0;
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
		
		
		if($this->ladingBillNumber !== null) {
			
			$xfer += $output->writeFieldBegin('ladingBillNumber');
			$xfer += $output->writeString($this->ladingBillNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentCountry !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentCountry');
			$xfer += $output->writeString($this->shipmentCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->arriveCountry !== null) {
			
			$xfer += $output->writeFieldBegin('arriveCountry');
			$xfer += $output->writeString($this->arriveCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customsClearanceMode !== null) {
			
			$xfer += $output->writeFieldBegin('customsClearanceMode');
			$xfer += $output->writeString($this->customsClearanceMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalWeight !== null) {
			
			$xfer += $output->writeFieldBegin('totalWeight');
			$xfer += $output->writeDouble($this->totalWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subBillNumerList !== null) {
			
			$xfer += $output->writeFieldBegin('subBillNumerList');
			
			if (!is_array($this->subBillNumerList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->subBillNumerList as $iter0){
				
				
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




class HtSaleTransferLadingBillIService_healthCheck_args {
	
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




class HtSaleTransferLadingBillIService_matchLaddingNum_args {
	
	static $_TSPEC;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->orders = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->orders[$_size1++] = $elem1;
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
		
		if($this->orders !== null) {
			
			$xfer += $output->writeFieldBegin('orders');
			
			if (!is_array($this->orders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orders as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtSaleTransferLadingBillIService_getLadingBillInfo_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtLadingBillNumberInfoResult();
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




class HtSaleTransferLadingBillIService_getSaleTransferLadingBillIBatchNoOrderList_result {
	
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
			
			
			$this->success = new \com\vip\haitao\orderservice\service\HtSaleTransferLadingBillResult();
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




class HtSaleTransferLadingBillIService_healthCheck_result {
	
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




class HtSaleTransferLadingBillIService_matchLaddingNum_result {
	
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
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->success[$_size0++] = $elem0;
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\normal;
interface SalesProductServiceIf{
	
	
	public function healthCheck();
	
	public function listingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn);
	
	public function unlistingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn);
	
}

class _SalesProductServiceClient extends \Osp\Base\OspStub implements \vipapis\normal\SalesProductServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.normal.SalesProductService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \vipapis\normal\SalesProductService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\normal\SalesProductService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn){
		
		$this->send_listingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn);
		return $this->recv_listingSpu();
	}
	
	public function send_listingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn){
		
		$this->initInvocation("listingSpu");
		$args = new \vipapis\normal\SalesProductService_listingSpu_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->cooperation_no = $cooperation_no;
		
		$args->warehouse_supplier = $warehouse_supplier;
		
		$args->sn = $sn;
		
		$this->send_base($args);
	}
	
	public function recv_listingSpu(){
		
		$result = new \vipapis\normal\SalesProductService_listingSpu_result();
		$this->receive_base($result);
		
	}
	
	
	public function unlistingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn){
		
		$this->send_unlistingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn);
		return $this->recv_unlistingSpu();
	}
	
	public function send_unlistingSpu( $vendor_id, $cooperation_no, $warehouse_supplier, $sn){
		
		$this->initInvocation("unlistingSpu");
		$args = new \vipapis\normal\SalesProductService_unlistingSpu_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->cooperation_no = $cooperation_no;
		
		$args->warehouse_supplier = $warehouse_supplier;
		
		$args->sn = $sn;
		
		$this->send_base($args);
	}
	
	public function recv_unlistingSpu(){
		
		$result = new \vipapis\normal\SalesProductService_unlistingSpu_result();
		$this->receive_base($result);
		
	}
	
	
}




class SalesProductService_healthCheck_args {
	
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




class SalesProductService_listingSpu_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $cooperation_no = null;
	public $warehouse_supplier = null;
	public $sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'cooperation_no'
			),
			3 => array(
			'var' => 'warehouse_supplier'
			),
			4 => array(
			'var' => 'sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse_supplier'])){
				
				$this->warehouse_supplier = $vals['warehouse_supplier'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->cooperation_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse_supplier);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeString($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_supplier !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_supplier');
			$xfer += $output->writeString($this->warehouse_supplier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SalesProductService_unlistingSpu_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $cooperation_no = null;
	public $warehouse_supplier = null;
	public $sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'cooperation_no'
			),
			3 => array(
			'var' => 'warehouse_supplier'
			),
			4 => array(
			'var' => 'sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse_supplier'])){
				
				$this->warehouse_supplier = $vals['warehouse_supplier'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->cooperation_no);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouse_supplier);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sn);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeString($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_supplier !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_supplier');
			$xfer += $output->writeString($this->warehouse_supplier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sn');
		$xfer += $output->writeString($this->sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class SalesProductService_healthCheck_result {
	
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




class SalesProductService_listingSpu_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




class SalesProductService_unlistingSpu_result {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
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




?>
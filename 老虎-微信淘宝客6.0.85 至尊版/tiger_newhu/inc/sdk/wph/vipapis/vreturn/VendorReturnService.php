<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;
interface VendorReturnServiceIf{
	
	
	public function getReturnDetail( $vendor_id, $warehouse, $return_sn, $out_time_start, $out_time_end, $page, $limit);
	
	public function getReturnInfo( $vendor_id, $warehouse, $return_sn, $st_create_time, $ed_create_time, $page, $limit);
	
	public function healthCheck();
	
}

class _VendorReturnServiceClient extends \Osp\Base\OspStub implements \vipapis\vreturn\VendorReturnServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.vreturn.VendorReturnService", "1.0.0");
	}
	
	
	public function getReturnDetail( $vendor_id, $warehouse, $return_sn, $out_time_start, $out_time_end, $page, $limit){
		
		$this->send_getReturnDetail( $vendor_id, $warehouse, $return_sn, $out_time_start, $out_time_end, $page, $limit);
		return $this->recv_getReturnDetail();
	}
	
	public function send_getReturnDetail( $vendor_id, $warehouse, $return_sn, $out_time_start, $out_time_end, $page, $limit){
		
		$this->initInvocation("getReturnDetail");
		$args = new \vipapis\vreturn\VendorReturnService_getReturnDetail_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->warehouse = $warehouse;
		
		$args->return_sn = $return_sn;
		
		$args->out_time_start = $out_time_start;
		
		$args->out_time_end = $out_time_end;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnDetail(){
		
		$result = new \vipapis\vreturn\VendorReturnService_getReturnDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnInfo( $vendor_id, $warehouse, $return_sn, $st_create_time, $ed_create_time, $page, $limit){
		
		$this->send_getReturnInfo( $vendor_id, $warehouse, $return_sn, $st_create_time, $ed_create_time, $page, $limit);
		return $this->recv_getReturnInfo();
	}
	
	public function send_getReturnInfo( $vendor_id, $warehouse, $return_sn, $st_create_time, $ed_create_time, $page, $limit){
		
		$this->initInvocation("getReturnInfo");
		$args = new \vipapis\vreturn\VendorReturnService_getReturnInfo_args();
		
		$args->vendor_id = $vendor_id;
		
		$args->warehouse = $warehouse;
		
		$args->return_sn = $return_sn;
		
		$args->st_create_time = $st_create_time;
		
		$args->ed_create_time = $ed_create_time;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnInfo(){
		
		$result = new \vipapis\vreturn\VendorReturnService_getReturnInfo_result();
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
		$args = new \vipapis\vreturn\VendorReturnService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\vreturn\VendorReturnService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VendorReturnService_getReturnDetail_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $warehouse = null;
	public $return_sn = null;
	public $out_time_start = null;
	public $out_time_end = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'return_sn'
			),
			4 => array(
			'var' => 'out_time_start'
			),
			5 => array(
			'var' => 'out_time_end'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['out_time_start'])){
				
				$this->out_time_start = $vals['out_time_start'];
			}
			
			
			if (isset($vals['out_time_end'])){
				
				$this->out_time_end = $vals['out_time_end'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->return_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->out_time_start);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->out_time_end);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		
		$em = new \vipapis\common\Warehouse; 
		$output->writeString($em::$__names[$this->warehouse]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->return_sn !== null) {
			
			$xfer += $output->writeFieldBegin('return_sn');
			$xfer += $output->writeString($this->return_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time_start !== null) {
			
			$xfer += $output->writeFieldBegin('out_time_start');
			$xfer += $output->writeString($this->out_time_start);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time_end !== null) {
			
			$xfer += $output->writeFieldBegin('out_time_end');
			$xfer += $output->writeString($this->out_time_end);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorReturnService_getReturnInfo_args {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $warehouse = null;
	public $return_sn = null;
	public $st_create_time = null;
	public $ed_create_time = null;
	public $page = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'return_sn'
			),
			4 => array(
			'var' => 'st_create_time'
			),
			5 => array(
			'var' => 'ed_create_time'
			),
			6 => array(
			'var' => 'page'
			),
			7 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['st_create_time'])){
				
				$this->st_create_time = $vals['st_create_time'];
			}
			
			
			if (isset($vals['ed_create_time'])){
				
				$this->ed_create_time = $vals['ed_create_time'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendor_id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \vipapis\common\Warehouse::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->warehouse = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->return_sn);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->st_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->ed_create_time);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouse');
		
		$em = new \vipapis\common\Warehouse; 
		$output->writeString($em::$__names[$this->warehouse]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->return_sn !== null) {
			
			$xfer += $output->writeFieldBegin('return_sn');
			$xfer += $output->writeString($this->return_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->st_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('st_create_time');
			$xfer += $output->writeString($this->st_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ed_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('ed_create_time');
			$xfer += $output->writeString($this->ed_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->page !== null) {
			
			$xfer += $output->writeFieldBegin('page');
			$xfer += $output->writeI32($this->page);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorReturnService_healthCheck_args {
	
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




class VendorReturnService_getReturnDetail_result {
	
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
			
			
			$this->success = new \vipapis\vreturn\GetReturnDetailResponse();
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




class VendorReturnService_getReturnInfo_result {
	
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
			
			
			$this->success = new \vipapis\vreturn\GetReturnInfoResponse();
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




class VendorReturnService_healthCheck_result {
	
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
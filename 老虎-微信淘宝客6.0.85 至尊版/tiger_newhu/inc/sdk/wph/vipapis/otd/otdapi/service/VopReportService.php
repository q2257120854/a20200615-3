<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\otd\otdapi\service;
interface VopReportServiceIf{
	
	
	public function getDailyReports( $advertiser_id, $channel, $level, $start_date, $end_date, $page_no, $page_size);
	
	public function healthCheck();
	
}

class _VopReportServiceClient extends \Osp\Base\OspStub implements \vipapis\otd\otdapi\service\VopReportServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.otd.otdapi.service.VopReportService", "1.0.0");
	}
	
	
	public function getDailyReports( $advertiser_id, $channel, $level, $start_date, $end_date, $page_no, $page_size){
		
		$this->send_getDailyReports( $advertiser_id, $channel, $level, $start_date, $end_date, $page_no, $page_size);
		return $this->recv_getDailyReports();
	}
	
	public function send_getDailyReports( $advertiser_id, $channel, $level, $start_date, $end_date, $page_no, $page_size){
		
		$this->initInvocation("getDailyReports");
		$args = new \vipapis\otd\otdapi\service\VopReportService_getDailyReports_args();
		
		$args->advertiser_id = $advertiser_id;
		
		$args->channel = $channel;
		
		$args->level = $level;
		
		$args->start_date = $start_date;
		
		$args->end_date = $end_date;
		
		$args->page_no = $page_no;
		
		$args->page_size = $page_size;
		
		$this->send_base($args);
	}
	
	public function recv_getDailyReports(){
		
		$result = new \vipapis\otd\otdapi\service\VopReportService_getDailyReports_result();
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
		$args = new \vipapis\otd\otdapi\service\VopReportService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\otd\otdapi\service\VopReportService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VopReportService_getDailyReports_args {
	
	static $_TSPEC;
	public $advertiser_id = null;
	public $channel = null;
	public $level = null;
	public $start_date = null;
	public $end_date = null;
	public $page_no = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'advertiser_id'
			),
			2 => array(
			'var' => 'channel'
			),
			3 => array(
			'var' => 'level'
			),
			4 => array(
			'var' => 'start_date'
			),
			5 => array(
			'var' => 'end_date'
			),
			6 => array(
			'var' => 'page_no'
			),
			7 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['advertiser_id'])){
				
				$this->advertiser_id = $vals['advertiser_id'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['level'])){
				
				$this->level = $vals['level'];
			}
			
			
			if (isset($vals['start_date'])){
				
				$this->start_date = $vals['start_date'];
			}
			
			
			if (isset($vals['end_date'])){
				
				$this->end_date = $vals['end_date'];
			}
			
			
			if (isset($vals['page_no'])){
				
				$this->page_no = $vals['page_no'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->advertiser_id);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\imp\otd\otdapi\service\VopDeliveryChannelType::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->channel = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\imp\otd\otdapi\service\VopReportLevel::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->level = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->start_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->end_date);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_no); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page_size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->advertiser_id !== null) {
			
			$xfer += $output->writeFieldBegin('advertiser_id');
			$xfer += $output->writeString($this->advertiser_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			
			$em = new \com\vip\imp\otd\otdapi\service\VopDeliveryChannelType; 
			$output->writeString($em::$__names[$this->channel]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->level !== null) {
			
			$xfer += $output->writeFieldBegin('level');
			
			$em = new \com\vip\imp\otd\otdapi\service\VopReportLevel; 
			$output->writeString($em::$__names[$this->level]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_date !== null) {
			
			$xfer += $output->writeFieldBegin('start_date');
			$xfer += $output->writeString($this->start_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_date !== null) {
			
			$xfer += $output->writeFieldBegin('end_date');
			$xfer += $output->writeString($this->end_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page_no');
		$xfer += $output->writeI32($this->page_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI32($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VopReportService_healthCheck_args {
	
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




class VopReportService_getDailyReports_result {
	
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
			
			
			$this->success = new \com\vip\imp\otd\otdapi\service\VopReportsModel();
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




class VopReportService_healthCheck_result {
	
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
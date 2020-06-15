<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\purchase\schedules\service\query;
interface QueryApplySellingServiceIf{
	
	
	public function healthCheck();
	
	public function queryApplySellingData(\com\vip\vis\purchase\schedules\service\query\QueryApplySellingParam $queryApplySellingParam);
	
	public function queryApplySellingSimpleData(\com\vip\vis\purchase\schedules\service\query\QueryApplySellingSimpleParam $queryApplySellingSimpleParam);
	
	public function queryScheduleInfoData(\com\vip\vis\purchase\schedules\service\query\QueryScheduleInfoApiParam $queryScheduleInfoApiParam);
	
	public function querySchedulesByShopCode(\com\vip\vis\purchase\schedules\service\query\QueryScheduleByShopCodeParam $queryScheduleByShopCodeParam);
	
}

class _QueryApplySellingServiceClient extends \Osp\Base\OspStub implements \com\vip\vis\purchase\schedules\service\query\QueryApplySellingServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vis.purchase.schedules.service.query.QueryApplySellingService", "1.0.0");
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryApplySellingData(\com\vip\vis\purchase\schedules\service\query\QueryApplySellingParam $queryApplySellingParam){
		
		$this->send_queryApplySellingData( $queryApplySellingParam);
		return $this->recv_queryApplySellingData();
	}
	
	public function send_queryApplySellingData(\com\vip\vis\purchase\schedules\service\query\QueryApplySellingParam $queryApplySellingParam){
		
		$this->initInvocation("queryApplySellingData");
		$args = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_queryApplySellingData_args();
		
		$args->queryApplySellingParam = $queryApplySellingParam;
		
		$this->send_base($args);
	}
	
	public function recv_queryApplySellingData(){
		
		$result = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_queryApplySellingData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryApplySellingSimpleData(\com\vip\vis\purchase\schedules\service\query\QueryApplySellingSimpleParam $queryApplySellingSimpleParam){
		
		$this->send_queryApplySellingSimpleData( $queryApplySellingSimpleParam);
		return $this->recv_queryApplySellingSimpleData();
	}
	
	public function send_queryApplySellingSimpleData(\com\vip\vis\purchase\schedules\service\query\QueryApplySellingSimpleParam $queryApplySellingSimpleParam){
		
		$this->initInvocation("queryApplySellingSimpleData");
		$args = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_queryApplySellingSimpleData_args();
		
		$args->queryApplySellingSimpleParam = $queryApplySellingSimpleParam;
		
		$this->send_base($args);
	}
	
	public function recv_queryApplySellingSimpleData(){
		
		$result = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_queryApplySellingSimpleData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryScheduleInfoData(\com\vip\vis\purchase\schedules\service\query\QueryScheduleInfoApiParam $queryScheduleInfoApiParam){
		
		$this->send_queryScheduleInfoData( $queryScheduleInfoApiParam);
		return $this->recv_queryScheduleInfoData();
	}
	
	public function send_queryScheduleInfoData(\com\vip\vis\purchase\schedules\service\query\QueryScheduleInfoApiParam $queryScheduleInfoApiParam){
		
		$this->initInvocation("queryScheduleInfoData");
		$args = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_queryScheduleInfoData_args();
		
		$args->queryScheduleInfoApiParam = $queryScheduleInfoApiParam;
		
		$this->send_base($args);
	}
	
	public function recv_queryScheduleInfoData(){
		
		$result = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_queryScheduleInfoData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function querySchedulesByShopCode(\com\vip\vis\purchase\schedules\service\query\QueryScheduleByShopCodeParam $queryScheduleByShopCodeParam){
		
		$this->send_querySchedulesByShopCode( $queryScheduleByShopCodeParam);
		return $this->recv_querySchedulesByShopCode();
	}
	
	public function send_querySchedulesByShopCode(\com\vip\vis\purchase\schedules\service\query\QueryScheduleByShopCodeParam $queryScheduleByShopCodeParam){
		
		$this->initInvocation("querySchedulesByShopCode");
		$args = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_querySchedulesByShopCode_args();
		
		$args->queryScheduleByShopCodeParam = $queryScheduleByShopCodeParam;
		
		$this->send_base($args);
	}
	
	public function recv_querySchedulesByShopCode(){
		
		$result = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingService_querySchedulesByShopCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class QueryApplySellingService_healthCheck_args {
	
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




class QueryApplySellingService_queryApplySellingData_args {
	
	static $_TSPEC;
	public $queryApplySellingParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryApplySellingParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryApplySellingParam'])){
				
				$this->queryApplySellingParam = $vals['queryApplySellingParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryApplySellingParam = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingParam();
			$this->queryApplySellingParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryApplySellingParam');
		
		if (!is_object($this->queryApplySellingParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryApplySellingParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class QueryApplySellingService_queryApplySellingSimpleData_args {
	
	static $_TSPEC;
	public $queryApplySellingSimpleParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryApplySellingSimpleParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryApplySellingSimpleParam'])){
				
				$this->queryApplySellingSimpleParam = $vals['queryApplySellingSimpleParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryApplySellingSimpleParam = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingSimpleParam();
			$this->queryApplySellingSimpleParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryApplySellingSimpleParam');
		
		if (!is_object($this->queryApplySellingSimpleParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryApplySellingSimpleParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class QueryApplySellingService_queryScheduleInfoData_args {
	
	static $_TSPEC;
	public $queryScheduleInfoApiParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryScheduleInfoApiParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryScheduleInfoApiParam'])){
				
				$this->queryScheduleInfoApiParam = $vals['queryScheduleInfoApiParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryScheduleInfoApiParam = new \com\vip\vis\purchase\schedules\service\query\QueryScheduleInfoApiParam();
			$this->queryScheduleInfoApiParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryScheduleInfoApiParam');
		
		if (!is_object($this->queryScheduleInfoApiParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryScheduleInfoApiParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class QueryApplySellingService_querySchedulesByShopCode_args {
	
	static $_TSPEC;
	public $queryScheduleByShopCodeParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryScheduleByShopCodeParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryScheduleByShopCodeParam'])){
				
				$this->queryScheduleByShopCodeParam = $vals['queryScheduleByShopCodeParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryScheduleByShopCodeParam = new \com\vip\vis\purchase\schedules\service\query\QueryScheduleByShopCodeParam();
			$this->queryScheduleByShopCodeParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryScheduleByShopCodeParam');
		
		if (!is_object($this->queryScheduleByShopCodeParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryScheduleByShopCodeParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class QueryApplySellingService_healthCheck_result {
	
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




class QueryApplySellingService_queryApplySellingData_result {
	
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
			
			
			$this->success = new \com\vip\vis\purchase\schedules\service\query\QueryApplySellingResponse();
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




class QueryApplySellingService_queryApplySellingSimpleData_result {
	
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
					
					$elem0 = new \com\vip\vis\purchase\schedules\service\query\ApplySellingSimpleData();
					$elem0->read($input);
					
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




class QueryApplySellingService_queryScheduleInfoData_result {
	
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
			
			
			$this->success = new \com\vip\vis\purchase\schedules\service\query\QueryScheduleInfoResponse();
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




class QueryApplySellingService_querySchedulesByShopCode_result {
	
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
			
			
			$this->success = new \com\vip\vis\purchase\schedules\service\query\QueryScheduleByShopCodeResponse();
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
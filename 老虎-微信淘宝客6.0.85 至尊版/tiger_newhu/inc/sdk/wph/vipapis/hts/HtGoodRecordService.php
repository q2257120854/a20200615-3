<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\hts;
interface HtGoodRecordServiceIf{
	
	
	public function getRecordAttach(\com\vip\haitao\base\osp\service\record\GoodRecordAttachParam $goodRecordAttachParam);
	
	public function getRecordGoodsList(\com\vip\haitao\base\osp\service\record\GoodRecordParam $goodRecordParam);
	
	public function healthCheck();
	
	public function receiveBatchResult( $goodResultParamList);
	
	public function receiveRecordResult(\com\vip\haitao\base\osp\service\record\GoodResultParam $goodResultParam);
	
}

class _HtGoodRecordServiceClient extends \Osp\Base\OspStub implements \vipapis\hts\HtGoodRecordServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.hts.HtGoodRecordService", "1.0.0");
	}
	
	
	public function getRecordAttach(\com\vip\haitao\base\osp\service\record\GoodRecordAttachParam $goodRecordAttachParam){
		
		$this->send_getRecordAttach( $goodRecordAttachParam);
		return $this->recv_getRecordAttach();
	}
	
	public function send_getRecordAttach(\com\vip\haitao\base\osp\service\record\GoodRecordAttachParam $goodRecordAttachParam){
		
		$this->initInvocation("getRecordAttach");
		$args = new \vipapis\hts\HtGoodRecordService_getRecordAttach_args();
		
		$args->goodRecordAttachParam = $goodRecordAttachParam;
		
		$this->send_base($args);
	}
	
	public function recv_getRecordAttach(){
		
		$result = new \vipapis\hts\HtGoodRecordService_getRecordAttach_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getRecordGoodsList(\com\vip\haitao\base\osp\service\record\GoodRecordParam $goodRecordParam){
		
		$this->send_getRecordGoodsList( $goodRecordParam);
		return $this->recv_getRecordGoodsList();
	}
	
	public function send_getRecordGoodsList(\com\vip\haitao\base\osp\service\record\GoodRecordParam $goodRecordParam){
		
		$this->initInvocation("getRecordGoodsList");
		$args = new \vipapis\hts\HtGoodRecordService_getRecordGoodsList_args();
		
		$args->goodRecordParam = $goodRecordParam;
		
		$this->send_base($args);
	}
	
	public function recv_getRecordGoodsList(){
		
		$result = new \vipapis\hts\HtGoodRecordService_getRecordGoodsList_result();
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
		$args = new \vipapis\hts\HtGoodRecordService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\hts\HtGoodRecordService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveBatchResult( $goodResultParamList){
		
		$this->send_receiveBatchResult( $goodResultParamList);
		return $this->recv_receiveBatchResult();
	}
	
	public function send_receiveBatchResult( $goodResultParamList){
		
		$this->initInvocation("receiveBatchResult");
		$args = new \vipapis\hts\HtGoodRecordService_receiveBatchResult_args();
		
		$args->goodResultParamList = $goodResultParamList;
		
		$this->send_base($args);
	}
	
	public function recv_receiveBatchResult(){
		
		$result = new \vipapis\hts\HtGoodRecordService_receiveBatchResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveRecordResult(\com\vip\haitao\base\osp\service\record\GoodResultParam $goodResultParam){
		
		$this->send_receiveRecordResult( $goodResultParam);
		return $this->recv_receiveRecordResult();
	}
	
	public function send_receiveRecordResult(\com\vip\haitao\base\osp\service\record\GoodResultParam $goodResultParam){
		
		$this->initInvocation("receiveRecordResult");
		$args = new \vipapis\hts\HtGoodRecordService_receiveRecordResult_args();
		
		$args->goodResultParam = $goodResultParam;
		
		$this->send_base($args);
	}
	
	public function recv_receiveRecordResult(){
		
		$result = new \vipapis\hts\HtGoodRecordService_receiveRecordResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class HtGoodRecordService_getRecordAttach_args {
	
	static $_TSPEC;
	public $goodRecordAttachParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodRecordAttachParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodRecordAttachParam'])){
				
				$this->goodRecordAttachParam = $vals['goodRecordAttachParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->goodRecordAttachParam = new \com\vip\haitao\base\osp\service\record\GoodRecordAttachParam();
			$this->goodRecordAttachParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('goodRecordAttachParam');
		
		if (!is_object($this->goodRecordAttachParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->goodRecordAttachParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtGoodRecordService_getRecordGoodsList_args {
	
	static $_TSPEC;
	public $goodRecordParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodRecordParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodRecordParam'])){
				
				$this->goodRecordParam = $vals['goodRecordParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->goodRecordParam = new \com\vip\haitao\base\osp\service\record\GoodRecordParam();
			$this->goodRecordParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('goodRecordParam');
		
		if (!is_object($this->goodRecordParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->goodRecordParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtGoodRecordService_healthCheck_args {
	
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




class HtGoodRecordService_receiveBatchResult_args {
	
	static $_TSPEC;
	public $goodResultParamList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodResultParamList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodResultParamList'])){
				
				$this->goodResultParamList = $vals['goodResultParamList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->goodResultParamList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\haitao\base\osp\service\record\GoodResultParam();
					$elem0->read($input);
					
					$this->goodResultParamList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('goodResultParamList');
		
		if (!is_array($this->goodResultParamList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->goodResultParamList as $iter0){
			
			
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




class HtGoodRecordService_receiveRecordResult_args {
	
	static $_TSPEC;
	public $goodResultParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodResultParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodResultParam'])){
				
				$this->goodResultParam = $vals['goodResultParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->goodResultParam = new \com\vip\haitao\base\osp\service\record\GoodResultParam();
			$this->goodResultParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('goodResultParam');
		
		if (!is_object($this->goodResultParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->goodResultParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class HtGoodRecordService_getRecordAttach_result {
	
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
			
			
			$this->success = new \com\vip\haitao\base\osp\service\record\VipGoodRecordAttachResponse();
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




class HtGoodRecordService_getRecordGoodsList_result {
	
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
			
			
			$this->success = new \com\vip\haitao\base\osp\service\record\VipGoodRecordResponse();
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




class HtGoodRecordService_healthCheck_result {
	
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




class HtGoodRecordService_receiveBatchResult_result {
	
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
			
			
			$this->success = new \com\vip\haitao\base\osp\service\record\GoodRecordResponse();
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




class HtGoodRecordService_receiveRecordResult_result {
	
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
			
			
			$this->success = new \com\vip\haitao\base\osp\service\record\GoodRecordResponse();
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
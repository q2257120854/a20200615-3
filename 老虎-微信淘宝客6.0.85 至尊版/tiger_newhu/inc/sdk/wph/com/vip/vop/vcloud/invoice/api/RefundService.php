<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\invoice\api;
interface RefundServiceIf{
	
	
	public function dealRefund(\com\vip\vop\vcloud\invoice\api\Refund $refund);
	
	public function healthCheck();
	
	public function matchReturnApplication(\com\vip\vop\vcloud\invoice\api\QueryRefundReq $req);
	
	public function pullRefundFromVdg( $lastUpdateTime);
	
	public function queryRefunds(\com\vip\vop\vcloud\invoice\api\QueryRefundReq $req);
	
	public function receiveRefund(\com\vip\vop\vcloud\invoice\api\Refund $refund);
	
	public function updateDealType( $id);
	
}

class _RefundServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\invoice\api\RefundServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.invoice.api.RefundService", "1.0.0");
	}
	
	
	public function dealRefund(\com\vip\vop\vcloud\invoice\api\Refund $refund){
		
		$this->send_dealRefund( $refund);
		return $this->recv_dealRefund();
	}
	
	public function send_dealRefund(\com\vip\vop\vcloud\invoice\api\Refund $refund){
		
		$this->initInvocation("dealRefund");
		$args = new \com\vip\vop\vcloud\invoice\api\RefundService_dealRefund_args();
		
		$args->refund = $refund;
		
		$this->send_base($args);
	}
	
	public function recv_dealRefund(){
		
		$result = new \com\vip\vop\vcloud\invoice\api\RefundService_dealRefund_result();
		$this->receive_base($result);
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vop\vcloud\invoice\api\RefundService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\invoice\api\RefundService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function matchReturnApplication(\com\vip\vop\vcloud\invoice\api\QueryRefundReq $req){
		
		$this->send_matchReturnApplication( $req);
		return $this->recv_matchReturnApplication();
	}
	
	public function send_matchReturnApplication(\com\vip\vop\vcloud\invoice\api\QueryRefundReq $req){
		
		$this->initInvocation("matchReturnApplication");
		$args = new \com\vip\vop\vcloud\invoice\api\RefundService_matchReturnApplication_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_matchReturnApplication(){
		
		$result = new \com\vip\vop\vcloud\invoice\api\RefundService_matchReturnApplication_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pullRefundFromVdg( $lastUpdateTime){
		
		$this->send_pullRefundFromVdg( $lastUpdateTime);
		return $this->recv_pullRefundFromVdg();
	}
	
	public function send_pullRefundFromVdg( $lastUpdateTime){
		
		$this->initInvocation("pullRefundFromVdg");
		$args = new \com\vip\vop\vcloud\invoice\api\RefundService_pullRefundFromVdg_args();
		
		$args->lastUpdateTime = $lastUpdateTime;
		
		$this->send_base($args);
	}
	
	public function recv_pullRefundFromVdg(){
		
		$result = new \com\vip\vop\vcloud\invoice\api\RefundService_pullRefundFromVdg_result();
		$this->receive_base($result);
		
	}
	
	
	public function queryRefunds(\com\vip\vop\vcloud\invoice\api\QueryRefundReq $req){
		
		$this->send_queryRefunds( $req);
		return $this->recv_queryRefunds();
	}
	
	public function send_queryRefunds(\com\vip\vop\vcloud\invoice\api\QueryRefundReq $req){
		
		$this->initInvocation("queryRefunds");
		$args = new \com\vip\vop\vcloud\invoice\api\RefundService_queryRefunds_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_queryRefunds(){
		
		$result = new \com\vip\vop\vcloud\invoice\api\RefundService_queryRefunds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function receiveRefund(\com\vip\vop\vcloud\invoice\api\Refund $refund){
		
		$this->send_receiveRefund( $refund);
		return $this->recv_receiveRefund();
	}
	
	public function send_receiveRefund(\com\vip\vop\vcloud\invoice\api\Refund $refund){
		
		$this->initInvocation("receiveRefund");
		$args = new \com\vip\vop\vcloud\invoice\api\RefundService_receiveRefund_args();
		
		$args->refund = $refund;
		
		$this->send_base($args);
	}
	
	public function recv_receiveRefund(){
		
		$result = new \com\vip\vop\vcloud\invoice\api\RefundService_receiveRefund_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateDealType( $id){
		
		$this->send_updateDealType( $id);
		return $this->recv_updateDealType();
	}
	
	public function send_updateDealType( $id){
		
		$this->initInvocation("updateDealType");
		$args = new \com\vip\vop\vcloud\invoice\api\RefundService_updateDealType_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_updateDealType(){
		
		$result = new \com\vip\vop\vcloud\invoice\api\RefundService_updateDealType_result();
		$this->receive_base($result);
		
	}
	
	
}




class RefundService_dealRefund_args {
	
	static $_TSPEC;
	public $refund = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refund'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refund'])){
				
				$this->refund = $vals['refund'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->refund = new \com\vip\vop\vcloud\invoice\api\Refund();
			$this->refund->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->refund !== null) {
			
			$xfer += $output->writeFieldBegin('refund');
			
			if (!is_object($this->refund)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->refund->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RefundService_healthCheck_args {
	
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




class RefundService_matchReturnApplication_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\invoice\api\QueryRefundReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RefundService_pullRefundFromVdg_args {
	
	static $_TSPEC;
	public $lastUpdateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'lastUpdateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['lastUpdateTime'])){
				
				$this->lastUpdateTime = $vals['lastUpdateTime'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->lastUpdateTime);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->lastUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdateTime');
			$xfer += $output->writeI64($this->lastUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RefundService_queryRefunds_args {
	
	static $_TSPEC;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\vop\vcloud\invoice\api\QueryRefundReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RefundService_receiveRefund_args {
	
	static $_TSPEC;
	public $refund = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refund'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refund'])){
				
				$this->refund = $vals['refund'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->refund = new \com\vip\vop\vcloud\invoice\api\Refund();
			$this->refund->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->refund !== null) {
			
			$xfer += $output->writeFieldBegin('refund');
			
			if (!is_object($this->refund)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->refund->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RefundService_updateDealType_args {
	
	static $_TSPEC;
	public $id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RefundService_dealRefund_result {
	
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




class RefundService_healthCheck_result {
	
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




class RefundService_matchReturnApplication_result {
	
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
			
			$input->readI64($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI64($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RefundService_pullRefundFromVdg_result {
	
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




class RefundService_queryRefunds_result {
	
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
			
			
			$this->success = new \com\vip\vop\vcloud\invoice\api\QueryRefundRes();
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




class RefundService_receiveRefund_result {
	
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




class RefundService_updateDealType_result {
	
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
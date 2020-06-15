<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\tpc\service;
interface TpcExternalServiceIf{
	
	
	public function acceptCarLoadDetail(\com\vip\tpc\api\model\AcceptCarLoadDetailRequest $acceptCarLoadDetailRequest);
	
	public function anormalExpress(\com\vip\tpc\api\model\AnormalExpressRequest $anormalExpressRequest);
	
	public function carrierTakingAway(\com\vip\tpc\api\model\CarrierTakingAwayRequest $carrierTakingAwayRequest);
	
	public function carrierTakingAwayGoods(\com\vip\tpc\api\model\CarrierTakingAwayGoodsRequest $carrierTakingAwayGoodsRequest);
	
	public function getReturnAddress(\com\vip\tpc\api\model\GetReturnAddressRequest $getReturnAddressRequest);
	
	public function getSerialNumberRelation(\com\vip\tpc\api\model\GetSerialNumberRelationRequest $getSerialNumberRelationRequest);
	
	public function healthCheck();
	
	public function interceptReport(\com\vip\tpc\api\model\InterceptReportRequest $interceptReportRequest);
	
	public function packPhysicsAttribute(\com\vip\tpc\api\model\PackPhysicsAttributeRequest $packPhysicsAttributeRequest);
	
}

class _TpcExternalServiceClient extends \Osp\Base\OspStub implements \vipapis\tpc\service\TpcExternalServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.tpc.service.TpcExternalService", "1.0.0");
	}
	
	
	public function acceptCarLoadDetail(\com\vip\tpc\api\model\AcceptCarLoadDetailRequest $acceptCarLoadDetailRequest){
		
		$this->send_acceptCarLoadDetail( $acceptCarLoadDetailRequest);
		return $this->recv_acceptCarLoadDetail();
	}
	
	public function send_acceptCarLoadDetail(\com\vip\tpc\api\model\AcceptCarLoadDetailRequest $acceptCarLoadDetailRequest){
		
		$this->initInvocation("acceptCarLoadDetail");
		$args = new \vipapis\tpc\service\TpcExternalService_acceptCarLoadDetail_args();
		
		$args->acceptCarLoadDetailRequest = $acceptCarLoadDetailRequest;
		
		$this->send_base($args);
	}
	
	public function recv_acceptCarLoadDetail(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_acceptCarLoadDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function anormalExpress(\com\vip\tpc\api\model\AnormalExpressRequest $anormalExpressRequest){
		
		$this->send_anormalExpress( $anormalExpressRequest);
		return $this->recv_anormalExpress();
	}
	
	public function send_anormalExpress(\com\vip\tpc\api\model\AnormalExpressRequest $anormalExpressRequest){
		
		$this->initInvocation("anormalExpress");
		$args = new \vipapis\tpc\service\TpcExternalService_anormalExpress_args();
		
		$args->anormalExpressRequest = $anormalExpressRequest;
		
		$this->send_base($args);
	}
	
	public function recv_anormalExpress(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_anormalExpress_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function carrierTakingAway(\com\vip\tpc\api\model\CarrierTakingAwayRequest $carrierTakingAwayRequest){
		
		$this->send_carrierTakingAway( $carrierTakingAwayRequest);
		return $this->recv_carrierTakingAway();
	}
	
	public function send_carrierTakingAway(\com\vip\tpc\api\model\CarrierTakingAwayRequest $carrierTakingAwayRequest){
		
		$this->initInvocation("carrierTakingAway");
		$args = new \vipapis\tpc\service\TpcExternalService_carrierTakingAway_args();
		
		$args->carrierTakingAwayRequest = $carrierTakingAwayRequest;
		
		$this->send_base($args);
	}
	
	public function recv_carrierTakingAway(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_carrierTakingAway_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function carrierTakingAwayGoods(\com\vip\tpc\api\model\CarrierTakingAwayGoodsRequest $carrierTakingAwayGoodsRequest){
		
		$this->send_carrierTakingAwayGoods( $carrierTakingAwayGoodsRequest);
		return $this->recv_carrierTakingAwayGoods();
	}
	
	public function send_carrierTakingAwayGoods(\com\vip\tpc\api\model\CarrierTakingAwayGoodsRequest $carrierTakingAwayGoodsRequest){
		
		$this->initInvocation("carrierTakingAwayGoods");
		$args = new \vipapis\tpc\service\TpcExternalService_carrierTakingAwayGoods_args();
		
		$args->carrierTakingAwayGoodsRequest = $carrierTakingAwayGoodsRequest;
		
		$this->send_base($args);
	}
	
	public function recv_carrierTakingAwayGoods(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_carrierTakingAwayGoods_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getReturnAddress(\com\vip\tpc\api\model\GetReturnAddressRequest $getReturnAddressRequest){
		
		$this->send_getReturnAddress( $getReturnAddressRequest);
		return $this->recv_getReturnAddress();
	}
	
	public function send_getReturnAddress(\com\vip\tpc\api\model\GetReturnAddressRequest $getReturnAddressRequest){
		
		$this->initInvocation("getReturnAddress");
		$args = new \vipapis\tpc\service\TpcExternalService_getReturnAddress_args();
		
		$args->getReturnAddressRequest = $getReturnAddressRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getReturnAddress(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_getReturnAddress_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getSerialNumberRelation(\com\vip\tpc\api\model\GetSerialNumberRelationRequest $getSerialNumberRelationRequest){
		
		$this->send_getSerialNumberRelation( $getSerialNumberRelationRequest);
		return $this->recv_getSerialNumberRelation();
	}
	
	public function send_getSerialNumberRelation(\com\vip\tpc\api\model\GetSerialNumberRelationRequest $getSerialNumberRelationRequest){
		
		$this->initInvocation("getSerialNumberRelation");
		$args = new \vipapis\tpc\service\TpcExternalService_getSerialNumberRelation_args();
		
		$args->getSerialNumberRelationRequest = $getSerialNumberRelationRequest;
		
		$this->send_base($args);
	}
	
	public function recv_getSerialNumberRelation(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_getSerialNumberRelation_result();
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
		$args = new \vipapis\tpc\service\TpcExternalService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function interceptReport(\com\vip\tpc\api\model\InterceptReportRequest $interceptReportRequest){
		
		$this->send_interceptReport( $interceptReportRequest);
		return $this->recv_interceptReport();
	}
	
	public function send_interceptReport(\com\vip\tpc\api\model\InterceptReportRequest $interceptReportRequest){
		
		$this->initInvocation("interceptReport");
		$args = new \vipapis\tpc\service\TpcExternalService_interceptReport_args();
		
		$args->interceptReportRequest = $interceptReportRequest;
		
		$this->send_base($args);
	}
	
	public function recv_interceptReport(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_interceptReport_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function packPhysicsAttribute(\com\vip\tpc\api\model\PackPhysicsAttributeRequest $packPhysicsAttributeRequest){
		
		$this->send_packPhysicsAttribute( $packPhysicsAttributeRequest);
		return $this->recv_packPhysicsAttribute();
	}
	
	public function send_packPhysicsAttribute(\com\vip\tpc\api\model\PackPhysicsAttributeRequest $packPhysicsAttributeRequest){
		
		$this->initInvocation("packPhysicsAttribute");
		$args = new \vipapis\tpc\service\TpcExternalService_packPhysicsAttribute_args();
		
		$args->packPhysicsAttributeRequest = $packPhysicsAttributeRequest;
		
		$this->send_base($args);
	}
	
	public function recv_packPhysicsAttribute(){
		
		$result = new \vipapis\tpc\service\TpcExternalService_packPhysicsAttribute_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class TpcExternalService_acceptCarLoadDetail_args {
	
	static $_TSPEC;
	public $acceptCarLoadDetailRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'acceptCarLoadDetailRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['acceptCarLoadDetailRequest'])){
				
				$this->acceptCarLoadDetailRequest = $vals['acceptCarLoadDetailRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->acceptCarLoadDetailRequest = new \com\vip\tpc\api\model\AcceptCarLoadDetailRequest();
			$this->acceptCarLoadDetailRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->acceptCarLoadDetailRequest !== null) {
			
			$xfer += $output->writeFieldBegin('acceptCarLoadDetailRequest');
			
			if (!is_object($this->acceptCarLoadDetailRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->acceptCarLoadDetailRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_anormalExpress_args {
	
	static $_TSPEC;
	public $anormalExpressRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'anormalExpressRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['anormalExpressRequest'])){
				
				$this->anormalExpressRequest = $vals['anormalExpressRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->anormalExpressRequest = new \com\vip\tpc\api\model\AnormalExpressRequest();
			$this->anormalExpressRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->anormalExpressRequest !== null) {
			
			$xfer += $output->writeFieldBegin('anormalExpressRequest');
			
			if (!is_object($this->anormalExpressRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->anormalExpressRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_carrierTakingAway_args {
	
	static $_TSPEC;
	public $carrierTakingAwayRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierTakingAwayRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierTakingAwayRequest'])){
				
				$this->carrierTakingAwayRequest = $vals['carrierTakingAwayRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->carrierTakingAwayRequest = new \com\vip\tpc\api\model\CarrierTakingAwayRequest();
			$this->carrierTakingAwayRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->carrierTakingAwayRequest !== null) {
			
			$xfer += $output->writeFieldBegin('carrierTakingAwayRequest');
			
			if (!is_object($this->carrierTakingAwayRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->carrierTakingAwayRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_carrierTakingAwayGoods_args {
	
	static $_TSPEC;
	public $carrierTakingAwayGoodsRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrierTakingAwayGoodsRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrierTakingAwayGoodsRequest'])){
				
				$this->carrierTakingAwayGoodsRequest = $vals['carrierTakingAwayGoodsRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->carrierTakingAwayGoodsRequest = new \com\vip\tpc\api\model\CarrierTakingAwayGoodsRequest();
			$this->carrierTakingAwayGoodsRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->carrierTakingAwayGoodsRequest !== null) {
			
			$xfer += $output->writeFieldBegin('carrierTakingAwayGoodsRequest');
			
			if (!is_object($this->carrierTakingAwayGoodsRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->carrierTakingAwayGoodsRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_getReturnAddress_args {
	
	static $_TSPEC;
	public $getReturnAddressRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getReturnAddressRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getReturnAddressRequest'])){
				
				$this->getReturnAddressRequest = $vals['getReturnAddressRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getReturnAddressRequest = new \com\vip\tpc\api\model\GetReturnAddressRequest();
			$this->getReturnAddressRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getReturnAddressRequest !== null) {
			
			$xfer += $output->writeFieldBegin('getReturnAddressRequest');
			
			if (!is_object($this->getReturnAddressRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getReturnAddressRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_getSerialNumberRelation_args {
	
	static $_TSPEC;
	public $getSerialNumberRelationRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getSerialNumberRelationRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getSerialNumberRelationRequest'])){
				
				$this->getSerialNumberRelationRequest = $vals['getSerialNumberRelationRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getSerialNumberRelationRequest = new \com\vip\tpc\api\model\GetSerialNumberRelationRequest();
			$this->getSerialNumberRelationRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->getSerialNumberRelationRequest !== null) {
			
			$xfer += $output->writeFieldBegin('getSerialNumberRelationRequest');
			
			if (!is_object($this->getSerialNumberRelationRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->getSerialNumberRelationRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_healthCheck_args {
	
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




class TpcExternalService_interceptReport_args {
	
	static $_TSPEC;
	public $interceptReportRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'interceptReportRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['interceptReportRequest'])){
				
				$this->interceptReportRequest = $vals['interceptReportRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->interceptReportRequest = new \com\vip\tpc\api\model\InterceptReportRequest();
			$this->interceptReportRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->interceptReportRequest !== null) {
			
			$xfer += $output->writeFieldBegin('interceptReportRequest');
			
			if (!is_object($this->interceptReportRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->interceptReportRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_packPhysicsAttribute_args {
	
	static $_TSPEC;
	public $packPhysicsAttributeRequest = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'packPhysicsAttributeRequest'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['packPhysicsAttributeRequest'])){
				
				$this->packPhysicsAttributeRequest = $vals['packPhysicsAttributeRequest'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->packPhysicsAttributeRequest = new \com\vip\tpc\api\model\PackPhysicsAttributeRequest();
			$this->packPhysicsAttributeRequest->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->packPhysicsAttributeRequest !== null) {
			
			$xfer += $output->writeFieldBegin('packPhysicsAttributeRequest');
			
			if (!is_object($this->packPhysicsAttributeRequest)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->packPhysicsAttributeRequest->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class TpcExternalService_acceptCarLoadDetail_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\AcceptCarLoadDetailResponse();
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




class TpcExternalService_anormalExpress_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\AnormalExpressResponse();
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




class TpcExternalService_carrierTakingAway_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\CarrierTakingAwayResponse();
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




class TpcExternalService_carrierTakingAwayGoods_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\CarrierTakingAwayGoodsResponse();
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




class TpcExternalService_getReturnAddress_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\GetReturnAddressResponse();
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




class TpcExternalService_getSerialNumberRelation_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\GetSerialNumberRelationResponse();
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




class TpcExternalService_healthCheck_result {
	
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




class TpcExternalService_interceptReport_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\InterceptReportResponse();
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




class TpcExternalService_packPhysicsAttribute_result {
	
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
			
			
			$this->success = new \com\vip\tpc\api\model\PackPhysicsAttributeResponse();
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
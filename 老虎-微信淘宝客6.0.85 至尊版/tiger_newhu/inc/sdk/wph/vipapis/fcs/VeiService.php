<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\fcs;
interface VeiServiceIf{
	
	
	public function acceptExternalInvoiceData(\com\vip\fcs\vei\service\EinvoiceVo $einvoiceVo);
	
	public function canInvoicing(\com\vip\fcs\vei\service\CanInvoicingReqModel $canInvoicingReqModel);
	
	public function canInvoicing2(\com\vip\fcs\vei\service\CanInvoicingReqModel $canInvoicingReqModel);
	
	public function canInvoicing3(\com\vip\fcs\vei\service\CanInvoicingReqModel3 $canInvoicingReqModel);
	
	public function canInvoicing4(\com\vip\fcs\vei\service\CanInvoicingReqModel4 $canInvoicingReqModel);
	
	public function downloadElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel);
	
	public function downloadElectronicInvoice2(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2 $reqModel);
	
	public function downloadElectronicInvoiceInNewProcess(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel);
	
	public function downloadElectronicInvoicePicture(\com\vip\fcs\vei\service\DownloadElectronicInvoicePictureReqModel $reqModel);
	
	public function downloadMedicineElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2 $reqModel);
	
	public function downloadRedElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel);
	
	public function getExternalInvoiceHandleState(\com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModel $reqModel);
	
	public function getExternalInvoiceHandleStateExt(\com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModelExt $reqModel);
	
	public function healthCheck();
	
	public function invoiceOrderData(\com\vip\fcs\vei\service\InvoiceOrderDataReqModel $reqModel);
	
	public function vCanInvoicing(\com\vip\fcs\vei\service\VCanInvoicingReqModel $reqModel);
	
}

class _VeiServiceClient extends \Osp\Base\OspStub implements \vipapis\fcs\VeiServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.fcs.VeiService", "1.0.0");
	}
	
	
	public function acceptExternalInvoiceData(\com\vip\fcs\vei\service\EinvoiceVo $einvoiceVo){
		
		$this->send_acceptExternalInvoiceData( $einvoiceVo);
		return $this->recv_acceptExternalInvoiceData();
	}
	
	public function send_acceptExternalInvoiceData(\com\vip\fcs\vei\service\EinvoiceVo $einvoiceVo){
		
		$this->initInvocation("acceptExternalInvoiceData");
		$args = new \vipapis\fcs\VeiService_acceptExternalInvoiceData_args();
		
		$args->einvoiceVo = $einvoiceVo;
		
		$this->send_base($args);
	}
	
	public function recv_acceptExternalInvoiceData(){
		
		$result = new \vipapis\fcs\VeiService_acceptExternalInvoiceData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function canInvoicing(\com\vip\fcs\vei\service\CanInvoicingReqModel $canInvoicingReqModel){
		
		$this->send_canInvoicing( $canInvoicingReqModel);
		return $this->recv_canInvoicing();
	}
	
	public function send_canInvoicing(\com\vip\fcs\vei\service\CanInvoicingReqModel $canInvoicingReqModel){
		
		$this->initInvocation("canInvoicing");
		$args = new \vipapis\fcs\VeiService_canInvoicing_args();
		
		$args->canInvoicingReqModel = $canInvoicingReqModel;
		
		$this->send_base($args);
	}
	
	public function recv_canInvoicing(){
		
		$result = new \vipapis\fcs\VeiService_canInvoicing_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function canInvoicing2(\com\vip\fcs\vei\service\CanInvoicingReqModel $canInvoicingReqModel){
		
		$this->send_canInvoicing2( $canInvoicingReqModel);
		return $this->recv_canInvoicing2();
	}
	
	public function send_canInvoicing2(\com\vip\fcs\vei\service\CanInvoicingReqModel $canInvoicingReqModel){
		
		$this->initInvocation("canInvoicing2");
		$args = new \vipapis\fcs\VeiService_canInvoicing2_args();
		
		$args->canInvoicingReqModel = $canInvoicingReqModel;
		
		$this->send_base($args);
	}
	
	public function recv_canInvoicing2(){
		
		$result = new \vipapis\fcs\VeiService_canInvoicing2_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function canInvoicing3(\com\vip\fcs\vei\service\CanInvoicingReqModel3 $canInvoicingReqModel){
		
		$this->send_canInvoicing3( $canInvoicingReqModel);
		return $this->recv_canInvoicing3();
	}
	
	public function send_canInvoicing3(\com\vip\fcs\vei\service\CanInvoicingReqModel3 $canInvoicingReqModel){
		
		$this->initInvocation("canInvoicing3");
		$args = new \vipapis\fcs\VeiService_canInvoicing3_args();
		
		$args->canInvoicingReqModel = $canInvoicingReqModel;
		
		$this->send_base($args);
	}
	
	public function recv_canInvoicing3(){
		
		$result = new \vipapis\fcs\VeiService_canInvoicing3_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function canInvoicing4(\com\vip\fcs\vei\service\CanInvoicingReqModel4 $canInvoicingReqModel){
		
		$this->send_canInvoicing4( $canInvoicingReqModel);
		return $this->recv_canInvoicing4();
	}
	
	public function send_canInvoicing4(\com\vip\fcs\vei\service\CanInvoicingReqModel4 $canInvoicingReqModel){
		
		$this->initInvocation("canInvoicing4");
		$args = new \vipapis\fcs\VeiService_canInvoicing4_args();
		
		$args->canInvoicingReqModel = $canInvoicingReqModel;
		
		$this->send_base($args);
	}
	
	public function recv_canInvoicing4(){
		
		$result = new \vipapis\fcs\VeiService_canInvoicing4_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function downloadElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel){
		
		$this->send_downloadElectronicInvoice( $reqModel);
		return $this->recv_downloadElectronicInvoice();
	}
	
	public function send_downloadElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel){
		
		$this->initInvocation("downloadElectronicInvoice");
		$args = new \vipapis\fcs\VeiService_downloadElectronicInvoice_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_downloadElectronicInvoice(){
		
		$result = new \vipapis\fcs\VeiService_downloadElectronicInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function downloadElectronicInvoice2(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2 $reqModel){
		
		$this->send_downloadElectronicInvoice2( $reqModel);
		return $this->recv_downloadElectronicInvoice2();
	}
	
	public function send_downloadElectronicInvoice2(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2 $reqModel){
		
		$this->initInvocation("downloadElectronicInvoice2");
		$args = new \vipapis\fcs\VeiService_downloadElectronicInvoice2_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_downloadElectronicInvoice2(){
		
		$result = new \vipapis\fcs\VeiService_downloadElectronicInvoice2_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function downloadElectronicInvoiceInNewProcess(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel){
		
		$this->send_downloadElectronicInvoiceInNewProcess( $reqModel);
		return $this->recv_downloadElectronicInvoiceInNewProcess();
	}
	
	public function send_downloadElectronicInvoiceInNewProcess(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel){
		
		$this->initInvocation("downloadElectronicInvoiceInNewProcess");
		$args = new \vipapis\fcs\VeiService_downloadElectronicInvoiceInNewProcess_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_downloadElectronicInvoiceInNewProcess(){
		
		$result = new \vipapis\fcs\VeiService_downloadElectronicInvoiceInNewProcess_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function downloadElectronicInvoicePicture(\com\vip\fcs\vei\service\DownloadElectronicInvoicePictureReqModel $reqModel){
		
		$this->send_downloadElectronicInvoicePicture( $reqModel);
		return $this->recv_downloadElectronicInvoicePicture();
	}
	
	public function send_downloadElectronicInvoicePicture(\com\vip\fcs\vei\service\DownloadElectronicInvoicePictureReqModel $reqModel){
		
		$this->initInvocation("downloadElectronicInvoicePicture");
		$args = new \vipapis\fcs\VeiService_downloadElectronicInvoicePicture_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_downloadElectronicInvoicePicture(){
		
		$result = new \vipapis\fcs\VeiService_downloadElectronicInvoicePicture_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function downloadMedicineElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2 $reqModel){
		
		$this->send_downloadMedicineElectronicInvoice( $reqModel);
		return $this->recv_downloadMedicineElectronicInvoice();
	}
	
	public function send_downloadMedicineElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2 $reqModel){
		
		$this->initInvocation("downloadMedicineElectronicInvoice");
		$args = new \vipapis\fcs\VeiService_downloadMedicineElectronicInvoice_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_downloadMedicineElectronicInvoice(){
		
		$result = new \vipapis\fcs\VeiService_downloadMedicineElectronicInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function downloadRedElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel){
		
		$this->send_downloadRedElectronicInvoice( $reqModel);
		return $this->recv_downloadRedElectronicInvoice();
	}
	
	public function send_downloadRedElectronicInvoice(\com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel $reqModel){
		
		$this->initInvocation("downloadRedElectronicInvoice");
		$args = new \vipapis\fcs\VeiService_downloadRedElectronicInvoice_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_downloadRedElectronicInvoice(){
		
		$result = new \vipapis\fcs\VeiService_downloadRedElectronicInvoice_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExternalInvoiceHandleState(\com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModel $reqModel){
		
		$this->send_getExternalInvoiceHandleState( $reqModel);
		return $this->recv_getExternalInvoiceHandleState();
	}
	
	public function send_getExternalInvoiceHandleState(\com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModel $reqModel){
		
		$this->initInvocation("getExternalInvoiceHandleState");
		$args = new \vipapis\fcs\VeiService_getExternalInvoiceHandleState_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_getExternalInvoiceHandleState(){
		
		$result = new \vipapis\fcs\VeiService_getExternalInvoiceHandleState_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExternalInvoiceHandleStateExt(\com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModelExt $reqModel){
		
		$this->send_getExternalInvoiceHandleStateExt( $reqModel);
		return $this->recv_getExternalInvoiceHandleStateExt();
	}
	
	public function send_getExternalInvoiceHandleStateExt(\com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModelExt $reqModel){
		
		$this->initInvocation("getExternalInvoiceHandleStateExt");
		$args = new \vipapis\fcs\VeiService_getExternalInvoiceHandleStateExt_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_getExternalInvoiceHandleStateExt(){
		
		$result = new \vipapis\fcs\VeiService_getExternalInvoiceHandleStateExt_result();
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
		$args = new \vipapis\fcs\VeiService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\fcs\VeiService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function invoiceOrderData(\com\vip\fcs\vei\service\InvoiceOrderDataReqModel $reqModel){
		
		$this->send_invoiceOrderData( $reqModel);
		return $this->recv_invoiceOrderData();
	}
	
	public function send_invoiceOrderData(\com\vip\fcs\vei\service\InvoiceOrderDataReqModel $reqModel){
		
		$this->initInvocation("invoiceOrderData");
		$args = new \vipapis\fcs\VeiService_invoiceOrderData_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_invoiceOrderData(){
		
		$result = new \vipapis\fcs\VeiService_invoiceOrderData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function vCanInvoicing(\com\vip\fcs\vei\service\VCanInvoicingReqModel $reqModel){
		
		$this->send_vCanInvoicing( $reqModel);
		return $this->recv_vCanInvoicing();
	}
	
	public function send_vCanInvoicing(\com\vip\fcs\vei\service\VCanInvoicingReqModel $reqModel){
		
		$this->initInvocation("vCanInvoicing");
		$args = new \vipapis\fcs\VeiService_vCanInvoicing_args();
		
		$args->reqModel = $reqModel;
		
		$this->send_base($args);
	}
	
	public function recv_vCanInvoicing(){
		
		$result = new \vipapis\fcs\VeiService_vCanInvoicing_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VeiService_acceptExternalInvoiceData_args {
	
	static $_TSPEC;
	public $einvoiceVo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'einvoiceVo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['einvoiceVo'])){
				
				$this->einvoiceVo = $vals['einvoiceVo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->einvoiceVo = new \com\vip\fcs\vei\service\EinvoiceVo();
			$this->einvoiceVo->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('einvoiceVo');
		
		if (!is_object($this->einvoiceVo)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->einvoiceVo->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_canInvoicing_args {
	
	static $_TSPEC;
	public $canInvoicingReqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'canInvoicingReqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['canInvoicingReqModel'])){
				
				$this->canInvoicingReqModel = $vals['canInvoicingReqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->canInvoicingReqModel = new \com\vip\fcs\vei\service\CanInvoicingReqModel();
			$this->canInvoicingReqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->canInvoicingReqModel !== null) {
			
			$xfer += $output->writeFieldBegin('canInvoicingReqModel');
			
			if (!is_object($this->canInvoicingReqModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->canInvoicingReqModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_canInvoicing2_args {
	
	static $_TSPEC;
	public $canInvoicingReqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'canInvoicingReqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['canInvoicingReqModel'])){
				
				$this->canInvoicingReqModel = $vals['canInvoicingReqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->canInvoicingReqModel = new \com\vip\fcs\vei\service\CanInvoicingReqModel();
			$this->canInvoicingReqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->canInvoicingReqModel !== null) {
			
			$xfer += $output->writeFieldBegin('canInvoicingReqModel');
			
			if (!is_object($this->canInvoicingReqModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->canInvoicingReqModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_canInvoicing3_args {
	
	static $_TSPEC;
	public $canInvoicingReqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'canInvoicingReqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['canInvoicingReqModel'])){
				
				$this->canInvoicingReqModel = $vals['canInvoicingReqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->canInvoicingReqModel = new \com\vip\fcs\vei\service\CanInvoicingReqModel3();
			$this->canInvoicingReqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->canInvoicingReqModel !== null) {
			
			$xfer += $output->writeFieldBegin('canInvoicingReqModel');
			
			if (!is_object($this->canInvoicingReqModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->canInvoicingReqModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_canInvoicing4_args {
	
	static $_TSPEC;
	public $canInvoicingReqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'canInvoicingReqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['canInvoicingReqModel'])){
				
				$this->canInvoicingReqModel = $vals['canInvoicingReqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->canInvoicingReqModel = new \com\vip\fcs\vei\service\CanInvoicingReqModel4();
			$this->canInvoicingReqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->canInvoicingReqModel !== null) {
			
			$xfer += $output->writeFieldBegin('canInvoicingReqModel');
			
			if (!is_object($this->canInvoicingReqModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->canInvoicingReqModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_downloadElectronicInvoice_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_downloadElectronicInvoice2_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_downloadElectronicInvoiceInNewProcess_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_downloadElectronicInvoicePicture_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\DownloadElectronicInvoicePictureReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_downloadMedicineElectronicInvoice_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel2();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_downloadRedElectronicInvoice_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_getExternalInvoiceHandleState_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_getExternalInvoiceHandleStateExt_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\ExternalInvoiceHandleStateReqModelExt();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_healthCheck_args {
	
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




class VeiService_invoiceOrderData_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\InvoiceOrderDataReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_vCanInvoicing_args {
	
	static $_TSPEC;
	public $reqModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqModel'])){
				
				$this->reqModel = $vals['reqModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqModel = new \com\vip\fcs\vei\service\VCanInvoicingReqModel();
			$this->reqModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqModel');
		
		if (!is_object($this->reqModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VeiService_acceptExternalInvoiceData_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\BaseRetMsg();
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




class VeiService_canInvoicing_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\CanInvoicingResModel();
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




class VeiService_canInvoicing2_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\CanInvoicingResModel2();
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




class VeiService_canInvoicing3_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\CanInvoicingResModel3();
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




class VeiService_canInvoicing4_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\CanInvoicingResModel4();
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




class VeiService_downloadElectronicInvoice_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceResModel();
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




class VeiService_downloadElectronicInvoice2_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceResModel();
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




class VeiService_downloadElectronicInvoiceInNewProcess_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceResModel();
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




class VeiService_downloadElectronicInvoicePicture_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\DownloadElectronicInvoicePictureResModel();
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




class VeiService_downloadMedicineElectronicInvoice_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceResModel();
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




class VeiService_downloadRedElectronicInvoice_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\DownloadElectronicInvoiceResModel();
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




class VeiService_getExternalInvoiceHandleState_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\ExternalInvoiceHandleStateResModel();
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




class VeiService_getExternalInvoiceHandleStateExt_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\ExternalInvoiceHandleStateResModel();
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




class VeiService_healthCheck_result {
	
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




class VeiService_invoiceOrderData_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\InvoiceOrderDataResModel();
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




class VeiService_vCanInvoicing_result {
	
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
			
			
			$this->success = new \com\vip\fcs\vei\service\VCanInvoicingResModel();
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
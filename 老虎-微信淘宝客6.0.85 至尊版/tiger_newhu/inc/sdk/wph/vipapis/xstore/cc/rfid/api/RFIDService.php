<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\rfid\api;
interface RFIDServiceIf{
	
	
	public function addRfid2BarcodeMapping(\vipapis\xstore\cc\rfid\api\RfidDataRequest $request);
	
	public function batchAddRfid2BarcodeMapping( $requests);
	
	public function generateExternalCode( $barcode, $owner, $oldBarcode);
	
	public function healthCheck();
	
	public function queryBarcodeByExternalCode( $externalCode, $owner);
	
	public function queryBarcodeByRfid( $rfid, $owner);
	
	public function queryEpcStatus( $epc, $owner);
	
	public function queryRfidSyncResult( $barcodes, $owner);
	
	public function uploadEpc(\vipapis\xstore\cc\rfid\api\RfidEpcParamModel $epc);
	
}

class _RFIDServiceClient extends \Osp\Base\OspStub implements \vipapis\xstore\cc\rfid\api\RFIDServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.xstore.cc.rfid.api.RFIDService", "1.0.0");
	}
	
	
	public function addRfid2BarcodeMapping(\vipapis\xstore\cc\rfid\api\RfidDataRequest $request){
		
		$this->send_addRfid2BarcodeMapping( $request);
		return $this->recv_addRfid2BarcodeMapping();
	}
	
	public function send_addRfid2BarcodeMapping(\vipapis\xstore\cc\rfid\api\RfidDataRequest $request){
		
		$this->initInvocation("addRfid2BarcodeMapping");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_addRfid2BarcodeMapping_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_addRfid2BarcodeMapping(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_addRfid2BarcodeMapping_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchAddRfid2BarcodeMapping( $requests){
		
		$this->send_batchAddRfid2BarcodeMapping( $requests);
		return $this->recv_batchAddRfid2BarcodeMapping();
	}
	
	public function send_batchAddRfid2BarcodeMapping( $requests){
		
		$this->initInvocation("batchAddRfid2BarcodeMapping");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_batchAddRfid2BarcodeMapping_args();
		
		$args->requests = $requests;
		
		$this->send_base($args);
	}
	
	public function recv_batchAddRfid2BarcodeMapping(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_batchAddRfid2BarcodeMapping_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function generateExternalCode( $barcode, $owner, $oldBarcode){
		
		$this->send_generateExternalCode( $barcode, $owner, $oldBarcode);
		return $this->recv_generateExternalCode();
	}
	
	public function send_generateExternalCode( $barcode, $owner, $oldBarcode){
		
		$this->initInvocation("generateExternalCode");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_generateExternalCode_args();
		
		$args->barcode = $barcode;
		
		$args->owner = $owner;
		
		$args->oldBarcode = $oldBarcode;
		
		$this->send_base($args);
	}
	
	public function recv_generateExternalCode(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_generateExternalCode_result();
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
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryBarcodeByExternalCode( $externalCode, $owner){
		
		$this->send_queryBarcodeByExternalCode( $externalCode, $owner);
		return $this->recv_queryBarcodeByExternalCode();
	}
	
	public function send_queryBarcodeByExternalCode( $externalCode, $owner){
		
		$this->initInvocation("queryBarcodeByExternalCode");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_queryBarcodeByExternalCode_args();
		
		$args->externalCode = $externalCode;
		
		$args->owner = $owner;
		
		$this->send_base($args);
	}
	
	public function recv_queryBarcodeByExternalCode(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_queryBarcodeByExternalCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryBarcodeByRfid( $rfid, $owner){
		
		$this->send_queryBarcodeByRfid( $rfid, $owner);
		return $this->recv_queryBarcodeByRfid();
	}
	
	public function send_queryBarcodeByRfid( $rfid, $owner){
		
		$this->initInvocation("queryBarcodeByRfid");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_queryBarcodeByRfid_args();
		
		$args->rfid = $rfid;
		
		$args->owner = $owner;
		
		$this->send_base($args);
	}
	
	public function recv_queryBarcodeByRfid(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_queryBarcodeByRfid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryEpcStatus( $epc, $owner){
		
		$this->send_queryEpcStatus( $epc, $owner);
		return $this->recv_queryEpcStatus();
	}
	
	public function send_queryEpcStatus( $epc, $owner){
		
		$this->initInvocation("queryEpcStatus");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_queryEpcStatus_args();
		
		$args->epc = $epc;
		
		$args->owner = $owner;
		
		$this->send_base($args);
	}
	
	public function recv_queryEpcStatus(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_queryEpcStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryRfidSyncResult( $barcodes, $owner){
		
		$this->send_queryRfidSyncResult( $barcodes, $owner);
		return $this->recv_queryRfidSyncResult();
	}
	
	public function send_queryRfidSyncResult( $barcodes, $owner){
		
		$this->initInvocation("queryRfidSyncResult");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_queryRfidSyncResult_args();
		
		$args->barcodes = $barcodes;
		
		$args->owner = $owner;
		
		$this->send_base($args);
	}
	
	public function recv_queryRfidSyncResult(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_queryRfidSyncResult_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function uploadEpc(\vipapis\xstore\cc\rfid\api\RfidEpcParamModel $epc){
		
		$this->send_uploadEpc( $epc);
		return $this->recv_uploadEpc();
	}
	
	public function send_uploadEpc(\vipapis\xstore\cc\rfid\api\RfidEpcParamModel $epc){
		
		$this->initInvocation("uploadEpc");
		$args = new \vipapis\xstore\cc\rfid\api\RFIDService_uploadEpc_args();
		
		$args->epc = $epc;
		
		$this->send_base($args);
	}
	
	public function recv_uploadEpc(){
		
		$result = new \vipapis\xstore\cc\rfid\api\RFIDService_uploadEpc_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class RFIDService_addRfid2BarcodeMapping_args {
	
	static $_TSPEC;
	public $request = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'request'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['request'])){
				
				$this->request = $vals['request'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->request = new \vipapis\xstore\cc\rfid\api\RfidDataRequest();
			$this->request->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('request');
		
		if (!is_object($this->request)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->request->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_batchAddRfid2BarcodeMapping_args {
	
	static $_TSPEC;
	public $requests = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requests'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requests'])){
				
				$this->requests = $vals['requests'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->requests = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \vipapis\xstore\cc\rfid\api\RfidDataRequest();
					$elem0->read($input);
					
					$this->requests[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('requests');
		
		if (!is_array($this->requests)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->requests as $iter0){
			
			
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




class RFIDService_generateExternalCode_args {
	
	static $_TSPEC;
	public $barcode = null;
	public $owner = null;
	public $oldBarcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'owner'
			),
			3 => array(
			'var' => 'oldBarcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
			if (isset($vals['oldBarcode'])){
				
				$this->oldBarcode = $vals['oldBarcode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->barcode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->owner);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->oldBarcode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('owner');
		$xfer += $output->writeString($this->owner);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('oldBarcode');
		$xfer += $output->writeString($this->oldBarcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_healthCheck_args {
	
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




class RFIDService_queryBarcodeByExternalCode_args {
	
	static $_TSPEC;
	public $externalCode = null;
	public $owner = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'externalCode'
			),
			2 => array(
			'var' => 'owner'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['externalCode'])){
				
				$this->externalCode = $vals['externalCode'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->externalCode);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->owner);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('externalCode');
		$xfer += $output->writeString($this->externalCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('owner');
		$xfer += $output->writeString($this->owner);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_queryBarcodeByRfid_args {
	
	static $_TSPEC;
	public $rfid = null;
	public $owner = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rfid'
			),
			2 => array(
			'var' => 'owner'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rfid'])){
				
				$this->rfid = $vals['rfid'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->rfid);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->owner);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('rfid');
		$xfer += $output->writeString($this->rfid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('owner');
		$xfer += $output->writeString($this->owner);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_queryEpcStatus_args {
	
	static $_TSPEC;
	public $epc = null;
	public $owner = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'epc'
			),
			2 => array(
			'var' => 'owner'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['epc'])){
				
				$this->epc = $vals['epc'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->epc);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->owner);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('epc');
		$xfer += $output->writeString($this->epc);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->owner !== null) {
			
			$xfer += $output->writeFieldBegin('owner');
			$xfer += $output->writeString($this->owner);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_queryRfidSyncResult_args {
	
	static $_TSPEC;
	public $barcodes = null;
	public $owner = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcodes'
			),
			2 => array(
			'var' => 'owner'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcodes'])){
				
				$this->barcodes = $vals['barcodes'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->barcodes = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->barcodes[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->owner);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('barcodes');
		
		if (!is_array($this->barcodes)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->barcodes as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('owner');
		$xfer += $output->writeString($this->owner);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_uploadEpc_args {
	
	static $_TSPEC;
	public $epc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'epc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['epc'])){
				
				$this->epc = $vals['epc'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->epc = new \vipapis\xstore\cc\rfid\api\RfidEpcParamModel();
			$this->epc->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('epc');
		
		if (!is_object($this->epc)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->epc->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_addRfid2BarcodeMapping_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\rfid\api\RfidDataResponse();
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




class RFIDService_batchAddRfid2BarcodeMapping_result {
	
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
					
					$elem0 = new \vipapis\xstore\cc\rfid\api\RfidDataResponse();
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




class RFIDService_generateExternalCode_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_healthCheck_result {
	
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




class RFIDService_queryBarcodeByExternalCode_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_queryBarcodeByRfid_result {
	
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
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class RFIDService_queryEpcStatus_result {
	
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
			
			
			$this->success = new \vipapis\xstore\cc\rfid\api\RfidEpcStatusResponse();
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




class RFIDService_queryRfidSyncResult_result {
	
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
					
					$elem0 = new \vipapis\xstore\cc\rfid\api\RfidSyncResultResponse();
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




class RFIDService_uploadEpc_result {
	
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
			
			$input->readBool($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeBool($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>
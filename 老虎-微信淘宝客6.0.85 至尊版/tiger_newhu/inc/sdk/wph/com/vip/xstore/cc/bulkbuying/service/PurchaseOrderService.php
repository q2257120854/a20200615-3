<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;
interface PurchaseOrderServiceIf{
	
	
	public function cancelCrossdock( $purchaseNo);
	
	public function complementBarcodeOriginOfOuterPurchase();
	
	public function delete( $purchaseNo);
	
	public function doImport(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderImportRequest $request);
	
	public function export( $purchaseNo, $exportType);
	
	public function exportAsync( $purchaseNo, $exportType);
	
	public function exportPoHead( $purchaseNo,\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel $purchaseOrderQueryModel);
	
	public function healthCheck();
	
	public function queryMyApprovedPo(\com\vip\xstore\cc\bulkbuying\service\QueryMyApprovedPoReq $req);
	
	public function select( $purchaseNo);
	
	public function selectAll(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderSelectAllReq $selectAllReq);
	
	public function selectPage(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel $purchaseOrderQueryModel);
	
	public function statPoByGroup(\com\vip\xstore\cc\bulkbuying\service\StatPoCommonReq $req);
	
	public function update(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderUpdateRequest $request);
	
	public function updatePoDistributableGoodsTime( $purchaseNo, $distributableGoodsTime);
	
}

class _PurchaseOrderServiceClient extends \Osp\Base\OspStub implements \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.xstore.cc.bulkbuying.service.PurchaseOrderService", "1.0.0");
	}
	
	
	public function cancelCrossdock( $purchaseNo){
		
		$this->send_cancelCrossdock( $purchaseNo);
		return $this->recv_cancelCrossdock();
	}
	
	public function send_cancelCrossdock( $purchaseNo){
		
		$this->initInvocation("cancelCrossdock");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_cancelCrossdock_args();
		
		$args->purchaseNo = $purchaseNo;
		
		$this->send_base($args);
	}
	
	public function recv_cancelCrossdock(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_cancelCrossdock_result();
		$this->receive_base($result);
		
	}
	
	
	public function complementBarcodeOriginOfOuterPurchase(){
		
		$this->send_complementBarcodeOriginOfOuterPurchase();
		return $this->recv_complementBarcodeOriginOfOuterPurchase();
	}
	
	public function send_complementBarcodeOriginOfOuterPurchase(){
		
		$this->initInvocation("complementBarcodeOriginOfOuterPurchase");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_complementBarcodeOriginOfOuterPurchase_args();
		
		$this->send_base($args);
	}
	
	public function recv_complementBarcodeOriginOfOuterPurchase(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_complementBarcodeOriginOfOuterPurchase_result();
		$this->receive_base($result);
		
	}
	
	
	public function delete( $purchaseNo){
		
		$this->send_delete( $purchaseNo);
		return $this->recv_delete();
	}
	
	public function send_delete( $purchaseNo){
		
		$this->initInvocation("delete");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_delete_args();
		
		$args->purchaseNo = $purchaseNo;
		
		$this->send_base($args);
	}
	
	public function recv_delete(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_delete_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function doImport(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderImportRequest $request){
		
		$this->send_doImport( $request);
		return $this->recv_doImport();
	}
	
	public function send_doImport(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderImportRequest $request){
		
		$this->initInvocation("doImport");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_doImport_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_doImport(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_doImport_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function export( $purchaseNo, $exportType){
		
		$this->send_export( $purchaseNo, $exportType);
		return $this->recv_export();
	}
	
	public function send_export( $purchaseNo, $exportType){
		
		$this->initInvocation("export");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_export_args();
		
		$args->purchaseNo = $purchaseNo;
		
		$args->exportType = $exportType;
		
		$this->send_base($args);
	}
	
	public function recv_export(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_export_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportAsync( $purchaseNo, $exportType){
		
		$this->send_exportAsync( $purchaseNo, $exportType);
		return $this->recv_exportAsync();
	}
	
	public function send_exportAsync( $purchaseNo, $exportType){
		
		$this->initInvocation("exportAsync");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_exportAsync_args();
		
		$args->purchaseNo = $purchaseNo;
		
		$args->exportType = $exportType;
		
		$this->send_base($args);
	}
	
	public function recv_exportAsync(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_exportAsync_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportPoHead( $purchaseNo,\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel $purchaseOrderQueryModel){
		
		$this->send_exportPoHead( $purchaseNo, $purchaseOrderQueryModel);
		return $this->recv_exportPoHead();
	}
	
	public function send_exportPoHead( $purchaseNo,\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel $purchaseOrderQueryModel){
		
		$this->initInvocation("exportPoHead");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_exportPoHead_args();
		
		$args->purchaseNo = $purchaseNo;
		
		$args->purchaseOrderQueryModel = $purchaseOrderQueryModel;
		
		$this->send_base($args);
	}
	
	public function recv_exportPoHead(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_exportPoHead_result();
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
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryMyApprovedPo(\com\vip\xstore\cc\bulkbuying\service\QueryMyApprovedPoReq $req){
		
		$this->send_queryMyApprovedPo( $req);
		return $this->recv_queryMyApprovedPo();
	}
	
	public function send_queryMyApprovedPo(\com\vip\xstore\cc\bulkbuying\service\QueryMyApprovedPoReq $req){
		
		$this->initInvocation("queryMyApprovedPo");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_queryMyApprovedPo_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_queryMyApprovedPo(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_queryMyApprovedPo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function select( $purchaseNo){
		
		$this->send_select( $purchaseNo);
		return $this->recv_select();
	}
	
	public function send_select( $purchaseNo){
		
		$this->initInvocation("select");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_select_args();
		
		$args->purchaseNo = $purchaseNo;
		
		$this->send_base($args);
	}
	
	public function recv_select(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_select_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function selectAll(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderSelectAllReq $selectAllReq){
		
		$this->send_selectAll( $selectAllReq);
		return $this->recv_selectAll();
	}
	
	public function send_selectAll(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderSelectAllReq $selectAllReq){
		
		$this->initInvocation("selectAll");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_selectAll_args();
		
		$args->selectAllReq = $selectAllReq;
		
		$this->send_base($args);
	}
	
	public function recv_selectAll(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_selectAll_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function selectPage(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel $purchaseOrderQueryModel){
		
		$this->send_selectPage( $purchaseOrderQueryModel);
		return $this->recv_selectPage();
	}
	
	public function send_selectPage(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel $purchaseOrderQueryModel){
		
		$this->initInvocation("selectPage");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_selectPage_args();
		
		$args->purchaseOrderQueryModel = $purchaseOrderQueryModel;
		
		$this->send_base($args);
	}
	
	public function recv_selectPage(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_selectPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function statPoByGroup(\com\vip\xstore\cc\bulkbuying\service\StatPoCommonReq $req){
		
		$this->send_statPoByGroup( $req);
		return $this->recv_statPoByGroup();
	}
	
	public function send_statPoByGroup(\com\vip\xstore\cc\bulkbuying\service\StatPoCommonReq $req){
		
		$this->initInvocation("statPoByGroup");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_statPoByGroup_args();
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_statPoByGroup(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_statPoByGroup_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function update(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderUpdateRequest $request){
		
		$this->send_update( $request);
		return $this->recv_update();
	}
	
	public function send_update(\com\vip\xstore\cc\bulkbuying\service\PurchaseOrderUpdateRequest $request){
		
		$this->initInvocation("update");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_update_args();
		
		$args->request = $request;
		
		$this->send_base($args);
	}
	
	public function recv_update(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_update_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updatePoDistributableGoodsTime( $purchaseNo, $distributableGoodsTime){
		
		$this->send_updatePoDistributableGoodsTime( $purchaseNo, $distributableGoodsTime);
		return $this->recv_updatePoDistributableGoodsTime();
	}
	
	public function send_updatePoDistributableGoodsTime( $purchaseNo, $distributableGoodsTime){
		
		$this->initInvocation("updatePoDistributableGoodsTime");
		$args = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_updatePoDistributableGoodsTime_args();
		
		$args->purchaseNo = $purchaseNo;
		
		$args->distributableGoodsTime = $distributableGoodsTime;
		
		$this->send_base($args);
	}
	
	public function recv_updatePoDistributableGoodsTime(){
		
		$result = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderService_updatePoDistributableGoodsTime_result();
		$this->receive_base($result);
		
	}
	
	
}




class PurchaseOrderService_cancelCrossdock_args {
	
	static $_TSPEC;
	public $purchaseNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->purchaseNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_complementBarcodeOriginOfOuterPurchase_args {
	
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




class PurchaseOrderService_delete_args {
	
	static $_TSPEC;
	public $purchaseNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->purchaseNo = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->purchaseNo[$_size0++] = $elem0;
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
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			
			if (!is_array($this->purchaseNo)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->purchaseNo as $iter0){
				
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




class PurchaseOrderService_doImport_args {
	
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
			
			
			$this->request = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderImportRequest();
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




class PurchaseOrderService_export_args {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $exportType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'exportType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['exportType'])){
				
				$this->exportType = $vals['exportType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->purchaseNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->exportType); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('exportType');
		$xfer += $output->writeI32($this->exportType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_exportAsync_args {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $exportType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'exportType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['exportType'])){
				
				$this->exportType = $vals['exportType'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->purchaseNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->exportType);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('exportType');
		$xfer += $output->writeString($this->exportType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_exportPoHead_args {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $purchaseOrderQueryModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'purchaseOrderQueryModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['purchaseOrderQueryModel'])){
				
				$this->purchaseOrderQueryModel = $vals['purchaseOrderQueryModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->purchaseNo);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->purchaseOrderQueryModel = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel();
			$this->purchaseOrderQueryModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOrderQueryModel !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOrderQueryModel');
			
			if (!is_object($this->purchaseOrderQueryModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->purchaseOrderQueryModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_healthCheck_args {
	
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




class PurchaseOrderService_queryMyApprovedPo_args {
	
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
			
			
			$this->req = new \com\vip\xstore\cc\bulkbuying\service\QueryMyApprovedPoReq();
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




class PurchaseOrderService_select_args {
	
	static $_TSPEC;
	public $purchaseNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->purchaseNo);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->purchaseNo !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseNo');
			$xfer += $output->writeString($this->purchaseNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_selectAll_args {
	
	static $_TSPEC;
	public $selectAllReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'selectAllReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['selectAllReq'])){
				
				$this->selectAllReq = $vals['selectAllReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->selectAllReq = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderSelectAllReq();
			$this->selectAllReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->selectAllReq !== null) {
			
			$xfer += $output->writeFieldBegin('selectAllReq');
			
			if (!is_object($this->selectAllReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->selectAllReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_selectPage_args {
	
	static $_TSPEC;
	public $purchaseOrderQueryModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseOrderQueryModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseOrderQueryModel'])){
				
				$this->purchaseOrderQueryModel = $vals['purchaseOrderQueryModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->purchaseOrderQueryModel = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderQueryModel();
			$this->purchaseOrderQueryModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->purchaseOrderQueryModel !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOrderQueryModel');
			
			if (!is_object($this->purchaseOrderQueryModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->purchaseOrderQueryModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_statPoByGroup_args {
	
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
			
			
			$this->req = new \com\vip\xstore\cc\bulkbuying\service\StatPoCommonReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('req');
		
		if (!is_object($this->req)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->req->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_update_args {
	
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
			
			
			$this->request = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderUpdateRequest();
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




class PurchaseOrderService_updatePoDistributableGoodsTime_args {
	
	static $_TSPEC;
	public $purchaseNo = null;
	public $distributableGoodsTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNo'
			),
			2 => array(
			'var' => 'distributableGoodsTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNo'])){
				
				$this->purchaseNo = $vals['purchaseNo'];
			}
			
			
			if (isset($vals['distributableGoodsTime'])){
				
				$this->distributableGoodsTime = $vals['distributableGoodsTime'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->purchaseNo);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->distributableGoodsTime);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('purchaseNo');
		$xfer += $output->writeString($this->purchaseNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('distributableGoodsTime');
		$xfer += $output->writeI64($this->distributableGoodsTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_cancelCrossdock_result {
	
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




class PurchaseOrderService_complementBarcodeOriginOfOuterPurchase_result {
	
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




class PurchaseOrderService_delete_result {
	
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
			
			$input->readI32($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeI32($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_doImport_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderImportResponse();
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




class PurchaseOrderService_export_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderResult();
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




class PurchaseOrderService_exportAsync_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_exportPoHead_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderResult();
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




class PurchaseOrderService_healthCheck_result {
	
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




class PurchaseOrderService_queryMyApprovedPo_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderModelResult();
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




class PurchaseOrderService_select_result {
	
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
					
					$elem0 = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderModel();
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




class PurchaseOrderService_selectAll_result {
	
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
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderModel();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
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




class PurchaseOrderService_selectPage_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\bulkbuying\service\PurchaseOrderModelResult();
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




class PurchaseOrderService_statPoByGroup_result {
	
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
			
			
			$this->success = new \com\vip\xstore\cc\bulkbuying\service\StatPoByGroupResp();
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




class PurchaseOrderService_update_result {
	
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class PurchaseOrderService_updatePoDistributableGoodsTime_result {
	
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
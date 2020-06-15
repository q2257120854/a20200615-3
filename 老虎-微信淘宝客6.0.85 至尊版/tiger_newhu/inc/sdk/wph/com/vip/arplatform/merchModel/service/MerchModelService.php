<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\arplatform\merchModel\service;
interface MerchModelServiceIf{
	
	
	public function batchBind( $materialId, $bindingModels);
	
	public function bind( $materialId,\com\vip\arplatform\merchModel\service\BindingModel $bindInfoModel);
	
	public function createBatchMaterial( $mdList);
	
	public function createMaterial(\com\vip\arplatform\merchModel\service\MaterialModel $md);
	
	public function deleteMaterialByBarcode( $serviceType, $_from, $barcode);
	
	public function deleteMaterialByMid( $serviceType, $_from, $mid);
	
	public function getBindInfoBySku( $sku);
	
	public function getBindRelationship( $materialIds);
	
	public function getJd3dModel( $channel, $spu, $pidVid);
	
	public function getMaterialModelById( $id);
	
	public function healthCheck();
	
	public function searchBinding(\com\vip\arplatform\merchModel\service\BindingSearchParams $parameters, $page, $limit, $sortField, $sort);
	
	public function searchMaterial(\com\vip\arplatform\merchModel\service\MaterialSearchParams $parameters, $page, $limit, $sortField, $sort);
	
	public function setBindingStatus( $sku, $status);
	
	public function setMaterialStatus( $materialId, $status);
	
	public function syncFromJD( $syncDatum);
	
	public function unbind( $materialId,\com\vip\arplatform\merchModel\service\BindingModel $bindInfoModel);
	
}

class _MerchModelServiceClient extends \Osp\Base\OspStub implements \com\vip\arplatform\merchModel\service\MerchModelServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.arplatform.merchModel.service.MerchModelService", "1.0.0");
	}
	
	
	public function batchBind( $materialId, $bindingModels){
		
		$this->send_batchBind( $materialId, $bindingModels);
		return $this->recv_batchBind();
	}
	
	public function send_batchBind( $materialId, $bindingModels){
		
		$this->initInvocation("batchBind");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_batchBind_args();
		
		$args->materialId = $materialId;
		
		$args->bindingModels = $bindingModels;
		
		$this->send_base($args);
	}
	
	public function recv_batchBind(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_batchBind_result();
		$this->receive_base($result);
		
	}
	
	
	public function bind( $materialId,\com\vip\arplatform\merchModel\service\BindingModel $bindInfoModel){
		
		$this->send_bind( $materialId, $bindInfoModel);
		return $this->recv_bind();
	}
	
	public function send_bind( $materialId,\com\vip\arplatform\merchModel\service\BindingModel $bindInfoModel){
		
		$this->initInvocation("bind");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_bind_args();
		
		$args->materialId = $materialId;
		
		$args->bindInfoModel = $bindInfoModel;
		
		$this->send_base($args);
	}
	
	public function recv_bind(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_bind_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createBatchMaterial( $mdList){
		
		$this->send_createBatchMaterial( $mdList);
		return $this->recv_createBatchMaterial();
	}
	
	public function send_createBatchMaterial( $mdList){
		
		$this->initInvocation("createBatchMaterial");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_createBatchMaterial_args();
		
		$args->mdList = $mdList;
		
		$this->send_base($args);
	}
	
	public function recv_createBatchMaterial(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_createBatchMaterial_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function createMaterial(\com\vip\arplatform\merchModel\service\MaterialModel $md){
		
		$this->send_createMaterial( $md);
		return $this->recv_createMaterial();
	}
	
	public function send_createMaterial(\com\vip\arplatform\merchModel\service\MaterialModel $md){
		
		$this->initInvocation("createMaterial");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_createMaterial_args();
		
		$args->md = $md;
		
		$this->send_base($args);
	}
	
	public function recv_createMaterial(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_createMaterial_result();
		$this->receive_base($result);
		
	}
	
	
	public function deleteMaterialByBarcode( $serviceType, $_from, $barcode){
		
		$this->send_deleteMaterialByBarcode( $serviceType, $_from, $barcode);
		return $this->recv_deleteMaterialByBarcode();
	}
	
	public function send_deleteMaterialByBarcode( $serviceType, $_from, $barcode){
		
		$this->initInvocation("deleteMaterialByBarcode");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_deleteMaterialByBarcode_args();
		
		$args->serviceType = $serviceType;
		
		$args->_from = $_from;
		
		$args->barcode = $barcode;
		
		$this->send_base($args);
	}
	
	public function recv_deleteMaterialByBarcode(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_deleteMaterialByBarcode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteMaterialByMid( $serviceType, $_from, $mid){
		
		$this->send_deleteMaterialByMid( $serviceType, $_from, $mid);
		return $this->recv_deleteMaterialByMid();
	}
	
	public function send_deleteMaterialByMid( $serviceType, $_from, $mid){
		
		$this->initInvocation("deleteMaterialByMid");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_deleteMaterialByMid_args();
		
		$args->serviceType = $serviceType;
		
		$args->_from = $_from;
		
		$args->mid = $mid;
		
		$this->send_base($args);
	}
	
	public function recv_deleteMaterialByMid(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_deleteMaterialByMid_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBindInfoBySku( $sku){
		
		$this->send_getBindInfoBySku( $sku);
		return $this->recv_getBindInfoBySku();
	}
	
	public function send_getBindInfoBySku( $sku){
		
		$this->initInvocation("getBindInfoBySku");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_getBindInfoBySku_args();
		
		$args->sku = $sku;
		
		$this->send_base($args);
	}
	
	public function recv_getBindInfoBySku(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_getBindInfoBySku_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBindRelationship( $materialIds){
		
		$this->send_getBindRelationship( $materialIds);
		return $this->recv_getBindRelationship();
	}
	
	public function send_getBindRelationship( $materialIds){
		
		$this->initInvocation("getBindRelationship");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_getBindRelationship_args();
		
		$args->materialIds = $materialIds;
		
		$this->send_base($args);
	}
	
	public function recv_getBindRelationship(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_getBindRelationship_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getJd3dModel( $channel, $spu, $pidVid){
		
		$this->send_getJd3dModel( $channel, $spu, $pidVid);
		return $this->recv_getJd3dModel();
	}
	
	public function send_getJd3dModel( $channel, $spu, $pidVid){
		
		$this->initInvocation("getJd3dModel");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_getJd3dModel_args();
		
		$args->channel = $channel;
		
		$args->spu = $spu;
		
		$args->pidVid = $pidVid;
		
		$this->send_base($args);
	}
	
	public function recv_getJd3dModel(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_getJd3dModel_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMaterialModelById( $id){
		
		$this->send_getMaterialModelById( $id);
		return $this->recv_getMaterialModelById();
	}
	
	public function send_getMaterialModelById( $id){
		
		$this->initInvocation("getMaterialModelById");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_getMaterialModelById_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_getMaterialModelById(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_getMaterialModelById_result();
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
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function searchBinding(\com\vip\arplatform\merchModel\service\BindingSearchParams $parameters, $page, $limit, $sortField, $sort){
		
		$this->send_searchBinding( $parameters, $page, $limit, $sortField, $sort);
		return $this->recv_searchBinding();
	}
	
	public function send_searchBinding(\com\vip\arplatform\merchModel\service\BindingSearchParams $parameters, $page, $limit, $sortField, $sort){
		
		$this->initInvocation("searchBinding");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_searchBinding_args();
		
		$args->parameters = $parameters;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->sortField = $sortField;
		
		$args->sort = $sort;
		
		$this->send_base($args);
	}
	
	public function recv_searchBinding(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_searchBinding_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function searchMaterial(\com\vip\arplatform\merchModel\service\MaterialSearchParams $parameters, $page, $limit, $sortField, $sort){
		
		$this->send_searchMaterial( $parameters, $page, $limit, $sortField, $sort);
		return $this->recv_searchMaterial();
	}
	
	public function send_searchMaterial(\com\vip\arplatform\merchModel\service\MaterialSearchParams $parameters, $page, $limit, $sortField, $sort){
		
		$this->initInvocation("searchMaterial");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_searchMaterial_args();
		
		$args->parameters = $parameters;
		
		$args->page = $page;
		
		$args->limit = $limit;
		
		$args->sortField = $sortField;
		
		$args->sort = $sort;
		
		$this->send_base($args);
	}
	
	public function recv_searchMaterial(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_searchMaterial_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function setBindingStatus( $sku, $status){
		
		$this->send_setBindingStatus( $sku, $status);
		return $this->recv_setBindingStatus();
	}
	
	public function send_setBindingStatus( $sku, $status){
		
		$this->initInvocation("setBindingStatus");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_setBindingStatus_args();
		
		$args->sku = $sku;
		
		$args->status = $status;
		
		$this->send_base($args);
	}
	
	public function recv_setBindingStatus(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_setBindingStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function setMaterialStatus( $materialId, $status){
		
		$this->send_setMaterialStatus( $materialId, $status);
		return $this->recv_setMaterialStatus();
	}
	
	public function send_setMaterialStatus( $materialId, $status){
		
		$this->initInvocation("setMaterialStatus");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_setMaterialStatus_args();
		
		$args->materialId = $materialId;
		
		$args->status = $status;
		
		$this->send_base($args);
	}
	
	public function recv_setMaterialStatus(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_setMaterialStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncFromJD( $syncDatum){
		
		$this->send_syncFromJD( $syncDatum);
		return $this->recv_syncFromJD();
	}
	
	public function send_syncFromJD( $syncDatum){
		
		$this->initInvocation("syncFromJD");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_syncFromJD_args();
		
		$args->syncDatum = $syncDatum;
		
		$this->send_base($args);
	}
	
	public function recv_syncFromJD(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_syncFromJD_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function unbind( $materialId,\com\vip\arplatform\merchModel\service\BindingModel $bindInfoModel){
		
		$this->send_unbind( $materialId, $bindInfoModel);
		return $this->recv_unbind();
	}
	
	public function send_unbind( $materialId,\com\vip\arplatform\merchModel\service\BindingModel $bindInfoModel){
		
		$this->initInvocation("unbind");
		$args = new \com\vip\arplatform\merchModel\service\MerchModelService_unbind_args();
		
		$args->materialId = $materialId;
		
		$args->bindInfoModel = $bindInfoModel;
		
		$this->send_base($args);
	}
	
	public function recv_unbind(){
		
		$result = new \com\vip\arplatform\merchModel\service\MerchModelService_unbind_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class MerchModelService_batchBind_args {
	
	static $_TSPEC;
	public $materialId = null;
	public $bindingModels = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialId'
			),
			2 => array(
			'var' => 'bindingModels'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialId'])){
				
				$this->materialId = $vals['materialId'];
			}
			
			
			if (isset($vals['bindingModels'])){
				
				$this->bindingModels = $vals['bindingModels'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->materialId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->bindingModels = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\arplatform\merchModel\service\BindingModel();
					$elem0->read($input);
					
					$this->bindingModels[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('materialId');
		$xfer += $output->writeI64($this->materialId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bindingModels');
		
		if (!is_array($this->bindingModels)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->bindingModels as $iter0){
			
			
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




class MerchModelService_bind_args {
	
	static $_TSPEC;
	public $materialId = null;
	public $bindInfoModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialId'
			),
			2 => array(
			'var' => 'bindInfoModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialId'])){
				
				$this->materialId = $vals['materialId'];
			}
			
			
			if (isset($vals['bindInfoModel'])){
				
				$this->bindInfoModel = $vals['bindInfoModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->materialId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->bindInfoModel = new \com\vip\arplatform\merchModel\service\BindingModel();
			$this->bindInfoModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('materialId');
		$xfer += $output->writeI64($this->materialId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bindInfoModel');
		
		if (!is_object($this->bindInfoModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->bindInfoModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_createBatchMaterial_args {
	
	static $_TSPEC;
	public $mdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mdList'])){
				
				$this->mdList = $vals['mdList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->mdList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\arplatform\merchModel\service\MaterialModel();
					$elem0->read($input);
					
					$this->mdList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('mdList');
		
		if (!is_array($this->mdList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->mdList as $iter0){
			
			
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




class MerchModelService_createMaterial_args {
	
	static $_TSPEC;
	public $md = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'md'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['md'])){
				
				$this->md = $vals['md'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->md = new \com\vip\arplatform\merchModel\service\MaterialModel();
			$this->md->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('md');
		
		if (!is_object($this->md)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->md->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_deleteMaterialByBarcode_args {
	
	static $_TSPEC;
	public $serviceType = null;
	public $_from = null;
	public $barcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serviceType'
			),
			2 => array(
			'var' => '_from'
			),
			3 => array(
			'var' => 'barcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serviceType'])){
				
				$this->serviceType = $vals['serviceType'];
			}
			
			
			if (isset($vals['_from'])){
				
				$this->_from = $vals['_from'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->serviceType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->_from);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->barcode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('serviceType');
		$xfer += $output->writeI32($this->serviceType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('_from');
		$xfer += $output->writeString($this->_from);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_deleteMaterialByMid_args {
	
	static $_TSPEC;
	public $serviceType = null;
	public $_from = null;
	public $mid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serviceType'
			),
			2 => array(
			'var' => '_from'
			),
			3 => array(
			'var' => 'mid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serviceType'])){
				
				$this->serviceType = $vals['serviceType'];
			}
			
			
			if (isset($vals['_from'])){
				
				$this->_from = $vals['_from'];
			}
			
			
			if (isset($vals['mid'])){
				
				$this->mid = $vals['mid'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->serviceType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->_from);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->mid);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('serviceType');
		$xfer += $output->writeI32($this->serviceType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('_from');
		$xfer += $output->writeString($this->_from);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mid');
		$xfer += $output->writeString($this->mid);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_getBindInfoBySku_args {
	
	static $_TSPEC;
	public $sku = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->sku); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeI64($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_getBindRelationship_args {
	
	static $_TSPEC;
	public $materialIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialIds'])){
				
				$this->materialIds = $vals['materialIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->materialIds = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI64($elem0); 
					
					$this->materialIds[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('materialIds');
		
		if (!is_array($this->materialIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->materialIds as $iter0){
			
			$xfer += $output->writeI64($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_getJd3dModel_args {
	
	static $_TSPEC;
	public $channel = null;
	public $spu = null;
	public $pidVid = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channel'
			),
			2 => array(
			'var' => 'spu'
			),
			3 => array(
			'var' => 'pidVid'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['pidVid'])){
				
				$this->pidVid = $vals['pidVid'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->channel);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->spu);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->pidVid);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('channel');
		$xfer += $output->writeString($this->channel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('spu');
		$xfer += $output->writeString($this->spu);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pidVid !== null) {
			
			$xfer += $output->writeFieldBegin('pidVid');
			$xfer += $output->writeString($this->pidVid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_getMaterialModelById_args {
	
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




class MerchModelService_healthCheck_args {
	
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




class MerchModelService_searchBinding_args {
	
	static $_TSPEC;
	public $parameters = null;
	public $page = null;
	public $limit = null;
	public $sortField = null;
	public $sort = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'parameters'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'limit'
			),
			4 => array(
			'var' => 'sortField'
			),
			5 => array(
			'var' => 'sort'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['parameters'])){
				
				$this->parameters = $vals['parameters'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['sortField'])){
				
				$this->sortField = $vals['sortField'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->parameters = new \com\vip\arplatform\merchModel\service\BindingSearchParams();
			$this->parameters->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sortField);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->sort); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('parameters');
		
		if (!is_object($this->parameters)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->parameters->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sortField');
		$xfer += $output->writeString($this->sortField);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_searchMaterial_args {
	
	static $_TSPEC;
	public $parameters = null;
	public $page = null;
	public $limit = null;
	public $sortField = null;
	public $sort = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'parameters'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'limit'
			),
			4 => array(
			'var' => 'sortField'
			),
			5 => array(
			'var' => 'sort'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['parameters'])){
				
				$this->parameters = $vals['parameters'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['sortField'])){
				
				$this->sortField = $vals['sortField'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->parameters = new \com\vip\arplatform\merchModel\service\MaterialSearchParams();
			$this->parameters->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->sortField);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->sort); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('parameters');
		
		if (!is_object($this->parameters)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->parameters->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sortField');
		$xfer += $output->writeString($this->sortField);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_setBindingStatus_args {
	
	static $_TSPEC;
	public $sku = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku'
			),
			2 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->sku); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->status); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sku');
		$xfer += $output->writeI64($this->sku);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeByte($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_setMaterialStatus_args {
	
	static $_TSPEC;
	public $materialId = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialId'
			),
			2 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialId'])){
				
				$this->materialId = $vals['materialId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->materialId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->status); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('materialId');
		$xfer += $output->writeI64($this->materialId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeByte($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_syncFromJD_args {
	
	static $_TSPEC;
	public $syncDatum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'syncDatum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['syncDatum'])){
				
				$this->syncDatum = $vals['syncDatum'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->syncDatum = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\arplatform\merchModel\service\Jd3dModelData();
					$elem0->read($input);
					
					$this->syncDatum[$_size0++] = $elem0;
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
		
		if($this->syncDatum !== null) {
			
			$xfer += $output->writeFieldBegin('syncDatum');
			
			if (!is_array($this->syncDatum)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->syncDatum as $iter0){
				
				
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




class MerchModelService_unbind_args {
	
	static $_TSPEC;
	public $materialId = null;
	public $bindInfoModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'materialId'
			),
			2 => array(
			'var' => 'bindInfoModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['materialId'])){
				
				$this->materialId = $vals['materialId'];
			}
			
			
			if (isset($vals['bindInfoModel'])){
				
				$this->bindInfoModel = $vals['bindInfoModel'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->materialId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->bindInfoModel = new \com\vip\arplatform\merchModel\service\BindingModel();
			$this->bindInfoModel->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('materialId');
		$xfer += $output->writeI64($this->materialId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bindInfoModel');
		
		if (!is_object($this->bindInfoModel)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->bindInfoModel->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_batchBind_result {
	
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




class MerchModelService_bind_result {
	
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




class MerchModelService_createBatchMaterial_result {
	
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
					$input->readString($elem0);
					
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




class MerchModelService_createMaterial_result {
	
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




class MerchModelService_deleteMaterialByBarcode_result {
	
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




class MerchModelService_deleteMaterialByMid_result {
	
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




class MerchModelService_getBindInfoBySku_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\merchModel\service\BindingModel();
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




class MerchModelService_getBindRelationship_result {
	
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
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = 0;
					$input->readI64($key0); 
					
					$val0 = null;
					
					$val0 = array();
					$_size1 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem1 = null;
							$input->readI64($elem1); 
							
							$val0[$_size1++] = $elem1;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readListEnd();
					
					$this->success[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
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
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI64($kiter0);
				
				
				if (!is_array($viter0)){
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$output->writeListBegin();
				foreach ($viter0 as $iter1){
					
					$xfer += $output->writeI64($iter1);
					
				}
				
				$output->writeListEnd();
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class MerchModelService_getJd3dModel_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\merchModel\service\Jd3dModelAppResp();
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




class MerchModelService_getMaterialModelById_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\merchModel\service\MaterialModel();
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




class MerchModelService_healthCheck_result {
	
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




class MerchModelService_searchBinding_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\merchModel\service\PageableBindingModel();
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




class MerchModelService_searchMaterial_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\merchModel\service\PageableMaterialModel();
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




class MerchModelService_setBindingStatus_result {
	
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




class MerchModelService_setMaterialStatus_result {
	
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




class MerchModelService_syncFromJD_result {
	
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
			
			
			$this->success = new \com\vip\arplatform\merchModel\service\Jd3dModelSyncResponse();
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




class MerchModelService_unbind_result {
	
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
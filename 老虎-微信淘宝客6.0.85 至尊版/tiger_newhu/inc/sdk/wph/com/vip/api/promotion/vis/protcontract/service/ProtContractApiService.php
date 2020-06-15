<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;
interface ProtContractApiServiceIf{
	
	
	public function addAttachment( $protContractAttachmentParams);
	
	public function addProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams $protContractMainInfoParams, $protContractDiscountInfoParams,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams);
	
	public function auditProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractAuditParams $protContractAuditParams);
	
	public function batchGetProtContractDetail(\com\vip\api\promotion\vis\protcontract\service\BatchProtContractDetailParam $batchProtContractDetailParam);
	
	public function checkBinding( $id);
	
	public function checkVendorCaptchaActive( $vendorCode);
	
	public function deleteAttachment( $id, $userEmail);
	
	public function deleteProtContract( $id,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams);
	
	public function exportCommodityList(\com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam $queryActParam);
	
	public function exportProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam $protContractQueryForAuditParam);
	
	public function fetchReminderJobSchedule();
	
	public function getAttachmentCount( $mainId);
	
	public function getAttachmentList( $mainId);
	
	public function getBrandGoodsList( $protId);
	
	public function getCaptcha(\com\vip\api\promotion\vis\protcontract\service\GetCaptchaParam $getCaptchaParam);
	
	public function getContractPage(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryParam $protContractQueryParam,\com\vip\api\promotion\vis\common\Pager $pager);
	
	public function getContractPageForAudit(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam $protContractQueryForAuditParam,\com\vip\api\promotion\vis\common\Pager $pager);
	
	public function getProtContractDetail(\com\vip\api\promotion\vis\protcontract\service\ProtContractDetailParam $protContractDetailParam);
	
	public function getProtContractDetailPage(\com\vip\api\promotion\vis\protcontract\service\ProtContractDetailQueryParams $protContractDetailQueryParams);
	
	public function getProtContractView( $mainId);
	
	public function getVendorsByProtNos( $protNos);
	
	public function healthCheck();
	
	public function protContractLimitCheckVendorCodeInBlankList( $vendorCode);
	
	public function queryActByActNo(\com\vip\api\promotion\vis\protcontract\service\QueryActParam $queryActParam);
	
	public function queryActDetailByActNo(\com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam $queryActParam);
	
	public function querySpecialName(\com\vip\api\promotion\vis\third\service\QueryParam $queryParam);
	
	public function saveProtContractView(\com\vip\api\promotion\vis\protcontract\service\ProtContractViewSaveParams $protContractViewSaveParams);
	
	public function searchSalesName(\com\vip\api\promotion\vis\protcontract\service\ProtContractSalesNameParam $protContractSalesNameParam);
	
	public function setApps( $mainId, $appValue);
	
	public function submitProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractSubmitParam $protContractSubmitParam);
	
	public function updateProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams $protContractMainInfoParams, $protContractDiscountInfoParams,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams);
	
}

class _ProtContractApiServiceClient extends \Osp\Base\OspStub implements \com\vip\api\promotion\vis\protcontract\service\ProtContractApiServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.api.promotion.vis.protcontract.service.ProtContractApiService", "1.1.2");
	}
	
	
	public function addAttachment( $protContractAttachmentParams){
		
		$this->send_addAttachment( $protContractAttachmentParams);
		return $this->recv_addAttachment();
	}
	
	public function send_addAttachment( $protContractAttachmentParams){
		
		$this->initInvocation("addAttachment");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_addAttachment_args();
		
		$args->protContractAttachmentParams = $protContractAttachmentParams;
		
		$this->send_base($args);
	}
	
	public function recv_addAttachment(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_addAttachment_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams $protContractMainInfoParams, $protContractDiscountInfoParams,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams){
		
		$this->send_addProtContract( $protContractMainInfoParams, $protContractDiscountInfoParams, $operatorParams);
		return $this->recv_addProtContract();
	}
	
	public function send_addProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams $protContractMainInfoParams, $protContractDiscountInfoParams,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams){
		
		$this->initInvocation("addProtContract");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_addProtContract_args();
		
		$args->protContractMainInfoParams = $protContractMainInfoParams;
		
		$args->protContractDiscountInfoParams = $protContractDiscountInfoParams;
		
		$args->operatorParams = $operatorParams;
		
		$this->send_base($args);
	}
	
	public function recv_addProtContract(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_addProtContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function auditProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractAuditParams $protContractAuditParams){
		
		$this->send_auditProtContract( $protContractAuditParams);
		return $this->recv_auditProtContract();
	}
	
	public function send_auditProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractAuditParams $protContractAuditParams){
		
		$this->initInvocation("auditProtContract");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_auditProtContract_args();
		
		$args->protContractAuditParams = $protContractAuditParams;
		
		$this->send_base($args);
	}
	
	public function recv_auditProtContract(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_auditProtContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchGetProtContractDetail(\com\vip\api\promotion\vis\protcontract\service\BatchProtContractDetailParam $batchProtContractDetailParam){
		
		$this->send_batchGetProtContractDetail( $batchProtContractDetailParam);
		return $this->recv_batchGetProtContractDetail();
	}
	
	public function send_batchGetProtContractDetail(\com\vip\api\promotion\vis\protcontract\service\BatchProtContractDetailParam $batchProtContractDetailParam){
		
		$this->initInvocation("batchGetProtContractDetail");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_batchGetProtContractDetail_args();
		
		$args->batchProtContractDetailParam = $batchProtContractDetailParam;
		
		$this->send_base($args);
	}
	
	public function recv_batchGetProtContractDetail(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_batchGetProtContractDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkBinding( $id){
		
		$this->send_checkBinding( $id);
		return $this->recv_checkBinding();
	}
	
	public function send_checkBinding( $id){
		
		$this->initInvocation("checkBinding");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_checkBinding_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_checkBinding(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_checkBinding_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function checkVendorCaptchaActive( $vendorCode){
		
		$this->send_checkVendorCaptchaActive( $vendorCode);
		return $this->recv_checkVendorCaptchaActive();
	}
	
	public function send_checkVendorCaptchaActive( $vendorCode){
		
		$this->initInvocation("checkVendorCaptchaActive");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_checkVendorCaptchaActive_args();
		
		$args->vendorCode = $vendorCode;
		
		$this->send_base($args);
	}
	
	public function recv_checkVendorCaptchaActive(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_checkVendorCaptchaActive_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteAttachment( $id, $userEmail){
		
		$this->send_deleteAttachment( $id, $userEmail);
		return $this->recv_deleteAttachment();
	}
	
	public function send_deleteAttachment( $id, $userEmail){
		
		$this->initInvocation("deleteAttachment");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_deleteAttachment_args();
		
		$args->id = $id;
		
		$args->userEmail = $userEmail;
		
		$this->send_base($args);
	}
	
	public function recv_deleteAttachment(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_deleteAttachment_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deleteProtContract( $id,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams){
		
		$this->send_deleteProtContract( $id, $operatorParams);
		return $this->recv_deleteProtContract();
	}
	
	public function send_deleteProtContract( $id,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams){
		
		$this->initInvocation("deleteProtContract");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_deleteProtContract_args();
		
		$args->id = $id;
		
		$args->operatorParams = $operatorParams;
		
		$this->send_base($args);
	}
	
	public function recv_deleteProtContract(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_deleteProtContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportCommodityList(\com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam $queryActParam){
		
		$this->send_exportCommodityList( $queryActParam);
		return $this->recv_exportCommodityList();
	}
	
	public function send_exportCommodityList(\com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam $queryActParam){
		
		$this->initInvocation("exportCommodityList");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_exportCommodityList_args();
		
		$args->queryActParam = $queryActParam;
		
		$this->send_base($args);
	}
	
	public function recv_exportCommodityList(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_exportCommodityList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function exportProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam $protContractQueryForAuditParam){
		
		$this->send_exportProtContract( $protContractQueryForAuditParam);
		return $this->recv_exportProtContract();
	}
	
	public function send_exportProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam $protContractQueryForAuditParam){
		
		$this->initInvocation("exportProtContract");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_exportProtContract_args();
		
		$args->protContractQueryForAuditParam = $protContractQueryForAuditParam;
		
		$this->send_base($args);
	}
	
	public function recv_exportProtContract(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_exportProtContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function fetchReminderJobSchedule(){
		
		$this->send_fetchReminderJobSchedule();
		return $this->recv_fetchReminderJobSchedule();
	}
	
	public function send_fetchReminderJobSchedule(){
		
		$this->initInvocation("fetchReminderJobSchedule");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_fetchReminderJobSchedule_args();
		
		$this->send_base($args);
	}
	
	public function recv_fetchReminderJobSchedule(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_fetchReminderJobSchedule_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAttachmentCount( $mainId){
		
		$this->send_getAttachmentCount( $mainId);
		return $this->recv_getAttachmentCount();
	}
	
	public function send_getAttachmentCount( $mainId){
		
		$this->initInvocation("getAttachmentCount");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getAttachmentCount_args();
		
		$args->mainId = $mainId;
		
		$this->send_base($args);
	}
	
	public function recv_getAttachmentCount(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getAttachmentCount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAttachmentList( $mainId){
		
		$this->send_getAttachmentList( $mainId);
		return $this->recv_getAttachmentList();
	}
	
	public function send_getAttachmentList( $mainId){
		
		$this->initInvocation("getAttachmentList");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getAttachmentList_args();
		
		$args->mainId = $mainId;
		
		$this->send_base($args);
	}
	
	public function recv_getAttachmentList(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getAttachmentList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBrandGoodsList( $protId){
		
		$this->send_getBrandGoodsList( $protId);
		return $this->recv_getBrandGoodsList();
	}
	
	public function send_getBrandGoodsList( $protId){
		
		$this->initInvocation("getBrandGoodsList");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getBrandGoodsList_args();
		
		$args->protId = $protId;
		
		$this->send_base($args);
	}
	
	public function recv_getBrandGoodsList(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getBrandGoodsList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCaptcha(\com\vip\api\promotion\vis\protcontract\service\GetCaptchaParam $getCaptchaParam){
		
		$this->send_getCaptcha( $getCaptchaParam);
		return $this->recv_getCaptcha();
	}
	
	public function send_getCaptcha(\com\vip\api\promotion\vis\protcontract\service\GetCaptchaParam $getCaptchaParam){
		
		$this->initInvocation("getCaptcha");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getCaptcha_args();
		
		$args->getCaptchaParam = $getCaptchaParam;
		
		$this->send_base($args);
	}
	
	public function recv_getCaptcha(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getCaptcha_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getContractPage(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryParam $protContractQueryParam,\com\vip\api\promotion\vis\common\Pager $pager){
		
		$this->send_getContractPage( $protContractQueryParam, $pager);
		return $this->recv_getContractPage();
	}
	
	public function send_getContractPage(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryParam $protContractQueryParam,\com\vip\api\promotion\vis\common\Pager $pager){
		
		$this->initInvocation("getContractPage");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getContractPage_args();
		
		$args->protContractQueryParam = $protContractQueryParam;
		
		$args->pager = $pager;
		
		$this->send_base($args);
	}
	
	public function recv_getContractPage(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getContractPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getContractPageForAudit(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam $protContractQueryForAuditParam,\com\vip\api\promotion\vis\common\Pager $pager){
		
		$this->send_getContractPageForAudit( $protContractQueryForAuditParam, $pager);
		return $this->recv_getContractPageForAudit();
	}
	
	public function send_getContractPageForAudit(\com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam $protContractQueryForAuditParam,\com\vip\api\promotion\vis\common\Pager $pager){
		
		$this->initInvocation("getContractPageForAudit");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getContractPageForAudit_args();
		
		$args->protContractQueryForAuditParam = $protContractQueryForAuditParam;
		
		$args->pager = $pager;
		
		$this->send_base($args);
	}
	
	public function recv_getContractPageForAudit(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getContractPageForAudit_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProtContractDetail(\com\vip\api\promotion\vis\protcontract\service\ProtContractDetailParam $protContractDetailParam){
		
		$this->send_getProtContractDetail( $protContractDetailParam);
		return $this->recv_getProtContractDetail();
	}
	
	public function send_getProtContractDetail(\com\vip\api\promotion\vis\protcontract\service\ProtContractDetailParam $protContractDetailParam){
		
		$this->initInvocation("getProtContractDetail");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getProtContractDetail_args();
		
		$args->protContractDetailParam = $protContractDetailParam;
		
		$this->send_base($args);
	}
	
	public function recv_getProtContractDetail(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getProtContractDetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProtContractDetailPage(\com\vip\api\promotion\vis\protcontract\service\ProtContractDetailQueryParams $protContractDetailQueryParams){
		
		$this->send_getProtContractDetailPage( $protContractDetailQueryParams);
		return $this->recv_getProtContractDetailPage();
	}
	
	public function send_getProtContractDetailPage(\com\vip\api\promotion\vis\protcontract\service\ProtContractDetailQueryParams $protContractDetailQueryParams){
		
		$this->initInvocation("getProtContractDetailPage");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getProtContractDetailPage_args();
		
		$args->protContractDetailQueryParams = $protContractDetailQueryParams;
		
		$this->send_base($args);
	}
	
	public function recv_getProtContractDetailPage(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getProtContractDetailPage_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getProtContractView( $mainId){
		
		$this->send_getProtContractView( $mainId);
		return $this->recv_getProtContractView();
	}
	
	public function send_getProtContractView( $mainId){
		
		$this->initInvocation("getProtContractView");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getProtContractView_args();
		
		$args->mainId = $mainId;
		
		$this->send_base($args);
	}
	
	public function recv_getProtContractView(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getProtContractView_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getVendorsByProtNos( $protNos){
		
		$this->send_getVendorsByProtNos( $protNos);
		return $this->recv_getVendorsByProtNos();
	}
	
	public function send_getVendorsByProtNos( $protNos){
		
		$this->initInvocation("getVendorsByProtNos");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getVendorsByProtNos_args();
		
		$args->protNos = $protNos;
		
		$this->send_base($args);
	}
	
	public function recv_getVendorsByProtNos(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_getVendorsByProtNos_result();
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
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function protContractLimitCheckVendorCodeInBlankList( $vendorCode){
		
		$this->send_protContractLimitCheckVendorCodeInBlankList( $vendorCode);
		return $this->recv_protContractLimitCheckVendorCodeInBlankList();
	}
	
	public function send_protContractLimitCheckVendorCodeInBlankList( $vendorCode){
		
		$this->initInvocation("protContractLimitCheckVendorCodeInBlankList");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_protContractLimitCheckVendorCodeInBlankList_args();
		
		$args->vendorCode = $vendorCode;
		
		$this->send_base($args);
	}
	
	public function recv_protContractLimitCheckVendorCodeInBlankList(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_protContractLimitCheckVendorCodeInBlankList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryActByActNo(\com\vip\api\promotion\vis\protcontract\service\QueryActParam $queryActParam){
		
		$this->send_queryActByActNo( $queryActParam);
		return $this->recv_queryActByActNo();
	}
	
	public function send_queryActByActNo(\com\vip\api\promotion\vis\protcontract\service\QueryActParam $queryActParam){
		
		$this->initInvocation("queryActByActNo");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_queryActByActNo_args();
		
		$args->queryActParam = $queryActParam;
		
		$this->send_base($args);
	}
	
	public function recv_queryActByActNo(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_queryActByActNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryActDetailByActNo(\com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam $queryActParam){
		
		$this->send_queryActDetailByActNo( $queryActParam);
		return $this->recv_queryActDetailByActNo();
	}
	
	public function send_queryActDetailByActNo(\com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam $queryActParam){
		
		$this->initInvocation("queryActDetailByActNo");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_queryActDetailByActNo_args();
		
		$args->queryActParam = $queryActParam;
		
		$this->send_base($args);
	}
	
	public function recv_queryActDetailByActNo(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_queryActDetailByActNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function querySpecialName(\com\vip\api\promotion\vis\third\service\QueryParam $queryParam){
		
		$this->send_querySpecialName( $queryParam);
		return $this->recv_querySpecialName();
	}
	
	public function send_querySpecialName(\com\vip\api\promotion\vis\third\service\QueryParam $queryParam){
		
		$this->initInvocation("querySpecialName");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_querySpecialName_args();
		
		$args->queryParam = $queryParam;
		
		$this->send_base($args);
	}
	
	public function recv_querySpecialName(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_querySpecialName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function saveProtContractView(\com\vip\api\promotion\vis\protcontract\service\ProtContractViewSaveParams $protContractViewSaveParams){
		
		$this->send_saveProtContractView( $protContractViewSaveParams);
		return $this->recv_saveProtContractView();
	}
	
	public function send_saveProtContractView(\com\vip\api\promotion\vis\protcontract\service\ProtContractViewSaveParams $protContractViewSaveParams){
		
		$this->initInvocation("saveProtContractView");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_saveProtContractView_args();
		
		$args->protContractViewSaveParams = $protContractViewSaveParams;
		
		$this->send_base($args);
	}
	
	public function recv_saveProtContractView(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_saveProtContractView_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function searchSalesName(\com\vip\api\promotion\vis\protcontract\service\ProtContractSalesNameParam $protContractSalesNameParam){
		
		$this->send_searchSalesName( $protContractSalesNameParam);
		return $this->recv_searchSalesName();
	}
	
	public function send_searchSalesName(\com\vip\api\promotion\vis\protcontract\service\ProtContractSalesNameParam $protContractSalesNameParam){
		
		$this->initInvocation("searchSalesName");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_searchSalesName_args();
		
		$args->protContractSalesNameParam = $protContractSalesNameParam;
		
		$this->send_base($args);
	}
	
	public function recv_searchSalesName(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_searchSalesName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function setApps( $mainId, $appValue){
		
		$this->send_setApps( $mainId, $appValue);
		return $this->recv_setApps();
	}
	
	public function send_setApps( $mainId, $appValue){
		
		$this->initInvocation("setApps");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_setApps_args();
		
		$args->mainId = $mainId;
		
		$args->appValue = $appValue;
		
		$this->send_base($args);
	}
	
	public function recv_setApps(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_setApps_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function submitProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractSubmitParam $protContractSubmitParam){
		
		$this->send_submitProtContract( $protContractSubmitParam);
		return $this->recv_submitProtContract();
	}
	
	public function send_submitProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractSubmitParam $protContractSubmitParam){
		
		$this->initInvocation("submitProtContract");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_submitProtContract_args();
		
		$args->protContractSubmitParam = $protContractSubmitParam;
		
		$this->send_base($args);
	}
	
	public function recv_submitProtContract(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_submitProtContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams $protContractMainInfoParams, $protContractDiscountInfoParams,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams){
		
		$this->send_updateProtContract( $protContractMainInfoParams, $protContractDiscountInfoParams, $operatorParams);
		return $this->recv_updateProtContract();
	}
	
	public function send_updateProtContract(\com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams $protContractMainInfoParams, $protContractDiscountInfoParams,\com\vip\api\promotion\vis\protcontract\service\OperatorParams $operatorParams){
		
		$this->initInvocation("updateProtContract");
		$args = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_updateProtContract_args();
		
		$args->protContractMainInfoParams = $protContractMainInfoParams;
		
		$args->protContractDiscountInfoParams = $protContractDiscountInfoParams;
		
		$args->operatorParams = $operatorParams;
		
		$this->send_base($args);
	}
	
	public function recv_updateProtContract(){
		
		$result = new \com\vip\api\promotion\vis\protcontract\service\ProtContractApiService_updateProtContract_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class ProtContractApiService_addAttachment_args {
	
	static $_TSPEC;
	public $protContractAttachmentParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractAttachmentParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractAttachmentParams'])){
				
				$this->protContractAttachmentParams = $vals['protContractAttachmentParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractAttachmentParams = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\api\promotion\vis\protcontract\service\ProtContractAttachmentParams();
					$elem0->read($input);
					
					$this->protContractAttachmentParams[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('protContractAttachmentParams');
		
		if (!is_array($this->protContractAttachmentParams)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->protContractAttachmentParams as $iter0){
			
			
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




class ProtContractApiService_addProtContract_args {
	
	static $_TSPEC;
	public $protContractMainInfoParams = null;
	public $protContractDiscountInfoParams = null;
	public $operatorParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractMainInfoParams'
			),
			2 => array(
			'var' => 'protContractDiscountInfoParams'
			),
			3 => array(
			'var' => 'operatorParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractMainInfoParams'])){
				
				$this->protContractMainInfoParams = $vals['protContractMainInfoParams'];
			}
			
			
			if (isset($vals['protContractDiscountInfoParams'])){
				
				$this->protContractDiscountInfoParams = $vals['protContractDiscountInfoParams'];
			}
			
			
			if (isset($vals['operatorParams'])){
				
				$this->operatorParams = $vals['operatorParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractMainInfoParams = new \com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams();
			$this->protContractMainInfoParams->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->protContractDiscountInfoParams = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDiscountInfoParams();
					$elem1->read($input);
					
					$this->protContractDiscountInfoParams[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$this->operatorParams = new \com\vip\api\promotion\vis\protcontract\service\OperatorParams();
			$this->operatorParams->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractMainInfoParams');
		
		if (!is_object($this->protContractMainInfoParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractMainInfoParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('protContractDiscountInfoParams');
		
		if (!is_array($this->protContractDiscountInfoParams)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->protContractDiscountInfoParams as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operatorParams');
		
		if (!is_object($this->operatorParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->operatorParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_auditProtContract_args {
	
	static $_TSPEC;
	public $protContractAuditParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractAuditParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractAuditParams'])){
				
				$this->protContractAuditParams = $vals['protContractAuditParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractAuditParams = new \com\vip\api\promotion\vis\protcontract\service\ProtContractAuditParams();
			$this->protContractAuditParams->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractAuditParams');
		
		if (!is_object($this->protContractAuditParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractAuditParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_batchGetProtContractDetail_args {
	
	static $_TSPEC;
	public $batchProtContractDetailParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batchProtContractDetailParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batchProtContractDetailParam'])){
				
				$this->batchProtContractDetailParam = $vals['batchProtContractDetailParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->batchProtContractDetailParam = new \com\vip\api\promotion\vis\protcontract\service\BatchProtContractDetailParam();
			$this->batchProtContractDetailParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('batchProtContractDetailParam');
		
		if (!is_object($this->batchProtContractDetailParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->batchProtContractDetailParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_checkBinding_args {
	
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




class ProtContractApiService_checkVendorCaptchaActive_args {
	
	static $_TSPEC;
	public $vendorCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendorCode); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeI32($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_deleteAttachment_args {
	
	static $_TSPEC;
	public $id = null;
	public $userEmail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'userEmail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['userEmail'])){
				
				$this->userEmail = $vals['userEmail'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->userEmail);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('userEmail');
		$xfer += $output->writeString($this->userEmail);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_deleteProtContract_args {
	
	static $_TSPEC;
	public $id = null;
	public $operatorParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'operatorParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['operatorParams'])){
				
				$this->operatorParams = $vals['operatorParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->id); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->operatorParams = new \com\vip\api\promotion\vis\protcontract\service\OperatorParams();
			$this->operatorParams->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operatorParams');
		
		if (!is_object($this->operatorParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->operatorParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_exportCommodityList_args {
	
	static $_TSPEC;
	public $queryActParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryActParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryActParam'])){
				
				$this->queryActParam = $vals['queryActParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryActParam = new \com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam();
			$this->queryActParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryActParam');
		
		if (!is_object($this->queryActParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryActParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_exportProtContract_args {
	
	static $_TSPEC;
	public $protContractQueryForAuditParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractQueryForAuditParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractQueryForAuditParam'])){
				
				$this->protContractQueryForAuditParam = $vals['protContractQueryForAuditParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractQueryForAuditParam = new \com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam();
			$this->protContractQueryForAuditParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractQueryForAuditParam');
		
		if (!is_object($this->protContractQueryForAuditParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractQueryForAuditParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_fetchReminderJobSchedule_args {
	
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




class ProtContractApiService_getAttachmentCount_args {
	
	static $_TSPEC;
	public $mainId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->mainId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('mainId');
		$xfer += $output->writeI64($this->mainId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getAttachmentList_args {
	
	static $_TSPEC;
	public $mainId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->mainId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('mainId');
		$xfer += $output->writeI64($this->mainId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getBrandGoodsList_args {
	
	static $_TSPEC;
	public $protId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protId'])){
				
				$this->protId = $vals['protId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->protId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protId');
		$xfer += $output->writeI64($this->protId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getCaptcha_args {
	
	static $_TSPEC;
	public $getCaptchaParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'getCaptchaParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['getCaptchaParam'])){
				
				$this->getCaptchaParam = $vals['getCaptchaParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->getCaptchaParam = new \com\vip\api\promotion\vis\protcontract\service\GetCaptchaParam();
			$this->getCaptchaParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('getCaptchaParam');
		
		if (!is_object($this->getCaptchaParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->getCaptchaParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getContractPage_args {
	
	static $_TSPEC;
	public $protContractQueryParam = null;
	public $pager = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractQueryParam'
			),
			2 => array(
			'var' => 'pager'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractQueryParam'])){
				
				$this->protContractQueryParam = $vals['protContractQueryParam'];
			}
			
			
			if (isset($vals['pager'])){
				
				$this->pager = $vals['pager'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractQueryParam = new \com\vip\api\promotion\vis\protcontract\service\ProtContractQueryParam();
			$this->protContractQueryParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pager = new \com\vip\api\promotion\vis\common\Pager();
			$this->pager->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractQueryParam');
		
		if (!is_object($this->protContractQueryParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractQueryParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pager');
		
		if (!is_object($this->pager)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pager->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getContractPageForAudit_args {
	
	static $_TSPEC;
	public $protContractQueryForAuditParam = null;
	public $pager = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractQueryForAuditParam'
			),
			2 => array(
			'var' => 'pager'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractQueryForAuditParam'])){
				
				$this->protContractQueryForAuditParam = $vals['protContractQueryForAuditParam'];
			}
			
			
			if (isset($vals['pager'])){
				
				$this->pager = $vals['pager'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractQueryForAuditParam = new \com\vip\api\promotion\vis\protcontract\service\ProtContractQueryForAuditParam();
			$this->protContractQueryForAuditParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->pager = new \com\vip\api\promotion\vis\common\Pager();
			$this->pager->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractQueryForAuditParam');
		
		if (!is_object($this->protContractQueryForAuditParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractQueryForAuditParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pager');
		
		if (!is_object($this->pager)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->pager->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getProtContractDetail_args {
	
	static $_TSPEC;
	public $protContractDetailParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractDetailParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractDetailParam'])){
				
				$this->protContractDetailParam = $vals['protContractDetailParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractDetailParam = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDetailParam();
			$this->protContractDetailParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractDetailParam');
		
		if (!is_object($this->protContractDetailParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractDetailParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getProtContractDetailPage_args {
	
	static $_TSPEC;
	public $protContractDetailQueryParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractDetailQueryParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractDetailQueryParams'])){
				
				$this->protContractDetailQueryParams = $vals['protContractDetailQueryParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractDetailQueryParams = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDetailQueryParams();
			$this->protContractDetailQueryParams->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractDetailQueryParams');
		
		if (!is_object($this->protContractDetailQueryParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractDetailQueryParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getProtContractView_args {
	
	static $_TSPEC;
	public $mainId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->mainId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('mainId');
		$xfer += $output->writeI64($this->mainId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getVendorsByProtNos_args {
	
	static $_TSPEC;
	public $protNos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protNos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protNos'])){
				
				$this->protNos = $vals['protNos'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protNos = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->protNos[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('protNos');
		
		if (!is_array($this->protNos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->protNos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_healthCheck_args {
	
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




class ProtContractApiService_protContractLimitCheckVendorCodeInBlankList_args {
	
	static $_TSPEC;
	public $vendorCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->vendorCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_queryActByActNo_args {
	
	static $_TSPEC;
	public $queryActParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryActParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryActParam'])){
				
				$this->queryActParam = $vals['queryActParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryActParam = new \com\vip\api\promotion\vis\protcontract\service\QueryActParam();
			$this->queryActParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryActParam');
		
		if (!is_object($this->queryActParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryActParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_queryActDetailByActNo_args {
	
	static $_TSPEC;
	public $queryActParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryActParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryActParam'])){
				
				$this->queryActParam = $vals['queryActParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryActParam = new \com\vip\api\promotion\vis\protcontract\service\QueryActDetailParam();
			$this->queryActParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryActParam');
		
		if (!is_object($this->queryActParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryActParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_querySpecialName_args {
	
	static $_TSPEC;
	public $queryParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryParam'])){
				
				$this->queryParam = $vals['queryParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryParam = new \com\vip\api\promotion\vis\third\service\QueryParam();
			$this->queryParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('queryParam');
		
		if (!is_object($this->queryParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->queryParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_saveProtContractView_args {
	
	static $_TSPEC;
	public $protContractViewSaveParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractViewSaveParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractViewSaveParams'])){
				
				$this->protContractViewSaveParams = $vals['protContractViewSaveParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractViewSaveParams = new \com\vip\api\promotion\vis\protcontract\service\ProtContractViewSaveParams();
			$this->protContractViewSaveParams->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractViewSaveParams');
		
		if (!is_object($this->protContractViewSaveParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractViewSaveParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_searchSalesName_args {
	
	static $_TSPEC;
	public $protContractSalesNameParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractSalesNameParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractSalesNameParam'])){
				
				$this->protContractSalesNameParam = $vals['protContractSalesNameParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractSalesNameParam = new \com\vip\api\promotion\vis\protcontract\service\ProtContractSalesNameParam();
			$this->protContractSalesNameParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractSalesNameParam');
		
		if (!is_object($this->protContractSalesNameParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractSalesNameParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_setApps_args {
	
	static $_TSPEC;
	public $mainId = null;
	public $appValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			2 => array(
			'var' => 'appValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
			if (isset($vals['appValue'])){
				
				$this->appValue = $vals['appValue'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->mainId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->appValue = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->appValue[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('mainId');
		$xfer += $output->writeI64($this->mainId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('appValue');
		
		if (!is_array($this->appValue)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->appValue as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_submitProtContract_args {
	
	static $_TSPEC;
	public $protContractSubmitParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractSubmitParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractSubmitParam'])){
				
				$this->protContractSubmitParam = $vals['protContractSubmitParam'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractSubmitParam = new \com\vip\api\promotion\vis\protcontract\service\ProtContractSubmitParam();
			$this->protContractSubmitParam->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractSubmitParam');
		
		if (!is_object($this->protContractSubmitParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractSubmitParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_updateProtContract_args {
	
	static $_TSPEC;
	public $protContractMainInfoParams = null;
	public $protContractDiscountInfoParams = null;
	public $operatorParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'protContractMainInfoParams'
			),
			2 => array(
			'var' => 'protContractDiscountInfoParams'
			),
			3 => array(
			'var' => 'operatorParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['protContractMainInfoParams'])){
				
				$this->protContractMainInfoParams = $vals['protContractMainInfoParams'];
			}
			
			
			if (isset($vals['protContractDiscountInfoParams'])){
				
				$this->protContractDiscountInfoParams = $vals['protContractDiscountInfoParams'];
			}
			
			
			if (isset($vals['operatorParams'])){
				
				$this->operatorParams = $vals['operatorParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->protContractMainInfoParams = new \com\vip\api\promotion\vis\protcontract\service\ProtContractMainInfoParams();
			$this->protContractMainInfoParams->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->protContractDiscountInfoParams = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDiscountInfoParams();
					$elem0->read($input);
					
					$this->protContractDiscountInfoParams[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			
			$this->operatorParams = new \com\vip\api\promotion\vis\protcontract\service\OperatorParams();
			$this->operatorParams->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('protContractMainInfoParams');
		
		if (!is_object($this->protContractMainInfoParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->protContractMainInfoParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('protContractDiscountInfoParams');
		
		if (!is_array($this->protContractDiscountInfoParams)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->protContractDiscountInfoParams as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operatorParams');
		
		if (!is_object($this->operatorParams)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->operatorParams->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_addAttachment_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_addProtContract_result {
	
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




class ProtContractApiService_auditProtContract_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_batchGetProtContractDetail_result {
	
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
					
					$elem0 = new \com\vip\api\promotion\vis\protcontract\service\BatchProtContractDetailModel();
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




class ProtContractApiService_checkBinding_result {
	
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
			
			$input->readByte($this->success); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeByte($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_checkVendorCaptchaActive_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\VendorCaptchaActiveModel();
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




class ProtContractApiService_deleteAttachment_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_deleteProtContract_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_exportCommodityList_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\FileFid();
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




class ProtContractApiService_exportProtContract_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\FileFid();
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




class ProtContractApiService_fetchReminderJobSchedule_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\TimedTaskResultModel();
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




class ProtContractApiService_getAttachmentCount_result {
	
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI32($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProtContractApiService_getAttachmentList_result {
	
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
					
					$elem0 = new \com\vip\api\promotion\vis\protcontract\service\ProtContractAttachmentModel();
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




class ProtContractApiService_getBrandGoodsList_result {
	
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
					
					$elem1 = new \com\vip\api\promotion\vis\protcontract\service\BrandGoods();
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




class ProtContractApiService_getCaptcha_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_getContractPage_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\ProtContractPageModel();
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




class ProtContractApiService_getContractPageForAudit_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\ProtContractPageModel();
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




class ProtContractApiService_getProtContractDetail_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDetailModel();
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




class ProtContractApiService_getProtContractDetailPage_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDetailPageModel();
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




class ProtContractApiService_getProtContractView_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\ProtContractViewModel();
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




class ProtContractApiService_getVendorsByProtNos_result {
	
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
					
					$elem0 = new \com\vip\api\promotion\vis\protcontract\service\VendorInfoModel();
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




class ProtContractApiService_healthCheck_result {
	
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




class ProtContractApiService_protContractLimitCheckVendorCodeInBlankList_result {
	
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




class ProtContractApiService_queryActByActNo_result {
	
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
					
					$elem0 = new \com\vip\api\promotion\vis\common\NameValueItem();
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




class ProtContractApiService_queryActDetailByActNo_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\ActivityModel();
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




class ProtContractApiService_querySpecialName_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\SpecialNameListModel();
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




class ProtContractApiService_saveProtContractView_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_searchSalesName_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\protcontract\service\ProtContractSalesNameResultModel();
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




class ProtContractApiService_setApps_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_submitProtContract_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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




class ProtContractApiService_updateProtContract_result {
	
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
			
			
			$this->success = new \com\vip\api\promotion\vis\common\ResultModel();
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
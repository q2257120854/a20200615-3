<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\product;
interface ProductAdminServiceIf{
	
	
	public function deleteEmailConfig( $partnerId, $email);
	
	public function deleteFileLogSettingByPrimaryKey( $id);
	
	public function deleteHostByPrimaryKey( $id);
	
	public function deleteProductByPartner( $partnerId);
	
	public function healthCheck();
	
	public function listAllFileLogSettings();
	
	public function listHosts( $partnerId);
	
	public function pushPriceToVdgByIdList( $idList);
	
	public function pushProductToVdgBySkuIdList( $skuIdList);
	
	public function pushProductToVdgBySpuIdList( $spuIdList);
	
	public function saveEmailConfig(\com\vip\vop\vcloud\product\EmailConfig $config);
	
	public function saveFileLogSetting(\com\vip\vop\vcloud\product\FileLogSetting $fileLogSetting);
	
	public function saveHost(\com\vip\vop\vcloud\product\Host $host);
	
	public function testSftpConnectivity( $host, $port, $username, $password);
	
	public function updateProductSku( $skuId,\com\vip\vop\vcloud\product\Sku $sku);
	
	public function updateProductSkuAttr( $skuId, $attributes);
	
	public function updateProductSkuPrice( $skuPrices);
	
	public function updateProductSkuStatus(\com\vip\vop\vcloud\product\ProductSkuStatus $criteria,\com\vip\vop\vcloud\product\ProductSkuStatus $skuStatus);
	
	public function updateProductSpu( $spuId,\com\vip\vop\vcloud\product\Spu $spu);
	
	public function updateProductSpuAttr( $spuId, $attributes);
	
	public function updateSftpFileLog( $logIdList, $logType, $status);
	
	public function updateSpuImageUrl( $partnerId, $spu, $imgPath, $url);
	
}

class _ProductAdminServiceClient extends \Osp\Base\OspStub implements \com\vip\vop\vcloud\product\ProductAdminServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.vop.vcloud.product.ProductAdminService", "1.0.0");
	}
	
	
	public function deleteEmailConfig( $partnerId, $email){
		
		$this->send_deleteEmailConfig( $partnerId, $email);
		return $this->recv_deleteEmailConfig();
	}
	
	public function send_deleteEmailConfig( $partnerId, $email){
		
		$this->initInvocation("deleteEmailConfig");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_deleteEmailConfig_args();
		
		$args->partnerId = $partnerId;
		
		$args->email = $email;
		
		$this->send_base($args);
	}
	
	public function recv_deleteEmailConfig(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_deleteEmailConfig_result();
		$this->receive_base($result);
		
	}
	
	
	public function deleteFileLogSettingByPrimaryKey( $id){
		
		$this->send_deleteFileLogSettingByPrimaryKey( $id);
		return $this->recv_deleteFileLogSettingByPrimaryKey();
	}
	
	public function send_deleteFileLogSettingByPrimaryKey( $id){
		
		$this->initInvocation("deleteFileLogSettingByPrimaryKey");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_deleteFileLogSettingByPrimaryKey_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_deleteFileLogSettingByPrimaryKey(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_deleteFileLogSettingByPrimaryKey_result();
		$this->receive_base($result);
		
	}
	
	
	public function deleteHostByPrimaryKey( $id){
		
		$this->send_deleteHostByPrimaryKey( $id);
		return $this->recv_deleteHostByPrimaryKey();
	}
	
	public function send_deleteHostByPrimaryKey( $id){
		
		$this->initInvocation("deleteHostByPrimaryKey");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_deleteHostByPrimaryKey_args();
		
		$args->id = $id;
		
		$this->send_base($args);
	}
	
	public function recv_deleteHostByPrimaryKey(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_deleteHostByPrimaryKey_result();
		$this->receive_base($result);
		
	}
	
	
	public function deleteProductByPartner( $partnerId){
		
		$this->send_deleteProductByPartner( $partnerId);
		return $this->recv_deleteProductByPartner();
	}
	
	public function send_deleteProductByPartner( $partnerId){
		
		$this->initInvocation("deleteProductByPartner");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_deleteProductByPartner_args();
		
		$args->partnerId = $partnerId;
		
		$this->send_base($args);
	}
	
	public function recv_deleteProductByPartner(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_deleteProductByPartner_result();
		$this->receive_base($result);
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listAllFileLogSettings(){
		
		$this->send_listAllFileLogSettings();
		return $this->recv_listAllFileLogSettings();
	}
	
	public function send_listAllFileLogSettings(){
		
		$this->initInvocation("listAllFileLogSettings");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_listAllFileLogSettings_args();
		
		$this->send_base($args);
	}
	
	public function recv_listAllFileLogSettings(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_listAllFileLogSettings_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function listHosts( $partnerId){
		
		$this->send_listHosts( $partnerId);
		return $this->recv_listHosts();
	}
	
	public function send_listHosts( $partnerId){
		
		$this->initInvocation("listHosts");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_listHosts_args();
		
		$args->partnerId = $partnerId;
		
		$this->send_base($args);
	}
	
	public function recv_listHosts(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_listHosts_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pushPriceToVdgByIdList( $idList){
		
		$this->send_pushPriceToVdgByIdList( $idList);
		return $this->recv_pushPriceToVdgByIdList();
	}
	
	public function send_pushPriceToVdgByIdList( $idList){
		
		$this->initInvocation("pushPriceToVdgByIdList");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_pushPriceToVdgByIdList_args();
		
		$args->idList = $idList;
		
		$this->send_base($args);
	}
	
	public function recv_pushPriceToVdgByIdList(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_pushPriceToVdgByIdList_result();
		$this->receive_base($result);
		
	}
	
	
	public function pushProductToVdgBySkuIdList( $skuIdList){
		
		$this->send_pushProductToVdgBySkuIdList( $skuIdList);
		return $this->recv_pushProductToVdgBySkuIdList();
	}
	
	public function send_pushProductToVdgBySkuIdList( $skuIdList){
		
		$this->initInvocation("pushProductToVdgBySkuIdList");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_pushProductToVdgBySkuIdList_args();
		
		$args->skuIdList = $skuIdList;
		
		$this->send_base($args);
	}
	
	public function recv_pushProductToVdgBySkuIdList(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_pushProductToVdgBySkuIdList_result();
		$this->receive_base($result);
		
	}
	
	
	public function pushProductToVdgBySpuIdList( $spuIdList){
		
		$this->send_pushProductToVdgBySpuIdList( $spuIdList);
		return $this->recv_pushProductToVdgBySpuIdList();
	}
	
	public function send_pushProductToVdgBySpuIdList( $spuIdList){
		
		$this->initInvocation("pushProductToVdgBySpuIdList");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_pushProductToVdgBySpuIdList_args();
		
		$args->spuIdList = $spuIdList;
		
		$this->send_base($args);
	}
	
	public function recv_pushProductToVdgBySpuIdList(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_pushProductToVdgBySpuIdList_result();
		$this->receive_base($result);
		
	}
	
	
	public function saveEmailConfig(\com\vip\vop\vcloud\product\EmailConfig $config){
		
		$this->send_saveEmailConfig( $config);
		return $this->recv_saveEmailConfig();
	}
	
	public function send_saveEmailConfig(\com\vip\vop\vcloud\product\EmailConfig $config){
		
		$this->initInvocation("saveEmailConfig");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_saveEmailConfig_args();
		
		$args->config = $config;
		
		$this->send_base($args);
	}
	
	public function recv_saveEmailConfig(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_saveEmailConfig_result();
		$this->receive_base($result);
		
	}
	
	
	public function saveFileLogSetting(\com\vip\vop\vcloud\product\FileLogSetting $fileLogSetting){
		
		$this->send_saveFileLogSetting( $fileLogSetting);
		return $this->recv_saveFileLogSetting();
	}
	
	public function send_saveFileLogSetting(\com\vip\vop\vcloud\product\FileLogSetting $fileLogSetting){
		
		$this->initInvocation("saveFileLogSetting");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_saveFileLogSetting_args();
		
		$args->fileLogSetting = $fileLogSetting;
		
		$this->send_base($args);
	}
	
	public function recv_saveFileLogSetting(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_saveFileLogSetting_result();
		$this->receive_base($result);
		
	}
	
	
	public function saveHost(\com\vip\vop\vcloud\product\Host $host){
		
		$this->send_saveHost( $host);
		return $this->recv_saveHost();
	}
	
	public function send_saveHost(\com\vip\vop\vcloud\product\Host $host){
		
		$this->initInvocation("saveHost");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_saveHost_args();
		
		$args->host = $host;
		
		$this->send_base($args);
	}
	
	public function recv_saveHost(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_saveHost_result();
		$this->receive_base($result);
		
	}
	
	
	public function testSftpConnectivity( $host, $port, $username, $password){
		
		$this->send_testSftpConnectivity( $host, $port, $username, $password);
		return $this->recv_testSftpConnectivity();
	}
	
	public function send_testSftpConnectivity( $host, $port, $username, $password){
		
		$this->initInvocation("testSftpConnectivity");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_testSftpConnectivity_args();
		
		$args->host = $host;
		
		$args->port = $port;
		
		$args->username = $username;
		
		$args->password = $password;
		
		$this->send_base($args);
	}
	
	public function recv_testSftpConnectivity(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_testSftpConnectivity_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateProductSku( $skuId,\com\vip\vop\vcloud\product\Sku $sku){
		
		$this->send_updateProductSku( $skuId, $sku);
		return $this->recv_updateProductSku();
	}
	
	public function send_updateProductSku( $skuId,\com\vip\vop\vcloud\product\Sku $sku){
		
		$this->initInvocation("updateProductSku");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSku_args();
		
		$args->skuId = $skuId;
		
		$args->sku = $sku;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductSku(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSku_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateProductSkuAttr( $skuId, $attributes){
		
		$this->send_updateProductSkuAttr( $skuId, $attributes);
		return $this->recv_updateProductSkuAttr();
	}
	
	public function send_updateProductSkuAttr( $skuId, $attributes){
		
		$this->initInvocation("updateProductSkuAttr");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSkuAttr_args();
		
		$args->skuId = $skuId;
		
		$args->attributes = $attributes;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductSkuAttr(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSkuAttr_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateProductSkuPrice( $skuPrices){
		
		$this->send_updateProductSkuPrice( $skuPrices);
		return $this->recv_updateProductSkuPrice();
	}
	
	public function send_updateProductSkuPrice( $skuPrices){
		
		$this->initInvocation("updateProductSkuPrice");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSkuPrice_args();
		
		$args->skuPrices = $skuPrices;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductSkuPrice(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSkuPrice_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateProductSkuStatus(\com\vip\vop\vcloud\product\ProductSkuStatus $criteria,\com\vip\vop\vcloud\product\ProductSkuStatus $skuStatus){
		
		$this->send_updateProductSkuStatus( $criteria, $skuStatus);
		return $this->recv_updateProductSkuStatus();
	}
	
	public function send_updateProductSkuStatus(\com\vip\vop\vcloud\product\ProductSkuStatus $criteria,\com\vip\vop\vcloud\product\ProductSkuStatus $skuStatus){
		
		$this->initInvocation("updateProductSkuStatus");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSkuStatus_args();
		
		$args->criteria = $criteria;
		
		$args->skuStatus = $skuStatus;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductSkuStatus(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSkuStatus_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateProductSpu( $spuId,\com\vip\vop\vcloud\product\Spu $spu){
		
		$this->send_updateProductSpu( $spuId, $spu);
		return $this->recv_updateProductSpu();
	}
	
	public function send_updateProductSpu( $spuId,\com\vip\vop\vcloud\product\Spu $spu){
		
		$this->initInvocation("updateProductSpu");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSpu_args();
		
		$args->spuId = $spuId;
		
		$args->spu = $spu;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductSpu(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSpu_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateProductSpuAttr( $spuId, $attributes){
		
		$this->send_updateProductSpuAttr( $spuId, $attributes);
		return $this->recv_updateProductSpuAttr();
	}
	
	public function send_updateProductSpuAttr( $spuId, $attributes){
		
		$this->initInvocation("updateProductSpuAttr");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSpuAttr_args();
		
		$args->spuId = $spuId;
		
		$args->attributes = $attributes;
		
		$this->send_base($args);
	}
	
	public function recv_updateProductSpuAttr(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateProductSpuAttr_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateSftpFileLog( $logIdList, $logType, $status){
		
		$this->send_updateSftpFileLog( $logIdList, $logType, $status);
		return $this->recv_updateSftpFileLog();
	}
	
	public function send_updateSftpFileLog( $logIdList, $logType, $status){
		
		$this->initInvocation("updateSftpFileLog");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateSftpFileLog_args();
		
		$args->logIdList = $logIdList;
		
		$args->logType = $logType;
		
		$args->status = $status;
		
		$this->send_base($args);
	}
	
	public function recv_updateSftpFileLog(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateSftpFileLog_result();
		$this->receive_base($result);
		
	}
	
	
	public function updateSpuImageUrl( $partnerId, $spu, $imgPath, $url){
		
		$this->send_updateSpuImageUrl( $partnerId, $spu, $imgPath, $url);
		return $this->recv_updateSpuImageUrl();
	}
	
	public function send_updateSpuImageUrl( $partnerId, $spu, $imgPath, $url){
		
		$this->initInvocation("updateSpuImageUrl");
		$args = new \com\vip\vop\vcloud\product\ProductAdminService_updateSpuImageUrl_args();
		
		$args->partnerId = $partnerId;
		
		$args->spu = $spu;
		
		$args->imgPath = $imgPath;
		
		$args->url = $url;
		
		$this->send_base($args);
	}
	
	public function recv_updateSpuImageUrl(){
		
		$result = new \com\vip\vop\vcloud\product\ProductAdminService_updateSpuImageUrl_result();
		$this->receive_base($result);
		
	}
	
	
}




class ProductAdminService_deleteEmailConfig_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $email = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'email'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->partnerId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->email);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeString($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('email');
		$xfer += $output->writeString($this->email);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_deleteFileLogSettingByPrimaryKey_args {
	
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




class ProductAdminService_deleteHostByPrimaryKey_args {
	
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




class ProductAdminService_deleteProductByPartner_args {
	
	static $_TSPEC;
	public $partnerId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_healthCheck_args {
	
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




class ProductAdminService_listAllFileLogSettings_args {
	
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




class ProductAdminService_listHosts_args {
	
	static $_TSPEC;
	public $partnerId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->partnerId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_pushPriceToVdgByIdList_args {
	
	static $_TSPEC;
	public $idList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'idList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['idList'])){
				
				$this->idList = $vals['idList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->idList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readString($elem0);
					
					$this->idList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('idList');
		
		if (!is_array($this->idList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->idList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_pushProductToVdgBySkuIdList_args {
	
	static $_TSPEC;
	public $skuIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuIdList'])){
				
				$this->skuIdList = $vals['skuIdList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->skuIdList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->skuIdList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('skuIdList');
		
		if (!is_array($this->skuIdList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->skuIdList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_pushProductToVdgBySpuIdList_args {
	
	static $_TSPEC;
	public $spuIdList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spuIdList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spuIdList'])){
				
				$this->spuIdList = $vals['spuIdList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->spuIdList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->spuIdList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('spuIdList');
		
		if (!is_array($this->spuIdList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->spuIdList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_saveEmailConfig_args {
	
	static $_TSPEC;
	public $config = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'config'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['config'])){
				
				$this->config = $vals['config'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->config = new \com\vip\vop\vcloud\product\EmailConfig();
			$this->config->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('config');
		
		if (!is_object($this->config)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->config->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_saveFileLogSetting_args {
	
	static $_TSPEC;
	public $fileLogSetting = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fileLogSetting'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fileLogSetting'])){
				
				$this->fileLogSetting = $vals['fileLogSetting'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->fileLogSetting = new \com\vip\vop\vcloud\product\FileLogSetting();
			$this->fileLogSetting->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('fileLogSetting');
		
		if (!is_object($this->fileLogSetting)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->fileLogSetting->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_saveHost_args {
	
	static $_TSPEC;
	public $host = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'host'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['host'])){
				
				$this->host = $vals['host'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->host = new \com\vip\vop\vcloud\product\Host();
			$this->host->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('host');
		
		if (!is_object($this->host)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->host->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_testSftpConnectivity_args {
	
	static $_TSPEC;
	public $host = null;
	public $port = null;
	public $username = null;
	public $password = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'host'
			),
			2 => array(
			'var' => 'port'
			),
			3 => array(
			'var' => 'username'
			),
			4 => array(
			'var' => 'password'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['host'])){
				
				$this->host = $vals['host'];
			}
			
			
			if (isset($vals['port'])){
				
				$this->port = $vals['port'];
			}
			
			
			if (isset($vals['username'])){
				
				$this->username = $vals['username'];
			}
			
			
			if (isset($vals['password'])){
				
				$this->password = $vals['password'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->host);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->port); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->username);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->password);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('host');
		$xfer += $output->writeString($this->host);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('port');
		$xfer += $output->writeI32($this->port);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('username');
		$xfer += $output->writeString($this->username);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('password');
		$xfer += $output->writeString($this->password);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_updateProductSku_args {
	
	static $_TSPEC;
	public $skuId = null;
	public $sku = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuId'
			),
			2 => array(
			'var' => 'sku'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['sku'])){
				
				$this->sku = $vals['sku'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->skuId);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->sku = new \com\vip\vop\vcloud\product\Sku();
			$this->sku->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeString($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sku');
		
		if (!is_object($this->sku)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->sku->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_updateProductSkuAttr_args {
	
	static $_TSPEC;
	public $skuId = null;
	public $attributes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuId'
			),
			2 => array(
			'var' => 'attributes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['attributes'])){
				
				$this->attributes = $vals['attributes'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->skuId);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->attributes = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\product\Attribute();
					$elem0->read($input);
					
					$this->attributes[$_size0++] = $elem0;
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
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeString($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('attributes');
		
		if (!is_array($this->attributes)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->attributes as $iter0){
			
			
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




class ProductAdminService_updateProductSkuPrice_args {
	
	static $_TSPEC;
	public $skuPrices = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'skuPrices'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['skuPrices'])){
				
				$this->skuPrices = $vals['skuPrices'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->skuPrices = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\vop\vcloud\product\SkuPrice();
					$elem1->read($input);
					
					$this->skuPrices[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('skuPrices');
		
		if (!is_array($this->skuPrices)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->skuPrices as $iter0){
			
			
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




class ProductAdminService_updateProductSkuStatus_args {
	
	static $_TSPEC;
	public $criteria = null;
	public $skuStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'criteria'
			),
			2 => array(
			'var' => 'skuStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['criteria'])){
				
				$this->criteria = $vals['criteria'];
			}
			
			
			if (isset($vals['skuStatus'])){
				
				$this->skuStatus = $vals['skuStatus'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->criteria = new \com\vip\vop\vcloud\product\ProductSkuStatus();
			$this->criteria->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->skuStatus = new \com\vip\vop\vcloud\product\ProductSkuStatus();
			$this->skuStatus->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('criteria');
		
		if (!is_object($this->criteria)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->criteria->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('skuStatus');
		
		if (!is_object($this->skuStatus)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->skuStatus->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_updateProductSpu_args {
	
	static $_TSPEC;
	public $spuId = null;
	public $spu = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spuId'
			),
			2 => array(
			'var' => 'spu'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spuId'])){
				
				$this->spuId = $vals['spuId'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->spuId);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->spu = new \com\vip\vop\vcloud\product\Spu();
			$this->spu->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->spuId !== null) {
			
			$xfer += $output->writeFieldBegin('spuId');
			$xfer += $output->writeString($this->spuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('spu');
		
		if (!is_object($this->spu)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->spu->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_updateProductSpuAttr_args {
	
	static $_TSPEC;
	public $spuId = null;
	public $attributes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spuId'
			),
			2 => array(
			'var' => 'attributes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spuId'])){
				
				$this->spuId = $vals['spuId'];
			}
			
			
			if (isset($vals['attributes'])){
				
				$this->attributes = $vals['attributes'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->spuId);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->attributes = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vop\vcloud\product\Attribute();
					$elem0->read($input);
					
					$this->attributes[$_size0++] = $elem0;
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
		
		if($this->spuId !== null) {
			
			$xfer += $output->writeFieldBegin('spuId');
			$xfer += $output->writeString($this->spuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('attributes');
		
		if (!is_array($this->attributes)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->attributes as $iter0){
			
			
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




class ProductAdminService_updateSftpFileLog_args {
	
	static $_TSPEC;
	public $logIdList = null;
	public $logType = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logIdList'
			),
			2 => array(
			'var' => 'logType'
			),
			3 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logIdList'])){
				
				$this->logIdList = $vals['logIdList'];
			}
			
			
			if (isset($vals['logType'])){
				
				$this->logType = $vals['logType'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->logIdList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readString($elem1);
					
					$this->logIdList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->logType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->status); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->logIdList !== null) {
			
			$xfer += $output->writeFieldBegin('logIdList');
			
			if (!is_array($this->logIdList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->logIdList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logType !== null) {
			
			$xfer += $output->writeFieldBegin('logType');
			$xfer += $output->writeByte($this->logType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_updateSpuImageUrl_args {
	
	static $_TSPEC;
	public $partnerId = null;
	public $spu = null;
	public $imgPath = null;
	public $url = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partnerId'
			),
			2 => array(
			'var' => 'spu'
			),
			3 => array(
			'var' => 'imgPath'
			),
			4 => array(
			'var' => 'url'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['spu'])){
				
				$this->spu = $vals['spu'];
			}
			
			
			if (isset($vals['imgPath'])){
				
				$this->imgPath = $vals['imgPath'];
			}
			
			
			if (isset($vals['url'])){
				
				$this->url = $vals['url'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->partnerId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->spu);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->imgPath);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->url);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeString($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('spu');
		$xfer += $output->writeString($this->spu);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->imgPath !== null) {
			
			$xfer += $output->writeFieldBegin('imgPath');
			$xfer += $output->writeString($this->imgPath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('url');
		$xfer += $output->writeString($this->url);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class ProductAdminService_deleteEmailConfig_result {
	
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




class ProductAdminService_deleteFileLogSettingByPrimaryKey_result {
	
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




class ProductAdminService_deleteHostByPrimaryKey_result {
	
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




class ProductAdminService_deleteProductByPartner_result {
	
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




class ProductAdminService_healthCheck_result {
	
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




class ProductAdminService_listAllFileLogSettings_result {
	
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
					
					$elem0 = new \com\vip\vop\vcloud\product\FileLogSetting();
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




class ProductAdminService_listHosts_result {
	
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
					
					$elem1 = new \com\vip\vop\vcloud\product\Host();
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




class ProductAdminService_pushPriceToVdgByIdList_result {
	
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




class ProductAdminService_pushProductToVdgBySkuIdList_result {
	
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




class ProductAdminService_pushProductToVdgBySpuIdList_result {
	
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




class ProductAdminService_saveEmailConfig_result {
	
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




class ProductAdminService_saveFileLogSetting_result {
	
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




class ProductAdminService_saveHost_result {
	
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




class ProductAdminService_testSftpConnectivity_result {
	
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
					$input->readString($elem1);
					
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




class ProductAdminService_updateProductSku_result {
	
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




class ProductAdminService_updateProductSkuAttr_result {
	
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




class ProductAdminService_updateProductSkuPrice_result {
	
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




class ProductAdminService_updateProductSkuStatus_result {
	
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




class ProductAdminService_updateProductSpu_result {
	
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




class ProductAdminService_updateProductSpuAttr_result {
	
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




class ProductAdminService_updateSftpFileLog_result {
	
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




class ProductAdminService_updateSpuImageUrl_result {
	
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
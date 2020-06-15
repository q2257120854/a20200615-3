<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vis;
interface VendorStoreApiServiceIf{
	
	
	public function addWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeAddParamList);
	
	public function delWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeDeleteParamList);
	
	public function getStoreByStoreCode(\com\vip\vms\common\CommonParam $commonParam, $storeCode);
	
	public function healthCheck();
	
	public function getWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeQueryParamList);
	
	public function queryStoresByVendorCode(\com\vip\vms\common\CommonParam $commonParam, $vendorCode);
	
	public function updateVendorWarehouseAndVIPWarehouseMap(\com\vip\vms\common\CommonParam $commonParam, $storeWarehouseRelUpdateParamList);
	
	public function updateWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeUpdateParamList);
	
}

class _VendorStoreApiServiceClient extends \Osp\Base\OspStub implements \vipapis\vis\VendorStoreApiServiceIf{
	
	public function __construct(){
		
		parent::__construct("vipapis.vis.VendorStoreApiService", "1.3.2");
	}
	
	
	public function addWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeAddParamList){
		
		$this->send_addWarehouseInfo( $commonParam, $storeAddParamList);
		return $this->recv_addWarehouseInfo();
	}
	
	public function send_addWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeAddParamList){
		
		$this->initInvocation("addWarehouseInfo");
		$args = new \vipapis\vis\VendorStoreApiService_addWarehouseInfo_args();
		
		$args->commonParam = $commonParam;
		
		$args->storeAddParamList = $storeAddParamList;
		
		$this->send_base($args);
	}
	
	public function recv_addWarehouseInfo(){
		
		$result = new \vipapis\vis\VendorStoreApiService_addWarehouseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function delWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeDeleteParamList){
		
		$this->send_delWarehouseInfo( $commonParam, $storeDeleteParamList);
		return $this->recv_delWarehouseInfo();
	}
	
	public function send_delWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeDeleteParamList){
		
		$this->initInvocation("delWarehouseInfo");
		$args = new \vipapis\vis\VendorStoreApiService_delWarehouseInfo_args();
		
		$args->commonParam = $commonParam;
		
		$args->storeDeleteParamList = $storeDeleteParamList;
		
		$this->send_base($args);
	}
	
	public function recv_delWarehouseInfo(){
		
		$result = new \vipapis\vis\VendorStoreApiService_delWarehouseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getStoreByStoreCode(\com\vip\vms\common\CommonParam $commonParam, $storeCode){
		
		$this->send_getStoreByStoreCode( $commonParam, $storeCode);
		return $this->recv_getStoreByStoreCode();
	}
	
	public function send_getStoreByStoreCode(\com\vip\vms\common\CommonParam $commonParam, $storeCode){
		
		$this->initInvocation("getStoreByStoreCode");
		$args = new \vipapis\vis\VendorStoreApiService_getStoreByStoreCode_args();
		
		$args->commonParam = $commonParam;
		
		$args->storeCode = $storeCode;
		
		$this->send_base($args);
	}
	
	public function recv_getStoreByStoreCode(){
		
		$result = new \vipapis\vis\VendorStoreApiService_getStoreByStoreCode_result();
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
		$args = new \vipapis\vis\VendorStoreApiService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \vipapis\vis\VendorStoreApiService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeQueryParamList){
		
		$this->send_getWarehouseInfo( $commonParam, $storeQueryParamList);
		return $this->recv_getWarehouseInfo();
	}
	
	public function send_getWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeQueryParamList){
		
		$this->initInvocation("getWarehouseInfo");
		$args = new \vipapis\vis\VendorStoreApiService_getWarehouseInfo_args();
		
		$args->commonParam = $commonParam;
		
		$args->storeQueryParamList = $storeQueryParamList;
		
		$this->send_base($args);
	}
	
	public function recv_getWarehouseInfo(){
		
		$result = new \vipapis\vis\VendorStoreApiService_getWarehouseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function queryStoresByVendorCode(\com\vip\vms\common\CommonParam $commonParam, $vendorCode){
		
		$this->send_queryStoresByVendorCode( $commonParam, $vendorCode);
		return $this->recv_queryStoresByVendorCode();
	}
	
	public function send_queryStoresByVendorCode(\com\vip\vms\common\CommonParam $commonParam, $vendorCode){
		
		$this->initInvocation("queryStoresByVendorCode");
		$args = new \vipapis\vis\VendorStoreApiService_queryStoresByVendorCode_args();
		
		$args->commonParam = $commonParam;
		
		$args->vendorCode = $vendorCode;
		
		$this->send_base($args);
	}
	
	public function recv_queryStoresByVendorCode(){
		
		$result = new \vipapis\vis\VendorStoreApiService_queryStoresByVendorCode_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateVendorWarehouseAndVIPWarehouseMap(\com\vip\vms\common\CommonParam $commonParam, $storeWarehouseRelUpdateParamList){
		
		$this->send_updateVendorWarehouseAndVIPWarehouseMap( $commonParam, $storeWarehouseRelUpdateParamList);
		return $this->recv_updateVendorWarehouseAndVIPWarehouseMap();
	}
	
	public function send_updateVendorWarehouseAndVIPWarehouseMap(\com\vip\vms\common\CommonParam $commonParam, $storeWarehouseRelUpdateParamList){
		
		$this->initInvocation("updateVendorWarehouseAndVIPWarehouseMap");
		$args = new \vipapis\vis\VendorStoreApiService_updateVendorWarehouseAndVIPWarehouseMap_args();
		
		$args->commonParam = $commonParam;
		
		$args->storeWarehouseRelUpdateParamList = $storeWarehouseRelUpdateParamList;
		
		$this->send_base($args);
	}
	
	public function recv_updateVendorWarehouseAndVIPWarehouseMap(){
		
		$result = new \vipapis\vis\VendorStoreApiService_updateVendorWarehouseAndVIPWarehouseMap_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeUpdateParamList){
		
		$this->send_updateWarehouseInfo( $commonParam, $storeUpdateParamList);
		return $this->recv_updateWarehouseInfo();
	}
	
	public function send_updateWarehouseInfo(\com\vip\vms\common\CommonParam $commonParam, $storeUpdateParamList){
		
		$this->initInvocation("updateWarehouseInfo");
		$args = new \vipapis\vis\VendorStoreApiService_updateWarehouseInfo_args();
		
		$args->commonParam = $commonParam;
		
		$args->storeUpdateParamList = $storeUpdateParamList;
		
		$this->send_base($args);
	}
	
	public function recv_updateWarehouseInfo(){
		
		$result = new \vipapis\vis\VendorStoreApiService_updateWarehouseInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VendorStoreApiService_addWarehouseInfo_args {
	
	static $_TSPEC;
	public $commonParam = null;
	public $storeAddParamList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParam'
			),
			2 => array(
			'var' => 'storeAddParamList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParam'])){
				
				$this->commonParam = $vals['commonParam'];
			}
			
			
			if (isset($vals['storeAddParamList'])){
				
				$this->storeAddParamList = $vals['storeAddParamList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commonParam = new \com\vip\vms\common\CommonParam();
			$this->commonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->storeAddParamList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vms\store\service\StoreAddParam();
					$elem0->read($input);
					
					$this->storeAddParamList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('commonParam');
		
		if (!is_object($this->commonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeAddParamList');
		
		if (!is_array($this->storeAddParamList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->storeAddParamList as $iter0){
			
			
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




class VendorStoreApiService_delWarehouseInfo_args {
	
	static $_TSPEC;
	public $commonParam = null;
	public $storeDeleteParamList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParam'
			),
			2 => array(
			'var' => 'storeDeleteParamList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParam'])){
				
				$this->commonParam = $vals['commonParam'];
			}
			
			
			if (isset($vals['storeDeleteParamList'])){
				
				$this->storeDeleteParamList = $vals['storeDeleteParamList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commonParam = new \com\vip\vms\common\CommonParam();
			$this->commonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->storeDeleteParamList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\vms\store\service\StoreDeleteParam();
					$elem1->read($input);
					
					$this->storeDeleteParamList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('commonParam');
		
		if (!is_object($this->commonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeDeleteParamList');
		
		if (!is_array($this->storeDeleteParamList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->storeDeleteParamList as $iter0){
			
			
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




class VendorStoreApiService_getStoreByStoreCode_args {
	
	static $_TSPEC;
	public $commonParam = null;
	public $storeCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParam'
			),
			2 => array(
			'var' => 'storeCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParam'])){
				
				$this->commonParam = $vals['commonParam'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commonParam = new \com\vip\vms\common\CommonParam();
			$this->commonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->storeCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('commonParam');
		
		if (!is_object($this->commonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorStoreApiService_healthCheck_args {
	
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




class VendorStoreApiService_getWarehouseInfo_args {
	
	static $_TSPEC;
	public $commonParam = null;
	public $storeQueryParamList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParam'
			),
			2 => array(
			'var' => 'storeQueryParamList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParam'])){
				
				$this->commonParam = $vals['commonParam'];
			}
			
			
			if (isset($vals['storeQueryParamList'])){
				
				$this->storeQueryParamList = $vals['storeQueryParamList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commonParam = new \com\vip\vms\common\CommonParam();
			$this->commonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->storeQueryParamList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vms\store\service\StoreQueryParam();
					$elem0->read($input);
					
					$this->storeQueryParamList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('commonParam');
		
		if (!is_object($this->commonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeQueryParamList');
		
		if (!is_array($this->storeQueryParamList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->storeQueryParamList as $iter0){
			
			
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




class VendorStoreApiService_queryStoresByVendorCode_args {
	
	static $_TSPEC;
	public $commonParam = null;
	public $vendorCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParam'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParam'])){
				
				$this->commonParam = $vals['commonParam'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commonParam = new \com\vip\vms\common\CommonParam();
			$this->commonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->vendorCode); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('commonParam');
		
		if (!is_object($this->commonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeI32($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VendorStoreApiService_updateVendorWarehouseAndVIPWarehouseMap_args {
	
	static $_TSPEC;
	public $commonParam = null;
	public $storeWarehouseRelUpdateParamList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParam'
			),
			2 => array(
			'var' => 'storeWarehouseRelUpdateParamList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParam'])){
				
				$this->commonParam = $vals['commonParam'];
			}
			
			
			if (isset($vals['storeWarehouseRelUpdateParamList'])){
				
				$this->storeWarehouseRelUpdateParamList = $vals['storeWarehouseRelUpdateParamList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commonParam = new \com\vip\vms\common\CommonParam();
			$this->commonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->storeWarehouseRelUpdateParamList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\vms\store\service\StoreWarehouseRelUpdateParam();
					$elem0->read($input);
					
					$this->storeWarehouseRelUpdateParamList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('commonParam');
		
		if (!is_object($this->commonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->storeWarehouseRelUpdateParamList !== null) {
			
			$xfer += $output->writeFieldBegin('storeWarehouseRelUpdateParamList');
			
			if (!is_array($this->storeWarehouseRelUpdateParamList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->storeWarehouseRelUpdateParamList as $iter0){
				
				
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




class VendorStoreApiService_updateWarehouseInfo_args {
	
	static $_TSPEC;
	public $commonParam = null;
	public $storeUpdateParamList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'commonParam'
			),
			2 => array(
			'var' => 'storeUpdateParamList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['commonParam'])){
				
				$this->commonParam = $vals['commonParam'];
			}
			
			
			if (isset($vals['storeUpdateParamList'])){
				
				$this->storeUpdateParamList = $vals['storeUpdateParamList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->commonParam = new \com\vip\vms\common\CommonParam();
			$this->commonParam->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->storeUpdateParamList = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\vms\store\service\StoreUpdateParam();
					$elem1->read($input);
					
					$this->storeUpdateParamList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('commonParam');
		
		if (!is_object($this->commonParam)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->commonParam->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeUpdateParamList');
		
		if (!is_array($this->storeUpdateParamList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->storeUpdateParamList as $iter0){
			
			
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




class VendorStoreApiService_addWarehouseInfo_result {
	
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




class VendorStoreApiService_delWarehouseInfo_result {
	
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




class VendorStoreApiService_getStoreByStoreCode_result {
	
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




class VendorStoreApiService_healthCheck_result {
	
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




class VendorStoreApiService_getWarehouseInfo_result {
	
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




class VendorStoreApiService_queryStoresByVendorCode_result {
	
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




class VendorStoreApiService_updateVendorWarehouseAndVIPWarehouseMap_result {
	
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




class VendorStoreApiService_updateWarehouseInfo_result {
	
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




?>
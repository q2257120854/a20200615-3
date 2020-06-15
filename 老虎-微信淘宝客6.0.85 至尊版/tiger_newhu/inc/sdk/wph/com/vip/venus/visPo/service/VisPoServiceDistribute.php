<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\visPo\service;
interface VisPoServiceDistributeIf{
	
	
	public function dispatchNoParameter();
	
	public function getPoDataByMaxId( $maxId, $count, $warehouseCode);
	
	public function getPoDetailsWMSByPoNoAndItemNo( $queryParams);
	
	public function getPoEBSDetailsByPo( $po, $page, $size);
	
	public function getPoEBSDetailsByPoBatchNum( $po, $batchNum, $page, $size);
	
	public function getPoEBSDetailsByPoSKU( $poNum, $itemNum);
	
	public function getPoWMSDetailsByMaxId( $maxId, $saleArea, $count);
	
	public function healthCheck();
	
}

class _VisPoServiceDistributeClient extends \Osp\Base\OspStub implements \com\vip\venus\visPo\service\VisPoServiceDistributeIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.venus.visPo.service.VisPoServiceDistribute", "1.0.0");
	}
	
	
	public function dispatchNoParameter(){
		
		$this->send_dispatchNoParameter();
		return $this->recv_dispatchNoParameter();
	}
	
	public function send_dispatchNoParameter(){
		
		$this->initInvocation("dispatchNoParameter");
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_dispatchNoParameter_args();
		
		$this->send_base($args);
	}
	
	public function recv_dispatchNoParameter(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_dispatchNoParameter_result();
		$this->receive_base($result);
		
	}
	
	
	public function getPoDataByMaxId( $maxId, $count, $warehouseCode){
		
		$this->send_getPoDataByMaxId( $maxId, $count, $warehouseCode);
		return $this->recv_getPoDataByMaxId();
	}
	
	public function send_getPoDataByMaxId( $maxId, $count, $warehouseCode){
		
		$this->initInvocation("getPoDataByMaxId");
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoDataByMaxId_args();
		
		$args->maxId = $maxId;
		
		$args->count = $count;
		
		$args->warehouseCode = $warehouseCode;
		
		$this->send_base($args);
	}
	
	public function recv_getPoDataByMaxId(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoDataByMaxId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoDetailsWMSByPoNoAndItemNo( $queryParams){
		
		$this->send_getPoDetailsWMSByPoNoAndItemNo( $queryParams);
		return $this->recv_getPoDetailsWMSByPoNoAndItemNo();
	}
	
	public function send_getPoDetailsWMSByPoNoAndItemNo( $queryParams){
		
		$this->initInvocation("getPoDetailsWMSByPoNoAndItemNo");
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoDetailsWMSByPoNoAndItemNo_args();
		
		$args->queryParams = $queryParams;
		
		$this->send_base($args);
	}
	
	public function recv_getPoDetailsWMSByPoNoAndItemNo(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoDetailsWMSByPoNoAndItemNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoEBSDetailsByPo( $po, $page, $size){
		
		$this->send_getPoEBSDetailsByPo( $po, $page, $size);
		return $this->recv_getPoEBSDetailsByPo();
	}
	
	public function send_getPoEBSDetailsByPo( $po, $page, $size){
		
		$this->initInvocation("getPoEBSDetailsByPo");
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoEBSDetailsByPo_args();
		
		$args->po = $po;
		
		$args->page = $page;
		
		$args->size = $size;
		
		$this->send_base($args);
	}
	
	public function recv_getPoEBSDetailsByPo(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoEBSDetailsByPo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoEBSDetailsByPoBatchNum( $po, $batchNum, $page, $size){
		
		$this->send_getPoEBSDetailsByPoBatchNum( $po, $batchNum, $page, $size);
		return $this->recv_getPoEBSDetailsByPoBatchNum();
	}
	
	public function send_getPoEBSDetailsByPoBatchNum( $po, $batchNum, $page, $size){
		
		$this->initInvocation("getPoEBSDetailsByPoBatchNum");
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoEBSDetailsByPoBatchNum_args();
		
		$args->po = $po;
		
		$args->batchNum = $batchNum;
		
		$args->page = $page;
		
		$args->size = $size;
		
		$this->send_base($args);
	}
	
	public function recv_getPoEBSDetailsByPoBatchNum(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoEBSDetailsByPoBatchNum_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoEBSDetailsByPoSKU( $poNum, $itemNum){
		
		$this->send_getPoEBSDetailsByPoSKU( $poNum, $itemNum);
		return $this->recv_getPoEBSDetailsByPoSKU();
	}
	
	public function send_getPoEBSDetailsByPoSKU( $poNum, $itemNum){
		
		$this->initInvocation("getPoEBSDetailsByPoSKU");
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoEBSDetailsByPoSKU_args();
		
		$args->poNum = $poNum;
		
		$args->itemNum = $itemNum;
		
		$this->send_base($args);
	}
	
	public function recv_getPoEBSDetailsByPoSKU(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoEBSDetailsByPoSKU_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPoWMSDetailsByMaxId( $maxId, $saleArea, $count){
		
		$this->send_getPoWMSDetailsByMaxId( $maxId, $saleArea, $count);
		return $this->recv_getPoWMSDetailsByMaxId();
	}
	
	public function send_getPoWMSDetailsByMaxId( $maxId, $saleArea, $count){
		
		$this->initInvocation("getPoWMSDetailsByMaxId");
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoWMSDetailsByMaxId_args();
		
		$args->maxId = $maxId;
		
		$args->saleArea = $saleArea;
		
		$args->count = $count;
		
		$this->send_base($args);
	}
	
	public function recv_getPoWMSDetailsByMaxId(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_getPoWMSDetailsByMaxId_result();
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
		$args = new \com\vip\venus\visPo\service\VisPoServiceDistribute_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\venus\visPo\service\VisPoServiceDistribute_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class VisPoServiceDistribute_dispatchNoParameter_args {
	
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




class VisPoServiceDistribute_getPoDataByMaxId_args {
	
	static $_TSPEC;
	public $maxId = null;
	public $count = null;
	public $warehouseCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'maxId'
			),
			2 => array(
			'var' => 'count'
			),
			3 => array(
			'var' => 'warehouseCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['maxId'])){
				
				$this->maxId = $vals['maxId'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->maxId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI64($this->count); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->warehouseCode);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('maxId');
		$xfer += $output->writeI64($this->maxId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('count');
		$xfer += $output->writeI64($this->count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VisPoServiceDistribute_getPoDetailsWMSByPoNoAndItemNo_args {
	
	static $_TSPEC;
	public $queryParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'queryParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['queryParams'])){
				
				$this->queryParams = $vals['queryParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->queryParams = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = '';
					$input->readString($key0);
					
					$val0 = null;
					
					$val0 = array();
					$_size1 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem1 = null;
							$input->readString($elem1);
							
							$val0[$_size1++] = $elem1;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readListEnd();
					
					$this->queryParams[$key0] = $val0;
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
		
		$xfer += $output->writeFieldBegin('queryParams');
		
		if (!is_array($this->queryParams)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeMapBegin();
		foreach ($this->queryParams as $kiter0 => $viter0){
			
			$xfer += $output->writeString($kiter0);
			
			
			if (!is_array($viter0)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($viter0 as $iter1){
				
				$xfer += $output->writeString($iter1);
				
			}
			
			$output->writeListEnd();
			
		}
		
		$output->writeMapEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VisPoServiceDistribute_getPoEBSDetailsByPo_args {
	
	static $_TSPEC;
	public $po = null;
	public $page = null;
	public $size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po'
			),
			2 => array(
			'var' => 'page'
			),
			3 => array(
			'var' => 'size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->po);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('po');
		$xfer += $output->writeString($this->po);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size');
		$xfer += $output->writeI32($this->size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VisPoServiceDistribute_getPoEBSDetailsByPoBatchNum_args {
	
	static $_TSPEC;
	public $po = null;
	public $batchNum = null;
	public $page = null;
	public $size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'po'
			),
			2 => array(
			'var' => 'batchNum'
			),
			3 => array(
			'var' => 'page'
			),
			4 => array(
			'var' => 'size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['batchNum'])){
				
				$this->batchNum = $vals['batchNum'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->po);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->batchNum); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->page); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->size); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('po');
		$xfer += $output->writeString($this->po);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchNum');
		$xfer += $output->writeI32($this->batchNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('size');
		$xfer += $output->writeI32($this->size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VisPoServiceDistribute_getPoEBSDetailsByPoSKU_args {
	
	static $_TSPEC;
	public $poNum = null;
	public $itemNum = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poNum'
			),
			2 => array(
			'var' => 'itemNum'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poNum'])){
				
				$this->poNum = $vals['poNum'];
			}
			
			
			if (isset($vals['itemNum'])){
				
				$this->itemNum = $vals['itemNum'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->poNum);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->itemNum);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('poNum');
		$xfer += $output->writeString($this->poNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('itemNum');
		$xfer += $output->writeString($this->itemNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VisPoServiceDistribute_getPoWMSDetailsByMaxId_args {
	
	static $_TSPEC;
	public $maxId = null;
	public $saleArea = null;
	public $count = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'maxId'
			),
			2 => array(
			'var' => 'saleArea'
			),
			3 => array(
			'var' => 'count'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['maxId'])){
				
				$this->maxId = $vals['maxId'];
			}
			
			
			if (isset($vals['saleArea'])){
				
				$this->saleArea = $vals['saleArea'];
			}
			
			
			if (isset($vals['count'])){
				
				$this->count = $vals['count'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->maxId);
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->saleArea);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->count); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('maxId');
		$xfer += $output->writeString($this->maxId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('saleArea');
		$xfer += $output->writeString($this->saleArea);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('count');
		$xfer += $output->writeI32($this->count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class VisPoServiceDistribute_healthCheck_args {
	
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




class VisPoServiceDistribute_dispatchNoParameter_result {
	
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




class VisPoServiceDistribute_getPoDataByMaxId_result {
	
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
					
					$elem0 = new \com\vip\venus\visPo\service\PoDetailData();
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




class VisPoServiceDistribute_getPoDetailsWMSByPoNoAndItemNo_result {
	
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
					
					$elem1 = new \com\vip\venus\visPo\service\WMSPoDetail();
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




class VisPoServiceDistribute_getPoEBSDetailsByPo_result {
	
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
					
					$elem1 = new \com\vip\venus\visPo\service\EBSPoDetail();
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




class VisPoServiceDistribute_getPoEBSDetailsByPoBatchNum_result {
	
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
					
					$elem1 = new \com\vip\venus\visPo\service\EBSPoDetail();
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




class VisPoServiceDistribute_getPoEBSDetailsByPoSKU_result {
	
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
			
			
			$this->success = new \com\vip\venus\visPo\service\EBSPoDetail();
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




class VisPoServiceDistribute_getPoWMSDetailsByMaxId_result {
	
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




class VisPoServiceDistribute_healthCheck_result {
	
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




?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service;

class XstoreCameraInfoUpdateParam {
	
	static $_TSPEC;
	public $id = null;
	public $posCode = null;
	public $cameraCode = null;
	public $storeCode = null;
	public $txRegionCode = null;
	public $txStoreCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'posCode'
			),
			3 => array(
			'var' => 'cameraCode'
			),
			4 => array(
			'var' => 'storeCode'
			),
			5 => array(
			'var' => 'txRegionCode'
			),
			6 => array(
			'var' => 'txStoreCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['posCode'])){
				
				$this->posCode = $vals['posCode'];
			}
			
			
			if (isset($vals['cameraCode'])){
				
				$this->cameraCode = $vals['cameraCode'];
			}
			
			
			if (isset($vals['storeCode'])){
				
				$this->storeCode = $vals['storeCode'];
			}
			
			
			if (isset($vals['txRegionCode'])){
				
				$this->txRegionCode = $vals['txRegionCode'];
			}
			
			
			if (isset($vals['txStoreCode'])){
				
				$this->txStoreCode = $vals['txStoreCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstoreCameraInfoUpdateParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("posCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posCode);
				
			}
			
			
			
			
			if ("cameraCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraCode);
				
			}
			
			
			
			
			if ("storeCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storeCode);
				
			}
			
			
			
			
			if ("txRegionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txRegionCode);
				
			}
			
			
			
			
			if ("txStoreCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->txStoreCode);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('posCode');
		$xfer += $output->writeString($this->posCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cameraCode');
		$xfer += $output->writeString($this->cameraCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('storeCode');
		$xfer += $output->writeString($this->storeCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('txRegionCode');
		$xfer += $output->writeString($this->txRegionCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('txStoreCode');
		$xfer += $output->writeString($this->txStoreCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
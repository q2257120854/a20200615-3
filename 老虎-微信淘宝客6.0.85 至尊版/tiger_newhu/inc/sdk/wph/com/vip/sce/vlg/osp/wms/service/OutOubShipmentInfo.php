<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutOubShipmentInfo {
	
	static $_TSPEC;
	public $warehouseId = null;
	public $version = null;
	public $orderSn = null;
	public $outTime = null;
	public $orderZCode = null;
	public $inventoryType = null;
	public $detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseId'
			),
			2 => array(
			'var' => 'version'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'outTime'
			),
			5 => array(
			'var' => 'orderZCode'
			),
			6 => array(
			'var' => 'inventoryType'
			),
			7 => array(
			'var' => 'detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseId'])){
				
				$this->warehouseId = $vals['warehouseId'];
			}
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['outTime'])){
				
				$this->outTime = $vals['outTime'];
			}
			
			
			if (isset($vals['orderZCode'])){
				
				$this->orderZCode = $vals['orderZCode'];
			}
			
			
			if (isset($vals['inventoryType'])){
				
				$this->inventoryType = $vals['inventoryType'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutOubShipmentInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouseId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseId);
				
			}
			
			
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->version);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("outTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outTime);
				
			}
			
			
			
			
			if ("orderZCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderZCode);
				
			}
			
			
			
			
			if ("inventoryType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->inventoryType);
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				
				$this->detail = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sce\vlg\osp\wms\service\OutOubShipmentDatailInfo();
						$elem1->read($input);
						
						$this->detail[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('warehouseId');
		$xfer += $output->writeString($this->warehouseId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('version');
		$xfer += $output->writeString($this->version);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('outTime');
		$xfer += $output->writeString($this->outTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderZCode !== null) {
			
			$xfer += $output->writeFieldBegin('orderZCode');
			$xfer += $output->writeString($this->orderZCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inventoryType !== null) {
			
			$xfer += $output->writeFieldBegin('inventoryType');
			$xfer += $output->writeString($this->inventoryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('detail');
		
		if (!is_array($this->detail)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->detail as $iter0){
			
			
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

?>
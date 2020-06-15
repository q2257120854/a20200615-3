<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class HtReceiveOutLoadingReleaseParam {
	
	static $_TSPEC;
	public $userId = null;
	public $listNo = null;
	public $idAuditDate = null;
	public $carNo = null;
	public $sumWeight = null;
	public $totalCount = null;
	public $cmdType = null;
	public $orders = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'listNo'
			),
			3 => array(
			'var' => 'idAuditDate'
			),
			4 => array(
			'var' => 'carNo'
			),
			5 => array(
			'var' => 'sumWeight'
			),
			6 => array(
			'var' => 'totalCount'
			),
			7 => array(
			'var' => 'cmdType'
			),
			8 => array(
			'var' => 'orders'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['listNo'])){
				
				$this->listNo = $vals['listNo'];
			}
			
			
			if (isset($vals['idAuditDate'])){
				
				$this->idAuditDate = $vals['idAuditDate'];
			}
			
			
			if (isset($vals['carNo'])){
				
				$this->carNo = $vals['carNo'];
			}
			
			
			if (isset($vals['sumWeight'])){
				
				$this->sumWeight = $vals['sumWeight'];
			}
			
			
			if (isset($vals['totalCount'])){
				
				$this->totalCount = $vals['totalCount'];
			}
			
			
			if (isset($vals['cmdType'])){
				
				$this->cmdType = $vals['cmdType'];
			}
			
			
			if (isset($vals['orders'])){
				
				$this->orders = $vals['orders'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'HtReceiveOutLoadingReleaseParam';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userId);
				
			}
			
			
			
			
			if ("listNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->listNo);
				
			}
			
			
			
			
			if ("idAuditDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->idAuditDate);
				
			}
			
			
			
			
			if ("carNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carNo);
				
			}
			
			
			
			
			if ("sumWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sumWeight);
				
			}
			
			
			
			
			if ("totalCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalCount); 
				
			}
			
			
			
			
			if ("cmdType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cmdType);
				
			}
			
			
			
			
			if ("orders" == $schemeField){
				
				$needSkip = false;
				
				$this->orders = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\haitao\loading\osp\service\OutLoadingReleaseOrders();
						$elem1->read($input);
						
						$this->orders[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('userId');
		$xfer += $output->writeString($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('listNo');
		$xfer += $output->writeString($this->listNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('idAuditDate');
		$xfer += $output->writeString($this->idAuditDate);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carNo !== null) {
			
			$xfer += $output->writeFieldBegin('carNo');
			$xfer += $output->writeString($this->carNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sumWeight !== null) {
			
			$xfer += $output->writeFieldBegin('sumWeight');
			$xfer += $output->writeDouble($this->sumWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('totalCount');
		$xfer += $output->writeI32($this->totalCount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cmdType');
		$xfer += $output->writeString($this->cmdType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orders');
		
		if (!is_array($this->orders)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orders as $iter0){
			
			
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
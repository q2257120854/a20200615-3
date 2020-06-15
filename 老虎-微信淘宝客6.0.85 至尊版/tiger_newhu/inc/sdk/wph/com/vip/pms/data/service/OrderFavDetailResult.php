<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class OrderFavDetailResult {
	
	static $_TSPEC;
	public $couponSn = null;
	public $orderNo = null;
	public $supplierNo = null;
	public $orderFavDetails = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'couponSn'
			),
			2 => array(
			'var' => 'orderNo'
			),
			3 => array(
			'var' => 'supplierNo'
			),
			4 => array(
			'var' => 'orderFavDetails'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['couponSn'])){
				
				$this->couponSn = $vals['couponSn'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
			if (isset($vals['supplierNo'])){
				
				$this->supplierNo = $vals['supplierNo'];
			}
			
			
			if (isset($vals['orderFavDetails'])){
				
				$this->orderFavDetails = $vals['orderFavDetails'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderFavDetailResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("couponSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponSn);
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
			}
			
			
			
			
			if ("supplierNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->supplierNo);
				
			}
			
			
			
			
			if ("orderFavDetails" == $schemeField){
				
				$needSkip = false;
				
				$this->orderFavDetails = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\service\OrderFavDetail();
						$elem0->read($input);
						
						$this->orderFavDetails[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('couponSn');
		$xfer += $output->writeString($this->couponSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderNo');
		$xfer += $output->writeString($this->orderNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('supplierNo');
		$xfer += $output->writeString($this->supplierNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->orderFavDetails !== null) {
			
			$xfer += $output->writeFieldBegin('orderFavDetails');
			
			if (!is_array($this->orderFavDetails)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderFavDetails as $iter0){
				
				
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

?>
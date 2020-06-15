<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class CouponUserLogRequestModel {
	
	static $_TSPEC;
	public $userId = null;
	public $couponSn = null;
	public $orderSn = null;
	public $orderAmount = null;
	public $orderFav = null;
	public $refIdType = null;
	public $refId = null;
	public $orderGoodsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userId'
			),
			2 => array(
			'var' => 'couponSn'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'orderAmount'
			),
			5 => array(
			'var' => 'orderFav'
			),
			6 => array(
			'var' => 'refIdType'
			),
			7 => array(
			'var' => 'refId'
			),
			8 => array(
			'var' => 'orderGoodsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['couponSn'])){
				
				$this->couponSn = $vals['couponSn'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['orderAmount'])){
				
				$this->orderAmount = $vals['orderAmount'];
			}
			
			
			if (isset($vals['orderFav'])){
				
				$this->orderFav = $vals['orderFav'];
			}
			
			
			if (isset($vals['refIdType'])){
				
				$this->refIdType = $vals['refIdType'];
			}
			
			
			if (isset($vals['refId'])){
				
				$this->refId = $vals['refId'];
			}
			
			
			if (isset($vals['orderGoodsList'])){
				
				$this->orderGoodsList = $vals['orderGoodsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CouponUserLogRequestModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("couponSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->couponSn);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("orderAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderAmount);
				
			}
			
			
			
			
			if ("orderFav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderFav);
				
			}
			
			
			
			
			if ("refIdType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refIdType); 
				
			}
			
			
			
			
			if ("refId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refId); 
				
			}
			
			
			
			
			if ("orderGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderGoodsList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\service\CouponPromotionOrderGoodsModel();
						$elem0->read($input);
						
						$this->orderGoodsList[$_size0++] = $elem0;
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
		$xfer += $output->writeI64($this->userId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('couponSn');
		$xfer += $output->writeString($this->couponSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderAmount');
		$xfer += $output->writeDouble($this->orderAmount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderFav');
		$xfer += $output->writeDouble($this->orderFav);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refIdType');
		$xfer += $output->writeByte($this->refIdType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refId');
		$xfer += $output->writeI64($this->refId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderGoodsList');
		
		if (!is_array($this->orderGoodsList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->orderGoodsList as $iter0){
			
			
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
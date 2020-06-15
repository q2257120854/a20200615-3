<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class RefInfoModel {
	
	static $_TSPEC;
	public $refId = null;
	public $refIdType = null;
	public $refNo = null;
	public $orderFav = null;
	public $orderGoodsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'refId'
			),
			2 => array(
			'var' => 'refIdType'
			),
			3 => array(
			'var' => 'refNo'
			),
			4 => array(
			'var' => 'orderFav'
			),
			5 => array(
			'var' => 'orderGoodsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['refId'])){
				
				$this->refId = $vals['refId'];
			}
			
			
			if (isset($vals['refIdType'])){
				
				$this->refIdType = $vals['refIdType'];
			}
			
			
			if (isset($vals['refNo'])){
				
				$this->refNo = $vals['refNo'];
			}
			
			
			if (isset($vals['orderFav'])){
				
				$this->orderFav = $vals['orderFav'];
			}
			
			
			if (isset($vals['orderGoodsList'])){
				
				$this->orderGoodsList = $vals['orderGoodsList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RefInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("refId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refId);
				
			}
			
			
			
			
			if ("refIdType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->refIdType); 
				
			}
			
			
			
			
			if ("refNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refNo);
				
			}
			
			
			
			
			if ("orderFav" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->orderFav);
				
			}
			
			
			
			
			if ("orderGoodsList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderGoodsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\pms\data\service\PromotionOrderGoodsModel();
						$elem1->read($input);
						
						$this->orderGoodsList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('refId');
		$xfer += $output->writeString($this->refId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refIdType');
		$xfer += $output->writeByte($this->refIdType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refNo');
		$xfer += $output->writeString($this->refNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderFav');
		$xfer += $output->writeDouble($this->orderFav);
		
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
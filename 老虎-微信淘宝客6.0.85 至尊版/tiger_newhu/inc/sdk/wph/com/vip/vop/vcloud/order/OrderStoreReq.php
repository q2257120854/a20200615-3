<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\vcloud\order;

class OrderStoreReq {
	
	static $_TSPEC;
	public $channelId = null;
	public $partnerId = null;
	public $orderSn = null;
	public $subOrderSn = null;
	public $account = null;
	public $remark = null;
	public $appointToStoreId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'channelId'
			),
			2 => array(
			'var' => 'partnerId'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'subOrderSn'
			),
			5 => array(
			'var' => 'account'
			),
			6 => array(
			'var' => 'remark'
			),
			7 => array(
			'var' => 'appointToStoreId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['channelId'])){
				
				$this->channelId = $vals['channelId'];
			}
			
			
			if (isset($vals['partnerId'])){
				
				$this->partnerId = $vals['partnerId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['subOrderSn'])){
				
				$this->subOrderSn = $vals['subOrderSn'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['appointToStoreId'])){
				
				$this->appointToStoreId = $vals['appointToStoreId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderStoreReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("channelId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->channelId); 
				
			}
			
			
			
			
			if ("partnerId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->partnerId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("subOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->subOrderSn);
				
			}
			
			
			
			
			if ("account" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->account);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("appointToStoreId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->appointToStoreId); 
				
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
		
		$xfer += $output->writeFieldBegin('channelId');
		$xfer += $output->writeI64($this->channelId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('partnerId');
		$xfer += $output->writeI64($this->partnerId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('subOrderSn');
		$xfer += $output->writeString($this->subOrderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('account');
		$xfer += $output->writeString($this->account);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appointToStoreId !== null) {
			
			$xfer += $output->writeFieldBegin('appointToStoreId');
			$xfer += $output->writeI64($this->appointToStoreId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
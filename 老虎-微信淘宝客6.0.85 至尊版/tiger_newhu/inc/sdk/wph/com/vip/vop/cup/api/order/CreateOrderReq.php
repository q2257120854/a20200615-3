<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\order;

class CreateOrderReq {
	
	static $_TSPEC;
	public $order_basic_info = null;
	public $order_goods_list = null;
	public $order_consignee_info = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_basic_info'
			),
			2 => array(
			'var' => 'order_goods_list'
			),
			3 => array(
			'var' => 'order_consignee_info'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_basic_info'])){
				
				$this->order_basic_info = $vals['order_basic_info'];
			}
			
			
			if (isset($vals['order_goods_list'])){
				
				$this->order_goods_list = $vals['order_goods_list'];
			}
			
			
			if (isset($vals['order_consignee_info'])){
				
				$this->order_consignee_info = $vals['order_consignee_info'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateOrderReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_basic_info" == $schemeField){
				
				$needSkip = false;
				
				$this->order_basic_info = new \com\vip\vop\cup\api\order\OrderBasicInfo();
				$this->order_basic_info->read($input);
				
			}
			
			
			
			
			if ("order_goods_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_goods_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\cup\api\order\OrderGoodsInfo();
						$elem0->read($input);
						
						$this->order_goods_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("order_consignee_info" == $schemeField){
				
				$needSkip = false;
				
				$this->order_consignee_info = new \com\vip\vop\cup\api\order\OrderConsigneeInfo();
				$this->order_consignee_info->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('order_basic_info');
		
		if (!is_object($this->order_basic_info)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->order_basic_info->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_goods_list');
		
		if (!is_array($this->order_goods_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_goods_list as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_consignee_info');
		
		if (!is_object($this->order_consignee_info)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->order_consignee_info->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
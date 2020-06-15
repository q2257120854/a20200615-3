<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\newretail;

class AfterSaleDetail {
	
	static $_TSPEC;
	public $order_id = null;
	public $apply_id = null;
	public $is_return_goods = null;
	public $create_time = null;
	public $goods_infos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'apply_id'
			),
			3 => array(
			'var' => 'is_return_goods'
			),
			4 => array(
			'var' => 'create_time'
			),
			5 => array(
			'var' => 'goods_infos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['apply_id'])){
				
				$this->apply_id = $vals['apply_id'];
			}
			
			
			if (isset($vals['is_return_goods'])){
				
				$this->is_return_goods = $vals['is_return_goods'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['goods_infos'])){
				
				$this->goods_infos = $vals['goods_infos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AfterSaleDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("apply_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->apply_id); 
				
			}
			
			
			
			
			if ("is_return_goods" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->is_return_goods); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time); 
				
			}
			
			
			
			
			if ("goods_infos" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_infos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\cup\api\newretail\GoodsInfo();
						$elem0->read($input);
						
						$this->goods_infos[$_size0++] = $elem0;
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
		
		if($this->order_id !== null) {
			
			$xfer += $output->writeFieldBegin('order_id');
			$xfer += $output->writeString($this->order_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apply_id !== null) {
			
			$xfer += $output->writeFieldBegin('apply_id');
			$xfer += $output->writeI64($this->apply_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_return_goods !== null) {
			
			$xfer += $output->writeFieldBegin('is_return_goods');
			$xfer += $output->writeByte($this->is_return_goods);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_infos !== null) {
			
			$xfer += $output->writeFieldBegin('goods_infos');
			
			if (!is_array($this->goods_infos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods_infos as $iter0){
				
				
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
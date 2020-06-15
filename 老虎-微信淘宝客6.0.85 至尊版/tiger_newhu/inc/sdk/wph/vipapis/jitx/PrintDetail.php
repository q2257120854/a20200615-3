<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class PrintDetail {
	
	static $_TSPEC;
	public $order_sn = null;
	public $transport_no = null;
	public $box_no = null;
	public $carrier_code = null;
	public $total_package = null;
	public $goods_info = null;
	public $delivery_warehouse_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'transport_no'
			),
			3 => array(
			'var' => 'box_no'
			),
			4 => array(
			'var' => 'carrier_code'
			),
			5 => array(
			'var' => 'total_package'
			),
			6 => array(
			'var' => 'goods_info'
			),
			7 => array(
			'var' => 'delivery_warehouse_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['total_package'])){
				
				$this->total_package = $vals['total_package'];
			}
			
			
			if (isset($vals['goods_info'])){
				
				$this->goods_info = $vals['goods_info'];
			}
			
			
			if (isset($vals['delivery_warehouse_code'])){
				
				$this->delivery_warehouse_code = $vals['delivery_warehouse_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->box_no); 
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("total_package" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_package); 
				
			}
			
			
			
			
			if ("goods_info" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_info = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->goods_info[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("delivery_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse_code);
				
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
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transport_no');
		$xfer += $output->writeString($this->transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_no');
		$xfer += $output->writeI32($this->box_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_package');
		$xfer += $output->writeI32($this->total_package);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_info');
		
		if (!is_array($this->goods_info)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->goods_info as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse_code');
			$xfer += $output->writeString($this->delivery_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
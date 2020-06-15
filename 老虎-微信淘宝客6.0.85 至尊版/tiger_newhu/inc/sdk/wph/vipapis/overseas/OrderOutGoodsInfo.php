<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class OrderOutGoodsInfo {
	
	static $_TSPEC;
	public $id = null;
	public $order_sn = null;
	public $weight = null;
	public $length = null;
	public $width = null;
	public $height = null;
	public $volume = null;
	public $box_id = null;
	public $creat_time = null;
	public $cmd_type = null;
	public $material_code = null;
	public $box_num = null;
	public $cust_code = null;
	public $transport_no = null;
	public $pick_code = null;
	public $out_type = null;
	public $order_detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'weight'
			),
			4 => array(
			'var' => 'length'
			),
			5 => array(
			'var' => 'width'
			),
			6 => array(
			'var' => 'height'
			),
			7 => array(
			'var' => 'volume'
			),
			8 => array(
			'var' => 'box_id'
			),
			9 => array(
			'var' => 'creat_time'
			),
			10 => array(
			'var' => 'cmd_type'
			),
			11 => array(
			'var' => 'material_code'
			),
			12 => array(
			'var' => 'box_num'
			),
			13 => array(
			'var' => 'cust_code'
			),
			14 => array(
			'var' => 'transport_no'
			),
			15 => array(
			'var' => 'pick_code'
			),
			16 => array(
			'var' => 'out_type'
			),
			17 => array(
			'var' => 'order_detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['length'])){
				
				$this->length = $vals['length'];
			}
			
			
			if (isset($vals['width'])){
				
				$this->width = $vals['width'];
			}
			
			
			if (isset($vals['height'])){
				
				$this->height = $vals['height'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['box_id'])){
				
				$this->box_id = $vals['box_id'];
			}
			
			
			if (isset($vals['creat_time'])){
				
				$this->creat_time = $vals['creat_time'];
			}
			
			
			if (isset($vals['cmd_type'])){
				
				$this->cmd_type = $vals['cmd_type'];
			}
			
			
			if (isset($vals['material_code'])){
				
				$this->material_code = $vals['material_code'];
			}
			
			
			if (isset($vals['box_num'])){
				
				$this->box_num = $vals['box_num'];
			}
			
			
			if (isset($vals['cust_code'])){
				
				$this->cust_code = $vals['cust_code'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['pick_code'])){
				
				$this->pick_code = $vals['pick_code'];
			}
			
			
			if (isset($vals['out_type'])){
				
				$this->out_type = $vals['out_type'];
			}
			
			
			if (isset($vals['order_detail_list'])){
				
				$this->order_detail_list = $vals['order_detail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderOutGoodsInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("length" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->length);
				
			}
			
			
			
			
			if ("width" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->width);
				
			}
			
			
			
			
			if ("height" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->height);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
			}
			
			
			
			
			if ("box_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_id);
				
			}
			
			
			
			
			if ("creat_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creat_time);
				
			}
			
			
			
			
			if ("cmd_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cmd_type);
				
			}
			
			
			
			
			if ("material_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->material_code);
				
			}
			
			
			
			
			if ("box_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->box_num); 
				
			}
			
			
			
			
			if ("cust_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cust_code);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("pick_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_code);
				
			}
			
			
			
			
			if ("out_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_type);
				
			}
			
			
			
			
			if ("order_detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\OrderOutDetail();
						$elem0->read($input);
						
						$this->order_detail_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeString($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('weight');
		$xfer += $output->writeDouble($this->weight);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('length');
		$xfer += $output->writeDouble($this->length);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('width');
		$xfer += $output->writeDouble($this->width);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('height');
		$xfer += $output->writeDouble($this->height);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('volume');
		$xfer += $output->writeDouble($this->volume);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_id');
		$xfer += $output->writeString($this->box_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('creat_time');
		$xfer += $output->writeString($this->creat_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cmd_type');
		$xfer += $output->writeString($this->cmd_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('material_code');
		$xfer += $output->writeString($this->material_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_num');
		$xfer += $output->writeI32($this->box_num);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->cust_code !== null) {
			
			$xfer += $output->writeFieldBegin('cust_code');
			$xfer += $output->writeString($this->cust_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pick_code !== null) {
			
			$xfer += $output->writeFieldBegin('pick_code');
			$xfer += $output->writeString($this->pick_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_type !== null) {
			
			$xfer += $output->writeFieldBegin('out_type');
			$xfer += $output->writeString($this->out_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_detail_list');
		
		if (!is_array($this->order_detail_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_detail_list as $iter0){
			
			
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
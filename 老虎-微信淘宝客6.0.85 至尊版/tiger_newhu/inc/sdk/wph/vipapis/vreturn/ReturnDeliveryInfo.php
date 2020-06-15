<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;

class ReturnDeliveryInfo {
	
	static $_TSPEC;
	public $return_sn = null;
	public $out_time = null;
	public $total_cases = null;
	public $total_skus = null;
	public $total_qtys = null;
	public $delivery_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_sn'
			),
			2 => array(
			'var' => 'out_time'
			),
			3 => array(
			'var' => 'total_cases'
			),
			4 => array(
			'var' => 'total_skus'
			),
			5 => array(
			'var' => 'total_qtys'
			),
			6 => array(
			'var' => 'delivery_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
			if (isset($vals['total_cases'])){
				
				$this->total_cases = $vals['total_cases'];
			}
			
			
			if (isset($vals['total_skus'])){
				
				$this->total_skus = $vals['total_skus'];
			}
			
			
			if (isset($vals['total_qtys'])){
				
				$this->total_qtys = $vals['total_qtys'];
			}
			
			
			if (isset($vals['delivery_list'])){
				
				$this->delivery_list = $vals['delivery_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnDeliveryInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
			}
			
			
			
			
			if ("total_cases" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_cases);
				
			}
			
			
			
			
			if ("total_skus" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_skus);
				
			}
			
			
			
			
			if ("total_qtys" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->total_qtys);
				
			}
			
			
			
			
			if ("delivery_list" == $schemeField){
				
				$needSkip = false;
				
				$this->delivery_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vreturn\ReturnDeliveryDetail();
						$elem0->read($input);
						
						$this->delivery_list[$_size0++] = $elem0;
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
		
		if($this->return_sn !== null) {
			
			$xfer += $output->writeFieldBegin('return_sn');
			$xfer += $output->writeString($this->return_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time !== null) {
			
			$xfer += $output->writeFieldBegin('out_time');
			$xfer += $output->writeString($this->out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_cases !== null) {
			
			$xfer += $output->writeFieldBegin('total_cases');
			$xfer += $output->writeDouble($this->total_cases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_skus !== null) {
			
			$xfer += $output->writeFieldBegin('total_skus');
			$xfer += $output->writeDouble($this->total_skus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_qtys !== null) {
			
			$xfer += $output->writeFieldBegin('total_qtys');
			$xfer += $output->writeDouble($this->total_qtys);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_list !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_list');
			
			if (!is_array($this->delivery_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->delivery_list as $iter0){
				
				
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
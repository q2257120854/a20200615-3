<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class ReturnOutInfo {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $vendor_code = null;
	public $return_sn = null;
	public $out_time = null;
	public $total_cases = null;
	public $total_skus = null;
	public $total_num = null;
	public $order_detail_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'vendor_code'
			),
			3 => array(
			'var' => 'return_sn'
			),
			4 => array(
			'var' => 'out_time'
			),
			5 => array(
			'var' => 'total_cases'
			),
			6 => array(
			'var' => 'total_skus'
			),
			7 => array(
			'var' => 'total_num'
			),
			8 => array(
			'var' => 'order_detail_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['vendor_code'])){
				
				$this->vendor_code = $vals['vendor_code'];
			}
			
			
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
			
			
			if (isset($vals['total_num'])){
				
				$this->total_num = $vals['total_num'];
			}
			
			
			if (isset($vals['order_detail_list'])){
				
				$this->order_detail_list = $vals['order_detail_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnOutInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("vendor_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_code);
				
			}
			
			
			
			
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
				$input->readI32($this->total_cases); 
				
			}
			
			
			
			
			if ("total_skus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_skus); 
				
			}
			
			
			
			
			if ("total_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_num); 
				
			}
			
			
			
			
			if ("order_detail_list" == $schemeField){
				
				$needSkip = false;
				
				$this->order_detail_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\ReturnOutDetail();
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_code');
		$xfer += $output->writeString($this->vendor_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_sn');
		$xfer += $output->writeString($this->return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('out_time');
		$xfer += $output->writeString($this->out_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_cases');
		$xfer += $output->writeI32($this->total_cases);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_skus');
		$xfer += $output->writeI32($this->total_skus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_num');
		$xfer += $output->writeI32($this->total_num);
		
		$xfer += $output->writeFieldEnd();
		
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
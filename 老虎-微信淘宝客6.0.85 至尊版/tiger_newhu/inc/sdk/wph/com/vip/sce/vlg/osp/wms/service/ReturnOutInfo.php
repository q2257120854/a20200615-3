<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class ReturnOutInfo {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $warehouse = null;
	public $vendor_code = null;
	public $return_sn = null;
	public $out_time = null;
	public $total_cases = null;
	public $total_skus = null;
	public $total_qtys = null;
	public $return_type = null;
	public $sub_return_sn = null;
	public $sub_return_flag = null;
	public $detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'vendor_code'
			),
			4 => array(
			'var' => 'return_sn'
			),
			5 => array(
			'var' => 'out_time'
			),
			6 => array(
			'var' => 'total_cases'
			),
			7 => array(
			'var' => 'total_skus'
			),
			8 => array(
			'var' => 'total_qtys'
			),
			9 => array(
			'var' => 'return_type'
			),
			10 => array(
			'var' => 'sub_return_sn'
			),
			11 => array(
			'var' => 'sub_return_flag'
			),
			12 => array(
			'var' => 'detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
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
			
			
			if (isset($vals['total_qtys'])){
				
				$this->total_qtys = $vals['total_qtys'];
			}
			
			
			if (isset($vals['return_type'])){
				
				$this->return_type = $vals['return_type'];
			}
			
			
			if (isset($vals['sub_return_sn'])){
				
				$this->sub_return_sn = $vals['sub_return_sn'];
			}
			
			
			if (isset($vals['sub_return_flag'])){
				
				$this->sub_return_flag = $vals['sub_return_flag'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
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
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
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
			
			
			
			
			if ("return_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_type);
				
			}
			
			
			
			
			if ("sub_return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_return_sn);
				
			}
			
			
			
			
			if ("sub_return_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_return_flag);
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				
				$this->detail = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\sce\vlg\osp\wms\service\ReturnOutDetailInfo();
						$elem1->read($input);
						
						$this->detail[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
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
		$xfer += $output->writeDouble($this->total_cases);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_skus');
		$xfer += $output->writeDouble($this->total_skus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_qtys');
		$xfer += $output->writeDouble($this->total_qtys);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_type');
		$xfer += $output->writeString($this->return_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sub_return_sn');
		$xfer += $output->writeString($this->sub_return_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sub_return_flag');
		$xfer += $output->writeString($this->sub_return_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('detail');
		
		if (!is_array($this->detail)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->detail as $iter0){
			
			
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
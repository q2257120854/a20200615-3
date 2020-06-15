<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\overseas;

class BatchInfo {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $po_no = null;
	public $co_mode = null;
	public $trade_mode = null;
	public $pallet = null;
	public $schedule_id = null;
	public $product_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'co_mode'
			),
			4 => array(
			'var' => 'trade_mode'
			),
			5 => array(
			'var' => 'pallet'
			),
			6 => array(
			'var' => 'schedule_id'
			),
			7 => array(
			'var' => 'product_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['trade_mode'])){
				
				$this->trade_mode = $vals['trade_mode'];
			}
			
			
			if (isset($vals['pallet'])){
				
				$this->pallet = $vals['pallet'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['product_list'])){
				
				$this->product_list = $vals['product_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_id);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("co_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->co_mode);
				
			}
			
			
			
			
			if ("trade_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_mode);
				
			}
			
			
			
			
			if ("pallet" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pallet);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schedule_id);
				
			}
			
			
			
			
			if ("product_list" == $schemeField){
				
				$needSkip = false;
				
				$this->product_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\overseas\BatchDetailInfo();
						$elem0->read($input);
						
						$this->product_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeString($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('po_no');
		$xfer += $output->writeString($this->po_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('co_mode');
		$xfer += $output->writeString($this->co_mode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trade_mode');
		$xfer += $output->writeString($this->trade_mode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pallet !== null) {
			
			$xfer += $output->writeFieldBegin('pallet');
			$xfer += $output->writeString($this->pallet);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('schedule_id');
		$xfer += $output->writeString($this->schedule_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('product_list');
		
		if (!is_array($this->product_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->product_list as $iter0){
			
			
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
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\bill;

class BillHeaderInfo {
	
	static $_TSPEC;
	public $bill_no = null;
	public $channel_coop_mode = null;
	public $sponsor = null;
	public $bill_amount = null;
	public $bill_detail_count = null;
	public $finish_flag = null;
	public $bill_detail_info_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bill_no'
			),
			2 => array(
			'var' => 'channel_coop_mode'
			),
			3 => array(
			'var' => 'sponsor'
			),
			4 => array(
			'var' => 'bill_amount'
			),
			5 => array(
			'var' => 'bill_detail_count'
			),
			6 => array(
			'var' => 'finish_flag'
			),
			7 => array(
			'var' => 'bill_detail_info_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bill_no'])){
				
				$this->bill_no = $vals['bill_no'];
			}
			
			
			if (isset($vals['channel_coop_mode'])){
				
				$this->channel_coop_mode = $vals['channel_coop_mode'];
			}
			
			
			if (isset($vals['sponsor'])){
				
				$this->sponsor = $vals['sponsor'];
			}
			
			
			if (isset($vals['bill_amount'])){
				
				$this->bill_amount = $vals['bill_amount'];
			}
			
			
			if (isset($vals['bill_detail_count'])){
				
				$this->bill_detail_count = $vals['bill_detail_count'];
			}
			
			
			if (isset($vals['finish_flag'])){
				
				$this->finish_flag = $vals['finish_flag'];
			}
			
			
			if (isset($vals['bill_detail_info_list'])){
				
				$this->bill_detail_info_list = $vals['bill_detail_info_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillHeaderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bill_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_no);
				
			}
			
			
			
			
			if ("channel_coop_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel_coop_mode);
				
			}
			
			
			
			
			if ("sponsor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sponsor);
				
			}
			
			
			
			
			if ("bill_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bill_amount);
				
			}
			
			
			
			
			if ("bill_detail_count" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bill_detail_count); 
				
			}
			
			
			
			
			if ("finish_flag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->finish_flag);
				
			}
			
			
			
			
			if ("bill_detail_info_list" == $schemeField){
				
				$needSkip = false;
				
				$this->bill_detail_info_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\cup\api\bill\BillDetailInfo();
						$elem0->read($input);
						
						$this->bill_detail_info_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('bill_no');
		$xfer += $output->writeString($this->bill_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channel_coop_mode');
		$xfer += $output->writeString($this->channel_coop_mode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sponsor');
		$xfer += $output->writeString($this->sponsor);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bill_amount');
		$xfer += $output->writeString($this->bill_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bill_detail_count');
		$xfer += $output->writeI32($this->bill_detail_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('finish_flag');
		$xfer += $output->writeString($this->finish_flag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bill_detail_info_list');
		
		if (!is_array($this->bill_detail_info_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->bill_detail_info_list as $iter0){
			
			
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
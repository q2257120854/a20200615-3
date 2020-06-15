<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class CustomerBackOrderTrackInfo {
	
	static $_TSPEC;
	public $erp_back_sn = null;
	public $transport_code = null;
	public $transport_detail = null;
	public $ab_reason = null;
	public $ab_remark = null;
	public $action_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'erp_back_sn'
			),
			2 => array(
			'var' => 'transport_code'
			),
			3 => array(
			'var' => 'transport_detail'
			),
			4 => array(
			'var' => 'ab_reason'
			),
			5 => array(
			'var' => 'ab_remark'
			),
			6 => array(
			'var' => 'action_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['erp_back_sn'])){
				
				$this->erp_back_sn = $vals['erp_back_sn'];
			}
			
			
			if (isset($vals['transport_code'])){
				
				$this->transport_code = $vals['transport_code'];
			}
			
			
			if (isset($vals['transport_detail'])){
				
				$this->transport_detail = $vals['transport_detail'];
			}
			
			
			if (isset($vals['ab_reason'])){
				
				$this->ab_reason = $vals['ab_reason'];
			}
			
			
			if (isset($vals['ab_remark'])){
				
				$this->ab_remark = $vals['ab_remark'];
			}
			
			
			if (isset($vals['action_time'])){
				
				$this->action_time = $vals['action_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CustomerBackOrderTrackInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("erp_back_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_back_sn);
				
			}
			
			
			
			
			if ("transport_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_code);
				
			}
			
			
			
			
			if ("transport_detail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_detail);
				
			}
			
			
			
			
			if ("ab_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ab_reason);
				
			}
			
			
			
			
			if ("ab_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ab_remark);
				
			}
			
			
			
			
			if ("action_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_time);
				
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
		
		if($this->erp_back_sn !== null) {
			
			$xfer += $output->writeFieldBegin('erp_back_sn');
			$xfer += $output->writeString($this->erp_back_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_code !== null) {
			
			$xfer += $output->writeFieldBegin('transport_code');
			$xfer += $output->writeString($this->transport_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_detail !== null) {
			
			$xfer += $output->writeFieldBegin('transport_detail');
			$xfer += $output->writeString($this->transport_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ab_reason !== null) {
			
			$xfer += $output->writeFieldBegin('ab_reason');
			$xfer += $output->writeString($this->ab_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ab_remark !== null) {
			
			$xfer += $output->writeFieldBegin('ab_remark');
			$xfer += $output->writeString($this->ab_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->action_time !== null) {
			
			$xfer += $output->writeFieldBegin('action_time');
			$xfer += $output->writeString($this->action_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class AscBrief {
	
	static $_TSPEC;
	public $order_id = null;
	public $asc_sn = null;
	public $asc_type = null;
	public $asc_time = null;
	public $asc_status = null;
	public $refund_status = null;
	public $user_remark = null;
	public $image_urls = null;
	public $open_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'asc_sn'
			),
			3 => array(
			'var' => 'asc_type'
			),
			4 => array(
			'var' => 'asc_time'
			),
			5 => array(
			'var' => 'asc_status'
			),
			6 => array(
			'var' => 'refund_status'
			),
			7 => array(
			'var' => 'user_remark'
			),
			8 => array(
			'var' => 'image_urls'
			),
			9 => array(
			'var' => 'open_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['asc_sn'])){
				
				$this->asc_sn = $vals['asc_sn'];
			}
			
			
			if (isset($vals['asc_type'])){
				
				$this->asc_type = $vals['asc_type'];
			}
			
			
			if (isset($vals['asc_time'])){
				
				$this->asc_time = $vals['asc_time'];
			}
			
			
			if (isset($vals['asc_status'])){
				
				$this->asc_status = $vals['asc_status'];
			}
			
			
			if (isset($vals['refund_status'])){
				
				$this->refund_status = $vals['refund_status'];
			}
			
			
			if (isset($vals['user_remark'])){
				
				$this->user_remark = $vals['user_remark'];
			}
			
			
			if (isset($vals['image_urls'])){
				
				$this->image_urls = $vals['image_urls'];
			}
			
			
			if (isset($vals['open_id'])){
				
				$this->open_id = $vals['open_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AscBrief';
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
			
			
			
			
			if ("asc_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asc_sn);
				
			}
			
			
			
			
			if ("asc_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->asc_type); 
				
			}
			
			
			
			
			if ("asc_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asc_time);
				
			}
			
			
			
			
			if ("asc_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->asc_status);
				
			}
			
			
			
			
			if ("refund_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refund_status);
				
			}
			
			
			
			
			if ("user_remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_remark);
				
			}
			
			
			
			
			if ("image_urls" == $schemeField){
				
				$needSkip = false;
				
				$this->image_urls = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->image_urls[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("open_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->open_id);
				
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
		
		
		if($this->asc_sn !== null) {
			
			$xfer += $output->writeFieldBegin('asc_sn');
			$xfer += $output->writeString($this->asc_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asc_type !== null) {
			
			$xfer += $output->writeFieldBegin('asc_type');
			$xfer += $output->writeByte($this->asc_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asc_time !== null) {
			
			$xfer += $output->writeFieldBegin('asc_time');
			$xfer += $output->writeString($this->asc_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asc_status !== null) {
			
			$xfer += $output->writeFieldBegin('asc_status');
			$xfer += $output->writeString($this->asc_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_status !== null) {
			
			$xfer += $output->writeFieldBegin('refund_status');
			$xfer += $output->writeString($this->refund_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_remark !== null) {
			
			$xfer += $output->writeFieldBegin('user_remark');
			$xfer += $output->writeString($this->user_remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_urls !== null) {
			
			$xfer += $output->writeFieldBegin('image_urls');
			
			if (!is_array($this->image_urls)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->image_urls as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->open_id !== null) {
			
			$xfer += $output->writeFieldBegin('open_id');
			$xfer += $output->writeString($this->open_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
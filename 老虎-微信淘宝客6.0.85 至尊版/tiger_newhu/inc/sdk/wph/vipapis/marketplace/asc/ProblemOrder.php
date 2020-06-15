<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class ProblemOrder {
	
	static $_TSPEC;
	public $wd_no = null;
	public $category_3_name = null;
	public $vis_status_str = null;
	public $is_delay_str = null;
	public $end_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wd_no'
			),
			2 => array(
			'var' => 'category_3_name'
			),
			3 => array(
			'var' => 'vis_status_str'
			),
			4 => array(
			'var' => 'is_delay_str'
			),
			5 => array(
			'var' => 'end_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wd_no'])){
				
				$this->wd_no = $vals['wd_no'];
			}
			
			
			if (isset($vals['category_3_name'])){
				
				$this->category_3_name = $vals['category_3_name'];
			}
			
			
			if (isset($vals['vis_status_str'])){
				
				$this->vis_status_str = $vals['vis_status_str'];
			}
			
			
			if (isset($vals['is_delay_str'])){
				
				$this->is_delay_str = $vals['is_delay_str'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProblemOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wd_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wd_no);
				
			}
			
			
			
			
			if ("category_3_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->category_3_name);
				
			}
			
			
			
			
			if ("vis_status_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vis_status_str);
				
			}
			
			
			
			
			if ("is_delay_str" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_delay_str);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->end_time);
				
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
		
		if($this->wd_no !== null) {
			
			$xfer += $output->writeFieldBegin('wd_no');
			$xfer += $output->writeString($this->wd_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->category_3_name !== null) {
			
			$xfer += $output->writeFieldBegin('category_3_name');
			$xfer += $output->writeString($this->category_3_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vis_status_str !== null) {
			
			$xfer += $output->writeFieldBegin('vis_status_str');
			$xfer += $output->writeString($this->vis_status_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_delay_str !== null) {
			
			$xfer += $output->writeFieldBegin('is_delay_str');
			$xfer += $output->writeString($this->is_delay_str);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_time');
			$xfer += $output->writeString($this->end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
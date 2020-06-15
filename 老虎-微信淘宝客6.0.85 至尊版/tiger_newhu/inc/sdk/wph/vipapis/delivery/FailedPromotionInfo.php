<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class FailedPromotionInfo {
	
	static $_TSPEC;
	public $promotion_type = null;
	public $promotion_type_name = null;
	public $promotion_description = null;
	public $error_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'promotion_type'
			),
			2 => array(
			'var' => 'promotion_type_name'
			),
			3 => array(
			'var' => 'promotion_description'
			),
			4 => array(
			'var' => 'error_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['promotion_type'])){
				
				$this->promotion_type = $vals['promotion_type'];
			}
			
			
			if (isset($vals['promotion_type_name'])){
				
				$this->promotion_type_name = $vals['promotion_type_name'];
			}
			
			
			if (isset($vals['promotion_description'])){
				
				$this->promotion_description = $vals['promotion_description'];
			}
			
			
			if (isset($vals['error_msg'])){
				
				$this->error_msg = $vals['error_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FailedPromotionInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("promotion_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_type);
				
			}
			
			
			
			
			if ("promotion_type_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_type_name);
				
			}
			
			
			
			
			if ("promotion_description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->promotion_description);
				
			}
			
			
			
			
			if ("error_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_msg);
				
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
		
		if($this->promotion_type !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_type');
			$xfer += $output->writeString($this->promotion_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_type_name !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_type_name');
			$xfer += $output->writeString($this->promotion_type_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->promotion_description !== null) {
			
			$xfer += $output->writeFieldBegin('promotion_description');
			$xfer += $output->writeString($this->promotion_description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->error_msg !== null) {
			
			$xfer += $output->writeFieldBegin('error_msg');
			$xfer += $output->writeString($this->error_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
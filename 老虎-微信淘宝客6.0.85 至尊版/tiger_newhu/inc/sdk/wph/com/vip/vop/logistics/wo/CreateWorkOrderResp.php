<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\wo;

class CreateWorkOrderResp {
	
	static $_TSPEC;
	public $work_order_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'work_order_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['work_order_no'])){
				
				$this->work_order_no = $vals['work_order_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateWorkOrderResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("work_order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->work_order_no);
				
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
		
		if($this->work_order_no !== null) {
			
			$xfer += $output->writeFieldBegin('work_order_no');
			$xfer += $output->writeString($this->work_order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\jingdong;

class SkuOffShelfResponse {
	
	static $_TSPEC;
	public $op_result = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'op_result'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['op_result'])){
				
				$this->op_result = $vals['op_result'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SkuOffShelfResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("op_result" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->op_result);
				
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
		
		if($this->op_result !== null) {
			
			$xfer += $output->writeFieldBegin('op_result');
			$xfer += $output->writeBool($this->op_result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
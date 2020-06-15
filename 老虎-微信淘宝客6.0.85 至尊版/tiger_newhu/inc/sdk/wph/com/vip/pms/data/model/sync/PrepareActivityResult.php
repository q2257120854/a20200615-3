<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\model\sync;

class PrepareActivityResult {
	
	static $_TSPEC;
	public $promotionObjectId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'promotionObjectId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['promotionObjectId'])){
				
				$this->promotionObjectId = $vals['promotionObjectId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrepareActivityResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("promotionObjectId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->promotionObjectId); 
				
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
		
		$xfer += $output->writeFieldBegin('promotionObjectId');
		$xfer += $output->writeI64($this->promotionObjectId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
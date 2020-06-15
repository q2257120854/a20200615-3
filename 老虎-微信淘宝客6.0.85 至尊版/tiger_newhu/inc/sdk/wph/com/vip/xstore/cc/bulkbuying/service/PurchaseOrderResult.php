<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class PurchaseOrderResult {
	
	static $_TSPEC;
	public $exportFilePath = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'exportFilePath'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['exportFilePath'])){
				
				$this->exportFilePath = $vals['exportFilePath'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PurchaseOrderResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("exportFilePath" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->exportFilePath);
				
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
		
		if($this->exportFilePath !== null) {
			
			$xfer += $output->writeFieldBegin('exportFilePath');
			$xfer += $output->writeString($this->exportFilePath);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
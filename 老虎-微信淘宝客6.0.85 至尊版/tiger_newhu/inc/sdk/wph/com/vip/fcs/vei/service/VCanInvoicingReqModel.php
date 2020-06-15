<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class VCanInvoicingReqModel {
	
	static $_TSPEC;
	public $merchandiseType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'merchandiseType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['merchandiseType'])){
				
				$this->merchandiseType = $vals['merchandiseType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VCanInvoicingReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("merchandiseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->merchandiseType);
				
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
		
		if($this->merchandiseType !== null) {
			
			$xfer += $output->writeFieldBegin('merchandiseType');
			$xfer += $output->writeString($this->merchandiseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
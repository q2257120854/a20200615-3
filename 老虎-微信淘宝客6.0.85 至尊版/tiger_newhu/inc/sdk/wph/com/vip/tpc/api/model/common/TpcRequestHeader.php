<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\tpc\api\model\common;

class TpcRequestHeader {
	
	static $_TSPEC;
	public $calledDomain = null;
	public $requestTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			3 => array(
			'var' => 'calledDomain'
			),
			2 => array(
			'var' => 'requestTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['calledDomain'])){
				
				$this->calledDomain = $vals['calledDomain'];
			}
			
			
			if (isset($vals['requestTime'])){
				
				$this->requestTime = $vals['requestTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TpcRequestHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("calledDomain" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->calledDomain);
				
			}
			
			
			
			
			if ("requestTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestTime); 
				
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
		
		if($this->calledDomain !== null) {
			
			$xfer += $output->writeFieldBegin('calledDomain');
			$xfer += $output->writeString($this->calledDomain);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('requestTime');
		$xfer += $output->writeI64($this->requestTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
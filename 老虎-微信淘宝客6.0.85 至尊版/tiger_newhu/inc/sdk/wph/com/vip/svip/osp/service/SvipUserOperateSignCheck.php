<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipUserOperateSignCheck {
	
	static $_TSPEC;
	public $appKey = null;
	public $sign = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appKey'
			),
			2 => array(
			'var' => 'sign'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appKey'])){
				
				$this->appKey = $vals['appKey'];
			}
			
			
			if (isset($vals['sign'])){
				
				$this->sign = $vals['sign'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipUserOperateSignCheck';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appKey" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appKey);
				
			}
			
			
			
			
			if ("sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sign);
				
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
		
		if($this->appKey !== null) {
			
			$xfer += $output->writeFieldBegin('appKey');
			$xfer += $output->writeString($this->appKey);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sign !== null) {
			
			$xfer += $output->writeFieldBegin('sign');
			$xfer += $output->writeString($this->sign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
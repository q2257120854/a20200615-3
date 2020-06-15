<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\lbs\lpc\service\common;

class LbsResponseHeader {
	
	static $_TSPEC;
	public $resultCode = null;
	public $resultMsg = null;
	public $hostIp = null;
	public $costTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'resultCode'
			),
			2 => array(
			'var' => 'resultMsg'
			),
			3 => array(
			'var' => 'hostIp'
			),
			4 => array(
			'var' => 'costTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['resultCode'])){
				
				$this->resultCode = $vals['resultCode'];
			}
			
			
			if (isset($vals['resultMsg'])){
				
				$this->resultMsg = $vals['resultMsg'];
			}
			
			
			if (isset($vals['hostIp'])){
				
				$this->hostIp = $vals['hostIp'];
			}
			
			
			if (isset($vals['costTime'])){
				
				$this->costTime = $vals['costTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LbsResponseHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("resultCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultCode);
				
			}
			
			
			
			
			if ("resultMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resultMsg);
				
			}
			
			
			
			
			if ("hostIp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hostIp);
				
			}
			
			
			
			
			if ("costTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->costTime);
				
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
		
		if($this->resultCode !== null) {
			
			$xfer += $output->writeFieldBegin('resultCode');
			$xfer += $output->writeString($this->resultCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultMsg !== null) {
			
			$xfer += $output->writeFieldBegin('resultMsg');
			$xfer += $output->writeString($this->resultMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hostIp !== null) {
			
			$xfer += $output->writeFieldBegin('hostIp');
			$xfer += $output->writeString($this->hostIp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->costTime !== null) {
			
			$xfer += $output->writeFieldBegin('costTime');
			$xfer += $output->writeString($this->costTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
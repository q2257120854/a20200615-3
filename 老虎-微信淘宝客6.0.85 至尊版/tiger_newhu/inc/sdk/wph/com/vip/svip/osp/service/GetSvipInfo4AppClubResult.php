<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class GetSvipInfo4AppClubResult {
	
	static $_TSPEC;
	public $limit = null;
	public $limitCode = null;
	public $limitMsg = null;
	public $userStatus = null;
	public $expireTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'limit'
			),
			2 => array(
			'var' => 'limitCode'
			),
			3 => array(
			'var' => 'limitMsg'
			),
			4 => array(
			'var' => 'userStatus'
			),
			5 => array(
			'var' => 'expireTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['limitCode'])){
				
				$this->limitCode = $vals['limitCode'];
			}
			
			
			if (isset($vals['limitMsg'])){
				
				$this->limitMsg = $vals['limitMsg'];
			}
			
			
			if (isset($vals['userStatus'])){
				
				$this->userStatus = $vals['userStatus'];
			}
			
			
			if (isset($vals['expireTime'])){
				
				$this->expireTime = $vals['expireTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetSvipInfo4AppClubResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->limit);
				
			}
			
			
			
			
			if ("limitCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limitCode); 
				
			}
			
			
			
			
			if ("limitMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->limitMsg);
				
			}
			
			
			
			
			if ("userStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->userStatus); 
				
			}
			
			
			
			
			if ("expireTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expireTime); 
				
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
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeBool($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limitCode');
		$xfer += $output->writeI32($this->limitCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limitMsg !== null) {
			
			$xfer += $output->writeFieldBegin('limitMsg');
			$xfer += $output->writeString($this->limitMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('userStatus');
		$xfer += $output->writeI32($this->userStatus);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('expireTime');
		$xfer += $output->writeI64($this->expireTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
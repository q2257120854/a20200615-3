<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\common;

class FileFid {
	
	static $_TSPEC;
	public $fid = null;
	public $isSync = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fid'
			),
			2 => array(
			'var' => 'isSync'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fid'])){
				
				$this->fid = $vals['fid'];
			}
			
			
			if (isset($vals['isSync'])){
				
				$this->isSync = $vals['isSync'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FileFid';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("fid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fid);
				
			}
			
			
			
			
			if ("isSync" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isSync);
				
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
		
		if($this->fid !== null) {
			
			$xfer += $output->writeFieldBegin('fid');
			$xfer += $output->writeString($this->fid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isSync');
		$xfer += $output->writeBool($this->isSync);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
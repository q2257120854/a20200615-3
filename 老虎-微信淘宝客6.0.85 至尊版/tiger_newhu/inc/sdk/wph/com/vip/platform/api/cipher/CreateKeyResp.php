<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\platform\api\cipher;

class CreateKeyResp {
	
	static $_TSPEC;
	public $success = null;
	public $code = null;
	public $desc = null;
	public $detailMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success'
			),
			2 => array(
			'var' => 'code'
			),
			3 => array(
			'var' => 'desc'
			),
			4 => array(
			'var' => 'detailMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['detailMsg'])){
				
				$this->detailMsg = $vals['detailMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreateKeyResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->success);
				
			}
			
			
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->code); 
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("detailMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailMsg);
				
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
		
		$xfer += $output->writeFieldBegin('success');
		$xfer += $output->writeBool($this->success);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('code');
		$xfer += $output->writeI32($this->code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('desc');
		$xfer += $output->writeString($this->desc);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->detailMsg !== null) {
			
			$xfer += $output->writeFieldBegin('detailMsg');
			$xfer += $output->writeString($this->detailMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
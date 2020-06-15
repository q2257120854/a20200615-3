<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\rfid\api;

class RfidEpcStatusResponse {
	
	static $_TSPEC;
	public $oldBarcode = null;
	public $newBarcode = null;
	public $owner = null;
	public $extCode = null;
	public $epc = null;
	public $createTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'oldBarcode'
			),
			2 => array(
			'var' => 'newBarcode'
			),
			3 => array(
			'var' => 'owner'
			),
			4 => array(
			'var' => 'extCode'
			),
			5 => array(
			'var' => 'epc'
			),
			6 => array(
			'var' => 'createTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['oldBarcode'])){
				
				$this->oldBarcode = $vals['oldBarcode'];
			}
			
			
			if (isset($vals['newBarcode'])){
				
				$this->newBarcode = $vals['newBarcode'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
			if (isset($vals['extCode'])){
				
				$this->extCode = $vals['extCode'];
			}
			
			
			if (isset($vals['epc'])){
				
				$this->epc = $vals['epc'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RfidEpcStatusResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("oldBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oldBarcode);
				
			}
			
			
			
			
			if ("newBarcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newBarcode);
				
			}
			
			
			
			
			if ("owner" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->owner);
				
			}
			
			
			
			
			if ("extCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extCode);
				
			}
			
			
			
			
			if ("epc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->epc);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
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
		
		$xfer += $output->writeFieldBegin('oldBarcode');
		$xfer += $output->writeString($this->oldBarcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('newBarcode');
		$xfer += $output->writeString($this->newBarcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('owner');
		$xfer += $output->writeString($this->owner);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('extCode');
		$xfer += $output->writeString($this->extCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('epc');
		$xfer += $output->writeString($this->epc);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createTime');
		$xfer += $output->writeI64($this->createTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
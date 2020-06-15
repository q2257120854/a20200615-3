<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\rfid\api;

class RfidEpcDetailModel {
	
	static $_TSPEC;
	public $epc = null;
	public $cazeNo = null;
	public $barcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'epc'
			),
			2 => array(
			'var' => 'cazeNo'
			),
			3 => array(
			'var' => 'barcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['epc'])){
				
				$this->epc = $vals['epc'];
			}
			
			
			if (isset($vals['cazeNo'])){
				
				$this->cazeNo = $vals['cazeNo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RfidEpcDetailModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("epc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->epc);
				
			}
			
			
			
			
			if ("cazeNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cazeNo);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
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
		
		$xfer += $output->writeFieldBegin('epc');
		$xfer += $output->writeString($this->epc);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cazeNo');
		$xfer += $output->writeString($this->cazeNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
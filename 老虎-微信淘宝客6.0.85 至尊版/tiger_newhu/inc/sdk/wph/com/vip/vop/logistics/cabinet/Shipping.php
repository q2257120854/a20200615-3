<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\cabinet;

class Shipping {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $outer_carrier_code = null;
	public $logistics_no = null;
	public $linkman = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'outer_carrier_code'
			),
			3 => array(
			'var' => 'logistics_no'
			),
			4 => array(
			'var' => 'linkman'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['outer_carrier_code'])){
				
				$this->outer_carrier_code = $vals['outer_carrier_code'];
			}
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['linkman'])){
				
				$this->linkman = $vals['linkman'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Shipping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("outer_carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_carrier_code);
				
			}
			
			
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("linkman" == $schemeField){
				
				$needSkip = false;
				
				$this->linkman = new \com\vip\vop\logistics\Linkman();
				$this->linkman->read($input);
				
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
		
		if($this->carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_code');
			$xfer += $output->writeString($this->carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outer_carrier_code !== null) {
			
			$xfer += $output->writeFieldBegin('outer_carrier_code');
			$xfer += $output->writeString($this->outer_carrier_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('logistics_no');
			$xfer += $output->writeString($this->logistics_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkman !== null) {
			
			$xfer += $output->writeFieldBegin('linkman');
			
			if (!is_object($this->linkman)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->linkman->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class ShipResult {
	
	static $_TSPEC;
	public $ship = null;
	public $result_desc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ship'
			),
			2 => array(
			'var' => 'result_desc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ship'])){
				
				$this->ship = $vals['ship'];
			}
			
			
			if (isset($vals['result_desc'])){
				
				$this->result_desc = $vals['result_desc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ship" == $schemeField){
				
				$needSkip = false;
				
				$this->ship = new \vipapis\marketplace\delivery\ShipInfo();
				$this->ship->read($input);
				
			}
			
			
			
			
			if ("result_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->result_desc);
				
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
		
		if($this->ship !== null) {
			
			$xfer += $output->writeFieldBegin('ship');
			
			if (!is_object($this->ship)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->ship->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->result_desc !== null) {
			
			$xfer += $output->writeFieldBegin('result_desc');
			$xfer += $output->writeString($this->result_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
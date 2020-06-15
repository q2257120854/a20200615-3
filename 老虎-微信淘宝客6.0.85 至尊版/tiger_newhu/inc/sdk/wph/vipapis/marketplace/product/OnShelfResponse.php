<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class OnShelfResponse {
	
	static $_TSPEC;
	public $modify_time = null;
	public $op_results = null;
	public $shelf_results = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'modify_time'
			),
			2 => array(
			'var' => 'op_results'
			),
			3 => array(
			'var' => 'shelf_results'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['modify_time'])){
				
				$this->modify_time = $vals['modify_time'];
			}
			
			
			if (isset($vals['op_results'])){
				
				$this->op_results = $vals['op_results'];
			}
			
			
			if (isset($vals['shelf_results'])){
				
				$this->shelf_results = $vals['shelf_results'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OnShelfResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("modify_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->modify_time);
				
			}
			
			
			
			
			if ("op_results" == $schemeField){
				
				$needSkip = false;
				
				$this->op_results = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = false;
						$input->readBool($val0);
						
						$this->op_results[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("shelf_results" == $schemeField){
				
				$needSkip = false;
				
				$this->shelf_results = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = null;
						
						$val1 = new \vipapis\marketplace\product\ShelfResult();
						$val1->read($input);
						
						$this->shelf_results[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->modify_time !== null) {
			
			$xfer += $output->writeFieldBegin('modify_time');
			$xfer += $output->writeString($this->modify_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->op_results !== null) {
			
			$xfer += $output->writeFieldBegin('op_results');
			
			if (!is_array($this->op_results)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->op_results as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeBool($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shelf_results !== null) {
			
			$xfer += $output->writeFieldBegin('shelf_results');
			
			if (!is_array($this->shelf_results)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->shelf_results as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
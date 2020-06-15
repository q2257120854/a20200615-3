<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class ShipResponse {
	
	static $_TSPEC;
	public $success_num = null;
	public $success_data = null;
	public $fail_num = null;
	public $fail_data = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success_num'
			),
			2 => array(
			'var' => 'success_data'
			),
			3 => array(
			'var' => 'fail_num'
			),
			4 => array(
			'var' => 'fail_data'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success_num'])){
				
				$this->success_num = $vals['success_num'];
			}
			
			
			if (isset($vals['success_data'])){
				
				$this->success_data = $vals['success_data'];
			}
			
			
			if (isset($vals['fail_num'])){
				
				$this->fail_num = $vals['fail_num'];
			}
			
			
			if (isset($vals['fail_data'])){
				
				$this->fail_data = $vals['fail_data'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->success_num); 
				
			}
			
			
			
			
			if ("success_data" == $schemeField){
				
				$needSkip = false;
				
				$this->success_data = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\delivery\ShipResult();
						$elem0->read($input);
						
						$this->success_data[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("fail_num" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->fail_num); 
				
			}
			
			
			
			
			if ("fail_data" == $schemeField){
				
				$needSkip = false;
				
				$this->fail_data = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\marketplace\delivery\ShipResult();
						$elem1->read($input);
						
						$this->fail_data[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->success_num !== null) {
			
			$xfer += $output->writeFieldBegin('success_num');
			$xfer += $output->writeI32($this->success_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->success_data !== null) {
			
			$xfer += $output->writeFieldBegin('success_data');
			
			if (!is_array($this->success_data)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success_data as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fail_num !== null) {
			
			$xfer += $output->writeFieldBegin('fail_num');
			$xfer += $output->writeI32($this->fail_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fail_data !== null) {
			
			$xfer += $output->writeFieldBegin('fail_data');
			
			if (!is_array($this->fail_data)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->fail_data as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
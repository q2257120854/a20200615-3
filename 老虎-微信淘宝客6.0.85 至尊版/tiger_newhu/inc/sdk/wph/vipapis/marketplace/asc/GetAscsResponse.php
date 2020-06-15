<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class GetAscsResponse {
	
	static $_TSPEC;
	public $ascs = null;
	public $has_next = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'ascs'
			),
			2 => array(
			'var' => 'has_next'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['ascs'])){
				
				$this->ascs = $vals['ascs'];
			}
			
			
			if (isset($vals['has_next'])){
				
				$this->has_next = $vals['has_next'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetAscsResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("ascs" == $schemeField){
				
				$needSkip = false;
				
				$this->ascs = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\marketplace\asc\Asc();
						$elem1->read($input);
						
						$this->ascs[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("has_next" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->has_next);
				
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
		
		if($this->ascs !== null) {
			
			$xfer += $output->writeFieldBegin('ascs');
			
			if (!is_array($this->ascs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ascs as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->has_next !== null) {
			
			$xfer += $output->writeFieldBegin('has_next');
			$xfer += $output->writeBool($this->has_next);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
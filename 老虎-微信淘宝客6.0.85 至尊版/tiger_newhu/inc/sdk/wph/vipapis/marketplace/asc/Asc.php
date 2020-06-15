<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class Asc {
	
	static $_TSPEC;
	public $asc_brief = null;
	public $problem_order_sns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'asc_brief'
			),
			2 => array(
			'var' => 'problem_order_sns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['asc_brief'])){
				
				$this->asc_brief = $vals['asc_brief'];
			}
			
			
			if (isset($vals['problem_order_sns'])){
				
				$this->problem_order_sns = $vals['problem_order_sns'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Asc';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("asc_brief" == $schemeField){
				
				$needSkip = false;
				
				$this->asc_brief = new \vipapis\marketplace\asc\AscBrief();
				$this->asc_brief->read($input);
				
			}
			
			
			
			
			if ("problem_order_sns" == $schemeField){
				
				$needSkip = false;
				
				$this->problem_order_sns = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->problem_order_sns[$_size0++] = $elem0;
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
		
		if($this->asc_brief !== null) {
			
			$xfer += $output->writeFieldBegin('asc_brief');
			
			if (!is_object($this->asc_brief)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->asc_brief->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problem_order_sns !== null) {
			
			$xfer += $output->writeFieldBegin('problem_order_sns');
			
			if (!is_array($this->problem_order_sns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->problem_order_sns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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
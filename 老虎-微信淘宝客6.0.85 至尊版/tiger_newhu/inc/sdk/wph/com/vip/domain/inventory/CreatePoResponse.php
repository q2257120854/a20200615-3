<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\inventory;

class CreatePoResponse {
	
	static $_TSPEC;
	public $opResult = null;
	public $systemPoNo = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'opResult'
			),
			2 => array(
			'var' => 'systemPoNo'
			),
			3 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['opResult'])){
				
				$this->opResult = $vals['opResult'];
			}
			
			
			if (isset($vals['systemPoNo'])){
				
				$this->systemPoNo = $vals['systemPoNo'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CreatePoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("opResult" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\domain\inventory\PoResult::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->opResult = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("systemPoNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->systemPoNo);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		$xfer += $output->writeFieldBegin('opResult');
		
		$em = new \com\vip\domain\inventory\PoResult; 
		$output->writeString($em::$__names[$this->opResult]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->systemPoNo !== null) {
			
			$xfer += $output->writeFieldBegin('systemPoNo');
			$xfer += $output->writeString($this->systemPoNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\carrier\service;

class GetPackageTimeVo {
	
	static $_TSPEC;
	public $dateStr = null;
	public $hourOptionList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'dateStr'
			),
			2 => array(
			'var' => 'hourOptionList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dateStr'])){
				
				$this->dateStr = $vals['dateStr'];
			}
			
			
			if (isset($vals['hourOptionList'])){
				
				$this->hourOptionList = $vals['hourOptionList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetPackageTimeVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dateStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dateStr);
				
			}
			
			
			
			
			if ("hourOptionList" == $schemeField){
				
				$needSkip = false;
				
				$this->hourOptionList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->hourOptionList[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('dateStr');
		$xfer += $output->writeString($this->dateStr);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hourOptionList');
		
		if (!is_array($this->hourOptionList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->hourOptionList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
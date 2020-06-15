<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class PrintTemplateResponse {
	
	static $_TSPEC;
	public $partOrderLists = null;
	public $allPrintHtml = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'partOrderLists'
			),
			2 => array(
			'var' => 'allPrintHtml'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['partOrderLists'])){
				
				$this->partOrderLists = $vals['partOrderLists'];
			}
			
			
			if (isset($vals['allPrintHtml'])){
				
				$this->allPrintHtml = $vals['allPrintHtml'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintTemplateResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("partOrderLists" == $schemeField){
				
				$needSkip = false;
				
				$this->partOrderLists = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->partOrderLists[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("allPrintHtml" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->allPrintHtml);
				
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
		
		$xfer += $output->writeFieldBegin('partOrderLists');
		
		if (!is_array($this->partOrderLists)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->partOrderLists as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('allPrintHtml');
		$xfer += $output->writeString($this->allPrintHtml);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
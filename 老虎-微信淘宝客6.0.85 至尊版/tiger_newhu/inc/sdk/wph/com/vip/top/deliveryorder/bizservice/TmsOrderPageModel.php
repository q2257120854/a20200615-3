<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class TmsOrderPageModel {
	
	static $_TSPEC;
	public $tmsOrderUnionModels = null;
	public $totalRecord = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tmsOrderUnionModels'
			),
			2 => array(
			'var' => 'totalRecord'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tmsOrderUnionModels'])){
				
				$this->tmsOrderUnionModels = $vals['tmsOrderUnionModels'];
			}
			
			
			if (isset($vals['totalRecord'])){
				
				$this->totalRecord = $vals['totalRecord'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TmsOrderPageModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tmsOrderUnionModels" == $schemeField){
				
				$needSkip = false;
				
				$this->tmsOrderUnionModels = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\top\deliveryorder\service\TmsOrderUnionModel();
						$elem0->read($input);
						
						$this->tmsOrderUnionModels[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("totalRecord" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalRecord); 
				
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
		
		if($this->tmsOrderUnionModels !== null) {
			
			$xfer += $output->writeFieldBegin('tmsOrderUnionModels');
			
			if (!is_array($this->tmsOrderUnionModels)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tmsOrderUnionModels as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalRecord !== null) {
			
			$xfer += $output->writeFieldBegin('totalRecord');
			$xfer += $output->writeI32($this->totalRecord);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
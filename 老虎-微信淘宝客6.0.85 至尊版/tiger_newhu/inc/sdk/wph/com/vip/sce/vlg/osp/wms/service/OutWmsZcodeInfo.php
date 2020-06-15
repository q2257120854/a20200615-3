<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\sce\vlg\osp\wms\service;

class OutWmsZcodeInfo {
	
	static $_TSPEC;
	public $BATCH_NUM = null;
	public $APP_NUM = null;
	public $AMOUNT = null;
	public $detail = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'BATCH_NUM'
			),
			2 => array(
			'var' => 'APP_NUM'
			),
			3 => array(
			'var' => 'AMOUNT'
			),
			4 => array(
			'var' => 'detail'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['BATCH_NUM'])){
				
				$this->BATCH_NUM = $vals['BATCH_NUM'];
			}
			
			
			if (isset($vals['APP_NUM'])){
				
				$this->APP_NUM = $vals['APP_NUM'];
			}
			
			
			if (isset($vals['AMOUNT'])){
				
				$this->AMOUNT = $vals['AMOUNT'];
			}
			
			
			if (isset($vals['detail'])){
				
				$this->detail = $vals['detail'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutWmsZcodeInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("BATCH_NUM" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->BATCH_NUM);
				
			}
			
			
			
			
			if ("APP_NUM" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->APP_NUM);
				
			}
			
			
			
			
			if ("AMOUNT" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->AMOUNT); 
				
			}
			
			
			
			
			if ("detail" == $schemeField){
				
				$needSkip = false;
				
				$this->detail = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\sce\vlg\osp\wms\service\OutWmsZcodeDatailInfo();
						$elem0->read($input);
						
						$this->detail[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('BATCH_NUM');
		$xfer += $output->writeString($this->BATCH_NUM);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('APP_NUM');
		$xfer += $output->writeString($this->APP_NUM);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('AMOUNT');
		$xfer += $output->writeI32($this->AMOUNT);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('detail');
		
		if (!is_array($this->detail)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->detail as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
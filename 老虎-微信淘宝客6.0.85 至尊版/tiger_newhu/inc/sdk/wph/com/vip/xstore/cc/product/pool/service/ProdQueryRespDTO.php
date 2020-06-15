<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\product\pool\service;

class ProdQueryRespDTO {
	
	static $_TSPEC;
	public $businessType = null;
	public $prodPoolSkus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'businessType'
			),
			2 => array(
			'var' => 'prodPoolSkus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['businessType'])){
				
				$this->businessType = $vals['businessType'];
			}
			
			
			if (isset($vals['prodPoolSkus'])){
				
				$this->prodPoolSkus = $vals['prodPoolSkus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProdQueryRespDTO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("businessType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->businessType); 
				
			}
			
			
			
			
			if ("prodPoolSkus" == $schemeField){
				
				$needSkip = false;
				
				$this->prodPoolSkus = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\cc\product\pool\service\ProdPoolSkuModel();
						$elem0->read($input);
						
						$this->prodPoolSkus[$_size0++] = $elem0;
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
		
		if($this->businessType !== null) {
			
			$xfer += $output->writeFieldBegin('businessType');
			$xfer += $output->writeI32($this->businessType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prodPoolSkus !== null) {
			
			$xfer += $output->writeFieldBegin('prodPoolSkus');
			
			if (!is_array($this->prodPoolSkus)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->prodPoolSkus as $iter0){
				
				
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
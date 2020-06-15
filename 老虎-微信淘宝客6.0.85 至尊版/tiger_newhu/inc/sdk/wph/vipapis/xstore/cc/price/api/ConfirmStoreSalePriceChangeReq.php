<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\price\api;

class ConfirmStoreSalePriceChangeReq {
	
	static $_TSPEC;
	public $store_code = null;
	public $sale_price_change_nos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'store_code'
			),
			2 => array(
			'var' => 'sale_price_change_nos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['store_code'])){
				
				$this->store_code = $vals['store_code'];
			}
			
			
			if (isset($vals['sale_price_change_nos'])){
				
				$this->sale_price_change_nos = $vals['sale_price_change_nos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmStoreSalePriceChangeReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("store_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->store_code);
				
			}
			
			
			
			
			if ("sale_price_change_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->sale_price_change_nos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->sale_price_change_nos[$_size0++] = $elem0;
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
		
		if($this->store_code !== null) {
			
			$xfer += $output->writeFieldBegin('store_code');
			$xfer += $output->writeString($this->store_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sale_price_change_nos');
		
		if (!is_array($this->sale_price_change_nos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->sale_price_change_nos as $iter0){
			
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
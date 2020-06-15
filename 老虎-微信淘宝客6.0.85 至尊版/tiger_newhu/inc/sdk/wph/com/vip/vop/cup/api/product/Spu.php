<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class Spu {
	
	static $_TSPEC;
	public $prod_spu_id = null;
	public $spu_status = null;
	public $prod_sku_list = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'prod_spu_id'
			),
			2 => array(
			'var' => 'spu_status'
			),
			3 => array(
			'var' => 'prod_sku_list'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['prod_spu_id'])){
				
				$this->prod_spu_id = $vals['prod_spu_id'];
			}
			
			
			if (isset($vals['spu_status'])){
				
				$this->spu_status = $vals['spu_status'];
			}
			
			
			if (isset($vals['prod_sku_list'])){
				
				$this->prod_sku_list = $vals['prod_sku_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Spu';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("prod_spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->prod_spu_id);
				
			}
			
			
			
			
			if ("spu_status" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->spu_status);
				
			}
			
			
			
			
			if ("prod_sku_list" == $schemeField){
				
				$needSkip = false;
				
				$this->prod_sku_list = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vop\cup\api\product\ProdSkuInfo();
						$elem1->read($input);
						
						$this->prod_sku_list[$_size1++] = $elem1;
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
		
		if($this->prod_spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('prod_spu_id');
			$xfer += $output->writeString($this->prod_spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->spu_status !== null) {
			
			$xfer += $output->writeFieldBegin('spu_status');
			$xfer += $output->writeBool($this->spu_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prod_sku_list !== null) {
			
			$xfer += $output->writeFieldBegin('prod_sku_list');
			
			if (!is_array($this->prod_sku_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->prod_sku_list as $iter0){
				
				
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
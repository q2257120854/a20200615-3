<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class AddProductResponse {
	
	static $_TSPEC;
	public $spu_id = null;
	public $success_skus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_id'
			),
			2 => array(
			'var' => 'success_skus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_id'])){
				
				$this->spu_id = $vals['spu_id'];
			}
			
			
			if (isset($vals['success_skus'])){
				
				$this->success_skus = $vals['success_skus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AddProductResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spu_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->spu_id);
				
			}
			
			
			
			
			if ("success_skus" == $schemeField){
				
				$needSkip = false;
				
				$this->success_skus = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\product\SuccessSku();
						$elem0->read($input);
						
						$this->success_skus[$_size0++] = $elem0;
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
		
		if($this->spu_id !== null) {
			
			$xfer += $output->writeFieldBegin('spu_id');
			$xfer += $output->writeString($this->spu_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->success_skus !== null) {
			
			$xfer += $output->writeFieldBegin('success_skus');
			
			if (!is_array($this->success_skus)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success_skus as $iter0){
				
				
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
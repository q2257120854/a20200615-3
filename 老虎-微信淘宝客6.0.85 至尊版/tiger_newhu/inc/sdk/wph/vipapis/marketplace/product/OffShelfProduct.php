<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\product;

class OffShelfProduct {
	
	static $_TSPEC;
	public $spu_ids = null;
	public $off_shelf_reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'spu_ids'
			),
			2 => array(
			'var' => 'off_shelf_reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['spu_ids'])){
				
				$this->spu_ids = $vals['spu_ids'];
			}
			
			
			if (isset($vals['off_shelf_reason'])){
				
				$this->off_shelf_reason = $vals['off_shelf_reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OffShelfProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("spu_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->spu_ids = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->spu_ids[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("off_shelf_reason" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->off_shelf_reason); 
				
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
		
		$xfer += $output->writeFieldBegin('spu_ids');
		
		if (!is_array($this->spu_ids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->spu_ids as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('off_shelf_reason');
		$xfer += $output->writeI32($this->off_shelf_reason);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\stock;

class FreezeTransIdAndInventoryType {
	
	static $_TSPEC;
	public $frozen_trans_id = null;
	public $inventory_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'frozen_trans_id'
			),
			2 => array(
			'var' => 'inventory_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['frozen_trans_id'])){
				
				$this->frozen_trans_id = $vals['frozen_trans_id'];
			}
			
			
			if (isset($vals['inventory_type'])){
				
				$this->inventory_type = $vals['inventory_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FreezeTransIdAndInventoryType';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("frozen_trans_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->frozen_trans_id); 
				
			}
			
			
			
			
			if ("inventory_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->inventory_type); 
				
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
		
		$xfer += $output->writeFieldBegin('frozen_trans_id');
		$xfer += $output->writeI32($this->frozen_trans_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('inventory_type');
		$xfer += $output->writeI32($this->inventory_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
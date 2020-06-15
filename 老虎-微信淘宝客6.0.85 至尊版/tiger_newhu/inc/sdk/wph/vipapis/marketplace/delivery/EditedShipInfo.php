<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class EditedShipInfo {
	
	static $_TSPEC;
	public $order_id = null;
	public $carrier_code = null;
	public $carrier_name = null;
	public $package_type = null;
	public $create_by = null;
	public $edited_packages = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'carrier_code'
			),
			3 => array(
			'var' => 'carrier_name'
			),
			4 => array(
			'var' => 'package_type'
			),
			5 => array(
			'var' => 'create_by'
			),
			6 => array(
			'var' => 'edited_packages'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['package_type'])){
				
				$this->package_type = $vals['package_type'];
			}
			
			
			if (isset($vals['create_by'])){
				
				$this->create_by = $vals['create_by'];
			}
			
			
			if (isset($vals['edited_packages'])){
				
				$this->edited_packages = $vals['edited_packages'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EditedShipInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_id);
				
			}
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("package_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->package_type); 
				
			}
			
			
			
			
			if ("create_by" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_by);
				
			}
			
			
			
			
			if ("edited_packages" == $schemeField){
				
				$needSkip = false;
				
				$this->edited_packages = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\delivery\EditedPackage();
						$elem0->read($input);
						
						$this->edited_packages[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('order_id');
		$xfer += $output->writeString($this->order_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_name');
		$xfer += $output->writeString($this->carrier_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('package_type');
		$xfer += $output->writeI32($this->package_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->create_by !== null) {
			
			$xfer += $output->writeFieldBegin('create_by');
			$xfer += $output->writeString($this->create_by);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('edited_packages');
		
		if (!is_array($this->edited_packages)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->edited_packages as $iter0){
			
			
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
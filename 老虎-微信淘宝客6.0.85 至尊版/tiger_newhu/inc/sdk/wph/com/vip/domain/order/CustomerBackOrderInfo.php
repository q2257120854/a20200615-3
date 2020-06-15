<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\domain\order;

class CustomerBackOrderInfo {
	
	static $_TSPEC;
	public $transaction_id = null;
	public $erp_order_sn = null;
	public $create_user = null;
	public $update_date = null;
	public $itemList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'transaction_id'
			),
			2 => array(
			'var' => 'erp_order_sn'
			),
			3 => array(
			'var' => 'create_user'
			),
			4 => array(
			'var' => 'update_date'
			),
			5 => array(
			'var' => 'itemList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transaction_id'])){
				
				$this->transaction_id = $vals['transaction_id'];
			}
			
			
			if (isset($vals['erp_order_sn'])){
				
				$this->erp_order_sn = $vals['erp_order_sn'];
			}
			
			
			if (isset($vals['create_user'])){
				
				$this->create_user = $vals['create_user'];
			}
			
			
			if (isset($vals['update_date'])){
				
				$this->update_date = $vals['update_date'];
			}
			
			
			if (isset($vals['itemList'])){
				
				$this->itemList = $vals['itemList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CustomerBackOrderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transaction_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transaction_id);
				
			}
			
			
			
			
			if ("erp_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->erp_order_sn);
				
			}
			
			
			
			
			if ("create_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_user);
				
			}
			
			
			
			
			if ("update_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_date);
				
			}
			
			
			
			
			if ("itemList" == $schemeField){
				
				$needSkip = false;
				
				$this->itemList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\domain\order\CustomerBackOrderItemInfo();
						$elem0->read($input);
						
						$this->itemList[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('transaction_id');
		$xfer += $output->writeString($this->transaction_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('erp_order_sn');
		$xfer += $output->writeString($this->erp_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_user');
		$xfer += $output->writeString($this->create_user);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('update_date');
		$xfer += $output->writeString($this->update_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('itemList');
		
		if (!is_array($this->itemList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->itemList as $iter0){
			
			
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
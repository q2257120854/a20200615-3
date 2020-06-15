<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\asc;

class GetAscInfoResponse {
	
	static $_TSPEC;
	public $asc_brief = null;
	public $return_reason = null;
	public $remark = null;
	public $transport_info = null;
	public $refund_info = null;
	public $asc_products = null;
	public $package_tabs = null;
	public $problem_orders = null;
	public $return_warehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'asc_brief'
			),
			2 => array(
			'var' => 'return_reason'
			),
			3 => array(
			'var' => 'remark'
			),
			4 => array(
			'var' => 'transport_info'
			),
			5 => array(
			'var' => 'refund_info'
			),
			6 => array(
			'var' => 'asc_products'
			),
			7 => array(
			'var' => 'package_tabs'
			),
			8 => array(
			'var' => 'problem_orders'
			),
			9 => array(
			'var' => 'return_warehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['asc_brief'])){
				
				$this->asc_brief = $vals['asc_brief'];
			}
			
			
			if (isset($vals['return_reason'])){
				
				$this->return_reason = $vals['return_reason'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['transport_info'])){
				
				$this->transport_info = $vals['transport_info'];
			}
			
			
			if (isset($vals['refund_info'])){
				
				$this->refund_info = $vals['refund_info'];
			}
			
			
			if (isset($vals['asc_products'])){
				
				$this->asc_products = $vals['asc_products'];
			}
			
			
			if (isset($vals['package_tabs'])){
				
				$this->package_tabs = $vals['package_tabs'];
			}
			
			
			if (isset($vals['problem_orders'])){
				
				$this->problem_orders = $vals['problem_orders'];
			}
			
			
			if (isset($vals['return_warehouse'])){
				
				$this->return_warehouse = $vals['return_warehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetAscInfoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("asc_brief" == $schemeField){
				
				$needSkip = false;
				
				$this->asc_brief = new \vipapis\marketplace\asc\AscBrief();
				$this->asc_brief->read($input);
				
			}
			
			
			
			
			if ("return_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_reason);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("transport_info" == $schemeField){
				
				$needSkip = false;
				
				$this->transport_info = new \vipapis\marketplace\asc\TransportInfo();
				$this->transport_info->read($input);
				
			}
			
			
			
			
			if ("refund_info" == $schemeField){
				
				$needSkip = false;
				
				$this->refund_info = new \vipapis\marketplace\asc\RefundInfo();
				$this->refund_info->read($input);
				
			}
			
			
			
			
			if ("asc_products" == $schemeField){
				
				$needSkip = false;
				
				$this->asc_products = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\marketplace\asc\AscProduct();
						$elem0->read($input);
						
						$this->asc_products[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("package_tabs" == $schemeField){
				
				$needSkip = false;
				
				$this->package_tabs = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->package_tabs[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("problem_orders" == $schemeField){
				
				$needSkip = false;
				
				$this->problem_orders = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\marketplace\asc\ProblemOrder();
						$elem2->read($input);
						
						$this->problem_orders[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("return_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_warehouse);
				
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
		
		$xfer += $output->writeFieldBegin('asc_brief');
		
		if (!is_object($this->asc_brief)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->asc_brief->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->return_reason !== null) {
			
			$xfer += $output->writeFieldBegin('return_reason');
			$xfer += $output->writeString($this->return_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_info !== null) {
			
			$xfer += $output->writeFieldBegin('transport_info');
			
			if (!is_object($this->transport_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->transport_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refund_info !== null) {
			
			$xfer += $output->writeFieldBegin('refund_info');
			
			if (!is_object($this->refund_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->refund_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->asc_products !== null) {
			
			$xfer += $output->writeFieldBegin('asc_products');
			
			if (!is_array($this->asc_products)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->asc_products as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->package_tabs !== null) {
			
			$xfer += $output->writeFieldBegin('package_tabs');
			
			if (!is_array($this->package_tabs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->package_tabs as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problem_orders !== null) {
			
			$xfer += $output->writeFieldBegin('problem_orders');
			
			if (!is_array($this->problem_orders)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->problem_orders as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('return_warehouse');
			$xfer += $output->writeString($this->return_warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\order;

class OrderInvoiceReq {
	
	static $_TSPEC;
	public $order_id = null;
	public $invoice_type = null;
	public $e_invoice = null;
	public $paper_invoice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_id'
			),
			2 => array(
			'var' => 'invoice_type'
			),
			3 => array(
			'var' => 'e_invoice'
			),
			4 => array(
			'var' => 'paper_invoice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_id'])){
				
				$this->order_id = $vals['order_id'];
			}
			
			
			if (isset($vals['invoice_type'])){
				
				$this->invoice_type = $vals['invoice_type'];
			}
			
			
			if (isset($vals['e_invoice'])){
				
				$this->e_invoice = $vals['e_invoice'];
			}
			
			
			if (isset($vals['paper_invoice'])){
				
				$this->paper_invoice = $vals['paper_invoice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInvoiceReq';
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
			
			
			
			
			if ("invoice_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoice_type); 
				
			}
			
			
			
			
			if ("e_invoice" == $schemeField){
				
				$needSkip = false;
				
				$this->e_invoice = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\order\Einvoice();
						$elem0->read($input);
						
						$this->e_invoice[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("paper_invoice" == $schemeField){
				
				$needSkip = false;
				
				$this->paper_invoice = new \vipapis\order\PaperInvoice();
				$this->paper_invoice->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('invoice_type');
		$xfer += $output->writeI32($this->invoice_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->e_invoice !== null) {
			
			$xfer += $output->writeFieldBegin('e_invoice');
			
			if (!is_array($this->e_invoice)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->e_invoice as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paper_invoice !== null) {
			
			$xfer += $output->writeFieldBegin('paper_invoice');
			
			if (!is_object($this->paper_invoice)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->paper_invoice->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
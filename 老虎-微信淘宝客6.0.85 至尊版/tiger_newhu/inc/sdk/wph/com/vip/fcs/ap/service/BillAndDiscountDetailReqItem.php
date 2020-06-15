<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class BillAndDiscountDetailReqItem {
	
	static $_TSPEC;
	public $pager = null;
	public $vendorCode = null;
	public $po = null;
	public $stQueryTime = null;
	public $etQueryTime = null;
	public $billNumber = null;
	public $billStatusFlag = null;
	public $headerIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pager'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'po'
			),
			4 => array(
			'var' => 'stQueryTime'
			),
			5 => array(
			'var' => 'etQueryTime'
			),
			50 => array(
			'var' => 'billNumber'
			),
			51 => array(
			'var' => 'billStatusFlag'
			),
			52 => array(
			'var' => 'headerIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pager'])){
				
				$this->pager = $vals['pager'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['stQueryTime'])){
				
				$this->stQueryTime = $vals['stQueryTime'];
			}
			
			
			if (isset($vals['etQueryTime'])){
				
				$this->etQueryTime = $vals['etQueryTime'];
			}
			
			
			if (isset($vals['billNumber'])){
				
				$this->billNumber = $vals['billNumber'];
			}
			
			
			if (isset($vals['billStatusFlag'])){
				
				$this->billStatusFlag = $vals['billStatusFlag'];
			}
			
			
			if (isset($vals['headerIds'])){
				
				$this->headerIds = $vals['headerIds'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillAndDiscountDetailReqItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pager" == $schemeField){
				
				$needSkip = false;
				
				$this->pager = new \com\vip\fcs\ap\service\Pager();
				$this->pager->read($input);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("stQueryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->stQueryTime);
				
			}
			
			
			
			
			if ("etQueryTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->etQueryTime);
				
			}
			
			
			
			
			if ("billNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNumber);
				
			}
			
			
			
			
			if ("billStatusFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billStatusFlag);
				
			}
			
			
			
			
			if ("headerIds" == $schemeField){
				
				$needSkip = false;
				
				$this->headerIds = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI64($elem0); 
						
						$this->headerIds[$_size0++] = $elem0;
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
		
		if($this->pager !== null) {
			
			$xfer += $output->writeFieldBegin('pager');
			
			if (!is_object($this->pager)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pager->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('stQueryTime');
		$xfer += $output->writeI64($this->stQueryTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('etQueryTime');
		$xfer += $output->writeI64($this->etQueryTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->billNumber !== null) {
			
			$xfer += $output->writeFieldBegin('billNumber');
			$xfer += $output->writeString($this->billNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billStatusFlag !== null) {
			
			$xfer += $output->writeFieldBegin('billStatusFlag');
			$xfer += $output->writeString($this->billStatusFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->headerIds !== null) {
			
			$xfer += $output->writeFieldBegin('headerIds');
			
			if (!is_array($this->headerIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->headerIds as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
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
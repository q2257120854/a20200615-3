<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class ProtContractDetailQueryParams {
	
	static $_TSPEC;
	public $pager = null;
	public $protContractDetailQueryParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pager'
			),
			2 => array(
			'var' => 'protContractDetailQueryParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pager'])){
				
				$this->pager = $vals['pager'];
			}
			
			
			if (isset($vals['protContractDetailQueryParam'])){
				
				$this->protContractDetailQueryParam = $vals['protContractDetailQueryParam'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ProtContractDetailQueryParams';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pager" == $schemeField){
				
				$needSkip = false;
				
				$this->pager = new \com\vip\api\promotion\vis\common\Pager();
				$this->pager->read($input);
				
			}
			
			
			
			
			if ("protContractDetailQueryParam" == $schemeField){
				
				$needSkip = false;
				
				$this->protContractDetailQueryParam = new \com\vip\api\promotion\vis\protcontract\service\ProtContractDetailQueryParam();
				$this->protContractDetailQueryParam->read($input);
				
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
		
		
		if($this->protContractDetailQueryParam !== null) {
			
			$xfer += $output->writeFieldBegin('protContractDetailQueryParam');
			
			if (!is_object($this->protContractDetailQueryParam)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->protContractDetailQueryParam->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
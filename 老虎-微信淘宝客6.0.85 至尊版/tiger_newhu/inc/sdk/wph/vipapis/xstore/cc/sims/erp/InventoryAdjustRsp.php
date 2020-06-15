<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\xstore\cc\sims\erp;

class InventoryAdjustRsp {
	
	static $_TSPEC;
	public $seqNo = null;
	public $resCode = null;
	public $msg = null;
	public $poMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seqNo'
			),
			2 => array(
			'var' => 'resCode'
			),
			3 => array(
			'var' => 'msg'
			),
			4 => array(
			'var' => 'poMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['resCode'])){
				
				$this->resCode = $vals['resCode'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['poMap'])){
				
				$this->poMap = $vals['poMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InventoryAdjustRsp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("resCode" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\xstore\cc\sims\erp\RspCodeEnum::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->resCode = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("poMap" == $schemeField){
				
				$needSkip = false;
				
				$this->poMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = 0;
						$input->readI32($val1); 
						
						$this->poMap[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		$xfer += $output->writeFieldBegin('seqNo');
		$xfer += $output->writeString($this->seqNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resCode');
		
		$em = new \vipapis\xstore\cc\sims\erp\RspCodeEnum; 
		$output->writeString($em::$__names[$this->resCode]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poMap !== null) {
			
			$xfer += $output->writeFieldBegin('poMap');
			
			if (!is_array($this->poMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->poMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeI32($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\base\osp\service\record;

class VipGoodRecordAttachResponse {
	
	static $_TSPEC;
	public $respCode = null;
	public $msg = null;
	public $data = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'respCode'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'data'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['respCode'])){
				
				$this->respCode = $vals['respCode'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['data'])){
				
				$this->data = $vals['data'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VipGoodRecordAttachResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("respCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->respCode);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("data" == $schemeField){
				
				$needSkip = false;
				
				$this->data = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->data[$key0] = $val0;
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
		
		$xfer += $output->writeFieldBegin('respCode');
		$xfer += $output->writeString($this->respCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('msg');
		$xfer += $output->writeString($this->msg);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->data !== null) {
			
			$xfer += $output->writeFieldBegin('data');
			
			if (!is_array($this->data)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->data as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
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
<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\platform\api\cipher;

class BatchEncryptReq {
	
	static $_TSPEC;
	public $keyCategory = null;
	public $contents = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'keyCategory'
			),
			2 => array(
			'var' => 'contents'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['keyCategory'])){
				
				$this->keyCategory = $vals['keyCategory'];
			}
			
			
			if (isset($vals['contents'])){
				
				$this->contents = $vals['contents'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchEncryptReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("keyCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keyCategory);
				
			}
			
			
			
			
			if ("contents" == $schemeField){
				
				$needSkip = false;
				
				$this->contents = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->contents[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('keyCategory');
		$xfer += $output->writeString($this->keyCategory);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contents');
		
		if (!is_array($this->contents)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->contents as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
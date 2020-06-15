<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class DecryptRequest {
	
	static $_TSPEC;
	public $encrypt_datas = null;
	public $extend_infos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'encrypt_datas'
			),
			2 => array(
			'var' => 'extend_infos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['encrypt_datas'])){
				
				$this->encrypt_datas = $vals['encrypt_datas'];
			}
			
			
			if (isset($vals['extend_infos'])){
				
				$this->extend_infos = $vals['extend_infos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DecryptRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("encrypt_datas" == $schemeField){
				
				$needSkip = false;
				
				$this->encrypt_datas = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\marketplace\delivery\EncryptData();
						$elem1->read($input);
						
						$this->encrypt_datas[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("extend_infos" == $schemeField){
				
				$needSkip = false;
				
				$this->extend_infos = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key2 = 0;
						
						$names = \vipapis\marketplace\delivery\DecryptExtendKey::$__names;
						$name = null;
						$input->readString($name);
						foreach ($names as $k => $v){
							
							if($name == $v){
								
								$key2 = $k;
								break;
							}
							
						}
						
						
						$val2 = '';
						$input->readString($val2);
						
						$this->extend_infos[$key2] = $val2;
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
		
		$xfer += $output->writeFieldBegin('encrypt_datas');
		
		if (!is_array($this->encrypt_datas)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->encrypt_datas as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->extend_infos !== null) {
			
			$xfer += $output->writeFieldBegin('extend_infos');
			
			if (!is_array($this->extend_infos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->extend_infos as $kiter0 => $viter0){
				
				
				$em = new \vipapis\marketplace\delivery\DecryptExtendKey; 
				$output->writeString($em::$__names[$kiter0]);  
				
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
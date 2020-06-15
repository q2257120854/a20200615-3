<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vipshop\cis\sdk\api\datain\si\request;

class ChannelRequestHeader {
	
	static $_TSPEC;
	public $version = null;
	public $consumer = null;
	public $token = null;
	public $extension_area = null;
	public $local_area = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'version'
			),
			3 => array(
			'var' => 'consumer'
			),
			5 => array(
			'var' => 'token'
			),
			7 => array(
			'var' => 'extension_area'
			),
			9 => array(
			'var' => 'local_area'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['version'])){
				
				$this->version = $vals['version'];
			}
			
			
			if (isset($vals['consumer'])){
				
				$this->consumer = $vals['consumer'];
			}
			
			
			if (isset($vals['token'])){
				
				$this->token = $vals['token'];
			}
			
			
			if (isset($vals['extension_area'])){
				
				$this->extension_area = $vals['extension_area'];
			}
			
			
			if (isset($vals['local_area'])){
				
				$this->local_area = $vals['local_area'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ChannelRequestHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->version);
				
			}
			
			
			
			
			if ("consumer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consumer);
				
			}
			
			
			
			
			if ("token" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->token);
				
			}
			
			
			
			
			if ("extension_area" == $schemeField){
				
				$needSkip = false;
				
				$this->extension_area = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->extension_area[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("local_area" == $schemeField){
				
				$needSkip = false;
				
				$this->local_area = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->local_area[$key1] = $val1;
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
		
		$xfer += $output->writeFieldBegin('version');
		$xfer += $output->writeString($this->version);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('consumer');
		$xfer += $output->writeString($this->consumer);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('token');
		$xfer += $output->writeString($this->token);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->extension_area !== null) {
			
			$xfer += $output->writeFieldBegin('extension_area');
			
			if (!is_array($this->extension_area)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->extension_area as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->local_area !== null) {
			
			$xfer += $output->writeFieldBegin('local_area');
			
			if (!is_array($this->local_area)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->local_area as $kiter0 => $viter0){
				
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
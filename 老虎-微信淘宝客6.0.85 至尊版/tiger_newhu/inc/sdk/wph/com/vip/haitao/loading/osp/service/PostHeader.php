<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\haitao\loading\osp\service;

class PostHeader {
	
	static $_TSPEC;
	public $returnHeaderTime = null;
	public $returnHeaderCode = null;
	public $retrunHeaderMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'returnHeaderTime'
			),
			2 => array(
			'var' => 'returnHeaderCode'
			),
			3 => array(
			'var' => 'retrunHeaderMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['returnHeaderTime'])){
				
				$this->returnHeaderTime = $vals['returnHeaderTime'];
			}
			
			
			if (isset($vals['returnHeaderCode'])){
				
				$this->returnHeaderCode = $vals['returnHeaderCode'];
			}
			
			
			if (isset($vals['retrunHeaderMessage'])){
				
				$this->retrunHeaderMessage = $vals['retrunHeaderMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PostHeader';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("returnHeaderTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnHeaderTime);
				
			}
			
			
			
			
			if ("returnHeaderCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnHeaderCode);
				
			}
			
			
			
			
			if ("retrunHeaderMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->retrunHeaderMessage);
				
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
		
		$xfer += $output->writeFieldBegin('returnHeaderTime');
		$xfer += $output->writeString($this->returnHeaderTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('returnHeaderCode');
		$xfer += $output->writeString($this->returnHeaderCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('retrunHeaderMessage');
		$xfer += $output->writeString($this->retrunHeaderMessage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
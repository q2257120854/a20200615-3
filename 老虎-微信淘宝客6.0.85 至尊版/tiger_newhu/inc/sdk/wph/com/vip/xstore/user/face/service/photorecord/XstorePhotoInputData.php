<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service\photorecord;

class XstorePhotoInputData {
	
	static $_TSPEC;
	public $photoName = null;
	public $photoBase64Data = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'photoName'
			),
			2 => array(
			'var' => 'photoBase64Data'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['photoName'])){
				
				$this->photoName = $vals['photoName'];
			}
			
			
			if (isset($vals['photoBase64Data'])){
				
				$this->photoBase64Data = $vals['photoBase64Data'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstorePhotoInputData';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("photoName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->photoName);
				
			}
			
			
			
			
			if ("photoBase64Data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->photoBase64Data);
				
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
		
		$xfer += $output->writeFieldBegin('photoName');
		$xfer += $output->writeString($this->photoName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('photoBase64Data');
		$xfer += $output->writeString($this->photoBase64Data);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
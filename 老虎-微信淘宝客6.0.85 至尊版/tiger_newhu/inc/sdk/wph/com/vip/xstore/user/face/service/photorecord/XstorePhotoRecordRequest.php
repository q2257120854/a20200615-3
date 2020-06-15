<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\user\face\service\photorecord;

class XstorePhotoRecordRequest {
	
	static $_TSPEC;
	public $seqNo = null;
	public $cameraCode = null;
	public $originPhoto = null;
	public $cutPhotos = null;
	public $cutPhotoTime = null;
	public $originPhotoTime = null;
	public $sendTime = null;
	public $resendFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'seqNo'
			),
			2 => array(
			'var' => 'cameraCode'
			),
			3 => array(
			'var' => 'originPhoto'
			),
			4 => array(
			'var' => 'cutPhotos'
			),
			5 => array(
			'var' => 'cutPhotoTime'
			),
			6 => array(
			'var' => 'originPhotoTime'
			),
			7 => array(
			'var' => 'sendTime'
			),
			8 => array(
			'var' => 'resendFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['cameraCode'])){
				
				$this->cameraCode = $vals['cameraCode'];
			}
			
			
			if (isset($vals['originPhoto'])){
				
				$this->originPhoto = $vals['originPhoto'];
			}
			
			
			if (isset($vals['cutPhotos'])){
				
				$this->cutPhotos = $vals['cutPhotos'];
			}
			
			
			if (isset($vals['cutPhotoTime'])){
				
				$this->cutPhotoTime = $vals['cutPhotoTime'];
			}
			
			
			if (isset($vals['originPhotoTime'])){
				
				$this->originPhotoTime = $vals['originPhotoTime'];
			}
			
			
			if (isset($vals['sendTime'])){
				
				$this->sendTime = $vals['sendTime'];
			}
			
			
			if (isset($vals['resendFlag'])){
				
				$this->resendFlag = $vals['resendFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XstorePhotoRecordRequest';
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
			
			
			
			
			if ("cameraCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cameraCode);
				
			}
			
			
			
			
			if ("originPhoto" == $schemeField){
				
				$needSkip = false;
				
				$this->originPhoto = new \com\vip\xstore\user\face\service\photorecord\XstorePhotoInputData();
				$this->originPhoto->read($input);
				
			}
			
			
			
			
			if ("cutPhotos" == $schemeField){
				
				$needSkip = false;
				
				$this->cutPhotos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\user\face\service\photorecord\XstorePhotoInputData();
						$elem0->read($input);
						
						$this->cutPhotos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("cutPhotoTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cutPhotoTime); 
				
			}
			
			
			
			
			if ("originPhotoTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->originPhotoTime); 
				
			}
			
			
			
			
			if ("sendTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sendTime); 
				
			}
			
			
			
			
			if ("resendFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->resendFlag); 
				
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
		
		$xfer += $output->writeFieldBegin('cameraCode');
		$xfer += $output->writeString($this->cameraCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('originPhoto');
		
		if (!is_object($this->originPhoto)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->originPhoto->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cutPhotos');
		
		if (!is_array($this->cutPhotos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->cutPhotos as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cutPhotoTime');
		$xfer += $output->writeI64($this->cutPhotoTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('originPhotoTime');
		$xfer += $output->writeI64($this->originPhotoTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sendTime');
		$xfer += $output->writeI64($this->sendTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('resendFlag');
		$xfer += $output->writeI32($this->resendFlag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
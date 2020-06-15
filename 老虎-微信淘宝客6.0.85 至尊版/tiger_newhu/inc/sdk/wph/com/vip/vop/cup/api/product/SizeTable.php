<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\product;

class SizeTable {
	
	static $_TSPEC;
	public $id = null;
	public $type = null;
	public $html = null;
	public $tips = null;
	public $del_flag = null;
	public $details = null;
	public $recommend_info = null;
	public $json_data = null;
	public $size_type_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'html'
			),
			4 => array(
			'var' => 'tips'
			),
			5 => array(
			'var' => 'del_flag'
			),
			6 => array(
			'var' => 'details'
			),
			7 => array(
			'var' => 'recommend_info'
			),
			8 => array(
			'var' => 'json_data'
			),
			9 => array(
			'var' => 'size_type_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['html'])){
				
				$this->html = $vals['html'];
			}
			
			
			if (isset($vals['tips'])){
				
				$this->tips = $vals['tips'];
			}
			
			
			if (isset($vals['del_flag'])){
				
				$this->del_flag = $vals['del_flag'];
			}
			
			
			if (isset($vals['details'])){
				
				$this->details = $vals['details'];
			}
			
			
			if (isset($vals['recommend_info'])){
				
				$this->recommend_info = $vals['recommend_info'];
			}
			
			
			if (isset($vals['json_data'])){
				
				$this->json_data = $vals['json_data'];
			}
			
			
			if (isset($vals['size_type_id'])){
				
				$this->size_type_id = $vals['size_type_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizeTable';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->type); 
				
			}
			
			
			
			
			if ("html" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->html);
				
			}
			
			
			
			
			if ("tips" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tips);
				
			}
			
			
			
			
			if ("del_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->del_flag); 
				
			}
			
			
			
			
			if ("details" == $schemeField){
				
				$needSkip = false;
				
				$this->details = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = 0;
						$input->readI64($key0); 
						
						$val0 = null;
						
						$val0 = new \com\vip\vop\cup\api\product\SizeDetail();
						$val0->read($input);
						
						$this->details[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("recommend_info" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->recommend_info);
				
			}
			
			
			
			
			if ("json_data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->json_data);
				
			}
			
			
			
			
			if ("size_type_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->size_type_id); 
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeI16($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->html !== null) {
			
			$xfer += $output->writeFieldBegin('html');
			$xfer += $output->writeString($this->html);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tips !== null) {
			
			$xfer += $output->writeFieldBegin('tips');
			$xfer += $output->writeString($this->tips);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->del_flag !== null) {
			
			$xfer += $output->writeFieldBegin('del_flag');
			$xfer += $output->writeI16($this->del_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->details !== null) {
			
			$xfer += $output->writeFieldBegin('details');
			
			if (!is_array($this->details)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->details as $kiter0 => $viter0){
				
				$xfer += $output->writeI64($kiter0);
				
				
				if (!is_object($viter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $viter0->write($output);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->recommend_info !== null) {
			
			$xfer += $output->writeFieldBegin('recommend_info');
			$xfer += $output->writeString($this->recommend_info);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->json_data !== null) {
			
			$xfer += $output->writeFieldBegin('json_data');
			$xfer += $output->writeString($this->json_data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size_type_id !== null) {
			
			$xfer += $output->writeFieldBegin('size_type_id');
			$xfer += $output->writeI32($this->size_type_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
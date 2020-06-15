<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\omni\wo;

class WorkOrderReply {
	
	static $_TSPEC;
	public $wo_no = null;
	public $content = null;
	public $carrier_id = null;
	public $fix_user = null;
	public $fix_time = null;
	public $attachments = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wo_no'
			),
			2 => array(
			'var' => 'content'
			),
			3 => array(
			'var' => 'carrier_id'
			),
			4 => array(
			'var' => 'fix_user'
			),
			5 => array(
			'var' => 'fix_time'
			),
			6 => array(
			'var' => 'attachments'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wo_no'])){
				
				$this->wo_no = $vals['wo_no'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['carrier_id'])){
				
				$this->carrier_id = $vals['carrier_id'];
			}
			
			
			if (isset($vals['fix_user'])){
				
				$this->fix_user = $vals['fix_user'];
			}
			
			
			if (isset($vals['fix_time'])){
				
				$this->fix_time = $vals['fix_time'];
			}
			
			
			if (isset($vals['attachments'])){
				
				$this->attachments = $vals['attachments'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderReply';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wo_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wo_no);
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("carrier_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_id);
				
			}
			
			
			
			
			if ("fix_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fix_user);
				
			}
			
			
			
			
			if ("fix_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->fix_time); 
				
			}
			
			
			
			
			if ("attachments" == $schemeField){
				
				$needSkip = false;
				
				$this->attachments = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\omni\wo\Attachment();
						$elem0->read($input);
						
						$this->attachments[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('wo_no');
		$xfer += $output->writeString($this->wo_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('content');
		$xfer += $output->writeString($this->content);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->carrier_id !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_id');
			$xfer += $output->writeString($this->carrier_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fix_user !== null) {
			
			$xfer += $output->writeFieldBegin('fix_user');
			$xfer += $output->writeString($this->fix_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fix_time !== null) {
			
			$xfer += $output->writeFieldBegin('fix_time');
			$xfer += $output->writeI64($this->fix_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attachments !== null) {
			
			$xfer += $output->writeFieldBegin('attachments');
			
			if (!is_array($this->attachments)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attachments as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
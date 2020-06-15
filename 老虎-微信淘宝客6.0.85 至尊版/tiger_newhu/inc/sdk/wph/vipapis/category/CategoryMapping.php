<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\category;

class CategoryMapping {
	
	static $_TSPEC;
	public $sourcecategory = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sourcecategory'
			),
			2 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sourcecategory'])){
				
				$this->sourcecategory = $vals['sourcecategory'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryMapping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sourcecategory" == $schemeField){
				
				$needSkip = false;
				
				$this->sourcecategory = new \vipapis\category\Category();
				$this->sourcecategory->read($input);
				
			}
			
			
			
			
			if ("filter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->filter);
				
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
		
		$xfer += $output->writeFieldBegin('sourcecategory');
		
		if (!is_object($this->sourcecategory)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->sourcecategory->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			$xfer += $output->writeString($this->filter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
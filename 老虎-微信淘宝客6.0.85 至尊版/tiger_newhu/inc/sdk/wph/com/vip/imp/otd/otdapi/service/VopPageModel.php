<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\imp\otd\otdapi\service;

class VopPageModel {
	
	static $_TSPEC;
	public $page_index = null;
	public $page_size = null;
	public $total_count = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'page_index'
			),
			2 => array(
			'var' => 'page_size'
			),
			3 => array(
			'var' => 'total_count'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['page_index'])){
				
				$this->page_index = $vals['page_index'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['total_count'])){
				
				$this->total_count = $vals['total_count'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VopPageModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("page_index" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->page_index); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->page_size); 
				
			}
			
			
			
			
			if ("total_count" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->total_count); 
				
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
		
		$xfer += $output->writeFieldBegin('page_index');
		$xfer += $output->writeI64($this->page_index);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI64($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_count');
		$xfer += $output->writeI64($this->total_count);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
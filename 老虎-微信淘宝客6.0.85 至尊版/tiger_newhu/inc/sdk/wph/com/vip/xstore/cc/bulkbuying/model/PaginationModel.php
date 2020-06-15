<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\model;

class PaginationModel {
	
	static $_TSPEC;
	public $totalCounts = null;
	public $totalPages = null;
	public $hasPrevs = null;
	public $hasNext = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'totalCounts'
			),
			2 => array(
			'var' => 'totalPages'
			),
			3 => array(
			'var' => 'hasPrevs'
			),
			4 => array(
			'var' => 'hasNext'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['totalCounts'])){
				
				$this->totalCounts = $vals['totalCounts'];
			}
			
			
			if (isset($vals['totalPages'])){
				
				$this->totalPages = $vals['totalPages'];
			}
			
			
			if (isset($vals['hasPrevs'])){
				
				$this->hasPrevs = $vals['hasPrevs'];
			}
			
			
			if (isset($vals['hasNext'])){
				
				$this->hasNext = $vals['hasNext'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PaginationModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("totalCounts" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->totalCounts); 
				
			}
			
			
			
			
			if ("totalPages" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalPages); 
				
			}
			
			
			
			
			if ("hasPrevs" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasPrevs);
				
			}
			
			
			
			
			if ("hasNext" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasNext);
				
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
		
		if($this->totalCounts !== null) {
			
			$xfer += $output->writeFieldBegin('totalCounts');
			$xfer += $output->writeI64($this->totalCounts);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalPages !== null) {
			
			$xfer += $output->writeFieldBegin('totalPages');
			$xfer += $output->writeI32($this->totalPages);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('hasPrevs');
		$xfer += $output->writeBool($this->hasPrevs);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hasNext');
		$xfer += $output->writeBool($this->hasNext);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
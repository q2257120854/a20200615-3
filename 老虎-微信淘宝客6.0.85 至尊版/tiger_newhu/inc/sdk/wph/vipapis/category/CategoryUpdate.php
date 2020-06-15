<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\category;

class CategoryUpdate {
	
	static $_TSPEC;
	public $updateType = null;
	public $category = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'updateType'
			),
			2 => array(
			'var' => 'category'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['updateType'])){
				
				$this->updateType = $vals['updateType'];
			}
			
			
			if (isset($vals['category'])){
				
				$this->category = $vals['category'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryUpdate';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("updateType" == $schemeField){
				
				$needSkip = false;
				
				$names = \vipapis\category\UpdateType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->updateType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("category" == $schemeField){
				
				$needSkip = false;
				
				$this->category = new \vipapis\category\Category();
				$this->category->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('updateType');
		
		$em = new \vipapis\category\UpdateType; 
		$output->writeString($em::$__names[$this->updateType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category');
		
		if (!is_object($this->category)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->category->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
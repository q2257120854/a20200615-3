<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class GetPrintTemplateResponse {
	
	static $_TSPEC;
	public $part_order_list = null;
	public $all_print_html = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'part_order_list'
			),
			2 => array(
			'var' => 'all_print_html'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['part_order_list'])){
				
				$this->part_order_list = $vals['part_order_list'];
			}
			
			
			if (isset($vals['all_print_html'])){
				
				$this->all_print_html = $vals['all_print_html'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetPrintTemplateResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("part_order_list" == $schemeField){
				
				$needSkip = false;
				
				$this->part_order_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->part_order_list[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("all_print_html" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->all_print_html);
				
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
		
		if($this->part_order_list !== null) {
			
			$xfer += $output->writeFieldBegin('part_order_list');
			
			if (!is_array($this->part_order_list)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->part_order_list as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->all_print_html !== null) {
			
			$xfer += $output->writeFieldBegin('all_print_html');
			$xfer += $output->writeString($this->all_print_html);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>
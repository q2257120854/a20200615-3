<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\category;
final class MappedCategoryState{
	
	
	const NON_MAPPING = 0;
	
	const PRE_MAPPING = 1;
	
	const ON_AUDIT = 5;
	
	const PASSED_AUDIT = 6;
	
	const REJECTED_AUDIT = 7;
	
	const OUTAGE = 9;
	
	static public $__names = array(
	
	0 => 'NON_MAPPING',
	
	1 => 'PRE_MAPPING',
	
	5 => 'ON_AUDIT',
	
	6 => 'PASSED_AUDIT',
	
	7 => 'REJECTED_AUDIT',
	
	9 => 'OUTAGE',
	
	);
}

?>
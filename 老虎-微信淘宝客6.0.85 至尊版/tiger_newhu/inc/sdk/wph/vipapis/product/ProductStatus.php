<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\product;
final class ProductStatus{
	
	
	const MASTER_DRAFT = -11;
	
	const MASTER_PENDING = -12;
	
	const MASTER_PASS = -13;
	
	const MASTER_REJECT = -14;
	
	const SALE_DRAFT = 21;
	
	const SALE_PENDING = 22;
	
	const SALE_PASS = 23;
	
	const SALE_REJECT = 24;
	
	const DEFAULT = 0;
	
	const DRAFT = 11;
	
	const PENDING = 12;
	
	const PASS = 13;
	
	const REJECT = 14;
	
	const DELETED = -1;
	
	const OUTSALE = 3;
	
	const HIDDEN = 15;
	
	static public $__names = array(
	
	-11 => 'MASTER_DRAFT',
	
	-12 => 'MASTER_PENDING',
	
	-13 => 'MASTER_PASS',
	
	-14 => 'MASTER_REJECT',
	
	21 => 'SALE_DRAFT',
	
	22 => 'SALE_PENDING',
	
	23 => 'SALE_PASS',
	
	24 => 'SALE_REJECT',
	
	0 => 'DEFAULT',
	
	11 => 'DRAFT',
	
	12 => 'PENDING',
	
	13 => 'PASS',
	
	14 => 'REJECT',
	
	-1 => 'DELETED',
	
	3 => 'OUTSALE',
	
	15 => 'HIDDEN',
	
	);
}

?>
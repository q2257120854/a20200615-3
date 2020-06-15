<?php
!defined('IN_ONEZ') && exit('Access Denied');
$dbtables=array();


#onez_data
$dbtables['data']=array(
  'idname'=>'id',
  'fields'=>array(
    array (
      'fieldname' => 'namespace',
      'fieldtype' => 'text',
      'mylen' => '80',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'tablename',
      'fieldtype' => 'text',
      'mylen' => '30',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'userid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'appid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'siteid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'upid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'token',
      'fieldtype' => 'text',
      'mylen' => '50',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'addtime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'updatetime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'extra',
      'fieldtype' => 'long',
      'mylen' => '',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'keywords',
      'fieldtype' => 'text',
      'mylen' => '120',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'step',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index1',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index2',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index3',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index4',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index5',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index6',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index7',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index8',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index9',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index10',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index11',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'index12',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key1',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key2',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key3',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key4',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key5',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key6',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key7',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key8',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key9',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key10',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key11',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'key12',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'money1',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'money2',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'money3',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
  ),
);

#onez_device
$dbtables['device']=array(
  'idname'=>'id',
  'fields'=>array(
    array (
      'fieldname' => 'appid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'siteid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'userid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'udid',
      'fieldtype' => 'text',
      'mylen' => '30',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'time',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'ip',
      'fieldtype' => 'text',
      'mylen' => '20',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'extra',
      'fieldtype' => 'long',
      'mylen' => '',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'tmp',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'namespace',
      'fieldtype' => 'text',
      'mylen' => '30',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
  ),
);

#onez_member
$dbtables['member']=array(
  'idname'=>'userid',
  'fields'=>array(
    array (
      'fieldname' => 'appid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'siteid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'grade',
      'fieldtype' => 'text',
      'mylen' => '20',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'username',
      'fieldtype' => 'text',
      'mylen' => '80',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'password',
      'fieldtype' => 'text',
      'mylen' => '50',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'mobile',
      'fieldtype' => 'text',
      'mylen' => '30',
      'summary' => '联系方式',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'infotime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'infoip',
      'fieldtype' => 'text',
      'mylen' => '20',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'updatetime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'updateip',
      'fieldtype' => 'text',
      'mylen' => '20',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'province',
      'fieldtype' => '',
      'mylen' => '',
      'summary' => '所在省',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'city',
      'fieldtype' => '',
      'mylen' => '',
      'summary' => '所在市',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'lasttime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'lastip',
      'fieldtype' => 'text',
      'mylen' => '20',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'thisip',
      'fieldtype' => 'text',
      'mylen' => '20',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'thistime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'logincount',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'extra',
      'fieldtype' => 'long',
      'mylen' => '',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'upid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'amt',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'amt_pay',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'amt_charge',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'amt_lock',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
  ),
);


#onez_order
$dbtables['order']=array(
  'idname'=>'id',
  'fields'=>array(
    array (
      'fieldname' => 'appid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'siteid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'addonid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'orderno',
      'fieldtype' => 'text',
      'mylen' => '30',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'status',
      'fieldtype' => 'text',
      'mylen' => '20',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'userid',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'subject',
      'fieldtype' => 'text',
      'mylen' => '200',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'price',
      'fieldtype' => 'amt',
      'mylen' => '',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'addtime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'paytime',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'time',
      'fieldtype' => 'int',
      'mylen' => '11',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'extra',
      'fieldtype' => 'long',
      'mylen' => '',
      'summary' => '',
      'is_index' => '',
      'is_only' => '',
    ),
    array (
      'fieldname' => 'paytype',
      'fieldtype' => 'text',
      'mylen' => '30',
      'summary' => '',
      'is_index' => '1',
      'is_only' => '',
    ),
  ),
);
return $dbtables;
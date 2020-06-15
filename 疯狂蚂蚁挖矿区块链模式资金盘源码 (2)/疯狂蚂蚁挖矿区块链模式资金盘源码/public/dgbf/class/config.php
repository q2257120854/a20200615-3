<?php
if(!defined('InEmpireBak'))
{
	exit();
}
define('EmpireBakConfig',TRUE);

//Database
$phome_db_dbtype='mysql';
$phome_db_ver='5.0';
$phome_db_server='localhost';
$phome_db_port='';
$phome_db_username='www9nwcc';
$phome_db_password='www9nwcc';
$phome_db_dbname='www9nwcc';
$baktbpre='';
$phome_db_char='';

//USER
$set_username='admin';
$set_password='550e1bafe077ff0b0b67f4e32f29d751';
$set_loginauth='';
$set_loginrnd='qx48FN95YcBXiqgsfdkZhZ8skdbria';
$set_outtime='60';
$set_loginkey='1';
$ebak_set_keytime=60;
$ebak_set_ckuseragent='';

//COOKIE
$phome_cookiedomain='';
$phome_cookiepath='/';
$phome_cookievarpre='leftbd_';

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath='bdata';
$bakzippath='zip';
$filechmod='1';
$phpsafemod='';
$php_outtime='1000';
$limittype='';
$canlistdb='';
$ebak_set_moredbserver='';
$ebak_set_hidedbs='';
$ebak_set_escapetype='1';

//EBMA
$ebak_ebma_open=1;
$ebak_ebma_path='phpmyadmin';
$ebak_ebma_cklogin=0;

//SYS
$ebak_set_ckrndvar='zktczeylyban';
$ebak_set_ckrndval='9967ebe0b331cdfda82eb6a7213ba459';
$ebak_set_ckrndvaltwo='d509d7907c9cb4da0fe7487515390765';
$ebak_set_ckrndvalthree='5fd27f7ba1c466a3dafe18cba1c0b844';
$ebak_set_ckrndvalfour='fe3c8251e491763c7f62c5dfdb8a980f';

//------------ SYSTEM ------------
HeaderIeChar();
?>
<?php



!defined('IN_ONEZ') && exit('Access Denied');
class onezphp_ip extends onezphp{
  function __construct(){
    
  }
  function init($ip){
    $this->ip=$ip;
    return $this;
  }
  function address($full=0){
    $ip=$this->ip;
    !$ip && $ip=onez()->ip();
    
    include_once(dirname(__FILE__)."/lib/ip.class.php");
    $p=new IpLocation();
    $l=$p->getlocation($ip);
    //print_r($l);
    $address=$l['country'];
    $full && $address.=$l['area'];
    return $address;
  }
}
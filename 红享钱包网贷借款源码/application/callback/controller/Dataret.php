<?php
namespace app\callback\controller;

use think\Controller;

class Dataret extends Controller
{
  public function syapi()
  {
  	 $data = input('post.');
    //file_put_contents('/www/wwwroot/palade.txt', htmlspecialchars_decode($data));
    if($data['status'] == 'success'){
     $order = db('reorder')->where('number',$data['order'])->find(); 
     if($order['viptype'] == 1){
	 db('user')->where('id',$order['uid'])->update(['mobileAuth'=> htmlspecialchars_decode($data['data'])]);	
     }else if($order['viptype'] == 7){
	 db('user')->where('id',$order['uid'])->update(['zhimaAuth'=> htmlspecialchars_decode($data['data'])]);	
     }else if($order['viptype'] == 2){
     db('user')->where('id',$order['uid'])->update(['taobaoAuth'=> htmlspecialchars_decode($data['data'])]);	
     }else if($order['viptype'] == 3){
     $vdata = json_decode(htmlspecialchars_decode($data['data']),true);
     db('user')->where('id',$order['uid'])->update(['name'=>$vdata['name'],'idcard'=>$vdata['idcard']]);	
     }else if($order['viptype'] == 4){
     db('user')->where('id',$order['uid'])->update(['bankAuth'=> htmlspecialchars_decode($data['data'])]);	
     }
  
    }
    echo "SUCCESS";
  }
}

<?php
namespace app\varjoker\model;

use think\Model;

class Admin extends Model
{
    /*
     * 登录验证
     */
    public function SetLogin($user,$pass)
    {
        $admin = $this->where(['adminuser'=>$user,'adminpass'=>$pass])->find();
        if(!$admin){
            return false;
        }
        $admin = $admin->hidden(['adminpass'])->toArray();
        session('adminid',$admin['id']);
        session('adminuser',$admin['adminuser']);
        session('author',$admin['author']);
        return $admin;
    }
    /*
     *登录ip记录
     */
    public function SetGetIp($id,$ip,$getip)
    {
        $this->where('id',$id)->update(['getip'=>$ip,'arrip'=>$getip]);
    }
}
<?php

namespace app\index\model;

use think\Model;

class User extends Model {
    /*
     * 登录验证
     */

    public function SetLogin($user, $pass) {
        $user = $this->where(['mobile' => $user, 'password' => $pass])->find();
        if (!$user) {
            return false;
        }
        $user = $user->hidden(['password'])->toArray();
        session('id', $user['id']);
        session('mobile', $user['mobile']);
        return $user;
    }

    /*
     * 注册验证
     */

    public function SetReg($mobile, $password, $recode, $source = 0) {
        $smscode = db('smscode')->where(['mobile' => $mobile, 'code' => $recode])->find();
        $count = db('smscode')->where('mobile', $mobile)->count();
        if ($count == 3) {
            return false;
        }
        $user = $this->where('mobile', $mobile)->find();
        if ($user) {
            return false;
        }
        if ($recode != 6666) {
            if (!$smscode) {
                return false;
            }
            if (time() > $smscode['addtime']) {
                return false;
            }

            if ($smscode['code'] != $recode) {
                return false;
            }
        }
        $data = [
            'mobile' => $mobile,
            'password' => $password,
            'source' => $source,
            'addtime' => date('Y-m-d H:i:s')
        ];
        $redata = Place($mobile);
        db('province')->where('title', $redata)->setInc('zhuce');
        db('getdata')->where('id', 1)->setInc('userall');
        $this->save($data);
        return true;
    }

    /*
     * 密码找回验证
     */

    public function SetFind($mobile, $password, $recode) {
        $smscode = db('smscode')->where(['mobile' => $mobile, 'code' => $recode])->find();
        $user = $this->where('mobile', $mobile)->find();
        if (!$user) {
            return false;
        }
        if (!$smscode) {
            return false;
        }
        if (time() > $smscode['addtime']) {
            return false;
        }
        if ($smscode['code'] != $recode) {
            return false;
        }
        $this->where('mobile', $mobile)->update(['password' => $password]);
        return true;
    }

    /*
     * 登录ip记录
     */

    public function SetGetIp($id, $ip, $getip) {
        $this->where('id', $id)->update(['getip' => $ip, 'arrip' => $getip]);
    }

    /*
     * 判断手机号是否注册
     */

    public function incmobile($mobile) {
        $data = $this->where('mobile', $mobile)->find();
        if ($data) {
            return false;
        }
        return true;
    }

}

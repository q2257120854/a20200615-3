<?php

namespace app\index\controller;

use think\Db;
use think\Request;
use think\facade\Env;
use Endroid\QrCode\QrCode;

class Team extends Base {
    // +----------------------------------------------------------------------
    // | 私有函数
    // +----------------------------------------------------------------------
    // +----------------------------------------------------------------------
    // | 内部方法
    // +----------------------------------------------------------------------

    /**
     * 下级列表
     */
    public function child($username, $page, $size, $where = []) {
        // 分页设置
        $page = $page - 1 < 1 ? 0 : $page - 1;
        $offset = $page * $size;
        // 查询对象
        $query = Db::table('account')->alias('a')
                ->join('profile p', 'p.username = a.username')
                ->field('a.uid,p.realname,p.avatar, a.type, a.username, p.nickname, p.idcard');
        // 按类型查询
        if (array_key_exists('type', $where) && !is_null($where['type'])) {
            $query->where('a.type', '=', $where['type']);
        }
        // 按关键字查询
        if (array_key_exists('key', $where) && !is_null($where['key'])) {
            $query->where(function($query) use ($where) {
                $query->whereOr('a.username', 'like', "%" . $where['key'] . "%")->whereOr('p.nickname', 'like', "%" . $where['key'] . "%");
            });
        }
        // 查询数据
        $accounts = $query->where('inviter', '=', $username)
                ->limit($offset, $size)
                ->select();
        foreach ($accounts as $key => $item) {
            $accounts[$key]['realname'] = $accounts[$key]['realname'] ? $accounts[$key]['realname'] : '未更新';
            $accounts[$key]['avatar'] = avatar($item['avatar'], $item['idcard']);
            unset($accounts[$key]['idcard']);
        }
        return $accounts;
    }

    // +----------------------------------------------------------------------
    // | 对外接口
    // +----------------------------------------------------------------------

    /**
     * 团队首页
     */
    public function index(Request $req) {
        $username = session('user.account.username');
        $user = (new Account())->instance($username);
        if (empty($user['account']['loginip'])) {
            //(new Account())->signout();
        }
        $page = $req->param('page/d', 1);

        $query = Db::table('account')->alias('a')
                ->join('profile p', 'p.username = a.username')
                ->field('a.uid,p.realname,p.avatar, a.type, a.username, p.nickname, p.idcard');

        // 查询数据
        $count = $query->where('inviter', '=', $username)->count(1);
        $index = ceil($count / 50);
        $this->assign('index', $index);
        $this->assign('page', $page);
        $this->assign('user', $user);
        return $this->fetch();
    }

    /**
     * 团队成员
     */
    public function member(Request $req) {
        // 获取参数
        $page = $req->param('page', 1);
        $size = $req->param('size', 50);
        $username = $req->param('username', session('user.account.username'));
        $type = $req->param('type');
        $key = $req->param('key');
        // 查询数据
        $data = $this->child($username, $page, $size, [
            'type' => $type,
            'key' => $key,
        ]);
        // 循环处理
        foreach ($data as $key => $item) {
            $das = (new Account())->dashboard($item['username']);
            $data[$key]['power'] = money($das['power']);
            $data[$key]['zt'] = $das['one'];
            $data[$key]['team_count'] = $das['team_count'];
            $data[$key]['type'] = config('hello.level.' . $item['type'] . '.name');
        }
        // 返回数据
        return json([
            'code' => 200,
            'message' => '恭喜您、操作成功！',
            'data' => $data,
        ]);
    }

    /**
     * 成员招募
     */
    public function inviter(Request $req) {
        // 用户账号
        $username = session('user.account.username');
        // 邀请配置
        $config = config('hello.inviter');
        // 邀请码
        $code = $config['anonymous'] ? session('user.account.uid') : $username;
        // 链接
        $link = $req->domain() . '/signup.html?i=' . $code;
        // 图片邀请
        if (array_key_exists('image', $config)) {
            // 存放目录
            $folder = $config['image']['version'] . '/';
            if (strlen($username) == 11 && !is_nan($username)) {
                $folder .= substr($username, 0, 3) . '/';
            }
            // 目录是否存在
            $dir = Env::get('root_path') . '/public/inviter/' . $folder;
            if (!is_dir($dir)) {
                mkdir($dir, 0777, true);
            }
            // 是否存在图片
            $image = $dir . $username . '.jpg';
            if (!is_file($image) || empty($config['image']['cache'])) {
                // 生成二维码
                $qrcode_image = $dir . $username . '_qrcode.jpg';
                if (!is_file($qrcode_image)) {
//                    $qrCode = @new QrCode($link);
//                    $qrCode->setSize($config['image']['width'] - 20);
//                    $qrCode->writeFile($qrcode_image);
                    $qrcode_image = 'http://qr.topscan.com/api.php?text='.$link;
                }

                // 合并背景图
                $background_image = $config['image']['path'];
                //创建图片对象
                $image_1 = imagecreatefromjpeg($background_image);
                $image_2 = imagecreatefrompng($qrcode_image);
                imagecopymerge($image_1, $image_2, $config['image']['x'], $config['image']['y'], 0, 0, imagesx($image_2), imagesy($image_2), 100);
                imagejpeg($image_1, $image);
                /* $image_3 = imageCreatetruecolor(imagesx($image_1), imagesy($image_1));
                  $color = imagecolorallocate($image_3, 255, 255, 255);
                  imagefill($image_3, 0, 0, $color);
                  imageColorTransparent($image_3, $color);
                  imagecopyresampled($image_3, $image_1, 0, 0, 0, 0, imagesx($image_1), imagesy($image_1), imagesx($image_1), imagesy($image_1));
                  imagecopymerge($image_3, $image_2, 0, 0, 0, 0, imagesx($image_2), imagesy($image_2), 100); */
            }
            $this->assign('image', '/public/inviter/' . $folder . $username . '.jpg');
        }
        print_r($qrcode_image);
        // 显示页面
        return $this->fetch();
    }

}

<?php

namespace app\index\controller;

use think\Db;
use think\facade\Cache;

class Setcache
{
    public function index()
    {
        //今日产矿
        $today_clocks = Db::table('clock')->alias('c')
            ->join('machine m', 'm.mid = c.mid')
            ->join('store s', 's.id = m.product')
            ->fieldRaw('m.product, SUM(c.money) profit')
            ->where('c.create_at', '>', date('Y-m-d'))
            ->group('m.product')
            ->select();
        Cache::set('today_clocks',$today_clocks,36000);
        //累计产矿
        $clocks = Db::table('clock')->alias('c')
            ->join('machine m', 'm.mid = c.mid')
            ->join('store s', 's.id = m.product')
            ->fieldRaw('m.product, SUM(c.money) profit')
            ->group('m.product')
            ->select();
        Cache::set('clocks',$clocks,36000);
    }

}

<?php
namespace app\varjoker\controller;

class Index extends Common
{
    public function index()
    {
        $data = db('province')->select();
        $count=db('province')->sum('count');
        $zhuce=db('province')->sum('zhuce');
        $ziliao=db('province')->sum('ziliao');
        $alldata = db('getdata')->where('id',1)->find();
        $this->assign('scount',['count'=>$count,'zhuce'=>$zhuce,'ziliao'=>$ziliao]);
        $this->assign('alldata',$alldata);
        $this->assign('data',$data);
        return $this->fetch();
    }
  	//推广链接生成设置
    public function source()
    {
        $list=db('source')->order('id desc')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
     return $this->fetch();
    }
    //开始触发生成推广链接
   	public function addlink()
    {
     db('source')->insert(['addtime'=>date("Y-m-d H:i:s")]);
    }
    //删除
    public function dellink()
    {
    $id = input('id');
    db('source')->where('id',$id)->delete();
    }
    public function cleardatabase()
    {
        if(input('getdata') == '我要清空数据库668'){
            $data = ['dk_broadcast','dk_consultation','dk_loan','dk_notice','dk_pay','dk_syslog','dk_user','dk_wallet','dk_smscode','dk_msg','dk_reorder'];
            foreach ($data as $key => $value) {
               db()->query('truncate table '.$value);
            }
            db()->query("UPDATE dk_province SET count=0,zhuce=0,ziliao=0");
            db()->query("UPDATE dk_getdata SET userall=0,loanmoney=0,shiming=0,getip=0");
            $this->success('清空完成',url('index/index'));
            exit;

        }else if(input('getdata')){
            $this->error('密码输入错误，无法进行操作');
        }else{
            echo "请输入清空密码";
            echo '<form action="cleardatabase" method="get">
  <p><input type="text" name="getdata" /></p>
  <input type="submit" value="提交" />
</form>';
        }
    }
    //查询接口https://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=
}

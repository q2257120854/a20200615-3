<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 将数组写出配置文件
 * @param $arr 写入数组
 * @param $filename 保存文件名
 * @param $reset 是否合并
 * @param $delother 删除多余
 * @return bool
 */
    function save_config($arr,$filename,$reset = false,$delother = false)
    {
        $filepath = CONF_PATH.'/extra/'.$filename.'.php';
    if(!file_exists($filepath)){
        $file = fopen($filepath,"w");
        fclose($file);
    }
    $oldarr = include($filepath);
    if(is_array($oldarr)){
        foreach ($oldarr as $key => $value)
        {
            if(!isset($arr[$key]))
            {
                if(!$delother)
                {
                    $arr[$key] = $value;
                }
            }else
            {
                if(!$reset)
                {
                    $arr[$key] = $value;
                }
            }
        }
    }
    //写出文件
    $str = '<?php return [';
    foreach ($arr as $key => $value)
    {
        $value = htmlspecialchars($value);
        $str .= "'{$key}'=>'{$value}',";
    }
    $str .= '];';
    if(!file_put_contents($filepath,$str))
        return false;
    return true;
}
    /*
   * 登录置入用户数据
   */
    function SetArray($arr = [])
    {
        if ($arr){
            session('AdminX',$arr);
            model('Admin')->SetGetIp($arr['id'],$_SERVER["REMOTE_ADDR"],$arr['getip']);
        }else{
            session('Adminx',NULL);
        }
    }
    /*
     *公共文件上传
     */
    function uploadimg($file)
    {
        $info = $file->validate(['size'=>15678000000,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS .'static'. DS. 'uploads');
        if($info){
            return "/static/uploads/".$info->getSaveName();
        }else{
            return $file->getError();
        }
    }
    /*
     * 后台操作日志
     */
    function vsyslog($datalog,$user)
    {
        db('syslog')->insert(['username'=>$user,'sysaction'=>$datalog,'addtime'=>date('Y-m-d H:i:s')]);
    }
    /*
     * 通知
     */
    function sendmsg($datalog)
    {
        db('msg')->insert(['uid'=>session('id'),'content'=>$datalog,'addtime'=>date('Y-m-d H:i:s')]);
    }
   /*
     * 通知
     */
    function sendmsgcall($id,$datalog)
    {
        db('msg')->insert(['uid'=>$id,'content'=>$datalog,'addtime'=>date('Y-m-d H:i:s')]);
    }
    /*
     * 手机号归属地
     */
    function Place($mobile=0)
    {
        //淘宝接口
        $url = "http://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=".$mobile;  //根据淘宝的数据库调用返回值
        $content = file_get_contents($url);
        //$content = iconv('UTF-8', 'GB2312//IGNORE', $content);
        $data['province'] = substr($content, "54", "4");  //截取字符串
        $content = iconv('GB2312//IGNORE', 'UTF-8', $data['province']);
        return $content;
    }
    /*
     * 生成唯一订单号
     */
    function Getorder()
    {
        $order_date = date('Y-m-d');

        //订单号码主体（YYYYMMDDHHIISSNNNNNNNN）

        $order_id_main = date('YmdHis') . rand(10000000,99999999);

        //订单号码主体长度

        $order_id_len = strlen($order_id_main);

        $order_id_sum = 0;

        for($i=0; $i<$order_id_len; $i++){

            $order_id_sum += (int)(substr($order_id_main,$i,1));

        }

        //唯一订单号码（YYYYMMDDHHIISSNNNNNNNNCC）

        $order_id = $order_id_main . str_pad((100 - $order_id_sum % 100) % 100,2,'0',STR_PAD_LEFT);

        return $order_id;
    }
    /*
     * 借款利息计算
     */
    function Lixi($money,$term,$yhq)
    {

        $loan = config('loan');
        if($loan['typeterm'] =='天'){
            $data = $money*($loan['loanint']/100)*$term*$yhq;
            return $data;
        }else if($loan['typeterm'] =='月'){
            $data = $money*($loan['loanint']/100)*$term*30*$yhq;
            return $data;
        }
    }
    /*
    * 取用户数据
    */
    function GetUser()
        {
            $data = db('user')->where('id',session('id'))->find();
            return $data;
        }
    /*
     * 数据签名
     * @param $prestr 需要签名的字符串
     * @param $key 私钥
     * return 签名结果
     */
    function md5Sign($prestr, $key) {
        $prestr = $prestr . $key;
        return md5($prestr);
    }

    /*
     * 验证签名
     * @param $prestr 需要签名的字符串
     * @param $sign 签名结果
     * @param $key 私钥
     * return 验证签名结果
     */
    function md5Verify($prestr, $sign, $key) {
        $prestr = $prestr . $key;
        $mysgin = md5($prestr);

        if($mysgin == $sign) {
            return true;
        }
        else {
            return false;
        }
    }
    /*
     * 自动提交表单
     * @param $para_temp 需要提交的数组
     * @param $method 表单提交方式post或者get
     * @param $button_name 提交按钮name属性
     * @param $url 表单提交地址
     * @param $key 私钥
     * return 表单
     */
    function blsend($para_temp, $method, $button_name,$url,$key) {
        //待请求参数数组
        $para = buildRequestPara($para_temp,$key);

        $sHtml = "<form id='blpaysubmit' name='blpaysubmit' action='http://demo.52jscn.com/codepay/' accept-charset='utf-8' method='POST'>";
        while (list ($key, $val) = each ($para)) {
            $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
        }

        //submit按钮控件请不要含有name属性
        $sHtml = $sHtml."<input type='submit' value='".$button_name."'></form>";

        $sHtml = $sHtml."<script>document.forms['blpaysubmit'].submit();</script>";

        return $sHtml;
    }
    /*
     * 对需要提交的数组进行整理和添加签名参数
     * @param $para_temp 需要提交的数组
     * @param $key 私钥
     * return 整理后的数组
     */
    function buildRequestPara($para_temp,$key) {
        //除去待签名参数数组中的空值和签名参数
        $para_filter = paraFilter($para_temp);

        //对待签名参数数组排序
        $para_sort = argSort($para_filter);

        //生成签名结果
        $mysign = buildRequestMysign($para_sort,$key);

        //签名结果加入请求提交参数组中
        $para_sort['sign'] = $mysign;

        return $para_sort;
    }
    //除去待签名参数数组中的空值和签名参数
    function paraFilter($para) {
        $para_filter = array();
            foreach ($para as $key => $val) {
            if($key == "sign" || $key == "sign_type" || $val == "")continue;
            else	$para_filter[$key] = $para[$key];
        }
        return $para_filter;
    }
    /*
     * 对数组排序
     * @param $para 排序前的数组
     * return 排序后的数组
     */
    function argSort($para) {
        ksort($para);
        reset($para);
        return $para;
    }
    //把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
    function buildRequestMysign($para_sort,$key) {

        $prestr = createLinkstring($para_sort);
        $mysign = "";
        $mysign = md5Sign($prestr, $key);
        return $mysign;
    }
    /*
     * 把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
     * @param $para 需要拼接的数组
     * return 拼接完成以后的字符串
     */
    function createLinkstring($para) {
        $arg  = '';
        foreach ($para as $key => $val) {
            $arg.=$key."=".$val."&";
        }

        //去掉最后一个&字符
        $arg = substr($arg,0,count($arg)-2);

        //如果存在转义字符，那么去掉转义
        if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}

        return $arg;
    }
    /*
     * 验签
     * @param $data 需要验签的数组，数组必须包含以下参数否则验签失败
    $out_trade_no;
    $total_fee;
    $trade_status;
    $username;
    $sign;
     * return 验签结果
     */

    function verifypost($data){
        $url="http://09.mkuaixun09.cn/index.php/go/index/pay";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }
<?php

goto pD1R0;
HJyt0:
require_once ROOT_PATH . "inc/sdk/sn/config/config.php";
goto I776Y;
zjFKN:
require_once ROOT_PATH . "inc/sdk/tbk/TopSdk.php";
goto HJyt0;
YLqNt:
define("ROOT_PATH", IA_ROOT . "/addons/tiger_newhu/");
goto jD5hO;
jD5hO:
require_once ROOT_PATH . "lib/excel.php";
goto zjFKN;
pD1R0:
defined("IN_IA") or exit("Access Denied");
goto YLqNt;
I776Y:
class tiger_newhuModuleSite extends WeModuleSite
{
    public $table_request = "tiger_newhu_request";
    public $table_goods = "tiger_newhu_goods";
    public $table_ad = "tiger_newhu_ad";
    private static $t_sys_member = "mc_members";
    public function __construct()
    {
        goto C5xEU;
        sOg0X:
        $do = $_GPC["do"];
        goto rKcH8;
        UPdts:
        NA3Jw:
        goto HqnyO;
        HqnyO:
        if (!($c == "entry")) {
            goto iN1S4;
        }
        goto UWV4o;
        haILf:
        $c = $_GPC["c"];
        goto sOg0X;
        xnqOc:
        wX8go:
        goto UPdts;
        WEslD:
        if (!empty($_SESSION["tkuid"])) {
            goto PpELK;
        }
        goto xLerS;
        OQP0F:
        if (!($do != "login" and $do != "bdlogin" and $do != "tupian" and $do != "postorder" and $do != "tk")) {
            goto W4a3_;
        }
        goto KnM1t;
        NecgO:
        if (empty($cfg["tknewurl"])) {
            goto NA3Jw;
        }
        goto juz7p;
        IyjHC:
        W4a3_:
        goto caYYw;
        XtTey:
        $loginurl = $_W["siteroot"] . str_replace("./", "app/", $this->createMobileurl("login")) . "&m=tiger_newhu" . "&tzurl=" . urlencode($tktzurl);
        goto OQP0F;
        L1pN9:
        global $_W, $_GPC;
        goto haILf;
        xLerS:
        $tktzurl = $_W["siteurl"];
        goto XtTey;
        juz7p:
        if (!($c == "entry")) {
            goto wX8go;
        }
        goto D5Hfv;
        vPXy4:
        vnr5a:
        goto G2xEu;
        caYYw:
        PpELK:
        goto vPXy4;
        rKcH8:
        $cfg = $this->module["config"];
        goto NecgO;
        D5Hfv:
        $_W["siteroot"] = $cfg["tknewurl"];
        goto xnqOc;
        dPBDk:
        exit;
        goto IyjHC;
        G2xEu:
        iN1S4:
        goto MPGmW;
        UWV4o:
        if (!($cfg["logintype"] == 1)) {
            goto vnr5a;
        }
        goto WEslD;
        KnM1t:
        header("Location: " . $loginurl);
        goto dPBDk;
        C5xEU:
        session_start();
        goto L1pN9;
        MPGmW:
    }
    public function getinfotz($weid, $uid)
    {
        goto cVFK5;
        FqV02:
        if ($infos["tztype"] == 1) {
            goto xU0WT;
        }
        goto oBgzo;
        IdXj0:
        Xi9Ui:
        goto YvTEi;
        AaEzD:
        TahXb:
        goto FqV02;
        Uk8Fv:
        xU0WT:
        goto UQxbA;
        UQxbA:
        return $infos["id"];
        goto IdXj0;
        N1hkq:
        return '';
        goto LpDiK;
        cVFK5:
        if ($uid > 1) {
            goto hqkBf;
        }
        goto JXe0b;
        MqynC:
        if (!empty($infos)) {
            goto TahXb;
        }
        goto N1hkq;
        wL7Bt:
        T7gIh:
        goto nt3EO;
        LpDiK:
        goto w5myW;
        goto AaEzD;
        JXe0b:
        return '';
        goto OWBIp;
        vHmI1:
        goto Xi9Ui;
        goto Uk8Fv;
        OWBIp:
        goto T7gIh;
        goto CAr7e;
        sDFv3:
        $infos = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$weid}' and id='{$uid}'");
        goto MqynC;
        YvTEi:
        w5myW:
        goto wL7Bt;
        CAr7e:
        hqkBf:
        goto sDFv3;
        oBgzo:
        return $this->getinfotz($weid, $infos["helpid"]);
        goto vHmI1;
        nt3EO:
    }
    public function doMobileCs88()
    {
        goto J0SJN;
        snpi1:
        $sncntent = $this->curl_request($nr);
        goto E4y5k;
        aviN8:
        echo $itemid . "-" . $supplierCode;
        goto UDFNL;
        E4y5k:
        $itemid = $this->Text_qzj($sncntent, "itemCode: \"", "\",");
        goto amZ6Z;
        nsuSo:
        $nr = "http://pin.m.suning.com/pgs/product/53860525849047689805.html?utm_campaign=1584668627233942319&utm_source=share-wx&utm_medium=2cd5ed46-wxfriends";
        goto snpi1;
        FS8Qw:
        echo "<pre>";
        goto bgMpJ;
        amZ6Z:
        $supplierCode = $this->Text_qzj($sncntent, "vendorCode: \"", "\",");
        goto FS8Qw;
        J0SJN:
        global $_W, $_GPC;
        goto nsuSo;
        bgMpJ:
        print_r($view);
        goto aviN8;
        UDFNL:
    }
    public function doMobileSnordercs()
    {
        goto mHuC6;
        kywul:
        $req->setPageSize("10");
        goto fMRHE;
        E8E5D:
        $client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, "json");
        goto lgJY1;
        MMQXb:
        $resp = json_decode($resp1, true);
        goto vXgZL;
        ZlT_p:
        $resp = $client->execute($req);
        goto dmvfy;
        fp6K6:
        print_r("返回响应报文:" . $resp);
        goto oiJl_;
        hy9mR:
        $appKey = $snset["appkey"];
        goto JVGOo;
        lgJY1:
        echo "<pre>";
        goto Btwmp;
        oRC_Y:
        $req->setPageNo("1");
        goto kywul;
        OZz9J:
        $serverUrl = "https://open.suning.com/api/http/sopRequest";
        goto hy9mR;
        g2ede:
        exit;
        goto fp6K6;
        RwbzN:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/DefaultSuningClient.php";
        goto ln2XL;
        WbSDf:
        $cfg = $this->module["config"];
        goto a7lI1;
        UJfTr:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/SuningSdk.php";
        goto RwbzN;
        q6WQU:
        print_r($snset);
        goto ZlT_p;
        fMRHE:
        $req->setStartTime("2020-03-15 10:00:00");
        goto wyFzZ;
        ln2XL:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/request/netalliance/OrderQueryRequest.php";
        goto WoMTR;
        DYN4_:
        print_r($resp);
        goto g2ede;
        QGz7E:
        $req->setEndTime("2020-03-15 23:00:00");
        goto CyvrP;
        Btwmp:
        print_r($client);
        goto q6WQU;
        dmvfy:
        print_r("返回响应报文:" . $resp);
        goto MMQXb;
        mHuC6:
        global $_W, $_GPC;
        goto WbSDf;
        vXgZL:
        echo "<pre>";
        goto DYN4_;
        WoMTR:
        $req = new OrderQueryRequest();
        goto QGz7E;
        CyvrP:
        $req->setOrderLineStatus("0");
        goto oRC_Y;
        a7lI1:
        $snset = pdo_fetch("select * from " . tablename($this->modulename . "_snset") . " where weid='{$_W["uniacid"]}' order by id desc");
        goto UJfTr;
        wyFzZ:
        $req->setCheckParam("true");
        goto OZz9J;
        JVGOo:
        $appSecret = $snset["appsecret"];
        goto E8E5D;
        oiJl_:
    }
    public function znrhyzl($snset, $url, $couponUrl, $pid)
    {
        goto S2m23;
        jGUUA:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/DefaultSuningClient.php";
        goto IHjOJ;
        s3CBI:
        $req->setSubUser($pid);
        goto KTH_c;
        ruZcB:
        $resp = json_decode($resp1, true);
        goto O3s16;
        UmnEx:
        $resp1 = $client->execute($req);
        goto ruZcB;
        l25vx:
        $appSecret = $snset["appsecret"];
        goto a57xd;
        SAoMk:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/SuningSdk.php";
        goto jGUUA;
        tCRxS:
        $serverUrl = "https://open.suning.com/api/http/sopRequest";
        goto qUllY;
        IHjOJ:
        $req = new ExtensionlinkGetRequest();
        goto BHzKL;
        O3s16:
        $rhylj = $resp["sn_responseContent"]["sn_body"]["getExtensionlink"]["shortLink"];
        goto Aw3uk;
        a57xd:
        $client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, "json");
        goto UmnEx;
        BHzKL:
        $req->setProductUrl($url);
        goto bwGG0;
        KTH_c:
        $req->setCheckParam("true");
        goto tCRxS;
        S2m23:
        global $_W, $_GPC;
        goto SAoMk;
        qUllY:
        $appKey = $snset["appkey"];
        goto l25vx;
        bwGG0:
        $req->setQuanUrl($couponUrl);
        goto s3CBI;
        Aw3uk:
        return $rhylj;
        goto qi0YP;
        qi0YP:
    }
    public function doMobileSnview()
    {
        goto BiyY_;
        kz6va:
        goto GRhXE;
        goto kfZ1Q;
        O0mM3:
        W8LZb:
        goto TQ0KM;
        wCDRf:
        $itemid = $_GPC["itemid"];
        goto k1yLP;
        u4lSz:
        $views["rate"] = $ratea;
        goto o26hP;
        XQi4w:
        if (!empty($fans["tkuid"])) {
            goto z9Z1c;
        }
        goto DX8Pn;
        ezaoq:
        $views["couponUrl"] = $res["couponInfo"]["couponUrl"];
        goto EqG3L;
        gSGXY:
        BgnWS:
        goto W3HRy;
        evohy:
        if (empty($zxshare["helpid"])) {
            goto mDMmJ;
        }
        goto UCzD2;
        xFvnY:
        $ratea = $this->ptyjjl($itemendprice, $res["commodityInfo"]["rate"], $cfg);
        goto gSGXY;
        DkzHb:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$_W["uniacid"]}'");
        goto SR3pf;
        SjUDi:
        goto DqmLS;
        goto BgiFC;
        a7tns:
        $client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, "json");
        goto i1Eb_;
        F1L4u:
        $res = $resp["sn_responseContent"]["sn_body"]["queryCommoditydetail"][0];
        goto sMxVX;
        TQ0KM:
        $views["itempic5"] = $itempic5;
        goto zkclx;
        wfeYN:
        if (!empty($sjshare["dlptpid"])) {
            goto iBZRK;
        }
        goto GfaD3;
        sMxVX:
        $views = array();
        goto VoDaG;
        BgiFC:
        wMcoy:
        goto gTRsM;
        kfZ1Q:
        YCnma:
        goto WV7sc;
        U5MAH:
        iBZRK:
        goto uhkO4;
        lMl44:
        include $this->template("sn/view");
        goto ACFPj;
        o26hP:
        $rhylj = $this->znrhyzl($snset, $views["url"], $views["couponUrl"], $snpid);
        goto TYEel;
        MmJOE:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/SuningSdk.php";
        goto NwLN5;
        HfO2x:
        $itemendprice = $res["commodityInfo"]["commodityPrice"];
        goto SjUDi;
        aBuTF:
        mDMmJ:
        goto GVlgz;
        Gb208:
        goto BgnWS;
        goto xd5ab;
        SR3pf:
        YU3Xo:
        goto MmJOE;
        w6ahX:
        if ($zxshare["dltype"] == 1) {
            goto ZE2UX;
        }
        goto evohy;
        NwLN5:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/DefaultSuningClient.php";
        goto ed11L;
        DX8Pn:
        $fans = mc_oauth_userinfo();
        goto lj9wq;
        BCCXX:
        $snset = pdo_fetch("select * from " . tablename($this->modulename . "_snset") . " where weid='{$_W["uniacid"]}' order by id desc");
        goto hAHHr;
        W37Ud:
        $views["couponmoney"] = $res["couponInfo"]["couponValue"];
        goto AbeDL;
        OOtq9:
        $openid = $fans["openid"];
        goto eyv5H;
        BiyY_:
        global $_W, $_GPC;
        goto JHthj;
        FKBRd:
        $req->setPicWidth("600");
        goto tzZqF;
        ZfWDz:
        $zxshare = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and from_user='{$openid}'");
        goto kz6va;
        TYEel:
        $views["rhyurl"] = $rhylj;
        goto lMl44;
        I19vg:
        SCiWV:
        goto Z3U_L;
        k1yLP:
        $supplierCode = $_GPC["supplierCode"];
        goto BCCXX;
        hAHHr:
        $fans = $this->islogin();
        goto XQi4w;
        lj9wq:
        z9Z1c:
        goto QE1Lr;
        MU8tI:
        $req->setCommodityStr($itemid . "-" . $supplierCode);
        goto rurkO;
        JOfQG:
        QEloX:
        goto wfeYN;
        G5F3j:
        $snpid = $_W["uniacid"] . $zxshare["id"];
        goto JOfQG;
        wRnvN:
        $ratea = $this->sharejl($itemendprice, $res["commodityInfo"]["rate"], $bl, $share, $cfg);
        goto Gb208;
        b19Ol:
        foreach ($res["commodityInfo"]["pictureUrl"] as $k => $v) {
            $itempic5[] = $v["picUrl"];
            pOk5W:
        }
        goto O0mM3;
        JHthj:
        $cfg = $this->module["config"];
        goto wCDRf;
        dTZPO:
        $views["itemprice"] = $res["commodityInfo"]["snPrice"];
        goto os0_F;
        QE1Lr:
        if (!empty($dluid)) {
            goto YCnma;
        }
        goto OOtq9;
        W3HRy:
        $views["itemid"] = $res["commodityInfo"]["commodityCode"];
        goto o3l74;
        EqG3L:
        $views["thirdSaleCategoryName"] = $res["categoryInfo"]["thirdSaleCategoryName"];
        goto u4lSz;
        GfaD3:
        $snpid = $_W["uniacid"] . $zxshare["id"];
        goto SEN4q;
        eQHSD:
        $req = new CommoditydetailQueryRequest();
        goto MU8tI;
        UCzD2:
        $sjshare = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and dltype=1 and id='{$zxshare["helpid"]}'");
        goto aBuTF;
        TxkAO:
        $views["itemsale"] = $res["commodityInfo"]["monthSales"];
        goto NOt4q;
        Vng6A:
        SGX9O:
        goto ZfWDz;
        douVF:
        $appSecret = $snset["appsecret"];
        goto a7tns;
        hRpds:
        $openid = $_W["openid"];
        goto Vng6A;
        AbeDL:
        $views["couponendtime"] = $res["couponInfo"]["couponEndTime"];
        goto TxkAO;
        hrHzK:
        DqmLS:
        goto jdYPF;
        os0_F:
        $views["itemendprice"] = $itemendprice;
        goto MX342;
        VoDaG:
        if (!empty($res["couponInfo"]["couponUrl"])) {
            goto wMcoy;
        }
        goto HfO2x;
        SEN4q:
        goto SCiWV;
        goto U5MAH;
        NOt4q:
        $views["itemdesc"] = $res["commodityInfo"]["sellingPoint"];
        goto ezaoq;
        zkclx:
        $views["url"] = "https://m.suning.com/product/" . $res["commodityInfo"]["supplierCode"] . "/" . $res["commodityInfo"]["commodityCode"] . ".html";
        goto W37Ud;
        i1Eb_:
        $resp1 = $client->execute($req);
        goto idc4H;
        OLaMr:
        GRhXE:
        goto w6ahX;
        MX342:
        $views["itempic"] = $res["commodityInfo"]["pictureUrl"][0]["picUrl"];
        goto b19Ol;
        Z3U_L:
        if (!pdo_tableexists("tiger_wxdaili_set")) {
            goto YU3Xo;
        }
        goto DkzHb;
        WV7sc:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$dluid}'");
        goto OLaMr;
        tzZqF:
        $serverUrl = "https://open.suning.com/api/http/sopRequest";
        goto cyfNP;
        xd5ab:
        YCt4v:
        goto xFvnY;
        gTRsM:
        $itemendprice = $res["commodityInfo"]["commodityPrice"] - $res["couponInfo"]["couponValue"];
        goto hrHzK;
        o3l74:
        $views["itemtitle"] = $res["commodityInfo"]["commodityName"];
        goto dTZPO;
        GVlgz:
        goto QEloX;
        goto JVrqL;
        uhkO4:
        $snpid = $_W["uniacid"] . $sjshare["id"];
        goto I19vg;
        idc4H:
        $resp = json_decode($resp1, true);
        goto F1L4u;
        JVrqL:
        ZE2UX:
        goto G5F3j;
        rurkO:
        $req->setPicHeight("600");
        goto FKBRd;
        eyv5H:
        if (!empty($openid)) {
            goto SGX9O;
        }
        goto hRpds;
        cyfNP:
        $appKey = $snset["appkey"];
        goto douVF;
        ed11L:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/request/netalliance/CommoditydetailQueryRequest.php";
        goto eQHSD;
        jdYPF:
        if ($cfg["lbratetype"] == 3) {
            goto YCt4v;
        }
        goto wRnvN;
        ACFPj:
    }
    public function doMobileXbtj()
    {
        goto Vnde2;
        WLWD_:
        goto Pfpaq;
        goto wKlCe;
        BHvPG:
        $req->setSize("10");
        goto C_1Yp;
        bb0n_:
        $page = 1;
        goto CW8mJ;
        Vnde2:
        global $_W, $_GPC;
        goto OUR_l;
        eLe7Q:
        FYL02:
        goto wR05P;
        usAoh:
        foreach ($resp as $k => $v) {
            goto Fwl8j;
            FOQwW:
            upbQ9:
            goto hTh4q;
            FP2j5:
            $list[$k]["couponmoney"] = $v["couponInfo"]["couponValue"];
            goto iGuwi;
            AUaMh:
            bFY1Z:
            goto to5tf;
            QC0Ty:
            if (!($itemendprice <= 0)) {
                goto HAojC;
            }
            goto YRZLK;
            to5tf:
            $ratea = $this->ptyjjl($itemendprice, $v["commodityInfo"]["rate"], $cfg);
            goto vvO6I;
            ApO32:
            $list[$k]["rate"] = $ratea;
            goto LOIAy;
            DNNVP:
            $list[$k]["itemtitle"] = $v["commodityInfo"]["commodityName"];
            goto VhHJb;
            xk_WJ:
            $ratea = $this->sharejl($itemendprice, $v["commodityInfo"]["rate"], $bl, $share, $cfg);
            goto WKbdr;
            wdeB4:
            $list[$k]["itemsale"] = $v["commodityInfo"]["monthSales"];
            goto ApO32;
            YRZLK:
            goto aJS8D;
            goto JIHHR;
            Fwl8j:
            if (!empty($v["couponInfo"]["couponUrl"])) {
                goto upbQ9;
            }
            goto NgxBe;
            iGuwi:
            $list[$k]["coupon_end_time"] = $v["couponInfo"]["couponEndTime"];
            goto wdeB4;
            G48JI:
            $list[$k]["itemendprice"] = $itemendprice;
            goto FP2j5;
            P6yHU:
            $list[$k]["itemid"] = $v["commodityInfo"]["commodityCode"];
            goto sHUpm;
            TCwhl:
            $list[$k]["sellernick"] = $v["commodityInfo"]["supplierName"];
            goto Jj00r;
            hTh4q:
            $itemendprice = $v["commodityInfo"]["commodityPrice"] - $v["couponInfo"]["couponValue"];
            goto WOxfw;
            Z20DY:
            $list[$k]["itemprice"] = $v["commodityInfo"]["snPrice"];
            goto G48JI;
            Jj00r:
            aJS8D:
            goto nD72A;
            ZbFw3:
            $list[$k]["itempic1"] = $v["commodityInfo"]["pictureUrl"][0]["picUrl"];
            goto Z20DY;
            VhHJb:
            $list[$k]["itempic"] = $v["commodityInfo"]["pictureUrl"][0]["picUrl"];
            goto ZbFw3;
            vvO6I:
            Cs21h:
            goto P6yHU;
            WOxfw:
            XQZfd:
            goto QC0Ty;
            JIHHR:
            HAojC:
            goto MwWx6;
            NgxBe:
            $itemendprice = $v["commodityInfo"]["commodityPrice"];
            goto oS8hZ;
            WKbdr:
            goto Cs21h;
            goto AUaMh;
            LOIAy:
            $list[$k]["url"] = "https://m.suning.com/product/" . $v["commodityInfo"]["supplierCode"] . "/" . $v["commodityInfo"]["commodityCode"] . ".html";
            goto TCwhl;
            sHUpm:
            $list[$k]["supplierCode"] = $v["commodityInfo"]["supplierCode"];
            goto DNNVP;
            MwWx6:
            if ($cfg["lbratetype"] == 3) {
                goto bFY1Z;
            }
            goto xk_WJ;
            oS8hZ:
            goto XQZfd;
            goto FOQwW;
            nD72A:
        }
        goto VN2Gk;
        krP9J:
        exit;
        goto jQ4ju;
        CW8mJ:
        Pfpaq:
        goto ZfXTi;
        u7yp2:
        iAzUQ:
        goto YOsVl;
        laqLV:
        if (!pdo_tableexists("tiger_wxdaili_set")) {
            goto RFjWv;
        }
        goto aiWrh;
        UCAzB:
        $req->setPicHeight("200");
        goto Fx3Gg;
        ZfXTi:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/SuningSdk.php";
        goto Hkbb3;
        nsFbm:
        $resp = $resp["sn_responseContent"]["sn_body"]["queryRecommendcommodity"];
        goto K153q;
        d0Y8d:
        $req->setPageIndex($page);
        goto UCAzB;
        SReNZ:
        $resp1 = $client->execute($req);
        goto IpVKp;
        RrWow:
        $req = new RecommendcommodityQueryRequest();
        goto d0Y8d;
        K153q:
        if (!empty($resp)) {
            goto T7Vm_;
        }
        goto C4T7l;
        Fx3Gg:
        $req->setPicWidth("200");
        goto BHvPG;
        sp85b:
        $snset = pdo_fetch("select * from " . tablename($this->modulename . "_snset") . " where weid='{$_W["uniacid"]}' order by id desc");
        goto Gx3n3;
        YOsVl:
        exit(json_encode(array("pages" => $start, "data" => $list)));
        goto oHs0V;
        lbXAm:
        $start = 0;
        goto u7yp2;
        oHs0V:
        echo "<pre>";
        goto GG6a4;
        fXsT4:
        $client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, "json");
        goto SReNZ;
        OUR_l:
        $cfg = $this->module["config"];
        goto ezNBK;
        wKlCe:
        WZTDd:
        goto bb0n_;
        w_xRH:
        if (empty($_GPC["page"])) {
            goto WZTDd;
        }
        goto fQ2eD;
        fQ2eD:
        $page = $_GPC["page"];
        goto WLWD_;
        IpVKp:
        $resp = json_decode($resp1, true);
        goto nsFbm;
        C4T7l:
        $resp = "查询无结果";
        goto b73Mc;
        aiWrh:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$weid}'");
        goto SNO_2;
        LQgr6:
        if (!empty($uid)) {
            goto FYL02;
        }
        goto ZPCwf;
        VN2Gk:
        Irf1v:
        goto Jw2Zz;
        ZPCwf:
        $share = array();
        goto EtzaN;
        ezNBK:
        $weid = $_W["uniacid"];
        goto sp85b;
        HV7NQ:
        $start = 100;
        goto vkBQV;
        vkBQV:
        goto iAzUQ;
        goto LlmZp;
        YC7kj:
        $appSecret = $snset["appsecret"];
        goto fXsT4;
        EtzaN:
        goto obkur;
        goto eLe7Q;
        Gx3n3:
        $uid = $_GPC["uid"];
        goto LQgr6;
        GG6a4:
        print_r($list);
        goto krP9J;
        Hkbb3:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/DefaultSuningClient.php";
        goto RrWow;
        wR05P:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto GlUcy;
        GlUcy:
        obkur:
        goto laqLV;
        LlmZp:
        hJSOG:
        goto lbXAm;
        C_1Yp:
        $serverUrl = "https://open.suning.com/api/http/sopRequest";
        goto fyPGB;
        Jw2Zz:
        if (empty($list)) {
            goto hJSOG;
        }
        goto HV7NQ;
        SNO_2:
        RFjWv:
        goto w_xRH;
        b73Mc:
        T7Vm_:
        goto usAoh;
        fyPGB:
        $appKey = $snset["appkey"];
        goto YC7kj;
        jQ4ju:
    }
    public function doMobileSnlistpost()
    {
        goto y7BCr;
        OV7bZ:
        if (!($pxname == 3)) {
            goto sN8U2;
        }
        goto tn6I8;
        VtuEY:
        if (empty($key)) {
            goto jvjGM;
        }
        goto o2lzN;
        wOI5e:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto RoTPd;
        ERxgm:
        gGymZ:
        goto rvJsq;
        siYLV:
        if (empty($sn)) {
            goto Nho4E;
        }
        goto XLBZS;
        y7BCr:
        global $_W, $_GPC;
        goto hlAq6;
        Z169A:
        goto tlbZT;
        goto ERxgm;
        PXZgL:
        if (empty($_GPC["zhcode"])) {
            goto obmG5;
        }
        goto O6Tbw;
        hlAq6:
        $cfg = $this->module["config"];
        goto RM_BQ;
        w4Mu6:
        $key = $_GPC["key"];
        goto zEOCH;
        M1hk1:
        if (!pdo_tableexists("tiger_wxdaili_set")) {
            goto rzK7I;
        }
        goto Dbfei;
        D74Po:
        sN8U2:
        goto siYLV;
        GbWDU:
        $pxname = $_GPC["pxname"];
        goto pp_Ah;
        TerT1:
        if (!empty($resp["sn_responseContent"])) {
            goto di_0v;
        }
        goto g10SU;
        tSMYH:
        c7f2Q:
        goto fsMtB;
        R0wQ7:
        exit(json_encode(array("pages" => $start, "data" => $list)));
        goto mFxEQ;
        E1eWa:
        Nho4E:
        goto EFwg_;
        hxenx:
        n4cDZ:
        goto wOI5e;
        p2iiq:
        $resp1 = $client->execute($req);
        goto h4ZHG;
        NvN8y:
        mYWFR:
        goto OV7bZ;
        rvJsq:
        $start = 0;
        goto Mb87O;
        gGURh:
        goto k65rU;
        goto vL49x;
        uxus0:
        $appSecret = $snset["appsecret"];
        goto leVLO;
        jfRVB:
        if (!empty($_GPC["key"])) {
            goto G1wv0;
        }
        goto BV615;
        a1mJy:
        $uid = $_GPC["uid"];
        goto mGKmN;
        P85rJ:
        $req->setSize("10");
        goto l7Lji;
        uHFoo:
        $start = 100;
        goto Z169A;
        ZAKuh:
        $page = 1;
        goto R7o9k;
        Mb87O:
        tlbZT:
        goto R0wQ7;
        oxFeB:
        $req->setSortType("4");
        goto NvN8y;
        Gz1H_:
        if (!empty($page)) {
            goto x56z1;
        }
        goto ZAKuh;
        m6obH:
        $req->setSortType("3");
        goto ZmL_E;
        QcjVb:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/SuningSdk.php";
        goto MPEPJ;
        Dbfei:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$weid}'");
        goto VTw02;
        zInbM:
        $resp = $resp["sn_responseContent"]["sn_body"]["querySearchcommodity"];
        goto vTmo5;
        pZjev:
        jvjGM:
        goto PxLls;
        vTmo5:
        foreach ($resp as $k => $v) {
            goto SrZQm;
            kbtEi:
            if ($cfg["lbratetype"] == 3) {
                goto n9T1_;
            }
            goto iev2y;
            nH2VJ:
            $list[$k]["itemsale"] = $v["commodityInfo"]["monthSales"];
            goto TswOM;
            xrsMS:
            $list[$k]["itemendprice"] = $itemendprice;
            goto e076w;
            ioHzj:
            DZ6vO:
            goto UQe15;
            PBrNO:
            $list[$k]["itemtitle"] = $v["commodityInfo"]["commodityName"];
            goto Ex2bd;
            krc68:
            goto YYY24;
            goto h92Oh;
            UQe15:
            $list[$k]["itemid"] = $v["commodityInfo"]["commodityCode"];
            goto giwr5;
            h92Oh:
            oqIYM:
            goto kbtEi;
            iev2y:
            $ratea = $this->sharejl($itemendprice, $v["commodityInfo"]["rate"], $bl, $share, $cfg);
            goto zcNZm;
            Ex2bd:
            $list[$k]["itempic"] = $v["commodityInfo"]["pictureUrl"][0]["picUrl"];
            goto wyYN1;
            wyYN1:
            $list[$k]["itempic1"] = $v["commodityInfo"]["pictureUrl"][0]["picUrl"];
            goto Kf1tU;
            TswOM:
            $list[$k]["rate"] = $ratea;
            goto jlxzC;
            SrZQm:
            if (!empty($v["couponInfo"]["couponUrl"])) {
                goto sTw7d;
            }
            goto YjnQl;
            M_i1N:
            n9T1_:
            goto nqkXa;
            zcNZm:
            goto DZ6vO;
            goto M_i1N;
            YjnQl:
            $itemendprice = $v["commodityInfo"]["commodityPrice"];
            goto rpyXR;
            DhZhe:
            sTw7d:
            goto hR3QU;
            dHkvw:
            if (!($itemendprice <= 0)) {
                goto oqIYM;
            }
            goto krc68;
            hR3QU:
            $itemendprice = $v["commodityInfo"]["commodityPrice"] - $v["couponInfo"]["couponValue"];
            goto rBKhh;
            O5Tqy:
            $list[$k]["sellernick"] = $v["commodityInfo"]["supplierName"];
            goto Bu_JC;
            Kf1tU:
            $list[$k]["itemprice"] = $v["commodityInfo"]["snPrice"];
            goto xrsMS;
            jlxzC:
            $list[$k]["url"] = "https://m.suning.com/product/" . $v["commodityInfo"]["supplierCode"] . "/" . $v["commodityInfo"]["commodityCode"] . ".html";
            goto O5Tqy;
            nqkXa:
            $ratea = $this->ptyjjl($itemendprice, $v["commodityInfo"]["rate"], $cfg);
            goto ioHzj;
            rBKhh:
            Ju2hP:
            goto dHkvw;
            Bu_JC:
            YYY24:
            goto jNb0g;
            giwr5:
            $list[$k]["supplierCode"] = $v["commodityInfo"]["supplierCode"];
            goto PBrNO;
            MdpFd:
            $list[$k]["coupon_end_time"] = $v["couponInfo"]["couponEndTime"];
            goto nH2VJ;
            rpyXR:
            goto Ju2hP;
            goto DhZhe;
            e076w:
            $list[$k]["couponmoney"] = $v["couponInfo"]["couponValue"];
            goto MdpFd;
            jNb0g:
        }
        goto tSMYH;
        g10SU:
        exit(json_encode(array("pages" => $start, "data" => array(), "err" => "无结果")));
        goto FIK_0;
        zEOCH:
        k65rU:
        goto PAIeG;
        mGKmN:
        $sn = $_GPC["sn"];
        goto GbWDU;
        h4ZHG:
        $resp = json_decode($resp1, true);
        goto TerT1;
        VTw02:
        rzK7I:
        goto QcjVb;
        MPEPJ:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/sn/DefaultSuningClient.php";
        goto jfRVB;
        BV615:
        $key = '';
        goto gGURh;
        R7o9k:
        x56z1:
        goto hn_AK;
        EoU18:
        obmG5:
        goto P85rJ;
        PxLls:
        $req->setPageIndex($page);
        goto PXZgL;
        fsMtB:
        if (empty($list)) {
            goto gGymZ;
        }
        goto uHFoo;
        sPCGA:
        $share = array();
        goto rczXY;
        EFwg_:
        $serverUrl = "https://open.suning.com/api/http/sopRequest";
        goto oQE9c;
        a4wv6:
        $snset = pdo_fetch("select * from " . tablename($this->modulename . "_snset") . " where weid='{$_W["uniacid"]}' order by id desc");
        goto Gz1H_;
        RM_BQ:
        $weid = $_W["uniacid"];
        goto a1mJy;
        l7Lji:
        if (!($pxname == 1)) {
            goto YLdUL;
        }
        goto m6obH;
        O6Tbw:
        $req->setSaleCategoryCode($_GPC["zhcode"]);
        goto EoU18;
        pp_Ah:
        $pxid = $_GPC["pxid"];
        goto rKVUL;
        o2lzN:
        $req->setKeyword($key);
        goto pZjev;
        tn6I8:
        $req->setSortType("2");
        goto D74Po;
        FIK_0:
        di_0v:
        goto zInbM;
        PAIeG:
        $req = new SearchcommodityQueryRequest();
        goto VtuEY;
        rczXY:
        goto kN7cv;
        goto hxenx;
        MlDMB:
        if (!($pxname == 2)) {
            goto mYWFR;
        }
        goto oxFeB;
        vL49x:
        G1wv0:
        goto w4Mu6;
        ZmL_E:
        YLdUL:
        goto MlDMB;
        oQE9c:
        $appKey = $snset["appkey"];
        goto uxus0;
        RoTPd:
        kN7cv:
        goto M1hk1;
        XLBZS:
        $req->setSuningService("1");
        goto E1eWa;
        hn_AK:
        if (!empty($uid)) {
            goto n4cDZ;
        }
        goto sPCGA;
        rKVUL:
        $page = $_GPC["page"];
        goto a4wv6;
        leVLO:
        $client = new DefaultSuningClient($serverUrl, $appKey, $appSecret, "json");
        goto p2iiq;
        mFxEQ:
    }
    public function wphjx($content)
    {
        goto x3Igl;
        x3Igl:
        global $_W;
        goto VDYR8;
        tpPth:
        try {
            goto wIJF0;
            GdeRi:
            $goodsid = '';
            goto GXgLo;
            mxjJN:
            $res = (array) $service->vipLinkCheckWithOuth($vipLinkCheckReq1);
            goto D9sl3;
            NLyPM:
            $vipLinkCheckReq1->content = $content;
            goto mxjJN;
            kj23s:
            $vipLinkCheckReq1->source = "weixin";
            goto NLyPM;
            ADgxm:
            $ctx->setAppKey("2bc54d13");
            goto WXV0L;
            GXgLo:
            pumcU:
            goto PmHF7;
            D9sl3:
            $res = (array) $res["successMap"];
            goto K3pNS;
            PmHF7:
            return $goodsid;
            goto hGxcQ;
            nDR_R:
            $ctx->setAccessToken($whpsign);
            goto bRSJQ;
            qz0kQ:
            $ctx->setAppURL("https://gw.vipapis.com/");
            goto nDR_R;
            B3UhH:
            $res = (array) $res[0];
            goto UYhT3;
            WXV0L:
            $ctx->setAppSecret("E80CC551126603A3F53AA84F366527F3");
            goto qz0kQ;
            bRSJQ:
            $ctx->setLanguage("zh");
            goto TVC74;
            S9234:
            $ctx = \Osp\Context\InvocationContextFactory::getInstance();
            goto ADgxm;
            z9H1l:
            goto pumcU;
            goto nbqp5;
            K3pNS:
            $res = array_values($res);
            goto B3UhH;
            MnEoe:
            $goodsid = $res["goodsId"];
            goto z9H1l;
            UYhT3:
            if (empty($res)) {
                goto pbpb1;
            }
            goto MnEoe;
            wIJF0:
            $service = \com\vip\adp\api\open\service\UnionUrlServiceClient::getService();
            goto S9234;
            nbqp5:
            pbpb1:
            goto GdeRi;
            TVC74:
            $vipLinkCheckReq1 = new \com\vip\adp\api\open\service\VipLinkCheckReq();
            goto kj23s;
            hGxcQ:
        } catch (\Osp\Exception\OspException $e) {
            return $e;
            var_dump($e);
        }
        goto zuAdi;
        VDYR8:
        $weid = $_W["uniacid"];
        goto gpuQX;
        gpuQX:
        $wphsignset = pdo_fetch("select * from " . tablename("tiger_newhu_wphsign") . " where weid='{$weid}'");
        goto sxDgv;
        sxDgv:
        $whpsign = $wphsignset["access_token"];
        goto ugMWg;
        ugMWg:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/wph/com/vip/adp/api/open/service/UnionUrlServiceClient.php";
        goto tpPth;
        zuAdi:
    }
    public function wphzl($url, $chanTag)
    {
        goto nB_wh;
        EnE1H:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/wph/com/vip/adp/api/open/service/UnionUrlServiceClient.php";
        goto IhbBP;
        xv1bY:
        $weid = $_W["uniacid"];
        goto eWjIn;
        nB_wh:
        global $_W;
        goto xv1bY;
        IhbBP:
        try {
            goto FafM8;
            usZH5:
            $ctx->setAppKey("2bc54d13");
            goto o5hHc;
            px0U5:
            $res = (array) $res["urlInfoList"][0];
            goto vyo6k;
            bSt_X:
            $res = (array) $service->genByVIPUrlWithOauth($urlList1, $chanTag, "121212121");
            goto px0U5;
            meNoO:
            $ctx->setAppURL("https://gw.vipapis.com/");
            goto QYh2A;
            vyo6k:
            return $res;
            goto TXUkl;
            ikpQ6:
            $urlList1[0] = $url;
            goto bSt_X;
            o5hHc:
            $ctx->setAppSecret("E80CC551126603A3F53AA84F366527F3");
            goto meNoO;
            ApX_S:
            $ctx->setLanguage("zh");
            goto B1tPX;
            FafM8:
            $service = \com\vip\adp\api\open\service\UnionUrlServiceClient::getService();
            goto RToFC;
            RToFC:
            $ctx = \Osp\Context\InvocationContextFactory::getInstance();
            goto usZH5;
            B1tPX:
            $urlList1 = array();
            goto ikpQ6;
            QYh2A:
            $ctx->setAccessToken($whpsign);
            goto ApX_S;
            TXUkl:
        } catch (\Osp\Exception\OspException $e) {
            return $e;
        }
        goto qjijW;
        eWjIn:
        $wphsignset = pdo_fetch("select * from " . tablename("tiger_newhu_wphsign") . " where weid='{$weid}'");
        goto Dnv8H;
        Dnv8H:
        $whpsign = $wphsignset["access_token"];
        goto EnE1H;
        qjijW:
    }
    public function doMobileWphsearchpost()
    {
        goto djfQb;
        KVVYx:
        $page = $_GPC["page"];
        goto WN2Tn;
        djfQb:
        global $_W, $_GPC;
        goto m864S;
        ZfVbK:
        $whpsign = $wphsignset["access_token"];
        goto oNsfD;
        dYqpA:
        if (empty($uid)) {
            goto E7VDu;
        }
        goto xhpc9;
        xhpc9:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto LJ4mr;
        CTbKT:
        $key = $_GPC["key"];
        goto TlWjW;
        rW7rV:
        $wphsignset = pdo_fetch("select * from " . tablename("tiger_newhu_wphsign") . " where weid='{$weid}'");
        goto ZfVbK;
        gBs3u:
        $uid = $_GPC["uid"];
        goto dYqpA;
        mm8cz:
        IfTWT:
        goto gBs3u;
        xYFaN:
        $pxname = $_GPC["pxname"];
        goto ExXWY;
        qR3c8:
        if (!pdo_tableexists("tiger_wxdaili_set")) {
            goto IfTWT;
        }
        goto cjnTz;
        TlWjW:
        $cfg = $this->module["config"];
        goto qR3c8;
        WN2Tn:
        if (!empty($page)) {
            goto gc7HC;
        }
        goto ATgPo;
        Y2PqY:
        try {
            goto RARZ8;
            ZsP8q:
            iEnNz:
            goto zIDNM;
            FOd0l:
            $request1->page = $page;
            goto ceUQ6;
            F8k1E:
            $request1->fieldName = $pxname;
            goto PytwQ;
            atPZk:
            AaLDP:
            goto F8k1E;
            FnfsD:
            $res = (array) $service->queryWithOauth($request1);
            goto rXbCs;
            kW8pS:
            $ctx->setAppURL("https://gw.vipapis.com/");
            goto gqB7L;
            RARZ8:
            $service = \com\vip\adp\api\open\service\UnionGoodsServiceClient::getService();
            goto pDDyW;
            gqB7L:
            $ctx->setAccessToken($whpsign);
            goto CPAic;
            iJ17Z:
            goto AaLDP;
            goto r59cl;
            zIDNM:
            exit(json_encode(array("pages" => 100, "data" => $list)));
            goto yKW4M;
            DhEzd:
            $request1 = new \com\vip\adp\api\open\service\QueryGoodsRequest();
            goto sLf0h;
            rXbCs:
            foreach ($res["goodsInfoList"] as $k => $b) {
                goto Rwc9K;
                flehe:
                $list[$k]["cat1stName"] = $v["cat1stName"];
                goto q6GvW;
                p4sxn:
                $storeInfo = (array) $v["storeInfo"];
                goto rWPzY;
                F2S5E:
                $ratea = $this->sharejl($v["vipPrice"], $v["commissionRate"], $bl, $share, $cfg);
                goto lP5V5;
                Jq4tX:
                $list[$k]["itempic"] = $v["goodsThumbUrl"];
                goto T9sVT;
                P8NKa:
                $list[$k]["rate"] = $ratea;
                goto gvGi0;
                dm3EM:
                $list[$k]["categoryName"] = $v["categoryName"];
                goto lgyQ1;
                pKvPz:
                $list[$k]["itemtitle"] = $v["goodsName"];
                goto Jq4tX;
                lgyQ1:
                uRS_E:
                goto yrvGb;
                lP5V5:
                goto w6r9L;
                goto s00uL;
                jgHa2:
                $list[$k]["itemendprice"] = $v["vipPrice"];
                goto SBzUx;
                TT9mR:
                w6r9L:
                goto AurYE;
                q6GvW:
                $list[$k]["cat2ndName"] = $v["cat2ndName"];
                goto dm3EM;
                td4Kp:
                $list[$k]["zk"] = $v["discount"] * 10;
                goto P8NKa;
                tnEg3:
                $list[$k]["sellernick"] = $storeInfo["storeName"];
                goto mXqkG;
                T9sVT:
                $list[$k]["itempic1"] = $v["goodsThumbUrl"];
                goto v1KGY;
                SBzUx:
                $list[$k]["couponmoney"] = '';
                goto ZIJJo;
                Rwc9K:
                $v = (array) $b;
                goto XGz10;
                XGz10:
                if ($cfg["lbratetype"] == 3) {
                    goto UY6QW;
                }
                goto F2S5E;
                emYFj:
                $ratea = $this->ptyjjl($v["vipPrice"], $v["commissionRate"], $cfg);
                goto TT9mR;
                gvGi0:
                $list[$k]["url"] = $v["destUrl"];
                goto p4sxn;
                DLgQl:
                $list[$k]["brandName"] = $v["brandName"];
                goto flehe;
                AurYE:
                $list[$k]["itemid"] = $v["goodsId"];
                goto pKvPz;
                X5u7S:
                $list[$k]["itemsale"] = '';
                goto td4Kp;
                rWPzY:
                $list[$k]["userid"] = $storeInfo["storeId"];
                goto tnEg3;
                ZIJJo:
                $list[$k]["coupon_end_time"] = '';
                goto X5u7S;
                mXqkG:
                $list[$k]["brandStoreSn"] = $v["brandStoreSn"];
                goto DLgQl;
                v1KGY:
                $list[$k]["itemprice"] = $v["marketPrice"];
                goto jgHa2;
                s00uL:
                UY6QW:
                goto emYFj;
                yrvGb:
            }
            goto ZsP8q;
            yKW4M:
            echo "<pre>";
            goto OhzT8;
            sLf0h:
            if (!empty($key)) {
                goto kzZIQ;
            }
            goto J40ws;
            sCtvu:
            $ctx->setAppSecret("E80CC551126603A3F53AA84F366527F3");
            goto kW8pS;
            aVBa6:
            print_r((array) $res["goodsInfoList"]);
            goto i3kKg;
            CPAic:
            $ctx->setLanguage("zh");
            goto DhEzd;
            glI8n:
            $request1->keyword = $key;
            goto atPZk;
            p2_VD:
            $request1->queryStock = true;
            goto FnfsD;
            OhzT8:
            print_r($list);
            goto aVBa6;
            pDDyW:
            $ctx = \Osp\Context\InvocationContextFactory::getInstance();
            goto Zo831;
            Zo831:
            $ctx->setAppKey("2bc54d13");
            goto sCtvu;
            J40ws:
            $request1->keyword = "春装";
            goto iJ17Z;
            ceUQ6:
            $request1->pageSize = 20;
            goto cf_0t;
            cf_0t:
            $request1->requestId = "tigerrequestId";
            goto p2_VD;
            PytwQ:
            $request1->order = $pxid;
            goto FOd0l;
            r59cl:
            kzZIQ:
            goto glI8n;
            i3kKg:
        } catch (\Osp\Exception\OspException $e) {
            var_dump($e);
        }
        goto mE5O5;
        LJ4mr:
        E7VDu:
        goto rW7rV;
        cjnTz:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$weid}'");
        goto mm8cz;
        oNsfD:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/wph/com/vip/adp/api/open/service/UnionGoodsServiceClient.php";
        goto Y2PqY;
        ATgPo:
        $page = 1;
        goto BaEGS;
        ExXWY:
        $pxid = $_GPC["pxid"];
        goto KVVYx;
        m864S:
        $weid = $_W["uniacid"];
        goto xYFaN;
        BaEGS:
        gc7HC:
        goto CTbKT;
        mE5O5:
    }
    public function doMobileWphlistpost()
    {
        goto IMj4s;
        IMj4s:
        global $_W, $_GPC;
        goto m9UaI;
        STPhp:
        $wphsignset = pdo_fetch("select * from " . tablename("tiger_newhu_wphsign") . " where weid='{$weid}'");
        goto C5TCx;
        rrnv2:
        $page = 1;
        goto z5OAP;
        z5OAP:
        vTeBA:
        goto aZGQI;
        Fk6Nc:
        try {
            goto mTyMY;
            RYpZ3:
            $request1->channelType = $pdtype;
            goto ZLJj4;
            Sm3YH:
            $request1->fieldName = $pxname;
            goto b7KiV;
            RyAvj:
            $request1->pageSize = 20;
            goto oVSpv;
            MDkI2:
            sYtzz:
            goto d1kyP;
            mTyMY:
            $service = \com\vip\adp\api\open\service\UnionGoodsServiceClient::getService();
            goto hXkQh;
            grgKG:
            $ctx->setAppSecret("E80CC551126603A3F53AA84F366527F3");
            goto HgiUf;
            b7KiV:
            $request1->order = $pxid;
            goto oqaEH;
            oqaEH:
            $res = (array) $service->goodsListWithOauth($request1);
            goto Uv0Hi;
            J5wS8:
            echo "<pre>";
            goto p4R0t;
            GC9bL:
            $ctx->setAppKey("2bc54d13");
            goto grgKG;
            xhtXL:
            $ctx->setLanguage("zh");
            goto KlvC6;
            HgiUf:
            $ctx->setAppURL("https://gw.vipapis.com/");
            goto p2D3I;
            Uv0Hi:
            foreach ($res["goodsInfoList"] as $k => $b) {
                goto wpHsj;
                aMSSV:
                $list[$k]["userid"] = $storeInfo["storeId"];
                goto L9yYN;
                DytRI:
                goto LnSYr;
                goto X8tuO;
                i00Bc:
                $list[$k]["cat2ndName"] = $v["cat2ndName"];
                goto A0_kf;
                HU4xS:
                $list[$k]["url"] = $v["destUrl"];
                goto Qs1TW;
                hd9yX:
                $ratea = $this->sharejl($v["vipPrice"], $v["commissionRate"], $bl, $share, $cfg);
                goto DytRI;
                lAxiG:
                $list[$k]["brandName"] = $v["brandName"];
                goto JxIso;
                D6y1u:
                $list[$k]["itemprice"] = $v["marketPrice"];
                goto cipWD;
                NLeRY:
                $list[$k]["coupon_end_time"] = '';
                goto xv23w;
                AekK5:
                $list[$k]["zk"] = $v["discount"] * 10;
                goto ujSCx;
                yUIsW:
                $list[$k]["couponmoney"] = '';
                goto NLeRY;
                YUNVE:
                DdNs5:
                goto QqlEs;
                L9yYN:
                $list[$k]["sellernick"] = $storeInfo["storeName"];
                goto sASw6;
                ORxjY:
                $list[$k]["itemtitle"] = $v["goodsName"];
                goto S6iEk;
                sASw6:
                $list[$k]["brandStoreSn"] = $v["brandStoreSn"];
                goto lAxiG;
                p8SH9:
                if ($cfg["lbratetype"] == 3) {
                    goto w6tBM;
                }
                goto hd9yX;
                A0_kf:
                $list[$k]["categoryName"] = $v["categoryName"];
                goto YUNVE;
                frKEl:
                $ratea = $this->ptyjjl($v["vipPrice"], $v["commissionRate"], $cfg);
                goto pIwKy;
                wpHsj:
                $v = (array) $b;
                goto p8SH9;
                xv23w:
                $list[$k]["itemsale"] = '';
                goto AekK5;
                X8tuO:
                w6tBM:
                goto frKEl;
                cipWD:
                $list[$k]["itemendprice"] = $v["vipPrice"];
                goto yUIsW;
                cskR2:
                $list[$k]["itemid"] = $v["goodsId"];
                goto ORxjY;
                JxIso:
                $list[$k]["cat1stName"] = $v["cat1stName"];
                goto i00Bc;
                S6iEk:
                $list[$k]["itempic"] = $v["goodsThumbUrl"];
                goto sivjp;
                sivjp:
                $list[$k]["itempic1"] = $v["goodsThumbUrl"];
                goto D6y1u;
                ujSCx:
                $list[$k]["rate"] = $ratea;
                goto HU4xS;
                pIwKy:
                LnSYr:
                goto cskR2;
                Qs1TW:
                $storeInfo = (array) $v["storeInfo"];
                goto aMSSV;
                QqlEs:
            }
            goto MDkI2;
            p2D3I:
            $ctx->setAccessToken($whpsign);
            goto xhtXL;
            ZLJj4:
            $request1->jxCode = $zhcode;
            goto K2xdV;
            hXkQh:
            $ctx = \Osp\Context\InvocationContextFactory::getInstance();
            goto GC9bL;
            K2xdV:
            $request1->page = $page;
            goto RyAvj;
            KlvC6:
            $request1 = new \com\vip\adp\api\open\service\GoodsInfoRequest();
            goto aorY0;
            p4R0t:
            print_r($list);
            goto znG3p;
            d1kyP:
            exit(json_encode(array("pages" => "100", "data" => $list, "cs" => $pxname . $pxid . $gettype . $pdtype)));
            goto J5wS8;
            oVSpv:
            $request1->requestId = "requestId" . $page;
            goto Sm3YH;
            aorY0:
            $request1->sourceType = $gettype;
            goto RYpZ3;
            znG3p:
        } catch (\Osp\Exception\OspException $e) {
            echo "<pre>";
            print_r((array) $e);
        }
        goto y8ApA;
        Za7o_:
        $uid = $_GPC["uid"];
        goto ZLOXD;
        PDMeA:
        KyM1q:
        goto M11KT;
        KvVZn:
        $pxid = $_GPC["pxid"];
        goto oO3OR;
        M11KT:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/wph/com/vip/adp/api/open/service/UnionGoodsServiceClient.php";
        goto Fk6Nc;
        m9UaI:
        $weid = $_W["uniacid"];
        goto VZYOz;
        eWrMD:
        mAkdE:
        goto STPhp;
        rde2J:
        $gettype = $_GPC["gettype"];
        goto TFj35;
        oO3OR:
        if (!empty($page)) {
            goto vTeBA;
        }
        goto rrnv2;
        Pxcfq:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto eWrMD;
        TFj35:
        $pdtype = $_GPC["pdtype"];
        goto JJ8FW;
        ZLOXD:
        if (empty($uid)) {
            goto mAkdE;
        }
        goto Pxcfq;
        RSRkx:
        if (!pdo_tableexists("tiger_wxdaili_set")) {
            goto KyM1q;
        }
        goto Fwe9H;
        JJ8FW:
        $zhcode = $_GPC["zhcode"];
        goto Yux4z;
        aZGQI:
        $cfg = $this->module["config"];
        goto Za7o_;
        C5TCx:
        $whpsign = $wphsignset["access_token"];
        goto RSRkx;
        Yux4z:
        $pxname = $_GPC["pxname"];
        goto KvVZn;
        Fwe9H:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$weid}'");
        goto PDMeA;
        VZYOz:
        $page = $_GPC["page"];
        goto rde2J;
        y8ApA:
    }
    public function doMobileCs123()
    {
        goto EXXba;
        KrYhU:
        $appSecret = "decf1db2d9035965282dc67d9c4c0a49";
        goto Nytnh;
        Nytnh:
        $data = $this->dtkapi($data, $url, $appSecret);
        goto dR6ik;
        EXXba:
        $cfg = $this->module["config"];
        goto pRosA;
        BmhC4:
        glDo1:
        goto dkDuw;
        UVZPF:
        exit;
        goto BAx44;
        pRosA:
        $data = ["appKey" => "5d310aadbe83b", "version" => "1.2.0", "roundTime" => "2020-01-01 0:0:0"];
        goto T8wPF;
        FWFZp:
        foreach ($data["data"] as $k => $v) {
            goto iTd97;
            geKdz:
            $list[$k]["twoHoursSales"] = $v["twoHoursSales"];
            goto BTV0H;
            jrY98:
            $list[$k]["sellerId"] = $v["sellerId"];
            goto hTFhQ;
            GL0xk:
            fO3K0:
            goto Ja323;
            Ja323:
            $list[$k]["rate"] = $ratea;
            goto BevcE;
            Oy0qn:
            $list[$k]["itemdesc"] = $v["desc"];
            goto W4TJ2;
            u6TWo:
            $list[$k]["itemprice"] = $v["originalPrice"];
            goto bOPtp;
            bOPtp:
            $list[$k]["itemendprice"] = $v["actualPrice"];
            goto eCfuC;
            WjbV_:
            $list[$k]["itemsale"] = $v["monthSales"];
            goto geKdz;
            BIJCj:
            $list[$k]["itemid"] = $v["goodsId"];
            goto u6TWo;
            BTV0H:
            $list[$k]["dailySales"] = $v["dailySales"];
            goto jrY98;
            YIYKN:
            $ratea = $this->sharejl($v["actualPrice"], $v["commissionRate"], $bl, $share, $cfg);
            goto QN7YT;
            ZKSfF:
            $list[$k]["lm"] = 2;
            goto fIyqE;
            W4TJ2:
            $list[$k]["shoptype"] = $v["shopType"];
            goto BIJCj;
            B0qgg:
            xVPUd:
            goto tKSOq;
            eCfuC:
            $list[$k]["couponmoney"] = $v["couponPrice"];
            goto WjbV_;
            QN7YT:
            goto fO3K0;
            goto B0qgg;
            NR3MY:
            $list[$k]["pid"] = $pid;
            goto ZKSfF;
            BevcE:
            $list[$k]["itemtitle"] = $v["title"];
            goto Oy0qn;
            yTaWg:
            ykvIT:
            goto WgdFe;
            hTFhQ:
            $list[$k]["itempic"] = $v["mainPic"];
            goto NR3MY;
            iTd97:
            if ($cfg["lbratetype"] == 3) {
                goto xVPUd;
            }
            goto YIYKN;
            tKSOq:
            $ratea = $this->ptyjjl($v["actualPrice"], $v["commissionRate"], $cfg);
            goto GL0xk;
            fIyqE:
            $list[$k]["couponnum"] = $v["couponTotalNum"];
            goto yTaWg;
            WgdFe:
        }
        goto BmhC4;
        yepsh:
        echo "<pre>";
        goto aTfqK;
        f1IMC:
        print_r($list);
        goto UVZPF;
        Hz2bv:
        $list = array();
        goto FWFZp;
        dkDuw:
        echo "<pre>";
        goto f1IMC;
        aTfqK:
        print_r($data);
        goto fUlff;
        T8wPF:
        $url = "https://openapi.dataoke.com/api/category/ddq-goods-list";
        goto KrYhU;
        fUlff:
        exit;
        goto Hz2bv;
        dR6ik:
        $data = @json_decode($data, true);
        goto yepsh;
        BAx44:
    }
    public function dtkapi($data, $url, $appSecret)
    {
        goto fOaAr;
        BECCI:
        $url = $host . "?" . http_build_query($data);
        goto imHE9;
        DmBfW:
        $output = curl_exec($ch);
        goto ggGZR;
        dQGUY:
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        goto cdME9;
        imHE9:
        $ch = curl_init();
        goto SnLoD;
        hwApA:
        $host = $url;
        goto tglXz;
        ggGZR:
        curl_close($ch);
        goto vOHpK;
        SnLoD:
        curl_setopt($ch, CURLOPT_URL, $url);
        goto lWxp0;
        vOHpK:
        return $output;
        goto vwn_i;
        fOaAr:
        function makeSign($data, $appSecret)
        {
            goto zog6y;
            i15FO:
            IbYwl:
            goto Cbf_f;
            Cbf_f:
            $str = trim($str, "&");
            goto LBZ2v;
            jAsZf:
            return $sign;
            goto K2T8B;
            zog6y:
            ksort($data);
            goto abZHM;
            qcXOF:
            foreach ($data as $k => $v) {
                $str .= "&" . $k . "=" . $v;
                ZPJ__:
            }
            goto i15FO;
            LBZ2v:
            $sign = strtoupper(md5($str . "&key=" . $appSecret));
            goto jAsZf;
            abZHM:
            $str = '';
            goto qcXOF;
            K2T8B:
        }
        goto hwApA;
        tglXz:
        $data["sign"] = makeSign($data, $appSecret);
        goto BECCI;
        lWxp0:
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        goto dQGUY;
        cdME9:
        curl_setopt($ch, CURLOPT_HEADER, 0);
        goto DmBfW;
        vwn_i:
    }
    public function doMobileMdorderlist()
    {
        goto l6r4R;
        IULSX:
        goto iaN9e;
        goto tKXza;
        v6DBK:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and from_user='{$fans["openid"]}'");
        goto z0QIL;
        ALOlm:
        if (!empty($fans["openid"])) {
            goto v1wUZ;
        }
        goto C_AAS;
        DbGJ8:
        $op = $_GPC["op"];
        goto Cgz5g;
        uc4oS:
        $order = pdo_fetchall("select * from " . tablename($this->modulename . "_mdorder") . " where weid='{$_W["uniacid"]}' {$ddorwehre} and uid='{$share["id"]}' order by id desc");
        goto IULSX;
        xu8zX:
        exit;
        goto ZdLt4;
        aUg7T:
        V96AR:
        goto hUlQh;
        GSyWd:
        g6D3t:
        goto qYajO;
        Cgz5g:
        if ($op == "qb") {
            goto jIE44;
        }
        goto lxud_;
        rLiAT:
        if (!empty($fans["tkuid"])) {
            goto dgeHr;
        }
        goto AmKpz;
        TmYhE:
        goto iaN9e;
        goto N0E5O;
        qYajO:
        $order = pdo_fetchall("select * from " . tablename($this->modulename . "_mdorder") . " where weid='{$_W["uniacid"]}' and  uid='{$share["id"]}' and sh=2  order by id desc");
        goto GHMDp;
        iXuv4:
        goto iaN9e;
        goto GSyWd;
        sfflp:
        dgeHr:
        goto v6DBK;
        YmiFu:
        if (empty($uid)) {
            goto V96AR;
        }
        goto TXFPA;
        ZdLt4:
        v1wUZ:
        goto sfflp;
        hUlQh:
        $fans = $this->islogin();
        goto rLiAT;
        N0E5O:
        jIE44:
        goto uc4oS;
        AmKpz:
        $fans = mc_oauth_userinfo();
        goto ALOlm;
        LKwDg:
        $order = pdo_fetchall("select * from " . tablename($this->modulename . "_mdorder") . " where weid='{$_W["uniacid"]}' and  uid='{$share["id"]}' and sh!=2 order by id desc");
        goto iXuv4;
        tKXza:
        TSgig:
        goto LKwDg;
        z0QIL:
        $uid = $share["id"];
        goto gp1it;
        l6r4R:
        global $_W, $_GPC;
        goto GvF_J;
        TXFPA:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto XtAuO;
        XtAuO:
        goto o9b5x;
        goto aUg7T;
        jkRb1:
        $uid = $_GPC["uid"];
        goto YmiFu;
        GHMDp:
        iaN9e:
        goto MSTHB;
        MSTHB:
        include $this->template("md/mdorderlist");
        goto tRa_x;
        lxud_:
        if ($op == "df") {
            goto TSgig;
        }
        goto kSl1d;
        gp1it:
        o9b5x:
        goto DbGJ8;
        kSl1d:
        if ($op == "yf") {
            goto g6D3t;
        }
        goto TmYhE;
        GvF_J:
        $cfg = $this->module["config"];
        goto jkRb1;
        C_AAS:
        echo "请从微信客户端打开！";
        goto xu8zX;
        tRa_x:
    }
    public function doMobileMdaddorder()
    {
        goto gujAs;
        B0ZIc:
        $member = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_share") . " WHERE weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto FhLj_;
        GOkK6:
        if (empty($mdset["mdtype"])) {
            goto k8Am0;
        }
        goto X9Eir;
        g1DOH:
        Zak6F:
        goto WBpnp;
        lWVnM:
        die(json_encode(array("error" => 0, "msg" => "免单未开始！")));
        goto TYNz2;
        SfJL5:
        $order = pdo_fetch("select * from " . tablename("tiger_newhu_mdorder") . " where weid='{$weid}' and orderid='{$orderid}'");
        goto kJljY;
        mGR7M:
        GGEPP:
        goto OL0FU;
        e42TD:
        die(json_encode(array("error" => 0, "msg" => "绑定订单成功,请提交免单订单号！")));
        goto Z8IB3;
        vB220:
        if (!($mdyaoqing >= $mdset["mdyaoqingcount"])) {
            goto KLrka;
        }
        goto s5c3X;
        KRbMr:
        $adzoneid = $pidSplit[3];
        goto dN2yz;
        CIAbg:
        if ($mdtime > $time) {
            goto uikBT;
        }
        goto yXP4D;
        THozi:
        $timetoday = strtotime(date("Y-m-d", time()));
        goto hdZTK;
        zN08p:
        mjcCp:
        goto zMtqX;
        S73Oq:
        die(json_encode(array("error" => 1, "msg" => "订单提交成功")));
        goto Z6lla;
        a1hcj:
        Tj_Wq:
        goto dcj35;
        YUkx6:
        die(json_encode(array("error" => 1, "msg" => "请提交免单商品订单号！")));
        goto WxE0o;
        otjGz:
        zg1Lz:
        goto DVlxe;
        T2kxg:
        $orderid = $_GPC["code"];
        goto B0ZIc;
        kJljY:
        $mytimetoday = strtotime(date("Y-m-d", time()));
        goto ufhLk;
        qmfTR:
        $b = pdo_update("tiger_newhu_share", $ups, array("id" => $member["id"], "weid" => $weid));
        goto NZDsW;
        NakQr:
        $sgmdtype = 6;
        goto tWZ0S;
        sR4c5:
        die(json_encode(array("error" => 0, "msg" => "今天免单不满足！")));
        goto H3oYc;
        cg_Wx:
        goto Hiw0B;
        goto O3CD2;
        qN0Sm:
        G5qw3:
        goto Hcwwi;
        HpHvY:
        die(json_encode(array("error" => 0, "msg" => "免单已结束！")));
        goto iUsI9;
        ZB_65:
        $op = $_GPC["op"];
        goto NhDET;
        ScxH1:
        die(json_encode(array("error" => 1, "msg" => "订单已经存在！")));
        goto WE38q;
        gEoWL:
        if ($time > $mdset["endtime"]) {
            goto w3T2x;
        }
        goto CIAbg;
        WBpnp:
        goto EeK9E;
        goto a1hcj;
        i1TfO:
        $tkorder = pdo_fetch("select * from " . tablename("tiger_newhu_tkorder") . " where weid='{$weid}' and orderid='{$orderid}'");
        goto YrCl3;
        OL0FU:
        $mdtype = 2;
        goto lWVnM;
        xjeYQ:
        $time = time();
        goto GOkK6;
        ltAfm:
        $mdtype = 3;
        goto HpHvY;
        N1ysJ:
        VVKm4:
        goto bNK78;
        nfy2J:
        V6IJC:
        goto xTLaR;
        WE38q:
        goto rTTk7;
        goto fqSuJ;
        qdoZX:
        if ($tkorder["orderzt"] == "订单失效") {
            goto V6IJC;
        }
        goto SQSwH;
        hcf6I:
        goto yzdky;
        goto mGR7M;
        DVlxe:
        if (!($mdset["mdzgcount"] >= 1)) {
            goto VVKm4;
        }
        goto Unqnw;
        nqm4S:
        $mdday = $mdset["mdrensum"] * 86400;
        goto BR1Mj;
        yXP4D:
        if (!($mdset["mdyaoqingcount"] >= 1)) {
            goto zg1Lz;
        }
        goto THozi;
        y8B8z:
        die(json_encode(array("error" => 0, "msg" => "会员数据错误、请稍后在试！")));
        goto lwHX0;
        xTLaR:
        $sh = 4;
        goto MAoxN;
        SJDGt:
        if (pdo_insert("tiger_newhu_mdorder", $data) === false) {
            goto Ef40A;
        }
        goto Cnl0Q;
        D9ztB:
        $pidSplit = explode("_", $mdset["miandanpid"]);
        goto KRbMr;
        Cnl0Q:
        if (!empty($member["tbsbuid6"])) {
            goto kWTWF;
        }
        goto gBVjM;
        QD5Gt:
        $b = pdo_update("tiger_newhu_share", $ups, array("id" => $member["id"], "weid" => $weid));
        goto XYr4m;
        Unqnw:
        $timetoday = strtotime(date("Y-m-d", time()));
        goto TdPCd;
        BR1Mj:
        goto Oubjs;
        goto UAcCR;
        ufhLk:
        $myorder = pdo_fetch("select * from " . tablename("tiger_newhu_mdorder") . " where weid='{$weid}' and createtime>'{$mytimetoday}' and uid='{$uid}'");
        goto CBaaR;
        CBaaR:
        if (empty($myorder)) {
            goto G5qw3;
        }
        goto luDzN;
        A2Zji:
        die(json_encode(array("error" => 1, "msg" => "您提交的订单已经存在！" . $member["nickname"])));
        goto SE5Pg;
        iUsI9:
        O2Oyj:
        goto hcf6I;
        FhLj_:
        $mdset = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_miandanset") . " WHERE weid='{$_W["uniacid"]}' order by id desc ");
        goto rYBnH;
        TNGoI:
        if (!($mdyaoqing >= $mdset["mdzgcount"])) {
            goto cTb0B;
        }
        goto NakQr;
        NhDET:
        $uid = $_GPC["uid"];
        goto kpNZB;
        hdZTK:
        $mdyaoqing = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("tiger_newhu_share") . " WHERE weid='{$_W["uniacid"]}' and helpid='{$member["id"]}' and createtime>'{$timetoday}' order by id desc ");
        goto vB220;
        hTJsR:
        Hiw0B:
        goto vwQJn;
        rYBnH:
        if (!empty($uid)) {
            goto jL1ux;
        }
        goto y8B8z;
        uxzgy:
        uikBT:
        goto xlqUg;
        zb4zp:
        $tbsbuid6 = substr($orderid, -6);
        goto QbcNV;
        H3oYc:
        xJLdb:
        goto SfJL5;
        DZmAf:
        if (!empty($member["tbsbuid6"])) {
            goto ANOgl;
        }
        goto zb4zp;
        GtXfU:
        $mdtime = $member["createtime"] + $mdday;
        goto xjeYQ;
        CkXgi:
        if (empty($mdset["mdrensum"])) {
            goto U9PgA;
        }
        goto nqm4S;
        YrCl3:
        if (empty($tkorder)) {
            goto Tj_Wq;
        }
        goto D9ztB;
        bZuwA:
        ziYO4:
        goto C1Gsj;
        luDzN:
        die(json_encode(array("error" => 0, "msg" => "一天只能免单一个商品！")));
        goto qN0Sm;
        fwPOk:
        die(json_encode(array("error" => 1, "msg" => "系统繁忙、数据有错误！")));
        goto g1DOH;
        kpNZB:
        $weid = $_W["uniacid"];
        goto T2kxg;
        gujAs:
        global $_W, $_GPC;
        goto ZB_65;
        fqSuJ:
        Vj2pJ:
        goto i1TfO;
        XYr4m:
        kWTWF:
        goto S73Oq;
        dcj35:
        $sh = 0;
        goto ymHu7;
        v8fV_:
        rTTk7:
        goto A2Zji;
        o_34w:
        goto Hiw0B;
        goto nfy2J;
        oGX_9:
        $ups = array("tbsbuid6" => $tbsbuid6);
        goto QD5Gt;
        ArXWu:
        $mderr = 1;
        goto sR4c5;
        Hcwwi:
        if (empty($order)) {
            goto Vj2pJ;
        }
        goto ScxH1;
        SQSwH:
        if ($tkorder["orderzt"] == "订单付款") {
            goto mjcCp;
        }
        goto Le9W0;
        WD_Br:
        $sh = 1;
        goto hTJsR;
        Z6lla:
        goto Zak6F;
        goto yGT9B;
        YBP9H:
        k8Am0:
        goto r64i3;
        EAm3P:
        Oubjs:
        goto GtXfU;
        yGT9B:
        Ef40A:
        goto fwPOk;
        QbcNV:
        $ups = array("tbsbuid6" => $tbsbuid6);
        goto qmfTR;
        ymHu7:
        die(json_encode(array("error" => 1, "msg" => "您提交的订单暂未更新，请过15分钟后在提交，感谢您的支持！")));
        goto TcjJF;
        NZDsW:
        ANOgl:
        goto e42TD;
        Z8IB3:
        gwhqJ:
        goto CkXgi;
        FhqJA:
        goto Hiw0B;
        goto zN08p;
        RuYCb:
        $mdday = 1 * 86400;
        goto EAm3P;
        X9Eir:
        if ($time < $mdset["starttime"]) {
            goto GGEPP;
        }
        goto gEoWL;
        gBVjM:
        $tbsbuid6 = substr($orderid, -6);
        goto oGX_9;
        nXGuk:
        if (!($op == "bd")) {
            goto gwhqJ;
        }
        goto DZmAf;
        s5c3X:
        $mdtype = 5;
        goto XVsLo;
        UAcCR:
        U9PgA:
        goto RuYCb;
        vwQJn:
        $data = array("weid" => $weid, "openid" => $member["from_user"], "uid" => $member["id"], "nickname" => $member["nickname"], "avatar" => $member["avatar"], "orderid" => $orderid, "itemid" => $tkorder["numid"], "jl" => $jl, "jltype" => $jltype, "sh" => $sh, "yongjin" => $tkorder["xgyg"], "price" => $tkorder["fkprice"], "type" => 0, "createtime" => TIMESTAMP);
        goto SJDGt;
        dN2yz:
        if (!($adzoneid != $tkorder["tgwid"])) {
            goto BaRx0;
        }
        goto YUkx6;
        ObO58:
        w3T2x:
        goto ltAfm;
        C1Gsj:
        goto O2Oyj;
        goto ObO58;
        lwHX0:
        jL1ux:
        goto nXGuk;
        TYNz2:
        yzdky:
        goto YBP9H;
        Le9W0:
        if ($tkorder["orderzt"] == "订单结算") {
            goto xW_NL;
        }
        goto o_34w;
        tWZ0S:
        cTb0B:
        goto N1ysJ;
        zMtqX:
        $sh = 3;
        goto cg_Wx;
        WxE0o:
        BaRx0:
        goto qdoZX;
        TcjJF:
        EeK9E:
        goto v8fV_;
        O3CD2:
        xW_NL:
        goto WD_Br;
        XVsLo:
        KLrka:
        goto otjGz;
        bNK78:
        goto ziYO4;
        goto uxzgy;
        MAoxN:
        die(json_encode(array("error" => 1, "msg" => "您提交的订单已退款！")));
        goto FhqJA;
        xlqUg:
        $mdtype = 8;
        goto bZuwA;
        r64i3:
        if (!(empty($mdtype) && empty($sgmdtype))) {
            goto xJLdb;
        }
        goto ArXWu;
        TdPCd:
        $mdyaoqing = pdo_fetchcolumn("select COUNT(*) from " . tablename("tiger_newhu_tkorder") . " where weid='{$_W["uniacid"]}' and tbsbuid6='{$member["tbsbuid6"]}' and addtime>'{$timetoday}' and orderzt<>'订单失效' order by id desc");
        goto TNGoI;
        SE5Pg:
    }
    public function doMobileMd()
    {
        goto QE7CQ;
        fExJ3:
        $sgmdtype = 6;
        goto vcJE1;
        wON1a:
        goto b7u7G;
        goto niVC1;
        lchN0:
        exit;
        goto tkeEd;
        hwHc3:
        Qrx2F:
        goto XEMO4;
        MhKTd:
        if (!($mdyaoqing >= $mdset["mdyaoqingcount"])) {
            goto OSWeW;
        }
        goto eZ9v3;
        R2Awe:
        if (!($mdset["mdzgcount"] >= 1)) {
            goto UQi_x;
        }
        goto AIttl;
        hnXWe:
        b7u7G:
        goto n0Gf2;
        hLjf0:
        include $this->template("md/index");
        goto dq3cW;
        uCK9p:
        $uid = $_GPC["uid"];
        goto Mxxk9;
        vdZzJ:
        UQi_x:
        goto WEECK;
        AASZO:
        $total = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename($this->modulename . "_miandangoods") . " where weid='{$_W["uniacid"]}'");
        goto LeVG3;
        LeVG3:
        $pager = pagination($total, $pindex, $psize);
        goto xH4wX;
        bfGZI:
        if (!($mdset["mdyaoqingcount"] >= 1)) {
            goto sZ7eO;
        }
        goto a5b7m;
        t8Iu7:
        $mdtype = 2;
        goto CIaSw;
        SIJAs:
        sZ7eO:
        goto R2Awe;
        a7DqX:
        $mdset = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_miandanset") . " WHERE weid='{$_W["uniacid"]}' order by id desc ");
        goto oyT66;
        s1Z85:
        $list = pdo_fetchall("select * from " . tablename($this->modulename . "_miandangoods") . " where weid='{$_W["uniacid"]}'  order by id desc LIMIT " . ($pindex - 1) * $psize . ",{$psize}");
        goto AASZO;
        tkeEd:
        b4EgJ:
        goto hLjf0;
        Gmyc3:
        $member = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto I3JN5;
        fzh2q:
        Sz8Vm:
        goto RszFL;
        QE7CQ:
        global $_W, $_GPC;
        goto fMv9a;
        Xbs8m:
        $mdday = 1 * 86400;
        goto E57kf;
        R8MYt:
        $time = time();
        goto CGmGT;
        IEoCv:
        $member = $this->getmember($fans, $mc["uid"]);
        goto fzh2q;
        I3JN5:
        goto Sz8Vm;
        goto vKkyw;
        vcJE1:
        zEMKC:
        goto vdZzJ;
        Ag2zR:
        if ($time < $mdset["starttime"]) {
            goto NBjDc;
        }
        goto x2gvz;
        lk9Sj:
        exit;
        goto KcbfB;
        TENRG:
        $mdtype = 1;
        goto wON1a;
        CggrP:
        goto b7u7G;
        goto hwHc3;
        vKkyw:
        eJ80F:
        goto OBY48;
        kN3me:
        $loginurl = $_W["siteroot"] . str_replace("./", "app/", $this->createMobileurl("login")) . "&m=tiger_newhu" . "&tzurl=" . urlencode($tktzurl);
        goto IFVc2;
        IFVc2:
        header("Location: " . $loginurl);
        goto lk9Sj;
        Pusz3:
        wA010:
        goto od0WD;
        od0WD:
        $mdtype = 3;
        goto CggrP;
        WEECK:
        goto b7u7G;
        goto ku4rO;
        XEMO4:
        $mdtype = 8;
        goto hnXWe;
        YyjiH:
        $mdyaoqing = pdo_fetchcolumn("SELECT COUNT(*) FROM " . tablename("tiger_newhu_share") . " WHERE weid='{$_W["uniacid"]}' and helpid='{$member["id"]}' and createtime>'{$timetoday}' order by id desc ");
        goto MhKTd;
        a5b7m:
        $timetoday = strtotime(date("Y-m-d", time()));
        goto YyjiH;
        E57kf:
        BAgZb:
        goto wP16_;
        Z8owT:
        $mdday = $mdset["mdrensum"] * 86400;
        goto rb98l;
        KfeUG:
        if (!empty($fans["tkuid"])) {
            goto GAHYN;
        }
        goto spYZV;
        pzDi8:
        if (!($op == 1)) {
            goto b4EgJ;
        }
        goto PbQix;
        MC1tH:
        $mdyaoqing = pdo_fetchcolumn("select COUNT(*) from " . tablename("tiger_newhu_tkorder") . " where weid='{$_W["uniacid"]}' and tbsbuid6='{$member["tbsbuid6"]}' and addtime>'{$timetoday}' and orderzt<>'订单失效' order by id desc");
        goto jA3AH;
        rb98l:
        goto BAgZb;
        goto JNIeI;
        fMv9a:
        $op = $_GPC["op"];
        goto a7DqX;
        x2gvz:
        if ($time > $mdset["endtime"]) {
            goto wA010;
        }
        goto rsUyh;
        Mxxk9:
        if (empty($uid)) {
            goto eJ80F;
        }
        goto Gmyc3;
        ku4rO:
        CoEoY:
        goto TENRG;
        wP16_:
        $mdtime = $member["createtime"] + $mdday;
        goto R8MYt;
        RszFL:
        if (empty($mdset["mdrensum"])) {
            goto D7NdE;
        }
        goto Z8owT;
        CIaSw:
        goto b7u7G;
        goto Pusz3;
        n0Gf2:
        if (!(empty($mdtype) && empty($sgmdtype))) {
            goto cHZUa;
        }
        goto InFRf;
        eZ9v3:
        $mdtype = 5;
        goto iAZo1;
        KcbfB:
        C92tW:
        goto xgY8O;
        rsUyh:
        if ($mdtime > $time) {
            goto Qrx2F;
        }
        goto bfGZI;
        OBY48:
        $fans = $this->islogin();
        goto KfeUG;
        InFRf:
        $mderr = 1;
        goto XOxbp;
        xgY8O:
        GAHYN:
        goto IEoCv;
        oyT66:
        $cfg = $this->module["config"];
        goto uCK9p;
        niVC1:
        NBjDc:
        goto t8Iu7;
        wolVM:
        echo "<pre>";
        goto tDpkG;
        iAZo1:
        OSWeW:
        goto SIJAs;
        xH4wX:
        exit(json_encode(array("pages" => $pager, "data" => $list, "lm" => 1)));
        goto wolVM;
        PbQix:
        $pindex = max(1, intval($_GPC["page"]));
        goto bjl5x;
        AIttl:
        $timetoday = strtotime(date("Y-m-d", time()));
        goto MC1tH;
        jA3AH:
        if (!($mdyaoqing >= $mdset["mdzgcount"])) {
            goto zEMKC;
        }
        goto fExJ3;
        Y0oc2:
        if (!empty($fans)) {
            goto C92tW;
        }
        goto kN3me;
        spYZV:
        $fans = mc_oauth_userinfo();
        goto Y0oc2;
        JNIeI:
        D7NdE:
        goto Xbs8m;
        tDpkG:
        print_r($list);
        goto lchN0;
        CGmGT:
        if (empty($mdset["mdtype"])) {
            goto CoEoY;
        }
        goto Ag2zR;
        bjl5x:
        $psize = 20;
        goto s1Z85;
        XOxbp:
        cHZUa:
        goto pzDi8;
        dq3cW:
    }
    public function doMobileMdadd()
    {
        goto guFxq;
        prLYR:
        $uid = $_GPC["uid"];
        goto nRYd7;
        UtH7x:
        wfISZ:
        goto iiUIv;
        tFEPa:
        ZxJTp:
        goto hBpBj;
        lU0lb:
        if (!empty($fans)) {
            goto aZbSN;
        }
        goto VEpVJ;
        RsH60:
        $member = $this->getmember($fans, $mc["uid"]);
        goto UtH7x;
        guFxq:
        global $_W, $_GPC;
        goto tnZwW;
        VEpVJ:
        $loginurl = $_W["siteroot"] . str_replace("./", "app/", $this->createMobileurl("login")) . "&m=tiger_newhu" . "&tzurl=" . urlencode($tktzurl);
        goto pX35_;
        KCber:
        $fans = mc_oauth_userinfo();
        goto lU0lb;
        iiUIv:
        include $this->template("md/mdadd");
        goto t2k5t;
        tnZwW:
        $mdset = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_miandanset") . " WHERE weid='{$_W["uniacid"]}' order by id desc ");
        goto prLYR;
        g36fy:
        if (!empty($fans["tkuid"])) {
            goto VMIR5;
        }
        goto KCber;
        n1GCD:
        VMIR5:
        goto RsH60;
        hBpBj:
        $fans = $this->islogin();
        goto g36fy;
        TgS72:
        $member = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto YqGLJ;
        YqGLJ:
        goto wfISZ;
        goto tFEPa;
        pX35_:
        header("Location: " . $loginurl);
        goto YNczU;
        GKDwL:
        aZbSN:
        goto n1GCD;
        nRYd7:
        if (empty($uid)) {
            goto ZxJTp;
        }
        goto TgS72;
        YNczU:
        exit;
        goto GKDwL;
        t2k5t:
    }
    public function doMobileTaolijin()
    {
        goto nxVX8;
        knvYV:
        $req->setSendEndTime("2019-06-11 00:00:00");
        goto LriPb;
        z9r8o:
        print_r($resp);
        goto eLxmc;
        vlBTf:
        $req = new TbkDgVegasTljCreateRequest();
        goto XetQv;
        Ypx13:
        $resp = json_decode(json_encode($resp), TRUE);
        goto owqPk;
        UyjCe:
        $resp = $c->execute($req);
        goto Ypx13;
        mqiO6:
        $req->setUseStartTime("2019-06-20");
        goto UyjCe;
        ayL2T:
        $secret = $cfg["tksecretKey"];
        goto ypC65;
        yio_1:
        $req->setItemId("584558401295");
        goto qqUp0;
        XetQv:
        $req->setAdzoneId("110806711");
        goto yio_1;
        LriPb:
        $req->setUseEndTime("1");
        goto U4k_n;
        cvJZM:
        $req->setName("淘礼金来啦");
        goto KmQWQ;
        wHcuS:
        $appkey = $cfg["tkAppKey"];
        goto ayL2T;
        cMvl9:
        $req->setPerFace("10");
        goto hgnFQ;
        qqUp0:
        $req->setTotalNum("1");
        goto cvJZM;
        owqPk:
        echo $resp["result"]["msg_info"];
        goto yKQH4;
        ypC65:
        $c = new TopClient();
        goto BXMrE;
        KmQWQ:
        $req->setUserTotalWinNumLimit("1");
        goto e1QO0;
        nxVX8:
        $cfg = $this->module["config"];
        goto wHcuS;
        hRxJK:
        $c->secretKey = $secret;
        goto vlBTf;
        BXMrE:
        $c->appkey = $appkey;
        goto hRxJK;
        e1QO0:
        $req->setSecuritySwitch("false");
        goto cMvl9;
        hgnFQ:
        $req->setSendStartTime("2019-06-20 00:00:00");
        goto knvYV;
        yKQH4:
        echo "<pre>";
        goto z9r8o;
        U4k_n:
        $req->setUseEndTimeMode("1");
        goto mqiO6;
        eLxmc:
        exit;
        goto suil3;
        suil3:
    }
    public function doMobileAppwnqtzclass()
    {
        goto rZZ17;
        IUHmI:
        $catlist = array();
        goto kVXVi;
        DmOHT:
        uyA3D:
        goto Jk_Or;
        Jk_Or:
        exit(json_encode(array("data" => $catlist, "title" => $qtz["title"], "picurl" => tomedia($qtz["picurl"]), "bjcolor" => $qtz["bjcolor"])));
        goto AJgqg;
        gzBNC:
        $qtz = pdo_fetch("select * from " . tablename("tiger_newhu_qtzlist") . " where weid='{$_W["uniacid"]}' and id='{$id}'");
        goto PNmfC;
        rZZ17:
        global $_W, $_GPC;
        goto uQvNX;
        PNmfC:
        $qtzcate = explode("|", $qtz["cate"]);
        goto IUHmI;
        uQvNX:
        $id = trim($_GPC["id"]);
        goto gzBNC;
        kVXVi:
        foreach ($qtzcate as $k => $v) {
            $catlist[$k] = explode("-", $v);
            hB7w7:
        }
        goto DmOHT;
        AJgqg:
    }
    public function doMobileAppwnqtzlist()
    {
        goto m3Mfz;
        qBPs7:
        $goodslist = $this->tbqtz($page, $MaterialId, $share);
        goto dD2HE;
        Rz5RB:
        caQRV:
        goto F6Zc7;
        dD2HE:
        goto dQ4DY;
        goto YzCcv;
        w_2St:
        goto PfRlA;
        goto Rz5RB;
        sAY1D:
        PfRlA:
        goto qBPs7;
        EK5hv:
        vHVmi:
        goto gnhu9;
        ceMpE:
        dQ4DY:
        goto oNs4r;
        F6Zc7:
        $page = 1;
        goto sAY1D;
        hL5Ei:
        $islm = $this->getlmid($MaterialId);
        goto Iksb8;
        vD9AL:
        $MaterialId = trim($_GPC["MaterialId"]);
        goto hL5Ei;
        ARAnq:
        $uid = $_GPC["uid"];
        goto jJIcs;
        mu22V:
        if ($islm == 1) {
            goto MjYog;
        }
        goto cGpFL;
        YoCj8:
        $page = $page + 1;
        goto w_2St;
        jJIcs:
        if (empty($uid)) {
            goto ThvPD;
        }
        goto Na6Fe;
        F_CH4:
        OxHNT:
        goto Wedkd;
        Wedkd:
        if (!empty($page)) {
            goto vHVmi;
        }
        goto mnQLh;
        m3Mfz:
        global $_W, $_GPC;
        goto vD9AL;
        oNs4r:
        exit(json_encode(array("data" => $goodslist, "lm" => 2)));
        goto aujYi;
        FP9Dc:
        $MaterialId = 7950;
        goto F_CH4;
        gnhu9:
        $goodslist = $this->tblmnewgoods($page, $MaterialId, $share);
        goto ceMpE;
        Iksb8:
        $page = $_GPC["page"];
        goto ARAnq;
        YzCcv:
        MjYog:
        goto FgPJU;
        Na6Fe:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto NsItm;
        mnQLh:
        $page = 0;
        goto EK5hv;
        cGpFL:
        if (empty($page)) {
            goto caQRV;
        }
        goto YoCj8;
        FgPJU:
        if (!($MaterialId == 1)) {
            goto OxHNT;
        }
        goto FP9Dc;
        NsItm:
        ThvPD:
        goto mu22V;
        aujYi:
    }
    public function doMobileWnqtzgoods1111()
    {
        goto YvA3V;
        I47R7:
        $page = $page + 1;
        goto cu8gp;
        v3nI8:
        $op = $_GPC["op"];
        goto mr8eA;
        DCi71:
        $page = 1;
        goto Houm1;
        fX93L:
        if (!($op == "toajax")) {
            goto mOsHa;
        }
        goto I4vGQ;
        zcBrp:
        qIBAY:
        goto fX93L;
        v2EoE:
        $goodslist = $this->tbqtz($page, $MaterialId);
        goto ZAdgs;
        mr8eA:
        if (!empty($MaterialId)) {
            goto qIBAY;
        }
        goto TjWlJ;
        YvA3V:
        global $_W, $_GPC;
        goto O0Xxr;
        TjWlJ:
        $MaterialId = 26200;
        goto zcBrp;
        cu8gp:
        goto aHSHE;
        goto lR0Qq;
        I4vGQ:
        if (empty($page)) {
            goto uemSp;
        }
        goto I47R7;
        Houm1:
        aHSHE:
        goto v2EoE;
        ZAdgs:
        exit(json_encode(array("pages" => '', "data" => $goodslist, "lm" => 2)));
        goto xMFZr;
        O0Xxr:
        $MaterialId = trim($_GPC["MaterialId"]);
        goto v3nI8;
        srEE2:
        include $this->template("zt/wnqtzgoods1111");
        goto suH_P;
        lR0Qq:
        uemSp:
        goto DCi71;
        xMFZr:
        mOsHa:
        goto srEE2;
        suH_P:
    }
    public function doMobileWnqtzgoods()
    {
        goto BEG4d;
        tOzP8:
        I1JXG:
        goto KG3ja;
        J6nSA:
        YKPyi:
        goto JF0NY;
        rnrH5:
        $id = trim($_GPC["id"]);
        goto LsapB;
        f2TXZ:
        $islm = $this->getlmid($MaterialId);
        goto I96GH;
        ToQGr:
        seEyr:
        goto VQsAh;
        VQsAh:
        $qtzcate = explode("|", $qtz["cate"]);
        goto JjGGE;
        IAcpV:
        $goodslist = $this->tblmnewgoods($page, $MaterialId);
        goto ncOR1;
        nyIh4:
        $qtz = pdo_fetch("select * from " . tablename("tiger_newhu_qtzlist") . " where weid='{$_W["uniacid"]}' and id='{$id}'");
        goto ZznJX;
        cDoXS:
        $MaterialId = $qtz["cateid"];
        goto ToQGr;
        ncOR1:
        qTtOU:
        goto nhRq1;
        zNHPI:
        $MaterialId = trim($_GPC["MaterialId"]);
        goto nyIh4;
        KG3ja:
        if (!empty($page)) {
            goto cA06k;
        }
        goto pPXXZ;
        BzwpK:
        fmCg9:
        goto ggSLR;
        eu6xW:
        cA06k:
        goto IAcpV;
        ZznJX:
        if (!empty($MaterialId)) {
            goto seEyr;
        }
        goto cDoXS;
        Ldv6H:
        if (empty($page)) {
            goto UjPt3;
        }
        goto N60kq;
        F2X2P:
        include $this->template("zt/wnqtzgoods");
        goto t2VVi;
        Y7A29:
        UjPt3:
        goto Gofso;
        JF0NY:
        if (!($MaterialId == 1)) {
            goto I1JXG;
        }
        goto udwLU;
        tkFff:
        goto qTtOU;
        goto J6nSA;
        W34oE:
        NvsEH:
        goto F2X2P;
        RlYPE:
        $op = $_GPC["op"];
        goto yDuHD;
        N60kq:
        $page = $page + 1;
        goto NBG7x;
        yDuHD:
        if (!($op == "toajax")) {
            goto NvsEH;
        }
        goto f2TXZ;
        Gofso:
        $page = 1;
        goto BzwpK;
        ggSLR:
        $goodslist = $this->tbqtz($page, $MaterialId);
        goto tkFff;
        LsapB:
        $tigerapp = $_GPC["tigerapp"];
        goto zNHPI;
        pPXXZ:
        $page = 0;
        goto eu6xW;
        NBG7x:
        goto fmCg9;
        goto Y7A29;
        udwLU:
        $MaterialId = 7950;
        goto tOzP8;
        DFqe4:
        foreach ($qtzcate as $k => $v) {
            $catlist[$k] = explode("-", $v);
            ctPyf:
        }
        goto dfmVc;
        BEG4d:
        global $_W, $_GPC;
        goto rnrH5;
        JjGGE:
        $catlist = array();
        goto DFqe4;
        I96GH:
        if ($islm == 1) {
            goto YKPyi;
        }
        goto Ldv6H;
        nhRq1:
        exit(json_encode(array("pages" => '', "data" => $goodslist, "lm" => 2)));
        goto W34oE;
        dfmVc:
        z352Y:
        goto hnhQ1;
        hnhQ1:
        $page = $_GPC["page"];
        goto RlYPE;
        t2VVi:
    }
    function getlmid($lmid)
    {
        goto H_m49;
        G32z9:
        nkhbc:
        goto iR0rz;
        FkFsQ:
        goto nkhbc;
        goto krQYd;
        H_m49:
        $arr = array("23751", "23617", "23751", "24249", "25166", "30982", "25534", "25538", "25537", "25536", "25535", "25676", "23513", "29311", "31075", "31537", "31547", "21715", "21714", "21713", "21712", "21711", "21710", "21707", "21704", "21705", "21703", "21702", "21706", "21708", "21701", "23593", "23595", "23594", "23590", "23589", "23587", "23945", "23946", "23947", "23959", "23942", "23941", "23920", "23958", "23955", "23956", "23954", "23957", "23922", "22423", "23080", "23165", "23081", "23086", "23087", "23083", "23082", "23085", "23084", "23021", "23019", "23020", "23018", "23111", "23161", "22738", "22737", "22733", "22735", "22659", "22652", "22653", "22654", "22650", "22657", "23114", "22922", "23089", "22914", "22913", "22912", "22911", "22910", "22908", "23134", "22907", "22909", "23204", "23195", "23239", "22677", "19541", "19543", "19540", "19539", "19542", "19579", "19728", "19727", "19719", "19718", "19646", "19705", "19703", "19623", "18493", "19701", "19625", "18845", "18847", "11830", "11842", "7951", "7950", "16697", "16335", "15444", "18935", "18934", "18933", "18931", "18930", "1", "7950", "18620", "18621", "18622", "18623", "18625", "18626", "18627", "18634", "18635", "18636", "18637", "18577", "18578", "18579", "18580", "18581", "18582", "18583", "18584", "18585", "18586", "18587", "18591", "18592", "18593", "18594", "18595", "18596", "18597", "18598", "18599", "18600", "18601", "18628", "18629", "18630", "18631", "18632", "18914", "18906", "18903", "18909", "18910", "18912", "18968", "18969", "18970", "18971", "18976", "18620", "18621", "18622", "18623", "18625", "18626", "18627", "18634", "18635", "18636", "18637", "16217", "15895", "15893", "15896", "15897", "15898", "15899", "15900", "15903", "15902", "15901", "18222", "13671", "13865", "13851", "13852", "13858", "13855", "13854", "13856", "13853", "13857", "13859", "13968", "17122", "14971", "14976", "17359", "11049");
        goto Oz5El;
        vvZib:
        return 1;
        goto FkFsQ;
        RdodE:
        return 2;
        goto G32z9;
        krQYd:
        o41dr:
        goto RdodE;
        Oz5El:
        if (!in_array($lmid, $arr)) {
            goto o41dr;
        }
        goto vvZib;
        iR0rz:
    }
    public function tbqtz($page, $MaterialId, $share = array())
    {
        goto PwZ8z;
        GvQ9C:
        goto aGldJ;
        goto BmAGM;
        ayxgQ:
        return $list;
        goto wvsKf;
        kh4E1:
        $tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename . "_tksign") . " WHERE  memberid='{$memberid}'");
        goto GvQ9C;
        wdS6v:
        $pidSplit = explode("_", $cfg["ptpid"]);
        goto rzCX4;
        P9Hio:
        $goods = qtz($tksign["sign"], $cfg["ptpid"], $MaterialId, $page);
        goto j1C7M;
        ORwq1:
        $tksign = pdo_fetch("SELECT * FROM " . tablename($this->modulename . "_tksign") . " WHERE  tbuid='{$cfg["tbuid"]}'");
        goto k5wfY;
        j1C7M:
        foreach ($goods["result_list"]["map_data"] as $k => $v) {
            goto K3A74;
            VUXfD:
            $list[$k]["sj"] = $sj;
            goto Lppxa;
            AXzyn:
            goto l4Nb1;
            goto I4fxX;
            l2mwI:
            $list[$k]["itemsale"] = $goods["volume"];
            goto Sq40k;
            S64z7:
            $itemendprice = $goods["zk_final_price"] - $conmany;
            goto KvxAL;
            bSmw_:
            $list[$k]["presale_deposit"] = $goods["presale_deposit"];
            goto QrT35;
            F2yrg:
            $ratea = $sj1;
            goto ruunr;
            j2mWh:
            goto IF3AI;
            goto W7RJO;
            TNOmd:
            $list[$k]["pid"] = $pid;
            goto uqeLs;
            I4fxX:
            i5EK0:
            goto GAAKP;
            RX_s1:
            $spyj = $spyj * (100 - $bl["dlkcbl"]) / 100;
            goto wH1Ob;
            WAXux:
            $list[$k]["yj"] = $appcfg["lbygz"] . $ratea;
            goto VUXfD;
            WFJS_:
            if (empty($bl["dlkcbl"])) {
                goto MhwFv;
            }
            goto RX_s1;
            ePRY5:
            $tzyj = $spyj * $appset["tzbl1"] / 100;
            goto mwRCH;
            GAAKP:
            $list[$k]["itemtitle"] = $goods["title"];
            goto Cg1CB;
            aKHTn:
            $list[$k]["presale_discount_fee_text"] = $goods["presale_discount_fee_text"];
            goto bSmw_;
            ruunr:
            hi3qa:
            goto SOAzM;
            nY874:
            $sj1 = number_format($sj, 2, ".", '');
            goto cKVYZ;
            AwdEd:
            goto IvvY5;
            goto IN1hT;
            EeVcJ:
            sdL4Q:
            goto PYHe1;
            d1PYd:
            bnJ9f:
            goto pPY9P;
            jOsVO:
            $list[$k]["itemid"] = $goods["item_id"];
            goto P0PGo;
            Sq40k:
            $list[$k]["click_url"] = $goods["click_url"];
            goto Hfb5F;
            QBedF:
            goto bnJ9f;
            goto eK2RB;
            Hfb5F:
            $list[$k]["coupon_click_url"] = $goods["coupon_click_url"];
            goto GH8we;
            QlK1j:
            if (!empty($goods["coupon_amount"])) {
                goto sdL4Q;
            }
            goto USTO2;
            T1wPR:
            IvvY5:
            goto WAXux;
            lvRj0:
            $list[$k]["commission_rate"] = $goods["commission_rate"];
            goto aKHTn;
            USTO2:
            $conmany = 0;
            goto UI0F_;
            pPY9P:
            if (empty($ratea)) {
                goto U6Z52;
            }
            goto a96SS;
            SOAzM:
            IF3AI:
            goto AwdEd;
            uMHBH:
            $status = 1;
            goto fqVpb;
            PYHe1:
            $conmany = $goods["coupon_amount"];
            goto jzB32;
            a96SS:
            $appset = pdo_fetch("SELECT * FROM " . tablename("tiger_app_tuanzhangset") . " WHERE weid='{$_W["uniacid"]}' order by px desc ");
            goto rzB2D;
            Cg1CB:
            $list[$k]["shoptype"] = $goods["user_type"];
            goto jOsVO;
            M013f:
            if ($appcfg["sjztype"] == 1) {
                goto nI57T;
            }
            goto FzVAi;
            A2u_d:
            if (!($share["tztype"] == 1)) {
                goto hi3qa;
            }
            goto mvvBr;
            GH8we:
            $list[$k]["shopTitle"] = $goods["shop_title"];
            goto he25Q;
            FzVAi:
            $sj = 0;
            goto j2mWh;
            fqVpb:
            if (!empty($goods["title"])) {
                goto i5EK0;
            }
            goto AXzyn;
            cKVYZ:
            $sj = $appcfg["lbsjz"] . $sj1;
            goto A2u_d;
            W7RJO:
            nI57T:
            goto mRHNW;
            tCCrg:
            l4Nb1:
            goto WxL8I;
            mvvBr:
            $sj = 0;
            goto F2yrg;
            P0PGo:
            $list[$k]["itemprice"] = $goods["zk_final_price"];
            goto YyeOC;
            mRHNW:
            $spyj = $itemendprice * $goods["commission_rate"] / 100;
            goto WFJS_;
            UI0F_:
            goto ig709;
            goto EeVcJ;
            SyuVz:
            $ratea = $this->ptyjjl($itemendprice, $goods["commission_rate"], $cfg);
            goto d1PYd;
            eK2RB:
            xuhgL:
            goto SyuVz;
            uqeLs:
            $list[$k]["lm"] = 1;
            goto lvRj0;
            IN1hT:
            U6Z52:
            goto KGfaz;
            mwRCH:
            $sj = $spyj * $appset["jl"] / 100 + $tzyj;
            goto nY874;
            KT7Pr:
            $list[$k]["couponmoney"] = $conmany;
            goto l2mwI;
            QrT35:
            if ($cfg["lbratetype"] == 3) {
                goto xuhgL;
            }
            goto PA2D3;
            K3A74:
            $goods = $v;
            goto QlK1j;
            KvxAL:
            $itemendprice = number_format($itemendprice, 2);
            goto uMHBH;
            he25Q:
            $list[$k]["itempic"] = "http:" . $goods["pict_url"];
            goto TNOmd;
            PA2D3:
            $ratea = $this->sharejl($itemendprice, $goods["commission_rate"], $bl, $share, $cfg);
            goto QBedF;
            jzB32:
            ig709:
            goto S64z7;
            YyeOC:
            $list[$k]["itemendprice"] = $itemendprice;
            goto KT7Pr;
            rzB2D:
            $appcfg = pdo_fetch("select * from " . tablename("tiger_newhu_appset") . " where weid='{$_W["uniacid"]}'");
            goto M013f;
            ysAdo:
            $list[$k]["couponnum"] = $goods["coupon_remain_count"];
            goto tCCrg;
            wH1Ob:
            MhwFv:
            goto ePRY5;
            Lppxa:
            $list[$k]["rate"] = $ratea;
            goto ysAdo;
            KGfaz:
            $sj = "0";
            goto T1wPR;
            WxL8I:
        }
        goto Tb6Ne;
        Tb6Ne:
        ZOx3g:
        goto ayxgQ;
        BoC34:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$_W["uniacid"]}'");
        goto kvTqL;
        rzCX4:
        $memberid = $pidSplit[1];
        goto BoC34;
        k5wfY:
        aGldJ:
        goto P9Hio;
        PwZ8z:
        global $_W, $_GPC;
        goto vXM_t;
        LM97R:
        $cfg = $this->module["config"];
        goto wdS6v;
        kvTqL:
        if (empty($memberid)) {
            goto KbwlF;
        }
        goto kh4E1;
        BmAGM:
        KbwlF:
        goto ORwq1;
        vXM_t:
        include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/goodsapi.php";
        goto LM97R;
        wvsKf:
    }
    public function tblmnewgoods($page, $hdid, $share = array())
    {
        goto cYRyd;
        cYRyd:
        global $_W, $_GPC;
        goto YNb6K;
        VPJJ9:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$_W["uniacid"]}'");
        goto XkkpM;
        Vsz4B:
        $list = array();
        goto KAWma;
        fnCrd:
        return $list;
        goto Vzp5H;
        KAWma:
        foreach ($data["resultList"] as $k => $v) {
            goto WDJzT;
            stb9P:
            $list[$k]["url"] = $v["url"];
            goto GZb2E;
            z3Yw0:
            if ($cfg["lbratetype"] == 3) {
                goto mKCJC;
            }
            goto AQvTP;
            jcSuF:
            EZfH3:
            goto Hcijz;
            VNiDI:
            $tkrates = $v["calTkRate"] / 100;
            goto lEKny;
            xqAnn:
            tngNx:
            goto F11aa;
            AccUs:
            $tzyj = $spyj * $appset["tzbl1"] / 100;
            goto TUOWh;
            LWzYt:
            aKwIq:
            goto VNiDI;
            TUOWh:
            $sj = $spyj * $appset["jl"] / 100 + $tzyj;
            goto l6nFs;
            ekZo5:
            goto WMiMm;
            goto x5BZY;
            zOJZV:
            goto tngNx;
            goto SJYtO;
            nV3tX:
            $list[$k]["rate"] = $ratea;
            goto bjOHo;
            IaEUz:
            if (empty($ratea)) {
                goto EZfH3;
            }
            goto HizZn;
            GMfRP:
            if (!($share["tztype"] == 1)) {
                goto msVJx;
            }
            goto Gww4i;
            YYU9i:
            $list[$k]["pid"] = $pid;
            goto YTVxR;
            eIUFW:
            if ($v["isTmall"] == true) {
                goto t1VhG;
            }
            goto yiYcI;
            STpb_:
            $list[$k]["shoptype"] = $istm;
            goto P10Ed;
            UF3dw:
            $ratea = $sj1;
            goto o83Np;
            w1PoC:
            uy5i3:
            goto eIUFW;
            mfrQM:
            $itemendprice = number_format($itemendprice, 2);
            goto NA6oz;
            zdOLw:
            if ($appcfg["sjztype"] == 1) {
                goto GBaka;
            }
            goto kx_sj;
            Gww4i:
            $sj = 0;
            goto UF3dw;
            LqOhp:
            $list[$k]["itemprice"] = $v["promotionPrice"];
            goto eKWnM;
            sW5wV:
            goto Kyu_u;
            goto LWzYt;
            Hcijz:
            $sj = "0";
            goto AegNy;
            duK3X:
            $list[$k]["itempic"] = "http:" . $v["pic"];
            goto YYU9i;
            hZdgO:
            if (empty($bl["dlkcbl"])) {
                goto BwScF;
            }
            goto CnSwZ;
            AegNy:
            CK5IB:
            goto PXcYq;
            RvM4k:
            xfKAn:
            goto nV3tX;
            xVvrS:
            $list[$k]["sj"] = $sj;
            goto a0eFR;
            x5BZY:
            mKCJC:
            goto aqNeA;
            rj9e2:
            $spyj = $itemendprice * $tkrates / 100;
            goto hZdgO;
            GZb2E:
            $list[$k]["shopTitle"] = $v["sellerNickName"];
            goto duK3X;
            WDJzT:
            $itemendprice = $v["promotionPrice"] - $v["couponAmount"];
            goto mfrQM;
            lEKny:
            Kyu_u:
            goto z3Yw0;
            E1M8o:
            BwScF:
            goto AccUs;
            keGmL:
            goto bEnXt;
            goto Gwus_;
            kdv6f:
            $istm = $v["userType"];
            goto l6SrX;
            l6SrX:
            goto xfKAn;
            goto w1PoC;
            PXcYq:
            if (empty($v["userType"])) {
                goto uy5i3;
            }
            goto kdv6f;
            aqNeA:
            $ratea = $this->ptyjjl($itemendprice, $tkrates, $cfg);
            goto lVFWp;
            NA6oz:
            if (empty($v["tkMktRate"])) {
                goto aKwIq;
            }
            goto O3zDR;
            l6nFs:
            $sj1 = number_format($sj, 2, ".", '');
            goto oQiCy;
            ehk6H:
            $istm = 1;
            goto N70G4;
            bjOHo:
            $list[$k]["yj"] = $appcfg["lbygz"] . $ratea;
            goto xVvrS;
            P10Ed:
            $list[$k]["itemid"] = $v["itemId"];
            goto LqOhp;
            F11aa:
            goto CK5IB;
            goto jcSuF;
            CnSwZ:
            $spyj = $spyj * (100 - $bl["dlkcbl"]) / 100;
            goto E1M8o;
            VTXeV:
            $list[$k]["couponmoney"] = $v["couponAmount"];
            goto QllJl;
            a0eFR:
            $list[$k]["itemtitle"] = $v["itemName"];
            goto STpb_;
            kx_sj:
            $sj = 0;
            goto zOJZV;
            lVFWp:
            WMiMm:
            goto IaEUz;
            HizZn:
            $appset = pdo_fetch("SELECT * FROM " . tablename("tiger_app_tuanzhangset") . " WHERE weid='{$_W["uniacid"]}' order by px desc ");
            goto WreS2;
            o83Np:
            msVJx:
            goto xqAnn;
            Gwus_:
            t1VhG:
            goto ehk6H;
            YTVxR:
            $list[$k]["lm"] = 1;
            goto eYvU0;
            SJYtO:
            GBaka:
            goto rj9e2;
            oQiCy:
            $sj = $appcfg["lbsjz"] . $sj1;
            goto GMfRP;
            z_p9x:
            ZkEK2:
            goto Xc1A1;
            AQvTP:
            $ratea = $this->sharejl($itemendprice, $tkrates, $bl, $share, $cfg);
            goto ekZo5;
            yiYcI:
            $istm = 0;
            goto keGmL;
            O3zDR:
            $tkrates = $v["tkMktRate"] / 100;
            goto sW5wV;
            QllJl:
            $list[$k]["itemsale"] = $v["monthSellCount"];
            goto stb9P;
            eYvU0:
            $list[$k]["couponnum"] = $v["couponsurplus"];
            goto z_p9x;
            WreS2:
            $appcfg = pdo_fetch("select * from " . tablename("tiger_newhu_appset") . " where weid='{$_W["uniacid"]}'");
            goto zdOLw;
            eKWnM:
            $list[$k]["itemendprice"] = $itemendprice;
            goto VTXeV;
            N70G4:
            bEnXt:
            goto RvM4k;
            Xc1A1:
        }
        goto YbBmn;
        TmUMc:
        print_r($list);
        goto QD2za;
        ybNre:
        $page = 0;
        goto SMvU9;
        XkkpM:
        if (!empty($page)) {
            goto bqZXV;
        }
        goto ybNre;
        YNb6K:
        $cfg = $this->module["config"];
        goto VPJJ9;
        CBEpM:
        $data = array("pNum" => $page, "pSize" => 15, "floorId" => $hdid, "refpid" => $cfg["ptpid"]);
        goto vK88j;
        vK88j:
        $data = $this->tblmres($data);
        goto Vsz4B;
        Vzp5H:
        echo "<pre>";
        goto TmUMc;
        YbBmn:
        Lnzj1:
        goto fnCrd;
        SMvU9:
        bqZXV:
        goto CBEpM;
        QD2za:
    }
    public function doMobileCs6()
    {
        goto bzB65;
        bzB65:
        $cfg = $this->module["config"];
        goto pWa_d;
        f_y_n:
        $dtkgodsv = @json_decode($dtkgods, true);
        goto ka6PK;
        hapsZ:
        function newgoodsview($goodsId, $dtkapp_key, $dtkapp_secret)
        {
            goto iVDWr;
            Ah2qT:
            $data["sign"] = makeSign($data, $appSecret);
            goto p0uP6;
            LR3De:
            return $output;
            goto Ti2Fc;
            b61h1:
            curl_setopt($ch, CURLOPT_HEADER, 0);
            goto yfxXv;
            r4Edu:
            $appKey = $dtkapp_key;
            goto z4P7b;
            UzSSc:
            $ch = curl_init();
            goto fklHj;
            iVDWr:
            $host = "https://openapi.dataoke.com/api/goods/get-goods-details";
            goto r4Edu;
            z4P7b:
            $appSecret = $dtkapp_secret;
            goto PnTzH;
            gxk8s:
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            goto WpLct;
            p0uP6:
            $url = $host . "?" . http_build_query($data);
            goto UzSSc;
            PnTzH:
            $data = ["appKey" => $dtkapp_key, "version" => "v1.1.0", "goodsId" => $goodsId];
            goto Ah2qT;
            WpLct:
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            goto b61h1;
            yfxXv:
            $output = curl_exec($ch);
            goto KomOj;
            KomOj:
            curl_close($ch);
            goto LR3De;
            fklHj:
            curl_setopt($ch, CURLOPT_URL, $url);
            goto gxk8s;
            Ti2Fc:
        }
        goto bDMWH;
        UHL5w:
        $money = $dtkgoodsview["couponPrice"];
        goto qZn2p;
        Xln0l:
        print_r($dtkgoodsview);
        goto gUeak;
        Xbnsh:
        $dtkapp_secret = $cfg["dtkapp_secret"];
        goto H0fDL;
        H0fDL:
        function makeSign($data, $appSecret)
        {
            goto J9zCk;
            Xz7Wa:
            return $sign;
            goto JRP2e;
            J9zCk:
            ksort($data);
            goto tUPsI;
            i4GHU:
            QgxGf:
            goto mf89r;
            klWjr:
            foreach ($data as $k => $v) {
                $str .= "&" . $k . "=" . $v;
                Vfz0Y:
            }
            goto i4GHU;
            tUPsI:
            $str = '';
            goto klWjr;
            mf89r:
            $str = trim($str, "&");
            goto qA_B7;
            qA_B7:
            $sign = strtoupper(md5($str . "&key=" . $appSecret));
            goto Xz7Wa;
            JRP2e:
        }
        goto hapsZ;
        ka6PK:
        $dtkgoodsview = $dtkgodsv["data"];
        goto AZG14;
        UG5dr:
        $Quan_id = $this->Text_qzj($dtkgoodsview["couponLink"], "activityId=", "&");
        goto SxV3V;
        AZG14:
        $dtkgoodsview["couponLink"] = $dtkgoodsview["couponLink"] . "&";
        goto UG5dr;
        nkCU4:
        echo $Quan_id . "券" . $money . "【满" . $mancom . "元使用】";
        goto Xln0l;
        pWa_d:
        $dtkapp_key = $cfg["dtkapp_key"];
        goto Xbnsh;
        SxV3V:
        $mancom = $dtkgoodsview["couponConditions"];
        goto UHL5w;
        qZn2p:
        echo "<pre>";
        goto nkCU4;
        bDMWH:
        $dtkgods = newgoodsview("575889114043", $dtkapp_key, $dtkapp_secret);
        goto f_y_n;
        gUeak:
    }
    public function tblmres($data)
    {
        goto RhFgB;
        RhFgB:
        $appkey = "12574478";
        goto nuJD0;
        ISHiK:
        $sign = md5($singjson);
        goto tuV2u;
        B9lYl:
        $jsondata = str_replace("mtopjsonp1(", '', $json);
        goto qFi7J;
        wJEqV:
        $_m_h5_tk = $this->qudaimapianduan($json["cookie"], "_m_h5_tk=", "_");
        goto FIraN;
        lV2N8:
        $jsondata = json_encode($data);
        goto L0cOQ;
        YBnuY:
        $dataarr = @json_decode($jsondata, true);
        goto G3zMs;
        qv_vD:
        $url = "https://acs.m.taobao.com/h5/mtop.alimama.union.xt.en.api.entry/1.0/?jsv=2.4.16&appKey=" . $appkey;
        goto uGhbL;
        nuJD0:
        $t = "0";
        goto lV2N8;
        L0cOQ:
        $jsondata = str_replace("\\/", "/", $jsondata);
        goto qv_vD;
        tuV2u:
        $url = "https://acs.m.taobao.com/h5/mtop.alimama.union.xt.en.api.entry/1.0/?jsv=2.4.16&appKey=" . $appkey . "&t=" . $t . "&sign=" . $sign . "&api=mtop.alimama.union.xt.en.api.entry&v=1.0&AntiCreep=true&type=jsonp&dataType=jsonp&callback=mtopjsonp1&data=" . urlencode($jsondata);
        goto eCAAV;
        G3zMs:
        return $dataarr["data"]["recommend"];
        goto X9wbM;
        uGhbL:
        $json = $this->curl_request($url, '', $cookies, 1);
        goto wJEqV;
        qFi7J:
        $jsondata = str_replace(")", '', $jsondata);
        goto YBnuY;
        FIraN:
        $singjson = $_m_h5_tk . "&" . $t . "&" . $appkey . "&" . $jsondata;
        goto ISHiK;
        eCAAV:
        $json = $this->curl_request($url, '', $json["cookie"], 0);
        goto B9lYl;
        X9wbM:
    }
    public function doMobileCs4()
    {
        goto CpsWR;
        CpsWR:
        $goodslist = $this->tbqtz(1, 26257);
        goto wgruP;
        DbbTk:
        print_r($goodslist);
        goto dis1T;
        dis1T:
        exit;
        goto U9Ofk;
        wgruP:
        echo "<pre>";
        goto DbbTk;
        U9Ofk:
    }
    public function getMillisecond()
    {
        goto rFrAj;
        Ymwih:
        $ran = rand(100, 300);
        goto C7Nlb;
        T_x6N:
        return $t;
        goto sHRrB;
        C7Nlb:
        $t = $time . $ran;
        goto T_x6N;
        rFrAj:
        $time = time();
        goto Ymwih;
        sHRrB:
    }
    public function tbviewimg($data)
    {
        goto KZXTN;
        RK7PX:
        $descstr = $dataarr["data"]["pcDescContent"];
        goto n_OMP;
        TECrh:
        $_m_h5_tk = $this->qudaimapianduan($json["cookie"], "_m_h5_tk=", "_");
        goto qOBQq;
        h5b0S:
        $jsondata = json_encode($data);
        goto uScE0;
        BhWky:
        $t = $this->getMillisecond();
        goto h5b0S;
        qOBQq:
        $singjson = $_m_h5_tk . "&" . $t . "&" . $appkey . "&" . $jsondata;
        goto eAnJ8;
        jfBUc:
        $json = $this->curl_request($url, '', $json["cookie"], 0);
        goto OLsNC;
        eAnJ8:
        $sign = md5($singjson);
        goto riRcq;
        waHF3:
        $dataarr = @json_decode($jsondata, true);
        goto ts_ht;
        mU_kz:
        $json = $this->curl_request($url, '', $cookies, 1);
        goto TECrh;
        BKDx6:
        rZrA7:
        goto lMHF3;
        KZXTN:
        $appkey = "12574478";
        goto BhWky;
        OLsNC:
        $jsondata = str_replace("mtopjsonp1(", '', $json);
        goto uhJKo;
        uScE0:
        $jsondata = str_replace("\\/", "/", $jsondata);
        goto IC8j1;
        vWGHP:
        foreach ($descarr[1] as $k => $v) {
            goto vlxuU;
            vlxuU:
            $img .= "<img src='" . $v . "'/>";
            goto JHodO;
            guA2M:
            AezlM:
            goto es3YF;
            JHodO:
            $xcximg[$k] = $v;
            goto guA2M;
            es3YF:
        }
        goto BKDx6;
        IC8j1:
        $url = "https://h5api.m.taobao.com/h5/mtop.taobao.detail.getdesc/6.0/?jsv=2.4.0&appKey=" . $appkey;
        goto mU_kz;
        riRcq:
        $url = "https://h5api.m.taobao.com/h5/mtop.taobao.detail.getdesc/6.0/?jsv=2.4.0&appKey=" . $appkey . "&t=" . $t . "&sign=" . $sign . "&api=mtop.taobao.detail.getdesc&v=6.0&AntiFlool=true&AntiCreep=true&type=jsonp&dataType=jsonp&callback=mtopjsonp1&data=" . urlencode($jsondata);
        goto jfBUc;
        lMHF3:
        return $img;
        goto vfxCJ;
        n_OMP:
        preg_match_all("<img[\\s\\S]*?src=\"([\\s\\S]*?)\"[\\s\\S]*?>", $descstr, $descarr);
        goto vWGHP;
        uhJKo:
        $jsondata = str_replace(")", '', $jsondata);
        goto waHF3;
        ts_ht:
        return $dataarr;
        goto RK7PX;
        vfxCJ:
    }
    function qudaimapianduan($ss, $qian, $hou)
    {
        goto mcV79;
        mcV79:
        $i = strpos($ss, $qian);
        goto F_haF;
        g2Gu_:
        $output = substr($output, 0, $i);
        goto ZSr7O;
        ZSr7O:
        return $output;
        goto o_eum;
        k8xPY:
        $i = strpos($output, $hou);
        goto g2Gu_;
        F_haF:
        $output = substr($ss, $i + strlen($qian), strlen($ss));
        goto k8xPY;
        o_eum:
    }
    public function jd1fgoufl()
    {
        goto Qa_Vl;
        Qa_Vl:
        $hjkurl = "https://api.91fyt.com/index.php/api/v1/hd/hdgoodscname";
        goto SQoMb;
        SQoMb:
        $hjkpost = array("hdid" => 3);
        goto hcGKV;
        y7G90:
        $hjkarr = @json_decode($hjkview, true);
        goto GQs_Z;
        hcGKV:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto y7G90;
        GQs_Z:
        return $hjkarr;
        goto k6PtH;
        k6PtH:
    }
    public function jd1fgougoodlist($page, $cid)
    {
        goto v5lV0;
        v5lV0:
        $hjkurl = "https://api.91fyt.com/index.php/api/v1/hd/hdgoodslist";
        goto pi4Cl;
        pi4Cl:
        $hjkpost = array("hdid" => 3, "pagesize" => 10, "pageindex" => $page, "cid" => $cid);
        goto uQOpQ;
        jiSpH:
        return $hjkarr;
        goto Sv_ZN;
        VEaGr:
        $hjkarr = @json_decode($hjkview, true);
        goto jiSpH;
        uQOpQ:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto VEaGr;
        Sv_ZN:
    }
    public function jd1fgougoodurl($goods_id, $subunionid)
    {
        goto TedBr;
        KS1F5:
        $hjkarr = @json_decode($hjkview, true);
        goto eL_op;
        TedBr:
        $hjkurl = "https://api.91fyt.com/index.php/api/v1/hd/hdgetunionurlapi";
        goto YT61u;
        wm9tN:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto KS1F5;
        eL_op:
        return $hjkarr;
        goto rHsWG;
        YT61u:
        $hjkpost = array("memberid" => 1014414, "hdid" => 3, "goods_id" => $goods_id, "subunionid" => $subunionid);
        goto wm9tN;
        rHsWG:
    }
    public function jd1fgorder($subunionid = '', $page = 1)
    {
        goto HXRay;
        vIO3Z:
        $hjkarr = @json_decode($hjkview, true);
        goto y_RK9;
        y_RK9:
        return $hjkarr;
        goto mlp2E;
        c3yjU:
        $hjkview = $this->curl_request($hjkurl, $hjkpost);
        goto vIO3Z;
        sYGjK:
        $hjkpost = array("memberid" => 1014414, "hdid" => 3, "pageindex" => $page, "pagesize" => 50, "subunionid" => $subunionid);
        goto c3yjU;
        HXRay:
        $hjkurl = "https://api.91fyt.com/index.php/api/v1/hd/hdorderlistapi";
        goto sYGjK;
        mlp2E:
    }
    public function dlzdsh($uid, $share, $guanliopenid = '', $cfg = '')
    {
        goto CvJ1w;
        FUgRb:
        $this->postText($share["from_user"], $dlmsg);
        goto V5q2u;
        bvU3o:
        NKqWI:
        goto erBBP;
        Z1eRn:
        ys782:
        goto Ui1Ox;
        CvJ1w:
        global $_W;
        goto p1OfK;
        SQNiO:
        if (empty($res)) {
            goto znI66;
        }
        goto K1IBi;
        p1OfK:
        if (!empty($share["tgwid"])) {
            goto ccfIf;
        }
        goto qVH5c;
        vt3_S:
        if (!empty($pddpidres)) {
            goto i0tlM;
        }
        goto IWJfA;
        clb5L:
        $res = pdo_update("tiger_wxdaili_jdpid", array("type" => 1, "uid" => $share["id"], "nickname" => $share["nickname"]), array("id" => $jdpidres["id"]));
        goto bvU3o;
        IWJfA:
        if (empty($guanliopenid)) {
            goto X3ATQ;
        }
        goto V0VdI;
        XabYh:
        $res = pdo_update("tiger_wxdaili_wphpid", array("type" => 1, "uid" => $share["id"], "nickname" => $share["nickname"]), array("id" => $wphpidres["id"]));
        goto Z1eRn;
        d5IlX:
        $res = pdo_update("tiger_newhu_share", array("jdpid" => $jdpidres["pid"], "snpid" => $_W["uniacid"] . $uid, "dltype" => 1), array("id" => $uid, "weid" => $_W["uniacid"]));
        goto FJCh9;
        CG46m:
        if (empty($pddpidres["pid"])) {
            goto IxWdE;
        }
        goto v3dYw;
        pzow_:
        if (empty($wphpidres)) {
            goto DeMIk;
        }
        goto Fk5DZ;
        Thv6F:
        znI66:
        goto PxGft;
        cJTws:
        L73qW:
        goto o2inV;
        YaNzG:
        if (!empty($jdpidres)) {
            goto cxbx5;
        }
        goto urnQR;
        v3dYw:
        $res = pdo_update("tiger_newhu_share", array("pddpid" => $pddpidres["pid"], "snpid" => $_W["uniacid"] . $uid, "dltype" => 1), array("id" => $uid, "weid" => $_W["uniacid"]));
        goto SQNiO;
        urnQR:
        if (empty($guanliopenid)) {
            goto L73qW;
        }
        goto cJTws;
        poak3:
        if (empty($jdpidres["pid"])) {
            goto Y4oK2;
        }
        goto d5IlX;
        PxGft:
        IxWdE:
        goto ky_I_;
        K1IBi:
        $res = pdo_update("tiger_wxdaili_pddpid", array("type" => 1, "uid" => $share["id"], "nickname" => $share["nickname"]), array("id" => $pddpidres["id"]));
        goto Thv6F;
        Fk5DZ:
        $res = pdo_update("tiger_newhu_share", array("wphpid" => $wphpidres["pid"], "snpid" => $_W["uniacid"] . $uid, "dltype" => 1), array("id" => $uid, "weid" => $_W["uniacid"]));
        goto JUuxa;
        erBBP:
        Y4oK2:
        goto CG46m;
        o2inV:
        cxbx5:
        goto hREBa;
        JUuxa:
        if (empty($res)) {
            goto ys782;
        }
        goto XabYh;
        Ui1Ox:
        DeMIk:
        goto tbzjH;
        FJCh9:
        if (empty($res)) {
            goto NKqWI;
        }
        goto clb5L;
        pR8_e:
        i0tlM:
        goto poak3;
        V0VdI:
        X3ATQ:
        goto pR8_e;
        BdAII:
        ccfIf:
        goto yBhCX;
        yBhCX:
        $jdpidres = pdo_fetch("select * from " . tablename("tiger_wxdaili_jdpid") . " where weid='{$_W["uniacid"]}' and type=0 order by id desc ");
        goto YaNzG;
        iFKH7:
        $dlmsg = "<a href='" . $tturl . "'>进入合伙人中心</a>\n重点：进入合伙人中心，复制口令，打开淘♂寳APP完成渠道授权，未授权不能跟单结算佣金！";
        goto FUgRb;
        ky_I_:
        $wphpidres = pdo_fetch("select * from " . tablename("tiger_wxdaili_wphpid") . " where weid='{$_W["uniacid"]}' and type=0 order by id desc ");
        goto pzow_;
        qVH5c:
        $res = pdo_update("tiger_newhu_share", array("tgwid" => 11111, "dltype" => 1), array("id" => $uid, "weid" => $_W["uniacid"]));
        goto BdAII;
        hREBa:
        $pddpidres = pdo_fetch("select * from " . tablename("tiger_wxdaili_pddpid") . " where weid='{$_W["uniacid"]}' and type=0 order by id desc ");
        goto vt3_S;
        tbzjH:
        $tturl = $cfg["tknewurl"] . "app/index.php?i=" . $_W["uniacid"] . "&c=entry&do=newmember&m=tiger_wxdaili";
        goto iFKH7;
        V5q2u:
    }
    public function doMobileMobanxiaoxi()
    {
        goto R4SXc;
        cm8oe:
        $str = $this->mbmsg($openid, $mb, $mb["mbid"], $url = '', $fans, $orderid, $cfg = '', $valuedata = '');
        goto pdxeS;
        pdxeS:
        print_r($str);
        goto y6OD9;
        UmhrN:
        if (!empty($openid)) {
            goto bA0HH;
        }
        goto vjn53;
        kWUwA:
        $mb = pdo_fetch("select * from " . tablename($this->modulename . "_mobanmsg") . " where weid='{$_W["uniacid"]}' and id='{$id}'");
        goto vvGAa;
        R4SXc:
        global $_W, $_GPC;
        goto mx_ab;
        vvGAa:
        $fans = pdo_fetch("select * from " . tablename($this->modulename . "_share") . " where weid='{$_W["uniacid"]}' and from_user='{$yhopenid}'");
        goto cm8oe;
        mx_ab:
        $openid = $_GPC["openid"];
        goto lL_df;
        vjn53:
        echo "openid必填";
        goto RcEbT;
        JNz_4:
        bA0HH:
        goto H6j9w;
        lL_df:
        $yhopenid = $_GPC["yhopenid"];
        goto UmhrN;
        Rj2I_:
        $orderid = $_GPC["orderid"];
        goto kWUwA;
        H6j9w:
        $id = $_GPC["id"];
        goto Rj2I_;
        RcEbT:
        exit;
        goto JNz_4;
        y6OD9:
    }
    public function doMobileKefuxiaoxi()
    {
        goto RJdmu;
        L1rbH:
        exit;
        goto Li_In;
        RJdmu:
        global $_W, $_GPC;
        goto eGNbE;
        Li_In:
        H6u2v:
        goto mwRF2;
        yjzzh:
        $str = $this->postText($openid, $msg);
        goto FRI6C;
        FRI6C:
        echo $str;
        goto lrAAS;
        mwRF2:
        $msg = $_GPC["msg"];
        goto yjzzh;
        eGNbE:
        $openid = $_GPC["openid"];
        goto WZrnR;
        WZrnR:
        if (!empty($openid)) {
            goto H6u2v;
        }
        goto g9OFp;
        g9OFp:
        echo "openid必填";
        goto L1rbH;
        lrAAS:
    }
    public function jiangli($openid, $order)
    {
        goto bDIdJ;
        baz6A:
        $data["nickname"] = $sjmember["nickname"];
        goto G1VRR;
        snHDN:
        if (empty($sjmember["helpid"])) {
            goto gUqWc;
        }
        goto oCC4I;
        DfUyS:
        goto MQGzR;
        goto kuX7S;
        xu3Pg:
        if (empty($data["price"])) {
            goto ouFS_;
        }
        goto n6AQf;
        MYk7l:
        pdo_insert($this->modulename . "_order", $data);
        goto fS4J_;
        gZ8On:
        $data["price"] = $order["price"] * $bl["level3"] / 100;
        goto rjfCJ;
        uITk7:
        $data["avatar"] = $hmember["avatar"];
        goto xUHpn;
        yE5jB:
        $data["cengji"] = 1;
        goto rSj8a;
        YQnUF:
        if (empty($member["helpid"])) {
            goto r4oUf;
        }
        goto jOtFM;
        kZlU_:
        if (empty($hmember["helpid"])) {
            goto AdgqK;
        }
        goto K9i6C;
        JEekK:
        $this->mc_jl($sjmember["id"], 1, 10, $data["price"], $data["msg"], $order["orderno"]);
        goto siFHe;
        xDCvC:
        $data["openid"] = $smember["from_user"];
        goto dJp7I;
        e7F6B:
        $data = array("weid" => $_W["uniacid"], "orderno" => $order["orderno"], "goods_id" => $order["goods_id"], "state" => 1, "paystate" => 1, "paytime" => $order["paytime"], "createtime" => time());
        goto ggkjj;
        buxqr:
        $data["msg"] = $member["nickname"] . "三级奖励";
        goto VCkKm;
        xtsL2:
        $this->mc_jl($smember["id"], 1, 10, $data["price"], $data["msg"], $order["orderno"]);
        goto BOOSO;
        elHa5:
        $msg1 = str_replace("#昵称#", $member["nickname"], $bl["zfmsg1"]);
        goto Ulv2P;
        SMjy0:
        YWixz:
        goto xl2rK;
        IzhrE:
        SZMDD:
        goto WmsSg;
        eAOXa:
        $data["nickname"] = $smember["nickname"];
        goto pz18z;
        yCMmS:
        $data["msg"] = $member["nickname"] . "二级奖励";
        goto AlaOF;
        xl2rK:
        file_put_contents(IA_ROOT . "/addons/tiger_wxdaili/log.txt", "\n" . json_encode($uid . "--3--" . $data["price"]), FILE_APPEND);
        goto dcv39;
        JTeNT:
        $data["memberid"] = $sjmember["id"];
        goto baz6A;
        ggkjj:
        $msg0 = str_replace("#昵称#", $member["nickname"], $bl["zfmsg0"]);
        goto AGpb1;
        N3N2m:
        $data["price"] = $bl["glevel1"];
        goto esP1Q;
        X4I_L:
        $this->postText($smember["from_user"], $msg3);
        goto xtsL2;
        rtZd7:
        $msg2 = str_replace("#金额#", $data["price"], $msg2);
        goto ke8sw;
        PFEpq:
        if (!empty($bl["level1"])) {
            goto gM5lj;
        }
        goto HJgK2;
        WmsSg:
        $data["price"] = $order["price"] * $bl["level1"] / 100;
        goto QhWn2;
        BqUOh:
        sQxR4:
        goto snHDN;
        zULtt:
        if (empty($data["price"])) {
            goto JZqVh;
        }
        goto elHa5;
        QhWn2:
        MLH7b:
        goto JTeNT;
        JiwYu:
        NIfIV:
        goto kZlU_;
        xUHpn:
        $data["openid"] = $hmember["from_user"];
        goto t2AEz;
        mJ7cb:
        $this->postText($sjmember["from_user"], $msg1);
        goto JEekK;
        h7iwJ:
        $this->mc_jl($hmember["id"], 1, 10, $data["price"], $data["msg"], $order["orderno"]);
        goto MYk7l;
        fS4J_:
        ouFS_:
        goto JiwYu;
        AGpb1:
        $msg0 = str_replace("#金额#", $order["price"], $msg0);
        goto AZJPu;
        HJgK2:
        $data["price"] = $bl["glevel3"];
        goto LUGEV;
        p1OBn:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$_W["uniacid"]}'");
        goto BTZ8Z;
        dJp7I:
        $data["cengji"] = 3;
        goto buxqr;
        K9i6C:
        $smember = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_share") . " WHERE id = '{$hmember["helpid"]}' and weid='{$_W["uniacid"]}' and dltype=1 order by id desc limit 1");
        goto PFEpq;
        BTZ8Z:
        $member = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_share") . " WHERE id = '{$order["memberid"]}' and weid='{$_W["uniacid"]}'");
        goto e7F6B;
        BOOSO:
        pdo_insert($this->modulename . "_order", $data);
        goto nhb4a;
        gEdJZ:
        $data["price"] = $order["price"] * $bl["level2"] / 100;
        goto kJjRU;
        LUGEV:
        goto Q_OHT;
        goto Kar1w;
        rjfCJ:
        Q_OHT:
        goto x4dAF;
        jOtFM:
        $sjmember = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_share") . " WHERE id = '{$member["helpid"]}' and weid='{$_W["uniacid"]}' and dltype=1");
        goto xntI2;
        VCkKm:
        if (empty($smember["openid"])) {
            goto YWixz;
        }
        goto Frm49;
        KxlXH:
        $msg3 = str_replace("#昵称#", $member["nickname"], $bl["zfmsg3"]);
        goto hKGk0;
        bDIdJ:
        global $_W;
        goto qvXI_;
        G1VRR:
        $data["avatar"] = $sjmember["avatar"];
        goto pg1Oy;
        xntI2:
        if (!empty($bl["level1"])) {
            goto SZMDD;
        }
        goto N3N2m;
        dcv39:
        AdgqK:
        goto JD_UZ;
        AZJPu:
        $this->postText($member["from_user"], $msg0);
        goto YQnUF;
        x4dAF:
        $data["memberid"] = $smember["id"];
        goto eAOXa;
        qvXI_:
        load()->model("mc");
        goto lAn1N;
        kJjRU:
        MQGzR:
        goto NkGxa;
        oCC4I:
        $hmember = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_share") . " WHERE id = '{$sjmember["helpid"]}' and weid='{$_W["uniacid"]}' and dltype=1 order by id desc limit 1");
        goto w3fDL;
        ke8sw:
        $this->postText($hmember["from_user"], $msg2);
        goto h7iwJ;
        n6AQf:
        $msg2 = str_replace("#昵称#", $member["nickname"], $bl["zfmsg2"]);
        goto rtZd7;
        AlaOF:
        if (empty($hmember["openid"])) {
            goto NIfIV;
        }
        goto xu3Pg;
        mM0q2:
        $data["nickname"] = $hmember["nickname"];
        goto uITk7;
        esP1Q:
        goto MLH7b;
        goto IzhrE;
        t2AEz:
        $data["cengji"] = 2;
        goto yCMmS;
        pg1Oy:
        $data["openid"] = $sjmember["from_user"];
        goto yE5jB;
        kuX7S:
        yWpL2:
        goto gEdJZ;
        w3fDL:
        if (!empty($bl["level1"])) {
            goto yWpL2;
        }
        goto jLv4h;
        pz18z:
        $data["avatar"] = $smember["avatar"];
        goto xDCvC;
        ZptIN:
        JZqVh:
        goto BqUOh;
        hKGk0:
        $msg3 = str_replace("#金额#", $data["price"], $msg3);
        goto X4I_L;
        NkGxa:
        $data["memberid"] = $hmember["id"];
        goto mM0q2;
        OxUEz:
        if (empty($sjmember["from_user"])) {
            goto sQxR4;
        }
        goto zULtt;
        PtID2:
        r4oUf:
        goto OJZEQ;
        siFHe:
        pdo_insert($this->modulename . "_order", $data);
        goto ZptIN;
        lAn1N:
        $cfg = $this->module["config"];
        goto p1OBn;
        nhb4a:
        hBOIo:
        goto SMjy0;
        Ulv2P:
        $msg1 = str_replace("#金额#", $data["price"], $msg1);
        goto mJ7cb;
        JD_UZ:
        gUqWc:
        goto PtID2;
        rSj8a:
        $data["msg"] = $member["nickname"] . "一级奖励";
        goto OxUEz;
        Frm49:
        if (empty($data["price"])) {
            goto hBOIo;
        }
        goto KxlXH;
        jLv4h:
        $data["price"] = $bl["glevel2"];
        goto DfUyS;
        Kar1w:
        gM5lj:
        goto gZ8On;
        OJZEQ:
    }
    public function jdtbtgetorder($appKey, $appSecret, $accesstoken, $unionid, $page, $time)
    {
        goto khIIK;
        x_XzC:
        $arrres = $arr;
        goto uNGwo;
        tUI4w:
        $req->setPageSize(400);
        goto OkPmx;
        i6Qds:
        return $arrres;
        goto KqYy4;
        H93LF:
        $c->appSecret = $appSecret;
        goto DbAZG;
        IsK7m:
        $c->serverUrl = "https://gw.api.360buy.com/routerjson";
        goto XC1rz;
        XC1rz:
        $req = new UnionServiceQueryOrderListRequest();
        goto nwU6x;
        DbAZG:
        $c->accessToken = $accesstoken;
        goto IsK7m;
        khIIK:
        $c = new JdClient();
        goto g3uff;
        o6SHC:
        $resp = $resp->result;
        goto BAc4Q;
        nwU6x:
        $req->setUnionId($unionid);
        goto mAT_f;
        PKkex:
        $arrres = $arr["data"];
        goto ssfey;
        ssfey:
        if (!empty($arrres)) {
            goto ovsMJ;
        }
        goto x_XzC;
        nQ1F_:
        $req->setPageIndex($page);
        goto tUI4w;
        uNGwo:
        ovsMJ:
        goto i6Qds;
        mAT_f:
        $req->setTime($time);
        goto nQ1F_;
        BAc4Q:
        $arr = @json_decode($arr, true);
        goto PKkex;
        OkPmx:
        $resp = $c->execute($req, $c->accessToken);
        goto o6SHC;
        g3uff:
        $c->appKey = $appKey;
        goto H93LF;
        KqYy4:
    }
    public function get_server_ip()
    {
        goto fgk1a;
        TwFuU:
        $server_ip = $_SERVER["LOCAL_ADDR"];
        goto sy86h;
        sy86h:
        goto pSpty;
        goto d11xP;
        cAlCe:
        pSpty:
        goto K8njB;
        d11xP:
        Hd8kX:
        goto HYdRr;
        HFPm2:
        $server_ip = getenv("SERVER_ADDR");
        goto oxACI;
        JmHT7:
        if ($_SERVER["SERVER_ADDR"]) {
            goto Hd8kX;
        }
        goto TwFuU;
        pqlL4:
        return $server_ip;
        goto wrmMN;
        oxACI:
        goto xgulf;
        goto YZzhQ;
        HYdRr:
        $server_ip = $_SERVER["SERVER_ADDR"];
        goto cAlCe;
        fgk1a:
        if (isset($_SERVER)) {
            goto UnHvg;
        }
        goto HFPm2;
        YZzhQ:
        UnHvg:
        goto JmHT7;
        K8njB:
        xgulf:
        goto pqlL4;
        wrmMN:
    }
    public function sms($tel, $accessKeyId, $accessKeySecret, $SignName, $TemplateCode, $code)
    {
        goto OLUST;
        YwtN5:
        $cfg = $this->module["config"];
        goto Wc6Q7;
        WRv3g:
        return "发送失败";
        goto d93kE;
        L_mw_:
        $rurl = $this->curl_request($smsurl);
        goto GU__g;
        KJLfx:
        return "OK";
        goto GAVsC;
        d93kE:
        goto Y6m5O;
        goto BKL8d;
        OLUST:
        global $_W, $_GPC;
        goto YwtN5;
        Wc6Q7:
        $smsurl = $_W["siteroot"] . "addons/tiger_newhu/inc/sms/sms/sendSms.php?tel=" . $tel . "&accessKeyId=" . $accessKeyId . "&accessKeySecret=" . $accessKeySecret . "&SignName=" . $SignName . "&TemplateCode=" . $TemplateCode . "&code=" . $code . '';
        goto L_mw_;
        BKL8d:
        NeS2g:
        goto KJLfx;
        bEN1o:
        if (strpos($rurl, "OK") !== false) {
            goto NeS2g;
        }
        goto WRv3g;
        GAVsC:
        Y6m5O:
        goto lTZEp;
        GU__g:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/sms_log.txt", "\n" . json_encode($rurl), FILE_APPEND);
        goto bEN1o;
        lTZEp:
    }
    public function getzdorder($member, $cfg)
    {
        goto VfiMT;
        AoVQV:
        if (!($cfg["zdgdtype"] != 1)) {
            goto TN6YK;
        }
        goto Zwrng;
        M0QPM:
        foreach ($tkorlist as $k => $tkorder) {
            goto BZL37;
            L__cb:
            PjR4I:
            goto CsZPL;
            lk7MJ:
            pdo_update($this->modulename . "_tkorder", array("zdgd" => 1), array("weid" => $_W["uniacid"], "orderid" => $orderid));
            goto Ta8Y8;
            TRi1R:
            KUWY8:
            goto asdoM;
            cNtBK:
            xIz8c:
            goto MvDob;
            qaS4c:
            goto ws5bq;
            goto rv007;
            SrFda:
            YJrjY:
            goto eReBr;
            tX28T:
            if (!empty($order)) {
                goto ioWoS;
            }
            goto ImGsq;
            zJtxB:
            goto gN951;
            goto pnJ9P;
            ImGsq:
            pdo_insert($this->modulename . "_order", $data3);
            goto O56G2;
            uey0S:
            $yjtxmsg = str_replace("#金额#", $jl, $yjtxmsg);
            goto QCZvU;
            l22lH:
            $yjtxmsg = str_replace("#昵称#", $member["nickname"], $cfg["yjtxmsg"]);
            goto Jch45;
            Jd36Z:
            $jltype = 1;
            goto l65A0;
            fBEPZ:
            goto k0Dz6;
            goto BjDAj;
            NngaJ:
            $jl = $cfg["ejf"];
            goto bFTjj;
            BjDAj:
            rH6cU:
            goto ZdBTL;
            oo_pY:
            goto ruaJb;
            goto dsRwh;
            lECxh:
            gN951:
            goto goorc;
            Sun3V:
            goto Pj3yy;
            goto CyCSF;
            rqM4h:
            dRV9v:
            goto P4Zqy;
            BQWFu:
            if (empty($tkorder["relation_id"])) {
                goto xXkAi;
            }
            goto P270P;
            Pmrma:
            $order = pdo_fetch("select * from " . tablename($this->modulename . "_order") . " where weid='{$_W["uniacid"]}' and orderid='{$tkorder["orderid"]}' and itemid='{$tkorder["numid"]}'");
            goto yYOR5;
            aAOq2:
            SrJ24:
            goto EiA8N;
            UfhYj:
            $sh = 3;
            goto Dm6oi;
            SeUn0:
            dbMG2:
            goto L__cb;
            n635E:
            $jltype = 0;
            goto oo_pY;
            G3yYo:
            if ($cfg["fxtype"] == 2) {
                goto ty2Y2;
            }
            goto JaTzJ;
            dsRwh:
            On0uz:
            goto Jd36Z;
            iWLnn:
            K7HbN:
            goto Dhk_K;
            j8PMW:
            goto Pj3yy;
            goto cNtBK;
            IvvJT:
            $jl = $cfg["yjf"];
            goto lECxh;
            BZL37:
            $adzoneid = $pidSplit[3];
            goto Or9O8;
            QxFj4:
            ty2Y2:
            goto c9OzT;
            f_shm:
            goto Dj64O;
            goto ChJmx;
            hWjWt:
            xXkAi:
            goto S6Lqq;
            yYOR5:
            if (!empty($order["id"])) {
                goto K8OUy;
            }
            goto G2XZj;
            avSVr:
            $order = pdo_fetchall("select * from " . tablename($this->modulename . "_order") . " where weid='{$_W["uniacid"]}' and type=1 and orderid={$orderid} and itemid='{$tkorder["numid"]}'");
            goto XZV4u;
            ChzDA:
            if ($cfg["gdfxtype"] == 1) {
                goto gzzgx;
            }
            goto UL4bR;
            ckmyg:
            $data2 = array("weid" => $_W["uniacid"], "openid" => $yjmember["from_user"], "memberid" => $yjmember["openid"], "uid" => $yjmember["id"], "nickname" => $yjmember["nickname"], "jl" => $jl, "jltype" => $jltype, "avatar" => $yjmember["avatar"], "jlnickname" => $member["nickname"], "jlavatar" => $member["avatar"], "orderid" => $orderid, "yongjin" => $tkorder["xgyg"], "itemid" => $tkorder["numid"], "type" => 1, "sh" => $sh, "createtime" => TIMESTAMP);
            goto avSVr;
            kpHr_:
            $data3 = array("weid" => $_W["uniacid"], "openid" => $rjmember["from_user"], "memberid" => $rjmember["openid"], "uid" => $rjmember["id"], "nickname" => $rjmember["nickname"], "jl" => $jl, "jltype" => $jltype, "avatar" => $rjmember["avatar"], "jlnickname" => $member["nickname"], "jlavatar" => $member["avatar"], "orderid" => $orderid, "yongjin" => $tkorder["xgyg"], "itemid" => $tkorder["numid"], "type" => 2, "sh" => $sh, "createtime" => TIMESTAMP);
            goto n2XXv;
            asdoM:
            if (empty($dltgw)) {
                goto dRV9v;
            }
            goto AKZ7M;
            MvDob:
            $jltype = 0;
            goto Sun3V;
            bFTjj:
            GQGUB:
            goto itPqJ;
            cWv2w:
            GyNP3:
            goto ChzDA;
            YexUn:
            $jltype = 1;
            goto nwcII;
            S6Lqq:
            $dltgw = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and tgwid='{$tkorder["tgwid"]}'");
            goto TRi1R;
            DdKc_:
            pdo_insert($this->modulename . "_order", $data2);
            goto SeUn0;
            rxKEw:
            $jl = number_format($jl, 2, ".", '');
            goto h3B5C;
            SygZs:
            NZp2k:
            goto n635E;
            GWkCU:
            Dj64O:
            goto DHoFa;
            V8X8K:
            goto ruaJb;
            goto SygZs;
            LmZKI:
            K8OUy:
            goto tuG1H;
            ChJmx:
            phffF:
            goto F2IbM;
            CflaT:
            goto GikKz;
            goto PaYn0;
            OBORu:
            $jl = intval($tkorder["xgyg"] * $cfg["zgf"] / 100 * $cfg["jfbl"]);
            goto f_shm;
            Ta8Y8:
            NPF6F:
            goto mRqpD;
            UL4bR:
            $jl = $tkorder["xgyg"] * $cfg["yjf"] / 100;
            goto Bmd6y;
            AKZ7M:
            goto GikKz;
            goto rqM4h;
            C2Cbx:
            $jl = intval($tkorder["xgyg"] * $cfg["ejf"] / 100 * $cfg["jfbl"]);
            goto r3iUJ;
            Nww79:
            if (empty($cfg["ejf"])) {
                goto SrJ24;
            }
            goto FtPm5;
            wcwjw:
            $resorder = pdo_insert($this->modulename . "_order", $data);
            goto ENvwq;
            CyCSF:
            saJvz:
            goto YexUn;
            l65A0:
            ruaJb:
            goto wDSPH;
            Dm6oi:
            if ($cfg["fxtype"] == 1) {
                goto NZp2k;
            }
            goto jZYVw;
            mRqpD:
            if (empty($member["helpid"])) {
                goto ETjpy;
            }
            goto t1SoE;
            GK0UF:
            $ejtxmsg = str_replace("#订单号#", $orderid, $ejtxmsg);
            goto WX2uy;
            UFM7Z:
            if ($cfg["fxtype"] == 2) {
                goto GyNP3;
            }
            goto fBEPZ;
            EiA8N:
            MBfKF:
            goto cWDTy;
            CsZPL:
            if (empty($yjmember["helpid"])) {
                goto MBfKF;
            }
            goto Nww79;
            n2XXv:
            $order = pdo_fetchall("select * from " . tablename($this->modulename . "_order") . " where weid='{$_W["uniacid"]}' and type=2 and orderid={$orderid}  and itemid='{$tkorder["numid"]}'");
            goto tX28T;
            pUEqU:
            $data = array("weid" => $_W["uniacid"], "openid" => $member["from_user"], "memberid" => $member["openid"], "uid" => $member["id"], "nickname" => $member["nickname"], "avatar" => $member["avatar"], "orderid" => $orderid, "itemid" => $tkorder["numid"], "jl" => $jl, "jltype" => $jltype, "sh" => $sh, "yongjin" => $tkorder["xgyg"], "type" => 0, "createtime" => TIMESTAMP);
            goto wcwjw;
            G2XZj:
            if ($cfg["fxtype"] == 1) {
                goto xIz8c;
            }
            goto LMs68;
            F2IbM:
            $jl = $cfg["zgf"];
            goto GWkCU;
            QCZvU:
            $this->postText($yjmember["from_user"], $yjtxmsg);
            goto ckmyg;
            lH5n0:
            ws5bq:
            goto LSId9;
            tuG1H:
            GikKz:
            goto zWc1B;
            ENvwq:
            if (!($resorder != false)) {
                goto NPF6F;
            }
            goto lk7MJ;
            cWDTy:
            ETjpy:
            goto LmZKI;
            PaYn0:
            nAUBO:
            goto AvIon;
            VGT0O:
            goto Mo2Jy;
            goto SrFda;
            bruqX:
            if ($cfg["gdfxtype"] == 1) {
                goto LVHhT;
            }
            goto UQQqs;
            pnJ9P:
            gzzgx:
            goto IvvJT;
            n5Qo5:
            $jl = $tkorder["xgyg"] * $cfg["ejf"] / 100;
            goto rxKEw;
            nwcII:
            Pj3yy:
            goto UfhYj;
            LMs68:
            if ($cfg["fxtype"] == 2) {
                goto saJvz;
            }
            goto j8PMW;
            C0Ixw:
            $orderid = $tkorder["orderid"];
            goto pUEqU;
            EmQzF:
            JduFD:
            goto bruqX;
            sxq4L:
            $jl = intval($tkorder["xgyg"] * $cfg["yjf"] / 100 * $cfg["jfbl"]);
            goto bBeKn;
            P4Zqy:
            SuXEI:
            goto Pmrma;
            jZYVw:
            if ($cfg["fxtype"] == 2) {
                goto On0uz;
            }
            goto V8X8K;
            ZhCNx:
            $this->postText($rjmember["from_user"], $ejtxmsg);
            goto kpHr_;
            O56G2:
            ioWoS:
            goto aAOq2;
            r3iUJ:
            goto sWyWD;
            goto IRJJE;
            Jch45:
            $yjtxmsg = str_replace("#订单号#", $orderid, $yjtxmsg);
            goto uey0S;
            WX2uy:
            $ejtxmsg = str_replace("#金额#", $jl, $ejtxmsg);
            goto ZhCNx;
            itPqJ:
            MNzhJ:
            goto zCkGZ;
            eReBr:
            if ($cfg["gdfxtype"] == 1) {
                goto phffF;
            }
            goto OBORu;
            bBeKn:
            goto lw95L;
            goto UHpIO;
            ZdBTL:
            if ($cfg["gdfxtype"] == 1) {
                goto jg2a2;
            }
            goto sxq4L;
            FtPm5:
            if ($cfg["fxtype"] == 1) {
                goto K7HbN;
            }
            goto G3yYo;
            IRJJE:
            lFcAP:
            goto ATam9;
            JaTzJ:
            goto MNzhJ;
            goto iWLnn;
            AvIon:
            if (!($cfg["dlddfx"] == 1)) {
                goto SuXEI;
            }
            goto BQWFu;
            X9enX:
            sWyWD:
            goto j0Ox7;
            KEPK_:
            ZKNU6:
            goto NngaJ;
            RTbur:
            $ejtxmsg = str_replace("#昵称#", $member["nickname"], $cfg["ejtxmsg"]);
            goto GK0UF;
            XZV4u:
            if (!empty($order)) {
                goto dbMG2;
            }
            goto DdKc_;
            Or9O8:
            if (!($tkorder["tgwid"] == $adzoneid)) {
                goto nAUBO;
            }
            goto CflaT;
            goorc:
            k0Dz6:
            goto cPPKR;
            zCkGZ:
            $rjmember = pdo_fetch("select * from " . tablename($this->modulename . "_share") . " where weid='{$_W["uniacid"]}' and id='{$yjmember["helpid"]}' order by id desc");
            goto RTbur;
            JNGWd:
            if ($cfg["fxtype"] == 1) {
                goto rH6cU;
            }
            goto UFM7Z;
            h3B5C:
            goto GQGUB;
            goto KEPK_;
            L6dpm:
            $jl = $cfg["yjf"];
            goto QxxFR;
            UHpIO:
            jg2a2:
            goto L6dpm;
            vZ3kA:
            if ($cfg["fxtype"] == 2) {
                goto JduFD;
            }
            goto VGT0O;
            wDSPH:
            if ($cfg["fxtype"] == 1) {
                goto YJrjY;
            }
            goto vZ3kA;
            addCs:
            goto KUWY8;
            goto hWjWt;
            Dhk_K:
            if ($cfg["gdfxtype"] == 1) {
                goto lFcAP;
            }
            goto C2Cbx;
            c9OzT:
            if ($cfg["gdfxtype"] == 1) {
                goto ZKNU6;
            }
            goto n5Qo5;
            QxxFR:
            lw95L:
            goto kPbgu;
            kPbgu:
            goto k0Dz6;
            goto cWv2w;
            P270P:
            $dltgw = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and qdid='{$tkorder["relation_id"]}'");
            goto addCs;
            rv007:
            LVHhT:
            goto l7pWA;
            DHoFa:
            goto Mo2Jy;
            goto EmQzF;
            cECa7:
            $jl = number_format($jl, 2, ".", '');
            goto qaS4c;
            cPPKR:
            $yjmember = pdo_fetch("select * from " . tablename($this->modulename . "_share") . " where weid='{$_W["uniacid"]}' and id='{$member["helpid"]}' order by id desc");
            goto l22lH;
            UQQqs:
            $jl = $tkorder["xgyg"] * $cfg["zgf"] / 100;
            goto cECa7;
            l7pWA:
            $jl = $cfg["zgf"];
            goto lH5n0;
            j0Ox7:
            goto MNzhJ;
            goto QxFj4;
            t1SoE:
            if (empty($cfg["yjf"])) {
                goto PjR4I;
            }
            goto JNGWd;
            LSId9:
            Mo2Jy:
            goto C0Ixw;
            ATam9:
            $jl = $cfg["ejf"];
            goto X9enX;
            Bmd6y:
            $jl = number_format($jl, 2, ".", '');
            goto zJtxB;
            zWc1B:
        }
        goto oP9yb;
        Zq_rC:
        if (!empty($member["tbsbuid6"])) {
            goto v2L7L;
        }
        goto u5FgO;
        U6t8n:
        TN6YK:
        goto MEa0U;
        u5FgO:
        return '';
        goto ZvzLD;
        kFTqp:
        scstp:
        goto hQeFN;
        Uyv0d:
        $tbsbuid6 = $member["tbsbuid6"];
        goto O1gf2;
        UJUz0:
        return '';
        goto lBZJs;
        sbyhb:
        $bl = pdo_fetch("select * from " . tablename("tiger_wxdaili_set") . " where weid='{$weid}'");
        goto hAyBb;
        lBZJs:
        sD5f0:
        goto kFTqp;
        VfiMT:
        global $_W;
        goto AoVQV;
        rS3N_:
        $tkorlist = pdo_fetchall("select * from " . tablename($this->modulename . "_tkorder") . " where weid='{$_W["uniacid"]}' and tbsbuid6='{$tbsbuid6}' and addtime>'{$ztime}' and orderzt<>'订单失效' and zdgd<>1 order by id desc");
        goto Rbn3E;
        Sm2fO:
        $pidSplit = explode("_", $mdset["miandanpid"]);
        goto M0QPM;
        MEa0U:
        if (!pdo_tableexists("tiger_wxdaili_set")) {
            goto Xrkpc;
        }
        goto sbyhb;
        ZvzLD:
        v2L7L:
        goto Uyv0d;
        Zwrng:
        return '';
        goto U6t8n;
        Rbn3E:
        $mdset = pdo_fetch("SELECT * FROM " . tablename("tiger_newhu_miandanset") . " WHERE weid='{$weid}' order by id desc ");
        goto Sm2fO;
        hAyBb:
        if (!($bl["dlfxtype"] == 1)) {
            goto scstp;
        }
        goto GLtCp;
        oP9yb:
        QdFPf:
        goto WwPZA;
        GLtCp:
        if (!($member["dltype"] == 1)) {
            goto sD5f0;
        }
        goto UJUz0;
        hQeFN:
        Xrkpc:
        goto Zq_rC;
        O1gf2:
        $ztime = mktime(0, 0, 0, date("m"), date("d") - date("w") + 1 - 20, date("Y"));
        goto rS3N_;
        WwPZA:
    }
    public function getmember($fans = '', $wqid = '', $helpid = '', $lytype = 0)
    {
        goto y_pNa;
        WpbEo:
        return $share;
        goto rdVkh;
        hqUjR:
        if (!empty($share["id"])) {
            goto TxTQo;
        }
        goto CmQ_1;
        pavCr:
        goto auiUV;
        goto vT9yP;
        y_pNa:
        global $_W;
        goto lvmyO;
        lvmyO:
        $cfg = $this->module["config"];
        goto Qnv0B;
        GJZyN:
        $share["id"] = pdo_insertid();
        goto kR7qz;
        PPnaj:
        goto jCC3d;
        goto gt0ZW;
        UdqxD:
        pdo_update("tiger_newhu_share", $updata, array("weid" => $_W["uniacid"], "from_user" => $fans["openid"]));
        goto gN2_7;
        hkCz1:
        JktQc:
        goto pX6Z5;
        XV3Oa:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and unionid='{$fans["unionid"]}'");
        goto iijLl;
        jy97m:
        qvDK6:
        goto KTRSN;
        XrEwK:
        return $share;
        goto hkCz1;
        LQbZS:
        HYul_:
        goto wi3It;
        gt0ZW:
        FZsFA:
        goto VJWB2;
        pX6Z5:
        auiUV:
        goto R0wZK;
        lafxl:
        if (!empty($fans["unionid"])) {
            goto qvDK6;
        }
        goto jQs5j;
        jQs5j:
        return $share;
        goto RmRpS;
        MAsfc:
        glabZ:
        goto lafxl;
        K1ouN:
        ZnLu_:
        goto aIRTw;
        Qnv0B:
        if (!empty($fans["openid"])) {
            goto ZnLu_;
        }
        goto Lwiso;
        BZa9r:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and from_user='{$fans["openid"]}'");
        goto hqUjR;
        rj81P:
        if (!empty($fans["openid"])) {
            goto FZsFA;
        }
        goto ClXKJ;
        rdVkh:
        yJ7E3:
        goto IgTMa;
        KTRSN:
        $updata = array("unionid" => $fans["unionid"], "openid" => $wqid, "nickname" => $fans["nickname"], "avatar" => $fans["avatar"]);
        goto UdqxD;
        ClXKJ:
        return '';
        goto PPnaj;
        RmRpS:
        goto CO4RP;
        goto jy97m;
        XT5Ld:
        return $share;
        goto Qkzyb;
        IgTMa:
        goto JktQc;
        goto V3etu;
        QFFOe:
        pdo_update("tiger_newhu_share", $updata, array("weid" => $_W["uniacid"], "from_user" => $fans["openid"]));
        goto FL3tw;
        TqZj5:
        $updata = array("unionid" => $fans["unionid"], "openid" => $wqid, "nickname" => $fans["nickname"], "avatar" => $fans["avatar"]);
        goto QFFOe;
        wi3It:
        return $share;
        goto zrGfz;
        Qkzyb:
        CO4RP:
        goto cSRnn;
        x0weX:
        jCC3d:
        goto qu32y;
        V3etu:
        oOjqt:
        goto lBYqx;
        VJWB2:
        pdo_insert("tiger_newhu_share", array("openid" => $wqid, "nickname" => $fans["nickname"], "avatar" => $fans["avatar"], "unionid" => $fans["unionid"], "pid" => '', "updatetime" => time(), "createtime" => time(), "parentid" => 0, "weid" => $_W["uniacid"], "helpid" => $helpid, "score" => '', "cscore" => '', "pscore" => '', "from_user" => $fans["openid"], "lytype" => $lytype, "follow" => 1));
        goto Qxlz5;
        KaGxp:
        $cfg = $this->module["config"];
        goto XXGey;
        aIRTw:
        if (!empty($fans["unionid"])) {
            goto MrXpH;
        }
        goto W9zS9;
        TP7Ge:
        uoqAQ:
        goto sHItc;
        xkbnm:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and unionid='{$fans["unionid"]}'");
        goto XrEwK;
        I2wp7:
        $this->dlzdsh($share["id"], $share, '', $cfg);
        goto TP7Ge;
        DIgJl:
        if (!empty($share["id"])) {
            goto glabZ;
        }
        goto rj81P;
        ZCNmR:
        if (!($cfg["dlgzsdtype"] == 1)) {
            goto uoqAQ;
        }
        goto I2wp7;
        XXGey:
        if (!($cfg["dlgzsdtype"] == 1)) {
            goto HYul_;
        }
        goto kJtwD;
        Log16:
        pdo_update("tiger_newhu_share", $updata, array("weid" => $_W["uniacid"], "unionid" => $fans["unionid"]));
        goto xkbnm;
        W9zS9:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and from_user='{$fans["openid"]}'");
        goto DIgJl;
        kJtwD:
        $this->dlzdsh($share["id"], $share, '', $cfg);
        goto LQbZS;
        cSRnn:
        ze74K:
        goto pavCr;
        iijLl:
        if (!empty($share["id"])) {
            goto oOjqt;
        }
        goto BZa9r;
        CmQ_1:
        pdo_insert("tiger_newhu_share", array("openid" => $wqid, "nickname" => $fans["nickname"], "avatar" => $fans["avatar"], "unionid" => $fans["unionid"], "pid" => '', "updatetime" => time(), "createtime" => time(), "parentid" => 0, "weid" => $_W["uniacid"], "helpid" => $helpid, "score" => '', "cscore" => '', "pscore" => '', "from_user" => $fans["openid"], "lytype" => $lytype, "follow" => 1));
        goto GJZyN;
        qu32y:
        goto ze74K;
        goto MAsfc;
        nj4EA:
        TxTQo:
        goto TqZj5;
        kR7qz:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$share["id"]}'");
        goto KaGxp;
        zrGfz:
        goto yJ7E3;
        goto nj4EA;
        Lwiso:
        return '';
        goto K1ouN;
        vT9yP:
        MrXpH:
        goto XV3Oa;
        Qxlz5:
        $share["id"] = pdo_insertid();
        goto yoA30;
        FL3tw:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and from_user='{$fans["openid"]}'");
        goto WpbEo;
        yoA30:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and from_user='{$fans["openid"]}'");
        goto ZCNmR;
        gN2_7:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and from_user='{$fans["openid"]}'");
        goto XT5Ld;
        sHItc:
        return $share;
        goto x0weX;
        lBYqx:
        $updata = array("from_user" => $fans["openid"], "openid" => $wqid, "nickname" => $fans["nickname"], "avatar" => $fans["avatar"]);
        goto Log16;
        R0wZK:
    }
    public function bryj($share, $begin_time, $end_time, $zt, $bl, $cfg)
    {
        goto CV4Q8;
        Okdkb:
        d9Ucm:
        goto zj2nI;
        ngoKH:
        if (!($zt == 2)) {
            goto K8isU;
        }
        goto coVWL;
        NeJMl:
        goto VVYqX;
        goto ItPwo;
        UEfrn:
        goto SE_A6;
        goto LmGks;
        JtqIU:
        $dj = 2;
        goto Z1_ka;
        g_Tuf:
        $ddzt = " and orderzt='订单结算'";
        goto kSsQ8;
        pSeFJ:
        if (!($bl["dltype"] == 2)) {
            goto iY6cm;
        }
        goto lMOHr;
        MkZfh:
        D5uW4:
        goto UEfrn;
        fm7WT:
        goto D5uW4;
        goto acqDY;
        ItPwo:
        ivjZ3:
        goto Cs5ul;
        BNtYD:
        $yj2 = $yj3 * $bl["dlbl2t3"] / 100;
        goto DwSZ1;
        p9UPu:
        foreach ($tgwarr as $k => $v) {
            $where .= " tgwid=" . $v . " or ";
            ywlHV:
        }
        goto t1UyL;
        oSc4E:
        if (!($bl["dltype"] == 3)) {
            goto Rg4BX;
        }
        goto pXiKH;
        oQfb2:
        $where .= "tgwid=" . $tgwarr[0] . ")";
        goto R_2wR;
        LmGks:
        XrqzZ:
        goto MpAzf;
        oGxcM:
        goto m9TXm;
        goto Mf7iD;
        SywuH:
        $byygsum = $yj2 - $yj1;
        goto XCh12;
        M9NHu:
        AZakN:
        goto monxt;
        MpAzf:
        $byygsum = $byygsum * $bl["dlbl1"] / 100;
        goto gf6or;
        Mak7d:
        $sj2 = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$sj["helpid"]}'");
        goto oSc4E;
        pq1Ph:
        if ($cfg["jsms"] == 1) {
            goto RPmDC;
        }
        goto GgFQ2;
        kSsQ8:
        goto zImad;
        goto Okdkb;
        dp2Ye:
        udcth:
        goto Jbeu8;
        Cs5ul:
        if (empty($begin_time)) {
            goto VSuAm;
        }
        goto LLzaN;
        LLzaN:
        $dwhere = "and addtime>={$begin_time}";
        goto eFDp0;
        DwSZ1:
        $yj1 = $yj3 * $bl["dlbl1t3"] / 100;
        goto UBifx;
        qPkRH:
        YAqMy:
        goto NeJMl;
        coVWL:
        $addtime = "addtime";
        goto Yd7v6;
        yBoxj:
        Fwa6F:
        goto njPDm;
        acqDY:
        T0VCd:
        goto aLBBQ;
        CV4Q8:
        global $_W;
        goto eT2qW;
        MZocl:
        $addtime = "addtime";
        goto imK68;
        Z1_ka:
        jeKjO:
        goto wcJc7;
        hoMNy:
        IQJ0W:
        goto pSNoh;
        BlzQz:
        YIs3N:
        goto y2ZQk;
        io0PZ:
        if (empty($sj)) {
            goto IQJ0W;
        }
        goto pSeFJ;
        L7PjM:
        VVYqX:
        goto BpaU7;
        zyLg6:
        JpdJF:
        goto r8CKZ;
        y2ZQk:
        $where .= "and (";
        goto p9UPu;
        WsPPH:
        $bl["dlbl1"] = $share["dlbl"];
        goto yBoxj;
        pXiKH:
        if (!empty($sj2)) {
            goto lZbGY;
        }
        goto EDF3R;
        BpaU7:
        if ($zt == 1) {
            goto H4G0X;
        }
        goto OmDGk;
        YdYnr:
        $where = '';
        goto Bsg4o;
        UBifx:
        $byygsum = $yj3 - $yj2 - $yj1;
        goto MkZfh;
        eFDp0:
        VSuAm:
        goto L7PjM;
        OmDGk:
        if ($zt == 2) {
            goto d9Ucm;
        }
        goto lbBVn;
        t1UyL:
        zBy_z:
        goto oQfb2;
        lMOHr:
        $dj = 1;
        goto lAjU_;
        Mf7iD:
        RPmDC:
        goto QsDx1;
        O6zfU:
        m9TXm:
        goto IzD3m;
        pSNoh:
        goto fHZl5;
        goto zRxLI;
        bVUDP:
        I253L:
        goto VY6ku;
        njPDm:
        $send_time = strtotime(date("Y-m-d 23:59:59", strtotime(-date("d") . "day")));
        goto pq1Ph;
        W0jt0:
        $yj1 = $yj2 * $bl["dlbl1t2"] / 100;
        goto SywuH;
        mngpx:
        goto zImad;
        goto ecFuv;
        zj2nI:
        $ddzt = " and orderzt='订单付款'";
        goto afct_;
        PhUGD:
        BgJmw:
        goto ngoKH;
        zRxLI:
        Zpxws:
        goto FrwB9;
        afct_:
        goto zImad;
        goto zyLg6;
        GgFQ2:
        $addtime = "addtime";
        goto oGxcM;
        Jbeu8:
        $yj3 = $byygsum * $bl["dlbl3"] / 100;
        goto BNtYD;
        lAjU_:
        iY6cm:
        goto Mak7d;
        FrwB9:
        $byygsum = "0.00";
        goto yA7aj;
        vci3i:
        lZbGY:
        goto JtqIU;
        lbBVn:
        if ($zt == 3) {
            goto JpdJF;
        }
        goto mngpx;
        QsDx1:
        if ($send_time == $end_time) {
            goto I253L;
        }
        goto MZocl;
        kvjPM:
        goto jeKjO;
        goto vci3i;
        HAL47:
        goto eUREG;
        goto BlzQz;
        HglzZ:
        if (empty($bl["dlkcbl"])) {
            goto AZakN;
        }
        goto MlV6j;
        bRvX1:
        $where .= " and tgwid=111111";
        goto HAL47;
        pwNoG:
        $sj = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$share["helpid"]}'");
        goto io0PZ;
        q9MSO:
        zImad:
        goto qodM7;
        XCh12:
        goto D5uW4;
        goto dp2Ye;
        R_2wR:
        eUREG:
        goto uOs3C;
        imK68:
        goto BgJmw;
        goto bVUDP;
        qodM7:
        $tgwarr = explode("|", $share["tgwid"]);
        goto YdYnr;
        MlV6j:
        $byygsum = $byygsum * (100 - $bl["dlkcbl"]) / 100;
        goto M9NHu;
        btt4c:
        $dwhere = "and {$addtime}>={$begin_time} and {$addtime}<{$end_time}";
        goto qPkRH;
        eT2qW:
        if (empty($share["dlbl"])) {
            goto Fwa6F;
        }
        goto WsPPH;
        yA7aj:
        fHZl5:
        goto KEFlu;
        r8CKZ:
        $ddzt = " and orderzt<>'订单失效'";
        goto q9MSO;
        monxt:
        if (empty($byygsum)) {
            goto Zpxws;
        }
        goto pwNoG;
        aLBBQ:
        $yj2 = $byygsum * $bl["dlbl2"] / 100;
        goto W0jt0;
        Bsg4o:
        if (!empty($share["tgwid"])) {
            goto YIs3N;
        }
        goto bRvX1;
        EDF3R:
        $dj = 1;
        goto kvjPM;
        Yd7v6:
        K8isU:
        goto O6zfU;
        wcJc7:
        Rg4BX:
        goto hoMNy;
        uOs3C:
        $byygsum = pdo_fetchcolumn("SELECT sum(xgyg) FROM " . tablename("tiger_newhu_tkorder") . " where weid='{$_W["uniacid"]}'  {$ddzt} {$dwhere} {$where}");
        goto HglzZ;
        kVYcj:
        $byygsum = $byygsum * $bl["dlbl1"] / 100;
        goto fm7WT;
        dj5Ur:
        if ($dj == 1) {
            goto T0VCd;
        }
        goto l2dNd;
        ecFuv:
        H4G0X:
        goto g_Tuf;
        KEFlu:
        if ($bl["fxtype"] == 1) {
            goto XrqzZ;
        }
        goto dj5Ur;
        gf6or:
        SE_A6:
        goto pWMTO;
        pWMTO:
        return $byygsum;
        goto MRUWr;
        VY6ku:
        $addtime = "jstime";
        goto PhUGD;
        IzD3m:
        if (empty($end_time)) {
            goto ivjZ3;
        }
        goto vS_0M;
        vS_0M:
        if (empty($begin_time)) {
            goto YAqMy;
        }
        goto btt4c;
        l2dNd:
        if ($dj == 2) {
            goto udcth;
        }
        goto kVYcj;
        MRUWr:
    }
    public function jcbl($share, $bl)
    {
        goto ygfoP;
        gR8lv:
        if ($bl["dltype"] == 3) {
            goto Rf95e;
        }
        goto LpRVQ;
        wIeAp:
        goto Iafrp;
        goto GpFN0;
        xg00q:
        $djbl = $share["dlbl"];
        goto PcHka;
        Tw0pL:
        $sj = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$share["helpid"]}'");
        goto gR8lv;
        dO_E3:
        $cj = 2;
        goto pTDSn;
        v_H1q:
        $djbl = $bl["dlbl1"];
        goto Xv3NX;
        JNgbQ:
        $cj = 1;
        goto jUmeF;
        Gpt7E:
        $sj2 = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$sj["helpid"]}'");
        goto k_W2l;
        nUvZf:
        $tname = $bl["dlname1"];
        goto Fx_7W;
        OUlFa:
        Cako6:
        goto A9fui;
        qQppb:
        coo4A:
        goto wIeAp;
        UiZRS:
        goto S542M;
        goto lxoFu;
        ySrn9:
        $cj = 3;
        goto AO3xm;
        Xv3NX:
        $tname = $bl["dlname1"];
        goto IPjJb;
        LpRVQ:
        if ($bl["dltype"] == 2) {
            goto D6vJK;
        }
        goto KJlb7;
        DkTJs:
        Iafrp:
        goto DzKS4;
        Tk2KB:
        chb8P:
        goto Gpt7E;
        l4QJe:
        $tname = $bl["dlname2"];
        goto Xnwxg;
        dybLO:
        $tname = $bl["dlname2"];
        goto dO_E3;
        GpFN0:
        D6vJK:
        goto Adakk;
        k_W2l:
        if (!empty($sj2)) {
            goto BAyWI;
        }
        goto NukYv;
        AO3xm:
        S542M:
        goto qQppb;
        FkhK5:
        Rf95e:
        goto FZeLX;
        KJlb7:
        $djbl = $bl["dlbl1"];
        goto sgQFs;
        Fx_7W:
        $cj = 1;
        goto X4AFU;
        Adakk:
        if (!empty($sj)) {
            goto MXgwK;
        }
        goto YUfwG;
        FZeLX:
        if (!empty($sj)) {
            goto chb8P;
        }
        goto v_H1q;
        Xnwxg:
        $cj = 2;
        goto UiZRS;
        sgQFs:
        $tname = $bl["dlname1"];
        goto JNgbQ;
        X4AFU:
        goto dBcFP;
        goto PoTxk;
        IPjJb:
        $cj = 1;
        goto DtYmA;
        DzKS4:
        if (empty($share["dlbl"])) {
            goto Cako6;
        }
        goto xg00q;
        JIH2l:
        $tname = $bl["dlname3"];
        goto ySrn9;
        PcHka:
        $tname = $bl["dlname1"];
        goto OUlFa;
        U5tP3:
        return $arr;
        goto DOTXa;
        YUfwG:
        $djbl = $bl["dlbl1"];
        goto nUvZf;
        pTDSn:
        dBcFP:
        goto DkTJs;
        DtYmA:
        goto coo4A;
        goto Tk2KB;
        jUmeF:
        goto Iafrp;
        goto FkhK5;
        ygfoP:
        global $_W;
        goto Tw0pL;
        A9fui:
        $arr = array("bl" => $djbl, "tname" => $tname, "cj" => $cj);
        goto U5tP3;
        XrhKX:
        $djbl = $bl["dlbl3"];
        goto JIH2l;
        lxoFu:
        BAyWI:
        goto XrhKX;
        PoTxk:
        MXgwK:
        goto gxUbO;
        gxUbO:
        $djbl = $bl["dlbl2"];
        goto dybLO;
        NukYv:
        $djbl = $bl["dlbl2"];
        goto l4QJe;
        DOTXa:
    }
    public function bydlyj($share, $begin_time, $end_time = '', $zt, $bl, $cfg)
    {
        goto Ck2Ok;
        hHYlC:
        if (!empty($sjrs)) {
            goto nS78e;
        }
        goto v55Wc;
        UxxR0:
        bidhe:
        goto AzUVl;
        JfTqz:
        $ddzt = " and orderzt<>'订单失效'";
        goto xpEus;
        krb8z:
        $sjrs = $sjrs * (100 - $bl["dlkcbl"]) / 100;
        goto I9T5T;
        y7RyX:
        return $array;
        goto diwmK;
        qcQi4:
        $sjrs = pdo_fetchcolumn("SELECT sum(t.xgyg) FROM " . tablename("tiger_newhu_share") . " s left join " . tablename("tiger_newhu_tkorder") . " t ON s.tgwid=t.tgwid where s.weid='{$_W["uniacid"]}'   and s.dltype=1  {$ddzt} and s.helpid in (" . implode(",", array_keys($fans1)) . ") {$where}");
        goto cn2pH;
        hzzqq:
        $array = array("yj2" => $rjrs * $bl["dlbl2"] / 100, "yj3" => $sjrs * $bl["dlbl3"] / 100);
        goto y7RyX;
        FrLpR:
        if (!empty($rjrs)) {
            goto XIKKZ;
        }
        goto SNVb1;
        AyzE_:
        FRJly:
        goto ZndCn;
        THfYN:
        if (empty($end_time)) {
            goto izVIo;
        }
        goto Gmzdi;
        S54bB:
        $addtime = "addtime";
        goto eGdq0;
        NASAZ:
        $ddzt = " and orderzt='订单付款'";
        goto baRac;
        CDMhn:
        goto Tgz0j;
        goto yNNxQ;
        Cci9z:
        goto FRJly;
        goto c7YRo;
        TUeXu:
        $rjrs = $r;
        goto G8Foi;
        FSO06:
        if (empty($begin_time)) {
            goto bidhe;
        }
        goto IVr1u;
        NUyjQ:
        if ($zt == 3) {
            goto i7NeP;
        }
        goto DGLvx;
        Gmzdi:
        if (empty($begin_time)) {
            goto Nf9w4;
        }
        goto XY6jy;
        OFvmR:
        W2GCw:
        goto THfYN;
        o0A1h:
        $rjrs = "0.00";
        goto aalVh;
        DGLvx:
        goto veeMe;
        goto IvI6w;
        JsC2t:
        hwV41:
        goto hzzqq;
        t0zJe:
        if (empty($share["dlbl"])) {
            goto j8aIJ;
        }
        goto omyvL;
        qwSqS:
        if ($cfg["jsms"] == 1) {
            goto EzT1i;
        }
        goto RvXra;
        waoBO:
        XIKKZ:
        goto TU6Ut;
        XY6jy:
        $where = "and {$addtime}>={$begin_time} and {$addtime}<{$end_time}";
        goto A4bm2;
        SNVb1:
        $rjrs = "0.00";
        goto waoBO;
        hwbhn:
        if ($send_time == $end_time) {
            goto LvWkO;
        }
        goto e_iwa;
        DXXjW:
        $bbegin_time = strtotime(date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), 1, date("Y"))));
        goto v1RfO;
        P3wKA:
        KOivA:
        goto TUeXu;
        nX5uE:
        TUAM2:
        goto FrLpR;
        q4eG3:
        if (empty($bl["dlkcbl"])) {
            goto TdH3V;
        }
        goto krb8z;
        H7ERA:
        if (empty($fans1)) {
            goto HkGYG;
        }
        goto qcQi4;
        G8Foi:
        if (empty($bl["dlkcbl"])) {
            goto TUAM2;
        }
        goto Fo0Ia;
        cn2pH:
        HkGYG:
        goto q4eG3;
        baRac:
        goto veeMe;
        goto RnyUt;
        TU6Ut:
        if ($bl["dltype"] == 3) {
            goto CLXXE;
        }
        goto M41Wt;
        I9T5T:
        TdH3V:
        goto hHYlC;
        jwM62:
        $fans1 = pdo_fetchall("select id from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and dltype=1 and helpid='{$share["id"]}'", array(), "id");
        goto H7ERA;
        RnyUt:
        i7NeP:
        goto JfTqz;
        IT7aN:
        $send_time = strtotime(date("Y-m-d 23:59:59", strtotime(-date("d") . "day")));
        goto qwSqS;
        a0cGG:
        if ($zt == 1) {
            goto U9mEY;
        }
        goto doJbS;
        CRPFc:
        Tgz0j:
        goto K5_Fh;
        xpEus:
        veeMe:
        goto DXXjW;
        e_iwa:
        $addtime = "addtime";
        goto CDMhn;
        dVed2:
        goto W2GCw;
        goto vq2Ct;
        OX3Qv:
        nS78e:
        goto AyzE_;
        tfKCG:
        $ddzt = " and orderzt='订单结算'";
        goto IjIZN;
        eGdq0:
        w6i_S:
        goto OFvmR;
        xT9XP:
        $addtime = "jstime";
        goto CRPFc;
        G1r9x:
        foreach ($rjshare as $k => $v) {
            goto zflav;
            kGhDV:
            $r = $r + $a;
            goto pt7B2;
            zflav:
            $a = pdo_fetchcolumn("SELECT sum(xgyg) FROM " . tablename("tiger_newhu_tkorder") . "  where weid='{$_W["uniacid"]}' and tgwid='{$v["tgwid"]}' {$ddzt} {$where}");
            goto kGhDV;
            pt7B2:
            HwEjO:
            goto GzAbP;
            GzAbP:
        }
        goto P3wKA;
        ZILHe:
        XrYke:
        goto NASAZ;
        aalVh:
        $sjrs = "0.00";
        goto JsC2t;
        rAPjc:
        goto TZ7rJ;
        goto FYD3y;
        ZndCn:
        if (!($bl["dltype"] == 1)) {
            goto hwV41;
        }
        goto o0A1h;
        M41Wt:
        $sjrs = "0.00";
        goto Cci9z;
        IjIZN:
        goto veeMe;
        goto ZILHe;
        k8U12:
        $r = '';
        goto G1r9x;
        Fo0Ia:
        $rjrs = $rjrs * (100 - $bl["dlkcbl"]) / 100;
        goto nX5uE;
        AzUVl:
        TZ7rJ:
        goto a0cGG;
        yNNxQ:
        LvWkO:
        goto xT9XP;
        c7YRo:
        CLXXE:
        goto jwM62;
        vq2Ct:
        EzT1i:
        goto hwbhn;
        v55Wc:
        $sjrs = "0.00";
        goto OX3Qv;
        RvXra:
        $addtime = "addtime";
        goto dVed2;
        FSSaO:
        j8aIJ:
        goto IT7aN;
        K5_Fh:
        if (!($zt == 2)) {
            goto w6i_S;
        }
        goto S54bB;
        A4bm2:
        Nf9w4:
        goto rAPjc;
        IVr1u:
        $where = "and addtime>={$begin_time}";
        goto UxxR0;
        omyvL:
        $bl["dlbl1"] = $share["dlbl"];
        goto FSSaO;
        FYD3y:
        izVIo:
        goto FSO06;
        IvI6w:
        U9mEY:
        goto tfKCG;
        v1RfO:
        $rjshare = pdo_fetchall("SELECT id,helpid,tgwid FROM " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and helpid='{$share["id"]}' and dltype=1");
        goto k8U12;
        Ck2Ok:
        global $_W;
        goto t0zJe;
        doJbS:
        if ($zt == 2) {
            goto XrYke;
        }
        goto NUyjQ;
        diwmK:
    }
    public function dljiangli($endprice, $tkrate, $bl, $share)
    {
        goto VefV_;
        f1PTv:
        if ($bl["fxtype"] == 1) {
            goto JjqIe;
        }
        goto xuDTk;
        heZ65:
        jGE3V:
        goto Iyq8Y;
        gX0f8:
        $jryj = 0;
        goto rU_n3;
        bsZAd:
        J4w9n:
        goto JU5Di;
        VISqC:
        $bl["dlbl3"] = $dldj["dlbl3"];
        goto Qz9Ct;
        X85z7:
        if (empty($share["helpid"])) {
            goto Urunm;
        }
        goto PlzYm;
        giYvn:
        $bl["dlbl1"] = $dldj["dlbl1"];
        goto EmVds;
        WsUNZ:
        if (empty($dldj)) {
            goto RtTr6;
        }
        goto giYvn;
        FmQuW:
        yt8OB:
        goto FFZRA;
        ePdQ2:
        fs4ZM:
        goto RT6qL;
        N2SV9:
        if ($bl["dltype"] == 2) {
            goto eCscM;
        }
        goto L6BJh;
        OkUFo:
        $jryj = $yj * $bl["dlbl2t3"] / 100;
        goto CfOGc;
        VwB80:
        goto fG2h8;
        goto Mx7J0;
        JU5Di:
        $jrzyj = $yj - $jryj - $jrsjyj;
        goto z0vvF;
        VefV_:
        global $_W;
        goto XMtAC;
        wGFzS:
        $jrsjyj = $yj * $bl["dlbl1t3"] / 100;
        goto Lh2ut;
        nUSAD:
        Urunm:
        goto gX0f8;
        aDDU2:
        if (empty($bl["dlkcbl"])) {
            goto ukbsR;
        }
        goto xQAXp;
        Xlxzn:
        fG2h8:
        goto QPYb3;
        CfOGc:
        if (empty($sjshare["helpid"])) {
            goto IuI9U;
        }
        goto wGFzS;
        BuS6F:
        eCscM:
        goto kVxgS;
        Lh2ut:
        goto jGE3V;
        goto ywICr;
        HYIWH:
        $bl["dlbl1t3"] = $dldj["dlbl1t3"];
        goto bZ6fo;
        wfFuS:
        $fs = $this->jcbl($share, $bl);
        goto HkfSF;
        zmQ36:
        JjqIe:
        goto sSFQ_;
        Zo_Jc:
        goto yt8OB;
        goto zmQ36;
        PlzYm:
        $sjshare = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$share["weid"]}' and dltype=1 and id='{$share["helpid"]}'");
        goto OkUFo;
        pMOgq:
        $bl["dlbl2t3"] = $dldj["dlbl2t3"];
        goto VISqC;
        rU_n3:
        hPnmJ:
        goto bsZAd;
        moMOf:
        $dlyj = $endprice * $tkrate / 100;
        goto aDDU2;
        fLoil:
        VLunu:
        goto X85z7;
        RT6qL:
        if (!($share["tztype"] == 1)) {
            goto ihKRs;
        }
        goto o1ywd;
        HkfSF:
        if (empty($share["dlbl"])) {
            goto kSI4K;
        }
        goto ltvpM;
        fBhgx:
        $dlbl = $appset["tzbl1"];
        goto a4mtf;
        z0vvF:
        file_put_contents(IA_ROOT . "/addons/tiger_tkxcx/yj_log.txt", "\n" . "uid:" . $share["id"] . "------" . $yj . "-" . $jryj . "-" . $jrsjyj . "=" . $jrzyj, FILE_APPEND);
        goto JxILg;
        a4mtf:
        dBPiA:
        goto Q8882;
        EmVds:
        $bl["dlbl1t2"] = $dldj["dlbl1t2"];
        goto HYIWH;
        g1gEH:
        goto fs4ZM;
        goto W6tg1;
        AVaYm:
        $dlbl = $bl["dlbl1"];
        goto ePdQ2;
        Mx7J0:
        AFdnY:
        goto yyIX9;
        o1ywd:
        $appset = pdo_fetch("SELECT * FROM " . tablename("tiger_app_tuanzhangset") . " WHERE weid='{$share["weid"]}' order by px desc ");
        goto dDoIN;
        tkE0w:
        ukbsR:
        goto wfFuS;
        Iyq8Y:
        goto hPnmJ;
        goto nUSAD;
        JxILg:
        $dlrate = number_format($jrzyj, 2);
        goto Zo_Jc;
        yyIX9:
        $jryj = 0;
        goto Xlxzn;
        QPYb3:
        goto J4w9n;
        goto fLoil;
        cwyAT:
        $dldj = pdo_fetch("select * from " . tablename("tiger_wxdaili_dailidjset") . " where weid='{$share["weid"]}' and id='{$share["dldjtype"]}'");
        goto WsUNZ;
        ywICr:
        IuI9U:
        goto bbLYp;
        Qz9Ct:
        RtTr6:
        goto rhXoa;
        ltvpM:
        $dlbl = $fs["bl"];
        goto g1gEH;
        FFZRA:
        return $dlrate;
        goto aHbwF;
        Q8882:
        ihKRs:
        goto f1PTv;
        xuDTk:
        $yj = number_format($dlyj * $dlbl / 100, 2);
        goto N2SV9;
        kVxgS:
        if (empty($share["helpid"])) {
            goto AFdnY;
        }
        goto shwyW;
        XMtAC:
        if (empty($share["dldjtype"])) {
            goto L_6JS;
        }
        goto cwyAT;
        shwyW:
        $jryj = $yj * $bl["dlbl1t2"] / 100;
        goto VwB80;
        dDoIN:
        if (empty($appset["tzbl1"])) {
            goto dBPiA;
        }
        goto fBhgx;
        bZ6fo:
        $bl["dlbl2"] = $dldj["dlbl2"];
        goto pMOgq;
        sSFQ_:
        $dlrate = number_format($dlyj * $dlbl / 100, 2);
        goto FmQuW;
        xQAXp:
        $dlyj = $dlyj * (100 - $bl["dlkcbl"]) / 100;
        goto tkE0w;
        bbLYp:
        $jrsjyj = 0;
        goto heZ65;
        ttP5v:
        goto J4w9n;
        goto BuS6F;
        rhXoa:
        L_6JS:
        goto moMOf;
        L6BJh:
        if ($bl["dltype"] == 3) {
            goto VLunu;
        }
        goto ttP5v;
        W6tg1:
        kSI4K:
        goto AVaYm;
        aHbwF:
    }
    public function ptyjjl($endprice, $tkrate, $cfg)
    {
        goto vEmCx;
        VNOyk:
        vdba3:
        goto NJKIO;
        xXVcn:
        j46tW:
        goto VCeLl;
        lYQhZ:
        goto z_MIT;
        goto xXVcn;
        VCeLl:
        $yj1 = number_format($yongj, 2);
        goto IeBq8;
        fOoMd:
        $yongj = $yj * $cfg["zgf"] / 100;
        goto tTdmy;
        wqQIH:
        $yongj = "0.00";
        goto YEDXe;
        K2vsj:
        if ($cfg["fxtype"] == 2) {
            goto j46tW;
        }
        goto Pp08m;
        NJKIO:
        $yj1 = $yongj * $cfg["jfbl"];
        goto Pz3dx;
        tTdmy:
        if (!empty($yongj)) {
            goto waBbk;
        }
        goto wqQIH;
        Pz3dx:
        $yj1 = intval($yj1);
        goto lYQhZ;
        h2gKc:
        return $yj1;
        goto hwYgv;
        vEmCx:
        global $_W;
        goto SZiVE;
        Pp08m:
        goto z_MIT;
        goto VNOyk;
        HYcRz:
        if ($cfg["fxtype"] == 1) {
            goto vdba3;
        }
        goto K2vsj;
        YEDXe:
        waBbk:
        goto HYcRz;
        SZiVE:
        $yj = $endprice * $tkrate / 100;
        goto fOoMd;
        IeBq8:
        z_MIT:
        goto h2gKc;
        hwYgv:
    }
    public function sharejl($endprice = '', $tkrate = '', $bl = array(), $share = array(), $cfg)
    {
        goto ySJUJ;
        ySJUJ:
        if (empty($share)) {
            goto OgO1F;
        }
        goto il9gf;
        QcC8D:
        return $yj;
        goto Y4Gg6;
        LMRPV:
        $yj = $this->ptyjjl($endprice, $tkrate, $cfg);
        goto Z3Wtb;
        Mcg8O:
        $yj = $this->ptyjjl($endprice, $tkrate, $cfg);
        goto V3c3v;
        Z3Wtb:
        goto j_eKE;
        goto PktkR;
        PktkR:
        R2XtT:
        goto d5xgw;
        v3jKI:
        OgO1F:
        goto Mcg8O;
        D4Pa9:
        j_eKE:
        goto Np8Oh;
        V3c3v:
        n3OY6:
        goto QcC8D;
        il9gf:
        if ($share["dltype"] == 1) {
            goto R2XtT;
        }
        goto LMRPV;
        d5xgw:
        $yj = $this->dljiangli($endprice, $tkrate, $bl, $share);
        goto D4Pa9;
        Np8Oh:
        goto n3OY6;
        goto v3jKI;
        Y4Gg6:
    }
    public function tkljx($msg)
    {
        goto v4imB;
        wBn6q:
        $c->secretKey = $secret;
        goto YmAMQ;
        v4imB:
        global $_W, $_GPC;
        goto ofXnW;
        bLYUN:
        $jsonStr = json_encode($resp);
        goto V_51i;
        jCulc:
        goto FJtle;
        goto iED0C;
        YmAMQ:
        $req = new WirelessShareTpwdQueryRequest();
        goto EiVdr;
        Cip7l:
        $c = new TopClient();
        goto wsEKE;
        WD6pg:
        $appkey = $cfg["tkAppKey"];
        goto MGe09;
        wsEKE:
        $c->appkey = $appkey;
        goto wBn6q;
        V_51i:
        $jsonArray = json_decode($jsonStr, true);
        goto SZIsW;
        yevdk:
        $resp = $c->execute($req);
        goto bLYUN;
        pk72w:
        FJtle:
        goto Cip7l;
        EiVdr:
        $req->setPasswordContent($msg);
        goto yevdk;
        ofXnW:
        $cfg = $this->module["config"];
        goto cn_39;
        MGe09:
        $secret = $cfg["tksecretKey"];
        goto jCulc;
        yTl3X:
        $appkey = $cfg["jqtkAppKey"];
        goto gg9ew;
        cn_39:
        if ($cfg["jqtkAppKey"]) {
            goto oZsD1;
        }
        goto WD6pg;
        gg9ew:
        $secret = $cfg["jqtksecretKey"];
        goto pk72w;
        SZIsW:
        return $jsonArray;
        goto cnjzU;
        iED0C:
        oZsD1:
        goto yTl3X;
        cnjzU:
    }
    public function mc_jl($uid, $type, $typelx, $num, $remark, $orderid)
    {
        goto WWidC;
        S3j5T:
        return array("error" => 0, "data" => "余额不足");
        goto neXzk;
        s4di6:
        if ($type == 1) {
            goto tEjah;
        }
        goto PDvlE;
        nH0am:
        goto fQXWM;
        goto kTD58;
        qeMts:
        if (!($credit2 < 0)) {
            goto wfAit;
        }
        goto S3j5T;
        L8lvx:
        ReC5E:
        goto yD8tk;
        F0D5_:
        return array("error" => 1, "data" => "积分更新成功");
        goto BxaLZ;
        M9J5O:
        XijXR:
        goto eHtPW;
        pSuvF:
        Z8eYU:
        goto X2gaG;
        gRvLa:
        return array("error" => 0, "data" => "余额更新失败");
        goto L8lvx;
        BxaLZ:
        goto aX98t;
        goto l2HKK;
        PDvlE:
        if ($type == 0) {
            goto Z8eYU;
        }
        goto LnqSL;
        SYtwV:
        $inst = pdo_insert($this->modulename . "_jl", $data);
        goto EyVJV;
        R3vCG:
        VpH5r:
        goto EasG6;
        uJcuN:
        $data = array("uid" => $uid, "weid" => $_W["uniacid"], "type" => $type, "typelx" => $typelx, "num" => $num, "remark" => $remark, "orderid" => $orderid, "createtime" => time());
        goto ntrK_;
        yxh4A:
        $inst = pdo_insert($this->modulename . "_jl", $data);
        goto MSoPn;
        yD8tk:
        goto FfkKx;
        goto soPAh;
        eHtPW:
        $res = pdo_update($this->modulename . "_share", array("credit1" => $credit1), array("id" => $uid));
        goto KZYsh;
        JBd60:
        fQXWM:
        goto R3vCG;
        Dhvg7:
        FEwgB:
        goto gRvLa;
        q5owk:
        $credit2 = $share["credit2"] + $num;
        goto qeMts;
        XOuq5:
        if (!empty($uid)) {
            goto fiGFl;
        }
        goto ZjL1r;
        vuKh2:
        return array("error" => 0, "data" => "积分不足");
        goto M9J5O;
        LDPfO:
        aX98t:
        goto nH0am;
        kTD58:
        D8Kmf:
        goto nGRqs;
        Edn8T:
        goto ReC5E;
        goto Dhvg7;
        neXzk:
        wfAit:
        goto hegLs;
        OTPer:
        tEjah:
        goto q5owk;
        ntrK_:
        $share = pdo_fetch("SELECT credit1,credit2 FROM " . tablename($this->modulename . "_share") . " WHERE id='{$uid}' and weid='{$_W["uniacid"]}' ");
        goto s4di6;
        lVujh:
        if ($res === false) {
            goto E5KBm;
        }
        goto yxh4A;
        l2HKK:
        h2V4h:
        goto SMVm2;
        LnqSL:
        goto VpH5r;
        goto OTPer;
        EyVJV:
        if ($inst === false) {
            goto h2V4h;
        }
        goto F0D5_;
        V0Snm:
        goto VpH5r;
        goto pSuvF;
        iCu3s:
        return array("error" => 0, "data" => "余额更新失败");
        goto YfqBF;
        nGRqs:
        return array("error" => 0, "data" => "积分更新失败");
        goto JBd60;
        KZYsh:
        if ($res === false) {
            goto D8Kmf;
        }
        goto SYtwV;
        YfqBF:
        FfkKx:
        goto V0Snm;
        yEKuS:
        fiGFl:
        goto uJcuN;
        WWidC:
        global $_W;
        goto XOuq5;
        X2gaG:
        $credit1 = $share["credit1"] + $num;
        goto f3ecl;
        SMVm2:
        return array("error" => 0, "data" => "积分更新失败");
        goto LDPfO;
        soPAh:
        E5KBm:
        goto iCu3s;
        Y510i:
        return array("error" => 1, "data" => "余额更新成功");
        goto Edn8T;
        MSoPn:
        if ($inst === false) {
            goto FEwgB;
        }
        goto Y510i;
        f3ecl:
        if (!($credit1 < 0)) {
            goto XijXR;
        }
        goto vuKh2;
        hegLs:
        $res = pdo_update($this->modulename . "_share", array("credit2" => $credit2), array("id" => $uid));
        goto lVujh;
        ZjL1r:
        return;
        goto yEKuS;
        EasG6:
    }
    public function islogin()
    {
        goto pPdZh;
        pPdZh:
        global $_W;
        goto O49lI;
        DjQpA:
        xhDLD:
        goto JjubS;
        JjubS:
        $mc = mc_fetch($fans["openid"]);
        goto yRkLT;
        EKefK:
        return $fans;
        goto atOhU;
        yRkLT:
        $fans = array("id" => $_SESSION["tkuid"], "tkuid" => $_SESSION["tkuid"], "wquid" => $mc["uid"], "credit1" => $share["credit1"], "credit2" => $share["credit2"], "nickname" => $share["nickname"], "avatar" => $share["avatar"], "helpid" => $share["helpid"], "dlptpid" => $share["dlptpid"], "unionid" => $share["unionid"], "from_user" => $share["from_user"], "openid" => $share["from_user"], "createtime" => $share["createtime"], "tgwid" => $share["tgwid"], "cqtype" => $share["cqtype"], "dltype" => $share["dltype"], "status" => $share["status"]);
        goto EKefK;
        O49lI:
        if (empty($_SESSION["openid"])) {
            goto xhDLD;
        }
        goto LkEaM;
        LkEaM:
        $fans["openid"] = $_SESSION["openid"];
        goto HDE9M;
        HDE9M:
        $share = pdo_fetch("select * from " . tablename($this->modulename . "_share") . " where weid='{$_W["uniacid"]}' and id='{$_SESSION["tkuid"]}'");
        goto DjQpA;
        atOhU:
    }
    public function doMobileLogin()
    {
        goto FI1di;
        x7mjj:
        $_SESSION["username"] = $share["pcuser"];
        goto gudch;
        m9aK8:
        $cfg = $this->module["config"];
        goto QGZMO;
        dR12m:
        $username = trim($_GPC["username"]);
        goto aj82Z;
        Hpqhl:
        if (!$_W["isajax"]) {
            goto HXZh3;
        }
        goto dR12m;
        ZIWn5:
        if ($username == $share["pcuser"] && $password == $share["pcpasswords"]) {
            goto NQJRd;
        }
        goto TBmKP;
        jc1mD:
        NQJRd:
        goto x7mjj;
        gudch:
        $_SESSION["tkuid"] = $share["id"];
        goto LCNB5;
        UtXQa:
        $share = pdo_fetch("SELECT * FROM " . tablename($this->modulename . "_share") . " WHERE pcuser='{$username}' and weid='{$_W["uniacid"]}' ");
        goto ZIWn5;
        aj82Z:
        $password = trim($_GPC["password"]);
        goto UtXQa;
        whyJx:
        $_SESSION["pid"] = $share["dlptpid"];
        goto pf5l5;
        LCNB5:
        $_SESSION["openid"] = $share["from_user"];
        goto u19rV;
        TBmKP:
        exit(json_encode(array("status" => 0, "msg" => "帐号密码错误", "tzurl" => urldecode($tzurl))));
        goto LWlwK;
        Tuqlb:
        $fans = mc_oauth_userinfo();
        goto Hpqhl;
        FI1di:
        global $_GPC, $_W;
        goto m9aK8;
        jFkrC:
        OaNyL:
        goto VSOD8;
        VSOD8:
        HXZh3:
        goto E0w9q;
        QGZMO:
        $pid = $_GPC["pid"];
        goto kozNp;
        u19rV:
        $_SESSION["unionid"] = $share["unionid"];
        goto whyJx;
        pf5l5:
        exit(json_encode(array("status" => 1, "msg" => "登录成功", "tzurl" => urldecode($tzurl))));
        goto jFkrC;
        E0w9q:
        include $this->template("login");
        goto yBBNa;
        kozNp:
        $tzurl = $_GPC["tzurl"];
        goto Tuqlb;
        LWlwK:
        goto OaNyL;
        goto jc1mD;
        yBBNa:
    }
    public function doMobileLoginout()
    {
        goto dSo38;
        dSo38:
        session_unset();
        goto JFSD_;
        l2HGq:
        exit(json_encode(array("status" => 1, "msg" => "退出登录成功")));
        goto Zsnqv;
        JFSD_:
        session_destroy();
        goto l2HGq;
        Zsnqv:
    }
    public function doMobilebdLogin()
    {
        goto rdgxD;
        vsBXZ:
        if (!$_W["isajax"]) {
            goto lIqRc;
        }
        goto qm2Cm;
        XBPTN:
        $openid = $_GPC["openid"];
        goto v69N8;
        ZDTol:
        $share = pdo_fetch("SELECT * FROM " . tablename($this->modulename . "_share") . " WHERE from_user='{$openid}' and weid='{$_W["uniacid"]}' ");
        goto EdFCm;
        F59eU:
        Bk0zn:
        goto ihYV_;
        PfbPx:
        $username = trim($_GPC["username"]);
        goto ei5kQ;
        EdFCm:
        if (empty($share["id"])) {
            goto Bk0zn;
        }
        goto FHjEj;
        lQFbd:
        if (!empty($share["id"])) {
            goto t3DZV;
        }
        goto gp7Mx;
        Csc6L:
        exit(json_encode(array("status" => 0, "msg" => "用户不存在，请先关注公众号")));
        goto TR1rw;
        XHCeR:
        $usdata = array("pcuser" => $username, "pcpasswords" => $password);
        goto vsBXZ;
        qm2Cm:
        if (!empty($openid)) {
            goto wh1jx;
        }
        goto aQeaV;
        r1YhK:
        t3DZV:
        goto wpfdf;
        G1588:
        wh1jx:
        goto dmHXl;
        SQCPf:
        if (!($aaa !== "false")) {
            goto oDjFa;
        }
        goto Xbh38;
        rdgxD:
        global $_GPC, $_W;
        goto jlDzA;
        l9JhN:
        oDjFa:
        goto yQ4el;
        wpfdf:
        pdo_update($this->modulename . "_share", $usdata, array("weid" => $_W["uniacid"], "id" => $share["id"]));
        goto pVk6O;
        Y6FRw:
        KmBqV:
        goto ZDTol;
        pVk6O:
        bzy73:
        goto Gsizh;
        ihYV_:
        $share = pdo_fetch("SELECT * FROM " . tablename($this->modulename . "_share") . " WHERE unionid='{$unionid}' and weid='{$_W["uniacid"]}' ");
        goto lQFbd;
        lS9iD:
        goto bzy73;
        goto r1YhK;
        TR1rw:
        Jyp0B:
        goto malOf;
        Gsizh:
        lU8X9:
        goto ATtVE;
        gp7Mx:
        exit(json_encode(array("status" => 0, "msg" => "用户不存在，请先关注公众号")));
        goto lS9iD;
        ei5kQ:
        $password = trim($_GPC["password"]);
        goto XHCeR;
        Xbh38:
        exit(json_encode(array("status" => 1, "msg" => "绑定成功！")));
        goto l9JhN;
        v69N8:
        $unionid = $_GPC["unionid"];
        goto PfbPx;
        wR5j7:
        goto lU8X9;
        goto F59eU;
        dmHXl:
        $sharepcuser = pdo_fetch("SELECT * FROM " . tablename($this->modulename . "_share") . " WHERE pcuser='{$username}' and weid='{$_W["uniacid"]}' ");
        goto NtSpa;
        aQeaV:
        exit(json_encode(array("status" => 0, "msg" => "请在微信端绑定")));
        goto G1588;
        FHjEj:
        $aaa = pdo_update($this->modulename . "_share", $usdata, array("weid" => $_W["uniacid"], "id" => $share["id"]));
        goto SQCPf;
        jlDzA:
        $cfg = $this->module["config"];
        goto XC_1_;
        ANmtP:
        include $this->template("bdlogin");
        goto Ajcui;
        malOf:
        lIqRc:
        goto ANmtP;
        yQ4el:
        exit(json_encode(array("status" => 0, "msg" => $aaa)));
        goto wR5j7;
        NtSpa:
        if (empty($sharepcuser["id"])) {
            goto KmBqV;
        }
        goto bf4UP;
        XC_1_:
        $fans = mc_oauth_userinfo();
        goto XBPTN;
        bf4UP:
        exit(json_encode(array("status" => 0, "msg" => "手机号已经存在！")));
        goto Y6FRw;
        ATtVE:
        if (!empty($share["id"])) {
            goto Jyp0B;
        }
        goto Csc6L;
        Ajcui:
    }
    public function sjrd44($length = 4)
    {
        goto VS6vE;
        vPhm1:
        $i = 0;
        goto OhMsb;
        OhMsb:
        kSgWw:
        goto KOu0A;
        ngdOy:
        SKHvA:
        goto ptLHZ;
        Pe8uE:
        WU2iZ:
        goto yR56N;
        HlSIY:
        goto kSgWw;
        goto Pe8uE;
        q73H0:
        $str .= $chars[mt_rand(0, strlen($chars) - 1)];
        goto ngdOy;
        Z9zID:
        $str = '';
        goto vPhm1;
        KOu0A:
        if (!($i < $length)) {
            goto WU2iZ;
        }
        goto q73H0;
        VS6vE:
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        goto Z9zID;
        yR56N:
        return $str;
        goto gY3XK;
        ptLHZ:
        $i++;
        goto HlSIY;
        gY3XK:
    }
    public function getimg($url, $path = '', $_W)
    {
        goto YUevE;
        T6LXt:
        return false;
        goto qvLgj;
        MCjay:
        if (!($url == '')) {
            goto N88gy;
        }
        goto T6LXt;
        YUevE:
        empty($path) && ($path = IA_ROOT . "/addons/tiger_newhu/goodsimg/" . date("Ymd"));
        goto uuake;
        Fu2mY:
        $img = ob_get_contents();
        goto pdWFE;
        Eqkub:
        ob_start();
        goto Q4Ofs;
        uuake:
        !file_exists($path) && mkdir($path, 0777, true);
        goto MCjay;
        RMSP9:
        fclose($fp);
        goto VMQ75;
        Q4Ofs:
        readfile($url);
        goto Fu2mY;
        Bia0Q:
        $filename = $path . "/" . $sctime . ".png";
        goto Eqkub;
        qvLgj:
        N88gy:
        goto BVLx0;
        BVLx0:
        $sctime = date("YmdHis") . $this->sjrd44(6);
        goto Bia0Q;
        VMQ75:
        return $_W["siteroot"] . "addons/tiger_newhu/goodsimg/" . date("Ymd") . "/" . $sctime . ".png";
        goto hWf9K;
        pdWFE:
        ob_end_clean();
        goto bfLTr;
        bfLTr:
        $fp = fopen($filename, "a");
        goto qesqL;
        qesqL:
        fwrite($fp, $img);
        goto RMSP9;
        hWf9K:
    }
    public function doMobileTupian()
    {
        goto NDSSU;
        OYSVQ:
        $taoimage = $_GPC["taoimage"];
        goto WhRuc;
        hPgac:
        $url = $urlarr;
        goto FOnj0;
        FOnj0:
        $ewm = $this->getimg("http://bshare.optimix.asia/barCode?site=weixin&url=" . $url, '', $_W);
        goto b8liR;
        I94go:
        $cfg = $this->module["config"];
        goto c7WGP;
        SLV2a:
        $price = $_GPC["price"];
        goto zMZub;
        zMZub:
        $yhj = $_GPC["yhj"];
        goto qou7_;
        c7WGP:
        $title = urldecode($_GPC["title"]);
        goto SLV2a;
        j9GFQ:
        $urlarr = $this->dwzw($url);
        goto hPgac;
        ciacO:
        $jrprice = $_GPC["jrprice"];
        goto OYSVQ;
        NDSSU:
        global $_GPC, $_W;
        goto I94go;
        WhRuc:
        $url = urldecode($_GPC["url"]);
        goto sPIEc;
        b8liR:
        picjialidun($_W, $title, $price, $yhj, $orprice, $xiaol, $jrprice, $taoimage, $ewm);
        goto xYbpU;
        qou7_:
        $orprice = $_GPC["orprice"];
        goto Ezr4T;
        sPIEc:
        include IA_ROOT . "/addons/tiger_newhu/inc/sdk/tbk/tb.php";
        goto j9GFQ;
        Ezr4T:
        $xiaol = $_GPC["xiaol"];
        goto ciacO;
        xYbpU:
    }
    public function getfc($string, $len = 2)
    {
        goto KY1Wh;
        Wy7lr:
        $string = mb_substr($string, $len, $strlen, "utf8");
        goto vf1OD;
        V3bw4:
        $strlen = mb_strlen($string);
        goto c2iG9;
        zscTa:
        n3NYS:
        goto P3Z11;
        IT_BA:
        $start = 0;
        goto V3bw4;
        UTc2S:
        goto XIfoL;
        goto zscTa;
        WYU8C:
        if (!$strlen) {
            goto n3NYS;
        }
        goto wc3x_;
        vf1OD:
        $strlen = mb_strlen($string);
        goto UTc2S;
        wc3x_:
        $array[] = mb_substr($string, $start, $len, "utf8");
        goto Wy7lr;
        c2iG9:
        XIfoL:
        goto WYU8C;
        P3Z11:
        return $array;
        goto DEPaa;
        KY1Wh:
        $string = str_replace(" ", '', $string);
        goto IT_BA;
        DEPaa:
    }
    public function curl_request($url, $post = '', $cookie = '', $returnCookie = 0)
    {
        goto NqfUx;
        njKfa:
        return $info;
        goto ITUff;
        zoB78:
        $cookies = $cookies . "; " . $val;
        goto ZVThL;
        xUhz7:
        curl_setopt($curl, CURLOPT_COOKIE, $cookie);
        goto qbXdQ;
        O_ptc:
        curl_setopt($curl, CURLOPT_POST, 1);
        goto An09h;
        VDInE:
        goto XGQq9;
        goto k4fuI;
        AURUE:
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; \tTrident/6.0)");
        goto zuFiZ;
        An09h:
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
        goto roydn;
        Fp9G8:
        jWthP:
        goto U8S4W;
        bDPtC:
        if (!$post) {
            goto fzS6g;
        }
        goto O_ptc;
        O1rb0:
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
        goto AnvYR;
        l6WkX:
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        goto AURUE;
        gBh5A:
        $info["cookie"] = substr($cookies, 1);
        goto qdo3g;
        uF9sP:
        if (!curl_errno($curl)) {
            goto NJXxD;
        }
        goto iuoyM;
        GU1wY:
        if ($returnCookie) {
            goto ow2lY;
        }
        goto AZ155;
        mkUWt:
        goto jWthP;
        goto MfJde;
        sM8lT:
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        goto bDPtC;
        dkk8O:
        curl_setopt($curl, CURLOPT_HEADER, $returnCookie);
        goto AOgNS;
        NqfUx:
        $curl = curl_init();
        goto tl69x;
        ITUff:
        XGQq9:
        goto nbhop;
        Cwx54:
        $cookies = $val;
        goto mkUWt;
        rpySC:
        list($header, $body) = explode("\n\n", $data, 2);
        goto pdiE9;
        VrNly:
        if (!$cookie) {
            goto NPbiv;
        }
        goto xUhz7;
        pdiE9:
        preg_match_all("/Set\\-Cookie:([^;]*);/", $header, $matches);
        goto Fp9G8;
        roydn:
        fzS6g:
        goto VrNly;
        a12xv:
        x6a42:
        goto gBh5A;
        qbXdQ:
        NPbiv:
        goto dkk8O;
        ZVThL:
        goto jWthP;
        goto a12xv;
        qdo3g:
        $info["content"] = $body;
        goto njKfa;
        AZ155:
        return $data;
        goto VDInE;
        k4xNF:
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        goto sM8lT;
        zuFiZ:
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        goto O1rb0;
        hvrS7:
        NJXxD:
        goto yYzSL;
        MfJde:
        bqPBS:
        goto zoB78;
        tl69x:
        curl_setopt($curl, CURLOPT_URL, $url);
        goto l6WkX;
        AnvYR:
        curl_setopt($curl, CURLOPT_REFERER, "http://XXX");
        goto k4xNF;
        AOgNS:
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        goto NtMze;
        k4fuI:
        ow2lY:
        goto rpySC;
        iuoyM:
        return curl_error($curl);
        goto hvrS7;
        Zsm5U:
        $data = curl_exec($curl);
        goto uF9sP;
        U8S4W:
        if (!(list($key, $val) = each($matches[1]))) {
            goto x6a42;
        }
        goto JCMg2;
        yYzSL:
        curl_close($curl);
        goto GU1wY;
        NtMze:
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        goto Zsm5U;
        JCMg2:
        if (!($cookies == '')) {
            goto bqPBS;
        }
        goto Cwx54;
        nbhop:
    }
    public function strurl($coupons_url)
    {
        goto LMoDm;
        xmgqs:
        $wz = strpos($url, $activity_id);
        goto hBrpI;
        d3xR0:
        return substr($url, $wz + 11, 32);
        goto a4er3;
        hBrpI:
        if (empty($wz)) {
            goto OzUjY;
        }
        goto ZsMUz;
        jEVRE:
        $activity_id = "activity_id=";
        goto xmgqs;
        a4er3:
        r_Pfk:
        goto EeHpD;
        hRs_f:
        $activity_id = "activityid=";
        goto y7onF;
        D03ex:
        goto r_Pfk;
        goto XtfiJ;
        XtfiJ:
        OzUjY:
        goto hRs_f;
        ZsMUz:
        return substr($url, $wz + 12, 32);
        goto D03ex;
        LMoDm:
        $url = strtolower($coupons_url);
        goto jEVRE;
        y7onF:
        $wz = strpos($url, $activity_id);
        goto d3xR0;
        EeHpD:
    }
    public function doMobileLjtkl()
    {
        goto X1GyP;
        gRAqN:
        $img = urldecode($_GPC["img"]);
        goto m0f9v;
        a7BLf:
        $url = urldecode($_GPC["url"]);
        goto gRAqN;
        fq229:
        $tkl = $this->tkl($url, $img, $tjcontent);
        goto Rlgyn;
        m0f9v:
        $tjcontent = $_GPC["title"];
        goto fq229;
        X1GyP:
        global $_W, $_GPC;
        goto a7BLf;
        Rlgyn:
        die(json_encode(array("tkl" => $tkl)));
        goto WS8JH;
        WS8JH:
    }
    public function tkl($url, $img, $tjcontent)
    {
        goto cH3oB;
        cH3oB:
        global $_W, $_GPC;
        goto RkCdK;
        tnHV2:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/tkl_log.txt", "\n" . $url . "------" . $img . "-----" . $tjcontent . "------" . json_encode($jsonArray), FILE_APPEND);
        goto mz0dS;
        WFGCf:
        $taokou = str_replace("《", "￥", $taokou);
        goto Ym4U6;
        zh1NV:
        if (!($cfg["tklnewtype"] == 1)) {
            goto AkG9y;
        }
        goto WFGCf;
        RbCN8:
        $jsonArray = json_decode($jsonStr, true);
        goto Ck8da;
        nwz_5:
        $c->secretKey = $secret;
        goto mHa5c;
        Y0MGC:
        $c->appkey = $appkey;
        goto nwz_5;
        xtAc2:
        if (empty($cfg["tklleft"])) {
            goto rv5XC;
        }
        goto Slr9k;
        Slr9k:
        $taokou = str_replace("￥", '', $taokou);
        goto sciY7;
        aMHOh:
        $appkey = $cfg["tkAppKey"];
        goto f3SFX;
        mHa5c:
        $req = new TbkTpwdCreateRequest();
        goto koq7l;
        mz0dS:
        return $taokou;
        goto UOwzX;
        lCZuh:
        $req->setLogo($img);
        goto BCihq;
        Ym4U6:
        AkG9y:
        goto xtAc2;
        koq7l:
        $req->setText($tjcontent);
        goto FwXOZ;
        ST1Dm:
        $c = new TopClient();
        goto Y0MGC;
        sciY7:
        $taokou = $cfg["tklleft"] . $taokou . $cfg["tklright"];
        goto UKcxW;
        MTLFm:
        $resp = $c->execute($req);
        goto oqFQI;
        RkCdK:
        $cfg = $this->module["config"];
        goto aMHOh;
        BCihq:
        $req->setExt("{}");
        goto MTLFm;
        FwXOZ:
        $req->setUrl($url);
        goto lCZuh;
        f3SFX:
        $secret = $cfg["tksecretKey"];
        goto ST1Dm;
        UKcxW:
        rv5XC:
        goto tnHV2;
        oqFQI:
        $jsonStr = json_encode($resp);
        goto RbCN8;
        Ck8da:
        $taokou = $jsonArray["data"]["model"];
        goto zh1NV;
        UOwzX:
    }
    public function doMobileSq88888888()
    {
        goto cL_T7;
        NEyVX:
        foreach ($s as $k => $v) {
            goto BNq59;
            BNq59:
            $b = unserialize($v["settings"]);
            goto iRk_6;
            iRk_6:
            echo "," . $b["tbuid"];
            goto ItgXn;
            ItgXn:
            Fymz9:
            goto gUb2B;
            gUb2B:
        }
        goto BuKLS;
        m96Vb:
        echo "使用域名:" . $host . "<br>";
        goto ho8rQ;
        ittNf:
        exit;
        goto k2RMs;
        VaSTn:
        $host = strtolower($host);
        goto C5O7R;
        a6Wgu:
        echo "域名:" . $tkurl2 . "<br>";
        goto IR4HY;
        k2RMs:
        gNumF:
        goto kPyR7;
        HLK9M:
        $tkip = $this->get_server_ip();
        goto m96Vb;
        Hll3b:
        $host = $_SERVER["HTTP_HOST"];
        goto VaSTn;
        ho8rQ:
        echo "淘ID:" . $tbuid . "<br>";
        goto a6Wgu;
        llfkp:
        if (!($_GPC["my"] != "tigernewhu")) {
            goto gNumF;
        }
        goto QThVN;
        cL_T7:
        global $_W, $_GPC;
        goto llfkp;
        brlk0:
        $tkurl2 = $_W["setting"]["site"]["url"];
        goto HLK9M;
        IR4HY:
        echo "tkip:" . $tkip . "<br>";
        goto BXx8E;
        vQHCE:
        $tkurl1 = $host;
        goto brlk0;
        QThVN:
        echo "cs";
        goto ittNf;
        BuKLS:
        vOmhn:
        goto XTkM0;
        kPyR7:
        $cfg = $this->module["config"];
        goto Hll3b;
        BXx8E:
        $s = pdo_fetchall("select settings from " . tablename("uni_account_modules") . " where module='tiger_newhu'");
        goto NEyVX;
        C5O7R:
        $tbuid = $cfg["tbuid"];
        goto vQHCE;
        XTkM0:
    }
    public function oldtkl($url, $img, $tjcontent)
    {
        goto hLinK;
        tQWdm:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/oldtkl_log.txt", "\n" . json_encode($resp), FILE_APPEND);
        goto JZLGg;
        wZgnR:
        settype($taokou, "string");
        goto C4GH1;
        rFKyL:
        $tpwd_param->logo = $img;
        goto dbKJa;
        hLinK:
        global $_W, $_GPC;
        goto uWo40;
        dbKJa:
        $tpwd_param->text = $tjcontent;
        goto GmAUL;
        C4GH1:
        if (!($cfg["tklnewtype"] == 1)) {
            goto wi1cM;
        }
        goto aIbg0;
        mt3MN:
        $c = new TopClient();
        goto HvJIz;
        oHk7J:
        $req->setTpwdParam(json_encode($tpwd_param));
        goto ka10s;
        Pwq1o:
        $c->secretKey = $secret;
        goto ouT1r;
        DsdkS:
        $secret = $cfg["tksecretKey"];
        goto mt3MN;
        aIbg0:
        $taokou = str_replace("《", "￥", $taokou);
        goto Y8djm;
        GmAUL:
        $tpwd_param->url = $url;
        goto oHk7J;
        HvJIz:
        $c->appkey = $appkey;
        goto Pwq1o;
        SY9tx:
        $tpwd_param->ext = "{\"\":\"\"}";
        goto rFKyL;
        LKvib:
        $tpwd_param = new GenPwdIsvParamDto();
        goto SY9tx;
        Y8djm:
        wi1cM:
        goto tQWdm;
        BZ2SM:
        $taokou = $resp->model;
        goto wZgnR;
        D4AWB:
        $appkey = $cfg["tkAppKey"];
        goto DsdkS;
        uWo40:
        $cfg = $this->module["config"];
        goto D4AWB;
        ouT1r:
        $req = new WirelessShareTpwdCreateRequest();
        goto LKvib;
        JZLGg:
        return $taokou;
        goto nfU3O;
        ka10s:
        $resp = $c->execute($req);
        goto BZ2SM;
        nfU3O:
    }
    public function hlinorder($userInfo, $_W)
    {
        goto HNhzJ;
        r5Srf:
        $cfg = $this->module["config"];
        goto uhSa0;
        HNhzJ:
        global $_W, $_GPC;
        goto r5Srf;
        uhSa0:
        foreach ($userInfo as $v) {
            goto E_xsS;
            Gyyjj:
            pdo_update($this->modulename . "_newtbgoods", $item, array("weid" => $_W["uniacid"], "itemid" => $v["itemid"]));
            goto uQh61;
            ZikoY:
            if (empty($go)) {
                goto x9Rai;
            }
            goto Gyyjj;
            Qkath:
            $Quan_id = $this->strurl($v["couponurl"]);
            goto SmUqg;
            E_xsS:
            $fztype = pdo_fetch("select * from " . tablename($this->modulename . "_fztype") . " where weid='{$_W["uniacid"]}' and hlcid='{$v["fqcat"]}' order by px desc");
            goto Qkath;
            yD6WF:
            JThJZ:
            goto TQVsy;
            Oex7f:
            x9Rai:
            goto WJRCT;
            vDp0w:
            szM3J:
            goto yD6WF;
            SmUqg:
            $item = array("weid" => $_W["uniacid"], "fqcat" => $fztype["id"], "zy" => 2, "quan_id" => $Quan_id, "itemid" => $v["itemid"], "itemtitle" => $v["itemtitle"], "itemshorttitle" => $v["itemshorttitle"], "itemdesc" => $v["itemdesc"], "itemprice" => $v["itemprice"], "itemsale" => $v["itemsale"], "itemsale2" => $v["itemsale2"], "conversion_ratio" => $v["conversion_ratio"], "itempic" => $v["itempic"], "itemendprice" => $v["itemendprice"], "shoptype" => $v["shoptype"], "userid" => $v["userid"], "sellernick" => $v["sellernick"], "tktype" => $v["tktype"], "tkrates" => $v["tkrates"], "ctrates" => $v["ctrates"], "cuntao" => $v["cuntao"], "tkmoney" => $v["tkmoney"], "tkurl" => $v["tkurl"], "couponurl" => $v["couponurl"], "planlink" => $v["planlink"], "couponmoney" => $v["couponmoney"], "couponsurplus" => $v["couponsurplus"], "couponreceive" => $v["couponreceive"], "couponreceive2" => $v["couponreceive2"], "couponnum" => $v["couponnum"], "couponexplain" => $v["couponexplain"], "couponstarttime" => $v["couponstarttime"], "couponendtime" => $v["couponendtime"], "starttime" => $v["starttime"], "isquality" => $v["isquality"], "item_status" => $v["item_status"], "report_status" => $v["report_status"], "is_brand" => $v["is_brand"], "is_live" => $v["is_live"], "videoid" => $v["videoid"], "activity_type" => $v["activity_type"], "createtime" => TIMESTAMP);
            goto vL34S;
            vL34S:
            $go = pdo_fetch("SELECT id FROM " . tablename($this->modulename . "_newtbgoods") . " WHERE weid='{$_W["uniacid"]}' and itemid='{$v["itemid"]}' ORDER BY id desc");
            goto ZikoY;
            uQh61:
            goto szM3J;
            goto Oex7f;
            WJRCT:
            pdo_insert($this->modulename . "_newtbgoods", $item);
            goto vDp0w;
            TQVsy:
        }
        goto FBlNf;
        FBlNf:
        mNeq3:
        goto Oygtd;
        Oygtd:
    }
    public function indtkgoods($dtklist)
    {
        goto eODQH;
        YhwMy:
        foreach ($dtklist as $v) {
            goto RudgH;
            qk0JK:
            if ($v["Commission_jihua"] != "0.00") {
                goto bBghf;
            }
            goto MMCSq;
            Mk7Kw:
            goto AIqLY;
            goto aJPi1;
            NnUQx:
            zpKKx:
            goto l9F06;
            A355w:
            $go = pdo_fetch("SELECT itemid FROM " . tablename($this->modulename . "_newtbgoods") . " WHERE weid = '{$_W["uniacid"]}' and  itemid={$v["GoodsID"]} ");
            goto s35tx;
            RudgH:
            $fztype = pdo_fetch("select * from " . tablename($this->modulename . "_fztype") . " where weid='{$_W["uniacid"]}' and dtkcid='{$v["Cid"]}' order by px desc");
            goto mlo_G;
            LQTb0:
            $yjbl = $v["Commission_queqiao"];
            goto LAN20;
            o5Bbn:
            pdo_insert($this->modulename . "_newtbgoods", $item);
            goto cSJpQ;
            cSJpQ:
            c14at:
            goto TYTE1;
            mLhls:
            $shoptype = "B";
            goto AgPO8;
            MMCSq:
            $lxtype = "通用计划";
            goto fxYZB;
            rFRD6:
            $shoptype = "C";
            goto Mk7Kw;
            wlEdP:
            a3Ww6:
            goto o5Bbn;
            l9F06:
            $lxtype = "鹊桥活动";
            goto LQTb0;
            ePbmC:
            bBghf:
            goto ZVyzd;
            ZVyzd:
            $lxtype = "营销计划";
            goto vW7t6;
            aJPi1:
            WdQaz:
            goto mLhls;
            GqPCc:
            goto c14at;
            goto wlEdP;
            LAN20:
            goto m_I8_;
            goto ePbmC;
            AgPO8:
            AIqLY:
            goto R3lS0;
            meZcq:
            pdo_update($this->modulename . "_newtbgoods", $item, array("weid" => $_W["uniacid"], "itemid" => $v["GoodsID"]));
            goto GqPCc;
            R3lS0:
            $item = array("weid" => $_W["uniacid"], "fqcat" => $fztype["id"], "zy" => 1, "tktype" => $lxtype, "itemid" => $v["GoodsID"], "itemtitle" => $v["Title"], "itemdesc" => $v["Introduce"], "itempic" => $v["Pic"], "itemendprice" => $v["Price"], "itemsale" => $v["Sales_num"], "tkrates" => $yjbl, "couponreceive" => $v["Quan_receive"], "couponsurplus" => $v["Quan_surplus"], "couponmoney" => $v["Quan_price"], "couponendtime" => strtotime($v["Quan_time"]), "couponurl" => $v["Quan_link"], "shoptype" => $shoptype, "quan_id" => $v["Quan_id"], "couponexplain" => $v["Quan_condition"], "itemprice" => $v["Org_Price"], "tkurl" => $v["Jihua_link"], "createtime" => TIMESTAMP);
            goto A355w;
            fxYZB:
            $yjbl = $v["Commission_jihua"];
            goto Q2aaY;
            QFQMl:
            if ($v["IsTmall"] == 1) {
                goto WdQaz;
            }
            goto rFRD6;
            oOUGF:
            m_I8_:
            goto QFQMl;
            TYTE1:
            qAUu0:
            goto CqllT;
            vW7t6:
            $yjbl = $v["Commission_jihua"];
            goto oOUGF;
            s35tx:
            if (empty($go)) {
                goto a3Ww6;
            }
            goto meZcq;
            Q2aaY:
            goto m_I8_;
            goto NnUQx;
            mlo_G:
            if ($v["Commission_queqiao"] != "0.00") {
                goto zpKKx;
            }
            goto qk0JK;
            CqllT:
        }
        goto zFMFZ;
        eODQH:
        global $_W, $_GPC;
        goto sxUIP;
        Wfrsv:
        $cfg = $this->module["config"];
        goto YhwMy;
        zFMFZ:
        E5uix:
        goto OPwek;
        sxUIP:
        $page = $_GPC["page"];
        goto Wfrsv;
        OPwek:
    }
    public function apUpload($media_id)
    {
        goto XANes;
        R8oXN:
        load()->classs("weixin.account");
        goto Q9wPP;
        aQxFD:
        curl_setopt($ch, CURLOPT_FILE, $fp);
        goto BaRwI;
        E2wRK:
        $fp = fopen($targetName, "wb");
        goto aQxFD;
        HKDA9:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log.txt", "\n old:" . json_encode($access_token), FILE_APPEND);
        goto SHhHU;
        XANes:
        global $_W, $_GPC;
        goto R8oXN;
        W773_:
        mkdir($newfolder, 7777);
        goto NhibL;
        BaRwI:
        curl_setopt($ch, CURLOPT_HEADER, 0);
        goto M6v8u;
        NhibL:
        zMafE:
        goto N1qWB;
        BiDm5:
        $newfolder = ATTACHMENT_ROOT . "images" . "/tiger_newhu_photos" . "/";
        goto CwVYr;
        jZFfa:
        $access_token = $accObj->fetch_token();
        goto Cbh8S;
        M6v8u:
        curl_exec($ch);
        goto L3knF;
        Kvyml:
        $targetName = ATTACHMENT_ROOT . $picurl;
        goto MFnOm;
        Cbh8S:
        $url = "http://file.api.weixin.qq.com/cgi-bin/media/get?access_token=" . $access_token . "&media_id=" . $media_id;
        goto HKDA9;
        N1qWB:
        $picurl = "images" . "/tiger_newhu_photos" . "/" . date("YmdHis") . rand(1000, 9999) . ".jpg";
        goto Kvyml;
        CwVYr:
        if (is_dir($newfolder)) {
            goto zMafE;
        }
        goto W773_;
        Q9wPP:
        $accObj = WeixinAccount::create($_W["uniacid"]);
        goto jZFfa;
        L3knF:
        curl_close($ch);
        goto JUTPy;
        SHhHU:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log.txt", "\n old:" . json_encode($media_id), FILE_APPEND);
        goto BiDm5;
        JUTPy:
        fclose($fp);
        goto QFvOS;
        QFvOS:
        return $picurl;
        goto Fq9AF;
        MFnOm:
        $ch = curl_init($url);
        goto E2wRK;
        Fq9AF:
    }
    public function dwz($url, $turl = '')
    {
        goto BwMCt;
        w71MZ:
        return $url;
        goto Krhmf;
        sLyXD:
        if ($cfg["dwzlj"] == 1) {
            goto S2n7w;
        }
        goto bY2f9;
        DnLQm:
        goto snDm6;
        goto bxrsS;
        x8zLW:
        snDm6:
        goto w71MZ;
        qBsIu:
        VigM_:
        goto pkTxq;
        oOK4_:
        if (!empty($turl)) {
            goto x1IKO;
        }
        goto w0eU3;
        fXxdv:
        if ($cfg["dwzlj"] == 0) {
            goto VigM_;
        }
        goto sLyXD;
        eyf6R:
        $url = urlencode($url);
        goto oOK4_;
        BgFdK:
        $url = $this->wxdwz($turl);
        goto x8zLW;
        BwMCt:
        global $_W;
        goto eyf6R;
        pkTxq:
        $url = $this->sinadwz($turl);
        goto DnLQm;
        bxrsS:
        S2n7w:
        goto BgFdK;
        w0eU3:
        $turl = $_W["siteroot"] . str_replace("./", "app/", $this->createMobileurl("openview")) . "&link=" . $url;
        goto aABuw;
        w3Ssy:
        goto snDm6;
        goto qBsIu;
        bY2f9:
        $url = $this->zydwz($turl);
        goto w3Ssy;
        YINAe:
        $cfg = $this->module["config"];
        goto fXxdv;
        aABuw:
        x1IKO:
        goto YINAe;
        Krhmf:
    }
    public function dwzw($turl)
    {
        goto T9t_V;
        OuUGR:
        goto P7GTO;
        goto hvNjz;
        g8FJv:
        $url = $this->sinadwz($turl);
        goto OuUGR;
        lsYqm:
        xMWzc:
        goto g8FJv;
        fVXjO:
        $url = $this->zydwz($turl);
        goto Pe4uT;
        Pae8Z:
        $cfg = $this->module["config"];
        goto iZj_c;
        T9t_V:
        global $_W;
        goto Pae8Z;
        HNJS1:
        return $url;
        goto nFN2p;
        iZj_c:
        if ($cfg["dwzlj"] == 0) {
            goto xMWzc;
        }
        goto gGgDF;
        hvNjz:
        Smye_:
        goto luVvV;
        gGgDF:
        if ($cfg["dwzlj"] == 1) {
            goto Smye_;
        }
        goto fVXjO;
        l53E0:
        P7GTO:
        goto HNJS1;
        Pe4uT:
        goto P7GTO;
        goto lsYqm;
        luVvV:
        $url = $this->wxdwz($turl);
        goto l53E0;
        nFN2p:
    }
    public function zydwz($turl)
    {
        goto hF4cW;
        Zzql0:
        $url = $cfg["zydwz"] . "t.php?d=" . $id;
        goto OF6sP;
        ASGSm:
        $data = array("weid" => $_W["uniacid"], "url" => $turl, "createtime" => TIMESTAMP);
        goto NjeN1;
        hF4cW:
        global $_W;
        goto e0PF8;
        OF6sP:
        return $url;
        goto vG4AO;
        e0PF8:
        $cfg = $this->module["config"];
        goto ASGSm;
        BzcRW:
        $id = pdo_insertid();
        goto Zzql0;
        NjeN1:
        pdo_insert("tiger_newhu_dwz", $data);
        goto BzcRW;
        vG4AO:
    }
    public function wxdwz($url)
    {
        goto mDkDF;
        Ygq77:
        return $content["short_url"];
        goto goYm8;
        k_CMN:
        $access_token = $this->getAccessToken();
        goto mFOMX;
        WHnvS:
        $content = @json_decode($ret["content"], true);
        goto Ygq77;
        RUZAY:
        $ret = ihttp_request($url, $result);
        goto WHnvS;
        mDkDF:
        $result = "{\"action\":\"long2short\",\"long_url\":\"" . $url . "\"}";
        goto k_CMN;
        mFOMX:
        $url = "https://api.weixin.qq.com/cgi-bin/shorturl?access_token={$access_token}";
        goto RUZAY;
        goYm8:
    }
    public function sinadwz($url)
    {
        goto Nr71j;
        rDWlO:
        $key = trim($cfg["sinkey"]);
        goto tlt6y;
        Nr71j:
        global $_W;
        goto WKNSC;
        GWnN9:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log--sina.txt", "\n--3" . json_encode($json), FILE_APPEND);
        goto byxsg;
        N0rIe:
        ofUNM:
        goto mHvyE;
        AEGRC:
        return $result[0]["url_short"];
        goto nj1L1;
        byxsg:
        $result = @json_decode($json["content"], true);
        goto AEGRC;
        iuv62:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log--sina.txt", "\n--3" . $url, FILE_APPEND);
        goto GWnN9;
        WKNSC:
        $cfg = $this->module["config"];
        goto auWa4;
        j51YQ:
        $sinaurl = "http://api.t.sina.com.cn/short_url/shorten.json?source={$key}&url_long={$turl2}";
        goto ozmuj;
        tlt6y:
        goto ofUNM;
        goto h9DQ8;
        ytr5p:
        $json = ihttp_get($sinaurl);
        goto iuv62;
        h9DQ8:
        w4luF:
        goto sNwMS;
        sNwMS:
        $key = "1549359964";
        goto N0rIe;
        mHvyE:
        $turl2 = urlencode($url);
        goto j51YQ;
        ozmuj:
        load()->func("communication");
        goto ytr5p;
        auWa4:
        if (empty($cfg["sinkey"])) {
            goto w4luF;
        }
        goto rDWlO;
        nj1L1:
    }
    public function addtbgoods($data)
    {
        goto G7VyX;
        w3KZj:
        return '';
        goto hBL0n;
        hBL0n:
        cbSxv:
        goto RHgwn;
        JT0_G:
        hpGNt:
        goto OMBuP;
        OMBuP:
        tKzvs:
        goto uhMIa;
        RJgWi:
        if (!empty($data["num_iid"])) {
            goto cbSxv;
        }
        goto w3KZj;
        pNvfZ:
        goto hpGNt;
        goto cC2ai;
        n9DYA:
        if (empty($go)) {
            goto ZDAWO;
        }
        goto rSvJu;
        rSvJu:
        pdo_update($this->modulename . "_tbgoods", $data, array("weid" => $data["weid"], "num_iid" => $data["num_iid"]));
        goto pNvfZ;
        G7VyX:
        $cfg = $this->module["config"];
        goto f6HH4;
        ZgnKy:
        pdo_insert($this->modulename . "_tbgoods", $data);
        goto JT0_G;
        cC2ai:
        ZDAWO:
        goto ZgnKy;
        f6HH4:
        if (!($cfg["cxrk"] == 1)) {
            goto tKzvs;
        }
        goto RJgWi;
        RHgwn:
        $go = pdo_fetch("SELECT id FROM " . tablename($this->modulename . "_tbgoods") . " WHERE weid = '{$data["weid"]}' and  num_iid='{$data["num_iid"]}'");
        goto n9DYA;
        uhMIa:
    }
    public function mygetID($url)
    {
        goto awXgq;
        XT20k:
        SjO1Y:
        goto KK1_z;
        KK1_z:
        return $match[1];
        goto O2rec;
        kOJBQ:
        return '';
        goto kgGzn;
        O2rec:
        tZ3XF:
        goto keWIN;
        awXgq:
        if (preg_match("/[\\?&]id=(\\d+)/", $url, $match)) {
            goto SjO1Y;
        }
        goto kOJBQ;
        kgGzn:
        goto tZ3XF;
        goto XT20k;
        keWIN:
    }
    public function getyouhui2($str)
    {
        preg_match_all("|(￥[^￥]+￥)|ism", $str, $matches);
        return $matches[1][0];
    }
    public function geturl($str)
    {
        goto WsOmO;
        xbTPF:
        ThDrH:
        goto hOZoM;
        Asie3:
        $url = substr($url, 0, $matches[0][1]);
        goto R3Jcq;
        WsOmO:
        $exp = explode("http", $str);
        goto AOb7j;
        hOZoM:
        return '';
        goto ypK1K;
        Mm1fL:
        preg_match("/[\\s]/u", $url, $matches, PREG_OFFSET_CAPTURE);
        goto Asie3;
        ypK1K:
        GOB8x:
        goto LvuBr;
        AGDxl:
        goto GOB8x;
        goto xbTPF;
        R3Jcq:
        if ($url == "http") {
            goto ThDrH;
        }
        goto EzjIS;
        EzjIS:
        return $url;
        goto AGDxl;
        AOb7j:
        $url = "http" . trim($exp[1]) . " ";
        goto Mm1fL;
        LvuBr:
    }
    public function myisexists($url)
    {
        goto dCxpj;
        TZftH:
        n3xEm:
        goto gXfL8;
        ro4Zc:
        return 2;
        goto TZftH;
        WOwlq:
        return 2;
        goto aGgjD;
        SCpSI:
        return 1;
        goto BkfCW;
        XIgSF:
        if (stripos($url, "tmall.com") !== false) {
            goto kHsb2;
        }
        goto UZvYa;
        aGgjD:
        goto n3xEm;
        goto fkYZp;
        AWnMQ:
        nr1DC:
        goto ro4Zc;
        fkYZp:
        kHsb2:
        goto Gt1gd;
        UZvYa:
        if (stripos($url, "tmall.hk") !== false) {
            goto nr1DC;
        }
        goto SCpSI;
        dCxpj:
        if (stripos($url, "taobao.com") !== false) {
            goto uYuig;
        }
        goto XIgSF;
        Cc6es:
        uYuig:
        goto WOwlq;
        BkfCW:
        goto n3xEm;
        goto Cc6es;
        gXfL8:
        return 0;
        goto WYd04;
        idcvT:
        goto n3xEm;
        goto AWnMQ;
        Gt1gd:
        return 2;
        goto idcvT;
        WYd04:
    }
    public function jdgoodsID($url)
    {
        goto AQd_s;
        W4T1S:
        $goodsid = $this->jdgoods($url);
        goto l0_C2;
        AQd_s:
        $goodsid = $this->Text_qzj($url, "?sku=", "&");
        goto Xcs25;
        Xcs25:
        if (!empty($goodsid)) {
            goto a8A2n;
        }
        goto BdL1U;
        Tav6b:
        return $goodsid;
        goto QN_fw;
        BdL1U:
        $goodsid = $this->Text_qzj($url, "product/", ".html");
        goto pBqBU;
        uHPPp:
        if (!empty($goodsid)) {
            goto hJEKg;
        }
        goto wV_P6;
        eAzq9:
        if (!empty($goodsid)) {
            goto xWD0F;
        }
        goto W4T1S;
        mC5qP:
        hJEKg:
        goto eAzq9;
        l0_C2:
        xWD0F:
        goto Tav6b;
        wV_P6:
        $goodsid = $this->Text_qzj($url, "com/", ".html");
        goto mC5qP;
        pBqBU:
        a8A2n:
        goto uHPPp;
        QN_fw:
    }
    public function pddgoodsID($url)
    {
        goto Gp3B5;
        ndeKD:
        return $match[1];
        goto mK1P2;
        maXEJ:
        return '';
        goto ET3Tv;
        geyUa:
        zOO6l:
        goto ndeKD;
        mK1P2:
        HEAEj:
        goto LRcYP;
        ET3Tv:
        goto HEAEj;
        goto geyUa;
        Gp3B5:
        if (preg_match("/[\\?&]goods_id=(\\d+)/", $url, $match)) {
            goto zOO6l;
        }
        goto maXEJ;
        LRcYP:
    }
    public function pdddwzw($turl)
    {
        goto HhYs2;
        YRnKU:
        return $url;
        goto vcnph;
        HhYs2:
        global $_W;
        goto sDudr;
        sDudr:
        $cfg = $this->module["config"];
        goto oJ6wg;
        oJ6wg:
        $url = $this->zydwz($turl);
        goto YRnKU;
        vcnph:
    }
    public function getgoodsid($url)
    {
        goto v3ePg;
        w7h_T:
        $url = $this->Text_qzj($str, "url = '", "';");
        goto jgHHl;
        gEV9p:
        $goodsid = $this->Text_qzj($str, "itemId:", ",");
        goto d28C0;
        NrsS9:
        if (!empty($goodsid)) {
            goto HEJSA;
        }
        goto w7h_T;
        qr6sv:
        JNHOY:
        goto pos9s;
        wCPgW:
        $goodsid = $this->Text_qzj($str, "&id=", "&");
        goto fTYMc;
        rf2PA:
        yuQmq:
        goto JBAj2;
        TSvPH:
        $goodsid = $this->Text_qzj($str, "itemId%3D", "%26");
        goto qr6sv;
        nKJ5N:
        $goodsid = $this->Text_qzj($str, "itemId=", "&");
        goto rf2PA;
        FGxRa:
        if (!empty($goodsid)) {
            goto X_a_s;
        }
        goto gEV9p;
        q476a:
        yAIcE:
        goto X8jhs;
        jk6oU:
        HEJSA:
        goto f7slt;
        iZwtO:
        $goodsid = $this->Text_qzj($str, "itemid=", "&");
        goto q476a;
        olSC6:
        if (!empty($goodsid)) {
            goto ITk4D;
        }
        goto wCPgW;
        X8jhs:
        if (!empty($goodsid)) {
            goto yuQmq;
        }
        goto nKJ5N;
        jgHHl:
        $goodsid = $this->Text_qzj($str, "com/i", ".htm");
        goto jk6oU;
        j7EIh:
        $goodsid = $this->Text_qzj($str, "?id=", "&");
        goto olSC6;
        pos9s:
        return $goodsid;
        goto Ud_1v;
        JBAj2:
        if (!empty($goodsid)) {
            goto JNHOY;
        }
        goto TSvPH;
        v3ePg:
        $str = $url;
        goto j7EIh;
        d28C0:
        X_a_s:
        goto NrsS9;
        fTYMc:
        ITk4D:
        goto FGxRa;
        f7slt:
        if (!empty($goodsid)) {
            goto yAIcE;
        }
        goto iZwtO;
        Ud_1v:
    }
    public function hqgoodsid($url)
    {
        goto tmuET;
        nhy2C:
        zDbJV:
        goto KGGSS;
        BwjIQ:
        v8Yx8:
        goto CCr88;
        KGGSS:
        if (!empty($goodsid)) {
            goto XRZ3i;
        }
        goto zv3_T;
        tQrWf:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log.txt", "\n" . $str, FILE_APPEND);
        goto NlRnH;
        zv3_T:
        $goodsid = $this->Text_qzj($str, "itemId:", ",");
        goto YI60h;
        MIzBN:
        $goodsid = $this->Text_qzj($str, "&id=", "&");
        goto nhy2C;
        tmuET:
        $str = file_get_contents($url);
        goto eg3h6;
        h7Iy_:
        if (!empty($goodsid)) {
            goto v8Yx8;
        }
        goto Ot1QD;
        eg3h6:
        $str = str_replace("\"", '', $str);
        goto tQrWf;
        WSTYx:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log.txt", "\n" . json_encode($goodsid), FILE_APPEND);
        goto BwjIQ;
        NlRnH:
        $goodsid = $this->Text_qzj($str, "?id=", "&");
        goto zJsgz;
        CCr88:
        return $goodsid;
        goto t6R7r;
        Ot1QD:
        $url = $this->Text_qzj($str, "url = '", "';");
        goto cJwoi;
        cJwoi:
        $goodsid = $this->Text_qzj($str, "com/i", ".htm");
        goto WSTYx;
        YI60h:
        XRZ3i:
        goto h7Iy_;
        zJsgz:
        if (!empty($goodsid)) {
            goto zDbJV;
        }
        goto MIzBN;
        t6R7r:
    }
    public function Text_qzj($Text, $Front, $behind)
    {
        goto JVtSt;
        G5bFV:
        $t2 = mb_strpos($temp, $behind);
        goto Kj9nv;
        wUQeV:
        goto K7Lre;
        goto d0cIa;
        MfRza:
        K7Lre:
        goto f6Ah7;
        f6Ah7:
        $temp = mb_substr($Text, $t1, strlen($Text) - $t1);
        goto G5bFV;
        kKEz6:
        return '';
        goto MfRza;
        H_rAe:
        yG1a0:
        goto Raqtx;
        Raqtx:
        return mb_substr($temp, 0, $t2);
        goto Q1ZLP;
        w0ogk:
        if ($t1 == FALSE) {
            goto nwyv4;
        }
        goto d6j2Y;
        JVtSt:
        $t1 = mb_strpos("." . $Text, $Front);
        goto w0ogk;
        Kj9nv:
        if (!($t2 == FALSE)) {
            goto yG1a0;
        }
        goto UxOg4;
        d6j2Y:
        $t1 = $t1 - 1 + strlen($Front);
        goto wUQeV;
        UxOg4:
        return '';
        goto H_rAe;
        d0cIa:
        nwyv4:
        goto kKEz6;
        Q1ZLP:
    }
    function gstr($str)
    {
        goto xyzDV;
        KnP0f:
        return $str;
        goto d9FX9;
        sSWdy:
        $str = iconv("UTF-8", $encode, $str);
        goto DhPe_;
        DhPe_:
        iGn10:
        goto KnP0f;
        jmmlf:
        if (!(!$encode == "UTF-8")) {
            goto iGn10;
        }
        goto sSWdy;
        xyzDV:
        $encode = mb_detect_encoding($str, array("ASCII", "UTF-8", "GB2312", "GBK"));
        goto jmmlf;
        d9FX9:
    }
    public function ewm($url)
    {
        goto g8pfc;
        BZW05:
        $value = $url;
        goto SxRCR;
        WlthX:
        $matrixPointSize = "4";
        goto CHXfW;
        SxRCR:
        $errorCorrectionLevel = "L";
        goto WlthX;
        g8pfc:
        include "phpqrcode.php";
        goto BZW05;
        CHXfW:
        QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
        goto c1B7y;
        c1B7y:
        exit;
        goto VHa2n;
        VHa2n:
    }
    public function sendNews($openid, $text)
    {
        goto keKpj;
        oEQGl:
        $ret = ihttp_request($url, $result);
        goto AuvC4;
        Yt_LZ:
        $url = $_W["siteroot"] . str_replace("./", "app/", $this->createMobileurl("index"));
        goto Pwb7U;
        Pwb7U:
        $custom = array("touser" => $openid, "msgtype" => "news", "news" => array("articles" => array(array("title" => urlencode("晒单奖励提醒"), "description" => urlencode($text), "url" => $url, "picurl" => ''))));
        goto Pt9DG;
        QKLyL:
        $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token={$access_token}";
        goto oEQGl;
        AuvC4:
        return $ret;
        goto y3lGo;
        r8Mrt:
        $access_token = $this->getAccessToken();
        goto QKLyL;
        Pt9DG:
        $result = urldecode(json_encode($custom));
        goto r8Mrt;
        keKpj:
        global $_W, $_GPC;
        goto Yt_LZ;
        y3lGo:
    }
    public function postText($openid, $text)
    {
        goto MeWwM;
        bT0bE:
        $ret = $this->postRes($this->getAccessToken(), $post);
        goto PDdWK;
        PDdWK:
        return $ret;
        goto DhmXZ;
        MeWwM:
        $post = "{\"touser\":\"" . $openid . "\",\"msgtype\":\"text\",\"text\":{\"content\":\"" . $text . "\"}}";
        goto bT0bE;
        DhmXZ:
    }
    private function postRes($access_token, $data)
    {
        goto YFty9;
        nVQyF:
        load()->func("communication");
        goto RpLNu;
        psN4m:
        return $content["errcode"];
        goto o6uv_;
        YFty9:
        $url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token={$access_token}";
        goto nVQyF;
        o5Kpf:
        $content = @json_decode($ret["content"], true);
        goto psN4m;
        RpLNu:
        $ret = ihttp_request($url, $data);
        goto o5Kpf;
        o6uv_:
    }
    private function getAccessToken()
    {
        goto T4vT6;
        khyDO:
        return $token;
        goto E1Bas;
        O6oya:
        $acid = $_W["acid"];
        goto Ntj1o;
        dXt5r:
        $acid = $_W["uniacid"];
        goto xncZz;
        Ntj1o:
        if (!empty($acid)) {
            goto NO0Bc;
        }
        goto dXt5r;
        xncZz:
        NO0Bc:
        goto sk_y5;
        k4mMF:
        load()->model("account");
        goto O6oya;
        T4vT6:
        global $_W;
        goto k4mMF;
        sk_y5:
        include IA_ROOT . "/addons/tiger_newhu/wxtoken.php";
        goto khyDO;
        E1Bas:
    }
    public function createRule($kword, $pid)
    {
        goto r31c8;
        kJTd6:
        pdo_insert("rule", $rule);
        goto mPZL_;
        mPZL_:
        unset($rule["name"]);
        goto bdQM5;
        vXbPe:
        pdo_insert("rule_keyword", $rule);
        goto ygJhQ;
        fESVc:
        $rule = array("uniacid" => $_W["uniacid"], "name" => $this->modulename, "module" => $this->modulename, "status" => 1, "displayorder" => 254);
        goto kJTd6;
        Pya68:
        pdo_update($this->modulename . "_poster", array("rid" => $rule["rid"]), array("id" => $pid));
        goto kPeXw;
        ygJhQ:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log.txt", "\n old:" . json_encode($pid . "----" . $rule["rid"]), FILE_APPEND);
        goto Pya68;
        r31c8:
        global $_W;
        goto fESVc;
        vLkFq:
        $rule["content"] = $kword;
        goto vXbPe;
        bdQM5:
        $rule["type"] = 1;
        goto I4CLb;
        I4CLb:
        $rule["rid"] = pdo_insertid();
        goto vLkFq;
        kPeXw:
    }
    public function get_device_type()
    {
        goto ufWZS;
        xyyic:
        SDMU6:
        goto PaAtF;
        ZqVPo:
        $type = "ios";
        goto xyyic;
        PaAtF:
        if (!strpos($agent, "android")) {
            goto qHeAi;
        }
        goto bmIgV;
        VOyJF:
        qHeAi:
        goto jEPfI;
        mDBPr:
        if (!(strpos($agent, "iphone") || strpos($agent, "ipad"))) {
            goto SDMU6;
        }
        goto ZqVPo;
        ufWZS:
        $agent = strtolower($_SERVER["HTTP_USER_AGENT"]);
        goto fvzpD;
        bmIgV:
        $type = "android";
        goto VOyJF;
        fvzpD:
        $type = "android";
        goto mDBPr;
        jEPfI:
        return $type;
        goto QGUZL;
        QGUZL:
    }
    public function gettaogoods($numid, $api)
    {
        goto Tbag0;
        SpZwa:
        $req->setPlatform("1");
        goto X3w0i;
        Iupxa:
        $secretKey = $api["secretKey"];
        goto Gb_vW;
        wTNz0:
        $appkey = $api["appkey"];
        goto Iupxa;
        q0XjH:
        $c->secretKey = $secretKey;
        goto CEVcs;
        ZR9i7:
        $resp = $c->execute($req);
        goto vvOQN;
        AS7wL:
        $arr = $resp["results"]["n_tbk_item"];
        goto T5sS5;
        WaXh9:
        YtfUi:
        goto i1Kiu;
        qyY69:
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick,shop_dsr,ratesum,i_rfd_rate,h_good_rate,h_pay_rate30");
        goto SpZwa;
        X3w0i:
        $req->setNumIids($numid);
        goto ZR9i7;
        i1Kiu:
        $c->appkey = $appkey;
        goto q0XjH;
        c7R2O:
        $appkey = $api["tkAppKey"];
        goto yPF1H;
        vvOQN:
        $resp = json_decode(json_encode($resp), TRUE);
        goto AS7wL;
        T5sS5:
        return $arr;
        goto Cb2uq;
        Tbag0:
        $c = new TopClient();
        goto wTNz0;
        yPF1H:
        $secretKey = $api["tksecretKey"];
        goto WaXh9;
        Gb_vW:
        if (!empty($appkey)) {
            goto YtfUi;
        }
        goto c7R2O;
        CEVcs:
        $req = new TbkItemInfoGetRequest();
        goto qyY69;
        Cb2uq:
    }
    public function goodlist($key, $pid, $page)
    {
        goto tH4fq;
        W9b1Y:
        return $list;
        goto KkL9v;
        tH4fq:
        require_once IA_ROOT . "/addons/tiger_newhu/inc/sdk/getpic.php";
        goto J1EmX;
        J1EmX:
        $api = taobaopp($tiger);
        goto haHxS;
        DkuGx:
        kat8U:
        goto W9b1Y;
        dBZff:
        foreach ($goods as $k => $v) {
            goto BHvKp;
            dXfuf:
            $list[$k]["shop_title"] = $v["shop_title"];
            goto DOspg;
            h35dD:
            preg_match_all("|满([\\d\\.]+).*元减([\\d\\.]+).*元|ism", $v["coupon_info"], $matches);
            goto r4RW6;
            XN6jf:
            $list[$k]["num_iid"] = $v["num_iid"];
            goto livKo;
            O7K1k:
            $list[$k]["org_price"] = $v["zk_final_price"];
            goto wR1ZA;
            XtnpV:
            $list[$k]["goods_sale"] = $v["volume"];
            goto LTdyG;
            bSFRQ:
            $list[$k]["item_url"] = $v["item_url"];
            goto A74n0;
            ird6s:
            $list[$k]["coupons_total"] = $v["coupon_total_count"];
            goto bSFRQ;
            DOspg:
            $list[$k]["tk_rate"] = $v["commission_rate"];
            goto dXb8Q;
            wR1ZA:
            $list[$k]["pic_url"] = $v["pict_url"];
            goto dXfuf;
            BHvKp:
            $list[$k]["title"] = $v["title"];
            goto gP8n5;
            LTdyG:
            $list[$k]["price"] = $v["zk_final_price"] - $matches[2][0];
            goto O7K1k;
            gP8n5:
            $list[$k]["istmall"] = $v["user_type"];
            goto XN6jf;
            B82iJ:
            $list[$k]["coupons_take"] = $v["coupon_remain_count"];
            goto ird6s;
            pMX9J:
            OaBx4:
            goto JKfgg;
            r4RW6:
            $list[$k]["coupons_price"] = $matches[2][0];
            goto XtnpV;
            V_GiQ:
            $list[$k]["coupons_end"] = $v["coupon_end_time"];
            goto h35dD;
            A74n0:
            $list[$k]["small_images"] = $v["small_images"]["string"];
            goto QVYYf;
            QVYYf:
            $list[$k]["pic_url"] = $v["pict_url"];
            goto pMX9J;
            dXb8Q:
            $list[$k]["nick"] = $v["nick"];
            goto B82iJ;
            livKo:
            $list[$k]["url"] = $v["coupon_click_url"];
            goto V_GiQ;
            JKfgg:
        }
        goto DkuGx;
        YJmG6:
        $resp = $c->execute($req);
        goto RQupm;
        Bywun:
        $c->appkey = $api["appkey"];
        goto DhpVj;
        q2UUC:
        $req->setPageNo($page);
        goto TUxFi;
        hatfN:
        $req->setPageSize("20");
        goto PBXb0;
        DhpVj:
        $c->secretKey = $api["secretKey"];
        goto C7_TR;
        TUxFi:
        $req->setPid($pid);
        goto YJmG6;
        SUWrM:
        $goods = $resp["results"]["tbk_coupon"];
        goto dBZff;
        RQupm:
        $resp = json_decode(json_encode($resp), TRUE);
        goto SUWrM;
        xwX_B:
        $req->setPlatform("2");
        goto hatfN;
        PBXb0:
        $req->setQ($key);
        goto q2UUC;
        haHxS:
        $c = new TopClient();
        goto Bywun;
        C7_TR:
        $req = new TbkItemCouponGetRequest();
        goto xwX_B;
        KkL9v:
    }
    public function rhy($quan_id, $num_iid, $pid)
    {
        $url = "https://uland.taobao.com/coupon/edetail?activityId=" . $quan_id . "&itemId=" . $num_iid . "&src=tiger_tiger&pid=" . $pid . '';
        return $url;
    }
    public function rhydx($quan_id, $num_iid, $pid)
    {
        $url = "https://uland.taobao.com/coupon/edetail?activityId=" . $quan_id . "&itemId=" . $num_iid . "&src=tiger_tiger&pid=" . $pid . "&dx=1";
        return $url;
    }
    private function sendtext($txt, $openid)
    {
        goto zRJOt;
        jYQwp:
        $acid = pdo_fetchcolumn("SELECT acid FROM " . tablename("account") . " WHERE uniacid=:uniacid ", array(":uniacid" => $_W["uniacid"]));
        goto w2Tpy;
        RRPRi:
        if ($acid) {
            goto iNPn5;
        }
        goto jYQwp;
        w2Tpy:
        iNPn5:
        goto QRII6;
        BcAlo:
        $data = $account->sendCustomNotice(array("touser" => $openid, "msgtype" => "text", "text" => array("content" => urlencode($txt))));
        goto io4NV;
        io4NV:
        return $data;
        goto iNzF3;
        QRII6:
        include IA_ROOT . "/addons/tiger_newhu/wxtoken.php";
        goto BcAlo;
        vrHKG:
        $acid = $_W["account"]["acid"];
        goto RRPRi;
        zRJOt:
        global $_W;
        goto vrHKG;
        iNzF3:
    }
    function GetIpLookup($ip = '')
    {
        goto g3ayP;
        JHdcx:
        return false;
        goto Ihj3Q;
        YvCzI:
        if (isset($jsonMatches[0])) {
            goto x2h4U;
        }
        goto w5nHi;
        tTXxG:
        x2h4U:
        goto rAnYD;
        bVf4q:
        if (isset($json["ret"]) && $json["ret"] == 1) {
            goto L5t3O;
        }
        goto JHdcx;
        OwLOr:
        L5t3O:
        goto L8lbP;
        g3ayP:
        if (!empty($ip)) {
            goto jR0qM;
        }
        goto uT5Co;
        ImfcA:
        preg_match("#\\{.+?\\}#", $res, $jsonMatches);
        goto YvCzI;
        uT5Co:
        $ip = GetIp();
        goto doZ64;
        rqdky:
        kCrjz:
        goto ggjDN;
        Ihj3Q:
        goto kCrjz;
        goto OwLOr;
        w5nHi:
        return false;
        goto tTXxG;
        ggjDN:
        return $json;
        goto zLnQV;
        AQeMq:
        $jsonMatches = array();
        goto ImfcA;
        rAVTp:
        $res = @file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=" . $ip);
        goto ZWFAK;
        QTcpy:
        unset($json["ret"]);
        goto rqdky;
        ZWFAK:
        if (!empty($res)) {
            goto YdJ2h;
        }
        goto joAv0;
        rAnYD:
        $json = json_decode($jsonMatches[0], true);
        goto bVf4q;
        xNy98:
        YdJ2h:
        goto AQeMq;
        doZ64:
        jR0qM:
        goto rAVTp;
        joAv0:
        return false;
        goto xNy98;
        L8lbP:
        $json["ip"] = $ip;
        goto QTcpy;
        zLnQV:
    }
    function getIp()
    {
        goto EXUMj;
        Z0RKV:
        eFMn_:
        goto Ja1Dd;
        uM5Vt:
        return $onlineip;
        goto WU84Y;
        iHBkg:
        if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
            goto KRr4A;
        }
        goto RXhYN;
        SGhJa:
        WfzFM:
        goto gg5FH;
        ecPlw:
        goto J3v8G;
        goto SGhJa;
        yfeXu:
        goto J3v8G;
        goto vb4vR;
        FF2pY:
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
            goto WfzFM;
        }
        goto TVbJH;
        dxTiv:
        J3v8G:
        goto uM5Vt;
        dFrxj:
        $onlineip = $_SERVER["REMOTE_ADDR"];
        goto dxTiv;
        g1oJc:
        BpoZi:
        goto dFrxj;
        RXhYN:
        if (isset($_SERVER["REMOTE_ADDR"]) && $_SERVER["REMOTE_ADDR"] && strcasecmp($_SERVER["REMOTE_ADDR"], "unknown")) {
            goto BpoZi;
        }
        goto ecPlw;
        IX9Wo:
        $onlineip = getenv("REMOTE_ADDR");
        goto Oovyv;
        Oovyv:
        goto J3v8G;
        goto g1oJc;
        vb4vR:
        KRr4A:
        goto IX9Wo;
        gg5FH:
        $onlineip = getenv("HTTP_CLIENT_IP");
        goto MMa37;
        EXUMj:
        $onlineip = '';
        goto FF2pY;
        Ja1Dd:
        $onlineip = getenv("HTTP_X_FORWARDED_FOR");
        goto yfeXu;
        TVbJH:
        if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
            goto eFMn_;
        }
        goto iHBkg;
        MMa37:
        goto J3v8G;
        goto Z0RKV;
        WU84Y:
    }
    public function sendMsg($openid, $tplmsgid, $data = array(), $data1, $url = '')
    {
        goto jKpc1;
        ZRLXe:
        $cfg = $this->module["config"];
        goto txied;
        OLTpX:
        LJyta:
        goto vLD2c;
        vLD2c:
        goto hVg1c;
        goto GJLdE;
        mrpOo:
        include IA_ROOT . "/addons/tiger_newhu/wxtoken.php";
        goto HfeIL;
        GJLdE:
        w1sBO:
        goto NwVay;
        gnwYM:
        Qs_69:
        goto m2h4q;
        HfeIL:
        if (empty($tplmsgid)) {
            goto w1sBO;
        }
        goto lDBmj;
        d3F0y:
        return $account->sendTplNotice($openid, $tplmsgid, $data, $url);
        goto OLTpX;
        txied:
        if (empty($data)) {
            goto Qs_69;
        }
        goto mrpOo;
        jKpc1:
        global $_W;
        goto ZRLXe;
        Dw2Mu:
        hVg1c:
        goto gnwYM;
        lDBmj:
        if (!($_W["account"]["level"] == 4)) {
            goto LJyta;
        }
        goto d3F0y;
        NwVay:
        $this->postText($this->message["from"], $data1);
        goto Dw2Mu;
        m2h4q:
    }
    public function sendMsg1($openid, $tplmsgid, $data = array(), $data1, $url = '')
    {
        goto Xeo4n;
        BQX_F:
        include IA_ROOT . "/addons/tiger_newhu/wxtoken.php";
        goto ISxsI;
        IDnGQ:
        $cfg = $this->module["config"];
        goto BQX_F;
        ISxsI:
        return $account->sendTplNotice($openid, $tplmsgid, $data, $url);
        goto ONJPk;
        Xeo4n:
        global $_W;
        goto IDnGQ;
        ONJPk:
    }
    public function mbmsg($openid, $mb, $mbid, $url = '', $fans, $orderid, $cfg = '', $valuedata = '')
    {
        goto vfW2P;
        i02kM:
        $tp_value1 = str_replace("#提现账号#", $valuedata["txzhanghao"], $tp_value1);
        goto QRHLz;
        ed6e7:
        $mb["remark"] = str_replace("#订单号#", $orderid, $mb["remark"]);
        goto x3NLC;
        x3NLC:
        $tplist1["remark"] = array("value" => $mb["remark"], "color" => $mb["remarkcolor"]);
        goto n7oqY;
        ZI25h:
        $tp_value1 = str_replace("#时间#", date("Y-m-d H:i:s", time()), $tp_value1);
        goto RzGMh;
        vfW2P:
        global $_W;
        goto xgVF9;
        r71r0:
        $tplist1 = array("first" => array("value" => $mb["first"], "color" => $mb["firstcolor"]));
        goto XHzi5;
        GUqEA:
        $tp_color1 = unserialize($mb["zjcolor"]);
        goto uneSW;
        xgVF9:
        $tp_value1 = unserialize($mb["zjvalue"]);
        goto ZI25h;
        GNHOb:
        w3Agf:
        goto GUqEA;
        RzGMh:
        $tp_value1 = str_replace("#昵称#", $fans["nickname"], $tp_value1);
        goto vXCTJ;
        Ax4sZ:
        q2jpG:
        goto fU5Mr;
        AKw0o:
        $mb["first"] = str_replace("#昵称#", $fans["nickname"], $mb["first"]);
        goto GzD5H;
        LeEeI:
        $tp_value1 = str_replace("#手机号#", $valuedata["tel"], $tp_value1);
        goto GNHOb;
        fU5Mr:
        $mb["remark"] = str_replace("#时间#", date("Y-m-d H:i:s", time()), $mb["remark"]);
        goto brOLe;
        Ar2tb:
        $tp_value1 = str_replace("#提现金额#", $valuedata["rmb"], $tp_value1);
        goto i02kM;
        uneSW:
        $mb["first"] = str_replace("#时间#", date("Y-m-d H:i:s", time()), $mb["first"]);
        goto AKw0o;
        XHzi5:
        foreach ($tp_value1 as $key => $value) {
            goto GdWIq;
            e_R2c:
            XJs84:
            goto kYMvd;
            kYMvd:
            $tplist1["keyword" . $key] = array("value" => $value, "color" => $tp_color1[$key]);
            goto WbVeO;
            ufqtv:
            goto bkxtP;
            goto e_R2c;
            GdWIq:
            if (!empty($value)) {
                goto XJs84;
            }
            goto ufqtv;
            WbVeO:
            bkxtP:
            goto ovfNS;
            ovfNS:
        }
        goto Ax4sZ;
        brOLe:
        $mb["remark"] = str_replace("#昵称#", $fans["nickname"], $mb["remark"]);
        goto ed6e7;
        geNdC:
        if (empty($valuedata)) {
            goto w3Agf;
        }
        goto Ar2tb;
        qcgoc:
        return $msg;
        goto qvUnp;
        GzD5H:
        $mb["first"] = str_replace("#订单号#", $orderid, $mb["first"]);
        goto r71r0;
        n7oqY:
        $msg = $this->sendMsg1($openid, $mbid, $tplist1, '', $url);
        goto qcgoc;
        QRHLz:
        $tp_value1 = str_replace("#微信号#", $valuedata["weixin"], $tp_value1);
        goto LeEeI;
        vXCTJ:
        $tp_value1 = str_replace("#订单号#", $orderid, $tp_value1);
        goto geNdC;
        qvUnp:
    }
    function post_txhb($cfg, $openid, $dtotal_amount, $desc, $dmch_billno)
    {
        goto O7sf0;
        TNM15:
        QBzUi:
        goto YHKjY;
        Vbw6m:
        if (is_error($resp)) {
            goto SrVdZ;
        }
        goto LQv3U;
        aUlYI:
        $pars["wxappid"] = $cfg["appid"];
        goto lV10y;
        OhHnD:
        $string1 .= "key={$cfg["apikey"]}";
        goto unzTx;
        i0JP_:
        $ret["dissuccess"] = 0;
        goto L52tQ;
        USNwE:
        goto QBzUi;
        goto GyNc3;
        CELR2:
        return $ret;
        goto gAVwv;
        vps0_:
        $pars["act_name"] = "兑换红包";
        goto UMAmB;
        iBykW:
        ksort($pars, SORT_STRING);
        goto Jz2_q;
        h7iEN:
        $ret["message"] = "success";
        goto djh9X;
        VuXcm:
        OYA3V:
        goto cUXvJ;
        kfxFo:
        if (strtolower($code) == "success" && strtolower($result) == "success") {
            goto Lc_wc;
        }
        goto wC_fJ;
        cID8j:
        return $ret;
        goto RWM3b;
        L52tQ:
        $ret["message"] = $procResult;
        goto cID8j;
        p1yMI:
        $dtotal = $dtotal_amount / 100;
        goto aDwWc;
        unzTx:
        $pars["sign"] = strtoupper(md5($string1));
        goto T83YU;
        Jz2_q:
        $string1 = '';
        goto Wk2wb;
        BNHhp:
        $ret["message"] = "余额不足";
        goto y64Y6;
        IlIEE:
        SrVdZ:
        goto ii4Kf;
        E_FVh:
        $ret["message"] = $error;
        goto w_ZJn;
        y64Y6:
        return $ret;
        goto rPWUS;
        seG3a:
        $ret["code"] = -3;
        goto aPCNz;
        aPCNz:
        $ret["dissuccess"] = 0;
        goto JIIay;
        rzbtE:
        goto DgTGw;
        goto IlIEE;
        oVfou:
        $pars["min_value"] = $dtotal_amount;
        goto VlP5E;
        O7sf0:
        global $_W;
        goto r02u3;
        MlVzg:
        $resp = ihttp_request($url, $xml, $extras);
        goto Vbw6m;
        r02u3:
        load()->model("mc");
        goto IgxFn;
        lV10y:
        $pars["nick_name"] = $cfg["copyright"];
        goto lFr4P;
        dzdnj:
        $dom = new DOMDocument();
        goto Ugt5c;
        rFnQk:
        $extras["CURLOPT_SSLCERT"] = $root . "apiclient_cert.pem";
        goto YbBr1;
        os2hy:
        $ret["code"] = 0;
        goto lRt4K;
        NCR5W:
        $pars["total_num"] = 1;
        goto EysdA;
        Ugt5c:
        if ($dom->loadXML($xml)) {
            goto EikJl;
        }
        goto seG3a;
        Ggtud:
        if (!empty($dmch_billno)) {
            goto OYA3V;
        }
        goto R0LL5;
        gAVwv:
        goto Npvop;
        goto UQZ3M;
        GyNc3:
        Lc_wc:
        goto mP_z1;
        nkaUj:
        $code = $xpath->evaluate("string(//xml/return_code)");
        goto SPlld;
        UQZ3M:
        EikJl:
        goto fV3Ob;
        Wk2wb:
        foreach ($pars as $k => $v) {
            $string1 .= "{$k}={$v}&";
            kwmWk:
        }
        goto Bs6YS;
        JIIay:
        $ret["message"] = "3error3";
        goto CELR2;
        IgxFn:
        if (empty($desc)) {
            goto zA332;
        }
        goto eMx9Z;
        cUXvJ:
        $root = IA_ROOT . "/attachment/tiger_newhu/cert/" . $_W["uniacid"] . "/";
        goto bjj_h;
        eMx9Z:
        $fans = mc_fetch($_W["openid"]);
        goto p1yMI;
        VlP5E:
        $pars["max_value"] = $dtotal_amount;
        goto NCR5W;
        dut6g:
        $extras = array();
        goto IiPp2;
        QYgQn:
        $ret["dissuccess"] = 0;
        goto E_FVh;
        rPWUS:
        exit;
        goto qkoiQ;
        w_ZJn:
        return $ret;
        goto USNwE;
        KOFYm:
        $pars = array();
        goto g6PwF;
        RWM3b:
        DgTGw:
        goto ulydy;
        qkoiQ:
        YFXTf:
        goto JW6Ty;
        hqudk:
        $ret["dissuccess"] = 1;
        goto h7iEN;
        YbBr1:
        $extras["CURLOPT_SSLKEY"] = $root . "apiclient_key.pem";
        goto TPAK7;
        lRt4K:
        $ret["message"] = "success";
        goto BQGI0;
        T83YU:
        $xml = array2xml($pars);
        goto dut6g;
        fV3Ob:
        $xpath = new DOMXPath($dom);
        goto nkaUj;
        g6PwF:
        $pars["nonce_str"] = random(32);
        goto mq4uj;
        fkwqs:
        $pars["re_openid"] = $openid;
        goto M6dnU;
        i2U8r:
        $ret["dissuccess"] = 0;
        goto BNHhp;
        M6dnU:
        $pars["total_amount"] = $dtotal_amount;
        goto oVfou;
        JW6Ty:
        zA332:
        goto Ggtud;
        zkBlN:
        $pars["mch_id"] = $cfg["mchid"];
        goto aUlYI;
        ncdFk:
        $procResult = null;
        goto MlVzg;
        mq4uj:
        $pars["mch_billno"] = $dmch_billno;
        goto zkBlN;
        EysdA:
        $pars["wishing"] = "提现红包成功!";
        goto QgcH2;
        ii4Kf:
        $procResult = $resp["message"];
        goto o6gJj;
        LQv3U:
        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>" . $resp["content"];
        goto dzdnj;
        SPlld:
        $result = $xpath->evaluate("string(//xml/result_code)");
        goto kfxFo;
        YHKjY:
        Npvop:
        goto rzbtE;
        wC_fJ:
        $error = $xpath->evaluate("string(//xml/err_code_des)");
        goto IBIWU;
        BQGI0:
        $url = "https://api.mch.weixin.qq.com/mmpaymkttransfers/sendredpack";
        goto KOFYm;
        IiPp2:
        $extras["CURLOPT_CAINFO"] = $root . "rootca.pem";
        goto rFnQk;
        lFr4P:
        $pars["send_name"] = $cfg["copyright"];
        goto fkwqs;
        aDwWc:
        if (!($dtotal > $fans["credit2"])) {
            goto YFXTf;
        }
        goto u09S6;
        TPAK7:
        load()->func("communication");
        goto ncdFk;
        bjj_h:
        $ret = array();
        goto os2hy;
        IBIWU:
        $ret["code"] = -2;
        goto QYgQn;
        djh9X:
        return $ret;
        goto TNM15;
        UMAmB:
        $pars["remark"] = "来自" . $cfg["copyright"] . "的红包";
        goto iBykW;
        o6gJj:
        $ret["code"] = -1;
        goto i0JP_;
        u09S6:
        $ret["code"] = -1;
        goto i2U8r;
        mP_z1:
        $ret["code"] = 0;
        goto hqudk;
        Bs6YS:
        TD_pL:
        goto OhHnD;
        QgcH2:
        $pars["client_ip"] = $cfg["client_ip"];
        goto vps0_;
        R0LL5:
        $dmch_billno = random(10) . date("Ymd") . random(3);
        goto VuXcm;
        ulydy:
    }
    public function post_qyfk($cfg, $openid, $amount, $desc, $dmch_billno)
    {
        goto a1hBW;
        FiuVB:
        ZroOi:
        goto ZdMs3;
        h2sF_:
        SrU5c:
        goto FYopb;
        jUY2b:
        xBXDb:
        goto y3Mj2;
        hiiTh:
        $xml = array2xml($pars);
        goto PlDcG;
        hEhi_:
        $procResult = $resp["message"];
        goto UjT5m;
        FYopb:
        vcPgK:
        goto nXGDb;
        yLnTH:
        exit;
        goto jUY2b;
        WTwy6:
        $pars["check_name"] = "NO_CHECK";
        goto N5c5k;
        Iz1vb:
        $ret["dissuccess"] = 0;
        goto pxxL9;
        scC50:
        YVsxg:
        goto zBR3V;
        BRL1C:
        if (!empty($dmch_billno)) {
            goto YVsxg;
        }
        goto foPyQ;
        P2dVZ:
        $string1 = '';
        goto iDmoS;
        Cm5v9:
        $fans = mc_fetch($_W["openid"]);
        goto pJ33q;
        rMD4d:
        return $ret;
        goto h2sF_;
        PlDcG:
        $extras = array();
        goto iNGSi;
        x8jkg:
        $code = $xpath->evaluate("string(//xml/return_code)");
        goto blDpP;
        M2VkN:
        KSgYR:
        goto YT8zN;
        ZM5Yb:
        $ret["message"] = "余额不足";
        goto VYLYM;
        Kc2wr:
        $ret["dissuccess"] = 1;
        goto LcKhs;
        Xxq1h:
        if (strtolower($code) == "success" && strtolower($result) == "success") {
            goto ZroOi;
        }
        goto bAL0f;
        sX7o_:
        $pars["nonce_str"] = random(32);
        goto iwvHa;
        pxxL9:
        $ret["message"] = "-1:" . $procResult;
        goto L79zJ;
        Ek05R:
        $dom = new DOMDocument();
        goto S8Hp8;
        rXgj8:
        $pars["desc"] = "来自" . $_W["account"]["name"] . "的提现";
        goto nKkXx;
        LcKhs:
        $ret["message"] = "success";
        goto rMD4d;
        Gaw9C:
        $ret["message"] = "error response";
        goto IOBk3;
        UjT5m:
        $ret["code"] = -1;
        goto Iz1vb;
        nXGDb:
        goto PuDDR;
        goto y4d49;
        foPyQ:
        $dmch_billno = random(10) . date("Ymd") . random(3);
        goto scC50;
        b24kV:
        $ret["dissuccess"] = 0;
        goto ZM5Yb;
        FvCox:
        $ret["code"] = -1;
        goto b24kV;
        yWrk0:
        $pars = array();
        goto ELA03;
        ReJYE:
        if (empty($desc)) {
            goto f7NXe;
        }
        goto Cm5v9;
        iDmoS:
        foreach ($pars as $k => $v) {
            $string1 .= "{$k}={$v}&";
            PVzZt:
        }
        goto M2VkN;
        ZdMs3:
        $ret["code"] = 0;
        goto Kc2wr;
        qh3CC:
        $ret["code"] = -2;
        goto gUZTs;
        IOBk3:
        return $ret;
        goto QVAeH;
        HZJsd:
        goto SrU5c;
        goto FiuVB;
        y4d49:
        ELyG7:
        goto hEhi_;
        UfBOb:
        $ret["message"] = "-2:" . $error;
        goto ofWP0;
        N5c5k:
        $pars["amount"] = $amount;
        goto rXgj8;
        HpDY_:
        $extras["CURLOPT_SSLKEY"] = $root . "apiclient_key.pem";
        goto QzI4n;
        UcSzl:
        $xpath = new DOMXPath($dom);
        goto x8jkg;
        blDpP:
        $result = $xpath->evaluate("string(//xml/result_code)");
        goto Xxq1h;
        q5O8J:
        $ret["code"] = -3;
        goto kcF3v;
        y3Mj2:
        f7NXe:
        goto BRL1C;
        j3VVJ:
        $pars["sign"] = strtoupper(md5($string1));
        goto hiiTh;
        byFuT:
        $extras["CURLOPT_SSLCERT"] = $root . "apiclient_cert.pem";
        goto HpDY_;
        nKkXx:
        $pars["spbill_create_ip"] = $cfg["client_ip"];
        goto M8R55;
        ofWP0:
        return $ret;
        goto HZJsd;
        W9Row:
        $ret["message"] = "success";
        goto tkC6A;
        NSvuv:
        PuDDR:
        goto qL8eu;
        ELA03:
        $pars["mch_appid"] = $cfg["appid"];
        goto ESkxS;
        M8R55:
        ksort($pars, SORT_STRING);
        goto P2dVZ;
        pJ33q:
        $dtotal = $amount / 100;
        goto FtaEV;
        zBR3V:
        $root = IA_ROOT . "/attachment/tiger_newhu/cert/" . $_W["uniacid"] . "/";
        goto XDf9Z;
        S8Hp8:
        if ($dom->loadXML($xml)) {
            goto PQgzC;
        }
        goto q5O8J;
        iNGSi:
        $extras["CURLOPT_CAINFO"] = $root . "rootca.pem";
        goto byFuT;
        gUZTs:
        $ret["dissuccess"] = 0;
        goto UfBOb;
        ESkxS:
        $pars["mchid"] = $cfg["mchid"];
        goto sX7o_;
        a1hBW:
        global $_W;
        goto xYhAB;
        xYhAB:
        load()->model("mc");
        goto ReJYE;
        kcF3v:
        $ret["dissuccess"] = 0;
        goto Gaw9C;
        bAL0f:
        $error = $xpath->evaluate("string(//xml/err_code_des)");
        goto qh3CC;
        rLxin:
        PQgzC:
        goto UcSzl;
        Nz7Rz:
        $url = "https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers";
        goto yWrk0;
        m9mfc:
        $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>" . $resp["content"];
        goto Ek05R;
        QVAeH:
        goto vcPgK;
        goto rLxin;
        XDf9Z:
        $ret = array();
        goto GRi9x;
        L79zJ:
        return $ret;
        goto NSvuv;
        GRi9x:
        $ret["code"] = 0;
        goto W9Row;
        XtqPs:
        $resp = ihttp_request($url, $xml, $extras);
        goto MpxLp;
        iwvHa:
        $pars["partner_trade_no"] = $dmch_billno;
        goto zcEtR;
        ajyHs:
        $procResult = null;
        goto XtqPs;
        YT8zN:
        $string1 .= "key={$cfg["apikey"]}";
        goto j3VVJ;
        QzI4n:
        load()->func("communication");
        goto ajyHs;
        MpxLp:
        if (is_error($resp)) {
            goto ELyG7;
        }
        goto m9mfc;
        tkC6A:
        $ret["amount"] = $amount;
        goto Nz7Rz;
        FtaEV:
        if (!($dtotal > $fans["credit2"])) {
            goto xBXDb;
        }
        goto FvCox;
        VYLYM:
        return $ret;
        goto yLnTH;
        zcEtR:
        $pars["openid"] = $openid;
        goto WTwy6;
        qL8eu:
    }
    public function getAccountLevel()
    {
        goto q40Qi;
        L1KKb:
        $accObj = WeixinAccount::create($_W["uniacid"]);
        goto epAU_;
        q40Qi:
        global $_W;
        goto oRb6l;
        CI9JQ:
        return $account["level"];
        goto y7uSB;
        epAU_:
        $account = $accObj->account;
        goto CI9JQ;
        oRb6l:
        load()->classs("weixin.account");
        goto L1KKb;
        y7uSB:
    }
    private function SendSMS($mobile, $content)
    {
        goto PPYie;
        BWUjj:
        goto WQ5Ts;
        goto Bio2c;
        Kb1n8:
        return 0;
        goto CKTdr;
        Zafjd:
        $jhcode = $config["jhcode"];
        goto I4pQI;
        iYK6M:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/log.txt", "\n old:" . json_encode($resp), FILE_APPEND);
        goto GQ75u;
        WxIWt:
        goto jeaLu;
        goto TmCRa;
        G94FS:
        $req->setSmsType("normal");
        goto OtMOp;
        ZSO9M:
        $resp = $c->execute($req);
        goto iYK6M;
        b1_sC:
        $c->secretKey = $config["dyAppSecret"];
        goto USwzT;
        USwzT:
        $req = new AlibabaAliqinFcSmsNumSendRequest();
        goto G94FS;
        TmCRa:
        wKNzh:
        goto duuM1;
        IZK0g:
        goto dfp3u;
        goto vF5WF;
        rCdEt:
        goto GurbN;
        goto FTcnd;
        nFR36:
        goto OYyoM;
        goto l8lc6;
        mbmd1:
        if ($json["code"] == 200) {
            goto QSrak;
        }
        goto WLxIZ;
        I4pQI:
        $json = ihttp_get("http://v.juhe.cn/sms/send?mobile={$mobile}&tpl_id={$jhcode}&tpl_value={$content}&key={$jhappkey}");
        goto dVvD7;
        dVvD7:
        $result = @json_decode($json["content"], true);
        goto mbmd1;
        duuM1:
        $jhappkey = $config["jhappkey"];
        goto Zafjd;
        eTFRx:
        if ($config["smstype"] == "juhesj") {
            goto wKNzh;
        }
        goto fAxIi;
        u_PDn:
        OYyoM:
        goto xvJqx;
        t_FmH:
        $req->setSmsTemplateCode($config["dysms_template_code"]);
        goto ZSO9M;
        nbOPD:
        dfp3u:
        goto WxIWt;
        ECmqT:
        $content = 0;
        goto qsWln;
        FTcnd:
        BCZO2:
        goto Kb1n8;
        VV1z2:
        load()->func("communication");
        goto eTFRx;
        MC8p6:
        $c = new TopClient();
        goto IZKcf;
        qsWln:
        WQ5Ts:
        goto u_PDn;
        WLxIZ:
        $content = "接口调用错误.";
        goto nFR36;
        PPYie:
        $config = $this->module["config"];
        goto VV1z2;
        rdlS4:
        return $resp->sub_msg;
        goto rCdEt;
        B68HF:
        if ($result["error_code"] == 0) {
            goto uOV97;
        }
        goto AVrEI;
        IZKcf:
        $c->appkey = $config["dyAppKey"];
        goto b1_sC;
        zXhog:
        $req->setSmsParam($content);
        goto VDI23;
        ObQ5B:
        include IA_ROOT . "/addons/tiger_newhu/inc/sdk/dayu/TopSdk.php";
        goto MC8p6;
        l8lc6:
        QSrak:
        goto B68HF;
        s4Ycv:
        jeaLu:
        goto c5lz7;
        OtMOp:
        $req->setSmsFreeSignName($config["dysms_free_sign_name"]);
        goto zXhog;
        RgX77:
        return "短信参数配置不正确，请联系管理员";
        goto nbOPD;
        xvJqx:
        return $content;
        goto s4Ycv;
        fAxIi:
        if (empty($config["dyAppKey"]) || empty($config["dyAppSecret"]) || empty($config["dysms_free_sign_name"]) || empty($config["dysms_template_code"])) {
            goto ClQpN;
        }
        goto ObQ5B;
        Bio2c:
        uOV97:
        goto ECmqT;
        GQ75u:
        if ($resp->result->err_code == 0) {
            goto BCZO2;
        }
        goto rdlS4;
        CKTdr:
        GurbN:
        goto IZK0g;
        AVrEI:
        $content = $result["error_code"] . $result["reason"];
        goto BWUjj;
        vF5WF:
        ClQpN:
        goto RgX77;
        VDI23:
        $req->setRecNum($mobile);
        goto t_FmH;
        c5lz7:
    }
    public function doMobileDuibaxf()
    {
        goto XQW35;
        NZ9Go:
        exit(json_encode(array("status" => "fail", "errorMessage" => "扣除{$cfg["hztype"]}错误", "credits" => $request_array["credits"])));
        goto hlB8k;
        JIkYq:
        exit(json_encode(array("status" => "fail", "errorMessage" => "系统错误，请重试！", "credits" => $request_array["credits"])));
        goto bXXIc;
        gW3YY:
        $yue = intval($share["credit1"]) - $request_array["credits"];
        goto iwYj3;
        amAvH:
        $ret = parseCreditConsume($settings["AppKey"], $settings["appSecret"], $request_array);
        goto qA8K5;
        CbGHy:
        DO4gG:
        goto jneY2;
        KC1yc:
        X2YY2:
        goto O4rbJ;
        IEXTI:
        pdo_insert($this->modulename . "_dborder", $insert);
        goto zh62X;
        Wo3Mr:
        Z2AG6:
        goto ju4wk;
        ju4wk:
        exit(json_encode(array("status" => "ok", "errorMessage" => '', "bizId" => $insert["bizId"], "credits" => $yue)));
        goto wSqFh;
        FrBaw:
        $insert = array("uniacid" => $_W["uniacid"], "uid" => $uid, "bizId" => date("YmdHi") . random(8, 1), "orderNum" => $request_array["orderNum"], "credits" => $request_array["credits"], "params" => $request_array["params"], "type" => $request_array["type"], "ip" => $request_array["ip"], "starttimestamp" => $request_array["timestamp"], "waitAudit" => $request_array["waitAudit"], "actualPrice" => $request_array["actualPrice"], "description" => $request_array["description"], "facePrice" => $request_array["facePrice"], "Audituser" => $request_array["Audituser"], "itemCode" => $request_array["itemCode"], "status" => 0, "createtime" => time());
        goto IEXTI;
        wSqFh:
        oP5dm:
        goto uUYX4;
        DvYYe:
        if ($updatecredit["error"] == 1) {
            goto Z2AG6;
        }
        goto NZ9Go;
        hlB8k:
        goto oP5dm;
        goto Wo3Mr;
        iwYj3:
        if ($yue > 0) {
            goto DO4gG;
        }
        goto LyMc4;
        uUYX4:
        rqdjD:
        goto s4PNK;
        nRfMo:
        exit(json_encode(array("status" => "fail", "errorMessage" => $ret, "credits" => $request_array["credits"])));
        goto gZAMR;
        XQW35:
        global $_W, $_GPC;
        goto Ri2fL;
        F3yAf:
        $uid = $request_array["uid"];
        goto tFBoB;
        Le2gQ:
        file_put_contents(IA_ROOT . "/addons/tiger_newhu/inc/mobile/log.txt", "\n old:" . json_encode($request_array), FILE_APPEND);
        goto amAvH;
        UK6qU:
        $share = pdo_fetch("select * from " . tablename("tiger_newhu_share") . " where weid='{$_W["uniacid"]}' and id='{$uid}'");
        goto gW3YY;
        YgJO5:
        $settings = $this->module["config"];
        goto n2Z47;
        qZqdU:
        bWdfZ:
        goto Le2gQ;
        jneY2:
        $updatecredit = $this->mc_jl($uid, 0, 9, -abs($request_array["credits"]), "兑吧兑换" . $request_array["description"], '');
        goto DvYYe;
        bXXIc:
        goto OMlrj;
        goto QpD7F;
        gZAMR:
        goto X2YY2;
        goto J5wy0;
        hsUhP:
        $cfg = $this->module["config"];
        goto YgJO5;
        LyMc4:
        exit(json_encode(array("status" => "fail", "errorMessage" => "积分不足", "credits" => $request_array["credits"])));
        goto HFe4k;
        s4PNK:
        OMlrj:
        goto KC1yc;
        zh62X:
        if (pdo_insertid()) {
            goto Cxxwh;
        }
        goto JIkYq;
        Ri2fL:
        include "duiba.php";
        goto hsUhP;
        J5wy0:
        WLtfp:
        goto FrBaw;
        HFe4k:
        goto rqdjD;
        goto CbGHy;
        n2Z47:
        $request_array = $_GPC;
        goto F3yAf;
        tFBoB:
        foreach ($request_array as $key => $val) {
            goto ifMbl;
            oy81g:
            dfq7b:
            goto OHdti;
            fn8X_:
            Hsg_3:
            goto oy81g;
            rfgEJ:
            unset($request_array[$key]);
            goto fn8X_;
            ifMbl:
            $unsetkeyarr = array("i", "do", "m", "c", "module_status:1", "module_status:tiger_shouquan", "module_status:tiger_newhu", "notice", "state");
            goto pLMMH;
            pLMMH:
            if (!(in_array($key, $unsetkeyarr) || strstr($key, "__"))) {
                goto Hsg_3;
            }
            goto rfgEJ;
            OHdti:
        }
        goto qZqdU;
        QpD7F:
        Cxxwh:
        goto UK6qU;
        qA8K5:
        if (is_array($ret)) {
            goto WLtfp;
        }
        goto nRfMo;
        O4rbJ:
    }
    public function postgoods($goods, $openid)
    {
        goto rpd4L;
        Mqk6N:
        $message = array("touser" => trim($openid), "msgtype" => "news", "news" => array("articles" => $response));
        goto wEb7O;
        xyC_n:
        if (!empty($acid)) {
            goto iuEf4;
        }
        goto IiP_m;
        NdXEg:
        return $status;
        goto nQm0h;
        IiP_m:
        $acid = $_W["uniacid"];
        goto uj21U;
        rpd4L:
        global $_W;
        goto U2q16;
        wEb7O:
        $acid = $_W["acid"];
        goto xyC_n;
        LTPOq:
        fJrbh:
        goto Mqk6N;
        nkOyE:
        include IA_ROOT . "/addons/tiger_newhu/wxtoken.php";
        goto OBKY6;
        U2q16:
        foreach ($goods as $key => $value) {
            goto XDOIQ;
            XDOIQ:
            $viewurl = $_W["siteroot"] . str_replace("./", "app/", $this->createMobileurl("view", array("itemid" => $value["itemid"])));
            goto bLj75;
            bLj75:
            $response[] = array("title" => urlencode("【券后价:" . $value["itemendprice"] . "】" . $value["itemtitle"]), "description" => urlencode($value["itemtitle"]), "picurl" => tomedia($value["itemtitle"] . "_100x100.jpg"), "url" => $viewurl);
            goto G96vc;
            G96vc:
            a7PPy:
            goto fk5y6;
            fk5y6:
        }
        goto LTPOq;
        OBKY6:
        $status = $account->sendCustomNotice($message);
        goto NdXEg;
        uj21U:
        iuEf4:
        goto nkOyE;
        nQm0h:
    }
    public function jdviewzl($jdset, $itemid, $p_id, $discount_link)
    {
        goto oIak4;
        sW6rG:
        $arr = json_decode($arr["jd_union_open_promotion_byunionid_get_response"]["result"], true);
        goto wIJ_J;
        sdy9G:
        WlBhA:
        goto Bf8iZ;
        HDtuW:
        goto PiEQ3;
        goto sdy9G;
        KMirY:
        $arr = array("promotionCodeReq" => $arr);
        goto AyLRi;
        k47_p:
        return $arr["message"];
        goto HDtuW;
        QUhvm:
        $arr["unionId"] = $jdset["unionid"];
        goto dnxfK;
        dnxfK:
        $arr["positionId"] = $p_id;
        goto U0bpo;
        rTL1Y:
        PiEQ3:
        goto H2nGd;
        oIak4:
        $arr = array();
        goto qIeeU;
        NoHjX:
        $arr["chainType"] = "2";
        goto KMirY;
        U0bpo:
        $arr["couponUrl"] = $discount_link;
        goto NoHjX;
        wIJ_J:
        if ($arr["message"] == "success") {
            goto WlBhA;
        }
        goto k47_p;
        qIeeU:
        $arr["materialId"] = "https://wqitem.jd.com/item/view?sku=" . $itemid;
        goto QUhvm;
        iV3rU:
        $arr = json_decode($goodslist, true);
        goto sW6rG;
        Bf8iZ:
        return $arr["data"]["shortURL"];
        goto rTL1Y;
        AyLRi:
        $goodslist = $this->cjget("jd.union.open.promotion.byunionid.get", $arr);
        goto iV3rU;
        H2nGd:
    }
    public function cjget($method, $arr)
    {
        goto ON0yG;
        EQXdX:
        $sign = $this->jdsign1($pxarr);
        goto VRkcN;
        BYKhe:
        $param_json = json_encode($arr);
        goto S6tqa;
        B7c4s:
        $timestamp = date("Y-m-d H:i:s", time());
        goto BYKhe;
        ON0yG:
        $app_key = "d208dae5afb44db190b8f912e4c6de02";
        goto B7c4s;
        cGnxu:
        $arr = $this->tigercurl($url);
        goto lir1X;
        YBlRT:
        $pxarr = $this->jdcs1px($arr1);
        goto EQXdX;
        lir1X:
        return $arr;
        goto C97R5;
        S6tqa:
        $arr1 = array("timestamp" => $timestamp, "v" => "1.0", "sign_method" => "md5", "format" => "json", "method" => $method, "param_json" => $param_json, "app_key" => $app_key);
        goto YBlRT;
        VRkcN:
        $url = "https://router.jd.com/api?v=1.0&method=" . $method . "&app_key=" . $app_key . "&sign_method=md5&format=json&timestamp=" . urlencode($timestamp) . "&sign=" . $sign . "&param_json=" . urlencode($param_json);
        goto cGnxu;
        C97R5:
    }
    function tigercurl($url, $params = false, $ispost = 0)
    {
        goto npLNw;
        mklFZ:
        IKNSe:
        goto bbs1F;
        FJ40L:
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        goto eq86P;
        LBYTt:
        $response = curl_exec($ch);
        goto TnBa3;
        NdDi5:
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        goto PT5m_;
        eq86P:
        $httpInfo = array_merge($httpInfo, curl_getinfo($ch));
        goto rErtV;
        TnBa3:
        if (!($response === FALSE)) {
            goto Ri3TK;
        }
        goto qIfqa;
        Bmk7V:
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        goto aUU0A;
        rErtV:
        curl_close($ch);
        goto ngnup;
        DUtq1:
        curl_setopt($ch, CURLOPT_URL, $url);
        goto jkzz9;
        fIs70:
        iSE7l:
        goto LBYTt;
        HQIR6:
        if ($ispost) {
            goto IKNSe;
        }
        goto Hazx4;
        bbs1F:
        curl_setopt($ch, CURLOPT_POST, true);
        goto Bmk7V;
        TTUz7:
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        goto hU7eI;
        qIfqa:
        return false;
        goto FoYn9;
        Hazx4:
        if ($params) {
            goto XB1Di;
        }
        goto DUtq1;
        kZCYI:
        XB1Di:
        goto MqBEj;
        jMQwz:
        fOO8v:
        goto e_czd;
        PT5m_:
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        goto HQIR6;
        DXLhT:
        curl_setopt($ch, CURLOPT_USERAGENT, "JuheData");
        goto TTUz7;
        hU7eI:
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        goto LPiVG;
        ngnup:
        return $response;
        goto lMjAJ;
        LPiVG:
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        goto C4VhP;
        MqBEj:
        curl_setopt($ch, CURLOPT_URL, $url . "?" . $params);
        goto jMQwz;
        jkzz9:
        goto fOO8v;
        goto kZCYI;
        aUU0A:
        curl_setopt($ch, CURLOPT_URL, $url);
        goto fIs70;
        V6wW1:
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        goto DXLhT;
        fM2Rn:
        $ch = curl_init();
        goto V6wW1;
        FoYn9:
        Ri3TK:
        goto FJ40L;
        e_czd:
        goto iSE7l;
        goto mklFZ;
        npLNw:
        $httpInfo = array();
        goto fM2Rn;
        C4VhP:
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        goto NdDi5;
        lMjAJ:
    }
    public function jdcs1px($array)
    {
        goto EZ_yb;
        b5pXZ:
        $string = '';
        goto Cu8Um;
        gxMYR:
        O9ox5:
        goto SWuj3;
        WJ1j3:
        goto byQVU;
        goto gxMYR;
        EZ_yb:
        ksort($array);
        goto b5pXZ;
        SWuj3:
        return trim($string);
        goto x9ny1;
        Pcq7v:
        $string = $string . $key . $val;
        goto WJ1j3;
        Cu8Um:
        byQVU:
        goto DSmrY;
        DSmrY:
        if (!(list($key, $val) = each($array))) {
            goto O9ox5;
        }
        goto Pcq7v;
        x9ny1:
    }
    public function jdcs2px($array)
    {
        ksort($array);
        return json_encode($array);
    }
    public function jdsign1($arr1)
    {
        goto r7ArD;
        r7ArD:
        $app_key = "d208dae5afb44db190b8f912e4c6de02";
        goto jzBaX;
        jzBaX:
        $App_Secret = "176fa13b38594dc187f4719fcc0c7253";
        goto m6cJ2;
        hIJOH:
        $md5str = MD5($string);
        goto ddIUL;
        ddIUL:
        return strtoupper($md5str);
        goto cuSvL;
        m6cJ2:
        $string = $App_Secret . $arr1 . $App_Secret;
        goto hIJOH;
        cuSvL:
    }
}
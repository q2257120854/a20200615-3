<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `uuid`;");
E_C("CREATE TABLE `uuid` (
  `id` char(32) NOT NULL COMMENT '具体编号',
  `type` tinyint(4) NOT NULL COMMENT '业务类型',
  PRIMARY KEY (`id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='UUID'");
E_D("replace into `uuid` values(0x4134383037373333,'2');");
E_D("replace into `uuid` values(0x423139303431373537303536343730,'8');");
E_D("replace into `uuid` values(0x4238343737373738,'2');");
E_D("replace into `uuid` values(0x43333533373832393030,'3');");
E_D("replace into `uuid` values(0x443139303431373634383432393932,'8');");
E_D("replace into `uuid` values(0x443139303632333132393937333530,'8');");
E_D("replace into `uuid` values(0x453139303431373431323630363635,'8');");
E_D("replace into `uuid` values(0x4534303734333036,'2');");
E_D("replace into `uuid` values(0x4537313935373231,'2');");
E_D("replace into `uuid` values(0x463139303431363537303933303334,'8');");
E_D("replace into `uuid` values(0x4635353236303534,'2');");
E_D("replace into `uuid` values(0x4738303739353934,'2');");
E_D("replace into `uuid` values(0x4738333037333135,'2');");
E_D("replace into `uuid` values(0x493139303431373533333330303530,'8');");
E_D("replace into `uuid` values(0x49333031353335,'1');");
E_D("replace into `uuid` values(0x49373236323532383139,'3');");
E_D("replace into `uuid` values(0x4938373036303732,'2');");
E_D("replace into `uuid` values(0x49393630343331,'1');");
E_D("replace into `uuid` values(0x4a3139303431373433323736333231,'8');");
E_D("replace into `uuid` values(0x4b3139303431373630363635303434,'8');");
E_D("replace into `uuid` values(0x4b3139303431373735303439343934,'8');");
E_D("replace into `uuid` values(0x4b333433323433,'1');");
E_D("replace into `uuid` values(0x4b38343030333938,'2');");
E_D("replace into `uuid` values(0x4c3139303431373730383037313536,'8');");
E_D("replace into `uuid` values(0x4c35363332313632,'2');");
E_D("replace into `uuid` values(0x4e3139303431363130303836363231,'8');");
E_D("replace into `uuid` values(0x4f3139303431373233343739343033,'8');");
E_D("replace into `uuid` values(0x4f3139303431373435353039323231,'8');");
E_D("replace into `uuid` values(0x4f3139303431373838333233343537,'8');");
E_D("replace into `uuid` values(0x503139303431373839323234303836,'8');");
E_D("replace into `uuid` values(0x513139303431373531303439393037,'8');");
E_D("replace into `uuid` values(0x513139303431373636313330333439,'8');");
E_D("replace into `uuid` values(0x5333363935353430,'2');");
E_D("replace into `uuid` values(0x5433343834343139,'2');");
E_D("replace into `uuid` values(0x553139303431373332323435353737,'8');");
E_D("replace into `uuid` values(0x553139303431373738373930303930,'8');");
E_D("replace into `uuid` values(0x5637373833373732,'2');");
E_D("replace into `uuid` values(0x56393231343130,'1');");
E_D("replace into `uuid` values(0x5731323337383336,'2');");
E_D("replace into `uuid` values(0x573139303431373136363439313235,'8');");
E_D("replace into `uuid` values(0x573139303431373835333931353534,'8');");
E_D("replace into `uuid` values(0x5736323138393131,'2');");
E_D("replace into `uuid` values(0x583139303431373132373633323837,'8');");
E_D("replace into `uuid` values(0x5838373537353137,'2');");
E_D("replace into `uuid` values(0x5839383235323031,'2');");
E_D("replace into `uuid` values(0x5936383537313835,'2');");
E_D("replace into `uuid` values(0x5a3139303431373336363835393236,'8');");
E_D("replace into `uuid` values(0x5a3139303431373930353834343539,'8');");
E_D("replace into `uuid` values(0x5a32303938323131,'2');");
E_D("replace into `uuid` values(0x5a32353234313937,'2');");

require("../../inc/footer.php");
?>
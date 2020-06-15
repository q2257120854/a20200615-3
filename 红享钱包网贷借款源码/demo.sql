/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50644
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50644
File Encoding         : 65001

Date: 2020-02-18 22:42:21
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `dk_admin`
-- ----------------------------
DROP TABLE IF EXISTS `dk_admin`;
CREATE TABLE `dk_admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `adminuser` varchar(255) DEFAULT NULL,
  `adminpass` varchar(255) DEFAULT NULL,
  `getip` varchar(255) DEFAULT '0',
  `arrip` varchar(255) DEFAULT '0',
  `author` varchar(255) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_admin
-- ----------------------------
INSERT INTO `dk_admin` VALUES ('1', 'admin', 'bbs.52jscn.com', '127.0.0.1', '127.0.0.1', '9', '超级管理员');

-- ----------------------------
-- Table structure for `dk_broadcast`
-- ----------------------------
DROP TABLE IF EXISTS `dk_broadcast`;
CREATE TABLE `dk_broadcast` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `image` text,
  `url` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_broadcast
-- ----------------------------
INSERT INTO `dk_broadcast` VALUES ('2', 'admin', '/static/uploads/20190218/2725f1a503e22526d64a21281abc2155.png', '#', '2019-01-02 17:03:31');

-- ----------------------------
-- Table structure for `dk_configure`
-- ----------------------------
DROP TABLE IF EXISTS `dk_configure`;
CREATE TABLE `dk_configure` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `api` longtext,
  `config` longtext,
  `loan` longtext,
  `smstid` longtext,
  `tuiguang` longtext,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of dk_configure
-- ----------------------------
INSERT INTO `dk_configure` VALUES ('1', null, null, '{\"loanmoney\":\"10000,40000,50000\",\"safekey\":\"decade,faiz,joker\",\"totype\":\"2\",\"loanterm\":\"6,12,24\",\"typeterm\":\"\\u6708\",\"loanint\":\"0.1\",\"loanshfv\":\"90\",\"loansh\":\"3\",\"youhui\":\"80\",\"serviceswitch\":\"1\",\"servicepay\":\"0.1\",\"loanmode\":\"0\",\"txmini\":\"10\",\"regswitch\":\"0\",\"regcode\":\"123456\",\"reswitch\":\"0\",\"recode\":\"123456\",\"vipswitch\":\"0\",\"vipmoney\":\"0.01,299,399\",\"viptype\":\"1,2,3\",\"vipname\":\"\\u521d\\u7ea7\\u81f3\\u5c0a,\\u4e2d\\u7ea7\\u81f3\\u5c0a,\\u9ad8\\u7ea7\\u81f3\\u5c0a\",\"vipterm\":\"6,12,24\",\"authdie\":\"0\",\"stopday\":\"30\",\"authswitch\":\"0\",\"authmoney\":\"1,1,1,1\"}', '{\"1001\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u6b22\\u8fce\\u60a8\\u6ce8\\u518c\\u85aa\\u91d1\\u94b1\\u5305\\uff0c\\u60a8\\u7684\\u9a8c\\u8bc1\\u7801\\u662f\\uff1a$code,5\\u5206\\u949f\\u540e\\u5931\\u6548\\uff0c\\u8bf7\\u53ca\\u65f6\\u9a8c\\u8bc1\\u3002\",\"1002\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u672c\\u6b21\\u627e\\u56de\\u5bc6\\u7801\\u7684\\u9a8c\\u8bc1\\u7801\\u662f\\uff1a$code,5\\u5206\\u949f\\u540e\\u5931\\u6548\\uff0c\\u8bf7\\u53ca\\u65f6\\u9a8c\\u8bc1\\u3002\",\"1003\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684\\u7533\\u8bf7\\u7efc\\u5408\\u8bc4\\u5206\\u4e0d\\u8db3\\uff0c\\u8bf7\\u57281\\u5929\\u540e\\u518d\\u6b21\\u7533\\u8bf7\\u3002\\u9000\\u8ba2\\u56deT\",\"1004\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684\\u7533\\u8bf7\\u521d\\u5ba1\\u5df2\\u7ecf\\u901a\\u8fc7\\uff0c\\u8bf7\\u5230APP\\u501f\\u6b3e\\u8bb0\\u5f55\\u5185\\u8fdb\\u884c\\u4e0b\\u4e00\\u6b65\\u64cd\\u4f5c\\u3002\",\"1005\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684\\u6b3e\\u9879\\u5c06\\u53d1\\u653e\\u81f3app\\u94b1\\u5305\\u8d26\\u6237\\uff0c\\u8bf7\\u8fdb\\u5165\\u63d0\\u53d6\\uff0c\\u6ce8\\u610f\\u67e5\\u6536\\u3002\\u9000\\u8ba2\\u56deT\",\"1006\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684\\u672c\\u6b21\\u8d26\\u5355\\u5df2\\u6210\\u529f\\u8fd8\\u6b3e\\u3002\\u9000\\u8ba2\\u56deT\",\"1007\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684\\u63d0\\u73b0\\u7533\\u8bf7\\u5df2\\u7ecf\\u63d0\\u4ea4\\u3002\\u9000\\u8ba2\\u56deT\",\"1008\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684\\u672c\\u6b21\\u63d0\\u73b0\\u7533\\u8bf7\\u5931\\u8d25\\u3002\\u9000\\u8ba2\\u56deT\",\"1009\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684\\u6b3e\\u9879\\u5c06\\u53d1\\u653e\\u81f3\\u60a8\\u7ed1\\u5b9a\\u7684\\u94f6\\u884c\\u5361\\u8d26\\u6237\\uff0c\\u9884\\u8ba1\\u4e00\\u4e2a\\u5de5\\u4f5c\\u65e5\\u5185\\u5230\\u8d26\\uff0c\\u8bf7\\u6ce8\\u610f\\u67e5\\u6536\\u3002\\u9000\\u8ba2\\u56deT\",\"1010\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684$allmoney\\u5143\\u501f\\u6b3e\\u5e94\\u4e8e\\u4eca\\u65e5\\u5230\\u671f\\u8fd8\\u6b3e\\uff0c\\u8bf7\\u53ca\\u65f6\\u8fd8\\u6b3e \\u3002\\u9000\\u8ba2\\u56deT\",\"1011\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u5c0a\\u656c\\u7684$mobile\\uff0c\\u60a8\\u7684$allmoney\\u5143\\u501f\\u6b3e\\u5e94\\u4e8e{$dtime}\\u65e5\\u5230\\u671f\\u8fd8\\u6b3e\\uff0c\\u8bf7\\u53ca\\u65f6\\u8fd8\\u6b3e \\uff0c\\u5982\\u5df2\\u8fd8\\u6b3e \\u8bf7\\u5ffd\\u7565\\u3002\\u9000\\u8ba2\\u56deT\",\"1012\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u60a8\\u7533\\u8bf7\\u7684\\u85aa\\u91d1\\u94b1\\u5305\\u8d44\\u6599\\u8fd8\\u672a\\u5b8c\\u5584\\uff0c\\u8bf7\\u767b\\u5f55app\\u8fdb\\u4e00\\u6b65\\u5b8c\\u5584\\u8d44\\u6599\\u63d0\\u4ea4\\u7533\\u8bf7\\u4ee5\\u4fbf\\u6211\\u4eec\\u4e3a\\u60a8\\u5ba1\\u6838\\uff0c\\u56deT\\u9000\\u8ba2\",\"1013\":\"\\u3010\\u85aa\\u91d1\\u94b1\\u5305\\u3011\\u6e29\\u99a8\\u63d0\\u793a\\u60a8\\uff0c\\u60a8\\u7684\\u4f59\\u989d\\u8fd8\\u672a\\u4f7f\\u7528\\u3002\\u8bf7\\u8fdb\\u5165app\\u501f\\u6b3e\\u8bb0\\u5f55\\u6309\\u63d0\\u793a\\u64cd\\u4f5c\\uff0c\\u56deT\\u9000\\u8ba2\"}', '{\"color\":\"#c0c0c0\",\"centcolor\":\"#ff2020\",\"bgimg\":\"\\/static\\/uploads\\/20180914\\\\f81696ae71019f5a3e3c0461fc456a70.png\",\"buttomc\":\"#ff8040\",\"and\":\"http:\\/\\/baidu.com\",\"ios\":\"http:\\/\\/baidu.com\"}');

-- ----------------------------
-- Table structure for `dk_consultation`
-- ----------------------------
DROP TABLE IF EXISTS `dk_consultation`;
CREATE TABLE `dk_consultation` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `auth` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_consultation
-- ----------------------------

-- ----------------------------
-- Table structure for `dk_getdata`
-- ----------------------------
DROP TABLE IF EXISTS `dk_getdata`;
CREATE TABLE `dk_getdata` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `userall` varchar(255) DEFAULT '0',
  `loanmoney` varchar(255) DEFAULT '0',
  `shiming` varchar(255) DEFAULT '0',
  `getip` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_getdata
-- ----------------------------
INSERT INTO `dk_getdata` VALUES ('1', '4', '0', '4', '55');

-- ----------------------------
-- Table structure for `dk_loan`
-- ----------------------------
DROP TABLE IF EXISTS `dk_loan`;
CREATE TABLE `dk_loan` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL COMMENT '订单号',
  `loanamount` decimal(8,2) DEFAULT NULL COMMENT '借款额度',
  `loantype` varchar(255) DEFAULT NULL COMMENT '借款类型，天，月',
  `loanlixi` varchar(255) DEFAULT '0' COMMENT '借款利息',
  `loanend` varchar(255) DEFAULT NULL COMMENT '还款时间',
  `allmoney` varchar(255) DEFAULT '0' COMMENT '应还总额',
  `status` varchar(255) DEFAULT '0' COMMENT '借款状态',
  `loanterm` varchar(255) DEFAULT '0' COMMENT '借款期限',
  `repayment` decimal(10,0) NOT NULL DEFAULT '0' COMMENT '借款月 每月还款',
  `qishu` varchar(255) DEFAULT '1' COMMENT '借款月 期数',
  `qishutime` varchar(255) DEFAULT NULL,
  `errortext` varchar(255) DEFAULT NULL COMMENT '拒绝理由',
  `viptype` varchar(255) DEFAULT '1',
  `addtime` varchar(255) DEFAULT NULL,
  `putime` varchar(255) NOT NULL DEFAULT '0',
  `source` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_loan
-- ----------------------------
INSERT INTO `dk_loan` VALUES ('1', '8', '记录胡', '18005151538', '201902141308169562946318', '18000.00', '月', '9', '1612328896', '24480', '2', '24', '1020', '1', '1550120896', null, '1', '1550121076', '0', '0');
INSERT INTO `dk_loan` VALUES ('2', '7', '涂品红', '13811111111', '201911120833275153789121', '45000.00', '月', '22.5', '1635726807', '61200', '3', '24', '2550', '1', '1573518807', null, '1', '1573518987', '0', '0');

-- ----------------------------
-- Table structure for `dk_msg`
-- ----------------------------
DROP TABLE IF EXISTS `dk_msg`;
CREATE TABLE `dk_msg` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(255) DEFAULT NULL,
  `content` text,
  `status` varchar(255) DEFAULT '1',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_msg
-- ----------------------------
INSERT INTO `dk_msg` VALUES ('1', '8', '您的借款订单已提交申请，正在审核中...', '1', '2019-02-14 13:08:21');
INSERT INTO `dk_msg` VALUES ('2', '7', '您的借款订单已提交申请，正在审核中...', '0', '2019-11-12 08:33:27');
INSERT INTO `dk_msg` VALUES ('3', '7', '您的款项即将发放，预计一个工作日到账', '1', '2019-11-12 09:07:48');

-- ----------------------------
-- Table structure for `dk_notice`
-- ----------------------------
DROP TABLE IF EXISTS `dk_notice`;
CREATE TABLE `dk_notice` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `auth` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_notice
-- ----------------------------
INSERT INTO `dk_notice` VALUES ('1', '站码之家zhanmazj.com', 'admin', '站码之家zhanmazj.com', '/static/uploads/20190113/87361471fbd6ab1c03ffb59df98e5a16.jpg', '<p>站码之家zhanmazj.com</p>', '2019-01-13 16:11:24');

-- ----------------------------
-- Table structure for `dk_pay`
-- ----------------------------
DROP TABLE IF EXISTS `dk_pay`;
CREATE TABLE `dk_pay` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `pid` int(8) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `money` decimal(8,2) DEFAULT '0.00',
  `uid` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_pay
-- ----------------------------
INSERT INTO `dk_pay` VALUES ('1', '1', '审核费', '记录胡', '82019021411123', '198.00', '8', '1', '2019-02-14 13:13:23');
INSERT INTO `dk_pay` VALUES ('2', '2', '审核费', '涂品红', '72019111230948', '495.00', '7', '0', '2019-11-12 08:58:24');
INSERT INTO `dk_pay` VALUES ('3', '2', '审核费', '涂品红', '72019111234897', '495.00', '7', '1', '2019-11-12 08:58:44');
INSERT INTO `dk_pay` VALUES ('4', '2', '订单还款', '涂品红', '72019111292863', '2550.00', '7', '1', '2019-11-12 09:09:11');

-- ----------------------------
-- Table structure for `dk_province`
-- ----------------------------
DROP TABLE IF EXISTS `dk_province`;
CREATE TABLE `dk_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `count` mediumint(255) DEFAULT '0',
  `zhuce` mediumint(255) DEFAULT '0',
  `ziliao` mediumint(255) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_province
-- ----------------------------
INSERT INTO `dk_province` VALUES ('1', '福建', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('2', '山东', '0', '1', '0');
INSERT INTO `dk_province` VALUES ('3', '江苏', '0', '1', '2');
INSERT INTO `dk_province` VALUES ('4', '上海', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('5', '浙江', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('6', '安徽', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('7', '江西', '0', '1', '1');
INSERT INTO `dk_province` VALUES ('8', '广东', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('9', '广西', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('10', '海南', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('11', '河南', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('12', '湖南', '0', '1', '1');
INSERT INTO `dk_province` VALUES ('13', '湖北', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('14', '北京', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('15', '天津', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('16', '河北', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('17', '山西', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('18', '内蒙古', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('19', '宁夏', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('20', '青海', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('21', '陕西', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('22', '甘肃', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('23', '新疆', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('24', '四川', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('25', '贵州', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('26', '云南', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('27', '重庆', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('28', '西藏', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('29', '辽宁', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('30', '黑龙江', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('31', '香港', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('32', '澳门', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('33', '台湾', '0', '0', '0');
INSERT INTO `dk_province` VALUES ('34', '吉林', '0', '0', '0');

-- ----------------------------
-- Table structure for `dk_reorder`
-- ----------------------------
DROP TABLE IF EXISTS `dk_reorder`;
CREATE TABLE `dk_reorder` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT '0',
  `viptype` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_reorder
-- ----------------------------
INSERT INTO `dk_reorder` VALUES ('1', '7', '198', '1', '72019010236926', '1', '2019-01-02 16:57:40');
INSERT INTO `dk_reorder` VALUES ('2', '7', '198', '1', '72019010245249', '1', '2019-01-02 16:57:48');
INSERT INTO `dk_reorder` VALUES ('3', '7', '198', '1', '72019010267684', '1', '2019-01-02 16:59:27');
INSERT INTO `dk_reorder` VALUES ('4', '7', '198', '1', '72019010210002', '1', '2019-01-02 17:04:09');
INSERT INTO `dk_reorder` VALUES ('5', '7', '198', '1', '72019010232163', '1', '2019-01-02 21:05:52');
INSERT INTO `dk_reorder` VALUES ('6', '7', '198', '1', '72019010216788', '1', '2019-01-02 21:05:57');
INSERT INTO `dk_reorder` VALUES ('7', '7', '198', '1', '72019010230794', '1', '2019-01-02 21:06:03');
INSERT INTO `dk_reorder` VALUES ('8', '7', '198', '1', '72019010276355', '1', '2019-01-02 21:06:05');
INSERT INTO `dk_reorder` VALUES ('9', '7', '198', '1', '72019010243607', '1', '2019-01-02 21:06:11');
INSERT INTO `dk_reorder` VALUES ('10', '7', '198', '1', '72019010258306', '1', '2019-01-02 21:06:14');
INSERT INTO `dk_reorder` VALUES ('11', '7', '0', '1', 'D71546434822348', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('12', '7', '0', '2', 'D71546435046363', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('13', '7', '0', '4', 'D71546435271567', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('14', '7', '0', null, 'D71546435360550', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('15', '7', '0', null, 'D71546435387137', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('16', '7', '0', '7', 'D71546435393854', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('17', '7', '0', null, 'D71546435400575', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('18', '7', '0', null, 'D71546435405641', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('19', '7', '0', '3', 'D71546435410382', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('20', '7', '0', null, 'D71546435422717', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('21', '7', '0', null, 'D71546436117338', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('22', '7', '198', '1', '72019010252628', '1', '2019-01-02 22:16:43');
INSERT INTO `dk_reorder` VALUES ('23', '7', '398', '3', '72019010214014', '1', '2019-01-02 22:31:44');
INSERT INTO `dk_reorder` VALUES ('24', '7', '398', '3', '72019010224858', '1', '2019-01-02 22:31:53');
INSERT INTO `dk_reorder` VALUES ('25', '7', '398', '3', '72019010288197', '1', '2019-01-02 22:32:02');
INSERT INTO `dk_reorder` VALUES ('26', '7', '398', '3', '72019010293208', '1', '2019-01-02 22:34:30');
INSERT INTO `dk_reorder` VALUES ('27', '7', '298', '2', '72019010238808', '1', '2019-01-02 22:47:45');
INSERT INTO `dk_reorder` VALUES ('28', '7', '298', '2', '72019010281453', '1', '2019-01-02 22:47:49');
INSERT INTO `dk_reorder` VALUES ('29', '7', '298', '2', '72019010235982', '1', '2019-01-02 22:47:54');
INSERT INTO `dk_reorder` VALUES ('30', '7', '298', '2', '72019010200527', '1', '2019-01-02 22:49:07');
INSERT INTO `dk_reorder` VALUES ('31', '7', '198', '1', '72019010297811', '1', '2019-01-02 22:50:38');
INSERT INTO `dk_reorder` VALUES ('32', '7', '198', '1', '72019010211389', '1', '2019-01-02 22:52:03');
INSERT INTO `dk_reorder` VALUES ('33', '7', '198', '1', '72019010263251', '1', '2019-01-02 23:00:47');
INSERT INTO `dk_reorder` VALUES ('34', '8', '0', '7', 'D81546518088808', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('35', '9', '0', '3', 'D91546835855314', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('36', null, '0', '3', 'D1546835856974', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('37', null, '0', '3', 'D1546835856320', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('38', '9', '0', null, 'D91546835860358', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('39', null, '0', null, 'D1546835861749', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('40', '9', '0', '4', 'D91546835863438', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('41', null, '0', '4', 'D1546835863978', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('42', null, '0', '4', 'D1546835863131', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('43', '9', '0', null, 'D91546835866916', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('44', null, '0', null, 'D1546835866514', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('45', '9', '0', '3', 'D91546836172903', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('46', '9', '0', null, 'D91546836178899', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('47', '9', '0', '4', 'D91546836186258', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('48', '9', '0', null, 'D91546836188852', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('49', '9', '0', '7', 'D91546836192378', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('50', '9', '0', '1', 'D91546836203562', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('51', '9', '0', '2', 'D91546836212480', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('52', '9', '198', '1', '92019010760423', '1', '2019-01-07 12:55:37');
INSERT INTO `dk_reorder` VALUES ('53', '9', '0', '3', 'D91546837680625', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('54', '9', '0', null, 'D91546837698652', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('55', '9', '0', null, 'D91546837702426', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('56', '9', '0', null, 'D91546837766237', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('57', '9', '0', '4', 'D91546837769227', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('58', '9', '0', null, 'D91546837805420', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('59', '9', '0', null, 'D91546837810628', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('60', '9', '0', null, 'D91546837813624', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('61', '9', '0', null, 'D91546837836306', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('62', '9', '0', '7', 'D91546837840887', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('63', null, '0', '7', 'D1546837840668', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('64', '10', '0', '3', 'D101547282240913', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('65', '10', '0', '3', 'D101547282242219', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('66', '10', '0', '3', 'D101547282242104', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('67', '10', '0', '3', 'D101547282242552', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('68', '10', '0', null, 'D101547282246601', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('69', '10', '0', '4', 'D101547282249670', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('70', '10', '0', null, 'D101547282252563', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('71', '10', '0', '7', 'D101547282256814', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('72', '10', '0', '1', 'D101547282260278', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('73', '10', '0', '1', 'D101547282262116', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('74', '10', '0', '4', 'D101547282881135', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('75', '10', '0', null, 'D101547282884808', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('76', '10', '0', null, 'D101547282888467', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('77', '10', '0', '7', 'D101547282896598', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('78', '10', '0', '1', 'D101547282899211', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('79', '10', '0', '2', 'D101547282902530', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('80', '10', '0', '1', 'D101547282907537', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('81', '10', '0', '3', 'D101547283543368', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('82', '10', '0', null, 'D101547283561265', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('83', '10', '0', null, 'D101547283573648', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('84', '10', '0', null, 'D101547283624474', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('85', '10', '0', '4', 'D101547283632205', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('86', '10', '0', null, 'D101547283664276', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('87', '10', '0', null, 'D101547283680852', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('88', '10', '0', null, 'D101547283700461', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('89', '10', '0', '7', 'D101547283713414', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('90', '10', '0', '7', 'D101547285096264', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('91', '10', '0', '7', 'D101547285467226', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('92', '10', '0', '7', 'D101547285575290', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('93', '10', '0', '1', 'D101547285580464', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('94', '10', '0', '1', 'D101547285584479', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('95', '10', '0', '1', 'D101547285586343', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('96', '10', '0', '7', 'D101547306378456', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('97', '10', '0', '1', 'D101547306501262', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('98', '10', '0', '1', 'D101547306509191', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('99', '10', '0', '2', 'D101547306512170', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('100', '10', '198', '1', '102019011231345', '1', '2019-01-12 23:22:16');
INSERT INTO `dk_reorder` VALUES ('101', '10', '198', '1', '102019011237215', '1', '2019-01-12 23:58:55');
INSERT INTO `dk_reorder` VALUES ('102', '10', '0', '1', 'D101547316912682', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('103', '10', '0', '2', 'D101547317137603', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('104', '10', '0', '7', 'D101547318973891', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('105', '10', '0', '1', 'D101547319005210', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('106', '12', '0', '7', 'D121547366225923', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('107', '10', '0', '7', 'D101547388280939', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('108', '10', '0', '1', 'D101547388420826', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('109', '10', '0', '1', 'D101547388423591', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('110', '10', '0', '1', 'D101547388671275', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('111', '10', '0', '7', 'D101547388692547', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('112', '10', '0', '7', 'D101547404178130', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('113', '9', '0', '7', 'D91547605316354', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('114', '10', '0', '7', 'D101547605706263', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('115', '9', '0', '7', 'D91547972387631', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('116', '9', '0', '1', 'D91547972406372', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('117', '9', '0', '7', 'D91547972599266', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('118', '9', '0', '1', 'D91547972606349', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('119', '15', '0', '3', 'D151550120094141', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('120', '15', '0', null, 'D151550120112526', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('121', '15', '0', '3', 'D151550120115744', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('122', '15', '0', null, 'D151550120117375', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('123', '15', '0', '4', 'D151550120130454', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('124', '15', '0', null, 'D151550120133299', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('125', '15', '0', null, 'D151550120141487', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('126', '15', '0', null, 'D151550120210401', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('127', '15', '0', '4', 'D151550120214820', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('128', '15', '0', null, 'D151550120236568', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('129', '15', '0', null, 'D151550120265770', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('130', '15', '0', '7', 'D151550120271993', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('131', '15', '0', '4', 'D151550120280973', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('132', '15', '0', '4', 'D151550120293161', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('133', '15', '0', '4', 'D151550120302993', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('134', '15', '0', null, 'D151550120331295', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('135', '15', '0', '7', 'D151550120356852', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('136', '15', '0', '7', 'D151550120412858', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('137', '15', '0', '7', 'D151550120458130', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('138', '8', '0', '3', 'D81550120585388', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('139', '8', '0', null, 'D81550120599296', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('140', '8', '0', null, 'D81550120607970', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('141', '8', '0', null, 'D81550120626978', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('142', '8', '0', '3', 'D81550120674596', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('143', '8', '0', null, 'D81550120686660', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('144', '8', '0', null, 'D81550120698648', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('145', '8', '0', '4', 'D81550120704984', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('146', '8', '0', null, 'D81550120737673', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('147', '8', '0', null, 'D81550120740575', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('148', '8', '0', null, 'D81550120794246', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('149', '8', '0', null, 'D81550120798308', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('150', '8', '0', null, 'D81550120825578', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('151', '8', '198', '1', '82019021447913', '1', '2019-02-14 13:14:50');
INSERT INTO `dk_reorder` VALUES ('152', '8', '398', '3', '82019021462823', '1', '2019-02-14 13:16:08');
INSERT INTO `dk_reorder` VALUES ('153', '8', '398', '3', '82019021572414', '1', '2019-02-15 11:43:09');
INSERT INTO `dk_reorder` VALUES ('154', '16', '298', '2', '162019030389498', '1', '2019-03-03 21:41:49');
INSERT INTO `dk_reorder` VALUES ('155', '16', '298', '2', '162019030324241', '1', '2019-03-03 21:41:53');
INSERT INTO `dk_reorder` VALUES ('156', '16', '298', '2', '162019030310279', '1', '2019-03-03 21:41:54');
INSERT INTO `dk_reorder` VALUES ('157', '8', '0', '2', 'D81553495450678', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('158', '8', '0', '2', 'D81553562327474', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('159', '8', '0', '1', 'D81553562339273', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('160', '8', '198', '1', '82019032652028', '1', '2019-03-26 09:06:36');
INSERT INTO `dk_reorder` VALUES ('161', '7', '0', '1', 'D71573517418981', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('162', '7', '0', '2', 'D71573517423712', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('163', '7', '198', '1', '72019111234596', '1', '2019-11-12 08:10:34');
INSERT INTO `dk_reorder` VALUES ('164', '7', '0', null, 'D71573518302966', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('165', '7', '0', null, 'D71573518395219', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('166', '7', '0', null, 'D71573518400526', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('167', '7', '0', null, 'D71573518430975', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('168', '7', '0', null, 'D71573518434830', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('169', '7', '0', null, 'D71573518458148', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('170', '7', '0', '7', 'D71573518463308', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('171', '7', '398', '3', '72019111217357', '1', '2019-11-12 09:14:34');
INSERT INTO `dk_reorder` VALUES ('172', '7', '398', '3', '72019111292015', '1', '2019-11-12 09:15:31');
INSERT INTO `dk_reorder` VALUES ('173', '17', '0', '2', 'D171581079165905', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('174', '17', '0', '3', 'D171581080134669', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('175', '17', '0', null, 'D171581080137660', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('176', '17', '0', '4', 'D171581080139323', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('177', '17', '0', null, 'D171581080141238', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('178', '17', '0', '7', 'D171581080144202', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('179', '17', '0', '1', 'D171581080149743', '1', '0000-00-00 00:00:00');
INSERT INTO `dk_reorder` VALUES ('180', '18', '0', null, 'D181582005126543', '1', null);
INSERT INTO `dk_reorder` VALUES ('181', '18', '0', '3', 'D181582005376458', '1', null);
INSERT INTO `dk_reorder` VALUES ('182', '18', '0', null, 'D181582005379767', '1', null);
INSERT INTO `dk_reorder` VALUES ('183', '18', '0', '7', 'D181582005647166', '1', null);
INSERT INTO `dk_reorder` VALUES ('184', '18', '198', '1', '182020021829433', '1', '2020-02-18 16:48:59');
INSERT INTO `dk_reorder` VALUES ('185', '18', '198', '1', '182020021800587', '1', '2020-02-18 16:49:29');
INSERT INTO `dk_reorder` VALUES ('186', '18', '198', '1', '182020021840241', '1', '2020-02-18 17:52:50');
INSERT INTO `dk_reorder` VALUES ('187', '18', '198', '1', '182020021846463', '1', '2020-02-18 17:55:19');

-- ----------------------------
-- Table structure for `dk_smscode`
-- ----------------------------
DROP TABLE IF EXISTS `dk_smscode`;
CREATE TABLE `dk_smscode` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_smscode
-- ----------------------------
INSERT INTO `dk_smscode` VALUES ('1', '18005151538', '792001', '1546518671');

-- ----------------------------
-- Table structure for `dk_source`
-- ----------------------------
DROP TABLE IF EXISTS `dk_source`;
CREATE TABLE `dk_source` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) DEFAULT '0',
  `money` varchar(255) DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of dk_source
-- ----------------------------
INSERT INTO `dk_source` VALUES ('22', '0', '0', '2018-12-26 22:43:43');
INSERT INTO `dk_source` VALUES ('27', '0', '0', '2018-12-26 22:48:35');
INSERT INTO `dk_source` VALUES ('28', '0', '0', '2018-12-26 22:48:35');
INSERT INTO `dk_source` VALUES ('29', '0', '0', '2019-01-02 16:43:46');
INSERT INTO `dk_source` VALUES ('30', '0', '0', '2019-01-07 12:39:08');
INSERT INTO `dk_source` VALUES ('31', '0', '0', '2019-01-07 12:39:10');
INSERT INTO `dk_source` VALUES ('32', '0', '0', '2019-01-07 12:39:10');
INSERT INTO `dk_source` VALUES ('33', '0', '0', '2019-01-07 12:39:13');
INSERT INTO `dk_source` VALUES ('34', '0', '0', '2019-01-07 12:39:15');
INSERT INTO `dk_source` VALUES ('35', '0', '0', '2019-01-12 16:54:44');
INSERT INTO `dk_source` VALUES ('36', '0', '0', '2019-01-21 00:52:04');
INSERT INTO `dk_source` VALUES ('37', '0', '0', '2019-02-13 23:50:14');
INSERT INTO `dk_source` VALUES ('44', '0', '0', '2019-02-21 13:46:46');
INSERT INTO `dk_source` VALUES ('45', '0', '0', '2019-02-21 13:47:06');
INSERT INTO `dk_source` VALUES ('46', '0', '0', '2019-02-21 13:47:09');
INSERT INTO `dk_source` VALUES ('47', '0', '0', '2019-02-21 13:47:11');
INSERT INTO `dk_source` VALUES ('48', '0', '0', '2019-03-12 11:34:21');
INSERT INTO `dk_source` VALUES ('49', '0', '0', '2020-02-08 15:28:13');
INSERT INTO `dk_source` VALUES ('50', '0', '0', '2020-02-08 15:28:15');

-- ----------------------------
-- Table structure for `dk_sutext`
-- ----------------------------
DROP TABLE IF EXISTS `dk_sutext`;
CREATE TABLE `dk_sutext` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_sutext
-- ----------------------------

-- ----------------------------
-- Table structure for `dk_syslog`
-- ----------------------------
DROP TABLE IF EXISTS `dk_syslog`;
CREATE TABLE `dk_syslog` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `sysaction` text,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_syslog
-- ----------------------------
INSERT INTO `dk_syslog` VALUES ('1', 'admin', '保存系统配置', '2018-12-26 01:44:04');
INSERT INTO `dk_syslog` VALUES ('2', 'admin', '保存系统配置', '2018-12-26 01:44:32');
INSERT INTO `dk_syslog` VALUES ('3', 'admin', '新增首页轮播图', '2018-12-26 01:45:01');
INSERT INTO `dk_syslog` VALUES ('4', 'admin', '保存接口配置', '2018-12-26 01:45:17');
INSERT INTO `dk_syslog` VALUES ('5', 'admin', '保存接口配置', '2018-12-26 01:46:12');
INSERT INTO `dk_syslog` VALUES ('6', 'admin', '添加用户13813813888', '2018-12-26 12:03:50');
INSERT INTO `dk_syslog` VALUES ('7', 'admin', '保存接口配置', '2018-12-26 21:49:20');
INSERT INTO `dk_syslog` VALUES ('8', 'admin', '保存接口配置', '2018-12-26 21:51:24');
INSERT INTO `dk_syslog` VALUES ('9', 'admin', '添加用户13813813888', '2018-12-26 21:54:59');
INSERT INTO `dk_syslog` VALUES ('10', 'ltech0915', '保存系统配置', '2018-12-26 22:43:36');
INSERT INTO `dk_syslog` VALUES ('11', 'ltech0915', '修改首页轮播图', '2018-12-26 22:43:51');
INSERT INTO `dk_syslog` VALUES ('12', 'ltech0915', '保存接口配置', '2018-12-26 22:46:28');
INSERT INTO `dk_syslog` VALUES ('13', 'ltech0915', '保存接口配置', '2018-12-26 22:47:32');
INSERT INTO `dk_syslog` VALUES ('14', 'ltech0915', '保存接口配置', '2018-12-26 22:48:54');
INSERT INTO `dk_syslog` VALUES ('15', 'ltech0915', '保存系统配置', '2018-12-27 00:02:18');
INSERT INTO `dk_syslog` VALUES ('16', 'ltech0915', '保存接口配置', '2018-12-27 00:02:38');
INSERT INTO `dk_syslog` VALUES ('17', 'ltech0915', '保存接口配置', '2018-12-27 00:03:28');
INSERT INTO `dk_syslog` VALUES ('18', 'ltech0915', '新增首页公告', '2018-12-27 00:08:54');
INSERT INTO `dk_syslog` VALUES ('19', 'ltech0915', '新增首页公告', '2018-12-27 00:09:07');
INSERT INTO `dk_syslog` VALUES ('20', 'ltech0915', '新增首页公告', '2018-12-27 00:09:26');
INSERT INTO `dk_syslog` VALUES ('21', 'ltech0915', '新增首页公告', '2018-12-27 00:09:40');
INSERT INTO `dk_syslog` VALUES ('22', 'ltech0915', '新增首页公告', '2018-12-27 00:09:57');
INSERT INTO `dk_syslog` VALUES ('23', 'ltech0915', '新增首页公告', '2018-12-27 00:10:16');
INSERT INTO `dk_syslog` VALUES ('24', 'ltech0915', '新增首页公告', '2018-12-27 00:10:29');
INSERT INTO `dk_syslog` VALUES ('25', 'ltech0915', '新增首页公告', '2018-12-27 00:10:42');
INSERT INTO `dk_syslog` VALUES ('26', 'ltech0915', '新增首页咨询', '2018-12-27 00:11:39');
INSERT INTO `dk_syslog` VALUES ('27', 'ltech0915', '新增首页咨询', '2018-12-27 00:12:16');
INSERT INTO `dk_syslog` VALUES ('28', 'ltech0915', '新增首页咨询', '2018-12-27 00:12:34');
INSERT INTO `dk_syslog` VALUES ('29', 'ltech0915', '新增首页咨询', '2018-12-27 00:12:59');
INSERT INTO `dk_syslog` VALUES ('30', 'ltech0915', '修改首页公告', '2018-12-27 00:13:45');
INSERT INTO `dk_syslog` VALUES ('31', 'ltech0915', '新增首页咨询', '2018-12-27 00:14:07');
INSERT INTO `dk_syslog` VALUES ('32', 'ltech0915', '添加用户13813813888', '2018-12-27 00:33:17');
INSERT INTO `dk_syslog` VALUES ('33', 'ltech0915', '删除首页咨询', '2018-12-27 00:43:44');
INSERT INTO `dk_syslog` VALUES ('34', 'ltech0915', '新增首页咨询', '2018-12-27 00:44:00');
INSERT INTO `dk_syslog` VALUES ('35', 'ltech0915', '修改首页公告', '2018-12-27 00:44:32');
INSERT INTO `dk_syslog` VALUES ('36', 'ltech0915', '保存接口配置', '2018-12-27 01:10:42');
INSERT INTO `dk_syslog` VALUES ('37', 'admin', '保存系统配置', '2019-01-02 16:43:27');
INSERT INTO `dk_syslog` VALUES ('38', 'admin', '保存系统配置', '2019-01-02 16:44:04');
INSERT INTO `dk_syslog` VALUES ('39', 'admin', '添加用户13811111111', '2019-01-02 16:55:08');
INSERT INTO `dk_syslog` VALUES ('40', 'admin', '新增首页轮播图', '2019-01-02 17:03:31');
INSERT INTO `dk_syslog` VALUES ('41', 'admin', '保存接口配置', '2019-01-02 17:45:53');
INSERT INTO `dk_syslog` VALUES ('42', 'admin', '保存接口配置', '2019-01-02 19:00:00');
INSERT INTO `dk_syslog` VALUES ('43', 'admin', '保存接口配置', '2019-01-02 21:20:07');
INSERT INTO `dk_syslog` VALUES ('44', 'admin', '保存接口配置', '2019-01-02 22:47:36');
INSERT INTO `dk_syslog` VALUES ('45', 'admin', '保存系统配置', '2019-01-03 18:12:34');
INSERT INTO `dk_syslog` VALUES ('46', 'admin', '保存接口配置', '2019-01-03 19:56:22');
INSERT INTO `dk_syslog` VALUES ('47', 'admin', '保存接口配置', '2019-01-03 20:10:54');
INSERT INTO `dk_syslog` VALUES ('48', 'admin', '添加用户13333333333', '2019-01-07 12:36:43');
INSERT INTO `dk_syslog` VALUES ('49', 'admin', '保存系统配置', '2019-01-07 12:37:46');
INSERT INTO `dk_syslog` VALUES ('50', 'admin', '保存系统配置', '2019-01-07 12:38:01');
INSERT INTO `dk_syslog` VALUES ('51', 'admin', '添加用户18679131211', '2019-01-12 16:36:47');
INSERT INTO `dk_syslog` VALUES ('52', 'admin', '添加用户', '2019-01-12 17:27:13');
INSERT INTO `dk_syslog` VALUES ('53', 'admin', '删除用户', '2019-01-12 17:27:19');
INSERT INTO `dk_syslog` VALUES ('54', 'admin', '保存接口配置', '2019-01-13 02:05:03');
INSERT INTO `dk_syslog` VALUES ('55', 'admin', '添加用户15913172636', '2019-01-13 15:43:25');
INSERT INTO `dk_syslog` VALUES ('56', 'admin', '新增首页公告', '2019-01-13 16:11:24');
INSERT INTO `dk_syslog` VALUES ('57', 'admin', '添加用户12345678901', '2019-01-16 09:44:58');
INSERT INTO `dk_syslog` VALUES ('58', 'admin', '删除用户', '2019-01-16 09:45:39');
INSERT INTO `dk_syslog` VALUES ('59', 'admin', '添加用户1366688899999', '2019-02-14 12:53:07');
INSERT INTO `dk_syslog` VALUES ('60', 'admin', '删除用户', '2019-02-14 12:53:28');
INSERT INTO `dk_syslog` VALUES ('61', 'admin', '添加用户13666777888', '2019-02-14 12:53:37');
INSERT INTO `dk_syslog` VALUES ('62', 'admin', '保存接口配置', '2019-02-14 13:10:22');
INSERT INTO `dk_syslog` VALUES ('63', 'admin', '修改首页轮播图', '2019-02-18 10:41:12');
INSERT INTO `dk_syslog` VALUES ('64', 'admin', '添加用户17321709220', '2019-02-18 16:14:43');
INSERT INTO `dk_syslog` VALUES ('65', 'admin', '保存接口配置', '2019-02-18 16:16:39');
INSERT INTO `dk_syslog` VALUES ('66', 'admin', '保存接口配置', '2019-02-18 16:17:17');
INSERT INTO `dk_syslog` VALUES ('67', 'admin', '保存系统配置', '2019-11-12 08:16:22');
INSERT INTO `dk_syslog` VALUES ('68', 'admin', '修改首页公告', '2019-11-13 00:40:09');
INSERT INTO `dk_syslog` VALUES ('69', 'admin', '添加用户13388888888', '2020-02-07 20:38:46');
INSERT INTO `dk_syslog` VALUES ('70', 'admin', '修改首页公告', '2020-02-07 20:58:41');
INSERT INTO `dk_syslog` VALUES ('71', 'admin', '保存系统配置', '2020-02-08 15:29:17');
INSERT INTO `dk_syslog` VALUES ('72', 'admin', '修改首页公告', '2020-02-08 15:30:20');
INSERT INTO `dk_syslog` VALUES ('73', 'admin', '保存系统配置', '2020-02-18 01:18:13');
INSERT INTO `dk_syslog` VALUES ('74', 'admin', '保存系统配置', '2020-02-18 13:38:03');
INSERT INTO `dk_syslog` VALUES ('75', 'admin', '添加用户15588000000', '2020-02-18 13:42:42');

-- ----------------------------
-- Table structure for `dk_user`
-- ----------------------------
DROP TABLE IF EXISTS `dk_user`;
CREATE TABLE `dk_user` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `mobile` varchar(255) DEFAULT NULL COMMENT '手机',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `loancount` varchar(255) DEFAULT '0' COMMENT '成功借款次数',
  `viptype` varchar(255) DEFAULT '0' COMMENT 'vip类型',
  `vipend` varchar(255) DEFAULT '0' COMMENT 'vip到期时间',
  `money` decimal(8,2) DEFAULT '0.00' COMMENT '金额',
  `banmoney` decimal(8,2) DEFAULT '0.00' COMMENT '未还金额',
  `source` varchar(255) DEFAULT '0' COMMENT '来路',
  `name` varchar(255) DEFAULT NULL COMMENT '真实姓名',
  `idcard` varchar(255) DEFAULT '0' COMMENT '身份证',
  `personal` longtext COMMENT '资料',
  `mobileAuth` longtext COMMENT '手机验证',
  `photoAuth` longtext COMMENT '身份证验证',
  `bankAuth` longtext COMMENT '银行卡验证',
  `taobaoAuth` longtext COMMENT '淘宝验证',
  `zhimaAuth` longtext COMMENT '芝麻分验证',
  `yhq` varchar(255) DEFAULT '1' COMMENT '优惠券',
  `yhqtime` varchar(255) DEFAULT '0' COMMENT '优惠券到期时间',
  `perfect` varchar(255) DEFAULT '1' COMMENT '是否认证完全',
  `qiandao` varchar(255) DEFAULT '0' COMMENT '签到天数',
  `qdtime` datetime DEFAULT NULL COMMENT '签到时间',
  `jifen` varchar(255) DEFAULT '0' COMMENT '签到积分',
  `ziliao` varchar(255) DEFAULT '1' COMMENT '资料添加',
  `addtime` datetime DEFAULT NULL,
  `shf` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_user
-- ----------------------------
INSERT INTO `dk_user` VALUES ('7', '13811111111', '123456', '0', '0', '0', '500.00', '0.00', '0', '涂品红', '522529198011124413', '{\"xueli\":\"\\u535a\\u58eb\\u7814\\u7a76\\u751f\\u53ca\\u4ee5\\u4e0a\",\"diqu\":\"\\u5317\\u4eac\\u5e02 \\u5317\\u4eac\\u5e02 \\u671d\\u9633\\u533a\",\"xiangxidizhi\":\"\\u4e5d\\u725b\\u7f51\\u6e90\\u7801\\u6d4b\\u8bd5 9nw.cc\",\"danwei\":\"\\u4e5d\\u725b\\u7f51\\u6e90\\u7801\\u6d4b\\u8bd5 9nw.cc\",\"danweidz\":\"\\u5317\\u4eac\\u5e02 \\u5317\\u4eac\\u5e02 \\u4e1c\\u57ce\\u533a\",\"dwxiangxi\":\"\\u4e5d\\u725b\\u7f51\\u6e90\\u7801\\u6d4b\\u8bd5 9nw.cc\",\"lxrgx\":\"\\u914d\\u5076\",\"lxrxm\":\"\\u4e5d\\u725b\\u7f51\",\"lxrsj\":\"18888888888\",\"lxrgx2\":\"\\u4e5d\\u725b\\u7f51\\u6e90\\u7801\\u6d4b\\u8bd5\",\"lxrxm2\":\"\\u4e5d\\u725b\\u7f51\\u6e90\\u7801\\u6d4b\\u8bd5\",\"lxrsj2\":\"13888888888\"}', null, '{\"a\":\"\\/static\\/uploads\\/20191112\\/8c8bea31860ff110393be36f2873cb59.png\",\"b\":\"\\/static\\/uploads\\/20191112\\/9e9da6e7277ea3568d6354ec92f18315.png\",\"c\":\"\\/static\\/uploads\\/20191112\\/458427d77f2ad0a46877427b84fa43dd.png\"}', '{\"name\":\"\\u6d82\\u54c1\\u7ea2\",\"idcard\":\"6217997110003833246\"}', null, null, '3', '0', '2', '6', '2019-11-13 00:00:00', '12', '2', '2019-01-02 16:55:08', '0');
INSERT INTO `dk_user` VALUES ('8', '18005151538', '123456', '0', '0', '0', '18000.00', '0.00', '0', '记录胡', '425769845755423', '{\"xueli\":\"\\u4e13\\u79d1\",\"diqu\":\"\\u5317\\u4eac\\u5e02 \\u5317\\u4eac\\u5e02 \\u5d07\\u6587\\u533a\",\"xiangxidizhi\":\"\\u4f60\\u4e00\\u4f53\\u673a\\u8def\\u864e\",\"danwei\":\"\\u725b\\u554a\\u53bb\\u4f1a\\u96c6\\u4f53\",\"danweidz\":\"\\u5317\\u4eac\\u5e02 \\u5317\\u4eac\\u5e02 \\u5d07\\u6587\\u533a\",\"dwxiangxi\":\"\\u51e0\\u5c81\\u4f1a\\u4e0d\\u4f1a\\u592a\",\"lxrgx\":\"\\u670b\\u53cb\",\"lxrxm\":\"\\u725b\\u4f1a\\u9000\",\"lxrsj\":\"15211488755\",\"lxrgx2\":\"\\u5144\\u5f1f\\/\\u59d0\\u59b9\",\"lxrxm2\":\"\\u7b2c\\u516d\\u80e1\",\"lxrsj2\":\"135546188455\"}', null, '{\"a\":\"\\/static\\/uploads\\/20190214\\/b186b9fcc3ca4d6cf9dc095c822ecf71.png\",\"b\":\"\\/static\\/uploads\\/20190214\\/638bf04f75e8dab6f4f7c19746f4abd6.png\",\"c\":\"\\/static\\/uploads\\/20190214\\/0e70f0a5bf3326c8e4201cc1081b6d7a.png\"}', '{\"name\":\"\\u82ad\\u8482\\u5a1c\",\"idcard\":\"6264997855423645\"}', null, '{\"code\":0,\"data\":{\"score\":\"661\",\"which_month\":\"2018-11\",\"create_time\":\"2018-11-10 13:49:46\",\"order_id\":\"201811101349151511986ec386cb64df\"}}', '3', '1550380058', '2', '1', '2019-02-15 00:00:00', '1', '2', '2019-01-03 20:19:31', '0');
INSERT INTO `dk_user` VALUES ('9', '13333333333', '123456', '0', '0', '0', '1000.00', '0.00', '0', '程玉慧', '320803199710154425', '{\"xueli\":\"\\u7855\\u58eb\\u7814\\u7a76\\u751f\",\"diqu\":\"\\u6c5f\\u82cf\\u7701 \\u82cf\\u5dde\\u5e02 \\u6606\\u5c71\\u5e02\",\"xiangxidizhi\":\"\\u7389\\u5c71\\u9547\",\"danwei\":\"\\u836f\\u5e97\",\"danweidz\":\"\\u6c5f\\u82cf\\u7701 \\u82cf\\u5dde\\u5e02 \\u6606\\u5c71\\u5e02\",\"dwxiangxi\":\"\\u7389\\u5c71\\u9547\",\"lxrgx\":\"\\u5b50\\u5973\",\"lxrxm\":\"\\u60a0\\u60a0\",\"lxrsj\":\"17601415862\",\"lxrgx2\":\"\\u670b\\u53cb\",\"lxrxm2\":\"\\u5f90\\u603b\",\"lxrsj2\":\"13032534400\"}', null, '{\"a\":\"\\/static\\/uploads\\/20190107\\/4a7c661c91157b2273da93770a6b745c.png\",\"b\":\"\\/static\\/uploads\\/20190107\\/21624c2465b23e18e1eb7dd0240bf94a.png\",\"c\":\"\\/static\\/uploads\\/20190107\\/eabe99fb3b63792e12fdc89c09086034.png\"}', '{\"name\":\"\\u7a0b\\u7389\\u6167\",\"idcard\":\"6217712009225448\"}', null, null, '1', '0', '1', '1', '2019-01-20 00:00:00', '1', '1', '2019-01-07 12:36:42', '0');
INSERT INTO `dk_user` VALUES ('10', '18679131211', '123123', '0', '0', '0', '0.00', '0.00', '0', '张杰', '360111122313121312', '{\"xueli\":\"\\u672c\\u79d1\",\"diqu\":\"\\u5317\\u4eac\\u5e02 \\u5317\\u4eac\\u5e02 \\u4e1c\\u57ce\\u533a\",\"xiangxidizhi\":\"\\u963f\\u65af\\u987f\\u5012\\u8428\\u963f\\u65af\\u987f\\u6253\\u7b97\",\"danwei\":\"\\u963f\\u65af\\u987f\\u6253\\u6492\\u6492\\u65e6\",\"danweidz\":\"\\u91cd\\u5e86 \\u5317\\u4eac\\u5e02 \\u4e1c\\u57ce\\u533a\",\"dwxiangxi\":\"\\u963f\\u4e09\\u6253\\u6492\\u6492\\u65e6\",\"lxrgx\":\"\\u670b\\u53cb\",\"lxrxm\":\"\\u963f\\u65af\\u987f\\u5012\\u8428\\u8428\\u963f\\u4e39\\u662f\",\"lxrsj\":\"18671231231\",\"lxrgx2\":\"\\u670b\\u53cb\",\"lxrxm2\":\"\\u554a\\u8c01\\u8bf4\\u7684\",\"lxrsj2\":\"18679131213\"}', null, '{\"a\":\"\\/static\\/uploads\\/20190112\\/e406f6000328439b6b922eac46604580.png\",\"b\":\"\\/static\\/uploads\\/20190112\\/50db08f4cb9aadd61606f656a31f3d26.png\",\"c\":\"\\/static\\/uploads\\/20190112\\/0abf80d8eadeab94170aa9dbbc77a063.png\"}', '{\"name\":\"\\u6492\\u963f\\u65af\\u987f\",\"idcard\":\"12312312312123\"}', null, null, '1', '0', '1', '0', null, '0', '1', '2019-01-12 16:36:47', '0');
INSERT INTO `dk_user` VALUES ('12', '15913172636', '898989', '0', '0', '0', '0.00', '0.00', '0', null, '0', null, null, null, null, null, null, '1', '0', '1', '0', null, '0', '1', '2019-01-13 15:43:24', '0');
INSERT INTO `dk_user` VALUES ('15', '13666777888', '123456', '0', '0', '0', '0.00', '0.00', '0', '李易峰', '421554661991523', '{\"xueli\":\"\\u672c\\u79d1\",\"diqu\":\"\\u91cd\\u5e86 \\u91cd\\u5e86 \\u4e07\\u5dde\\u533a\",\"xiangxidizhi\":\"\\u6025\\u6e9c\\u6e9c\",\"danwei\":\"\\u8bb0\\u5f55\\u4f1a\\u56de\\u6765\",\"danweidz\":\"\\u91cd\\u5e86 \\u91cd\\u5e86 \\u4e07\\u5dde\\u533a\",\"dwxiangxi\":\"\\u6025\\u6025\\u6025\\u9000\\u540e\",\"lxrgx\":\"\\u5b50\\u5973\",\"lxrxm\":\"\\u7eaa\\u5f55\\u7247\",\"lxrsj\":\"125544221133\",\"lxrgx2\":\"\\u670b\\u53cb\",\"lxrxm2\":\"\\u96c6\\u4f53\\u6237\",\"lxrsj2\":\"12848755518181\"}', null, '{\"a\":\"\\/static\\/uploads\\/20190214\\/98afe3633fd1ab941000cb9b9438b4f2.png\",\"b\":\"\\/static\\/uploads\\/20190214\\/87180d14eafe91dd8e30c91c0f73fb52.png\",\"c\":\"\\/static\\/uploads\\/20190214\\/f396c283b767d3d5a061ea60743815a8.png\"}', '{\"name\":\"\\u54e6\\u91cc\\u5c31\",\"idcard\":\"425884557221546618\"}', null, null, '1', '0', '1', '0', null, '0', '1', '2019-02-14 12:53:37', '0');
INSERT INTO `dk_user` VALUES ('16', '17321709220', '123456', '0', '0', '0', '0.00', '0.00', '0', null, '0', null, null, null, null, null, null, '1', '0', '1', '0', null, '0', '1', '2019-02-18 16:14:43', '0');
INSERT INTO `dk_user` VALUES ('17', '13388888888', '123456', '0', '0', '0', '0.00', '0.00', '0', null, '0', null, null, null, null, null, null, '1', '0', '1', '0', null, '0', '1', '2020-02-07 20:38:45', '0');
INSERT INTO `dk_user` VALUES ('18', '15588000000', '15588000000', '0', '0', '0', '0.00', '0.00', '0', null, '0', null, null, null, null, null, null, '1', '0', '1', '0', null, '0', '1', '2020-02-18 13:42:42', '0');

-- ----------------------------
-- Table structure for `dk_wallet`
-- ----------------------------
DROP TABLE IF EXISTS `dk_wallet`;
CREATE TABLE `dk_wallet` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `uid` varchar(255) NOT NULL,
  `money` decimal(8,2) DEFAULT '0.00',
  `addtime` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_wallet
-- ----------------------------
INSERT INTO `dk_wallet` VALUES ('1', '涂品红', '715735208685094', '6217997110003833246', '7', '45000.00', '2019-11-12 09:07:48', '3');

-- ----------------------------
-- Table structure for `dk_zixun`
-- ----------------------------
DROP TABLE IF EXISTS `dk_zixun`;
CREATE TABLE `dk_zixun` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of dk_zixun
-- ----------------------------
INSERT INTO `dk_zixun` VALUES ('15', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>153××××2254的用户成功借款47000元</span><span><o:p></o:p></span></p>', '2018-12-12 21:46:14');
INSERT INTO `dk_zixun` VALUES ('16', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>133××××6546的用户成功借款18000元</span></p>', '2018-12-12 21:46:24');
INSERT INTO `dk_zixun` VALUES ('17', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>136××××2572的用户成功借款33000元</span><span><o:p></o:p></span></p>', '2018-12-12 21:46:54');
INSERT INTO `dk_zixun` VALUES ('18', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>139××××5785的用户成功借款46000元</span><span><o:p></o:p></span></p>', '2018-12-12 21:47:08');
INSERT INTO `dk_zixun` VALUES ('19', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>137××××0545的用户成功借款25000元</span><span><o:p></o:p></span></p>', '2018-12-12 23:05:56');
INSERT INTO `dk_zixun` VALUES ('20', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>188××××7498的用户成功借款43000元</span></p>', '2018-12-12 23:06:07');
INSERT INTO `dk_zixun` VALUES ('21', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>187××××7653的用户成功借款50000元</span></p>', '2018-12-12 23:07:45');
INSERT INTO `dk_zixun` VALUES ('22', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>177××××8566的用户成功借款29000元</span><span><o:p></o:p></span></p>', '2018-12-12 23:07:55');
INSERT INTO `dk_zixun` VALUES ('23', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>153××××6653的用户成功借款33000元</span></p>', '2018-12-12 23:08:01');
INSERT INTO `dk_zixun` VALUES ('24', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>138××××8812的用户成功借款45000元</span><span><o:p></o:p></span></p>', '2018-12-12 23:08:07');
INSERT INTO `dk_zixun` VALUES ('25', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>188××××7596的用户成功借款46000元</span><span><o:p></o:p></span></p>', '2018-12-12 23:08:22');
INSERT INTO `dk_zixun` VALUES ('26', '<p class=\"MsoNormal\"><span><font face=\"sans-serif\">恭喜尾号</font>136××××0445的用户成功借款29000元</span><span><o:p></o:p></span></p>', '2018-12-12 23:08:36');

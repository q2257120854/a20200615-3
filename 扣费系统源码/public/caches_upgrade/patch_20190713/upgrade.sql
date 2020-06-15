/*
Navicat MySQL Data Transfer

Source Server         : phpstudy
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : koufei

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-04-02 17:33:29
*/

SET FOREIGN_KEY_CHECKS=0;

--
-- 新增微信支付菜单
--

INSERT INTO `kf_menu` (`id`, `name`, `pid`, `sort`, `module`, `url`, `is_hide`, `is_shortcut`, `icon`, `status`, `update_time`, `create_time`) VALUES
(245,'微信支付',232,0,'admin','payment/wechatpay',0,0,'fa-weixin',1,1562807627,1562807627);

DELETE FROM `kf_menu` WHERE id=241;
--
-- 新增chongzhi表字段
--
ALTER TABLE `kf_chongzhi`
ADD `pay_order` VARCHAR(100) NULL DEFAULT '' COMMENT '订单号' AFTER `status`,
ADD `pay_status` tinyint(1) NULL DEFAULT 0 COMMENT '是否支付' AFTER `pay_order`;

--
-- 修改权限组权限
--

UPDATE `kf_auth_group` SET rules='1,210,16,212,209,211,213,216,233,234,236,238,214,215,217,218,219,221,226,223,232,225,231,241,224' WHERE id=18;
UPDATE `kf_auth_group` SET rules='1,210,213,216,234,236,238,214,215,218,219,226,223,232,225,241,224' WHERE id=19;
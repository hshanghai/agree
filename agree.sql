/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50622
 Source Host           : 127.0.0.1
 Source Database       : agree

 Target Server Type    : MySQL
 Target Server Version : 50622
 File Encoding         : utf-8

 Date: 11/17/2015 15:16:27 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `activity`
-- ----------------------------
DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `total` int(10) DEFAULT '0',
  `support` int(10) DEFAULT '0',
  `activity_switch` int(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `activity`
-- ----------------------------
BEGIN;
INSERT INTO `activity` VALUES ('1', '我要承诺1', '132', '50', '1'), ('2', '我要承诺2', '1', '1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `create_time` int(100) NOT NULL,
  `last_time` int(100) NOT NULL,
  `last_ip` varchar(100) NOT NULL,
  `action_list` text,
  `nav_list` text,
  `role_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `admin_user`
-- ----------------------------
BEGIN;
INSERT INTO `admin_user` VALUES ('2', 'han', '83832391027a1f2f4d46ef882ff3a47d', '某xx管理员', '0', '0', '', null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `agree_id` int(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `m_del` int(4) DEFAULT '0',
  `create_time` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `message`
-- ----------------------------
BEGIN;
INSERT INTO `message` VALUES ('5', '1', '啊水电费', '啊水电费', '啊水电费', '0', '1447660597'), ('6', '1', '水电费嘎的', '撒发', '安师大发送', '0', '1447662755'), ('7', '1', '暗示法大厦', '啊水电费', '安师大', '0', '1447663300'), ('8', '1', '暗室逢灯', '安师大', '安师大', '0', '1447725759'), ('9', '1', '暗示法', 'as', 'as', '0', '1447725780'), ('10', '1', '安师大', '安师大', '安师大', '0', '1447725957'), ('11', null, 'asf', 'asfd', 'asdf', '0', '1447743634'), ('12', null, 'asfq', 'asfdqqqqqqq', 'asdfqqqq', '0', '1447743657'), ('13', null, '1', '11111', '11', '0', '1447743697'), ('14', '1', '1', '1111', '11111', '0', '1447743775'), ('15', '1', 'aaaaa', 'aaaa', 'aaaaa', '0', '1447743888'), ('16', '1', 'aaaaa', 'aaaa', 'aaaaa11111', '0', '1447743915'), ('17', '2', '2', '2', '2', '0', '1447744396'), ('18', '2', '22', '22', '22', '0', '1447744455');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

/*
Navicat MySQL Data Transfer

Source Server         : school
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : huawei

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-10-25 20:46:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_model
-- ----------------------------
DROP TABLE IF EXISTS `admin_model`;
CREATE TABLE `admin_model` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `password` char(255) DEFAULT '',
  `create_time` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_model
-- ----------------------------
INSERT INTO `admin_model` VALUES ('0000000001', 'admin', '123123', '2017-10-11 22:25:45', '0.0.0.0');
INSERT INTO `admin_model` VALUES ('0000000003', '1', '121212', '2017-10-14 22:10:48', '0.0.0.0');
INSERT INTO `admin_model` VALUES ('0000000010', 'qwq1222', '111111', '2017-10-14 22:25:50', '0.0.0.0');

-- ----------------------------
-- Table structure for news_model
-- ----------------------------
DROP TABLE IF EXISTS `news_model`;
CREATE TABLE `news_model` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_model
-- ----------------------------
INSERT INTO `news_model` VALUES ('0000000001', 'frost & sullivan：华为sdm市场份额保持业界领先', 'Frost & Sullivan：华为SDM市场份额保持业界领先', 'ding', '2017-10-11 22:56:29', '全球著名咨询公司Frost & Sullivan最新发布《全球用户数据管理（SDM）市场研究白皮书》，该白皮书显示，2016年华为SDM解决方案基于收入的市场份额，以32.92%占比保持业界领先。');
INSERT INTO `news_model` VALUES ('0000000002', '华为在itu世界电信大会发布无线宽带产业白皮书', '华为在ITU世界电信大会发布无线宽带产业白皮书', 'ding', '2017-10-11 22:57:04', '近日，国际电信联盟2017年世界电信展期间，华为发布《无线宽带产业白皮书》，就这个主题进行深入阐述。白皮书指出，截至2030年，全球将有10亿家庭通过无线技术实现宽带连接。基于4G的无线宽带家庭用户发展迅猛，2015年以来实现了逐年翻番，全球用户总数已经超过5000万。通过有线和无线技术的互补协同应用，将极大地促进ITU Connect 2020战略目标的达成。');
INSERT INTO `news_model` VALUES ('0000000003', '关于公司轮值ceo的当值公告', '关于公司轮值CEO的当值公告', 'ding', '2017-10-11 22:57:36', '根据公司轮值CEO制度，2017年10月1日～2018年3月31日期间由胡厚崑先生当值轮值CEO。轮值CEO是公司经营管理以及危机管理的最高责任人，并根据授权，召集和主持公司董事会常务委员会和经营管理团队的相关会议。');
INSERT INTO `news_model` VALUES ('0000000005', 'qw', 'qw', 'qw', '2017-10-14 22:53:19', 'qw');

-- ----------------------------
-- Table structure for upload_model
-- ----------------------------
DROP TABLE IF EXISTS `upload_model`;
CREATE TABLE `upload_model` (
  `id` int(255) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `picurl` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT '',
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of upload_model
-- ----------------------------
INSERT INTO `upload_model` VALUES ('000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001', '1', '1', '1', '1', null);
INSERT INTO `upload_model` VALUES ('000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000003', '12', '1222', null, '122', null);
INSERT INTO `upload_model` VALUES ('000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000010', '333', '333', null, '333', '2017-10-23 16:45:52');
INSERT INTO `upload_model` VALUES ('000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000011', '', null, null, null, '2017-10-23 16:48:02');
INSERT INTO `upload_model` VALUES ('000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000012', '123321', '123321', null, '123321', '2017-10-23 16:57:07');
INSERT INTO `upload_model` VALUES ('000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000013', '2332', '2323', null, '2323', '2017-10-23 16:57:35');

-- ----------------------------
-- Table structure for user_model
-- ----------------------------
DROP TABLE IF EXISTS `user_model`;
CREATE TABLE `user_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT '',
  `password` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `sex` int(12) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_model
-- ----------------------------
INSERT INTO `user_model` VALUES ('1', '1', '1', '123123@qq.com', '1', null, '0.0.0.0');
INSERT INTO `user_model` VALUES ('2', 'admin', '123123', '1820599419@qq.com', '1', '2017-10-11 22:47:46', '0.0.0.0');

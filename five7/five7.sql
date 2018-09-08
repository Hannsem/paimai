/*
Navicat MySQL Data Transfer

Source Server         : five
Source Server Version : 50560
Source Host           : 118.24.65.162:3306
Source Database       : five7

Target Server Type    : MYSQL
Target Server Version : 50560
File Encoding         : 65001

Date: 2018-09-08 15:55:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_login
-- ----------------------------
DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL COMMENT '管理员账号',
  `password` varchar(255) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin_login
-- ----------------------------
INSERT INTO `admin_login` VALUES ('1', 'admin', 'fce0a1cdf93afd042d981082c33d325a');
INSERT INTO `admin_login` VALUES ('2', 'ostech', null);
INSERT INTO `admin_login` VALUES ('3', 'ostech', null);
INSERT INTO `admin_login` VALUES ('4', 'ostech', null);
INSERT INTO `admin_login` VALUES ('5', 'ostech', null);
INSERT INTO `admin_login` VALUES ('6', 'ostech', null);
INSERT INTO `admin_login` VALUES ('7', 'ostech', null);
INSERT INTO `admin_login` VALUES ('8', 'ostech', null);
INSERT INTO `admin_login` VALUES ('9', 'ostech', null);
INSERT INTO `admin_login` VALUES ('10', 'ostech', null);
INSERT INTO `admin_login` VALUES ('11', 'ostech', null);
INSERT INTO `admin_login` VALUES ('12', 'ostech', null);

-- ----------------------------
-- Table structure for admin_shops
-- ----------------------------
DROP TABLE IF EXISTS `admin_shops`;
CREATE TABLE `admin_shops` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '' COMMENT '商品名',
  `imgs` text COMMENT '商品图片',
  `money` float DEFAULT NULL COMMENT '价格',
  `type` enum('0','1') DEFAULT NULL COMMENT '0:秒杀  1：拍卖',
  `minmoney` int(20) DEFAULT NULL COMMENT '最小加价',
  `details` text COMMENT '商品描述',
  `deposit` int(255) DEFAULT NULL COMMENT '押金',
  `starttime` int(255) DEFAULT NULL,
  `endtime` int(255) DEFAULT NULL,
  `shops_type` enum('1','0') DEFAULT NULL COMMENT '商品拍卖或秒杀是否已经结束； 0：否，1：是',
  `isdeposit` enum('1','0') DEFAULT '0' COMMENT '该商品是否有人出价',
  `isrefund` enum('1','0') DEFAULT '0' COMMENT '是否已退还除中拍者之外用户的押金 0：否   1：是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin_shops
-- ----------------------------
INSERT INTO `admin_shops` VALUES ('25', '2', 'http://pe7pyoxdg.bkt.clouddn.com/five7/image_5c4a325d6ce283054c194150a831141f.png', '1', '1', '12', '212', '2', '1535961649', '1535991649', '0', '1', '0');
INSERT INTO `admin_shops` VALUES ('26', '12', 'http://pe7pyoxdg.bkt.clouddn.com/five7/image_5796cd8cfd87115696d98473349a7d30.png', '12', '1', '12', '21', '12', '1535961649', '1535991649', '0', '1', '0');
INSERT INTO `admin_shops` VALUES ('27', '123', 'http://pe7pyoxdg.bkt.clouddn.com/five7/image_3428b05b6906c988c21a77e379814c86.png', '213', '1', '123', '132', '123', '1535961649', '1535991649', '0', '1', '0');
INSERT INTO `admin_shops` VALUES ('28', '123', 'http://pe7pyoxdg.bkt.clouddn.com/five7/image_a5cf03d8150fc7158ce6f81ae6f6d360.png', '123', '1', '1', '111', '11', '1535961649', '1535991649', '0', '1', '0');
INSERT INTO `admin_shops` VALUES ('29', '搜索', 'http://pe7pyoxdg.bkt.clouddn.com/five7/image_4ce8566bc3b49d93fc8ae0919a7d8990.png', '1', '1', '2', '1', '2', '1535961649', '1535991649', '0', '1', '0');
INSERT INTO `admin_shops` VALUES ('30', '呃呃', 'http://pe7pyoxdg.bkt.clouddn.com/five7/image_2838a104d7ea35f63295ba990954ede1.png', '1', '1', '2', '12', '2', '1535961649', '1539999649', '0', '1', '0');
INSERT INTO `admin_shops` VALUES ('31', 'sad', 'http://pe7pyoxdg.bkt.clouddn.com/five7/image_cabef8684eb65c8be933eb541b5b3039.png', '12', '1', '1', 'faffafafadsfsa', '12', '1535962202', '1535998202', '0', '1', '0');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sn` varchar(255) DEFAULT NULL COMMENT '订单号',
  `buyerid` int(255) DEFAULT NULL COMMENT '购买者ID',
  `shopsname` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '商品名称',
  `type` enum('1','0') DEFAULT NULL COMMENT '订单商品的类型 0:秒杀 1拍卖',
  `pay_type` enum('3','2','1','0') DEFAULT '0' COMMENT '支付状态  0：待支付  1：待发货  2：待收货 3：已完成',
  `money` int(255) DEFAULT NULL COMMENT '价格',
  `pay_time` int(255) DEFAULT NULL COMMENT '支付时间（时间戳）',
  `shopsid` int(255) DEFAULT NULL COMMENT '商品ID',
  `ordertime` int(255) DEFAULT NULL COMMENT '订单生成时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for shop_login
-- ----------------------------
DROP TABLE IF EXISTS `shop_login`;
CREATE TABLE `shop_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `money` float(255,0) DEFAULT NULL COMMENT '用户余额',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of shop_login
-- ----------------------------
INSERT INTO `shop_login` VALUES ('1', '1', '2', null);
INSERT INTO `shop_login` VALUES ('7', '1231', '123', null);
INSERT INTO `shop_login` VALUES ('8', '11', '111', null);
INSERT INTO `shop_login` VALUES ('9', 'xxx', '12', '16');

-- ----------------------------
-- Table structure for shops_auction
-- ----------------------------
DROP TABLE IF EXISTS `shops_auction`;
CREATE TABLE `shops_auction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) DEFAULT NULL COMMENT '商品id',
  `uid` int(11) DEFAULT NULL COMMENT '用户id',
  `money` float(255,0) DEFAULT NULL COMMENT '用户出价',
  `isdeposit` enum('1','0') DEFAULT '0' COMMENT '是否缴纳押金',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of shops_auction
-- ----------------------------
INSERT INTO `shops_auction` VALUES ('1', '23', '1', '1223', '1');
INSERT INTO `shops_auction` VALUES ('2', '23', '7', '123', '0');
INSERT INTO `shops_auction` VALUES ('4', '31', '7', '22', '0');
INSERT INTO `shops_auction` VALUES ('5', '31', '1', '32', '0');
INSERT INTO `shops_auction` VALUES ('12', '26', '1', '0', '1');
INSERT INTO `shops_auction` VALUES ('13', '26', '7', '0', '1');
INSERT INTO `shops_auction` VALUES ('14', '30', '8', '123', '1');
INSERT INTO `shops_auction` VALUES ('15', '27', '9', '123', '1');
INSERT INTO `shops_auction` VALUES ('16', '28', '1', '99999', '1');
INSERT INTO `shops_auction` VALUES ('17', '30', '7', '999', '1');
INSERT INTO `shops_auction` VALUES ('18', '27', '1', '9999', '1');
INSERT INTO `shops_auction` VALUES ('19', '27', '8', '8888', '1');
INSERT INTO `shops_auction` VALUES ('20', '27', '9', '666', '1');
INSERT INTO `shops_auction` VALUES ('23', '30', '9', '2345', '1');

-- ----------------------------
-- View structure for settlement
-- ----------------------------
DROP VIEW IF EXISTS `settlement`;
CREATE ALGORITHM=UNDEFINED DEFINER=`five7`@`%` SQL SECURITY DEFINER VIEW `settlement` AS select `shops_auction`.`sid` AS `sid`,`shops_auction`.`uid` AS `uid`,`shops_auction`.`money` AS `money`,`shop_login`.`name` AS `username`,`admin_shops`.`name` AS `shopname`,`admin_shops`.`deposit` AS `deposit` from ((`admin_shops` join `shops_auction` on((`admin_shops`.`id` = `shops_auction`.`sid`))) join `shop_login` on((`shops_auction`.`uid` = `shop_login`.`id`))) ;

-- ----------------------------
-- Procedure structure for aa
-- ----------------------------
DROP PROCEDURE IF EXISTS `aa`;
DELIMITER ;;
CREATE DEFINER=`five7`@`%` PROCEDURE `aa`()
BEGIN

insert into admin_login(username) values("ostech");

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for in_param
-- ----------------------------
DROP PROCEDURE IF EXISTS `in_param`;
DELIMITER ;;
CREATE DEFINER=`five7`@`%` PROCEDURE `in_param`(IN p_in int)
BEGIN
    SELECT p_in;
    SET p_in=2;
    SELECT p_in;
    END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for proc_dd
-- ----------------------------
DROP PROCEDURE IF EXISTS `proc_dd`;
DELIMITER ;;
CREATE DEFINER=`five7`@`%` PROCEDURE `proc_dd`()
BEGIN
    #Routine body goes here...
	SELECT * FROM admin_login;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for proc_timer
-- ----------------------------
DROP PROCEDURE IF EXISTS `proc_timer`;
DELIMITER ;;
CREATE DEFINER=`five7`@`%` PROCEDURE `proc_timer`(in time INT)
BEGIN

select unix_timestamp(now());


END
;;
DELIMITER ;

-- ----------------------------
-- Event structure for event1
-- ----------------------------
DROP EVENT IF EXISTS `event1`;
DELIMITER ;;
CREATE DEFINER=`five7`@`%` EVENT `event1` ON SCHEDULE AT '2018-08-31 16:40:00' ON COMPLETION NOT PRESERVE ENABLE DO insert into admin_login(username) values("ostech")
;;
DELIMITER ;

-- ----------------------------
-- Event structure for event2
-- ----------------------------
DROP EVENT IF EXISTS `event2`;
DELIMITER ;;
CREATE DEFINER=`five7`@`%` EVENT `event2` ON SCHEDULE EVERY 30 SECOND STARTS '2018-08-31 16:49:40' ON COMPLETION PRESERVE DISABLE DO call aa
;;
DELIMITER ;

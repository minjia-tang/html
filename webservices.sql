/*
Navicat MySQL Data Transfer

Source Server         : vb small webservice
Source Server Version : 50544
Source Host           : localhost:3306
Source Database       : webservices

Target Server Type    : MYSQL
Target Server Version : 50544
File Encoding         : 65001

Date: 2016-02-28 20:25:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user_logs
-- ----------------------------
DROP TABLE IF EXISTS `user_logs`;
CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_logs
-- ----------------------------
INSERT INTO `user_logs` VALUES ('1', '1', '2016-02-28 19:49:35');
INSERT INTO `user_logs` VALUES ('2', '1', '2016-02-28 20:00:43');
INSERT INTO `user_logs` VALUES ('3', '2', '2016-02-28 20:18:33');
INSERT INTO `user_logs` VALUES ('4', '2', '2016-02-28 20:19:41');
INSERT INTO `user_logs` VALUES ('5', '2', '2016-02-28 20:22:25');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(512) NOT NULL,
  `password` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'minjia.tang@gmail.com', '60bd6d8aac2734fb6210360da916d63b');
INSERT INTO `users` VALUES ('2', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6');

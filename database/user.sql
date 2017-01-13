/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : yiimyweb

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-01-13 09:05:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation_token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmation_sent_at` int(11) DEFAULT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recovery_token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recovery_sent_at` int(11) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registered_from` int(11) DEFAULT NULL,
  `logged_in_from` int(11) DEFAULT NULL,
  `logged_in_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL COMMENT 'แผนก',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อ-สกุล',
  `position_id` int(11) DEFAULT NULL COMMENT 'ตำแหน่ง',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`) USING BTREE,
  UNIQUE KEY `user_unique_email` (`email`) USING BTREE,
  UNIQUE KEY `user_confirmation` (`id`,`confirmation_token`) USING BTREE,
  UNIQUE KEY `user_recovery` (`id`,`recovery_token`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin@localhost.com', '$2y$12$DvcMXd04bknxhcHCLf1Fe.I02Qem7HA0lzvMZGzVc8ogR8l5UXmlq', 'VsxlywzLIp_ofT7yVhYuzMarANliXIY0', null, null, null, null, null, null, null, null, null, null, '1484210028', '1484210028', '::1', '1484271623', null, null, null, null);
INSERT INTO `user` VALUES ('2', 'user', 'user@localhost.com', '$2y$12$B3MjrKVBBJNSJBpHuBfL0OIdpCHsZnVkVxxEpgkHs2jfBYf.2tPjW', '-D1sEix1etHu65cySfCk4VQXariQtdTB', null, null, null, null, null, null, null, null, null, null, '1484210062', '1484210062', '::1', '1484210599', null, null, null, null);
INSERT INTO `user` VALUES ('3', 'manager', 'manager@localhost.com', '$2y$12$sZhQProubH62ThoAQJUJaO9qbqFGnUJvA5hpOhZxIXfsnpaeNHgsy', 'erlOvfTd4WK7fMFaP2I-vPpA9Jx9MkkS', null, null, null, null, null, null, null, null, null, null, '1484210084', '1484210084', '::1', null, null, null, null, null);

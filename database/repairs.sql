/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : yiimyweb

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2017-01-12 22:16:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for repairs
-- ----------------------------
DROP TABLE IF EXISTS `repairs`;
CREATE TABLE `repairs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL COMMENT 'ฝ่าย/งาน',
  `datenotuse` date DEFAULT NULL COMMENT 'วันที่อุปกรณ์เสีย',
  `tool_id` int(11) DEFAULT NULL COMMENT 'อุปกรณ์',
  `problem` mediumtext NOT NULL COMMENT 'ปัญหาที่ซ่อม',
  `stage` enum('รอได้ภายใน 3 วัน','รอได้ภายใน 7 วัน','รอได้ภายใน 1 วัน') DEFAULT 'รอได้ภายใน 3 วัน' COMMENT 'ระยะรอคอย',
  `startdate` date DEFAULT NULL COMMENT 'วันที่รับซ่อม',
  `satatus` enum('รอรับงาน','รับงานแล้ว') DEFAULT 'รอรับงาน' COMMENT 'สถานะการแจ้ง',
  `dateplan` date DEFAULT NULL COMMENT 'กำหนดเสร็จภายในวันที่',
  `remark` mediumtext COMMENT 'ช่างอธิบาย',
  `answer` enum('รอซ่อม','กำลังซ่อม','ซ่อมเสร็จแล้ว','ซ่อมไม่ได้') DEFAULT 'รอซ่อม' COMMENT 'ช่างสรุปงาน',
  `enddate` date DEFAULT NULL COMMENT 'วันซ่อมเสร็จ',
  `user_id` int(11) NOT NULL COMMENT 'ผู้บันทึก',
  `createDate` date DEFAULT NULL COMMENT 'วันส่งซ่อม',
  `updateDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `approve` enum('อนุมัติ-ซ่อมเอง','อนุมัติ-เคลม','อนุมัติ-ช่างนอก','ไม่อนุมัติ','รอพิจารณา') DEFAULT 'รอพิจารณา' COMMENT 'ความเห็นหัวหน้า',
  PRIMARY KEY (`id`),
  KEY `fk_repairs_tools1_idx1` (`tool_id`) USING BTREE,
  KEY `fk_repairs_departments1_idx` (`department_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='ซ่อมบำรุง';

/*
 Navicat Premium Data Transfer

 Source Server         : zhn_wangzan
 Source Server Type    : MySQL
 Source Server Version : 50650
 Source Host           : 106.55.52.168:3306
 Source Schema         : wangzhan_zhnjiu

 Target Server Type    : MySQL
 Target Server Version : 50650
 File Encoding         : 65001

 Date: 10/01/2022 17:34:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for zhnjiu_act
-- ----------------------------
DROP TABLE IF EXISTS `zhnjiu_act`;
CREATE TABLE `zhnjiu_act`  (
  `act_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `act_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片',
  `act_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '跳转的地址',
  `create_time` datetime NULL DEFAULT NULL COMMENT '创建的时间',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题',
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态：\r\n1：品牌活动\r\n2：紫红泥文景\r\n3：紫红泥研究院',
  PRIMARY KEY (`act_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 87 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of zhnjiu_act
-- ----------------------------
INSERT INTO `zhnjiu_act` VALUES (63, 'upload/brandNews/20211108/4713b982a58ff77accd4a950dfdfb585.jpg', 'mp.weixin.qq.com/s/GoDxgwDmOU1EgbDl5YWEoQ', '2021-11-08 03:32:34', '茅台镇酱香明星紫红泥正式提出“大产能、大品牌、大品质、大腾飞”的发展战略', '1');
INSERT INTO `zhnjiu_act` VALUES (52, 'upload/brandNews/20211105/4ac6e966638967cef92cc35be78c0162.png', 'mp.weixin.qq.com/s/rWP-_sCIkt2dMF3S9zKeTA', '2021-11-05 04:49:01', '紫红泥走进茅台镇系列之二——茅台镇“三大烧坊”的前世今生', '2');
INSERT INTO `zhnjiu_act` VALUES (29, 'upload/brandNews/20211105/b2fa6ba79bb26b1cfa57a83a06e3b2ea.png', 'mp.weixin.qq.com/s/sNeeMVp3OmvHqK3UZral8Q', '2021-11-05 01:19:32', '茅台镇顶级酱香酒“得产能者得天下”？', '3');
INSERT INTO `zhnjiu_act` VALUES (64, 'upload/brandNews/20211108/319efcf64872ac2ee58b2c4b5c1dd011.jpg', 'mp.weixin.qq.com/s/Of8-m3GLA_Vuk7TffLvrrw', '2021-11-08 03:32:55', '仁怀市委书记黄兴文考察茅台镇“紫红泥”项目', '1');
INSERT INTO `zhnjiu_act` VALUES (51, 'upload/brandNews/20211105/1c6b811fc0ad1cbbbb5f9b8b72fbaf5e.png', 'mp.weixin.qq.com/s/2d3sz4Udl0HKJmnhf6JduA', '2021-11-05 04:47:56', '紫红泥走进茅台镇系列之一——茅台镇悠长的历史', '2');
INSERT INTO `zhnjiu_act` VALUES (30, 'upload/brandNews/20211105/3b882cc3fd3405b29db8e024548650fc.png', 'mp.weixin.qq.com/s/Hzp-HyWcTGWaoc5ULskbuw', '2021-11-05 01:22:40', '为什么茅台镇顶级酱香酒“大产能”才能培养出“大品牌”？', '3');
INSERT INTO `zhnjiu_act` VALUES (31, 'upload/brandNews/20211105/40520ba4da45eaa5842cf7b9355ab16d.png', 'mp.weixin.qq.com/s/5IHVdN_pr19ToE5Gz7s52A', '2021-11-05 01:25:17', '为什么茅台镇几百家小酒企难出“大品牌”', '3');
INSERT INTO `zhnjiu_act` VALUES (32, 'upload/brandNews/20211105/5a37022b828e72cbd88cca4bda9c3339.png', 'mp.weixin.qq.com/s/reh3tFuvs8lb76BQ1-PL2Q', '2021-11-05 01:25:50', '细说人生中的八大酒局，看看你都参加过哪种？', '3');
INSERT INTO `zhnjiu_act` VALUES (33, 'upload/brandNews/20211105/8598adb52f228c1f8e2dca0432ffe2c6.png', 'mp.weixin.qq.com/s/gati-oFVp-XpfopL8D4Wew', '2021-11-05 01:31:32', '为什么茅台镇顶级酱香酒喝了就断不了？', '3');
INSERT INTO `zhnjiu_act` VALUES (34, 'upload/brandNews/20211105/44cc2758ceea13214f690a7c11208952.png', 'mp.weixin.qq.com/s/PJ43PqrwvUArE0ag9fHGlg', '2021-11-05 01:33:12', '茅台镇酱香酒如何“一统”白酒江湖？', '3');
INSERT INTO `zhnjiu_act` VALUES (35, 'upload/brandNews/20211105/2016cfc2b30711240659bcb18b9660c6.png', 'mp.weixin.qq.com/s/d2lHuCQFdZ3Xb1xOmtcLoA', '2021-11-05 01:36:08', '茅台镇酱香酒，如何与“热潮”共舞', '3');
INSERT INTO `zhnjiu_act` VALUES (36, 'upload/brandNews/20211105/731ca29bcb3da12aaf9cf1c93131592d.png', 'mp.weixin.qq.com/s/z4HwAifw7x8e1ueXv-aT-Q', '2021-11-05 01:37:15', '茅台镇酱香酒有没有“通天”的未来？', '3');
INSERT INTO `zhnjiu_act` VALUES (37, 'upload/brandNews/20211105/0cd1630c55e7b82c757e0b1b5800371f.png', 'mp.weixin.qq.com/s/otwRca5ydyb8a1eADtXV2w', '2021-11-05 01:38:02', '紫红泥走进茅台镇系列之三——茅台镇的“天、地、水、粮”', '3');
INSERT INTO `zhnjiu_act` VALUES (38, 'upload/brandNews/20211105/1b3076c52a89ef74796f49ebd7748612.png', 'mp.weixin.qq.com/s/zGK7Xrja_9iiWCeTN6hLrw', '2021-11-05 01:38:36', '紫红泥走进茅台镇系列之四——茅台镇酱香酒的“大周期”', '3');
INSERT INTO `zhnjiu_act` VALUES (39, 'upload/brandNews/20211105/a5e52783f6a27232bd29057db3da16ad.png', 'mp.weixin.qq.com/s/WymIwQpk3U9gEGSx9vP0Wg', '2021-11-05 01:39:59', '紫红泥走进茅台镇之五——“茅台镇酱香酒的产业生态链”', '3');
INSERT INTO `zhnjiu_act` VALUES (40, 'upload/brandNews/20211105/7d9e608dd7beaeb4a8908faa400458f3.png', 'mp.weixin.qq.com/s/PXTVCTBIdi5dLx9xFOenLg', '2021-11-05 01:43:41', '紫红泥茅台镇酱酒实体经济之一：茅台镇酱香酒的起源', '3');
INSERT INTO `zhnjiu_act` VALUES (41, 'upload/brandNews/20211105/12b3c071b18b2e531f452616393c8fd7.png', 'mp.weixin.qq.com/s/mhr34M0_OStqdl79y3hOQg', '2021-11-05 01:44:58', '紫红泥茅台镇酱酒实体经济之二——茅台镇酱香酒的工匠精神', '3');
INSERT INTO `zhnjiu_act` VALUES (42, 'upload/brandNews/20211105/37e1c6bd0c38e9d0492579006c74f7fb.png', 'mp.weixin.qq.com/s/t11IM89QC_9C1RzsXYLuew', '2021-11-05 01:45:56', '紫红泥茅台镇酱酒实体经济之三——茅台镇酱香酒的全产业链', '3');
INSERT INTO `zhnjiu_act` VALUES (43, 'upload/brandNews/20211105/924f9f00bcb01c4efaa4fa07f5a7f84a.png', 'mp.weixin.qq.com/s/4kLdJlv4myEU4O93Wb8mtA', '2021-11-05 01:47:38', '紫红泥茅台镇酱酒实体经济之四——茅台镇酱香酒经济发展的历史脉络', '3');
INSERT INTO `zhnjiu_act` VALUES (44, 'upload/brandNews/20211105/289cfd7b8dba1e5e2a85486a8d9a510d.png', 'mp.weixin.qq.com/s/6U5BDelJWGA0GsxP6rl96w', '2021-11-05 01:48:36', '紫红泥茅台镇酱酒实体经济之五——茅台镇酱香酒经济发展的未来', '3');
INSERT INTO `zhnjiu_act` VALUES (45, 'upload/brandNews/20211105/388ba9207c90d70e3b4d0d5e67f35c5d.png', 'mp.weixin.qq.com/s/k4rW99qFMm5wTEqM9gjNRg', '2021-11-05 01:49:20', '紫红泥茅台镇酱酒实体经济之六——茅台镇酱香酒产业链与共同富裕', '3');
INSERT INTO `zhnjiu_act` VALUES (46, 'upload/brandNews/20211105/a115e8c1327f91c091e83e9c4f2681c1.png', 'mp.weixin.qq.com/s/uTMyKzEijE9BTFQT-0M7sg', '2021-11-05 01:57:50', '紫红泥酱酒市场研究之一——从洋酒冷到酱香热，广东洋酒为何不香', '3');
INSERT INTO `zhnjiu_act` VALUES (47, 'upload/brandNews/20211105/675d86ca541f204209d815cab0bea079.png', 'mp.weixin.qq.com/s/MCbAVe1O6kuxVVML7C2Jmw', '2021-11-05 03:33:21', '紫红泥飘香，中秋封坛忙', '1');
INSERT INTO `zhnjiu_act` VALUES (48, 'upload/brandNews/20211105/1f8e5a7740c8c6a0da0f8ba834ed412d.png', 'mp.weixin.qq.com/s/1WVl7GZfU9XCfO_9P2xxmw', '2021-11-05 03:37:21', '紫红泥与爱同行，中秋深情慰问仁怀市儿童福利院', '1');
INSERT INTO `zhnjiu_act` VALUES (49, 'upload/brandNews/20211105/00a19eedc9e659acd0f9b23b5222204f.png', 'mp.weixin.qq.com/s/Zxd5W-bqVS2tf5CCNx6e3g', '2021-11-05 03:39:19', '热烈祝贺“北大校友企业家紫红泥茅台镇实体经济探索之旅”圆满成功！', '1');
INSERT INTO `zhnjiu_act` VALUES (50, 'upload/brandNews/20211105/d49508883ce61c41494a05d50643db78.png', 'mp.weixin.qq.com/s/WQNowel_IDTHN5ERPBYZHA', '2021-11-05 03:40:11', '紫红泥-茅台镇酱香酒明星，全国品牌推广重磅来袭！', '1');
INSERT INTO `zhnjiu_act` VALUES (61, 'upload/brandNews/20211108/f53ab07a066c4cb34e981adadf5d1fa7.jpg', 'mp.weixin.qq.com/s/2sIOJf_pEOWxrA31xY8_JQ', '2021-11-08 03:31:34', '祝贺酱香“名酒”“紫红泥”入驻酱酒文化街', '1');
INSERT INTO `zhnjiu_act` VALUES (62, 'upload/brandNews/20211108/22cf19aa0e9780bcf550f4b80cba0824.jpg', 'mp.weixin.qq.com/s/EfQSYXzVK9r-cGK57Se9ow', '2021-11-08 03:32:04', '仁怀市领导莅临紫红泥指导工作！', '1');
INSERT INTO `zhnjiu_act` VALUES (65, 'upload/brandNews/20211108/b164a896994a3a5440f384c6eeb15c74.jpg', 'mp.weixin.qq.com/s/xqm8YS8q8edctGPm60TNnw', '2021-11-08 03:33:12', '重阳下沙季，紫红泥正式启动“紫红泥2020酿季投粮仪式”', '1');
INSERT INTO `zhnjiu_act` VALUES (66, 'upload/brandNews/20211108/574ea36284d5a7b39cbd87822fcd573e.jpg', 'mp.weixin.qq.com/s/M1BPcPDL846iVxqtxyf-5A', '2021-11-08 03:36:00', '茅台镇酱香明星“紫红泥”隆重列入《贵州省2020年重大工程与重大项目名录》', '1');
INSERT INTO `zhnjiu_act` VALUES (68, 'upload/brandNews/20211108/f7880b7a888534e3321cb256f9be671e.jpg', 'mp.weixin.qq.com/s/mQNEHc0BYsBAlJZmn2FNTA', '2021-11-08 03:37:18', '紫红泥热烈祝贺“科翔股份”上市活动及答谢晚宴圆满成功', '1');
INSERT INTO `zhnjiu_act` VALUES (69, 'upload/brandNews/20211108/d6c8a92b8cf439016146e3e8da495008.jpg', 'mp.weixin.qq.com/s/sWGI-bsXWZOWmh4P563ubQ', '2021-11-08 03:37:42', '浙江大学控股集团总裁徐金强一行访问“紫红泥酱香风情谷”', '1');
INSERT INTO `zhnjiu_act` VALUES (70, 'upload/brandNews/20211108/069602cce21f176ef56ff4c52d4ae3ee.jpg', 'mp.weixin.qq.com/s/wCBrqbJM9laA2H1NKG1hdA', '2021-11-08 03:38:05', '紫红泥成立农业公司支持精准扶贫', '1');
INSERT INTO `zhnjiu_act` VALUES (71, 'upload/brandNews/20211108/8b466cb45c909998eb048d5733dbf29a.jpg', 'mp.weixin.qq.com/s/3BibntHKJSBgmjVXdjleZQ', '2021-11-08 03:38:29', '紫红泥热烈祝贺“北大创业训练营全国班（七期）毕业季”活动圆满成功!', '1');
INSERT INTO `zhnjiu_act` VALUES (72, 'upload/brandNews/20211108/a7d09be4bd97766da5c2a4f6fced98f7.jpg', 'mp.weixin.qq.com/s/RAS8sBcf186soKeu9GToLA', '2021-11-08 03:42:36', '紫红泥与广州市海珠区经销商签约', '1');
INSERT INTO `zhnjiu_act` VALUES (73, 'upload/brandNews/20211108/07b3179acdad9d3d1638a08dc95a2802.jpg', 'mp.weixin.qq.com/s/S8yPocAptcdP1XKLlFHhUg', '2021-11-08 03:42:59', '热烈祝贺“2021中国创业者峰会”暨“紫红泥创业之夜——北大创业训练营2021年全国营友年会(苏州)', '1');
INSERT INTO `zhnjiu_act` VALUES (74, 'upload/brandNews/20211108/7c25a2f51a4ab03ba8fe00f8476e2d23.jpg', 'mp.weixin.qq.com/s/YMLhy6X4p7mRSY0rVcagmg', '2021-11-08 03:43:47', '热烈祝贺“紫红泥”入列《仁怀市国民经济和社会发展第十四个五年规划和二〇三五年远景目标纲要》', '1');
INSERT INTO `zhnjiu_act` VALUES (75, 'upload/brandNews/20211110/068b5e5d831d7e417ba20b8605a8f029.png', 'mp.weixin.qq.com/s/OwXbwuPL_w1IVE-ilW-nEg', '2021-11-10 02:34:24', '酱香酒的“35岁现象”', '3');
INSERT INTO `zhnjiu_act` VALUES (76, 'upload/brandNews/20211222/f50d77b7231edcc2afae2510fda2b523.png', 'mp.weixin.qq.com/s/8WrXEOVbZnQlBuRFotS-kA', '2021-12-22 03:29:21', '茅台镇酱香酒的工匠精神', '2');
INSERT INTO `zhnjiu_act` VALUES (86, 'upload/brandNews/20220105/a8375d61f84ebe238c43cc1d87006858.jpg', 'mp.weixin.qq.com/s/hB4oFXQQFdocvEkjXH66zg', '2022-01-05 04:19:32', '紫红泥酱酒市场研究之九——酱酒并未遇冷，只是行稳致远！', '3');
INSERT INTO `zhnjiu_act` VALUES (77, 'upload/brandNews/20211222/03cdd24fca080c1c3e8efa835c4c1333.jpg', 'mp.weixin.qq.com/s/aZL_1-4OvL2o7tQp3OBubw', '2021-12-22 03:58:12', '茅台镇酱香酒经济发展的历史脉络', '2');
INSERT INTO `zhnjiu_act` VALUES (78, 'upload/brandNews/20211222/63cd7e02bc6cb3f3727cd75e488a20d5.jpg', 'mp.weixin.qq.com/s/k4rW99qFMm5wTEqM9gjNRg', '2021-12-22 04:03:42', '茅台镇酱香酒产业链与共同富裕', '3');
INSERT INTO `zhnjiu_act` VALUES (79, 'upload/brandNews/20211222/71ca402c0f4968f90460586aa1a84b67.jpg', 'mp.weixin.qq.com/s/HxrcXXgKRLh9fTPBxzFwjQ', '2021-12-22 04:04:28', '从洋酒冷到酱香热，广东洋酒为何不香了？', '3');
INSERT INTO `zhnjiu_act` VALUES (80, 'upload/brandNews/20211222/1f5027f0a478b344201e6f30c0dbf88c.png', 'mp.weixin.qq.com/s/h9q1_4xfRjeY7gEPrUn-dw', '2021-12-22 04:05:15', '酱香酒的“35岁现象”', '3');
INSERT INTO `zhnjiu_act` VALUES (81, 'upload/brandNews/20211222/bc4a664e9749fe0c23c34b9611844da4.jpg', 'mp.weixin.qq.com/s/wPd7wkmxNHps_xwzpiTWRw', '2021-12-22 04:06:06', '为什么越富越喝酱香酒', '3');
INSERT INTO `zhnjiu_act` VALUES (83, 'upload/brandNews/20211222/23916c90b6840ba58a43be81e578b5ff.jpg', 'mp.weixin.qq.com/s/qTiZhYXUBnEd_ySJmDiJrA', '2021-12-22 04:07:46', '酱酒繁华背后多少机会多少泡沫？', '3');
INSERT INTO `zhnjiu_act` VALUES (84, 'upload/brandNews/20211222/88b3f60f81a6702a3172ff4517bacbe8.jpg', 'mp.weixin.qq.com/s/d3FVf0Pd0Qb1MBHzzZMm5A', '2021-12-22 04:08:32', '酱香酒“贵”在哪里？又“好”在哪里？', '3');
INSERT INTO `zhnjiu_act` VALUES (85, 'upload/brandNews/20211222/f1641534b40ed9b0d3952c2353a87042.jpg', 'mp.weixin.qq.com/s/GmP4hu7b6BK-QRDZA7Tv1Q', '2021-12-22 04:09:14', '未来三十年，酱香酒仍是白酒产业中唯一的黄金赛道', '3');

-- ----------------------------
-- Table structure for zhnjiu_admin
-- ----------------------------
DROP TABLE IF EXISTS `zhnjiu_admin`;
CREATE TABLE `zhnjiu_admin`  (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pwd` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_time` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of zhnjiu_admin
-- ----------------------------
INSERT INTO `zhnjiu_admin` VALUES (7, 'zhnjiu', '52392842d42128140ef3e0ffe9831b89', '2021-10-28 02:49:17');

-- ----------------------------
-- Table structure for zhnjiu_banner
-- ----------------------------
DROP TABLE IF EXISTS `zhnjiu_banner`;
CREATE TABLE `zhnjiu_banner`  (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'banner图',
  `banner_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'banner跳转地址',
  `create_time` datetime NULL DEFAULT NULL COMMENT 'banner更新时间',
  `release_time` datetime NULL DEFAULT NULL COMMENT '发布时间',
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0' COMMENT '状态：\r\n0:发布 \r\n1:下架',
  PRIMARY KEY (`banner_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 55 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of zhnjiu_banner
-- ----------------------------
INSERT INTO `zhnjiu_banner` VALUES (53, 'upload/banner/20211108/c8e4e0ce160cdd6637f7846920840ea9.png', '', '2021-11-08 05:25:30', '2021-11-08 05:25:30', '0');

-- ----------------------------
-- Table structure for zhnjiu_click
-- ----------------------------
DROP TABLE IF EXISTS `zhnjiu_click`;
CREATE TABLE `zhnjiu_click`  (
  `id` int(11) NOT NULL COMMENT '访问记录次数ID',
  `month` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '月记录',
  `yesterday` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '昨日记录',
  `today` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '今日纪录',
  `total` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '总记录次数',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of zhnjiu_click
-- ----------------------------
INSERT INTO `zhnjiu_click` VALUES (1, '1', '0', '1', '8744');

-- ----------------------------
-- Table structure for zhnjiu_custom
-- ----------------------------
DROP TABLE IF EXISTS `zhnjiu_custom`;
CREATE TABLE `zhnjiu_custom`  (
  `custom_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '定制id',
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '图片',
  `create_time` datetime NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`custom_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of zhnjiu_custom
-- ----------------------------
INSERT INTO `zhnjiu_custom` VALUES (15, 'upload/dingZhi/20211108/bc720fca8f4111cac8f8d337c2eab019.png', '2021-11-08 01:58:51');

-- ----------------------------
-- Table structure for zhnjiu_nav
-- ----------------------------
DROP TABLE IF EXISTS `zhnjiu_nav`;
CREATE TABLE `zhnjiu_nav`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conten` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '导航',
  `p_id` int(11) NULL DEFAULT NULL COMMENT '二级导航',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 38 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of zhnjiu_nav
-- ----------------------------
INSERT INTO `zhnjiu_nav` VALUES (1, '首页', 5);
INSERT INTO `zhnjiu_nav` VALUES (2, '公司简介', 5);
INSERT INTO `zhnjiu_nav` VALUES (3, '公司团队', 5);
INSERT INTO `zhnjiu_nav` VALUES (4, '公司介绍', 0);
INSERT INTO `zhnjiu_nav` VALUES (5, '1111', 1);
INSERT INTO `zhnjiu_nav` VALUES (6, '2222', 1);
INSERT INTO `zhnjiu_nav` VALUES (7, '3333', 1);
INSERT INTO `zhnjiu_nav` VALUES (8, '4444', 2);
INSERT INTO `zhnjiu_nav` VALUES (9, '5555', 2);
INSERT INTO `zhnjiu_nav` VALUES (10, '6666', 2);
INSERT INTO `zhnjiu_nav` VALUES (11, '7777', 3);
INSERT INTO `zhnjiu_nav` VALUES (12, '8888', 3);
INSERT INTO `zhnjiu_nav` VALUES (13, '9999', 3);
INSERT INTO `zhnjiu_nav` VALUES (14, '1010', 4);
INSERT INTO `zhnjiu_nav` VALUES (15, '0000', 4);
INSERT INTO `zhnjiu_nav` VALUES (16, '1212', 4);

-- ----------------------------
-- Table structure for zhnjiu_news
-- ----------------------------
DROP TABLE IF EXISTS `zhnjiu_news`;
CREATE TABLE `zhnjiu_news`  (
  `news_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '标题',
  `create_time` datetime NULL DEFAULT NULL COMMENT '创建的时间',
  `content` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '新闻内容',
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '缩略图',
  `field_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '栏目状态：1：品牌活动，2：紫红泥文景，3：紫红泥研究院，4：新闻',
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '状态：1：发布，2：未上架',
  PRIMARY KEY (`news_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 51 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of zhnjiu_news
-- ----------------------------
INSERT INTO `zhnjiu_news` VALUES (49, '我是新闻标题', '2021-11-22 03:15:41', '<p>我是内容<img src=\"/ueditor/php/upload/image/20211122/1637565348483101.png\" title=\"1637565348483101.png\" _src=\"/ueditor/php/upload/image/20211122/1637565348483101.png\" alt=\"liang.png\"></p>', 'upload/News/20211122/1db4e69804deab12a553c5382a01c483.png', '4', '2');

SET FOREIGN_KEY_CHECKS = 1;

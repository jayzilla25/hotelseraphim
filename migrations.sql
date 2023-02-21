/*
 Navicat Premium Data Transfer

 Source Server         : MyLocalDB
 Source Server Type    : MariaDB
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : grpfivecapstone

 Target Server Type    : MariaDB
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 18/02/2023 11:40:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2023_02_08_021928_create_residents_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_02_08_022134_create_households_table', 1);
INSERT INTO `migrations` VALUES (7, '2023_02_08_022634_create_barangay_officials_table', 1);
INSERT INTO `migrations` VALUES (8, '2023_02_08_022734_create_zones_table', 1);
INSERT INTO `migrations` VALUES (9, '2023_02_08_022832_create_news_and_updates_table', 1);
INSERT INTO `migrations` VALUES (10, '2023_02_08_022905_create_projects_table', 1);
INSERT INTO `migrations` VALUES (11, '2018_01_01_100000_create_ph_address_tables', 2);
INSERT INTO `migrations` VALUES (12, '2023_02_15_200143_create_logs_table', 3);

SET FOREIGN_KEY_CHECKS = 1;

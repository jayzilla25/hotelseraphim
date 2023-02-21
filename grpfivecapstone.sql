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

 Date: 21/02/2023 12:56:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barangayofficials
-- ----------------------------
DROP TABLE IF EXISTS `barangayofficials`;
CREATE TABLE `barangayofficials`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `resident_id` bigint(20) UNSIGNED NOT NULL,
  `barangayofficial_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_start` date NOT NULL,
  `term_end` date NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barangayofficials
-- ----------------------------
INSERT INTO `barangayofficials` VALUES (1, 25, 'Boyer, Benny Feest', 'Chairman', '2018-06-30', NULL, '2023-02-08 19:47:16', '2023-02-17 09:32:43');
INSERT INTO `barangayofficials` VALUES (2, 28, 'Hoppe, Zoie Schaden', 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:49:05', '2023-02-17 09:37:19');
INSERT INTO `barangayofficials` VALUES (4, 13, 'Batz, Agustina Nitzsche', 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:50:44', '2023-02-17 09:39:25');
INSERT INTO `barangayofficials` VALUES (5, 31, 'Torphy, Maximillia Sauer', 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:51:33', '2023-02-17 09:39:37');
INSERT INTO `barangayofficials` VALUES (6, 3, 'Champlin, Devante Kshlerin', 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:52:00', '2023-02-17 09:39:49');
INSERT INTO `barangayofficials` VALUES (7, 32, 'Hettinger, Dario Heidenreich', 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:52:19', '2023-02-17 09:40:02');
INSERT INTO `barangayofficials` VALUES (8, 2, 'Stehr, Emmalee Wilderman', 'Kagawad', '2018-06-30', NULL, '2023-02-08 19:52:42', '2023-02-17 09:40:12');
INSERT INTO `barangayofficials` VALUES (9, 9, 'Langosh, Jaunita Davis', 'Sanguniang Kabataan Chairman', '2018-06-30', NULL, '2023-02-08 19:53:12', '2023-02-17 09:40:30');
INSERT INTO `barangayofficials` VALUES (19, 4, 'Wilkinson, Albert Keebler', 'Treasurer', '2018-06-30', NULL, '2023-02-17 09:51:24', '2023-02-17 09:51:24');
INSERT INTO `barangayofficials` VALUES (22, 12, 'Marvin, Kali', 'Kagawad', '2018-06-30', NULL, '2023-02-21 00:37:45', '2023-02-21 00:37:45');
INSERT INTO `barangayofficials` VALUES (23, 24, 'Thiel, Sofia', 'Secretary', '2018-06-30', NULL, '2023-02-21 00:40:48', '2023-02-21 00:40:48');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for households
-- ----------------------------
DROP TABLE IF EXISTS `households`;
CREATE TABLE `households`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `household_head` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `province` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `barangay` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `street_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownership_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dwelling_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `water_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lighting_source` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toilet_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of households
-- ----------------------------
INSERT INTO `households` VALUES (1, 'Haley, Nicole Rohan', 'NCR', 'Kodego', 'SP404', 5, '2494 Bogisich Rte', 'Owned', 'Wooden', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-19 04:21:11');
INSERT INTO `households` VALUES (2, 'Nader, Nettie Kautzer', 'NCR', 'Kodego', 'SP404', 3, '8677 Bahringer Dale Suite 785', 'Leased', 'Concrete', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (3, 'Blanda, Leola Gulgowski', 'NCR', 'Kodego', 'SP404', 2, '86887 Isac Ford', 'Leased', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (4, 'Waelchi, Samara Jacobson', 'NCR', 'Kodego', 'SP404', 4, '6667 Frederick Villages', 'Leased', 'Concrete', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (5, 'Thiel, Sofia Huel', 'NCR', 'Kodego', 'SP404', 6, '81435 Bria Common', 'Leased', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (6, 'Orn, Bridie Rohan', 'NCR', 'Kodego', 'SP404', 3, '60535 Beahan Street Apt. 472', 'Rented', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (7, 'Kutch, Eriberto Lueilwitz', 'NCR', 'Kodego', 'SP404', 7, '197 Torrance Rest', 'Owned', 'Concrete', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (8, 'Kunde, Blanche Hauck', 'NCR', 'Kodego', 'SP404', 1, '87927 O\'Reilly Forest Apt. 782', 'Rented', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (9, 'Langosh, Jaunita Davis', 'NCR', 'Kodego', 'SP404', 7, '2167 Koepp Parkway Suite 781', 'Leased', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (10, 'Davis, Vinnie Weissnat', 'NCR', 'Kodego', 'SP404', 2, '58404 Sadie Court Suite 203', 'Rented', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (11, 'Rogahn, Keyon Sanford', 'NCR', 'Kodego', 'SP404', 1, '546 Tiara Curve', 'Owned', 'Light Materials', 'Deep Well', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `households` VALUES (12, 'Bode, Aurelia Jacobson', 'NCR', 'Kodego', 'SP404', 2, '46656 Roob Way Suite 586', 'Rented', 'Light Materials', 'Faucet', 'Electric', 'Water Sealed', '2023-02-08 09:55:43', '2023-02-15 01:33:17');

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `by_userId` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `by_userName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 152 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logs
-- ----------------------------
INSERT INTO `logs` VALUES (0, 'created', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:56:36', '2023-02-15 20:56:36');
INSERT INTO `logs` VALUES (1, 'created', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:44:50', '2023-02-15 20:44:50');
INSERT INTO `logs` VALUES (2, 'updated', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:45:54', '2023-02-15 20:45:54');
INSERT INTO `logs` VALUES (3, 'deleted', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:46:27', '2023-02-15 20:46:27');
INSERT INTO `logs` VALUES (5, 'updated', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:56:56', '2023-02-15 20:56:56');
INSERT INTO `logs` VALUES (6, 'deleted', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 20:57:09', '2023-02-15 20:57:09');
INSERT INTO `logs` VALUES (7, 'created', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 21:03:55', '2023-02-15 21:03:55');
INSERT INTO `logs` VALUES (8, 'updated', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 21:04:22', '2023-02-15 21:04:22');
INSERT INTO `logs` VALUES (9, 'updated', '2', 'Official', 'user password', 'Ammos', '2023-02-15 21:04:44', '2023-02-15 21:04:44');
INSERT INTO `logs` VALUES (10, 'deleted', '2', 'Official', 'user profile', 'Ammos', '2023-02-15 21:05:16', '2023-02-15 21:05:16');
INSERT INTO `logs` VALUES (11, 'created', '2', 'Official', 'household', 'Doe, John Miller', '2023-02-15 21:10:59', '2023-02-15 21:10:59');
INSERT INTO `logs` VALUES (12, 'updated', '2', 'Official', 'household', '33', '2023-02-15 21:11:41', '2023-02-15 21:11:41');
INSERT INTO `logs` VALUES (13, 'updated', '2', 'Official', 'household', 'Doe, John Miller', '2023-02-15 21:12:51', '2023-02-15 21:12:51');
INSERT INTO `logs` VALUES (14, 'deleted', '2', 'Official', 'household', 'Doe, John Miller', '2023-02-15 21:14:18', '2023-02-15 21:14:18');
INSERT INTO `logs` VALUES (15, 'deleted', '2', 'Official', 'household', 'Dela Cruz, Juan Ponce', '2023-02-15 21:14:23', '2023-02-15 21:14:23');
INSERT INTO `logs` VALUES (16, 'created', '1', 'Admin User', 'user profile', 'trial', '2023-02-15 21:51:39', '2023-02-15 21:51:39');
INSERT INTO `logs` VALUES (17, 'created', '2', 'Official', 'user profile', 'trial2', '2023-02-15 22:03:59', '2023-02-15 22:03:59');
INSERT INTO `logs` VALUES (18, 'deleted', '2', 'Official', 'user profile', 'trial2', '2023-02-15 22:04:05', '2023-02-15 22:04:05');
INSERT INTO `logs` VALUES (19, 'deleted', '2', 'Official', 'user profile', 'trial', '2023-02-15 22:04:08', '2023-02-15 22:04:08');
INSERT INTO `logs` VALUES (20, 'created', '2', 'Official', 'user profile', 'tria4', '2023-02-15 23:42:04', '2023-02-15 23:42:04');
INSERT INTO `logs` VALUES (21, 'updated', '2', 'Official', 'user profile', 'tria4', '2023-02-15 23:42:49', '2023-02-15 23:42:49');
INSERT INTO `logs` VALUES (22, 'updated', '2', 'Official', 'user password', 'trial4', '2023-02-15 23:43:43', '2023-02-15 23:43:43');
INSERT INTO `logs` VALUES (23, 'deleted', '2', 'Official', 'user profile', 'trial4', '2023-02-15 23:44:04', '2023-02-15 23:44:04');
INSERT INTO `logs` VALUES (24, 'created', '1', 'Admin User', 'user profile', 'trial', '2023-02-15 23:53:19', '2023-02-15 23:53:19');
INSERT INTO `logs` VALUES (25, 'updated', '1', 'Admin User', 'user profile', 'trial', '2023-02-15 23:55:50', '2023-02-15 23:55:50');
INSERT INTO `logs` VALUES (26, 'created', '2', 'Official', 'barangay official profile', '5', '2023-02-16 19:44:41', '2023-02-16 19:44:41');
INSERT INTO `logs` VALUES (27, 'created', '2', 'Official', 'barangay official profile', '6', '2023-02-16 19:59:05', '2023-02-16 19:59:05');
INSERT INTO `logs` VALUES (28, 'created', '2', 'Official', 'barangay official profile', 'Feest, Noemy Grady', '2023-02-16 20:04:43', '2023-02-16 20:04:43');
INSERT INTO `logs` VALUES (29, 'created', '1', 'Admin User', 'user profile', 'Julius Marc Agustin', '2023-02-17 08:22:21', '2023-02-17 08:22:21');
INSERT INTO `logs` VALUES (30, 'updated', '1', 'Admin User', 'user password', 'Julius Marc Agustin', '2023-02-17 08:22:42', '2023-02-17 08:22:42');
INSERT INTO `logs` VALUES (31, 'created', '19', 'Julius Marc Agustin', 'barangay official profile', 'Stiedemann, Vito Miller', '2023-02-17 08:38:53', '2023-02-17 08:38:53');
INSERT INTO `logs` VALUES (32, 'created', '19', 'Julius Marc Agustin', 'barangay official profile', 'Bradtke, Darby Larson', '2023-02-17 08:40:15', '2023-02-17 08:40:15');
INSERT INTO `logs` VALUES (33, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', 'Boyer, Benny Feest', '2023-02-17 09:34:18', '2023-02-17 09:34:18');
INSERT INTO `logs` VALUES (34, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:37:19', '2023-02-17 09:37:19');
INSERT INTO `logs` VALUES (35, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:38:05', '2023-02-17 09:38:05');
INSERT INTO `logs` VALUES (36, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:39:25', '2023-02-17 09:39:25');
INSERT INTO `logs` VALUES (37, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:39:37', '2023-02-17 09:39:37');
INSERT INTO `logs` VALUES (38, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:39:49', '2023-02-17 09:39:49');
INSERT INTO `logs` VALUES (39, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:40:02', '2023-02-17 09:40:02');
INSERT INTO `logs` VALUES (40, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:40:12', '2023-02-17 09:40:12');
INSERT INTO `logs` VALUES (41, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:40:30', '2023-02-17 09:40:30');
INSERT INTO `logs` VALUES (42, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:40:46', '2023-02-17 09:40:46');
INSERT INTO `logs` VALUES (43, 'updated', '19', 'Julius Marc Agustin', 'barangay official profile', NULL, '2023-02-17 09:41:30', '2023-02-17 09:41:30');
INSERT INTO `logs` VALUES (44, 'deleted', '19', 'Julius Marc Agustin', 'barangay official profile', 'Zulauf, Vella Romaguera', '2023-02-17 09:49:24', '2023-02-17 09:49:24');
INSERT INTO `logs` VALUES (45, 'deleted', '19', 'Julius Marc Agustin', 'barangay official profile', 'Feest, Noemy Grady', '2023-02-17 09:49:30', '2023-02-17 09:49:30');
INSERT INTO `logs` VALUES (46, 'deleted', '19', 'Julius Marc Agustin', 'barangay official profile', 'Wilkinson, Albert Keebler', '2023-02-17 09:49:34', '2023-02-17 09:49:34');
INSERT INTO `logs` VALUES (47, 'deleted', '19', 'Julius Marc Agustin', 'barangay official profile', 'Waelchi, Samara Jacobson', '2023-02-17 09:49:37', '2023-02-17 09:49:37');
INSERT INTO `logs` VALUES (48, 'deleted', '19', 'Julius Marc Agustin', 'barangay official profile', 'Stiedemann, Vito Miller', '2023-02-17 09:50:01', '2023-02-17 09:50:01');
INSERT INTO `logs` VALUES (49, 'deleted', '19', 'Julius Marc Agustin', 'barangay official profile', 'Bradtke, Darby Larson', '2023-02-17 09:50:04', '2023-02-17 09:50:04');
INSERT INTO `logs` VALUES (50, 'created', '19', 'Julius Marc Agustin', 'barangay official profile', 'Wilkinson, Albert Keebler', '2023-02-17 09:51:24', '2023-02-17 09:51:24');
INSERT INTO `logs` VALUES (51, 'created', '19', 'Julius Marc Agustin', 'barangay official profile', 'Barangay Official', '2023-02-17 11:43:00', '2023-02-17 11:43:00');
INSERT INTO `logs` VALUES (52, 'created', '2', 'Official', 'news and updates', 'SP404 ES Kids Join BSP and GSP', '2023-02-17 23:14:29', '2023-02-17 23:14:29');
INSERT INTO `logs` VALUES (53, 'created', '2', 'Official', 'news and updates', 'SP404 ES Kids Join BSP and GSP 2', '2023-02-17 23:28:49', '2023-02-17 23:28:49');
INSERT INTO `logs` VALUES (54, 'updated', '2', 'Official', 'news and updates', 'SP404 ES Kids Join BSP and GSP 2', '2023-02-18 07:51:56', '2023-02-18 07:51:56');
INSERT INTO `logs` VALUES (55, 'updated', '2', 'Official', 'news and updates', 'SP404 ES Kids Join BSP and GSP 3', '2023-02-18 08:08:50', '2023-02-18 08:08:50');
INSERT INTO `logs` VALUES (56, 'updated', '2', 'Official', 'news and updates', 'SP404 ES Kids Join BSP and GSP 2', '2023-02-18 09:05:25', '2023-02-18 09:05:25');
INSERT INTO `logs` VALUES (57, 'updated', '2', 'Official', 'news and updates', 'SP404 ES Kids Join BSP and GSP 2', '2023-02-18 09:09:25', '2023-02-18 09:09:25');
INSERT INTO `logs` VALUES (58, 'deleted', '2', 'Official', 'household', 'SP404 ES Kids Join BSP and GSP 2', '2023-02-18 09:48:53', '2023-02-18 09:48:53');
INSERT INTO `logs` VALUES (59, 'updated', '2', 'Official', 'news and updates', 'SP404 ES Kids Join BSP and GSP', '2023-02-18 09:56:01', '2023-02-18 09:56:01');
INSERT INTO `logs` VALUES (60, 'created', '2', 'Official', 'news and updates', 'Magnitude 8 Earthquake Devastates SP404', '2023-02-18 10:06:11', '2023-02-18 10:06:11');
INSERT INTO `logs` VALUES (61, 'deleted', '2', 'Official', 'household', 'Magnitude 8 Earthquake Devastates SP404', '2023-02-18 10:06:18', '2023-02-18 10:06:18');
INSERT INTO `logs` VALUES (62, 'created', '2', 'Official', 'news and updates', 'Magnitude 8 Earthquake Devastates SP404', '2023-02-18 10:07:33', '2023-02-18 10:07:33');
INSERT INTO `logs` VALUES (63, 'deleted', '2', 'Official', 'household', 'Magnitude 8 Earthquake Devastates SP404', '2023-02-18 10:07:38', '2023-02-18 10:07:38');
INSERT INTO `logs` VALUES (64, 'updated', '2', 'Official', 'news and updates', 'Help Needed to Build the Local Catholic Church', '2023-02-18 10:14:47', '2023-02-18 10:14:47');
INSERT INTO `logs` VALUES (65, 'updated', '2', 'Official', 'news and updates', 'Red Cross\'s successful Blood Letting Activity', '2023-02-18 10:21:14', '2023-02-18 10:21:14');
INSERT INTO `logs` VALUES (66, 'updated', '2', 'Official', 'news and updates', 'Zone 2 bags the Chairman\'s Cup', '2023-02-18 10:28:57', '2023-02-18 10:28:57');
INSERT INTO `logs` VALUES (67, 'updated', '2', 'Official', 'household', 'Haley, Nicole Rohan', '2023-02-19 04:21:11', '2023-02-19 04:21:11');
INSERT INTO `logs` VALUES (68, 'updated', '19', 'Julius Marc Agustin', 'user profile', 'Julius Marc Agustin', '2023-02-19 05:26:16', '2023-02-19 05:26:16');
INSERT INTO `logs` VALUES (69, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 10:22:54', '2023-02-19 10:22:54');
INSERT INTO `logs` VALUES (70, 'created', '2', 'Official', 'household', 'Doe', '2023-02-19 10:36:29', '2023-02-19 10:36:29');
INSERT INTO `logs` VALUES (71, 'created', '2', 'Official', 'household', 'Doe', '2023-02-19 10:37:12', '2023-02-19 10:37:12');
INSERT INTO `logs` VALUES (72, 'created', '2', 'Official', 'household', 'Doe', '2023-02-19 10:50:30', '2023-02-19 10:50:30');
INSERT INTO `logs` VALUES (73, 'created', '1', 'Admin User', 'barangay official profile', 'Doe, John', '2023-02-19 12:27:51', '2023-02-19 12:27:51');
INSERT INTO `logs` VALUES (74, 'deleted', '1', 'Admin User', 'barangay official profile', 'Rogahn, Keyon Sanford', '2023-02-19 12:28:06', '2023-02-19 12:28:06');
INSERT INTO `logs` VALUES (75, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 12:41:51', '2023-02-19 12:41:51');
INSERT INTO `logs` VALUES (76, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 12:59:19', '2023-02-19 12:59:19');
INSERT INTO `logs` VALUES (77, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 13:09:24', '2023-02-19 13:09:24');
INSERT INTO `logs` VALUES (78, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 13:27:34', '2023-02-19 13:27:34');
INSERT INTO `logs` VALUES (79, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 14:49:59', '2023-02-19 14:49:59');
INSERT INTO `logs` VALUES (80, 'created', '2', 'Official', 'household', 'Doe', '2023-02-19 15:06:49', '2023-02-19 15:06:49');
INSERT INTO `logs` VALUES (81, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 16:03:58', '2023-02-19 16:03:58');
INSERT INTO `logs` VALUES (82, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 16:19:27', '2023-02-19 16:19:27');
INSERT INTO `logs` VALUES (83, 'updated', '2', 'Official', 'household', 'Murray', '2023-02-19 17:10:20', '2023-02-19 17:10:20');
INSERT INTO `logs` VALUES (84, 'updated', '2', 'Official', 'household', 'Murray', '2023-02-19 17:16:17', '2023-02-19 17:16:17');
INSERT INTO `logs` VALUES (85, 'updated', '2', 'Official', 'household', 'Dela Cruz', '2023-02-19 17:17:37', '2023-02-19 17:17:37');
INSERT INTO `logs` VALUES (86, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:32:39', '2023-02-19 17:32:39');
INSERT INTO `logs` VALUES (87, 'deleted', '2', 'Official', 'user profile', 'Dela', '2023-02-19 17:33:31', '2023-02-19 17:33:31');
INSERT INTO `logs` VALUES (88, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:33:36', '2023-02-19 17:33:36');
INSERT INTO `logs` VALUES (89, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:33:40', '2023-02-19 17:33:40');
INSERT INTO `logs` VALUES (90, 'deleted', '2', 'Official', 'user profile', 'Doe', '2023-02-19 17:33:43', '2023-02-19 17:33:43');
INSERT INTO `logs` VALUES (91, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:33:47', '2023-02-19 17:33:47');
INSERT INTO `logs` VALUES (92, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:33:50', '2023-02-19 17:33:50');
INSERT INTO `logs` VALUES (93, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:33:54', '2023-02-19 17:33:54');
INSERT INTO `logs` VALUES (94, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:33:58', '2023-02-19 17:33:58');
INSERT INTO `logs` VALUES (95, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:34:01', '2023-02-19 17:34:01');
INSERT INTO `logs` VALUES (96, 'deleted', '2', 'Official', 'user profile', 'Doe', '2023-02-19 17:34:06', '2023-02-19 17:34:06');
INSERT INTO `logs` VALUES (97, 'deleted', '2', 'Official', 'user profile', 'Doe', '2023-02-19 17:34:10', '2023-02-19 17:34:10');
INSERT INTO `logs` VALUES (98, 'deleted', '2', 'Official', 'user profile', 'Doe', '2023-02-19 17:34:15', '2023-02-19 17:34:15');
INSERT INTO `logs` VALUES (99, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-19 17:34:18', '2023-02-19 17:34:18');
INSERT INTO `logs` VALUES (100, 'created', '2', 'Official', 'household', 'Dela Cruz', '2023-02-20 10:02:28', '2023-02-20 10:02:28');
INSERT INTO `logs` VALUES (101, 'deleted', '2', 'Official', 'user profile', 'Dela Cruz', '2023-02-20 10:10:30', '2023-02-20 10:10:30');
INSERT INTO `logs` VALUES (102, 'updated', '2', 'Official', 'household', 'Stehr', '2023-02-20 15:49:18', '2023-02-20 15:49:18');
INSERT INTO `logs` VALUES (103, 'updated', '2', 'Official', 'household', 'Stehr', '2023-02-20 15:50:10', '2023-02-20 15:50:10');
INSERT INTO `logs` VALUES (104, 'updated', '2', 'Official', 'household', 'Champlin', '2023-02-20 15:51:55', '2023-02-20 15:51:55');
INSERT INTO `logs` VALUES (105, 'updated', '2', 'Official', 'household', 'Wilkinson', '2023-02-20 15:53:50', '2023-02-20 15:53:50');
INSERT INTO `logs` VALUES (106, 'updated', '2', 'Official', 'household', 'Waelchi', '2023-02-20 15:55:23', '2023-02-20 15:55:23');
INSERT INTO `logs` VALUES (107, 'updated', '2', 'Official', 'household', 'Waelchi', '2023-02-20 15:56:17', '2023-02-20 15:56:17');
INSERT INTO `logs` VALUES (108, 'updated', '2', 'Official', 'household', 'Zulauf', '2023-02-20 15:58:04', '2023-02-20 15:58:04');
INSERT INTO `logs` VALUES (109, 'updated', '2', 'Official', 'household', 'Volkman', '2023-02-20 15:58:59', '2023-02-20 15:58:59');
INSERT INTO `logs` VALUES (110, 'updated', '2', 'Official', 'household', 'Ankunding', '2023-02-20 16:01:15', '2023-02-20 16:01:15');
INSERT INTO `logs` VALUES (111, 'updated', '2', 'Official', 'household', 'Langosh', '2023-02-20 16:03:00', '2023-02-20 16:03:00');
INSERT INTO `logs` VALUES (112, 'updated', '2', 'Official', 'household', 'Langosh', '2023-02-20 16:04:17', '2023-02-20 16:04:17');
INSERT INTO `logs` VALUES (113, 'updated', '2', 'Official', 'household', 'Kling', '2023-02-20 16:05:51', '2023-02-20 16:05:51');
INSERT INTO `logs` VALUES (114, 'updated', '2', 'Official', 'household', 'Nader', '2023-02-20 16:07:14', '2023-02-20 16:07:14');
INSERT INTO `logs` VALUES (115, 'updated', '2', 'Official', 'household', 'Marvin', '2023-02-20 16:09:05', '2023-02-20 16:09:05');
INSERT INTO `logs` VALUES (116, 'updated', '2', 'Official', 'household', 'Batz', '2023-02-20 16:10:50', '2023-02-20 16:10:50');
INSERT INTO `logs` VALUES (117, 'updated', '2', 'Official', 'household', 'Green', '2023-02-20 16:13:17', '2023-02-20 16:13:17');
INSERT INTO `logs` VALUES (118, 'updated', '2', 'Official', 'household', 'Denesik', '2023-02-20 16:15:03', '2023-02-20 16:15:03');
INSERT INTO `logs` VALUES (119, 'updated', '2', 'Official', 'household', 'Haley', '2023-02-20 16:16:35', '2023-02-20 16:16:35');
INSERT INTO `logs` VALUES (120, 'updated', '2', 'Official', 'household', 'Orn', '2023-02-20 16:19:02', '2023-02-20 16:19:02');
INSERT INTO `logs` VALUES (121, 'updated', '2', 'Official', 'household', 'Jacobs', '2023-02-20 16:20:50', '2023-02-20 16:20:50');
INSERT INTO `logs` VALUES (122, 'updated', '2', 'Official', 'household', 'Flatley', '2023-02-20 16:21:51', '2023-02-20 16:21:51');
INSERT INTO `logs` VALUES (123, 'updated', '2', 'Official', 'household', 'Reilly', '2023-02-20 16:23:03', '2023-02-20 16:23:03');
INSERT INTO `logs` VALUES (124, 'updated', '2', 'Official', 'household', 'Wisoky', '2023-02-20 16:24:22', '2023-02-20 16:24:22');
INSERT INTO `logs` VALUES (125, 'updated', '2', 'Official', 'household', 'Skiles', '2023-02-20 16:25:43', '2023-02-20 16:25:43');
INSERT INTO `logs` VALUES (126, 'updated', '2', 'Official', 'household', 'Rogahn', '2023-02-20 16:27:51', '2023-02-20 16:27:51');
INSERT INTO `logs` VALUES (127, 'updated', '2', 'Official', 'household', 'Thiel', '2023-02-20 16:28:58', '2023-02-20 16:28:58');
INSERT INTO `logs` VALUES (128, 'updated', '2', 'Official', 'household', 'Boyer', '2023-02-20 16:30:04', '2023-02-20 16:30:04');
INSERT INTO `logs` VALUES (129, 'updated', '2', 'Official', 'household', 'Cole', '2023-02-20 16:31:32', '2023-02-20 16:31:32');
INSERT INTO `logs` VALUES (130, 'updated', '2', 'Official', 'household', 'Reinger', '2023-02-20 16:34:56', '2023-02-20 16:34:56');
INSERT INTO `logs` VALUES (131, 'updated', '2', 'Official', 'household', 'Hoppe', '2023-02-20 16:37:56', '2023-02-20 16:37:56');
INSERT INTO `logs` VALUES (132, 'updated', '2', 'Official', 'household', 'Davis', '2023-02-20 16:39:14', '2023-02-20 16:39:14');
INSERT INTO `logs` VALUES (133, 'updated', '2', 'Official', 'household', 'Blanda', '2023-02-20 16:40:25', '2023-02-20 16:40:25');
INSERT INTO `logs` VALUES (134, 'updated', '2', 'Official', 'household', 'Torphy', '2023-02-20 16:43:22', '2023-02-20 16:43:22');
INSERT INTO `logs` VALUES (135, 'updated', '2', 'Official', 'household', 'Hettinger', '2023-02-20 16:45:00', '2023-02-20 16:45:00');
INSERT INTO `logs` VALUES (136, 'deleted', '2', 'Official', 'user profile', 'Feest', '2023-02-20 16:45:15', '2023-02-20 16:45:15');
INSERT INTO `logs` VALUES (137, 'updated', '2', 'Official', 'household', 'Stiedemann', '2023-02-20 16:47:02', '2023-02-20 16:47:02');
INSERT INTO `logs` VALUES (138, 'updated', '2', 'Official', 'household', 'Bradtke', '2023-02-20 16:48:09', '2023-02-20 16:48:09');
INSERT INTO `logs` VALUES (139, 'updated', '2', 'Official', 'household', 'Bode', '2023-02-20 16:49:21', '2023-02-20 16:49:21');
INSERT INTO `logs` VALUES (140, 'updated', '2', 'Official', 'household', 'Wunsch', '2023-02-20 16:50:41', '2023-02-20 16:50:41');
INSERT INTO `logs` VALUES (141, 'updated', '2', 'Official', 'household', 'Kunde', '2023-02-20 16:51:43', '2023-02-20 16:51:43');
INSERT INTO `logs` VALUES (142, 'updated', '2', 'Official', 'household', 'Kutch', '2023-02-20 16:53:21', '2023-02-20 16:53:21');
INSERT INTO `logs` VALUES (143, 'updated', '2', 'Official', 'household', 'Leffler', '2023-02-20 16:54:05', '2023-02-20 16:54:05');
INSERT INTO `logs` VALUES (144, 'deleted', '2', 'Official', 'user profile', 'Ankunding', '2023-02-20 16:54:25', '2023-02-20 16:54:25');
INSERT INTO `logs` VALUES (145, 'updated', '2', 'Official', 'household', 'Torphy', '2023-02-20 17:22:59', '2023-02-20 17:22:59');
INSERT INTO `logs` VALUES (146, 'updated', '2', 'Official', 'household', 'Batz', '2023-02-20 17:58:38', '2023-02-20 17:58:38');
INSERT INTO `logs` VALUES (147, 'updated', '2', 'Official', 'household', 'Batz', '2023-02-20 23:35:33', '2023-02-20 23:35:33');
INSERT INTO `logs` VALUES (148, 'updated', '2', 'Official', 'household', 'Torphy', '2023-02-20 23:36:18', '2023-02-20 23:36:18');
INSERT INTO `logs` VALUES (149, 'updated', '1', 'Admin User', 'barangay official profile', 'Boyer, Benny Feest', '2023-02-21 00:30:13', '2023-02-21 00:30:13');
INSERT INTO `logs` VALUES (150, 'created', '1', 'Admin User', 'barangay official profile', 'Marvin, Kali', '2023-02-21 00:37:45', '2023-02-21 00:37:45');
INSERT INTO `logs` VALUES (151, 'created', '1', 'Admin User', 'barangay official profile', 'Thiel, Sofia', '2023-02-21 00:40:48', '2023-02-21 00:40:48');

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

-- ----------------------------
-- Table structure for newsandupdates
-- ----------------------------
DROP TABLE IF EXISTS `newsandupdates`;
CREATE TABLE `newsandupdates`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of newsandupdates
-- ----------------------------
INSERT INTO `newsandupdates` VALUES (1, 2, 'Official', 'Zone 2 Bags The Chairman\'s Cup', '\"Zone 2 Dominates and Emerges Victorious: A Thrilling Conclusion to Barangay SP404\'s Chairman\'s Cup\"', 'Sports', 'images/AKY9ki99hcmdgtma1QQExnXambamoPrDdItygzMO.jpg', 'Zone 2 Basketball Team made history yesterday by winning the prestigious Chairman\'s Cup in the annual Barangay Basketball League. The team, composed of young and talented players, fought hard against their opponents and emerged victorious with a final score of 78-75.\r\n@@\r\nThe championship game was held at the Barangay Sports Complex and was witnessed by a huge crowd of enthusiastic supporters from both teams. The game was intense from start to finish, with both teams giving their all on the court. However, Zone 2 proved to be the stronger team and managed to secure the win.\r\n@@\r\nThe team captain, John Doe, who also emerged as the tournament\'s Most Valuable Player, expressed his gratitude for the support they received from their fans. He said, \"We couldn\'t have done it without the support of our family, friends, and fans. This victory is for all of us.\"\r\n@@\r\nBarangay Chairman, Jane Doe, expressed her delight at the successful outcome of the tournament and commended the players for their hard work and determination. She said, \"This is a testament to the hard work and dedication of our young athletes. I am proud of their achievement and I am sure that they will continue to make our barangay proud in the future.\"\r\n@@\r\nThe Chairman\'s Cup is one of the most prestigious awards in the Barangay Basketball League, and the victory of Zone 2 marks a new chapter in the history of the league. The team\'s fans are already looking forward to their next win, while the players are already preparing for their next challenge.\r\n@@\r\nIn conclusion, the victory of Zone 2 Basketball Team in the Chairman\'s Cup is a testament to the power of teamwork and determination. The players, fans, and officials are all proud of this accomplishment, and the barangay is looking forward to more victories from the team in the future.', '2023-02-08 20:08:32', '2023-02-18 10:28:57');
INSERT INTO `newsandupdates` VALUES (2, 2, 'Official', 'SP404 and Red Cross Give a Gift of Life', '\"Giving the Gift of Life: A Successful Red Cross Blood Letting Activity in Barangay SP404\"', 'Health', 'images/xbyHU5ALL7eO0wrVMP9wIA10FyNOO3KQl6OjLZYq.jpg', 'The Red Cross Society of Barangay SP404 recently held a successful blood letting activity, which saw a high turnout of donors from the community. The event, which was held at the Barangay Hall, aimed to increase the blood supply in local hospitals and provide assistance to those in need.\r\n@@\r\nThe event was well-organized, with the Red Cross volunteers working hard to ensure that the process was smooth and efficient. The donors were screened to determine their eligibility and those who were cleared were able to make their blood donation.\r\n@@\r\nBarangay Chairman, Jane Doe, expressed her appreciation for the support received from the community and praised the efforts of the Red Cross Society. She said, \"It is wonderful to see the community coming together to help those in need. The Red Cross Society does an excellent job of organizing these activities and I am proud to be a part of such a caring community.\"\r\n@@\r\nThe donors, who included both young and old, were given snacks and refreshments as a token of appreciation for their contributions. Many of them expressed their satisfaction with the event and their willingness to participate in future activities of the same nature.\r\n@@\r\nThe collected blood will be sent to local hospitals and used to treat patients in need. The Red Cross Society is well-known for its efforts in promoting the importance of blood donation and providing assistance to those in need.\r\n@@\r\nIn conclusion, the successful blood letting activity by the Red Cross Society of Barangay SP404 is a testament to the generosity and kindness of the community. The community\'s support will help to save the lives of many patients and bring hope to those in need. The Red Cross Society is grateful for the support received and is looking forward to future events that will bring the community together.', '2023-02-08 20:13:43', '2023-02-18 10:21:14');
INSERT INTO `newsandupdates` VALUES (3, 2, 'Official', 'Help Pours In to Build Local Catholic Church', '\"Building Hope and Faith: A Successful Fundraising Event for the Construction of a Local Church\"', 'Religion', 'images/0VsJfCLsRCB0us0H24fOz1FTymea2FfwycpdzRGh.jpg', 'Barangay SP404 recently held a successful fundraising event to build a much-needed church in the community. The event was attended by members of the barangay, neighboring communities, and various religious groups who all came together to support this noble cause.\r\n@@\r\nThe event was held on a warm and sunny Saturday afternoon, with booths and stalls set up all around the barangay plaza. There were food and drinks for sale, as well as games, raffles, and other activities to keep everyone entertained.\r\n@@\r\nThe highlight of the event was a concert featuring local performers and guest artists. They brought the house down with their performances and helped to create a festive and celebratory atmosphere. The concert was the culmination of a week-long series of activities, which included a fun run, a bike ride, and a car wash.\r\n@@\r\nThe fundraising event was organized by a committee of dedicated volunteers, who worked tirelessly to make it a success. They reached out to local businesses and individuals for donations, and they were able to secure a significant amount of funding for the construction of the church.\r\n@@\r\nThe church is a much-needed addition to the community, as the current place of worship is small and overcrowded. With the new church, there will be ample space for more people to come and worship, as well as space for community events and gatherings.\r\n@@\r\nThe success of this fundraising event is a testament to the generosity and compassion of the people of Barangay SP404. They showed that when they come together, they can achieve great things and make a positive impact in their community.\r\n@@\r\nThe construction of the new church is expected to begin in the coming months, and the community is eagerly looking forward to its completion. It will be a symbol of hope and faith for generations to come, and a testament to the power of community spirit.', '2023-02-08 20:23:46', '2023-02-18 10:14:47');
INSERT INTO `newsandupdates` VALUES (4, 2, 'Official', 'SP404 ES Kids Join BSP and GSP', '\"Joining the BSP and GSP: SP404 students unleash their potential and bond over shared passions!\"', 'Education', 'images/oc0U3TFkrZMA9OmHvj0WbSypAc12xb74apIpRz65.jpg', 'SP404 Elementary School recently joined forces with the Boy Scout of the Philippines and Girl Scout of the Philippines to provide students with a valuable extracurricular activity. The school\'s administration believes that participating in scouting programs can greatly benefit their students, not only in terms of personal growth but also in terms of academic performance.\r\n@@\r\nThe Boy Scout of the Philippines and Girl Scout of the Philippines are both highly respected organizations that have been around for over a century. They have a long-standing reputation for teaching young people important life skills, such as leadership, teamwork, and self-reliance. By participating in these programs, students can develop their character, gain confidence, and learn how to be responsible citizens.\r\n@@\r\nSP404 Elementary School recognizes the value of these programs and is committed to providing its students with opportunities to grow and develop in a supportive environment. Through scouting, students can participate in a variety of activities that teach important skills, such as camping, first aid, and community service. These skills are not only valuable in their personal lives but can also be applied in academic and career settings.\r\n@@\r\nIn addition to the personal benefits of scouting, participating in these programs can also help students build relationships with their peers and with adults in the community. By working together on scouting projects and activities, students can develop important social skills and learn how to communicate effectively with others.\r\n@@\r\nSP404 Elementary School is proud to be a part of the Boy Scout of the Philippines and Girl Scout of the Philippines organizations and looks forward to seeing the positive impact that scouting will have on its students. By participating in these programs, students can learn important life skills, build lasting relationships, and grow into responsible, well-rounded citizens.', '2023-02-17 23:14:29', '2023-02-18 09:56:01');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('admin@gmail.com', '$2y$10$smeVf/ZgtHJXByem77ml8.Sc1sTGovbrJ8FWcYN2Fo6k6chjH8L9a', '2023-02-10 00:13:25');
INSERT INTO `password_resets` VALUES ('user@gmail.com', '$2y$10$A5C6FWoUXQPidNrrcoJTquOBuZyd6dadQ9wVsZ0GAUFhk55t5hBO.', '2023-02-10 05:01:14');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES (1, 'Clean Up Drive', NULL, 'The Barangay Clean Streets Project aims to improve the cleanliness and overall appearance of our community by removing litter and debris from our streets. This initiative will not only enhance the aesthetic of our neighborhood, but also promote a cleaner and healthier environment for all residents. The project will involve volunteers from the community coming together to pick up trash and properly dispose of it. Join us in making our barangay a better place to live.', '2023-02-04', '2023-02-05', 'Completed', 5000, 2, '2023-02-04 20:27:26', '2023-02-05 20:27:41');
INSERT INTO `projects` VALUES (2, 'Zone 2 Basketball Court Rehabilitation', NULL, 'The Zone 2 Basketball Court Rehabilitation Project is aimed at improving the playing conditions and overall safety of our community\'s beloved basketball court. This initiative will involve fixing damaged court surfaces, replacing worn-out equipment, and installing new lights for nighttime play. The upgraded court will not only provide a better playing experience, but also bring the community together for friendly games and events. Join us in bringing new life to this cherished community space.', '2023-02-06', '0000-00-00', 'On Going', 50000, 2, '2023-02-06 20:33:22', '2023-02-08 20:33:36');

-- ----------------------------
-- Table structure for residents
-- ----------------------------
DROP TABLE IF EXISTS `residents`;
CREATE TABLE `residents`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `suffix` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `b_date` date NOT NULL,
  `b_place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `civil_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_philhealth` tinyint(1) NOT NULL,
  `occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_income` bigint(20) NOT NULL,
  `educational_attainment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mailing_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `household_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `relation_to_head` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `contact_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 57 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of residents
-- ----------------------------
INSERT INTO `residents` VALUES (2, NULL, 'Stehr', 'Emmalee', 'Wilderman', NULL, '1982-04-23', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O-', 1, 'Freight Agent', 'Regular', 9200, 'College Undergrad', '2494 Bogisich Rte, SP404, Kodego, NCR', 1, 'Daughter', 2, 'dsenger@example.org', '913-932-8228', '2023-02-08 09:55:42', '2023-02-20 15:50:10');
INSERT INTO `residents` VALUES (3, NULL, 'Champlin', 'Devante', 'Kshlerin', NULL, '1995-07-03', 'SP404, Kodego, NCR', 'Male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Separated', 'A-', 1, 'Farmer', 'Contractual', 5000, 'HS Graduate', '6667 Frederick Villages, SP404, Kodego, NCR', 4, 'Wife', 2, 'blick.aaliyah@example.com', '240-537-4527', '2023-02-08 09:55:43', '2023-02-20 15:51:55');
INSERT INTO `residents` VALUES (4, NULL, 'Wilkinson', 'Albert', 'Keebler', NULL, '1996-11-10', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'A-', 0, 'Business Owner', 'Self-employed', 27000, 'College Graduate', '8677 Bahringer Dale Suite 785, SP404, Kodego, NCR', 9, 'Daughter', 2, 'sarah27@example.net', '678-566-3676', '2023-02-08 09:55:43', '2023-02-20 15:53:50');
INSERT INTO `residents` VALUES (5, NULL, 'Waelchi', 'Samara', 'Jacobson', NULL, '2001-12-03', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'B-', 0, 'Floor Manager', 'Contractual', 19200, 'College Undergrad', '6667 Frederick Villages, SP404, Kodego, NCR', 4, 'Head', 2, 'gconsidine@example.org', '+1-435-623-7028', '2023-02-08 09:55:43', '2023-02-20 15:56:17');
INSERT INTO `residents` VALUES (6, NULL, 'Zulauf', 'Vella', 'Romaguera', NULL, '2013-01-13', 'SP404, Kodego, NCR', 'Female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Widowed', 'O+', 1, 'Housekeeping Supervisor', 'Contractual', 28600, 'College Graduate', '46656 Roob Way Suite 586, SP404, Kodego, NCR', 12, 'Wife', 2, 'gaylord.gertrude@example.com', '1-702-354-6637', '2023-02-08 09:55:43', '2023-02-20 15:58:04');
INSERT INTO `residents` VALUES (7, NULL, 'Volkman', 'Jameson', 'Sawayn', NULL, '1995-02-11', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'O-', 0, 'Social Media Marketing Manager', 'Unemployed', 21100, 'College Graduate', '2167 Koepp Parkway Suite 781, SP404, Kodego, NCR', 9, 'Son', 2, 'dlangosh@example.com', '+16612954926', '2023-02-08 09:55:43', '2023-02-20 15:58:59');
INSERT INTO `residents` VALUES (9, NULL, 'Langosh', 'Jaunita', 'Davis', NULL, '2006-09-27', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O-', 1, 'Farmer', 'Self-employed', 8000, 'No Formal Schooling', '2167 Koepp Parkway Suite 781, SP404, Kodego, NCR', 9, 'Head', 2, 'donald.price@example.net', '(321) 288-5461', '2023-02-08 09:55:43', '2023-02-20 16:04:17');
INSERT INTO `residents` VALUES (11, NULL, 'Nader', 'Nettie', 'Kautzer', NULL, '2004-12-16', 'SP404, Kodego, NCR', 'Male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'A+', 1, 'Farmer', 'Self-employed', 27200, 'HS Graduate', '8677 Bahringer Dale Suite 785, SP404, Kodego, NCR', 2, 'Head', 2, 'jacquelyn54@example.net', '(716) 844-8198', '2023-02-08 09:55:43', '2023-02-20 16:07:14');
INSERT INTO `residents` VALUES (12, NULL, 'Marvin', 'Kali', 'Pollich', NULL, '1990-01-10', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'AB+', 1, 'Waitress', 'Regular', 13700, 'ES Graduate', '86887 Isac Ford, SP404, Kodego, NCR', 3, 'Daughter', 2, 'baumbach.gordon@example.org', '352.263.5626', '2023-02-08 09:55:43', '2023-02-20 16:09:05');
INSERT INTO `residents` VALUES (13, NULL, 'Batz', 'Agustina', 'Nitzsche', NULL, '1955-05-07', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'AB+', 1, 'Business Owner', 'Retired', 28500, 'ES Graduate', '8677 Bahringer Dale Suite 785, SP404, Kodego, NCR', 2, 'Wife', 2, 'willie06@example.com', '(567) 532-2404', '2023-02-08 09:55:43', '2023-02-20 23:35:33');
INSERT INTO `residents` VALUES (14, NULL, 'Green', 'Destini', 'Parker', NULL, '2008-05-21', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O-', 1, 'Farmer', 'Self-employed', 20600, 'College Undergrad', '197 Torrance Rest, SP404, Kodego, NCR', 7, 'Son', 2, 'michele45@example.net', '1-680-352-6486', '2023-02-08 09:55:43', '2023-02-20 16:13:17');
INSERT INTO `residents` VALUES (15, NULL, 'Denesik', 'Amanda', 'Pacocha', NULL, '1977-01-28', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O-', 0, 'Civil Engineer', 'Contractual', 26900, 'College Graduate', '2167 Koepp Parkway Suite 781, SP404, Kodego, NCR', 9, 'Father', 2, 'jweimann@example.net', '+1-404-523-1436', '2023-02-08 09:55:43', '2023-02-20 16:15:03');
INSERT INTO `residents` VALUES (16, NULL, 'Haley', 'Nicole', 'Rohan', NULL, '2019-09-04', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O-', 1, 'None', 'Unemployed', 6700, 'No Formal Schooling', '2494 Bogisich Rte, SP404, Kodego, NCR', 1, 'Head', 2, 'ggoyette@example.com', '714.738.3192', '2023-02-08 09:55:43', '2023-02-20 16:16:35');
INSERT INTO `residents` VALUES (17, NULL, 'Orn', 'Bridie', 'Rohan', NULL, '1996-07-15', 'SP404, Kodego, NCR', 'Male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Separated', 'A+', 0, 'OFW', 'Contractual', 45000, 'College Graduate', '60535 Beahan Street Apt. 472, SP404, Kodego, NCR', 6, 'Head', 2, 'wilhelm08@example.net', '+1-302-793-3208', '2023-02-08 09:55:43', '2023-02-20 16:19:02');
INSERT INTO `residents` VALUES (18, NULL, 'Jacobs', 'Kurtis', 'Dietrich', NULL, '2010-04-18', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'A+', 1, 'OFW', 'Contractual', 28800, 'ES Graduate', '2167 Koepp Parkway Suite 781, SP404, Kodego, NCR', 9, 'Son', 2, 'oharber@example.org', '336-885-9571', '2023-02-08 09:55:43', '2023-02-20 16:20:50');
INSERT INTO `residents` VALUES (19, NULL, 'Flatley', 'Dane', 'Bogisich', NULL, '1991-02-26', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'B-', 0, 'Housemaid', 'Contractual', 10700, 'College Undergrad', '60535 Beahan Street Apt. 472, SP404, Kodego, NCR', 6, 'Wife', 2, 'delfina05@example.net', '678-249-8410', '2023-02-08 09:55:43', '2023-02-20 16:21:51');
INSERT INTO `residents` VALUES (20, NULL, 'Reilly', 'Avis', 'Padberg', NULL, '2000-01-17', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Married', 'B+', 0, 'Housewife', 'Unemployed', 4100, 'College Undergrad', '46656 Roob Way Suite 586, SP404, Kodego, NCR', 12, 'Daughter', 2, 'marlon.halvorson@example.com', '+1.740.600.8872', '2023-02-08 09:55:43', '2023-02-20 16:23:03');
INSERT INTO `residents` VALUES (21, NULL, 'Wisoky', 'Jarod', 'Cruickshank', NULL, '2016-10-17', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'AB+', 1, 'Student', 'Unemployed', 0, 'ES Undergrad', '8677 Bahringer Dale Suite 785, SP404, Kodego, NCR', 2, 'Daughter', 2, 'jessika.green@example.net', '779.960.4933', '2023-02-08 09:55:43', '2023-02-20 16:24:22');
INSERT INTO `residents` VALUES (22, NULL, 'Skiles', 'Elmira', 'Hand', NULL, '2009-06-07', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O-', 1, 'Student', 'Unemployed', 0, 'ES Graduate', '197 Torrance Rest, SP404, Kodego, NCR', 7, 'Son', 2, 'asa76@example.net', '757-286-7211', '2023-02-08 09:55:43', '2023-02-20 16:25:43');
INSERT INTO `residents` VALUES (23, NULL, 'Rogahn', 'Keyon', 'Sanford', NULL, '2004-01-13', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'A-', 1, 'Business Owner', 'Self-employed', 33000, 'College Undergrad', '546 Tiara Curve, SP404, Kodego, NCR', 11, 'Head', 2, 'official@gmail.com', '+1-801-529-9728', '2023-02-08 09:55:43', '2023-02-20 16:27:51');
INSERT INTO `residents` VALUES (24, NULL, 'Thiel', 'Sofia', 'Huel', NULL, '2013-12-31', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'B+', 1, 'Student', 'Unemployed', 0, 'ES Undergrad', '81435 Bria Common, SP404, Kodego, NCR', 5, 'Head', 2, 'mcollier@example.com', '+12066319224', '2023-02-08 09:55:43', '2023-02-20 16:28:57');
INSERT INTO `residents` VALUES (25, NULL, 'Boyer', 'Benny', 'Feest', NULL, '1988-10-05', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O-', 0, 'Farmer', 'Self-employed', 19600, 'ES Graduate', '87927 O\'Reilly Forest Apt. 782, SP404, Kodego, NCR', 8, 'Daughter', 2, 'admin@gmail.com', '1-914-837-1996', '2023-02-08 09:55:43', '2023-02-20 16:30:04');
INSERT INTO `residents` VALUES (26, NULL, 'Cole', 'Ivory', 'Schowalter', NULL, '1995-04-16', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O+', 1, 'Jewelry Model OR Mold Makers', 'Regular', 27700, 'ES Graduate', '60535 Beahan Street Apt. 472, SP404, Kodego, NCR', 6, 'Son', 2, 'walker47@example.com', '+19514702047', '2023-02-08 09:55:43', '2023-02-20 16:31:32');
INSERT INTO `residents` VALUES (27, NULL, 'Reinger', 'Granville', 'Smith', NULL, '1989-11-05', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'B+', 1, 'Construction Worker', 'Unemployed', 11000, 'HS Graduate', '2494 Bogisich Rte, SP404, Kodego, NCR', 1, 'Wife', 2, 'eraynor@example.net', '+1-573-527-9786', '2023-02-08 09:55:43', '2023-02-20 16:34:56');
INSERT INTO `residents` VALUES (28, NULL, 'Hoppe', 'Zoie', 'Schaden', NULL, '1981-09-25', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'O-', 0, 'OFW', 'Contractual', 29100, 'ES Graduate', '86887 Isac Ford, SP404, Kodego, NCR', 3, 'Son', 2, 'oliver46@example.org', '347-378-1601', '2023-02-08 09:55:43', '2023-02-20 16:37:56');
INSERT INTO `residents` VALUES (29, NULL, 'Davis', 'Vinnie', 'Weissnat', NULL, '2003-07-16', 'SP404, Kodego, NCR', 'Female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'O-', 1, 'Student', 'Unemployed', 0, 'ES Graduate', '58404 Sadie Court Suite 203, SP404, Kodego, NCR', 10, 'Head', 2, 'hintz.baron@example.com', '629-758-9581', '2023-02-08 09:55:43', '2023-02-20 16:39:14');
INSERT INTO `residents` VALUES (30, NULL, 'Blanda', 'Leola', 'Gulgowski', NULL, '2019-11-14', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O+', 0, 'None', 'Unemployed', 6400, 'No Formal Schooling', '86887 Isac Ford, SP404, Kodego, NCR', 3, 'Head', 2, 'ohamill@example.net', '234-367-1592', '2023-02-08 09:55:43', '2023-02-20 16:40:25');
INSERT INTO `residents` VALUES (31, NULL, 'Torphy', 'Maximillia', 'Sauer', NULL, '1956-02-03', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Widowed', 'O-', 1, 'Farmer', 'Retired', 16700, 'HS Graduate', '60535 Beahan Street Apt. 472, SP404, Kodego, NCR', 6, 'Son', 2, 'marcella.gusikowski@example.com', '240-928-1446', '2023-02-08 09:55:43', '2023-02-20 23:36:18');
INSERT INTO `residents` VALUES (32, NULL, 'Hettinger', 'Dario', 'Heidenreich', NULL, '1994-07-27', 'SP404, Kodego, NCR', 'Male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'A+', 1, 'Postal Service Mail Carrier', 'Regular', 16900, 'College Undergrad', '81435 Bria Common, SP404, Kodego, NCR', 5, 'Daughter', 2, 'maryam86@example.org', '1-479-988-3937', '2023-02-08 09:55:43', '2023-02-20 16:45:00');
INSERT INTO `residents` VALUES (34, NULL, 'Stiedemann', 'Vito', 'Miller', NULL, '2018-12-09', 'SP404, Kodego, NCR', 'Male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'B+', 1, 'Rail Car Repairer', 'Regular', 15000, 'No Formal Schooling', '6667 Frederick Villages, SP404, Kodego, NCR', 4, 'Daughter', 2, 'reichel.roslyn@example.org', '534.509.0335', '2023-02-08 09:55:43', '2023-02-20 16:47:02');
INSERT INTO `residents` VALUES (35, NULL, 'Bradtke', 'Darby', 'Larson', NULL, '1994-09-05', 'SP404, Kodego, NCR', 'Male', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'AB+', 1, 'Student', 'Unemployed', 0, 'College Undergrad', '58404 Sadie Court Suite 203, SP404, Kodego, NCR', 10, 'Daughter', 2, 'elsie86@example.com', '646-810-6076', '2023-02-08 09:55:43', '2023-02-20 16:48:09');
INSERT INTO `residents` VALUES (36, NULL, 'Bode', 'Aurelia', 'Jacobson', NULL, '2004-11-03', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Single', 'O-', 0, 'Call Center Agent', 'Regular', 17700, 'HS Graduate', '46656 Roob Way Suite 586, SP404, Kodego, NCR', 12, 'Head', 2, 'bednar.branson@example.net', '+1 (631) 259-4030', '2023-02-08 09:55:43', '2023-02-20 16:49:21');
INSERT INTO `residents` VALUES (37, NULL, 'Wunsch', 'Hollie', 'Walker', NULL, '1992-11-08', 'SP404, Kodego, NCR', 'Female', 'Roman Catholic', 'Filipino', 'Filipino', 'Separated', 'AB+', 0, 'Call Center Agent', 'Regular', 22800, 'HS Graduate', '2494 Bogisich Rte, SP404, Kodego, NCR', 1, 'Wife', 2, 'devan06@example.org', '+1 (508) 607-5490', '2023-02-08 09:55:43', '2023-02-20 16:50:41');
INSERT INTO `residents` VALUES (38, NULL, 'Kunde', 'Blanche', 'Hauck', NULL, '1993-12-03', 'SP404, Kodego, NCR', 'Female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Separated', 'AB+', 0, 'Housemaid', 'Contractual', 10000, 'ES Graduate', '87927 O\'Reilly Forest Apt. 782, SP404, Kodego, NCR', 8, 'Head', 2, 'hackett.easton@example.net', '484.943.4966', '2023-02-08 09:55:43', '2023-02-20 16:51:43');
INSERT INTO `residents` VALUES (39, NULL, 'Kutch', 'Eriberto', 'Lueilwitz', NULL, '1978-01-22', 'SP404, Kodego, NCR', 'Female', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Widowed', 'B+', 1, 'Teacher', 'Regular', 21500, 'College Graduate', '197 Torrance Rest, SP404, Kodego, NCR', 7, 'Head', 2, 'baumbach.lenore@example.com', '+1 (848) 663-8338', '2023-02-08 09:55:43', '2023-02-20 16:53:21');
INSERT INTO `residents` VALUES (40, NULL, 'Leffler', 'Guadalupe', 'Jacobi', NULL, '2019-04-10', 'SP404, Kodego, NCR', 'Male', 'Iglesia Ni Cristo', 'Filipino', 'Filipino', 'Single', 'B-', 1, 'None', 'Unemployed', 0, 'No Formal Schooling', '81435 Bria Common, SP404, Kodego, NCR', 5, 'Daughter', 2, 'jacquelyn.rodriguez@example.org', '1-270-477-3400', '2023-02-08 09:55:43', '2023-02-20 16:54:05');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Admin User', 'admin@gmail.com', NULL, '$2y$10$XQGReG5ut3I4O1ztvQXDVOggDt2RqI1av37TBm3wn6kWLjzMSj2n2', 2, NULL, NULL, '2023-02-08 09:55:42', '2023-02-08 09:55:42');
INSERT INTO `user` VALUES (2, 'Official', 'Official@gmail.com', NULL, '$2y$10$NMmA9AWOT3ggtYfQ6OlXXOBTSy8lstAmzzQdxXmR5q0vUiw/6AJWK', 1, NULL, NULL, '2023-02-08 09:55:42', '2023-02-11 01:38:51');
INSERT INTO `user` VALUES (3, 'User', 'user@gmail.com', NULL, '$2y$10$xj.cklkuMzlbpMiqIzgo9OkEV93GXEfk.VPgUyy8httS62/aYsfJq', 0, NULL, NULL, '2023-02-08 09:55:42', '2023-02-11 01:21:37');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_by` bigint(20) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin User', 'admin@gmail.com', NULL, '$2y$10$XQGReG5ut3I4O1ztvQXDVOggDt2RqI1av37TBm3wn6kWLjzMSj2n2', 2, NULL, NULL, '2023-02-08 09:55:42', '2023-02-08 09:55:42');
INSERT INTO `users` VALUES (2, 'Official', 'Official@gmail.com', NULL, '$2y$10$0oW7nlBxQ2SBY5wfRU7ZpuIlDo2oAONsNG6g48ADWSZNANMTUcM.a', 1, NULL, NULL, '2023-02-08 09:55:42', '2023-02-15 09:37:10');
INSERT INTO `users` VALUES (3, 'User', 'user@gmail.com', NULL, '$2y$10$xj.cklkuMzlbpMiqIzgo9OkEV93GXEfk.VPgUyy8httS62/aYsfJq', 0, NULL, NULL, '2023-02-08 09:55:42', '2023-02-11 01:21:37');
INSERT INTO `users` VALUES (18, 'trial', 'sfadfa@afdfa.com', NULL, '$2y$10$oVCniKR058fQ6Gv0y4MA7O9Avs1V9PuFnvnrKkObM41FI6X/cX/Te', 2, NULL, NULL, '2023-02-15 23:53:19', '2023-02-15 23:55:50');
INSERT INTO `users` VALUES (19, 'Pogi Boss', 'pogiboss@bigboss.com', NULL, '$2y$10$FPrPt9JW1W40AXoVl5R6/e.No3myClaod3xjMqOyQ7Rf0fJW.bHAe', 2, NULL, NULL, '2023-02-17 08:22:21', '2023-02-19 05:26:16');

-- ----------------------------
-- Table structure for zones
-- ----------------------------
DROP TABLE IF EXISTS `zones`;
CREATE TABLE `zones`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `zone_no` int(11) NOT NULL,
  `barangay_official_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of zones
-- ----------------------------
INSERT INTO `zones` VALUES (1, 7, 8, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (2, 2, 7, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (3, 7, 2, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (4, 7, 6, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (5, 3, 5, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (6, 2, 4, '2023-02-08 09:55:43', '2023-02-08 09:55:43');
INSERT INTO `zones` VALUES (7, 3, 3, '2023-02-08 09:55:43', '2023-02-08 09:55:43');

SET FOREIGN_KEY_CHECKS = 1;

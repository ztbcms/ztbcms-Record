-- ----------------------------
-- 交易记录表
-- ----------------------------
DROP TABLE IF EXISTS `cms_record_trade`;
CREATE TABLE `cms_record_trade` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上一条记录id，方便排除错误记录',
  `to` varchar(255) NOT NULL DEFAULT '' COMMENT '记录流入者',
  `to_type` varchar(255) NOT NULL DEFAULT 'member' COMMENT '记录流入者者类型',
  `from` varchar(255) NOT NULL DEFAULT '' COMMENT '记录流出者',
  `from_type` varchar(255) NOT NULL DEFAULT 'member' COMMENT '记录流出者类型',
  `target` varchar(255) NOT NULL DEFAULT '' COMMENT '记录来源者',
  `target_type` varchar(255) NOT NULL DEFAULT '' COMMENT '记录来源者类型',
  `income` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收入',
  `pay` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '支出',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `detail` text NOT NULL COMMENT '记录详情',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态，0位正常，1无效，2冻结',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间戳',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间戳',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注信息',
  `to_name` varchar(64) NOT NULL DEFAULT '' COMMENT '记录流入者名称',
  `from_name` varchar(64) NOT NULL DEFAULT '' COMMENT '记录流出者名称',
  `target_name` varchar(64) NOT NULL DEFAULT '' COMMENT '记录来源名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- ----------------------------
-- 积分记录表
-- ----------------------------
DROP TABLE IF EXISTS `cms_record_integral`;
CREATE TABLE `cms_record_integral` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '上一条记录id，方便排除错误记录',
  `to` varchar(255) NOT NULL DEFAULT '' COMMENT '记录流入者',
  `to_type` varchar(255) NOT NULL DEFAULT 'member' COMMENT '记录流入者者类型',
  `from` varchar(255) NOT NULL DEFAULT '' COMMENT '记录流出者',
  `from_type` varchar(255) NOT NULL DEFAULT 'member' COMMENT '记录流出者类型',
  `target` varchar(255) NOT NULL DEFAULT '' COMMENT '记录来源者',
  `target_type` varchar(255) NOT NULL DEFAULT '' COMMENT '记录来源者类型',
  `income` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收入',
  `pay` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '支出',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `detail` text NOT NULL COMMENT '记录详情',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态，0位正常，1无效，2冻结',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间戳',
  `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间戳',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注信息',
  `to_name` varchar(64) NOT NULL DEFAULT '' COMMENT '记录流入者名称',
  `from_name` varchar(64) NOT NULL DEFAULT '' COMMENT '记录流出者名称',
  `target_name` varchar(64) NOT NULL DEFAULT '' COMMENT '记录来源名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
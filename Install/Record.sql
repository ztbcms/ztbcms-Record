-- ----------------------------
-- 交易记录表
-- ----------------------------
DROP TABLE IF EXISTS `cms_record_trade`;
CREATE TABLE `cms_record_trade` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL COMMENT '上一条记录id，方便排除错误记录',
  `userid` int(11) DEFAULT NULL COMMENT '所属用户id',
  `user_type` varchar(255) DEFAULT 'member' COMMENT '所属用户类型：默认是member',
  `income` decimal(10,2) DEFAULT NULL COMMENT '收入',
  `pay` decimal(10,2) DEFAULT NULL COMMENT '支出',
  `balance` decimal(10,2) DEFAULT NULL COMMENT '余额',
  `type` varchar(255) DEFAULT NULL COMMENT '记录类型',
  `record_no` varchar(255) DEFAULT NULL COMMENT '记录凭证，通过type和record 可以找到产生记录的源头',
  `detail` text COMMENT '记录详情',
  `status` int(11) DEFAULT '0' COMMENT '状态，0位正常，1无效，2冻结',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间戳',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间戳',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;
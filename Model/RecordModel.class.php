<?php
namespace Record\Model;

use Common\Model\Model;

class RecordModel extends Model {
    /**
     * 正常状态
     */
    const STATUS_VAILD = 0;
    /**
     * 非法状态
     */
    const STATIS_INVAILD = 1;
    /**
     * 冻结状态
     */
    const STATUS_FROZEN = 2;
}
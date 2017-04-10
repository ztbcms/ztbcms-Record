<?php
namespace Record\Service;

use Record\Model\RecordModel;
use Record\Records\IntegralRecord;

class IntegralRecordService extends RecordService {
    /**
     * 创建一个交易记录
     * @param        $to  流入者id
     * @param        $target_type 记录产生类型
     * @param        $target 记录产生唯一标识
     * @param int    $income 收入
     * @param int    $pay 支出
     * @param int    $status 记录状态
     * @param string $detail
     * @return array
     */
    static function createIntegralRecord(
        $to,
        $target_type,
        $target,
        $income = 0,
        $pay = 0,
        $status = RecordModel::STATUS_VAILD,
        $detail = '',
        $remark = ''
    ) {
        $recored = new IntegralRecord($to, $target_type, $target);
        $recored->setIncome($income);
        $recored->setPay($pay);
        $recored->setStatus($status);
        $recored->setDetail($detail);
        $recored->setRemark($remark);

        return self::createRrcord($recored);
    }
}
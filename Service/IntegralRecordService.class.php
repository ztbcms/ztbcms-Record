<?php
namespace Record\Service;

use Record\Model\RecordModel;
use Record\Records\IntegralRecord;

class IntegralRecordService extends RecordService {
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
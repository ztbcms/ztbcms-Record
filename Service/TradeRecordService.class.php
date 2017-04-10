<?php
namespace Record\Service;

use Record\Model\RecordModel;
use Record\Records\TradeRecord;

class TradeRecordService extends RecordService {
    static function createTradeRecord(
        $to,
        $target_type,
        $target,
        $income = 0,
        $pay = 0,
        $status = RecordModel::STATUS_VAILD,
        $detail = ''
    ) {
        $trade_recored = new TradeRecord($to, $target_type, $target);
        $trade_recored->setIncome($income);
        $trade_recored->setPay($pay);
        $trade_recored->setStatus($status);
        $trade_recored->setDetail($detail);

        return self::createRrcord($trade_recored);
    }
}
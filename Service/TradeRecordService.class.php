<?php
namespace Record\Service;

use Record\Model\RecordModel;
use Record\Records\TradeRecord;

class TradeRecordService extends RecordService {
    static function createTradeRecord(
        $userid,
        $type,
        $record_no,
        $income = 0,
        $pay = 0,
        $status = RecordModel::STATUS_VAILD,
        $detail = '',
        $remark = ''
    ) {
        $trade_recored = new TradeRecord($userid, $type, $record_no);
        $trade_recored->setIncome($income);
        $trade_recored->setPay($pay);
        $trade_recored->setStatus($status);
        $trade_recored->setDetail($detail);
        $trade_recored->setRemark($remark);

        return self::createRrcord($trade_recored);
    }
}
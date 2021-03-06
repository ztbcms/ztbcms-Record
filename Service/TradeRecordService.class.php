<?php
namespace Record\Service;

use Record\Model\RecordModel;
use Record\Records\TradeRecord;

class TradeRecordService extends RecordService {
    /**
     * 创建一个交易记录
     * @param string   $to  流入者id
     * @param string       $target_type 记录产生类型
     * @param string       $target 记录产生唯一标识
     * @param int    $income 收入
     * @param int    $pay 支出
     * @param int    $status 记录状态
     * @param string $detail
     * @return array
     */
    static function createTradeRecord(
        $to,
        $target_type,
        $target,
        $income = 0,
        $pay = 0,
        $status = RecordModel::STATUS_VAILD,
        $detail = ''
    ) {
        $trade_record = new TradeRecord($to, $target_type, $target);
        $trade_record->setIncome($income);
        $trade_record->setPay($pay);
        $trade_record->setStatus($status);
        $trade_record->setDetail($detail);

        return self::createRrcord($trade_record);
    }
}
<?php
namespace Record\Service;

use Record\Libs\Record;
use Record\Model\RecordModel;
use System\Service\BaseService;

class RecordService extends BaseService {
    /**
     *  创建记录
     *
     * @param Record $record 记录对象
     * @return array
     */
    static function createRrcord(Record $record) {
        //获取上一条合法的record id
        $where['to'] = $record->getTo();
        $last_vaild_record = M($record->table_name)->where($where)->order('id desc')->find();
        $last_vaild_balance = self::getBalance($record)['data']; //获取最近的余额信息

        $Model = M();
        $Model->startTrans();

        $balance = $last_vaild_balance + $record->getIncome() - $record->getPay();

        $now = time();
        $data = [
            'parent_id' => $last_vaild_record ? $last_vaild_record['id'] : 0,
            'to' => $record->getTo(),
            'to_type' => $record->getToType(),
            'from' => $record->getFrom(),
            'from_type' => $record->getFromType(),
            'target' => $record->getTarget(),
            'target_type' => $record->getTargetType(),
            'income' => $record->getIncome(),
            'pay' => $record->getPay(),
            'balance' => $balance,//计算当前记录的余额
            'detail' => $record->getDetail(),
            'status' => $record->getStatus(),
            'create_time' => $now,
            'update_time' => $now,
            'remark' => $record->getRemark(),
            'to_name' => $record->getToName(),
            'from_name' => $record->getFromName(),
            'target_name' => $record->getTargetName(),
        ];
        $result = M($record->table_name)->add($data);
        if ($result) {
            $Model->commit();
            return self::createReturn(true, $result);
        }else{
            $Model->rollback();
            return self::createReturn(false, null, '操作失败');
        }
    }

    /**
     * 获取当前 to（记录流入者）余额
     *
     * @param Record $record
     * @return array
     */
    static function getBalance(Record $record){
        $where = [
            'to' => $record->getTo(),
            'status' => RecordModel::STATUS_VAILD
        ];
        $record = M($record->table_name)->where($where)->order('id DESC')->find();

        if(empty($record)){
            $balance = 0;
        }else{
            $balance = $record['balance'];
        }

        return self::createReturn(true, $balance);
    }

    /**
     * 获取当前 to（记录流入者）余额 (实时计算)
     *
     * @param Record $record
     * @return array
     */
    static function getBalanceByCal(Record $record) {
        $where = [
            'to' => $record->getTo(),
            'to_type' => $record->getToType(),
            'status' => RecordModel::STATUS_VAILD
        ];
        $lists = M($record->table_name)->field('income,pay')->where($where)->select();
        $total = 0;
        for ($i = 0; $i < count($lists); $i++) {
            $total = $total + $lists[$i]['income'] - +$lists[$i]['pay'];
        }

        return self::createReturn(true, $total, 'ok');
    }
}
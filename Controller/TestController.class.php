<?php
namespace Record\Controller;


use Common\Controller\AdminBase;
use Record\Records\IntegralRecord;
use Record\Records\TradeRecord;
use Record\Service\RecordService;
use Record\Service\TradeRecordService;

class TestController extends AdminBase {

    public function addTradeRecord() {
        $recode = new TradeRecord('1', 'wxpay', '1232122');
        $recode->setIncome(100);
        $this->ajaxReturn(RecordService::createRrcord($recode));
//        $this->ajaxReturn(TradeRecordService::createTradeRecord('1', 'wxpay', '1232122', 100, 50));
    }

    public function addIntegralRecord() {
        $recode = new IntegralRecord('2', 'wxpay', '66');
        $recode->setIncome(100);
        $this->ajaxReturn(RecordService::createRrcord($recode));
//        $this->ajaxReturn(TradeRecordService::createTradeRecord('1', 'wxpay', '1232122', 100, 50));
    }
}
<?php
namespace Record\Controller;


use Common\Controller\AdminBase;
use Record\Records\TradeRecord;
use Record\Service\RecordService;
use Record\Service\TradeRecordService;

class TestController extends AdminBase {
    public function index() {
        $recode = new TradeRecord('1', 'wxpay', '1232122');
        $recode->setIncome(100);
        $this->ajaxReturn(RecordService::createRrcord($recode));
//        $this->ajaxReturn(TradeRecordService::createTradeRecord('1', 'wxpay', '1232122', 100, 50));
    }
}
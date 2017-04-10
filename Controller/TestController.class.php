<?php
namespace Record\Controller;


use Common\Controller\AdminBase;
use Record\Service\TradeRecordService;

class TestController extends AdminBase {
    public function index() {
//        $recode = new TradeRecord('1', 'wxpay', '1232122');
//        $recode->setIncome(100);
        $this->ajaxReturn(TradeRecordService::createTradeRecord('1', 'wxpay', '1232122', 100, 50));
    }
}
<?php

namespace Record\Controller;

use Common\Controller\AdminBase;

/**
 * 记录
 */
class RecordController extends AdminBase {

    /**
     * 获取记录列表接口
     */
    function lists(){
        $where = I('where');
        foreach ($where as $key => $item) {
            if ($item == '') {
                unset($where[$key]);
            }
        }

        $order = 'id DESC';
        $page = I('page', 1);
        $limit = I('limit', 20);
        $tabName = I('tabName');
        $lists = M($tabName)->where($where)->order($order)->page($page, $limit)->select();
        $total = M($tabName)->where($where)->count();
        $data = [
            'lists' => $lists ? $lists : [],
            'limit' => $limit,
            'page' => $page,
            'total' => $total,
            'page_count' => ceil($total / $limit),
        ];

        $this->ajaxReturn(self::createReturn(true, $data));
    }

    /**
     * 交易记录列表页
     */
    function trade(){
        $this->assign('tabName', 'recordTrade');
        $this->display('lists');
    }

    /**
     * 积分列表页
     */
    function integral(){
        $this->assign('tabName', 'recordIntegral');
        $this->display('lists');
    }
}
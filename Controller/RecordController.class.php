<?php

namespace Record\Controller;

use Common\Controller\AdminBase;

class RecordController extends AdminBase {
    public function index() {
        $tabName = I('tabName');
        if (IS_AJAX) {
            if (I('where')) {
                $where = I('where');
                foreach ($where as $key => $item) {
                    if ($item == '') {
                        unset($where[$key]);
                    }
                }
            }

            $order = 'id DESC';
            $page = I('page', 1);
            $limit = I('limit', 20);
            $lists = M($tabName)->where($where)->order($order)->page($page, $limit)->select();
            $total = M($tabName)->where($where)->count();
            $data = [
                'lists' => $lists ? $lists : [],
                'limit' => $limit,
                'page' => $page,
                'total' => $total,
                'page_count' => ceil($total / $limit),
            ];

            return $this->success($data);
        }
        $this->assign('tabName', $tabName);
        $this->display();
    }

    public function trade() {

    }
}
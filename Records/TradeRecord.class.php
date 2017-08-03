<?php
namespace Record\Records;

use Record\Libs\Record;

class TradeRecord extends Record {
    public $table_name = 'RecordTrade';

    /**
     * TradeRecord constructor.
     *
     * @param $to
     * @param $to_name
     * @param $target_type
     * @param $target
     */
    public function __construct($to = '', $to_name = '', $target_type = '', $target = '') {
        $this->setTo($to);
        $this->setToName($to_name);
        $this->setTargetType($target_type);
        $this->setTarget($target);
    }
}
<?php
namespace Record\Records;

use Record\Libs\Record;

class TradeRecord extends Record {
    public $table_name = 'RecordTrade';

    public function __construct($to, $target_type, $target) {
        $this->setTo($to);
        $this->setTargetType($target_type);
        $this->setTarget($target);
    }
}
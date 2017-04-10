<?php
namespace Record\Records;

use Record\Libs\Record;

class IntegralRecord extends Record {
    public $table_name = 'RecordIntegral';

    public function __construct($to, $target_type, $target) {
        $this->setTo($to);
        $this->setTargetType($target_type);
        $this->setTarget($target);
    }
}
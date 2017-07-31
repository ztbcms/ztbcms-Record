<?php
namespace Record\Records;

use Record\Libs\Record;

class IntegralRecord extends Record {
    public $table_name = 'RecordIntegral';

    /**
     * IntegralRecord constructor.
     *
     * @param $to
     * @param $to_name
     * @param $target
     * @param $target_type
     * @param $target_name
     */
    public function __construct($to, $to_name,  $target, $target_type, $target_name) {
        $this->setTo($to);
        $this->setToName($to_name);

        $this->setTargetType($target_type);
        $this->setTarget($target);
        $this->setTargetName($target_name);

        $this->setFrom('0');
        $this->setFromName('系统');
        $this->setFromType('系统');
    }
}
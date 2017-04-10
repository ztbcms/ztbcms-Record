<?php
namespace Record\Records;

use Record\Libs\Record;

class IntegralRecord extends Record {
    public $table_name = 'RecordIntegral';

    public function __construct($userid, $type, $record_no) {
        $this->setUserid($userid);
        $this->setType($type);
        $this->setRecordNo($record_no);
    }
}
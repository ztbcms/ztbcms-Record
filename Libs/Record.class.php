<?php
namespace Record\Libs;

abstract class Record {
    public $table_name = 'RecordTrade';

    protected $to = 0;
    protected $to_type = '';
    protected $to_name = '';
    protected $from = 0;
    protected $from_type = '';
    protected $from_name = '';
    protected $target = 0;
    protected $target_type = '';
    protected $target_name = '';
    protected $income = 0;
    protected $pay = 0;
    protected $balance = 0;
    protected $detail = '';
    protected $status = 0;
    protected $remark = '';

    /**
     * @param int $to
     */
    public function setTo($to) {
        $this->to = $to;
    }

    /**
     * @param string $to_type
     */
    public function setToType($to_type) {
        $this->to_type = $to_type;
    }

    /**
     * @param int $from
     */
    public function setFrom($from) {
        $this->from = $from;
    }

    /**
     * @param string $from_type
     */
    public function setFromType($from_type) {
        $this->from_type = $from_type;
    }

    /**
     * @param int $target
     */
    public function setTarget($target) {
        $this->target = $target;
    }

    /**
     * @param string $target_type
     */
    public function setTargetType($target_type) {
        $this->target_type = $target_type;
    }

    /**
     * @param int $income
     */
    public function setIncome($income) {
        $this->income = $income;
    }

    /**
     * @param string $pay
     */
    public function setPay($pay) {
        $this->pay = $pay;
    }

    /**
     * @param int $balance
     */
    public function setBalance($balance) {
        $this->balance = $balance;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail) {
        $this->detail = $detail;
    }

    /**
     * @param string $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * @param string $remark
     */
    public function setRemark($remark) {
        $this->remark = $remark;
    }


    /**
     * @return int
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * @return string
     */
    public function getToType() {
        return $this->to_type;
    }

    /**
     * @return int
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getFromType() {
        return $this->from_type;
    }

    /**
     * @return int
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * @return string
     */
    public function getTargetType() {
        return $this->target_type;
    }

    /**
     * @return int
     */
    public function getIncome() {
        return $this->income;
    }

    /**
     * @return string
     */
    public function getPay() {
        return $this->pay;
    }

    /**
     * @return int
     */
    public function getBalance() {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getDetail() {
        return $this->detail;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getRemark() {
        return $this->remark;
    }

    /**
     * @return string
     */
    public function getToName() {
        return $this->to_name;
    }

    /**
     * @param string $to_name
     */
    public function setToName(string $to_name) {
        $this->to_name = $to_name;
    }

    /**
     * @return string
     */
    public function getFromName() {
        return $this->from_name;
    }

    /**
     * @param string $from_name
     */
    public function setFromName(string $from_name) {
        $this->from_name = $from_name;
    }

    /**
     * @return string
     */
    public function getTargetName() {
        return $this->target_name;
    }

    /**
     * @param string $target_name
     */
    public function setTargetName(string $target_name) {
        $this->target_name = $target_name;
    }


}
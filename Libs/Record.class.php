<?php
namespace Record\Libs;

abstract class Record {
    public $table_name = 'RecordTrade';

    protected $userid = 0;
    protected $user_type = 'member';
    protected $income = 0;
    protected $pay = 0;
    protected $balance = 0;
    protected $type = '';
    protected $record_no = 0;
    protected $detail = '';
    protected $status = 0;
    protected $remark = '';

    /**
     * @return int
     */
    public function getUserid() {
        return $this->userid;
    }

    /**
     * @return string
     */
    public function getUserType() {
        return $this->user_type;
    }

    /**
     * @return int
     */
    public function getIncome() {
        return $this->income;
    }

    /**
     * @return int
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
    public function getType() {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getRecordNo() {
        return $this->record_no;
    }

    /**
     * @return string
     */
    public function getDetail() {
        return $this->detail;
    }

    /**
     * @return int
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
     * @param int $userid
     */
    public function setUserid($userid) {
        $this->userid = $userid;
    }

    /**
     * @param string $user_type
     */
    public function setUserType($user_type) {
        $this->user_type = $user_type;
    }

    /**
     * @param int $income
     */
    public function setIncome($income) {
        $this->income = $income;
    }

    /**
     * @param int $pay
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
     * @param string $type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * @param int $record_no
     */
    public function setRecordNo($record_no) {
        $this->record_no = $record_no;
    }

    /**
     * @param string $detail
     */
    public function setDetail($detail) {
        $this->detail = $detail;
    }

    /**
     * @param int $status
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


}
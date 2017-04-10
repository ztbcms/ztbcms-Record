### 记录模块

可以记录常规的交易记录，积分记录和各种收入相关的记录。



- id

- parent_id
    - int
    - 上一条记录id，方便排除错误记录

- userid
    - 所属用户id
    - int

- user_type
    - 所属用户类型：默认是member
    - varchar

- income
    - 收入
    - float

- pay
    - 支付
    - float

- balance
    - 余额
    - float

- type
    - 记录类型：比如wxpay , buy_goods
    - varchar(255)

- record_no
    - 记录凭证，wxpay的out_trade_on，buy_goods的oder_id【ps 通过type和record 可以找到产生记录的源头】
    - varchar(255)

- detail
    - 记录详情
    - Text

- status
    - 记录状态：0在正常，1无效，2冻结
    - int

- create_time
    - int
    - 创建时间

- update_time
    - int
    - 更新时间

- remark
    - 备注信息



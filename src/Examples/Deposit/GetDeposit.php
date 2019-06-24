<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:32
 */

use TransferEasyApi\Deposit;
include_once '../../Api/Deposit.php';

$dep = new Deposit();

$param = [
    "no" => "deposit_no",
//    "out_trade_id" => "your_trade_id",
];

$dep->getDeposit($param);

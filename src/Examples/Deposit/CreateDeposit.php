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
    "currency" => "HKD",
    "amount" => "1000000",
    "payer_bank_acc_number" => "TEST-666",
//    "payer_bank_acc_no" => "",
    "escrow_bank_acc_number" => "20143304",
//    "out_trade_id" => "your_trade_id",
];

$dep->createDeposit($param);

<?php
/**
 * Created by PhpStorm.
 * User => kongfm
 * Date => 2018/10/30
 * Time => 17 =>43
 */


use TransferEasyApi\Transfer;
include_once '../../Api/Transfer.php';

$tran = new Transfer();

$param = [
    "beneficiaries" => [
        [
            "currency" => "HKD",
            "amount" => 200,
            "bank_account_number" => "TEST-777"
        ],
        [
            "currency" => "HKD",
            "amount" => 1000,
            "bank_account_number" => "TEST-777"
        ]
    ],
    "send_amount" => 0,
    "send_currency" => "CNH",
    "purpose" => "留学",
    "memo" => "测试",
    "out_trade_id" => "your_trade_id",
];
$tran->createTransfer($param);

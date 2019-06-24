<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:33
 */

use TransferEasyApi\Exchange;
include_once '../../Api/Exchange.php';

$exc = new Exchange();

$param = [
    'no' => 'exchange_no',
//    "out_trade_id" => "your_trade_id",
];

$exc->payment($param);

<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:32
 */

use TransferEasyApi\Exchange;
include_once '../../Api/Exchange.php';

$exc = new Exchange();

$param = [
    "buy_amount" => 0,
    "sell_currency" => "CNH",
    "sell_amount" => 1000000,
    "buy_currency" => "USD",
//    "out_trade_id" => "your_trade_id",
];

$exc->createExchange($param);

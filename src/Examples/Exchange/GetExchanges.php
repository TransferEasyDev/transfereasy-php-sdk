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
    'from_created_at' => '2018-10-01 00:00:00',
    'to_created_at' => '2018-10-31 23:59:59',
    'sell_currency' => 'CNH',
    'buy_currency' => 'HKD',
    'status' => 'PAYMENT',
];

$exc->getExchanges($param);

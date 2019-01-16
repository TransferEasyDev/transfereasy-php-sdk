<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:42
 */

use TransferEasyApi\Rate;
include_once '../../Api/Rate.php';

$rate = new Rate();

$param = [
    'sell_currency' => 'USD',
    'buy_currency' => 'CNY',
];

$rate->getRate($param);

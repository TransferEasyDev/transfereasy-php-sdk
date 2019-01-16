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
    'from_created_at' => '2018-10-01 00:00:00',
    'to_created_at' => '2018-10-31 23:59:59',
    'currency' => 'HKD',
    'status' => 'CANCELED',
];

$dep->getDeposits($param);

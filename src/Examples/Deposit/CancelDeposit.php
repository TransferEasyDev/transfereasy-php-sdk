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
];
$dep->cancelDeposit($param);

<?php
/**
 * Created by PhpStorm.
 * User => kongfm
 * Date => 2018/10/30
 * Time => 17 =>44
 */


use TransferEasyApi\Transfer;
include_once '../../Api/Transfer.php';

$tran = new Transfer();

$param = [
    'from_created_at' => '2018-10-01 00:00:00',
    'to_created_at' => '2018-10-31 23:59:59',
    'send_currency' => 'CNH',
    'receive_currency' => 'HKD',
    'status' => 'RISK',
];
$tran->getTransfers($param);

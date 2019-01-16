<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:44
 */


use TransferEasyApi\Transfer;
include_once '../../Api/Transfer.php';

$tran = new Transfer();

$param = [
    'no' => 'transfer_no',
];
$tran->repetitionTransfer($param);

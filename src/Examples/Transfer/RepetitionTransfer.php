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
    //    "ex_out_trade_id" => "",
    //    "new_out_trade_id" => "",
];
$tran->repetitionTransfer($param);

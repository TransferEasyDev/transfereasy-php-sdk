<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/15
 * Time: 17:54
 */
use TransferEasyApi\SubBankaccount;
include_once '../../Api/SubBankaccount.php';

$param = [
    'apply_no' => 'apply_no',
];

$subBankaccount = new SubBankaccount();
$subBankaccount->getProgress($param);

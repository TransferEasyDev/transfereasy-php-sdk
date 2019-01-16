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
    'sub_bank_account_number' => 'sub_bank_account_number',
    'from_created_at' => '2019-01-01',
    'to_created_at' => '2019-02-01',
];

$subBankaccount = new SubBankaccount();
$subBankaccount->getTransactions($param);

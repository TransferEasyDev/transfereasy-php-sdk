<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:31
 */

use TransferEasyApi\BankAccount;
include_once '../../Api/BankAccount.php';

$bacc = new BankAccount();

$param = [
    'bank_account_number' => 'TEST-777',
    'purpose' => 'PAYER',
    'currency' => 'HKD',
];

$bacc->getBacc($param);

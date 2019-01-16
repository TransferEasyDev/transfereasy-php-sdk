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
    # 'purpose' => 'PAYER',
    # 'status' => 'PENDING',
];

$bacc->getBaccs($param);

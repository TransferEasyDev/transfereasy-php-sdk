<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/7
 * Time: 16:05
 */
use TransferEasyApi\Account;
include_once '../../Api/Account.php';

$param = [
    'account' => 'example@test.com',
    'password' => '123456',
];

$account = new Account();
$account->development($param);
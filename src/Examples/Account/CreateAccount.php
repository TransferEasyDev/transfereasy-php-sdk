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
    'entity_type' => 'COMPANY',
//    'entity_type' => 'INDIVIDUAL',
    'secret' => 'your_secret',
    'partner' => 'your_partner_id',
    'callback_url' => 'http://your_callback_url',
];

$account = new Account();
$account->createAccount($param);
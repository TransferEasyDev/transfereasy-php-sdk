<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:33
 */

use TransferEasyApi\IAT;
include_once '../../Api/Iat.php';


$iat = new IAT();

$param = [
    'beneficiary_account_name' => 'benefi@example.com',
    'beneficiary_account_no' => 'beneficiary_account_no',
    'send_amount' => 1000,
    'send_currency' => 'USD',
    "purpose" => "留学",
    "memo" => "测试"
];

$iat->createIat($param);

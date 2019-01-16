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
    'from_created_at' => '2018-10-01 00:00:00',
    'to_created_at' => '2018-10-31 23:59:59',
    'send_currency' => 'USD',
];

$iat->getIats($param);

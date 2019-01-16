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
    "no" => "iat_no"
];

$iat->getIat($param);

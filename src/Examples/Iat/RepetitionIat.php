<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:41
 */

use TransferEasyApi\IAT;
include_once '../../Api/Iat.php';

$iat = new IAT();

$param = [
    'no' => 'iat_no',
//    "ex_out_trade_id" => "",
//    "new_out_trade_id" => "",

];

$iat->repetitionIat($param);

<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:42
 */

use TransferEasyApi\Others;
include_once '../../Api/Others.php';

$oth = new Others();

$param = [
    'currency' => 'HKD',
    'country' => 'HKG',
];

$oth->escrowAccounts($param);

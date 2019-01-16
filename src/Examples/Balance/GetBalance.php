<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:28
 */
use TransferEasyApi\Balance;
include_once '../../Api/Balance.php';

$balance = new Balance();
$balance->getBalance([]);

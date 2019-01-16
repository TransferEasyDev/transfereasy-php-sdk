<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:43
 */

use TransferEasyApi\Statement;
include_once '../../Api/Statement.php';

$statement = new Statement();

$param = [
    'from_created_at' => '2018-10-01 00:00:00',
    'to_created_at' => '2018-10-31 23:59:59',
];

$statement->download($param);

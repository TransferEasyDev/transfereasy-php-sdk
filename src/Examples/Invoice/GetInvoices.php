<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:42
 */

use TransferEasyApi\Invoice;
include_once '../../Api/Invoice.php';

$inv = new Invoice();

$param = [
    'from_created_at' => '2018-10-01 00:00:00',
    'to_created_at' => '2018-10-31 23:59:59',
    'currency' => 'USD',
    'status' => 'PROCESSING',
];

$invo->getInvoices($param);

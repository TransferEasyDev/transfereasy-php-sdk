<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:42
 */

use TransferEasyApi\Invoice;
include_once '../../Api/Invoice.php';

$invo = new Invoice();

$param = [
    "no" => "invoice_no"
];

$invo->getInvoice($param);

<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/15
 * Time: 17:54
 */
use TransferEasyApi\SubBankaccount;
include_once '../../Api/SubBankaccount.php';

$param = [
    'country' => 'USA',
    'shop' => [
        'type' => 'AMAZON',
        'name' => 'name',
        'industry' => '旅行，运输，住宿及物流',
        'url' => 'https://www.amazon.com/xxxx',
        'piece_transfer_amount' => 1000,
        'week_transfer_amount' => 1000,
        'amazon_site' => 'USA',
        'business_description' => 'business_description',
        'seller_id' => 'seller_id',
        'access_key' => 'access_key',
        'secret_key' => 'secret_key',
    ]
];

$subBankaccount = new SubBankaccount();
$subBankaccount->createSubBankaccount($param, $withFiles = true);

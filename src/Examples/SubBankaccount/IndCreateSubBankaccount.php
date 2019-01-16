<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/15
 * Time: 17:54
 */
use TransferEasyApi\SubBankaccount;
include_once '../../Api/SubBankaccount.php';

$data = [
    'individual' => [
        'name' => 'org_name',
        'country_code' => 'USD',
        'mobile' => '18866660000',
        'doc_type' => 'ID',
        'doc_number' => 'doc_number',
        'address' => 'address',
    ],
    'sub_bank_account' => [
        'currency' => 'USD',
        'country' => 'USA',
    ],
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

$param = [
    'apply_data' => json_encode($data),

    'id_file_front' => new \CURLFile('/file_path/upload.png'),
    'id_file_back' => new \CURLFile('/file_path/upload.png'),
    'passport_file' => new \CURLFile('/file_path/upload.png'),
    'address_evd_file' => new \CURLFile('/file_path/upload.png'),
];

$subBankaccount = new SubBankaccount();
$subBankaccount->indCreateSubBankaccount($param, $withFiles = true);

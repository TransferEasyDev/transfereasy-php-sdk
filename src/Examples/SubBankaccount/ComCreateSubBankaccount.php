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
    'company' => [
        'org_name' => 'org_name',
        'office_op_address' => '北京',
        'contact_name' => '负责人',
        'contact_email' => '10@3.com',
        'contact_phone' => '18866669999',
        'contact_country' => '中国',
        'contact_address' => '北京',
        'contact_position' => '法人',
        'website' => 'www.example.com',
        'company_type' => '有限责任公司 (LLC)',
        'industry' => '互联网计算机及电子服务',
        'major_funds_source' => '营业收入，住宿及物流',
        'year_transfer_amount' => '10000000',
        'piece_transfer_amount' => '100000',
    //    'credit_code' => '10@3.com',
        'business_code' => '001002003',
        'business_country' => 'CHN',
        'register_country' => 'HKG',
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

    'license_file' => new \CURLFile('/file_path/upload.png'),
    'office_reg_addr_evd_file' => new \CURLFile('/file_path/upload.png'),
    'beneficiary_evd_file' => new \CURLFile('/file_path/upload.png'),
    'bank_cert_evd_file' => new \CURLFile('/file_path/upload.png'),
    'contact_doc_file' => new \CURLFile('/file_path/upload.png'),
    'contact_address_file' => new \CURLFile('/file_path/upload.png'),
];

$subBankaccount = new SubBankaccount();
$subBankaccount->comCreateSubBankaccount($param, $withFiles = true);

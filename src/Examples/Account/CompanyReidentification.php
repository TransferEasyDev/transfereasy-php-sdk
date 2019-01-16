<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/15
 * Time: 15:37
 */
use TransferEasyApi\Account;
include_once '../../Api/Account.php';

$param = [
    'org_name' => '公司0115',
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
    'issue_bearer_share' => 'true',

    'license_file' => new \CURLFile('/file_path/upload.png'),
    'office_reg_addr_evd_file' => new \CURLFile('/file_path/upload.png'),
    'beneficiary_evd_file' => new \CURLFile('/file_path/upload.png'),
    'bank_cert_evd_file' => new \CURLFile('/file_path/upload.png'),
    'ownership_structure_file' => new \CURLFile('/file_path/upload.png'),
];


$account = new Account();
$account->companyReidentification($param, $withFiles = true);

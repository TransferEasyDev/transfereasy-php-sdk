<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/15
 * Time: 17:11
 */

use TransferEasyApi\Account;
include_once '../../Api/Account.php';

$param = [
    'name' => 'Example',
    'country' => 'USA',
    'mobile' => '18866669999',
    'doc_type' => 'ID',
    'doc_number' => '010101199909091010',
    'address' => '北京',

    'id_file_front' => new \CURLFile('/file_path/upload.png'),
    'id_file_back' => new \CURLFile('/file_path/upload.png'),
    'passport_file' => new \CURLFile('/file_path/upload.png'),
    'address_evd_file' => new \CURLFile('/file_path/upload.png'),
];


$account = new Account();
$account->individualIdentification($param, $withFiles = true);

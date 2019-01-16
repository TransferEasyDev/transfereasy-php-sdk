<?php
/**
 * Created by PhpStorm.
 * User => kongfm
 * Date => 2018/10/30
 * Time => 17 =>31
 */

use TransferEasyApi\BankAccount;
include_once '../../Api/BankAccount.php';

$bacc = new BankAccount();

$bank = [
    'name' => '招商银行',
    'branch' => '北京分行',
    'swift_code' => 'CMBCXXXX',
];

$holder = [
    'name' => 'TestHolder',
    'doc_type' => 'ID',
    'doc_number' => '110101199001010001',
    'contact' => '18888888888',
    'type' => 'INDIVIDUAL',
    # 'dob' => {'type' => basestring, 'required' => False},
    # 'country' => {'type' => basestring, 'required' => False},
    # 'address' => {'type' => basestring, 'required' => False},
];

$param = [
    [
        'bank' => $bank,
        'country' => 'HKG',
        'currency' => 'HKD',
        'bank_account_number' => 'TEST-777',
        'holder' => $holder,
        'purpose' => 'PAYER',

        'iban' => '00',
    ]
];

$bacc->createBaccs($param);

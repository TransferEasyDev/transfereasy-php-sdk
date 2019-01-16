<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 17:42
 */

use TransferEasyApi\Others;
include_once '../../Api/Others.php';

$oth = new Others();


$param = [
    "url" => "https://www.baidu.com/img/bd_logo1.png",
    "file_name" => "材料.pdf",
    "transfer_no" => "transfer_no",
    "memo" => "这⾥⾯包含了本次交易的所有信息"
];
$oth->evidence($param);

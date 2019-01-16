<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 14:21
 */
namespace TransferEasyApi;

include_once 'Request.php';

class Balance {
    public function getBalance($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/account/wallet/balance', $params);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 14:21
 */

namespace TransferEasyApi;

include_once 'Request.php';
include_once 'config.php';


class BankAccount {
    public function createBacc($params) {
        $request = new Request(IS_JSON);
        $request->post('/account/bank_account', json_encode($params));
    }

    public function createBaccs($params) {
        $request = new Request(IS_JSON);
        $request->post('/account/bank_accounts', json_encode($params));
    }

    public function getBacc($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/account/bank_account', $params);
    }

    public function getBaccs($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/account/bank_accounts', $params);
    }
}

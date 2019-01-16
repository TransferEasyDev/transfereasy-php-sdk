<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/15
 * Time: 17:17
 */

namespace TransferEasyApi;
include_once 'Request.php';
include_once 'config.php';


class SubBankaccount {

    public function comCreateSubBankaccount($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/account/company/sub_bank_account', $params, $withFiles);
    }

    public function comUpdateSubBankaccount($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->put('/account/company/sub_bank_account', $params, $withFiles);
    }

    public function indCreateSubBankaccount($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/account/individual/sub_bank_account', $params, $withFiles);
    }

    public function indUpdateSubBankaccount($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->put('/account/individual/sub_bank_account', $params, $withFiles);
    }

    public function getProgress($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/account/sub_bank_account/progress', $params);
    }

    public function getTransactions($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/account/sub_bank_account/transactions', $params);
    }

}

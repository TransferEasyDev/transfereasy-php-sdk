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

class Deposit {
    public function createDeposit($params) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/deposit', http_build_query($params));
    }

    public function getDeposit($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/deposit', $params);
    }

    public function getDeposits($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/deposits', $params);
    }

    public function cancelDeposit($params) {
        $request = new Request(IS_NOT_JSON);
        $request->del('/deposit', $params);
    }
}

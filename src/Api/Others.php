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


class Others {

    public function escrowAccounts($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/escrow_accounts', $params);
    }

    public function evidence($params) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/evidence', $params);
    }
}

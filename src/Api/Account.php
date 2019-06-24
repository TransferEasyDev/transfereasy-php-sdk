<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2019/1/7
 * Time: 15:58
 */
namespace TransferEasyApi;

include_once 'Request.php';
include_once 'config.php';


class Account {
    public function createAccount($params) {
        define('WITHOUT_TOKEN', false);
        $request = new Request(IS_NOT_JSON, WITHOUT_TOKEN);
        $request->post('/account', $params);
    }

    public function getAccount($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/account', $params);
    }

    public function companyIdentification($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/account/company/identification', $params, $withFiles);
    }

    public function companyReidentification($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->put('/account/company/identification', $params, $withFiles);
    }

    public function individualIdentification($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/account/individual/identification', $params, $withFiles);
    }

    public function individualReidentification($params, $withFiles) {
        $request = new Request(IS_NOT_JSON);
        $request->put('/account/individual/identification', $params, $withFiles);
    }

    public function development($params) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/development', $params);
    }

}

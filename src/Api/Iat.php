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

class IAT {

    public function createIat($params) {
        $request = new Request(IS_JSON);
        $request->post('/iat', json_encode($params));
    }

    public function getIat($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/iat', $params);
    }

    public function getIats($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/iats', $params);
    }

    public function repetitionIat($params) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/iat/repetition', $params);
    }
}

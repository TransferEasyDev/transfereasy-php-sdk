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


class Exchange {
    public function enquiry($params) {
        $request = new Request(IS_JSON);
        $request->post('/exchange/enquiry', json_encode($params));
    }

    public function createExchange($params) {
        $request = new Request(IS_JSON);
        $request->post('/exchange', json_encode($params));
    }

    public function getExchange($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/exchange', $params);
    }

    public function getExchanges($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/exchanges', $params);
    }

    public function payment($params) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/exchange/payment', $params);
    }
}

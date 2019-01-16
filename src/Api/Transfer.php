<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 14:22
 */


namespace TransferEasyApi;
include_once 'Request.php';
include_once 'config.php';


class Transfer {

    public function enquiry($params) {
        $request = new Request(IS_JSON);
        $request->post('/transfer/enquiry', json_encode($params));
    }

    public function createTransfer($params) {
        $request = new Request(IS_JSON);
        $request->post('/transfer', json_encode($params));
    }

    public function getTransfer($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/transfer', $params);
    }

    public function getTransfers($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/transfers', $params);
    }

    public function cancelTransfer($params) {
        $request = new Request(IS_NOT_JSON);
        $request->del('/transfer', $params);
    }

    public function repetitionTransfer($params) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/transfer/repetition', $params);
    }

    public function payment($params) {
        $request = new Request(IS_NOT_JSON);
        $request->post('/transfer/payment', $params);
    }
}

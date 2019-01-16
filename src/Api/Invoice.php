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

class Invoice {

    public function createInvoice($params) {
        $request = new Request(IS_JSON);
        $request->post('/invoice', json_encode($params));
    }

    public function updateInvoice($params) {
        $request = new Request(IS_JSON);
        $request->put('/invoice', json_encode($params));
    }

    public function getInvoice($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/invoice', $params);
    }

    public function getInvoices($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/invoices', $params);
    }

    public function cancelInvoice($params) {
        $request = new Request(IS_NOT_JSON);
        $request->del('/invoice', $params);
    }
}

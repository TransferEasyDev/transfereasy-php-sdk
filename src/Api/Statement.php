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


class Statement {

    public function download($params) {
        $request = new Request(IS_JSON);
        $request->get('/statement', json_encode($params));
    }
}

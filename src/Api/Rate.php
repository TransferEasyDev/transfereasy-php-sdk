<?php
/**
 * Created by PhpStorm.
 * User: kongfm
 * Date: 2018/10/30
 * Time: 18:35
 */


namespace TransferEasyApi;
include_once 'Request.php';
include_once 'config.php';


class Rate {

    public function getRate($params) {
        $request = new Request(IS_NOT_JSON);
        $request->get('/rate', $params);
    }
}

<?php

namespace TransferEasyApi;
include_once 'Message.php';
include_once 'config.php';

class Request
{
    protected $_config = [];

    const REQUEST_TIME = 10;

    public function __construct($isJson, $needToken=true) {

        if ($needToken) {
            $account_data = ['account_no' => ACCOUNT_NO, 'secret' => SECRET];
            $rs = $this->post('/oauth/token', $account_data, 'POST');
            $rs_json = json_decode($rs, true);
            $token = $rs_json['data']['token'];
            if($isJson == false){
                $this->_config['header'] = ["Authorization:Bearer ". $token];
            }
            else {
                $this->_config['header'] = ["Authorization:Bearer " . $token, "Content-Type:application/json; charset=utf-8"];
            }
        }
    }


    /**
     * 拼接url
     * @param $method string
     * @return string
     */
    protected function _joinUrl($method) {
        return sprintf("%s%s", TE_HOST, $method);
    }

    /**
     * 内部调用get请求
     * @param $method string
     * @param $data array
     * @return object | bool
     */
    public function get($method, $data) {
        $base_url = $this->_joinUrl($method);
        if (is_array($data) && count($data) > 0) {
            $param = http_build_query($data);
            $url = (!strpos($base_url, '?')) ? $base_url . "?" . $param : $base_url . "&" . $param;
        } else {
            $url = $base_url;
        }
        $rs = $this->_httpGet($url);
        echo $rs;
        return $rs;
    }

    /**
     * 内部调用post请求
     * @param $api_url
     * @param $data
     * @param $withFiles
     * @return object | bool
     */
    public function post($api_url, $data, $withFiles = false) {
        $url = $this->_joinUrl($api_url);
        $rs = $this->_httpPost($url, $data, 'POST', $withFiles);
        echo $rs;
        return $rs;
    }

    /**
     * 内部调用put请求
     * @param $method
     * @param $data
     * @param $withFiles
     * @return object | bool
     */
    public function put($method, $data, $withFiles = false) {
        $url = $this->_joinUrl($method);
        $rs = $this->_httpPost($url, $data, 'PUT', $withFiles);
        echo $rs;
        return $rs;
    }

    /**
     * 内部调用delete请求
     * @param $method
     * @param $data
     * @return object | bool
     */
    public function del($method, $data) {
        $url = $this->_joinUrl($method);
        $rs = $this->_httpPost($url, $data, 'DELETE');
        echo $rs;
        return $rs;
    }

    /**
     * curl-get请求
     * @param $url
     * @return object | bool
     */
    protected function _httpGet($url = "") {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->_config['header']);
        curl_setopt($curl, CURLOPT_TIMEOUT, self::REQUEST_TIME);
        curl_setopt($curl, CURLOPT_URL, $url);
        $res = curl_exec($curl);

        $info = curl_getinfo($curl);
        curl_close($curl);
        return $this->returnData($res, $info);
    }

    /**
     * curl-post请求
     * @param $url
     * @param $request_data
     * @param $request_type
     * @param $withFiles
     * @return object | bool
     */

    protected function _httpPost($url = "", $request_data = [], $request_type = 'POST', $withFiles = false) {
        echo "API--->" . $url;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, self::REQUEST_TIME);
        if ($withFiles) {
            $boundary = '---------------'.time().rand(1000, 99999);
            $this->_config['header']['Content-Type'] = "multipart/form-data;boundary=" . $boundary;
        }
        // 判断提交类型
        switch ($request_type) {
            case 'POST':
                curl_setopt($curl, CURLOPT_POST, true);
                break;
            case 'PUT':
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                break;
            case 'DELETE':
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
            default:
                return Message::msg(904);
                break;
        }

        curl_setopt($curl, CURLOPT_POSTFIELDS, $request_data);
        if ($this->_config['header']) {
            curl_setopt($curl, CURLOPT_HTTPHEADER, $this->_config['header']);
        }

        $res = curl_exec($curl);
        $info = curl_getinfo($curl);
        curl_close($curl);
        return $this->returnData($res, $info);
    }

    /**
     * 返回数据
     * @param $res
     * @param $info
     * @return object
     */
    protected function returnData($res, $info) {
        if ($info['http_code'] == 200) {
            return $res;
        } elseif ($info['http_code'] == 500 || $info['http_code'] == 0 ) {
            return Message::msg(500);
        } else {
            return Message::msg(903);
        }
    }
}


![TransferEasy](https://s.transfereasy.com/logo/logo-2-black.png)
<br>
![Travis](https://api.travis-ci.org/nukeop/nuclear.svg?branch=master)
# 汇通天下, 无处不达

* [官方网站](https://www.transfereasy.com)
* [注册体验](https://business.transfereasy.com/Home/register)
* [商务合作](https://www.transfereasy.com/home/merchant)


## 结构

```$xslt
└── src
    ├── Api       // API 
    └── Examples  // Demo
```

## 示例
```
/**
* 配置文件
* 
* └── src
*     └──Api
*        └── config.php
* */


namespace TransferEasyApi;

define("SECRET", "your_secret");            //登录transfereasy后台进入设置页面查看
define("ACCOUNT_NO", "your_account_no");    //登录transfereasy后台进入设置页面查看
define("TE_HOST", "https://stable-api.transfereasy.com");

```

```php
<?php
/**
 * Demo: 查询汇率
 */

use TransferEasyApi\Rate;
include_once '../../Api/Rate.php';

//1. 新建对象
$rate = new Rate();

//2. 准备参数
$param = [
    'sell_currency' => 'USD',
    'buy_currency' => 'CNY',
];

//3. 执行
$rate->getRate($param);


```

## 依赖

* 暂无

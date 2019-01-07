<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 19-1-7
 * Time: 下午1:04
 */

include ("account.php");
include 'curl.php';
//echo 2;

//var_dump($_GET['code']);
//var_dump($_GET['state']);

$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appID}&secret={$appsecret}&code={$_GET['code']}&grant_type=authorization_code";

$r = geturl($url);

var_dump($r['openid']);
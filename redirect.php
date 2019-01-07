<?php
/**
 * Created by PhpStorm.
 * User: j
 * Date: 19-1-7
 * Time: 下午1:04
 */

include_once ("account.php");
include_once 'curl.php';
//echo 2;

//var_dump($_GET['code']);
//var_dump($_GET['state']);

$appID = APPID;
$appSecret = APPSECRET;

$url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appID}&secret={$appSecret}&code={$_GET['code']}&grant_type=authorization_code";

$r = geturl($url);

var_dump($r['openid']);
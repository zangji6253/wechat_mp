<?php
include ("curl.php");
include ("account.php");
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appID}&secret={$appsecret}";

$result = geturl($url);
file_put_contents('access_token',$result['access_token']);

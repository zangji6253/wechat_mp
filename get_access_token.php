<?php
include ("curl.php");
$APPID="wx964215fb6863bdaf";
$APPSECRET="ea3d023e9620b3e1a49c454ea9098ed0";
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$APPID}&secret={$APPSECRET}";

$result = geturl($url);
file_put_contents('access_token',$result['access_token']);

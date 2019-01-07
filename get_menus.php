<?php
include 'curl.php';
include 'get_access_token.php';

$access_token = getAccessToken();

//var_dump($access_token);
$r = geturl("https://api.weixin.qq.com/cgi-bin/menu/get?access_token={$access_token}");

var_dump($r);

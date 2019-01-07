<?php
include_once 'curl.php';
include_once 'get_access_token.php';

$access_token = getAccessToken();

$r = geturl("https://api.weixin.qq.com/cgi-bin/menu/get?access_token={$access_token}");

var_dump($r);

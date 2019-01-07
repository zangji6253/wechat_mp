<?php
include 'curl.php';

$access_token=file_get_contents('access_token');

//var_dump($access_token);
$r = geturl("https://api.weixin.qq.com/cgi-bin/menu/get?access_token={$access_token}");

var_dump($r);

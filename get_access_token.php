<?php
include_once("curl.php");
include_once("account.php");

function getAccessToken()
{
    $appID = APPID;
    $appSecret = APPSECRET;

    $token = json_decode(file_get_contents('access_token.json'));

    if (!$token || !$token->access_token || time() > $token->expires_time) {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$appID}&secret={$appSecret}";
        $result = geturl($url);
        file_put_contents('access_token.json', json_encode(['access_token' => $result['access_token'], 'expires_time' => (time() + 3600)]));
        return $result['access_token'];
    } else {
        return $token->access_token;
    }
}



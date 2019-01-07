<?php
include("curl.php");
include("account.php");

function getAccessToken()
{
    $token = json_decode(file_get_contents('access_token.json'));

    if (!$token || time() > $token->expires_time) {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={APPID}&secret={APPSECRET}";

        $result = geturl($url);
        file_put_contents('access_token', json_encode(['access_token' => $result['access_token'], 'expires_time' => (time() + 3600)]));
    } else {
        return $token->access_token;
    }
}



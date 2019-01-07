<?php
include_once("curl.php");
include_once("account.php");

getAccessToken();

function getAccessToken()
{
    var_dump(APPID);
    $token = json_decode(file_get_contents('access_token.json'));

    if (!$token || $token->access_token || time() > $token->expires_time) {
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={APPID}&secret={APPSECRET}";

        $result = geturl($url);
        var_dump($result);
        file_put_contents('access_token.json', json_encode(['access_token' => $result['access_token'], 'expires_time' => (time() + 3600)]));

        return $result['access_token'];
    } else {
        var_dump($token);
        return $token->access_token;
    }
}



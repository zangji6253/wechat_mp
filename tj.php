<?php
include ("account.php");
$REDIRECT_URI = urlencode("http://www.coderxx.com/redirect");
$SCOPE = 'snsapi_base';
$STATE = '123';
//var_dump("location:https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appID}&redirect_uri={$REDIRECT_URI}&response_type=code&scope={$SCOPE}&state={$STATE}#wechat_redirect");
//exit;
header("location:https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appID}&redirect_uri={$REDIRECT_URI}&response_type=code&scope={$SCOPE}&state={$STATE}#wechat_redirect");

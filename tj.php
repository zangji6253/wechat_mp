<?php
include ("account.php");
$REDIRECT_URI = "http://www.coderxx.com/redirect";
header("location:https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appID}&redirect_uri={$REDIRECT_URI}&response_type=code&scope=SCOPE&state=STATE#wechat_redirect");

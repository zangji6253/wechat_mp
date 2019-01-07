<?php
include ("account.php");
if (checkSignature())
    echo $_GET["echostr"];
else
    echo -1;

function checkSignature()
{
    $tmpArr = array(TOKEN, $_GET['timestamp'], $_GET["nonce"]);
    sort($tmpArr, SORT_STRING);
    $tmpStr = implode($tmpArr);
    $tmpStr = sha1($tmpStr);

    if ($_GET["signature"] == $tmpStr) {
        return true;
    } else {
        return false;
    }
}

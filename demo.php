<?php

include_once "wxBizDataCrypt.php";


$appid = 'wx5e8de3f72d718434';
$sessionKey = '+BpieTLlYKKmBImU+pyjzw==';

$encryptedData="tjuf22fn/DPOy30aHpdEi4bphOnHMRLUVt2LoOxIS+iJ23HZ+0RRMVQgmtuWO4eMmdqUQ+FXF5ahfCoPyAle1TwSsNI3D/+oSp7/A0sG4YmKSHTqLiJNV1RJNjT7cxPltEkvlAsc8u8YAkwrcoA1UugZXDEDsI/LK/KW2mMs4A9qLYtTkRxm8w1dNb3eyJIhEVCs2hl1rzPJglp+SgewJg==";

$iv = 'VoZLkaOwbU8qHKxXyfLwhg==';

$pc = new WXBizDataCrypt($appid, $sessionKey);
$errCode = $pc->decryptData($encryptedData, $iv, $data );

if ($errCode == 0) {
    print($data . "\n");
} else {
    print($errCode . "\n");
}

?>
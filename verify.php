<?php
$access_token = 'ZgaKc15RIEfj4T/0ajy+70Bq3/ctRctUliQYMKAhBOp6F1jVlVSMSJ6aJaaAMhSBMHWoi5TuJY2jJR83YSPtW0LvRY5QP5ZYpI7JkCt2yULCPGYINHz7d/7tXvZPxp4zFxrHpmJmOF6DBJA+ub2vEwdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
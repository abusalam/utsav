<?php

//header('Content-Type: text/html;');
$username = "dmmalda"; //username of the department 
$password = "Malda@123#$"; //password of the department 
$senderid = "DMMLDA"; //senderid of the deparment 
//$message = "Your Normal message here "; //message content 
//$messageUnicode = "????????????????????????? "; //message content in unicode 
//$mobileno = "9434025206"; //if single sms need to be send use mobileno keyword 
//$mobileNos = "86XXXXXX72,79XXXXXX00"; //if bulk sms need to send use mobileNos as keyword and mobile number seperated by commas as value 
$deptSecureKey = "dee03d36-e60c-4efc-9d34-650159b1fc9a"; //departsecure key for encryption of message... 
$encryp_password = sha1(trim($password));

//call method and pass value to send single sms, uncomment next line to use 
//sendSingleSMS($username,$encryp_password,$senderid,$message,$mobileno,$deptSecureKey); 
//call method and pass value to send otp sms, uncomment next line to use 
//sendOtpSMS($username,$encryp_password,$senderid,$message,$mobileno,$deptSecureKey); 
//call this method and pass value to send bulk sms, uncomment next line to use 
//sendBulkSMS($username,$encryp_password,$senderid,$message,$mobileNos,$deptSecureKey); 
//call this method for sending single unicode sms, uncomment next line to use 
//sendSingleUnicode($username,$encryp_password,$senderid,$messageUnicode,$mobileno,$deptSecureKey); 
//call this method for sending single unicode otp sms, uncomment next line to use 
//sendUnicodeOtpSMS($username,$encryp_password,$senderid,$messageUnicode,$mobileno,$deptSecureKey); 
//call this method to send bulk unicode sms, uncomment next line to use 
//sendBulkUnicode($username,$encryp_password,$senderid,$messageUnicode,$mobileNos,$deptSecureKey); 
//function to send sms using by making http connection 
function post_to_url($url, $data) {
    $fields = '';
    foreach ($data as $key => $value) {
        $fields .= $key . '=' . $value . '&';
    }
    rtrim($fields, '&');
    $post = curl_init();
    curl_setopt($post, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($post, CURLOPT_URL, $url);
    curl_setopt($post, CURLOPT_POST, count($data));
    curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($post); //result from mobile seva server 
    return $result; //output from server displayed 
    curl_close($post);
}

//function to send unicode sms by making http connection 
function post_to_url_unicode($url, $data) {
    $fields = '';
    foreach ($data as $key => $value) {
        $fields .= $key . '=' . urlencode($value) . '&';
    }
    rtrim($fields, '&');
    $post = curl_init();
    curl_setopt($post, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($post, CURLOPT_URL, $url);
    curl_setopt($post, CURLOPT_POST, count($data));
    curl_setopt($post, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($post, CURLOPT_HTTPHEADER, array("Content-Type:application/x-www-form-urlencoded"));
    curl_setopt($post, CURLOPT_HTTPHEADER, array("Content-length:"
        . strlen($fields)));
    curl_setopt($post, CURLOPT_HTTPHEADER, array("User-Agent:Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt)"));
    curl_setopt($post, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($post); //result from mobile seva server
    //echo $result = curl_exec($post); //result from mobile seva server 
    curl_close($post);
    return $result;
}

//function to convert unicode text in UTF-8 format 
function string_to_finalmessage($message) {
    $finalmessage = "";
    $sss = "";
    for ($i = 0; $i < mb_strlen($message, "UTF-8"); $i++) {
        $sss = mb_substr($message, $i, 1, "utf-8");
        $a = 0;
        $abc = "&#" . ordutf8($sss, $a) . ";";
        $finalmessage .= $abc;
    }
    return $finalmessage;
}

//function to convet utf8 to html entity 
function ordutf8($string, &$offset) {
    $code = ord(substr($string, $offset, 1));
    if ($code >= 128) { //otherwise 0xxxxxxx 
        if ($code < 224)
            $bytesnumber = 2; //110xxxxx 
        else if ($code < 240)
            $bytesnumber = 3; //1110xxxxelse if ($code < 248) $bytesnumber = 4; //11110xxx 
        $codetemp = $code - 192 - ($bytesnumber > 2 ? 32 : 0) -
                ($bytesnumber > 3 ? 16 : 0);
        for ($i = 2; $i <= $bytesnumber; $i++) {
            $offset ++;
            $code2 = ord(substr($string, $offset, 1)) - 128; //10xxxxxx 
            $codetemp = $codetemp * 64 + $code2;
        }
        $code = $codetemp;
    }
    return $code;
}

//Function to send single sms 
function sendSingleSMS($username, $encryp_password, $senderid, $message, $mobileno, $deptSecureKey) {
    $key = hash('sha512', trim($username) . trim($senderid) . trim($message) . trim($deptSecureKey));
    $data = array(
        "username" => trim($username),
        "password" => trim($encryp_password),
        "senderid" => trim($senderid),
        "content" => trim($message),
        "smsservicetype" => "singlemsg",
        "mobileno" => trim($mobileno),
        "key" => trim($key)
    );
    return post_to_url("https://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data); //calling post_to_url to send sms 
}

//Function to send otp sms 
function sendOtpSMS($username, $encryp_password, $senderid, $message, $mobileno, $deptSecureKey) {
    $key = hash('sha512', trim($username) . trim($senderid) . trim($message) . trim($deptSecureKey));
    $data = array(
        "username" => trim($username),
        "password" => trim($encryp_password),
        "senderid" => trim($senderid),
        "content" => trim($message),
        "smsservicetype" => "otpmsg",
        "mobileno" => trim($mobileno),
        "key" => trim($key)
    );
    post_to_url("https://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data); //calling post_to_url to send otp sms 
}

//function to send bulk sms 

function sendBulkSMS($username, $encryp_password, $senderid, $message, $mobileNos, $deptSecureKey) {
    $key = hash('sha512', trim($username) . trim($senderid) . trim($message) . trim($deptSecureKey));
    $data = array(
        "username" => trim($username),
        "password" => trim($encryp_password),
        "senderid" => trim($senderid),
        "content" => trim($message),
        "smsservicetype" => "bulkmsg",
        "bulkmobno" => trim($mobileNos),
        "key" => trim($key)
    );
    post_to_url("https://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data); //calling post_to_url to send bulk sms 
}

//function to send single unicode sms 
function sendSingleUnicode($username, $encryp_password, $senderid, $messageUnicode, $mobileno, $deptSecureKey) {
    $finalmessage = string_to_finalmessage(trim($messageUnicode));
    $key = hash('sha512', trim($username) . trim($senderid) . trim($finalmessage) . trim($deptSecureKey));
    $data = array(
        "username" => trim($username),
        "password" => trim($encryp_password),
        "senderid" => trim($senderid),
        "content" => trim($finalmessage),
        "smsservicetype" => "unicodemsg",
        "mobileno" => trim($mobileno),
        "key" => trim($key)
    );
   $result= post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data); //calling post_to_url_unicode to send single unicode sms 
   return $result;
}

//function to send bulk unicode sms 
function sendBulkUnicode($username, $encryp_password, $senderid, $messageUnicode, $mobileNos, $deptSecureKey) {
    $finalmessage = string_to_finalmessage(trim($messageUnicode));
    $key = hash('sha512', trim($username) . trim($senderid) . trim($finalmessage) . trim($deptSecureKey));
    $data = array(
        "username" => trim($username), "password" => trim($encryp_password),
        "senderid" => trim($senderid),
        "content" => trim($finalmessage),
        "smsservicetype" => "unicodemsg",
        "bulkmobno" => trim($mobileNos),
        "key" => trim($key)
    );
    post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data); //calling post_to_url_unicode to send bulk unicode sms 
}

//function to send single unicode otp sms 
function sendUnicodeOtpSMS($username, $encryp_password, $senderid, $messageUnicode, $mobileno, $deptSecureKey) {
    $finalmessage = string_to_finalmessage(trim($messageUnicode));
    $key = hash('sha512', trim($username) . trim($senderid) . trim($finalmessage) . trim($deptSecureKey));
    $data = array(
        "username" => trim($username),
        "password" => trim($encryp_password),
        "senderid" => trim($senderid),
        "content" => trim($finalmessage),
        "smsservicetype" => "unicodeotpmsg",
        "mobileno" => trim($mobileno),
        "key" => trim($key)
    );
    post_to_url_unicode("https://msdgweb.mgov.gov.in/esms/sendsmsrequest", $data); //calling post_to_url_unicode to send single unicode sms 
}

?>

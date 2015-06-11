<?php
// require 'define.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class EmailMsg
{
    function signupGreeting($username, $password)
    {
        $msg="Hello ".$username.",\n";
        $msg.="Thanks for signing up on Samarthya Online learning Portal.";
        $msg.="The Following are the credentials for your login: \n";
        $msg.="Username : ".$username."\n";
        $msg.="Password : ".$password."\n";
        $msg.="Thanks and Regards,\n";
        $msg.="Samarthya Online learning Portal";
        return $msg;
    }
    
    
    function forgotPassword($username,$email, $password)
    {
        $msg="Hello ".$username.",\n";
        $msg.="The following are your credentials for Samarthya Online learning Portal.";
        $msg.="Username : ".$username."\n";
        $msg.="Password : ".$password."\n";
        $msg.="Thanks and Regards,\n";
        $msg.="Samarthya Online learning Portal";
        return $msg;
    }
    
}
class MobileMsg 
{
    function otpMessage($otpNum)
    {
        $otp="Welcome to Samarthya Online learning Portal, \n Your OTP Code is ".$otpNum;
        return $otp;
    }


    function sendPhoneMessage($sendPhone, $sendMessage)
    {
        $msgObj=new MobileMsg();
       $data=array();
        $data['user']=constant("SMSPHONE_USERNAME");
        $data['password']=constant("SMSPHONE_PASSWORD");
        $data['msisdn']="91".$sendPhone;
        $data['sid']=constant("SMSPHONE_REGNUMBER");
        $data['msg']=$sendMessage;
        $data['fl']=constant("SMSPHONE_FL");

       list($header, $content) = $msgObj->PostRequest(constant("SMSPHONE_SENDURL"), "", $data); 
       return $content;
    }



    function PostRequest($url, $referer, $_data) {
     $data = array();
     while(list($n,$v) = each($_data)){
     $data[] = "$n=$v";
     }
     $data = implode('&', $data);
     $url = parse_url($url);
     if ($url['scheme'] != 'http') {
     die('Only HTTP request are supported !');
     }

     $host = $url['host'];
     $path = $url['path'];
     $fp = fsockopen($host, 80);
     fputs($fp, "POST $path HTTP/1.1\r\n");
     fputs($fp, "Host: $host\r\n");
     fputs($fp, "Referer: $referer\r\n");
     fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
     fputs($fp, "Content-length: ". strlen($data) ."\r\n");
     fputs($fp, "Connection: close\r\n\r\n");
     fputs($fp, $data);
     $result = '';
     while(!feof($fp)) {
     $result .= fgets($fp, 128);
     }
     fclose($fp);
     $result = explode("\r\n\r\n", $result, 2);
     $header = isset($result[0]) ? $result[0] : '';
     $content = isset($result[1]) ? $result[1] : '';
     return array($header, $content);
    } 

}
<?php
/*
Plugin Name: AdsCaptcha
Plugin URI: http://www.minteye.com
Description: Why pay for CAPTCHAs when AdsCaptcha can make you money? AdsCaptcha provides high-level internet security, and you earn a share of every typed ad. Now that’s efficient!
Version: 1.1.0
Author: AdsCaptcha
Author URI: http://www.minteye.com
*/

define('ADSCAPTCHA_API', 'api.minteye.com');

function getCaptcha($captchaId, $publicKey) {

	if (!empty($_SERVER['HTTPS']) && ("off" != $_SERVER['HTTPS'])) {
		$protocol = "https://";
	} else {
        $protocol = "http://";
    }
	$dummy = rand(1, 9999999999);
	$urlGet = $protocol . ADSCAPTCHA_API . "/Get.aspx";
	$urlNoScript = $protocol . ADSCAPTCHA_API . "/NoScript.aspx";
	$params = "?CaptchaId="  . $captchaId . 
			  "&PublicKey=" . $publicKey .
			  "&Dummy=" . $dummy;
			  
	$result  = "<script src='" . $urlGet . $params . "' type='text/javascript'></script>\n";
	$result .= "<noscript>\n";
	$result .= "\t<iframe src='" . $urlNoScript . $params . "' width='300' height='110' frameborder='0' marginheight='0' marginwidth='0' scrolling='no'></iframe>\n";
	$result .= "\t<table>\n";
	$result .= "\t<tr><td>Type challenge here:</td><td><input type='text' name='adscaptcha_response_field' value='' /></td></tr>\n";
	$result .= "\t<tr><td>Paste code here:</td><td><input type='text' name='adscaptcha_challenge_field' value='' /></td></tr>\n";
	$result .= "\t</table>\n";
	$result .= "</noscript>\n";
	
	return $result;	
}

function ValidateCaptcha($captchaId, $privateKey) {
    global $_POST, $_SERVER;

	$host = ADSCAPTCHA_API; 
	$path = "/Validate.aspx";
	$data = "CaptchaId="      . $captchaId .
			  "&PrivateKey="    . $privateKey .
			  "&ChallengeCode=" . $_POST['adscaptcha_challenge_field'] .
			  "&UserResponse="  . $_POST['adscaptcha_response_field'] .
			  "&RemoteAddress=" . $_SERVER["REMOTE_ADDR"];

    $result = HttpPost($host, $path, $data);
	return $result;
}

function FixEncoding($str) { 	
	$curr_encoding = mb_detect_encoding($str) ; 
	
	if($curr_encoding == "UTF-8" && mb_check_encoding($str,"UTF-8")) {
		return $str; 
	} else {
		return utf8_encode($str); 
	}
}

function HttpPost($host, $path, $data, $port = 80) {
	$data = FixEncoding($data);
	
	$http_request  = "POST $path HTTP/1.0\r\n";
	$http_request .= "Host: $host\r\n";
	$http_request .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$http_request .= "Content-Length: " . strlen($data) . "\r\n";
	$http_request .= "\r\n";
	$http_request .= $data;

	$response = '';
	if (($fs = @fsockopen($host, $port, $errno, $errstr, 10)) == false) {
		die ('Could not open socket! ' . $errstr);
	}
	
	fwrite($fs, $http_request);

	while (!feof($fs))
		$response .= fgets($fs, 1160);
	fclose($fs);
	
	$response = explode("\r\n\r\n", $response, 2);
	return $response[1];
}
?>

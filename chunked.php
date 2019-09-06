<?php
//GOOGLE: php chunked response(SERVER send chunked)
header('Content-Encoding', 'chunked');
header('Transfer-Encoding', 'chunked');
header('Content-Type: application/json; charset=utf-8');// https://blog.longwin.com.tw/2007/05/json_header_2007/
//header('Content-Type', 'text/html');
header('Connection', 'keep-alive');

//flush();
//ob_flush();


set_time_limit(0);

/*
//https://inchoo.net/dev-talk/chunked-transfer-encoding/
for ($i = 0; $i < 1000; $i++) {
$data = '{"message":"One chunked result."}';
echo strlen($data)."\r\n";
echo $data."\r\n";
  flush();
  ob_flush();
  sleep(2);
}
*/
while (true) {
	$data = '{"message":"One chunked result."}';
	//echo strlen($data)."\r\n";
	echo $data."\r\n";
    flush();
	ob_flush();
	usleep(1000000);//1sec //https://www.php.net/manual/en/function.usleep.php
	
}


?>
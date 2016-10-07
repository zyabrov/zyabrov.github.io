<?php 



 $ch = curl_init();

 $data = array('Login' => 'admin', 'Password' => 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec');

         $headers = array( 
             "Accept: application/json", 
            "Content-Type: application/json; charset=utf-8", 
			 "Content-Length: 0",
			 "X-WO-API-APP-ID: 45"
         ); 

curl_setopt($ch, CURLOPT_URL, 'http://91.217.67.54:7200/api/account');
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
 curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

curl_exec($ch);

 $ch = curl_init();

 $data = array('user_full_name' => 'Test', 'user_phone' => '380636310340');

         $headers = array( 
            "Accept: application/json", 
             "Content-Type: application/json; charset=utf-8", 
			"Content-Length: 0",
			 "X-WO-API-APP-ID: your_app_id",
			 "Authorization: Basic YWRtaW46YzdhZDQ0Y2JhZDc2MmE1ZGEwYTQ1MmY5ZTg1NGZkYzFlMGU3YTUyYTM4MDE1ZjIzZjNlYWIxZDgwYjkzMWRkNDcyNjM0ZGZhYzcxY2QzNGViYzM1ZDE2YWI3ZmI4YTkwYzgxZjk3NTExM2Q2Yzc1MzhkYzY5ZGQ4ZGU5MDc3ZWM=="
         ); 

 curl_setopt($ch, CURLOPT_URL, 'http://91.217.67.54:7200/api/weborders');
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
 curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

 curl_exec($ch);



?>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "7200",
  CURLOPT_URL => "http://91.217.67.54:7200/api/account",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{"login":"guest","password":"b0e0ec7fa0a89577c9341c16cff870789221b310a02cc465f464789407f83f377a87a97d635cac2666147a8fb5fd27d56dea3d4ceba1fc7d02f422dda6794e3c"}',
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "content-type: application/json; charset=utf-8",
    "x-wo-api-app-id: 45"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "7200",
  CURLOPT_URL => "http://91.217.67.54:7200/api/weborders",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => '{"user_full_name":"cdbdf","user_phone":"380636310340"}',
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "authorization: Basic Z3Vlc3Q6YjBlMGVjN2ZhMGE4OTU3N2M5MzQxYzE2Y2ZmODcwNzg5MjIxYjMxMGEwMmNjNDY1ZjQ2NDc4OTQwN2Y4M2YzNzdhODdhOTdkNjM1Y2FjMjY2NjE0N2E4ZmI1ZmQyN2Q1NmRlYTNkNGNlYmExZmM3ZDAyZjQyMmRkYTY3OTRlM2M=",
    "content-type: application/json; charset=utf-8",
    "x-wo-api-app-id: 45"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
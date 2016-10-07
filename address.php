<?php 
$lat=$_REQUEST['latitude'];
$lon=$_REQUEST['longitude'];

//$lat='46.42987823486328';
//$lon='30.72199249267578';

$homepage = file_get_contents('https://geocode-maps.yandex.ru/1.x/?format=json&geocode='.$lon.','.$lat.'');
$json=json_decode($homepage, true);

//print_r($json);
echo $json['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['name'];
?>
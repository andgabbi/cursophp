<?php

/*$data = new DateTime();
echo $data->format('d-m-Y');
echo '<br>';
echo $data->format('d-m-Y H:i:s');
var_dump($data);*/

/*$data = new DateTime();

$intervalo = new DateInterval('P5Y10M5DT10H5M30S');
$data->add($intervalo);

var_dump($data);*/

$date = new DateTime();
$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

$intervalo = new DateInterval('P5DT10H50M');
$date->sub($intervalo);

echo $date->format('d-m-Y H:i:s');



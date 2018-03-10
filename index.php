<?php
$url = "http://104.18.39.47/apiv2/tv/0/1/0";

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Host: app.playerlatino.net"
  )
);

$context = stream_context_create($options);
$file = file_get_contents($url, false, $context);
echo $file;
?>

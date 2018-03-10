<?php
$url = "http://104.18.39.47/apiv2/tv/0/1/0";

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Host: app.playerlatino.net"
  )
);

$context = stream_context_create($options);
$json = file_get_contents($url, false, $context);
$json_a = json_decode($json);
$reg_exUrl = "/(http|https|rtsp|rtmp|:)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

foreach ($json_a as $k => $v) {
preg_match("/src(.*)\"/i", $v[3], $results);
echo $results;
}
?>

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
$reg_exUrl = "/src/i";

foreach ($json_a as $k => $v) {
if(!preg_match($reg_exUrl, $v[3], $data)){
  echo "<div>" . $data[0] . $v[3] . "</div>";
}else{
}
}
?>
